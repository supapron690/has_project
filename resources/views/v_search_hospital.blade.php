<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Search hospital</title>

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
              .centered-articleForDisease {
                position: absolute;
                top: 30%;
                left: 50%;
                transform: translate(-50%, -50%);
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

              #icon-forHelath {

                background: white url(Images_inView/magnifying-glass.png) no-repeat;
                position: relative;
                background-size: 3%;
                background-position-x: 97%;
                background-position-y: 50%;
                width: 700px;
            }
            #icon{

                background: white url(Images_inView/magnifying-glass.png) no-repeat;
                position: relative;
                background-size: 3%;
                background-position-x: 97%;
                background-position-y: 50%;

            }
            #textshadow{
                text-shadow: 2px 1px grey;
            }
            .hover01 figure:hover img {
                opacity: 1;
                -webkit-animation: flash 1.5s;
                animation: flash 1.5s;
            }

            @-webkit-keyframes flash {
                0% {
                    opacity: .4;
                }
                100% {
                    opacity: 1;
                }
            }
            @keyframes flash {
                0% {
                    opacity: .4;
                }
                100% {
                    opacity: 1;
                }
            }

            figure {
                margin: 0;
                padding: 0;
                background: #fff;
                overflow: hidden;
            }
            figure:hover+span {
                opacity: 1;
            }

              .product-img {
                float: left;
              }

              .product-img img {
                border-radius: 7px 0 0 7px;
              }

              .product-info {
                float: left;
                height: 100px;
                width: 250px;
                border-radius: 0 10px 10px 0px;
                background-color: #ffffff;

              }

        </style>

    </head>
    <body>
        <div class="container-fluid">
    <div class="row">
        <div class="col-md-12" align="center" style="background-color:#D3D3D3;">
            <img src="Images_inView/logo-01.png" alt="Cinque Terre" width="200" height="100">
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
                <p style="padding-left:40px;padding-top:20px;"><b>ค้นหาโรงพยาบาล</b></p>
            </div>

            <div class="text-image" style="width:100%;height:50%;">
                    <img src="Images_inView/โรงพยาบาล/7957.jpg" style="width:100%;height:50%;">
                    <div class="centered-articleForDisease"><span class="Fontt" style="color:#00004d; text-shadow: 2px 1px gray;"33><h1>กรุณากรอกสิ่งที่ต้องการค้นหา</h1></span>
                    <form action="#">
                            <input id="icon-forHelath" type="text" class="form-control form-control-lg Fontt" name="info"  placeholder="เช่น โรงพยาบาลชลบุรี โรงพยาบาลระยอง เป็นต้น">
                    </form>
                    </div>
            </div>
    </div>

    <div class="row" style="margin-top:16px;margin-bottom:15px;">
            <div class="col-md-10">
                    <h1 class="text-left Fontt mb-3" style="margin-left:16px;margin-top:20px; display: inline;">โรงพยาบาลใกล้เคียง</h1>
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
                        <img class="card-img-top" src="Images_inView/โรงพยาบาล/รพม.บูรพา.jpg" alt="First slide"  height="200">
                        <div class="card-body Fontt ">
                            <b style="font-size: 13px;">โรงพยาบาลมหาวิทยาลัยบูรพา</b>
                            <p style="font-size: 10px">ที่อยู่ : 169 ถนนลงหาดบางแสน ตำบลแสนสุข อำเภอเมือง จังหวัดชลบุรี 20131</p>
                            <p style="font-size: 10px">เบอร์โทรศัพท์ : 0-3839-4850-3, 0-3839-0324</p>
                            <p style="font-size: 15px; color:teal; text-align:right"> ระยะทาง 0.9 กิโลเมตร</p>
                         </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="Images_inView/โรงพยาบาล/รพชลบุรี.jpg" alt="First slide"  height="200">
                        <div class="card-body Fontt ">
                            <b style="font-size: 13px;">โรงพยาบาลชลบุรี</b>
                            <p style="font-size: 10px">ที่อยู่ : 69 หมู่2 ถนนสุขุมวิท ตำบลบ้านสวน อำเภอเมือง จังหวัดชลบุรี 20000</p>
                            <p style="font-size: 10px">เบอร์โทรศัพท์ : 0-3893-1000</p>
                            <p style="font-size: 15px; color:teal; text-align:right"> ระยะทาง 11.5 กิโลเมตร</p>
                         </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="Images_inView/โรงพยาบาล/รพสมิติเวชศรีราชา.jpg" alt="First slide"  height="200">
                        <div class="card-body Fontt ">
                            <b style="font-size: 13px;">โรงพยาบาลสมิติเวช ศรีราชา</b>
                            <p style="font-size: 10px">ที่อยู่ : 8 ซอยแหลมเตุ ถนนเจิมจอมพล อำเภอศรีราชา     จังหวัดชลบุรี 20110</p>
                            <p style="font-size: 10px">เบอร์โทรศัพท์ : 0-3832-0300</p>
                            <p style="font-size: 15px; color:teal; text-align:right"> ระยะทาง 13.9 กิโลเมตร</p>
                         </div>
                    </div>
                </div>
                  <div class="col-md-3">
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="Images_inView/โรงพยาบาล/รพสมเด็จศรีราชา.jpg" alt="First slide"  height="200">
                        <div class="card-body Fontt ">
                            <b style="font-size: 13px;">โรงพยาบาลสมเด็จพระบรมราชเทวี ศรีราชา</b>
                            <p style="font-size: 10px">ที่อยู่ : 290 ถนนเจิมจอมพล อำเภอศรีราชา จังหวัดชลบุรี 20110</p>
                            <p style="font-size: 10px">เบอร์โทรศัพท์ : 0-3832-0200</p>
                            <p style="font-size: 15px; color:teal; text-align:right"> ระยะทาง 15.9 กิโลเมตร</p>
                         </div>
                    </div>
                </div>
            </div>
            </div>

            <div class="carousel-item">
            <div class="row">
                <div class="col-md-3">
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="Images_inView/โรงพยาบาล/รพม.บูรพา.jpg" alt="First slide"  height="200">
                        <div class="card-body Fontt ">
                            <b style="font-size: 13px;">โรงพยาบาลมหาวิทยาลัยบูรพา</b>
                            <p style="font-size: 10px">ที่อยู่ : 169 ถนนลงหาดบางแสน ตำบลแสนสุข อำเภอเมือง จังหวัดชลบุรี 20131</p>
                            <p style="font-size: 10px">เบอร์โทรศัพท์ : 0-3839-4850-3, 0-3839-0324</p>
                         </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="Images_inView/โรงพยาบาล/รพชลบุรี.jpg" alt="First slide"  height="200">
                        <div class="card-body Fontt ">
                            <b style="font-size: 13px;">โรงพยาบาลชลบุรี</b>
                            <p style="font-size: 10px">ที่อยู่ : 69 หมู่2 ถนนสุขุมวิท ตำบลบ้านสวน อำเภอเมือง จังหวัดชลบุรี 20000</p>
                            <p style="font-size: 10px">เบอร์โทรศัพท์ : 0-3893-1000</p>
                         </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="Images_inView/โรงพยาบาล/รพสมิติเวชศรีราชา.jpg" alt="First slide"  height="200">
                        <div class="card-body Fontt ">
                            <b style="font-size: 13px;">โรงพยาบาลสมิติเวช ศรีราชา</b>
                            <p style="font-size: 10px">ที่อยู่ : 8 ซอยแหลมเตุ ถนนเจิมจอมพล อำเภอศรีราชา     จังหวัดชลบุรี 20110</p>
                            <p style="font-size: 10px">เบอร์โทรศัพท์ : 0-3832-0300</p>
                         </div>
                    </div>
                </div>
                  <div class="col-md-3">
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="Images_inView/โรงพยาบาล/รพสมเด็จศรีราชา.jpg" alt="First slide"  height="200">
                        <div class="card-body Fontt ">
                            <b style="font-size: 13px;">โรงพยาบาลสมเด็จพระบรมราชเทวี ศรีราชา</b>
                            <p style="font-size: 10px">ที่อยู่ : 290 ถนนเจิมจอมพล อำเภอศรีราชา จังหวัดชลบุรี 20110</p>
                            <p style="font-size: 10px">เบอร์โทรศัพท์ : 0-3832-0200</p>
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
    <!-- ค้นหาโรงพยาบาลใกล้เคียง -->
    <div class="row" style="margin-top:20px; margin-bottom:20px; margin-left:5\40px">
            <div class="col-md-10">
                    <h1 class="text-left Fontt mb-3" style="margin-left:16px;margin-top:20px; display: inline;">ค้นหาโรงพยาบาลใกล้เคียง</h1>
            </div>
    </div>

    <div class="hover01" style="margin-top:50px">
    <div class="row" >
        <div style="margin-left:70px; margin-bottom:10px; width:10rem">
            <figure>
                <img class="card-img-top" src="Images_inView/โรงพยาบาล/จันทบุรี.PNG" alt="First slide">
            <figure>
        </div>
        <div style="width:10rem; margin-left:15px">
            <figure>
                <img class="card-img-top" src="Images_inView/โรงพยาบาล/ฉะเชิงเทรา.PNG" alt="First slide">
            <figure>
        </div>
        <div style="width:10rem; margin-left:15px">
            <figure>
                <img class="card-img-top" src="Images_inView/โรงพยาบาล/ชลบุรี.PNG" alt="First slide">
            <figure>
        </div>
        <div style="width:10rem; margin-left:15px">
            <figure>
                <img class="card-img-top" src="Images_inView/โรงพยาบาล/ตราด.PNG" alt="First slide">
            <figure>
        </div>
        <div style="width:10rem; margin-left:15px">
            <figure>
                <img class="card-img-top" src="Images_inView/โรงพยาบาล/ปราจีนบุรี.PNG" alt="First slide">
            <figure>
        </div>
        <div style="width:10rem; margin-left:15px">
            <figure>
                <img class="card-img-top" src="Images_inView/โรงพยาบาล/ระยอง.PNG" alt="First slide">
            <figure>
        </div>
        <div style="width:10rem; margin-left:15px">
            <figure>
                <img class="card-img-top" src="Images_inView/โรงพยาบาล/สระแก้ว.PNG" alt="First slide">
            <figure>
        </div>
    </div>
    </div>

    <!-- แสดงหมวดหมู่โรคตา -->
        <div class="row" style="padding-top:50px">
            <div class="col-md-12" align="left" style="background-color:#0059b3;">
                <div class="row">
                    <br><h1 class="text-left Fontt mb-3" style="margin-left:50px;margin-top:30px; display: inline; color:#ffffff">แสดงหมวดหมู่ "โรคตา"</h1>
                </div>

                <div class="row">
                    <div class="col-md-12">
                    <div>
                        <div class="product-img" style="margin-left:30px">
                            <img src="Images_inView/278.jpg" height="100" width="130">
                        </div>
                        <div class="product-info Fontt">
                            <p style="font-size: 16px;">สายตาสั้น (Myopia)</p>
                            <p style="font-size: 12px;text-indent:20px;">เป็นปัญหาของการมองเห็นที่พบได้บ่อยที่สุดชนิดหนึ่งผู้ที่มีสายตาสั้นจะไม่สามารถมองเห็นวัตถุที่อยู่ระยะไกลได้<br></p>
                        </div>
                    </div>
                    <div>
                        <div class="product-img" style="margin-left:50px">
                            <img src="Images_inView/278.jpg" height="100" width="130">
                        </div>
                        <div class="product-info Fontt">
                            <p style="font-size: 16px;">สายตาสั้น (Myopia)</p>
                            <p style="font-size: 12px;text-indent:20px;">เป็นปัญหาของการมองเห็นที่พบได้บ่อยที่สุดชนิดหนึ่งผู้ที่มีสายตาสั้นจะไม่สามารถมองเห็นวัตถุที่อยู่ระยะไกลได้<br></p>
                        </div>
                    </div>
                    <div>
                        <div class="product-img" style="margin-left:50px">
                            <img src="Images_inView/278.jpg" height="100" width="130">
                        </div>
                        <div class="product-info Fontt">
                            <p style="font-size: 16px;">สายตาสั้น (Myopia)</p>
                            <p style="font-size: 12px;text-indent:20px;">เป็นปัญหาของการมองเห็นที่พบได้บ่อยที่สุดชนิดหนึ่งผู้ที่มีสายตาสั้นจะไม่สามารถมองเห็นวัตถุที่อยู่ระยะไกลได้<br></p>
                        </div>
                    </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12" style="margin-top:20px">
                    <div>
                        <div class="product-img" style="margin-left:30px">
                            <img src="Images_inView/278.jpg" height="100" width="130">
                        </div>
                        <div class="product-info Fontt">
                            <p style="font-size: 16px;">สายตาสั้น (Myopia)</p>
                            <p style="font-size: 12px;text-indent:20px;">เป็นปัญหาของการมองเห็นที่พบได้บ่อยที่สุดชนิดหนึ่งผู้ที่มีสายตาสั้นจะไม่สามารถมองเห็นวัตถุที่อยู่ระยะไกลได้<br></p>
                        </div>
                    </div>
                    <div>
                        <div class="product-img" style="margin-left:50px">
                            <img src="Images_inView/278.jpg" height="100" width="130">
                        </div>
                        <div class="product-info Fontt">
                            <p style="font-size: 16px;">สายตาสั้น (Myopia)</p>
                            <p style="font-size: 12px;text-indent:20px;">เป็นปัญหาของการมองเห็นที่พบได้บ่อยที่สุดชนิดหนึ่งผู้ที่มีสายตาสั้นจะไม่สามารถมองเห็นวัตถุที่อยู่ระยะไกลได้<br></p>
                        </div>
                    </div>
                    <div>
                        <div class="product-img" style="margin-left:50px">
                            <img src="Images_inView/278.jpg" height="100" width="130">
                        </div>
                        <div class="product-info Fontt">
                            <p style="font-size: 16px;">สายตาสั้น (Myopia)</p>
                            <p style="font-size: 12px;text-indent:20px;">เป็นปัญหาของการมองเห็นที่พบได้บ่อยที่สุดชนิดหนึ่งผู้ที่มีสายตาสั้นจะไม่สามารถมองเห็นวัตถุที่อยู่ระยะไกลได้<br></p>
                        </div>
                    </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12" style="margin-top:20px">
                    <div>
                        <div class="product-img" style="margin-left:30px">
                            <img src="Images_inView/278.jpg" height="100" width="130">
                        </div>
                        <div class="product-info Fontt">
                            <p style="font-size: 16px;">สายตาสั้น (Myopia)</p>
                            <p style="font-size: 12px;text-indent:20px;">เป็นปัญหาของการมองเห็นที่พบได้บ่อยที่สุดชนิดหนึ่งผู้ที่มีสายตาสั้นจะไม่สามารถมองเห็นวัตถุที่อยู่ระยะไกลได้<br></p>
                        </div>
                    </div>
                    <div>
                        <div class="product-img" style="margin-left:50px">
                            <img src="Images_inView/278.jpg" height="100" width="130">
                        </div>
                        <div class="product-info Fontt">
                            <p style="font-size: 16px;">สายตาสั้น (Myopia)</p>
                            <p style="font-size: 12px;text-indent:20px;">เป็นปัญหาของการมองเห็นที่พบได้บ่อยที่สุดชนิดหนึ่งผู้ที่มีสายตาสั้นจะไม่สามารถมองเห็นวัตถุที่อยู่ระยะไกลได้<br></p>
                        </div>
                    </div>
                    <div>
                        <div class="product-img" style="margin-left:50px">
                            <img src="Images_inView/278.jpg" height="100" width="130">
                        </div>
                        <div class="product-info Fontt">
                            <p style="font-size: 16px;">สายตาสั้น (Myopia)</p>
                            <p style="font-size: 12px;text-indent:20px;">เป็นปัญหาของการมองเห็นที่พบได้บ่อยที่สุดชนิดหนึ่งผู้ที่มีสายตาสั้นจะไม่สามารถมองเห็นวัตถุที่อยู่ระยะไกลได้<br></p>
                        </div>
                    </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12" style="margin-top:20px">
                    <div>
                        <div class="product-img" style="margin-left:30px">
                            <img src="Images_inView/278.jpg" height="100" width="130">
                        </div>
                        <div class="product-info Fontt">
                            <p style="font-size: 16px;">สายตาสั้น (Myopia)</p>
                            <p style="font-size: 12px;text-indent:20px;">เป็นปัญหาของการมองเห็นที่พบได้บ่อยที่สุดชนิดหนึ่งผู้ที่มีสายตาสั้นจะไม่สามารถมองเห็นวัตถุที่อยู่ระยะไกลได้<br></p>
                        </div>
                    </div>
                    <div>
                        <div class="product-img" style="margin-left:50px">
                                <img src="Images_inView/278.jpg" height="100" width="130">
                        </div>
                        <div class="product-info Fontt">
                            <p style="font-size: 16px;">สายตาสั้น (Myopia)</p>
                            <p style="font-size: 12px;text-indent:20px;">เป็นปัญหาของการมองเห็นที่พบได้บ่อยที่สุดชนิดหนึ่งผู้ที่มีสายตาสั้นจะไม่สามารถมองเห็นวัตถุที่อยู่ระยะไกลได้<br></p>
                        </div>
                    </div>
                    <div>
                        <div class="product-img" style="margin-left:50px; margin-bottom:50px  ">
                                <img src="Images_inView/278.jpg" height="100" width="130">
                        </div>
                        <div class="product-info Fontt">
                            <p style="font-size: 16px;">สายตาสั้น (Myopia)</p>
                            <p style="font-size: 12px;text-indent:20px;">เป็นปัญหาของการมองเห็นที่พบได้บ่อยที่สุดชนิดหนึ่งผู้ที่มีสายตาสั้นจะไม่สามารถมองเห็นวัตถุที่อยู่ระยะไกลได้<br></p>
                        </div>
                    </div>
                    </div>
                </div>



            </div>
        </div>

        <div class="row">
            <div class="col-md-12" align="left" style="background-color:#D3D3D3;">
                <img src="Images_inView/logo-01.png" alt="Cinque Terre" width="200" height="100">
            </div>
        </div>




    </body>
</html>
