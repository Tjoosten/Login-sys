<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand font-heading" href="/">Login system</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <?php if($Session): ?>
            <ul class="nav navbar-nav navbar-right">
              <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href=""><?php echo $Username; ?></a>

                <ul class="dropdown-menu" role="menu">
                  <li><a href="/">Account configuratie</a></li>
                  <li><a href="/index.php/Account/logout">Logout</a></li>
                </ul>
              </li>
            </ul>
          <?php else: ?>
            <form class="navbar-form navbar-right" method="POST" autocomplete="off" action="/index.php/Verifylogin" role="form">
              <div class="form-group">
                <input type="text" name="Username" placeholder="Email" class="form-control" />
              </div>
              <div class="form-group">
                <input type="password" name="Password" placeholder="Password" class="form-control" />
              </div>
              <button type="submit" class="btn btn-success">Sign in</button>
              <a class="btn btn-success" href="/index.php/Account/Register">Register</a>
            </form>
          <?php endif; ?>
        </div><!--/.navbar-collapse -->
      </div>
    </nav>
