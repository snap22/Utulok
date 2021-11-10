<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>Wouff - Admin</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="/css/materialize/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <!-- <link href="/css/materialize/style.css" type="text/css" rel="stylesheet" media="screen,projection"/> -->
  <link rel="stylesheet" href="/css/admin.css">
  <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css"> -->

</head>
<body>

    <x-admin.admin-navbar />

    <div class="container">
      <div class="row">
        <div class="col s10 offset-s2">
          @yield('body') 
        </div>
      </div>
    </div>
     
    





  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="/js/materialize/materialize.js"></script>
  <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script> -->
  <script src="/js/materialize/init.js"></script>

  </body>
</html>






