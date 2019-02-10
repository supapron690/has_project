<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Search </title>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Prompt" rel="stylesheet">
        <!-- Styles -->
        <style>

            /* Class Manage message display */

            .Fontt {
                font-family: 'Prompt', sans-serif;
                color: #000000;
                font-size: 20px;
            }

            .FontBody {
                font-family: 'Prompt', sans-serif;
            }
            /* Class btn in images display */
            .text-image {
                position: relative;
                text-align: center;
                color: blue;

              }
              .centered {
                position: absolute;
                top: 40%;
                left: 50%;
                transform: translate(-50%, -50%);
              }
              .btn-image
              {
                position: absolute;
                top: 60%;
                left: 50%;
                transform: translate(-50%, -50%);
                border-radius: 12px;
                margin: 4px 2px;
              }

        </style>




    </head>

    <body>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12" align="center" style="background-color:#D3D3D3;">
            <img src="LOGO-01.png" alt="Cinque Terre" width="200" height="100">
        </div>
    </div>
<div>
    <nav class="navbar navbar-expand-lg Fontt navbar-light bg-white">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
              <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item">
                  <a class="nav-link" href="#">หน้าแรก</a>
                </li>
                <li class="nav-item">
                        <a class="nav-link" href="#">ค้นหาโรงพยาบาล</a>
                </li>
                <li class="nav-item">
                            <a class="nav-link" href="#">โรค หรือ อาการ</a>
                </li>
                <li class="nav-item">
                        <a class="nav-link" href="#">บทความเพื่อสุขภาพ</a>
                </li>
                <li class="nav-item">
                        <a class="nav-link" href="#">แชร์ประสบการณ์</a>
                </li>
              </ul>
                    <a class="nav-link" href="#">เข้าสู่ระบบ</a> <a style="color:blue;"> | </a>  <a class="nav-link" href="#">สมัครสมาชิก</a>
            </div>
    </nav>
</div>

    <div class="row">
        <div class="col-md-12  Fontt" style="background-color:skyblue;padding:0px;">
            <p style="padding-left:40px;padding-top:10px;">แชร์ประสบการณ์</p>
        </div>
        <div class="text-image">
        <img src="OBFCYE0.jpg"  width="100%" height="100%">
        <div class="centered"><span class="Fontt" style="color:blue;"><h1>มาแบ่งประสบการณ์ด้านสุขภาพกันเถอะ</h1></span></div>
        <button class="btn-image Fontt" style="background-color:#28a428;padding-left: 20px;padding-right: 20px;"><h1>แชร์ประสบการณ์</h1></button>
        </div>
    </div>
<div>

</div>
<div class="row" style="margin-top:16px;margin-bottom:16px;">
    <div class="col-md-10">
            <h1 class="text-left Fontt mb-3" style="margin-left:16px;margin-top:16px; display: inline;">แชร์ประสบการณ์ด้านการรักษา</h1>
    </div>
    <div class="col-md-2" align="right">
            <h5 class="text-right Fontt mb-3"  style="margin-right:16px;margin-top:16px; display: inline;color:blue;">+ดูทั้งหมด</h5>
    </div>
