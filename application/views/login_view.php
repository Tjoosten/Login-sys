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

    <!-- Costum Styles -->
    <style type="text/css">
      body {
        padding-top: 65px;
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
          <!-- Navigation bar -->
        </div><!--/.nav-collapse -->
      </div>
    </div>

    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="page-header">
            <h2> Login system for CodeIgniter.</h2>
          </div>

          <?php echo validation_errors(); ?>

          <?php echo form_open('verifylogin'); ?>
            <label for="username">Username:</label>
            <input pass="Username" class="form-control" type="text" size="20" id="username" name="username"/>
            <br/>
            
            <label for="Password">Password:</label>
            <input placeholder="Password" class="form-control" type="password" size="20" id="passowrd" name="password"/>
            <br/>

            <input class="btn btn-default" type="submit" value="Login!" />
            <input class="btn btn-default" type="reset" value="Reset!" />
          </form>

        </div>
      </div>
    </div>

    <!-- Javascript -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  </body>
</html>