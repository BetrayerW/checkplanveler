<?php 

    session_start();

    if (!$_SESSION['userid']) {
        header("Location: index.php");
    } else {

?>


<html>
<!-- comment -->

<head>
  <title>Planveler</title>
  <meta name="viewport" content="width=device-width, initial-scale=1,height=device-height">
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="extentions/css/planveler.css">
  <link rel="icon" href="/pic/favicon.ico" type="image/x-icon">
  <style>
    body {
      background: url(pic/bg01.png);
    }
  </style>
</head>

<body onclick="closeNav()">
  <div id="mySidenav" class="sidenav" onclick="event.stopPropagation();">
    <span style="font-size:35px;cursor:pointer;position:absolute;top: 0;right: 5;" onclick="closeNav()">&times;</span>
    <div style="display: block; color: #948BFF; text-align: center;"><?php echo $_SESSION['username']; ?></div>
    
    <a href="index.php">Home</a>
        <a href="listcheck4.php">Saved Trip</a>
        <a href="listcheck4.php">Recommend Trip</a>
        <a href="Howtouse.php">How to use</a>
        <a href="planveler.php">About us</a>
        <a href="help.php">Q & A</a>


        <div style="position: absolute;bottom: 0px;">
            <p>
                <p>
                    <p></p><a href="Login.php">Login</a></p>
        </div>
    </div>

  <div class="container">
    <div class="row">
      <div id="navbar">
        <span style="font-size:35px;cursor:pointer;" onclick="openNav(event)">&#9776;</span>
        <span class="icon"> <a href="index.php">
            <img src="pic/66.png" width="160" height="90" alt="" loading="lazy">
          </a>
        </span>

        <div class="col-lg-2 col-md-2 col-lg-2 offset-lg-6 offset-9" style="padding-right:20px;">
          <div class="row" style="float: right;">
            <div class="loginbar">
              <a href="#changlanguage"><img src="pic/Group 3.png" width="90" height="25" alt="th/eng"></a>
            </div>
          </div>
          <div class="row" style="float: right;">
            <div class="col-auto">
              <div class="loginbar">
                <a href="register.php" style=><img src="pic/Group 5.png" alt="Register"></a>
                <a href="Login.php" style=><img src="pic/Group 7.png" alt="Login"></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container emp-profile" id="Profileedit">
    <form method="post">
      <div class="row">
        <div class="col-md-4">
          <div class="profile-img">
            <img
              src="imageuser/<?php echo $_SESSION['userimage_user']; ?>" width="200" height="200"
               />
            <div >
              
              
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="content-3">
           Address
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4">
          <div class="content-2">
            <br>
            <div class="content-3">
              <p>Manage your Account</p>
            </div>
            <a href="frontuser1.php">Personal Information</a><br />
            <a href="frontuseraddress1.php">Address</a><br />
            <a href="frontuserpassword.php">Setting Password</a>
          </div>
        </div>
        <div class="col-md-8">
          <div class="tab-content profile-tab" id="myTabContent">
            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
              <div class="row">
                <div class="col-md-6">
                  <label>Username</label>
                </div>
                <div class="col-md-6">
                  <p><?php echo $_SESSION['username']; ?></p>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <label>Fullname</label>
                </div>
                <div class="col-md-6">
                  <p><?php echo $_SESSION['user']; ?></p>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <label>Tel.</label>
                </div>
                <div class="col-md-6">
                  <p><?php echo $_SESSION['usertel']; ?></p>
                </div>
              </div>
           
              <div class="row">
                <div class="col-md-6">
                  <label>Address</label>
                </div>
                <div class="col-md-6">
                  <p><?php echo $_SESSION['useraddress']; ?></p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-2 offset-xl-10">
      <div class="profile-edit-btn"input type="submit" name="submit" value="Edit Profile"><a href="frontuseraddressedit1.php?username=<?php echo $_SESSION["username"]; ?>">Edit Address</a></div>
        
      </div>
    </form>
  </div>
  <div class="bot-bar" style="z-index:2;">
    <div class="container">
      <div class="row justify-content-center" style="margin-top:20px;">
        <div class="col-auto">
          <div class="botbar-data">
            <h1>About us</h1>
            <p>
            <p><a href="/planveler.php">What's Planveler?</a>
            <p><a href="Howtouse.php">How to use</a>
          </div>
        </div>
        <div class="col-auto">
          <div class="botbar-data">
            <h1>Contact us</h1>
            <p>
            <p><a
                href="https://www.google.com/maps/dir/13.7358628,100.7661637/%E0%B8%9E%E0%B8%A3%E0%B8%B0%E0%B8%88%E0%B8%AD%E0%B8%A1%E0%B9%80%E0%B8%81%E0%B8%A5%E0%B9%89%E0%B8%B2%E0%B8%A5%E0%B8%B2%E0%B8%94%E0%B8%81%E0%B8%A3%E0%B8%B0%E0%B8%9A%E0%B8%B1%E0%B8%87/@13.7354147,100.7609192,14z/data=!3m1!4b1!4m9!4m8!1m1!4e1!1m5!1m1!1s0x311d664988a1bedf:0xcc678f180e221cd0!2m2!1d100.7782323!2d13.7298889"
                target="_blank">Address</a>
            <p><a href="">E-mail</a>
          </div>
        </div>
        <div class="col-auto">
          <div class="botbar-data">
            <h1>Planveler Policies</h1>
            <p>
            <p><a href="Terms&Condition.php">Terms & Conditions</a>
            <p>
            <p><a href="/help.php">Help Center</a>
          </div>
        </div>
        <div class="col-auto">
          <div class="botbar-data">
            <h1>Follow us</h1>
            <p>
            <a href="https://www.facebook.com/Planveler-109500384231284"><img src="pic/Facebook logo 2.png"></a>
            <p></p>
            <a href="https://lin.ee/QXFQsOg"><img src="pic/Line logo 1.png"></a>
            <a href="https://www.instagram.com/planveler.official/"><img src="pic/Instragram Logo 2.png"></a>
          </div>
        </div>
      </div>
    </div>
  </div>


  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
  <script src="extentions/css/palnvevlerscript.js"></script>
  <script src="https://code.iconify.design/1/1.0.6/iconify.min.js"></script>
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</body>

</html>

<?php } ?>
