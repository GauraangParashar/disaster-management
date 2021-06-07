<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Disaster Management</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="main.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
      integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l"
      crossorigin="anonymous"
    />
  </head>
  <body>
    <!-- -----------------NAVBAR----------------------- -->
    <nav
      class="navbar navbar-expand-lg navbar-dark bg-dark"
      style="background-color: black !important"
    >
      <a class="navbar-brand" href="#"><h3>DM</h3></a>
      <button
        class="navbar-toggler"
        type="button"
        data-toggle="collapse"
        data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#"
              >Home <span class="sr-only">(current)</span></a
            >
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">About</a>
          </li>
          <li class="nav-item dropdown">
            <a
              class="nav-link dropdown-toggle"
              href="#"
              id="navbarDropdown"
              role="button"
              data-toggle="dropdown"
              aria-haspopup="true"
              aria-expanded="false"
            >
              Information
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="#">Anamolies</a>
              <a class="dropdown-item" href="#">Warnings</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">Help</a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" href="#">Disabled</a>
          </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
          <input
            class="form-control mr-sm-2"
            type="search"
            placeholder="Search"
            aria-label="Search"
          />
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">
            Search
          </button>
        </form>
      </div>
    </nav>
    <!-- -----------------BODY----------------------- -->
    <div
      class="container container-body"
      style="
        background-color: white;
        box-shadow: rgba(184, 184, 184, 0.24) 0px 3px 8px;
        padding-bottom: 20px;
      "
    >
    Thankyou <h2> <?php echo $_POST["name"]; ?></h2><br>
    <h3>We will put all our effort to provide assistance</h3>

    Location : <h2> <?php echo $_POST["exactlocation"]; ?></h2>

The Deatils of your anamoly are: <?php echo $_POST["details"]; ?>

</div>
    <!-- -----------------FOOTER----------------------- -->

    <div class="footer-basic">
      <footer>
        <div class="social">
          <a href="#"><i class="icon ion-social-instagram"></i></a
          ><a href="#"><i class="icon ion-social-snapchat"></i></a
          ><a href="#"><i class="icon ion-social-twitter"></i></a
          ><a href="#"><i class="icon ion-social-facebook"></i></a>
        </div>
        <ul class="list-inline">
          <li class="list-inline-item"><a href="#">Home</a></li>
          <li class="list-inline-item"><a href="#">Services</a></li>
          <li class="list-inline-item"><a href="#">About</a></li>
          <li class="list-inline-item"><a href="#">Terms</a></li>
          <li class="list-inline-item"><a href="#">Privacy Policy</a></li>
        </ul>
        <p class="copyright">Company Name © 2018</p>
      </footer>
    </div>

    <!------------------------------------------------------------- SCRIPTS--------------------------------------------------->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"
      integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF"
      crossorigin="anonymous"
    ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>

    <script
      src="https://code.jquery.com/jquery-3.6.0.js"
      integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
      crossorigin="anonymous"
    ></script>

    <script
      src="https://kit.fontawesome.com/aa40a6e283.js"
      crossorigin="anonymous"
    ></script>
    <script src="control.js"></script>
  </body>
</html>
