<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>Wouff - Admin</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="/css/materialize/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="/css/materialize/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link rel="stylesheet" href="/css/admin.css">
  <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css"> -->

</head>
<body>

    <a href="#" data-target="slide-out" class="sidenav-trigger"><i class="material-icons">menu</i></a>

    <div class="admin-navbar">
        <ul id="slide-out" class="sidenav sidenav-fixed cyan darken-1 ">
            <li>
                <a href="#!" class="blue-grey-text text-darken-4" > 
                    <i class="blue-grey-text text-darken-4 material-icons small">insert_chart</i>
                    Dashboard
                </a>
            </li>
            <li>
                <a href="#!" class="blue-grey-text text-darken-4">
                    <i class="blue-grey-text text-darken-4 material-icons small">people</i> Users</a></li>
            <li>
                <a href="#!" class="blue-grey-text text-darken-4">
                    <i class="blue-grey-text text-darken-4 material-icons small">pets</i>
                    Dogs
                </a>
            </li>
            <li>
                <a href="#!" class="blue-grey-text text-darken-4">
                    <i class="blue-grey-text text-darken-4 material-icons small">assignment</i>
                    Adoptions
                </a>
            </li>
        </ul>
    </div>

    @yield('body')  
    





  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="/js/materialize/materialize.js"></script>
  <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script> -->
  <script src="/js/materialize/init.js"></script>

  </body>
</html>






