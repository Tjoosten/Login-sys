<!DOCTYPE html>
<html lang="nl">
  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Simple login system for CodeIgniter">
    <meta name="author" content="Tim Joosten">
    
    <link rel="icon" href="/assets/ico/favicon.ico">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">

    <!-- Costum styles -->
    <style type="text/css">
      body {
        margin-top: 65px;
      } 
    </style>

    <title>Login system for CodeIgniter.</title>
  </head>
  <body>
    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Login-sys</a>
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav navbar-right">
            <li>
              <a title="Create new user" href="">
                Create new user
              </a>
            </li>

            <li>
              <a title="Logged out" href="/index.php/home/logout">
                Logout
              </a>
            </li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>

    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="page-header">
            <h2> Login system for CodeIgniter - Backend.</h2>
          </div>

          <p class="lead">Hello <?php echo $username; ?></p>
          <p><a class="btn btn-danger" href="/index.php/home/logout">Log out!</a></p>

        </div>
      </div>
    </div>

    <!-- Javascript -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  </body>
</html>