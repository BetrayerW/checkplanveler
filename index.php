<html>
<!-- miwwee  -->

<head>
    <title>Planveler เว็บไซต์เพื่อการท่องเที่ยวภายในประเทศที่รวบรวมทริปไว้มากมาย นำเสนอแบบเข้าใจง่ายและสนุกสนาน</title>
    <meta name="viewport" content="width=device-width, initial-scale=1,height=device-height">
    <meta charset="utf-8">
    <meta name="robots" content="index, follow">
    <meta name="description" content="เว็บไซต์ของการจัดทริปท่องเที่ยวในประเทศ ที่รวบรวมทริปเที่ยวที่หลากหลายไว้มากมาย planveler เว็บไซต์ของเรามีการนำเสนอการท่องเที่ยวแบบเข้าใจง่ายและสวยงาม">
    <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="/extentions/css/planveler.css">
    <link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@1,200&display=swap" rel="stylesheet">
    <link rel="icon" href="/pic/favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" href="/pic/favicon.ico" type="image/x-icon">
</head>

<body onclick="closeNav()">
    <div id="mySidenav" class="sidenav" onclick="event.stopPropagation();">
        <span style="font-size:35px;cursor:pointer;position:absolute;top: 0;right: 5;" onclick="closeNav()">&times;</span>
        <div style="display: block; color: #948BFF; text-align: center;">Guest</div>

        <a href="index.php">Home</a>
        <a href="listcheck4.php">Saved Trip</a>
        <a href="listcheck4.php">Recommend Trip</a>
        <a href="Howtouse.php">How to use</a>
        <a href="planveler.php">About us</a>
        <a href="help.php">Q & A</a>


        <div style="position: absolute;bottom: 0px;">
            <p>
                <p>
                    <p></p><a title="ลงชื่อเข้าใช้" href="Login.php">Login</a></p>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div id="navbar">
                <span title="เมนู" style="font-size:35px;cursor:pointer;" onclick="openNav(event)">&#9776;</span>

                <span class="icon"> <a href="index.php"> 
    <img src="/pic/66.png" width="160" height="90" alt="" loading="lazy">
  </a>
 </span>

                <div class="col-lg-2 col-md-2 col-lg-2 offset-lg-6 offset-9" style="padding-right:20px;">

                    <div class="row" style="float: right;margin-right: auto;">
                        <div class="col-auto">
                            <div class="loginbar">
                                <a title="เพิ่มบัญชี" href="register.php" style=><img src="/pic/Group 5.png" alt="Register"></a>
                                <a title="เข้าสู่ระบบ" href="Login.php" style=><img src="/pic/Group 7.png" alt="Login"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid" id="backgroundimg">
        <div class="headermainpage">planveler</div>
        <div class="d-flex justify-content-center px-5">
            <div class="search"> <input type="text" class="search-input" placeholder=" Search your place . . ." name="">
                <a href="#" class="search-icon"> <i class="fa fa-search"></i> </a>
            </div>
        </div>
    </div>

    <div id="iconrecommend">
        <div class="container">
            <div class="row justify-content-center">
                <a href="listcheck4.php"><img src="/pic/recommend.png" alt="iconrecommend"></a>
            </div>
        </div>
    </div>

    <div id="cardpic">
        <div class="card mb-4" style="max-width: 668px;max-height: 401px; border: 2px;
padding: 10px;
box-shadow: 1px 1px 2px #888888;
">
            <div class="row no-gutters">
                <div class="col-md-7" style="padding:auto;">
                    <img src="/pic/reviwe1.png" class="card-img" alt="review">
                </div>
                <div class="col-md-5">
                    <div class="card-body">
                        <h5 class="card-title">กาญจนบุรี</h5>
                        <p class="card-text">กาญจนบุรี 3 วัน 2 คืน 4000บาท โดย taloktoktek</p>
                        <a href="example01.php" class="stretched-link">เพิ่มเติม</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="quote">
            คุณค่าของการเดินทาง<br> ไม่ได้วัดกันที่ "ระยะทาง" แต่วัดกันที่ "ความสุข"
        </div>
    </div>

    <div class="bigquote">
        <div class="container-fluid">
            Travel&emsp;&emsp;--&emsp;&emsp;is&emsp;&emsp;--&emsp;&emsp;
            <font style="color: #61adf3">live</font>
        </div>
    </div>
    <div class="imgshow">
        <table align="center" class="table-borderless">
            <tr>
                <th rowspan="3"><span class="bigimg"><img height="55%"  img-responsive src="/pic/show1.png" alt="img1"></span></th>
                <div class="imgshow2">
                    <td><img width="253px" height="167px" src="/pic/show2.png" alt="show2"></td>
                    <td><img width="253px" height="167px" src="/pic/show3.png" alt="show2"></td>
                </div>
            </tr>
            <tr>
                <td><img width="253px" height="167px" src="/pic/show4.png" alt="show2"></td>
                <td><img width="253px" height="167px" src="/pic/show5.png" alt="show2"></td>
            </tr>
        </table>
    </div>

    <div class="bot-bar" style="z-index:1;">
        <div class="container-fluid">
            <div class="row justify-content-center" style="margin-top:20px;">
                <div class="col-auto">
                    <div class="botbar-data">
                        <h1>About us</h1>
                        <p>
                            <p><a href="planveler.php">What's Planveler?</a>
                                <p><a href="Howtouse.php">How to use</a>
                    </div>
                </div>
                <div class="col-auto">
                    <div class="botbar-data">
                        <h1>Contact us</h1>
                        <p>
                            <p><a href="https://www.google.com/maps/dir/13.7358628,100.7661637/%E0%B8%9E%E0%B8%A3%E0%B8%B0%E0%B8%88%E0%B8%AD%E0%B8%A1%E0%B9%80%E0%B8%81%E0%B8%A5%E0%B9%89%E0%B8%B2%E0%B8%A5%E0%B8%B2%E0%B8%94%E0%B8%81%E0%B8%A3%E0%B8%B0%E0%B8%9A%E0%B8%B1%E0%B8%87/@13.7354147,100.7609192,14z/data=!3m1!4b1!4m9!4m8!1m1!4e1!1m5!1m1!1s0x311d664988a1bedf:0xcc678f180e221cd0!2m2!1d100.7782323!2d13.7298889"
                                    target="_blank">Address</a>
                                    <p><a href="">planveler@gmail.com</a>
                    </div>
                </div>
                <div class="col-auto">
                    <div class="botbar-data">
                        <h1>Planveler Policies</h1>
                        <p>
                            <p><a href="Terms&Condition.php">Terms & Conditions</a>
                            <p><a href="help.php">Help Center</a>
                                </div>
                </div>
                <div class="col-auto">
                    <div class="botbar-data">
                        <h1>Follow us</h1>
                        <p>
                            <a href="https://www.facebook.com/Planveler-109500384231284"><img src="/pic/Facebook logo 2.png"></a>
                            <p></p>
                            <a href="https://lin.ee/QXFQsOg"><img src="/pic/Line logo 1.png"></a>
                            <a href="https://www.instagram.com/planveler.official/"><img src="/pic/Instragram Logo 2.png"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
    <script src="/extentions/css/palnvevlerscript.js"></script>
</body>

</html>