</div>

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" style="background-color:blue;" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1" style="background-color:blue;" ></li>
        </ol>
        <div class="carousel-inner" style="margin-left:16px;padding-right:17px;">
          <div class="carousel-item active">
            <div class="row">
                <div class="col-md-3">
                        <div class="card" style="width: 18rem;">
                                <img class="card-img-top" src="time.jpg" alt="First slide"  height="200">
                                <div class="card-body Fontt ">
                                  <b class="card-text">วิธีแก้การนอนหลับมากเกินไป</b>
                                  <span>สมาชิก : วรศักดิ์</span><br>
                                  <span>8 มกราคม เวลา 10:31 น.</span>
                                </div>
                        </div>

                </div>
                <div class="col-md-3">
                        <div class="card" style="width: 18rem">
                                <img class="card-img-top" src="skull.jpg" alt="First slide" height="200">
                                <div class="card-body Fontt">
                                        <b class="card-text">วิธีแก้การนอนหลับมากเกินไป</b>
                                        <span>สมาชิก : วรศักดิ์</span><br>
                                        <span>8 มกราคม เวลา 10:31 น.</span>
                                </div>
                        </div>

                </div>
                <div class="col-md-3">
                        <div class="card" style="width: 18rem;">
                                <img class="card-img-top" src="human.jpg" alt="First slide"  height="200">
                                <div class="card-body Fontt">
                                        <b class="card-text">วิธีแก้การนอนหลับมากเกินไป</b>
                                        <span>สมาชิก : วรศักดิ์</span><br>
                                        <span>8 มกราคม เวลา 10:31 น.</span> </div>
                                </div>
                </div>
                <div class="col-md-3">
                        <div class="card" style="width: 18rem;">
                                <img class="card-img-top" src="yoka.jpg" alt="First slide"  height="200">
                                <div class="card-body Fontt">
                                        <b class="card-text">วิธีแก้การนอนหลับมากเกินไป</b>
                                        <span>สมาชิก : วรศักดิ์</span><br>
                                        <span>8 มกราคม เวลา 10:31 น.</span>
                                </div>
                        </div>
                </div>

            </div>
        </div>

          <div class="carousel-item">
                <div class="row">
                        <div class="col-md-3">
                                <div class="card" style="width: 18rem;">
                                        <img class="card-img-top" src="time.jpg" alt="Second slide"  height="200">
                                        <div class="card-body Fontt">
                                                <b class="card-text">วิธีแก้การนอนหลับมากเกินไป</b>
                                                <span>สมาชิก : วรศักดิ์</span><br>
                                                <span>8 มกราคม เวลา 10:31 น.</span>
                                        </div>
                                </div>

                        </div>
                        <div class="col-md-3">
                                <div class="card" style="width: 18rem">
                                        <img class="card-img-top" src="skull.jpg" alt="Second slide" height="200">
                                        <div class="card-body Fontt">
                                                <b class="card-text">วิธีแก้การนอนหลับมากเกินไป</b>
                                                <span>สมาชิก : วรศักดิ์</span><br>
                                                <span>8 มกราคม เวลา 10:31 น.</span>
                                         </div>
                                </div>

                        </div>
                        <div class="col-md-3">
                                <div class="card" style="width: 18rem;">
                                        <img class="card-img-top" src="human.jpg" alt="Second slide"  height="200">
                                        <div class="card-body Fontt">
                                                <b class="card-text">วิธีแก้การนอนหลับมากเกินไป</b>
                                                <span>สมาชิก : วรศักดิ์</span><br>
                                                <span>8 มกราคม เวลา 10:31 น.</span>
                                         </div>
                                </div>
                        </div>
                        <div class="col-md-3">
                                <div class="card" style="width: 18rem;">
                                        <img class="card-img-top" src="yoka.jpg" alt="Second slide"  height="200">
                                        <div class="card-body Fontt">
                                                <b class="card-text">วิธีแก้การนอนหลับมากเกินไป</b>
                                                <span>สมาชิก : วรศักดิ์</span><br>
                                                <span>8 มกราคม เวลา 10:31 น.</span>
                                        </div>
                                </div>
                        </div>
                    </div>
          </div>
        </div>
        <br>
            <br>
        <a class="carousel-control-prev"  href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
    </div>
    <br>

<div class="row" style="margin-top:16px;margin-bottom:16px;">
        <div class="col-md-10">
                <h1 class="text-left Fontt mb-3" style="margin-left:16px;margin-top:16px; display: inline;">แชร์ประสบการณ์ด้านชีวิตชีวา</h1>
        </div>
        <div class="col-md-2" align="right">
                <h5 class="text-right Fontt mb-3"  style="margin-right:16px;margin-top:16px; display: inline;color:blue;">+ดูทั้งหมด</h5>
        </div>
    </div>
