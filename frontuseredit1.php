<?php
    session_start();
include_once 'config2.php';
if(count($_POST)>0) {
mysqli_query($conn,"UPDATE user set username='" . $_POST['username'] . "', firstname='" . $_POST['firstname'] . "', lastname='" . $_POST['lastname'] . "', tel='" . $_POST['tel'] . "' ,job='" . $_POST['job'] . "',image_user='" . $_POST['image_user'] . "',address='" . $_POST['address'] . "' WHERE username='" . $_POST['username'] . "'");
$message = "Record Modified Successfully";
}
$result = mysqli_query($conn,"SELECT * FROM user WHERE username='" . $_GET['username'] . "'");

$row= mysqli_fetch_array($result);

?>
<!DOCTYPE html>
<html lang="en">
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

<title>Planveler</title>

  <!-- Bootstrap core CSS -->
 <link rel="stylesheet" href="bootstrap-4/css/bootstrap.min.css" crossorigin="anonymous">
<script src="http://code.jquery.com/jquery-latest.js"></script>
<script type="text/javascript" src="jquery-3.2.1.min.js" ></script>
	<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyApC72fp4CYzOLabrQK6IOyfxzMRZq2dgg&callback=initMap&language=th"
type="text/javascript"></script>

<script>
function saveLocation(){

var firstname  = $("#firstname").val();
var username  = $("#username").val();
var lastname  = $("#lastname").val();
var job  = $("#job").val();
var tel  = $("#tel").val();


var imgname = $('input[type=file]').val();
var size = $('#image_file')[0].files[0].size;
var ext = imgname.substr((imgname.lastIndexOf('.')+1));
	ext = ext.toLowerCase();
if(ext == 'jpg'){
	if(size <= 1000000){
			
		
		$.ajax({
			method:"POST",
			url:"insert3.php",
			data: new FormData($('form')[0]),
			enctype: 'multipart/form-data',
			cache:false,
			contentType:false,
			processData:false
		}).done(function(){
			alert("OK");
		});
		
	}else{
		alert('ขนาดไฟล์ใหญ่เกินกว่าที่กำหนด');
	}
}else{
	alert('ไฟล์ที่เลือกต้องเป็นชนิดรูปภาพเท่านั้น');
}


}
</script>
</head>

<script type="text/javascript">
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#blah').attr('src', e.target.result);
                }

                reader.readAsDataURL(input.files[0]);
            }
        }
</script>

