<nav class="navbar" role="navigation" aria-label="main navigation">
  <div class="navbar-brand">
    <a class="navbar-item" href="https://bulma.io">
      <img src="https://bulma.io/images/bulma-logo.png" width="112" height="28">
    </a>

    <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
      <span aria-hidden="true"></span>
      <span aria-hidden="true"></span>
      <span aria-hidden="true"></span>
    </a>
  </div>

  <div id="navbarBasicExample" class="navbar-menu">
    <div class="navbar-start">
      <a class="navbar-item" href="/">
        Home
      </a>

      <div class="navbar-item has-dropdown is-hoverable" href="/admin/articles">
        <a class="navbar-link">
          Admin
        </a>

        <div class="navbar-dropdown">
          <a class="navbar-item" href="/admin/users">
          Accounts
          </a>
          <a class="navbar-item" href="/admin/articles">
          Admin
        </a>
        </div>
      </div>


      

    

    <div class="navbar-item has-dropdown is-hoverable">
        <a class="navbar-link">
          More
        </a>

        <div class="navbar-dropdown">
          <a class="navbar-item">
            About
          </a>
          <a class="navbar-item">
            Jobs
          </a>
          <a class="navbar-item">
            Contact
          </a>
          
          <hr class="navbar-divider">
          <a class="navbar-item">
            Report an issue
          </a>
        </div>
      </div>
    </div>
  </div>

    <div class="navbar-end">
      <div class="navbar-item">
        <?php if(auth()): ?>
          <div class="navbar-item has-dropdown is-hoverable">
            <a class="navbar-link">
              <?=auth()->email?>
            </a>
            <div class="navbar-dropdown">
              <a class="navbar-item" href="/logout">
                Logout
              </a>
            </div>
          </div>
        <?php else: ?>
        <div class="buttons">
          <a class="button is-primary" href="/register">
            <strong>Sign up</strong>
          </a>
          <a class="button is-light"  href="/login">
            Log in
          </a>
        </div>
        <?php endif; ?>
      </div>
    </div>
  </div>
</nav>
    
