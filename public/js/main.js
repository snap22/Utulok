function validateUserForm()
{

}

function validateEmail(element)
{
    let email = removeWhitespace(element.value);
    let emailRegex = /^(.+)@(.+){2,}\.(.){2,3}$/;

    let error = new ErrorHolder(element);

    if (email.length > 100)
    {
        error.addError("Email cannot be longer than 100 characters!");
    }
    else if (email.length < 5 )
    {
        error.addError("Email cannot be shorter than 5 characters!");
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

    if (phoneNumber.length > 0 && phoneNumber.length < 9)
    {
        error.addError("Phone number must be at least 9 characters long.");
    }
    else if (phoneNumber.length > 20)
    {
        error.addError("Phone number must be less than 20 characters long.");
    }

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

    if (! textRegexp.test(text))
    {
        error.addError("This field must contain only alphabetical letters, the length must be between 3 and 50 characters.")
    }

    error.showErrors(element.nextElementSibling.firstElementChild);
    element.value = text;
}

function validatePassword(element)
{
    let password = element.value;
    let error = new ErrorHolder(element);

    if (password.length < 6)
    {
        error.addError("Password must be at least than 6 characters long!");
    }
    else if (password.length > 60)
    {
        error.addError("Password cannot be longer than 60 characters!");
    }

    error.showErrors(element.nextElementSibling.firstElementChild);
}

function removeWhitespace(value)
{
    return value.replace(/\s/g,''); 
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