<div id="carouselExampleIndicators1" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators1" data-slide-to="0" style="background-color:blue;" class="active"></li>
          <li data-target="#carouselExampleIndicators1" data-slide-to="1" style="background-color:blue;"></li>
        </ol>
        <div class="carousel-inner" style="margin-left:16px;padding-right:17px;">
          <div class="carousel-item active">
            <div class="row">
                <div class="col-md-3">
                        <div class="card" style="width: 18rem;">
                                <img class="card-img-top" src="book.jpg" alt="First slide"  height="200">
                                <div class="card-body Fontt">
                                        <b class="card-text">วิธีแก้การนอนหลับมากเกินไป</b>
                                        <span>สมาชิก : วรศักดิ์</span><br>
                                        <span>8 มกราคม เวลา 10:31 น.</span>
                                 </div>
                        </div>

                </div>
                <div class="col-md-3">
                        <div class="card" style="width: 18rem;">
                                <img class="card-img-top" src="runner.jpg" alt="First slide"  height="200">
                                <div class="card-body Fontt">
                                        <b class="card-text">วิธีแก้การนอนหลับมากเกินไป</b>
                                        <span>สมาชิก : วรศักดิ์</span><br>
                                        <span>8 มกราคม เวลา 10:31 น.</span>
                                </div>
                        </div>
                </div>
                <div class="col-md-3">
                        <div class="card" style="width: 18rem;">
                                <img class="card-img-top" src="slim.jpg" alt="First slide"  height="200">
                                <div class="card-body Fontt">
                                        <b class="card-text">วิธีแก้การนอนหลับมากเกินไป</b>
                                        <span>สมาชิก : วรศักดิ์</span><br>
                                        <span>8 มกราคม เวลา 10:31 น.</span>
                                     </div>
                        </div>
                </div>
                <div class="col-md-3">
                        <div class="card" style="width: 18rem;">
                                <img class="card-img-top" src="fat.jpg" alt="First slide"  height="200">
                                <div class="card-body Fontt">
                                        <b class="card-text">วิธีแก้การนอนหลับมากเกินไป</b>
                                        <span>สมาชิก : วรศักดิ์</span><br>
                                        <span>8 มกราคม เวลา 10:31 น.</span>
                                 </div>
                        </div>
                </div>

            </div>
        </div>

          <div class="carousel-item">
                <div class="row">
                        <div class="col-md-3">
                                <div class="card" style="width: 18rem;">
                                        <img class="card-img-top" src="book.jpg" alt="Second slide"  height="200">
                                        <div class="card-body Fontt">
                                                <b class="card-text">วิธีแก้การนอนหลับมากเกินไป</b>
                                                <span>สมาชิก : วรศักดิ์</span><br>
                                                <span>8 มกราคม เวลา 10:31 น.</span>
                                           </div>
                                </div>

                        </div>
                        <div class="col-md-3">
                                <div class="card" style="width: 18rem;">
                                        <img class="card-img-top" src="runner.jpg" alt="Second slide"  height="200">
                                        <div class="card-body Fontt">
                                                <b class="card-text">วิธีแก้การนอนหลับมากเกินไป</b>
                                                <span>สมาชิก : วรศักดิ์</span><br>
                                                <span>8 มกราคม เวลา 10:31 น.</span>
                                         </div>
                                </div>
                        </div>
                        <div class="col-md-3">
                                <div class="card" style="width: 18rem;">
                                        <img class="card-img-top" src="slim.jpg" alt="Second slide"  height="200">
                                        <div class="card-body Fontt">
                                                <b class="card-text ">วิธีแก้การนอนหลับมากเกินไป</b>
                                                <span>สมาชิก : วรศักดิ์</span><br>
                                                <span>8 มกราคม เวลา 10:31 น.</span>
                                          </div>
                                </div>
                        </div>
                        <div class="col-md-3">
                                <div class="card" style="width: 18rem;">
                                        <img class="card-img-top" src="fat.jpg" alt="Second slide"  height="200">
                                        <div class="card-body Fontt">
                                                <b class="card-text">วิธีแก้การนอนหลับมากเกินไป</b>
                                                <span>สมาชิก : วรศักดิ์</span><br>
                                                <span>8 มกราคม เวลา 10:31 น.</span>
                                        </div>
                                </div>
                        </div>
                    </div>
          </div>
        </div>
        <br>
            <br>
        <a class="carousel-control-prev" href="#carouselExampleIndicators1" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators1" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
    </div>
    <br>

    <div class="row" style="margin-top:16px;margin-bottom:16px;">
        <div class="col-md-10">
                <h1 class="text-left Fontt mb-3" style="margin-left:16px;margin-top:16px; display: inline;">แชร์ประสบการณ์ด้านโภชนาการ</h1>
        </div>
        <div class="col-md-2" align="right">
                <h5 class="text-right Fontt mb-3"  style="margin-right:16px;margin-top:16px; display: inline;color:blue;">+ดูทั้งหมด</h5>
        </div>
    </div>

    <div id="carouselExampleIndicators2" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleIndicators2" data-slide-to="0" style="background-color:blue;" class="active"></li>
              <li data-target="#carouselExampleIndicators2" data-slide-to="1" style="background-color:blue;" ></li>
            </ol>
            <div class="carousel-inner" style="margin-left:16px;padding-right:17px;">
              <div class="carousel-item active">
                <div class="row">
                        <div class="col-md-3">
                                <div class="card" style="width: 18rem;">
                                        <img class="card-img-top" src="pig.jpg" alt="First slide"  height="200">
                                        <div class="card-body Fontt">
                                                <b class="card-text">วิธีแก้การนอนหลับมากเกินไป</b>
                                                <span>สมาชิก : วรศักดิ์</span><br>
                                                <span>8 มกราคม เวลา 10:31 น.</span>
                                          </div>
                                </div>
                        </div>
                        <div class="col-md-3">
                                <div class="card" style="width: 18rem;">
                                        <img class="card-img-top" src="fish.jpg" alt="First slide"  height="200">
                                        <div class="card-body Fontt">
                                                <b class="card-text">วิธีแก้การนอนหลับมากเกินไป</b>
                                                <span>สมาชิก : วรศักดิ์</span><br>
                                                <span>8 มกราคม เวลา 10:31 น.</span>
                                          </div>
                                </div>
                        </div>
                        <div class="col-md-3">
                                <div class="card" style="width: 18rem;">
                                        <img class="card-img-top" src="bean.jpg" alt="First slide"  height="200">
                                        <div class="card-body Fontt">
                                                <b class="card-text">วิธีแก้การนอนหลับมากเกินไป</b>
                                                <span>สมาชิก : วรศักดิ์</span><br>
                                                <span>8 มกราคม เวลา 10:31 น.</span>
                                          </div>
                                </div>
                        </div>
                        <div class="col-md-3">
                                <div class="card" style="width: 18rem;">
                                        <img class="card-img-top" src="veget.jpg" alt="First slide"  height="200">
                                        <div class="card-body Fontt">
                                                <b class="card-text">วิธีแก้การนอนหลับมากเกินไป</b>
                                                <span>สมาชิก : วรศักดิ์</span><br>
                                                <span>8 มกราคม เวลา 10:31 น.</span>
                                        </div>
                                </div>
                        </div>

                </div>
            </div>

              <div class="carousel-item">
                    <div class="row">
                            <div class="col-md-3">
                                    <div class="card" style="width: 18rem;">
                                            <img class="card-img-top" src="pig.jpg" alt="Second slide"  height="200">
                                            <div class="card-body Fontt">
                                                    <b class="card-text">วิธีแก้การนอนหลับมากเกินไป</b>
                                                    <span>สมาชิก : วรศักดิ์</span><br>
                                                    <span>8 มกราคม เวลา 10:31 น.</span>
                                             </div>
                                    </div>
                            </div>
                            <div class="col-md-3">
                                    <div class="card" style="width: 18rem;">
                                            <img class="card-img-top" src="fish.jpg" alt="Second slide"  height="200">
                                            <div class="card-body Fontt">
                                                    <b class="card-text">วิธีแก้การนอนหลับมากเกินไป</b>
                                                    <span>สมาชิก : วรศักดิ์</span><br>
                                                    <span>8 มกราคม เวลา 10:31 น.</span>
                                             </div>
                                    </div>
                            </div>
                            <div class="col-md-3">
                                    <div class="card" style="width: 18rem;">
                                            <img class="card-img-top" src="bean.jpg" alt="Second slide"  height="200">
                                            <div class="card-body Fontt">
                                                    <b class="card-text">วิธีแก้การนอนหลับมากเกินไป</b>
                                                    <span>สมาชิก : วรศักดิ์</span><br>
                                                    <span>8 มกราคม เวลา 10:31 น.</span>
                                             </div>
                                    </div>
                            </div>
                            <div class="col-md-3">
                                    <div class="card" style="width: 18rem;">
                                            <img class="card-img-top" src="veget.jpg" alt="Second slide"  height="200">
                                            <div class="card-body Fontt">
                                                    <b class="card-text">วิธีแก้การนอนหลับมากเกินไป</b>
                                                    <span>สมาชิก : วรศักดิ์</span><br>
                                                    <span>8 มกราคม เวลา 10:31 น.</span>
                                             </div>
                                    </div>
                            </div>

                        </div>
              </div>
            </div>
            <br>
            <br>
            <a class="carousel-control-prev" href="#carouselExampleIndicators2" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators2" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
        </div>
        <br>
        <div class="col-md-12" align="left" style="background-color:#D3D3D3;">
                <img src="LOGO-01.png" alt="Cinque Terre" width="200" height="100">
        </div>

</div>
    </body>
</html>