<body onclick="closeNav()">
  <div id="mySidenav" class="sidenav" onclick="event.stopPropagation();">
    <span style="font-size:35px;cursor:pointer;position:absolute;top: 0;right: 5;" onclick="closeNav()">&times;</span>
    <div style="display: block; color: #948BFF; text-align: center;"><?php echo $_SESSION['username']; ?></div>
    
        <a href="index.php">Home</a>
        <a href="index.php">Saved Trip</a>
        <a href="index.php">Recommend Trip</a>
        <a href="Howtouse.php">How to use</a>
        <a href="planveler.php">About us</a>
        <a href="help.php">Q & A</a>
  
    
    <div style="position: absolute;bottom: 0px;">
    <p><p><p></p><a href="Login.php">Login</a></p></div>
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
    <form method="post" >
      <div class="row">
        <div class="col-md-4">
          <div>
            <img
              src="imageuser/<?php echo $_SESSION['userimage_user']; ?>" width="200" height="200"
            >
            <div >
              
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="content-3">
            Personal Information
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
            <a href="">Setting Password</a>
          </div>
        </div>
        <div class="col-md-8">
          <div class="tab-content profile-tab" id="myTabContent">
            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
              <div class="row">
                <div class="col-md-6">
		
				<form enctype="multipart/form-data">

                        <div class="form-group">
                        
                            <div class="row">
                                <div class="col-md-6">
						            <label for="username">Username</label>
						            <input type="text" class="form-control" id="username" name="username" placeholder="username" value="<?php echo $row['username']; ?>">
                                </div>
                            </div>
                        
                        </div>
                        
                        <div class="row">
                <div class="col-md-6">
                  <label>Email</label>
                </div>
                <div class="col-md-6">
                  <p><?php echo $_SESSION['useremail']; ?></p>
                </div>
              </div>
                        
                        <div class="form-group">
                        <div class="row">
                                <div class="col-md-6">
						  <label for="firstname">Firstname</label>
						  <input type="text" class="form-control" id="firstname" name="firstname" placeholder="firstname" value="<?php echo $row['firstname']; ?>">
                          </div>
                            </div>
                        
                        </div>

                        <div class="form-group">
                        <div class="row">
                                <div class="col-md-6">
						  <label for="lastname">Lastname</label>
						  <input type="text" class="form-control" id="lastname" name="lastname" placeholder="lastname" value="<?php echo $row['lastname']; ?>">
                          </div>
                            </div>
                        
                        </div>

                        <div class="form-group">
                        <div class="row">
                                <div class="col-md-6">
						  <label for="tel">Tel.</label>
						  <input type="text" class="form-control" id="tel" name="tel" placeholder="tel" value="<?php echo $row['tel']; ?>">
                          </div>
                            </div>
                        
                        </div>

                        <div class="row">
                <div class="col-md-6">
                  <label>Gender</label>
                </div>
                <div class="col-md-6">
                  <p><?php echo $_SESSION['usersex']; ?></p>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <label>Birthday</label>
                </div>
                <div class="col-md-6">
                  <p><?php echo $_SESSION['userbirthday']; ?></p>
                </div>
              </div>

                        <div class="form-group">
                        <div class="row">
                                <div class="col-md-6">
						  <label for="job">Job</label>
						  <input type="text" class="form-control" id="job" name="job" placeholder="job" value="<?php echo $row['job']; ?>">
                          </div>
                            </div>
                        
                        </div> 
                        
                        </div>
						
						<div class="form-group">
							<label for="image_file">Change Profile Image</label>
							<input type="file" id="image_file" name="image_file"  onchange="readURL(this);">
							<img id="blah" src="#" alt="your image" />
						</div>
						
					
                        <div class="col-xl-2 offset-xl-10">
						<button type="button" onclick="saveLocation()" class="btn btn-primary">save change</button>
                        </div>
					  </form>
                      </div>
                      </div>
                      </div>

                      </div>
                      </div>
                      </div>
                      </div>


    <div class="bot-bar" style="z-index:2;">
        <div class="container">
            <div class="row justify-content-center" style="margin-top:20px;">
                <div class="col-auto">
                    <div class="botbar-data">
                        <h1>About us</h1>
                        <p>
                            <p><a href="/planveler.html">What's Planveler?</a>
                                <p><a href="Howtouse.html">How to use</a>
                    </div>
                </div>
                <div class="col-auto">
                    <div class="botbar-data">
                        <h1>Contact us</h1>
                        <p>
                            <p><a href="https://www.google.com/maps/dir/13.7358628,100.7661637/%E0%B8%9E%E0%B8%A3%E0%B8%B0%E0%B8%88%E0%B8%AD%E0%B8%A1%E0%B9%80%E0%B8%81%E0%B8%A5%E0%B9%89%E0%B8%B2%E0%B8%A5%E0%B8%B2%E0%B8%94%E0%B8%81%E0%B8%A3%E0%B8%B0%E0%B8%9A%E0%B8%B1%E0%B8%87/@13.7354147,100.7609192,14z/data=!3m1!4b1!4m9!4m8!1m1!4e1!1m5!1m1!1s0x311d664988a1bedf:0xcc678f180e221cd0!2m2!1d100.7782323!2d13.7298889"
                                    target="_blank">Address</a>
                                <p><a href="">E-mail</a>
                    </div>
                </div>
                <div class="col-auto">
                    <div class="botbar-data">
                        <h1>Planveler Policies</h1>
                        <p>
                            <p><a href="Terms&Condition.html">Terms & Conditions</a>
                                <p>
                                    <p><a href="/Help.html">Help Center</a>
                    </div>
                </div>
                <div class="col-auto">
                    <div class="botbar-data">
                        <h1>Follow us</h1>
                        <p>
                            <a href="#facebook"><img src="pic/Facebook logo 2.png"></a>
                            <p></p>
                            <a href="#line"><img src="pic/Line logo 1.png"></a>
                            <a href="#ig"><img src="pic/Instragram Logo 2.png"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
    <script src="/extentions/css/palnvevlerscript.js"></script>
    <script src="https://code.iconify.design/1/1.0.6/iconify.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


	</body>
	</html>