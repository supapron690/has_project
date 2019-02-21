<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Search articles of health</title>

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
              .centered-articleForHealth {
                position: absolute;
                top: 18%;
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
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01"
                    aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
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
                    <a class="nav-link" href="#">เข้าสู่ระบบ</a> <a style="color:blue;"> | </a> <a class="nav-link"
                        href="#">สมัครสมาชิก</a>
                </div>
            </nav>
        </div>
        <div class="row">
            <div class="col-md-12  Fontt" style="background-color:skyblue;padding:0px;">
                <p style="padding-left:40px;padding-top:10px;"><b>บทความเพื่อสุขภาพ</b></p>
            </div>

            <div class="text-image" style="width:100%;height:50%;">
                <img src="Images_inView/180278-OWMGK8-135.jpg" style="width:100%;height:50%;">
                <div class="centered-articleForHealth"><span class="Fontt" style="color:blue;">
                        <h1>กรุณากรอกสิ่งที่ต้องการค้นหา</h1>
                    </span>
                    <form action="#">
                        <input id="icon-forHelath" type="text" class="form-control form-control-lg" name="info"
                            placeholder="เช่น โรงพยาบาล โรคหัวใจ บทความเพื่อสุขภาพ เป็นต้น">
                    </form>
                </div>
            </div>
        </div>

        <div class="row" style="margin-top:16px;margin-bottom:16px;">
            <div class="col-md-10">
                <h1 class="text-left Fontt mb-3" style="margin-left:16px;margin-top:16px; display: inline;">บทความเพื่อสุขภาพ
                    ด้านการรักษา</h1>
            </div>
            <div class="col-md-2" align="right">
                <h5 class="text-right Fontt mb-3" style="margin-right:16px;margin-top:16px; display: inline;color:blue;">+ดูทั้งหมด</h5>
            </div>
        </div>

        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" style="background-color:blue;" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1" style="background-color:blue;"></li>
            </ol>
            <div class="carousel-inner" style="margin-left:16px;padding-right:17px;">
                <div class="carousel-item active">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="card" style="width: 18rem;">
                                <img class="card-img-top" src="Images_inView/32065.jpg" alt="First slide" height="200">
                                <div class="card-body Fontt ">
                                    <b class="card-text" style="font-size: 13px;">โรคหัวใจ (Heart Disease)</b>
                                    <p style="font-size: 10px;text-indent:20px;">คือ
                                        โรคต่างๆที่ส่งผลกระทบต่อการทำงานของหัวใจ โดยโรคหัวใจสามารถแบ่งย่อยได้หล่ายกลุ่ม</p>
                                </div>
                            </div>

                        </div>
                        <div class="col-md-3">
                            <div class="card" style="width: 18rem;">
                                <img class="card-img-top" src="Images_inView/2639.jpg" alt="First slide" height="200">
                                <div class="card-body Fontt ">
                                    <b class="card-text" style="font-size: 13px;">โรคภูมิแพ้ (Allergies)</b>
                                    <p style="font-size: 10px;text-indent:20px;">โรคภูมิแพ้เกิดจากอาการที่ระบบภูมิคุ้มกันในร่างกายตอบสนองต่อสารบางอย่าง
                                        ซึ่งเรียกว่า สารก่อภูมิแพ้</p>
                                </div>
                            </div>

                        </div>
                        <div class="col-md-3">
                            <div class="card" style="width: 18rem;">
                                <img class="card-img-top" src="Images_inView/14964.jpg" alt="First slide" height="200">
                                <div class="card-body Fontt ">
                                    <b class="card-text" style="font-size: 13px;">เนื้องอกไขมัน (Lipoma)</b>
                                    <p style="font-size: 10px;text-indent:20px;">เนื้องอกไขมันเป็นก้อนไขมันที่อยู่ระหว่างชั้นผิวหนังกับชั้นกล้ามเนื้อที่อยู่ข้างใต้
                                        โดยมีลักษณะหยุ่นๆคล้ายยาง</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card" style="width: 18rem;">
                                <img class="card-img-top" src="Images_inView/278.jpg" alt="First slide" height="200">
                                <div class="card-body Fontt ">
                                    <b class="card-text" style="font-size: 13px;">สายตาสั้น (Myopia)</b>
                                    <p style="font-size: 10px;text-indent:20px;">เป็นปัญหาของการมองเห็นที่พบได้บ่อยที่สุดชนิดหนึ่งผู้ที่มีสายตาสั้นจะไม่สามารถมองเห็นวัตถุที่อยู่ระยะไกลได้</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="carousel-item">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="card" style="width: 18rem;">
                                <img class="card-img-top" src="Images_inView/32065.jpg" alt="First slide" height="200">
                                <div class="card-body Fontt ">
                                    <b class="card-text" style="font-size: 13px;">โรคหัวใจ (Heart Disease)</b>
                                    <p style="font-size: 10px;text-indent:20px;">คือ
                                        โรคต่างๆที่ส่งผลกระทบต่อการทำงานของหัวใจ โดยโรคหัวใจสามารถแบ่งย่อยได้หล่ายกลุ่ม</p>
                                </div>
                            </div>

                        </div>
                        <div class="col-md-3">
                            <div class="card" style="width: 18rem;">
                                <img class="card-img-top" src="Images_inView/2639.jpg" alt="First slide" height="200">
                                <div class="card-body Fontt ">
                                    <b class="card-text" style="font-size: 13px;">โรคภูมิแพ้ (Allergies)</b>
                                    <p style="font-size: 10px;text-indent:20px;">โรคภูมิแพ้เกิดจากอาการที่ระบบภูมิคุ้มกันในร่างกายตอบสนองต่อสารบางอย่าง
                                        ซึ่งเรียกว่า สารก่อภูมิแพ้</p>
                                </div>
                            </div>

                        </div>
                        <div class="col-md-3">
                            <div class="card" style="width: 18rem;">
                                <img class="card-img-top" src="Images_inView/14964.jpg" alt="First slide" height="200">
                                <div class="card-body Fontt ">
                                    <b class="card-text" style="font-size: 13px;">เนื้องอกไขมัน (Lipoma)</b>
                                    <p style="font-size: 10px;text-indent:20px;">เนื้องอกไขมันเป็นก้อนไขมันที่อยู่ระหว่างชั้นผิวหนังกับชั้นกล้ามเนื้อที่อยู่ข้างใต้
                                        โดยมีลักษณะหยุ่นๆคล้ายยาง</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card" style="width: 18rem;">
                                <img class="card-img-top" src="Images_inView/278.jpg" alt="First slide" height="200">
                                <div class="card-body Fontt ">
                                    <b class="card-text" style="font-size: 13px;">สายตาสั้น (Myopia)</b>
                                    <p style="font-size: 10px;text-indent:20px;">เป็นปัญหาของการมองเห็นที่พบได้บ่อยที่สุดชนิดหนึ่งผู้ที่มีสายตาสั้นจะไม่สามารถมองเห็นวัตถุที่อยู่ระยะไกลได้</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <br>
            <br>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
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
                <h1 class="text-left Fontt mb-3" style="margin-left:16px;margin-top:16px; display: inline;">บทความเพื่อสุขภาพด้านชีวิตชีวา</h1>
            </div>
            <div class="col-md-2" align="right">
                <h5 class="text-right Fontt mb-3" style="margin-right:16px;margin-top:16px; display: inline;color:blue;">+ดูทั้งหมด</h5>
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
                                <img class="card-img-top" src="Images_inView/374335-PBCLM4-832.jpg" alt="First slide"
                                    height="200">
                                <div class="card-body Fontt ">
                                    <b class="card-text" style="font-size: 13px;">ผื่นแพ้ในเด็ก</b>
                                    <p style="font-size: 10px;text-indent:20px;">เป็นโรคที่พบได้บ่อยและน่าท้อแท้ใจสำหรับพ่อแม่และลูก
                                        เพราะนอกจากจะไม่มีทางหายแล้วยังรักษาได้ยาก</p>
                                </div>
                            </div>

                        </div>
                        <div class="col-md-3">
                            <div class="card" style="width: 18rem;">
                                <img class="card-img-top" src="Images_inView/7533.jpg" alt="First slide" height="200">
                                <div class="card-body Fontt ">
                                    <b class="card-text" style="font-size: 13px;">เคล็ดลับในการฝึกระเบียบวินัยสำหรับเด็ก</b>
                                    <p style="font-size: 10px;text-indent:20px;">การปรับปรุงพฤติกรรมของเด็กนั้นไม่จำเป็นต้องใช้วิธีการใหม่ๆเสมอไป
                                        บางครั้งการเปลี่ยนแปลงเด็กเพียงเล็ก</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card" style="width: 18rem;">
                                <img class="card-img-top" src="Images_inView/iStock-537629332_L.jpg" alt="First slide"
                                    height="200">
                                <div class="card-body Fontt ">
                                    <b class="card-text" style="font-size: 13px;">วิตามินดีกับการลดน้ำหนัก</b>
                                    <p style="font-size: 10px;text-indent:20px;">วิตามินดีถูกเรียกเป็นตัวช่วยลดน้ำหนักตามธรรมชาติยิ่งไปกว่านั้นงานวิจัยบางชิ้นแนะนำวิตามินดีที่ต่ำกว่าปกติ</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card" style="width: 18rem;">
                                <img class="card-img-top" src="Images_inView/iStock-507214036_L.jpg" alt="First slide"
                                    height="200">
                                <div class="card-body Fontt ">
                                    <b class="card-text" style="font-size: 13px;">การดูแลผู้ป่วยระยะสุดท้ายแบบประคับประคอง</b>
                                    <p style="font-size: 10px;text-indent:20px;">ในปี พ.ศ. 2533
                                        องค์การอนามัยโลกได้ให้คำจำกัดความของ Palliative Care
                                        ว่าเป็นวิธีการดูแลผู้ป่วยที่เป็นโรคที่</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="carousel-item">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="card" style="width: 18rem;">
                                <img class="card-img-top" src="Images_inView/374335-PBCLM4-832.jpg" alt="First slide"
                                    height="200">
                                <div class="card-body Fontt ">
                                    <b class="card-text" style="font-size: 13px;">ผื่นแพ้ในเด็ก</b>
                                    <p style="font-size: 10px;text-indent:20px;">เป็นโรคที่พบได้บ่อยและน่าท้อแท้ใจสำหรับพ่อแม่และลูก
                                        เพราะนอกจากจะไม่มีทางหายแล้วยังรักษาได้ยาก</p>
                                </div>
                            </div>

                        </div>
                        <div class="col-md-3">
                            <div class="card" style="width: 18rem;">
                                <img class="card-img-top" src="Images_inView/7533.jpg" alt="First slide" height="200">
                                <div class="card-body Fontt ">
                                    <b class="card-text" style="font-size: 13px;">เคล็ดลับในการฝึกระเบียบวินัยสำหรับเด็ก</b>
                                    <p style="font-size: 10px;text-indent:20px;">การปรับปรุงพฤติกรรมของเด็กนั้นไม่จำเป็นต้องใช้วิธีการใหม่ๆเสมอไป
                                        บางครั้งการเปลี่ยนแปลงเด็กเพียงเล็ก</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card" style="width: 18rem;">
                                <img class="card-img-top" src="Images_inView/iStock-537629332_L.jpg" alt="First slide"
                                    height="200">
                                <div class="card-body Fontt ">
                                    <b class="card-text" style="font-size: 13px;">วิตามินดีกับการลดน้ำหนัก</b>
                                    <p style="font-size: 10px;text-indent:20px;">วิตามินดีถูกเรียกเป็นตัวช่วยลดน้ำหนักตามธรรมชาติยิ่งไปกว่านั้นงานวิจัยบางชิ้นแนะนำวิตามินดีที่ต่ำกว่าปกติ</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card" style="width: 18rem;">
                                <img class="card-img-top" src="Images_inView/iStock-507214036_L.jpg" alt="First slide"
                                    height="200">
                                <div class="card-body Fontt ">
                                    <b class="card-text" style="font-size: 13px;">การดูแลผู้ป่วยระยะสุดท้ายแบบประคับประคอง</b>
                                    <p style="font-size: 10px;text-indent:20px;">ในปี พ.ศ. 2533
                                        องค์การอนามัยโลกได้ให้คำจำกัดความของ Palliative Care
                                        ว่าเป็นวิธีการดูแลผู้ป่วยที่เป็นโรคที่</p>
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

        <div class="row" style="margin-top:16px;margin-bottom:16px;">
            <div class="col-md-10">
                <h1 class="text-left Fontt mb-3" style="margin-left:16px;margin-top:16px; display: inline;">บทความเพื่อสุขภาพด้านโภชนาการ</h1>
            </div>
            <div class="col-md-2" align="right">
                <h5 class="text-right Fontt mb-3" style="margin-right:16px;margin-top:16px; display: inline;color:blue;">+ดูทั้งหมด</h5>
            </div>
        </div>
        <div id="carouselExampleIndicators2" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators2" data-slide-to="0" style="background-color:blue;" class="active"></li>
                <li data-target="#carouselExampleIndicators2" data-slide-to="1" style="background-color:blue;"></li>
            </ol>
            <div class="carousel-inner" style="margin-left:16px;padding-right:17px;">
                <div class="carousel-item active">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="card" style="width: 18rem;">
                                <img class="card-img-top" src="Images_inView/374335-PBCLM4-832.jpg" alt="First slide"
                                    height="200">
                                <div class="card-body Fontt ">
                                    <b class="card-text" style="font-size: 13px;">ผื่นแพ้ในเด็ก</b>
                                    <p style="font-size: 10px;text-indent:20px;">เป็นโรคที่พบได้บ่อยและน่าท้อแท้ใจสำหรับพ่อแม่และลูก
                                        เพราะนอกจากจะไม่มีทางหายแล้วยังรักษาได้ยาก</p>
                                </div>
                            </div>

                        </div>
                        <div class="col-md-3">
                            <div class="card" style="width: 18rem;">
                                <img class="card-img-top" src="Images_inView/7533.jpg" alt="First slide" height="200">
                                <div class="card-body Fontt ">
                                    <b class="card-text" style="font-size: 13px;">เคล็ดลับในการฝึกระเบียบวินัยสำหรับเด็ก</b>
                                    <p style="font-size: 10px;text-indent:20px;">การปรับปรุงพฤติกรรมของเด็กนั้นไม่จำเป็นต้องใช้วิธีการใหม่ๆเสมอไป
                                        บางครั้งการเปลี่ยนแปลงเด็กเพียงเล็ก</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card" style="width: 18rem;">
                                <img class="card-img-top" src="Images_inView/iStock-537629332_L.jpg" alt="First slide"
                                    height="200">
                                <div class="card-body Fontt ">
                                    <b class="card-text" style="font-size: 13px;">วิตามินดีกับการลดน้ำหนัก</b>
                                    <p style="font-size: 10px;text-indent:20px;">วิตามินดีถูกเรียกเป็นตัวช่วยลดน้ำหนักตามธรรมชาติยิ่งไปกว่านั้นงานวิจัยบางชิ้นแนะนำวิตามินดีที่ต่ำกว่าปกติ</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card" style="width: 18rem;">
                                <img class="card-img-top" src="Images_inView/iStock-507214036_L.jpg" alt="First slide"
                                    height="200">
                                <div class="card-body Fontt ">
                                    <b class="card-text" style="font-size: 13px;">การดูแลผู้ป่วยระยะสุดท้ายแบบประคับประคอง</b>
                                    <p style="font-size: 10px;text-indent:20px;">ในปี พ.ศ. 2533
                                        องค์การอนามัยโลกได้ให้คำจำกัดความของ Palliative Care
                                        ว่าเป็นวิธีการดูแลผู้ป่วยที่เป็นโรคที่</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="carousel-item">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="card" style="width: 18rem;">
                                <img class="card-img-top" src="Images_inView/374335-PBCLM4-832.jpg" alt="First slide"
                                    height="200">
                                <div class="card-body Fontt ">
                                    <b class="card-text" style="font-size: 13px;">ผื่นแพ้ในเด็ก</b>
                                    <p style="font-size: 10px;text-indent:20px;">เป็นโรคที่พบได้บ่อยและน่าท้อแท้ใจสำหรับพ่อแม่และลูก
                                        เพราะนอกจากจะไม่มีทางหายแล้วยังรักษาได้ยาก</p>
                                </div>
                            </div>

                        </div>
                        <div class="col-md-3">
                            <div class="card" style="width: 18rem;">
                                <img class="card-img-top" src="Images_inView/7533.jpg" alt="First slide" height="200">
                                <div class="card-body Fontt ">
                                    <b class="card-text" style="font-size: 13px;">เคล็ดลับในการฝึกระเบียบวินัยสำหรับเด็ก</b>
                                    <p style="font-size: 10px;text-indent:20px;">การปรับปรุงพฤติกรรมของเด็กนั้นไม่จำเป็นต้องใช้วิธีการใหม่ๆเสมอไป
                                        บางครั้งการเปลี่ยนแปลงเด็กเพียงเล็ก</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card" style="width: 18rem;">
                                <img class="card-img-top" src="Images_inView/iStock-537629332_L.jpg" alt="First slide"
                                    height="200">
                                <div class="card-body Fontt ">
                                    <b class="card-text" style="font-size: 13px;">วิตามินดีกับการลดน้ำหนัก</b>
                                    <p style="font-size: 10px;text-indent:20px;">วิตามินดีถูกเรียกเป็นตัวช่วยลดน้ำหนักตามธรรมชาติยิ่งไปกว่านั้นงานวิจัยบางชิ้นแนะนำวิตามินดีที่ต่ำกว่าปกติ</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card" style="width: 18rem;">
                                <img class="card-img-top" src="Images_inView/iStock-507214036_L.jpg" alt="First slide"
                                    height="200">
                                <div class="card-body Fontt ">
                                    <b class="card-text" style="font-size: 13px;">การดูแลผู้ป่วยระยะสุดท้ายแบบประคับประคอง</b>
                                    <p style="font-size: 10px;text-indent:20px;">ในปี พ.ศ. 2533
                                        องค์การอนามัยโลกได้ให้คำจำกัดความของ Palliative Care
                                        ว่าเป็นวิธีการดูแลผู้ป่วยที่เป็นโรคที่</p>
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
        <div class="row">
            <div class="col-md-12" align="left" style="background-color:#D3D3D3;">
                <img src="Images_inView/logo-01.png" alt="Cinque Terre" width="200" height="100">
            </div>
        </div>
    </div>
</body>

</html>
