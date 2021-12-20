function validateUserForm(form)
{
    let inputs = form.getElementsByTagName("INPUT");

    for (const input of inputs) {
        if (isInvalidInput(input))
        {
            return false;
        }
    }
    return true;
}

function isInvalidInput(element)
{
    return element.classList.contains("invalid-input");
}

function validateZip(element)
{
    let zip = removeWhitespace(element.value);
    let zipRegex = /^[0-9]{5}$/;
    let error = new ErrorHolder(element);

    if (zip.length == 4)
    {
        zip = "0" + String(zip);
        element.value = zip;
    }

    if (!zipRegex.test(zip))
    {
        error.addError("Zip code should contain 5 digits.")
    }
    error.showErrors(element.nextElementSibling.firstElementChild);
}

function validateContact(element, min, max)
{
    let value = removeWhitespace(element.value);
    let error = new ErrorHolder(element);
    let validator = new LengthValidator(min, max);

    validator.validate(error, value);

    error.showErrors(element.nextElementSibling.firstElementChild);
}

function validateEmail(element, validateLength=true)
{
    let email = removeWhitespace(element.value);
    let emailRegex = /^(.+)@(.+){2,}\.(.){2,3}$/;

    let error = new ErrorHolder(element);

    if (validateLength)
    {
        let validator = new LengthValidator(5, 100, fieldName="Email");
        validator.validate(error, email);
    }
    

    if (! emailRegex.test(email))
    {
        error.addError("Use a valid email address!");
    }

    element.value = email;
    error.showErrors(element.nextElementSibling.firstElementChild);
}

function validatePhoneNumber(element)
{
    let phoneNumber = removeWhitespace(element.value); 
    let phoneRegex = /^[+]?[0-9]{9,20}$/;

    let error = new ErrorHolder(element);
    let validator = new LengthValidator(9, 20, required=false, fieldName="Phone number");

    validator.validate(error, phoneNumber);

    if (phoneNumber.length > 0 &&  ! phoneRegex.test(phoneNumber))
    {
        error.addError("Please input your phone number in XXXX XXX XXX or +XXX XXX XXX XXX format where X is a number")
    }

    element.value = phoneNumber;
    error.showErrors(element.nextElementSibling.firstElementChild);
}

function validateName(element)
{
    let text = removeWhitespace(element.value);
    let textRegexp = /^[áäčďéíĺľňóôŕšťúýžÁÄČĎÉÍĹĽŇÓÔŔŠŤÚÝŽa-zA-Z]{3,50}$/;
    let error = new ErrorHolder(element);
    let validator = new LengthValidator(3, 50);
    
    validator.validate(error, text);

    if (! textRegexp.test(text))
    {
        error.addError("This field must contain only alphabetical letters.");
    }

    error.showErrors(element.nextElementSibling.firstElementChild);
    element.value = text;
}

function validatePassword(element)
{
    let password = element.value;
    let error = new ErrorHolder(element);
    let validator = new LengthValidator(6, 60, fieldName="Password");

    validator.validate(error, password);
    error.showErrors(element.nextElementSibling.firstElementChild);
}

function removeWhitespace(value)
{
    return value.replace(/\s/g,''); 
}

class LengthValidator
{
    constructor(min, max,required=true, fieldName="This field")
    {
        this.min = min;
        this.max = max;
        this.required = required;
        this.fieldName = fieldName;
    }

    validate(errorHolder, value)
    {
        let isValid = true;

        if (this.required && value.length == 0)
        {
            errorHolder.addError(this.fieldName + " is required!");
            isValid = false;
        }
        else if (value.length > 0 && value.length < this.min)
        {
            errorHolder.addError(this.fieldName + " must be at least " + this.min + " characters long!");
            isValid = false;
        }
        else if (value.length > this.max)
        {
            errorHolder.addError(this.fieldName + " cannot be longer than " + this.max + " characters!");
            isValid = false;
        }

        return isValid;
    }
}

class ErrorHolder
{
    constructor(input)
    {
        this.element = input;
        this.errors = [];

        if (this.element.classList.contains("invalid-input"))
        {
            this.element.classList.remove("invalid-input");
        }
    }

    addError(message)
    {
        this.errors.push(message);
    }

    showErrors(errorElement)
    {
        errorElement.innerHTML = "";

        if (this.hasErrors())
        {
            this.element.classList.add("invalid-input");
        }
        for (const msg of this.errors) {
            errorElement.innerHTML += msg + "<br>";
        }
    }

    hasErrors()
    {
        return (this.errors.length > 0);
    }
}

//  **** AJAX REQUESTY ****
let pageNum = 2;
function loadData(button)
{
    button.addEventListener("click", function(event)
    {
        event.preventDefault();
    });
    var xmlhttp = new XMLHttpRequest();
    // xmlhttp.responseType = "json";

    div = document.getElementById("dogsDiv");

    xmlhttp.onreadystatechange = function() {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {   // XMLHttpRequest.DONE == 4
            var data = JSON.parse(xmlhttp.responseText)

            if (data['hasNextPage'] === false)
            {
                button.disabled = true;
                button.style.display = "none";
            }

            div.innerHTML += data['html'];
        }
    };
    
    
    xmlhttp.open("GET", "browse?page=" + pageNum, true);
    xmlhttp.setRequestHeader("X-Requested-With", "XMLHttpRequest");
    xmlhttp.send();
    pageNum++;
}

// <button type="button" onclick="sendRequest(this)" class="contact-button"> AJAX Send </button> <br>  
// function sendRequest(button)
// {
//     button.addEventListener("click", function(event)
//     {
//         event.preventDefault();
//     });

//     var token = document.getElementsByName('_token')[0].value;

//     var xhttp = new XMLHttpRequest();
//     xhttp.open("POST", "contact/ajax");
//     xhttp.onreadystatechange = function() 
//     {
//         if (xhttp.readyState == 4 && xhttp.status == 200) 
//         {
//             // var data = JSON.parse(xhttp.responseText)
//             // console.log(data['msg']);
//             console.log(xhttp.responseText);
//         }
//      }

//     var title = document.getElementsByName("contact_title")[0].value;
//     var email = document.getElementsByName("contact_email")[0].value;
//     var message = document.getElementsByName("contact_message")[0].value;

//     var params = "contact_title=" + title + "&contact_email=" + email + "&contact_message=" + message;

//     xhttp.open("post", "contact/ajax");
//     xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
//     xhttp.setRequestHeader('X-CSRF-TOKEN', token);
    
//     xhttp.send(params);
//     console.log("Odoslalo sa: " + params);
// }
