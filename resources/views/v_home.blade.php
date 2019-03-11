<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Page Load Style Sheet -->
    <link rel="stylesheet" href="css\bootstrap.min.css"> <!-- Bootstrap -->
    <link rel="stylesheet" href="css\style.css"> <!-- Main Style -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css" integrity="sha384-/rXc/GQVaYpyDdyxK+ecHPVYJSN9bmVFBvjA/9eOB+pb3F2w2N6fc5qB9Ew5yIns"
        crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Prompt" rel="stylesheet">
    <!-- End Page Load Style Sheet -->


    <!-- Page Load Script -->
    <script src="js\jquery-3.3.1.min.js"></script> <!-- jQuery 3.3.1 -->
    <script src="js\bootstrap.min.js"></script> <!-- Bootstrap -->
    <script src="https://cdn.rawgit.com/openlayers/openlayers.github.io/master/en/v5.2.0/build/ol.js"></script>
    <!-- End page Load Script -->


    <title>ระบบให้คำแนะนำสุขภาพ</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Prompt" rel="stylesheet">

    <!-- Styles -->
    <style>
        html, body {
                background-color: #ffffff;
                color: #000000;
                font-family: 'Prompt', sans-serif;
               /* font-family: 'Nunito', sans-serif; */
                font-weight: 200;
                height: 100vh;
                margin: 10;
            }


            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }

            /* class Font Sytem*/

            .Fontt {
                font-family: 'Prompt', sans-serif;
                color: #000000;
                font-size: 20px;
            }


            .FontBody {
                font-family: 'Prompt', sans-serif;
                font-size: 14px;
                color: #00BFFF;
            }

            .Fonthead {
                font-family: 'Prompt', sans-serif;
                color: 000000#;
            }


            .FontBody1 {
                font-family: 'Prompt', sans-serif;
                color: #000000;
            }

            .FontBody2 {
                font-family: 'Prompt', sans-serif;
                font-size: 12px;
                color: #000000;
            }

            /* end class font*/

            /* ค้นหา*/
            .search-box
            {
                background-image:url('storage/Images/magnifying-glass.png');
                background-repeat:no-repeat;
                margin-right: 10px;

            }

        </style>


    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>


</head>

<body>
    <div class="container-fluid">
        <header id="header" class="FontBody">
            <div>
                <ul class="nav nav-pills Fontt justify-content-end">
                    <li li role="presentation" class="disabled">
                        <a class="nav-link " href="#">หน้าแรก</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">ค้นหาโรงพยาบาล</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">โรคหรืออาการ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">บทความเพื่อสุขภาพ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">แชร์ประสบการณ์</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">เข้าสู่ระบบ</a>
                    </li>
                </ul>
            </div>
            <div style="background-color: #F0F8FF;padding:5%">
                <div class="row">
                    <div class="col-sm-3  text-center">
                        <img src="{{ url('storage/Images/logo.png') }}" alt="Cinque Terre" width="200" height="200">
                    </div>
                    <!--Class col-3 -->
                    <div class="col-sm-9 ">
                        <div class="row" style="width:100%;height:100%">
                            <div class="col" style="margin:auto">
                                <form>
                                    <div class="form-group Fonthead">
                                        <label for="pwd" style="font-size: 18px;">ค้นหาข้อมูลที่ต้องการ:</label>
                                        <div class="input-group">
                                            <input type="search" class="form-control " id="search" placeholder="เช่น โรงพยาบาล โรคหัวใจ บทความเพื่อสุขภาพ เป็นต้น"
                                                name="search">
                                            <div class="input-group-append">
                                                <span class="input-group-text">
                                                    <i class="fa fa-search" aria-hidden="true"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <div id="body" style="margin-top:3%">
            <!--Class col-9 -->
            <div class="section FontBody">
                <div class="row">
                    <div class="col-sm-10 Fonthead">
                        <h5>โรค หรืออาการที่ควรรู้</h5>
                    </div>
                    <!--Class col-sm-12w-->
                    <div class="col-sm-2 FontBody" style="text-align:right">
                        <span>+ดูทั้งหมด</span>
                    </div>
                    <!--Class col-sm-12w-->
                </div>
                <div class="row">
                    <div class="card-deck col-md-3">
                        <div class="card">
                            <img class="card-img-top" src="{{ url('storage/Images/hosptal.jpg') }}" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title"><span class="stb_color">ศูนย์หัวใจ</span> | โรงพยาบาลรามาธิบดี</h5>
                                <p class="card-text"><small class="text-muted">ให้บริการในลักษณะบริการเบ็ดเสร็จ ณ
                                        จุดเดียว ที่มุ่งเน้นการดูแลผู้ป่วยแบบบูรณการ เพื่อให้การรักษามีประสิทธิภาพ</small></p>
                                <a target="new" href="https://med.mahidol.ac.th/cvmc/th/content/premium?fbclid=IwAR0B8jaDqNvISJfK10drhW3n-E8sW2wrM3LF9Ydx9UlBAE7CdrlLpyspdQo"
                                    class="detail-link">
                                    <p class="card-text stb_color">รายละเอียดเพิ่มเติม&ensp;<i class="fa fa-arrow-alt-circle-right"></i></p>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="card-deck col-md-3">
                        <div class="card">
                            <img class="card-img-top" src="{{ url('storage/Images/hosptal.jpg') }}" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title"><span class="stb_color">ศูนย์หัวใจ</span> | โรงพยาบาลรามาธิบดี</h5>
                                <p class="card-text"><small class="text-muted">ให้บริการในลักษณะบริการเบ็ดเสร็จ ณ
                                        จุดเดียว ที่มุ่งเน้นการดูแลผู้ป่วยแบบบูรณการ เพื่อให้การรักษามีประสิทธิภาพ</small></p>
                                <a target="new" href="https://med.mahidol.ac.th/cvmc/th/content/premium?fbclid=IwAR0B8jaDqNvISJfK10drhW3n-E8sW2wrM3LF9Ydx9UlBAE7CdrlLpyspdQo"
                                    class="detail-link">
                                    <p class="card-text stb_color">รายละเอียดเพิ่มเติม&ensp;<i class="fa fa-arrow-alt-circle-right"></i></p>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="card-deck col-md-3">
                        <div class="card">
                            <img class="card-img-top" src="{{ url('storage/Images/hosptal.jpg') }}" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title"><span class="stb_color">ศูนย์หัวใจ</span> | โรงพยาบาลรามาธิบดี</h5>
                                <p class="card-text"><small class="text-muted">ให้บริการในลักษณะบริการเบ็ดเสร็จ ณ
                                        จุดเดียว ที่มุ่งเน้นการดูแลผู้ป่วยแบบบูรณการ เพื่อให้การรักษามีประสิทธิภาพ</small></p>
                                <a target="new" href="https://med.mahidol.ac.th/cvmc/th/content/premium?fbclid=IwAR0B8jaDqNvISJfK10drhW3n-E8sW2wrM3LF9Ydx9UlBAE7CdrlLpyspdQo"
                                    class="detail-link">
                                    <p class="card-text stb_color">รายละเอียดเพิ่มเติม&ensp;<i class="fa fa-arrow-alt-circle-right"></i></p>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="card-deck col-md-3">
                        <div class="card">
                            <img class="card-img-top" src="{{ url('storage/Images/hosptal.jpg') }}" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title"><span class="stb_color">ศูนย์หัวใจ</span> | โรงพยาบาลรามาธิบดี</h5>
                                <p class="card-text"><small class="text-muted">ให้บริการในลักษณะบริการเบ็ดเสร็จ ณ
                                        จุดเดียว ที่มุ่งเน้นการดูแลผู้ป่วยแบบบูรณการ เพื่อให้การรักษามีประสิทธิภาพ</small></p>
                                <a target="new" href="https://med.mahidol.ac.th/cvmc/th/content/premium?fbclid=IwAR0B8jaDqNvISJfK10drhW3n-E8sW2wrM3LF9Ydx9UlBAE7CdrlLpyspdQo"
                                    class="detail-link">
                                    <p class="card-text stb_color">รายละเอียดเพิ่มเติม&ensp;<i class="fa fa-arrow-alt-circle-right"></i></p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="body" style="margin-top:3%">
            <!--Class col-9 -->
            <div class="section">
                <div class="row">
                    <div class="col-sm-10 Fonthead">
                        <h5>บทความเพื่อสุขภาพ</h5>
                    </div>
                    <!--Class col-sm-12w-->
                    <div class="col-sm-2 FontBody" style="text-align:right">
                        <span>+ดูทั้งหมด</span>
                    </div>
                    <!--Class col-sm-12w-->
                </div>
                <div class="row">
                    <div class="card-deck col-md-3">
                        <div class="card">
                            <img class="card-img-top" src="{{ url('storage/Images/2.jpg') }}" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title"><span class="stb_color">ศูนย์หัวใจ</span> | โรงพยาบาลรามาธิบดี</h5>
                                <p class="card-text"><small class="text-muted">ให้บริการในลักษณะบริการเบ็ดเสร็จ ณ
                                        จุดเดียว ที่มุ่งเน้นการดูแลผู้ป่วยแบบบูรณการ เพื่อให้การรักษามีประสิทธิภาพ</small></p>
                                <a target="new" href="https://med.mahidol.ac.th/cvmc/th/content/premium?fbclid=IwAR0B8jaDqNvISJfK10drhW3n-E8sW2wrM3LF9Ydx9UlBAE7CdrlLpyspdQo"
                                    class="detail-link">
                                    <p class="card-text stb_color">รายละเอียดเพิ่มเติม&ensp;<i class="fa fa-arrow-alt-circle-right"></i></p>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="card-deck col-md-3">
                        <div class="card">
                            <img class="card-img-top" src="{{ url('storage/Images/2.jpg') }}" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title"><span class="stb_color">ศูนย์หัวใจ</span> | โรงพยาบาลรามาธิบดี</h5>
                                <p class="card-text"><small class="text-muted">ให้บริการในลักษณะบริการเบ็ดเสร็จ ณ
                                        จุดเดียว ที่มุ่งเน้นการดูแลผู้ป่วยแบบบูรณการ เพื่อให้การรักษามีประสิทธิภาพ</small></p>
                                <a target="new" href="https://med.mahidol.ac.th/cvmc/th/content/premium?fbclid=IwAR0B8jaDqNvISJfK10drhW3n-E8sW2wrM3LF9Ydx9UlBAE7CdrlLpyspdQo"
                                    class="detail-link">
                                    <p class="card-text stb_color">รายละเอียดเพิ่มเติม&ensp;<i class="fa fa-arrow-alt-circle-right"></i></p>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="card-deck col-md-3">
                        <div class="card">
                            <img class="card-img-top" src="{{ url('storage/Images/2.jpg') }}" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title"><span class="stb_color">ศูนย์หัวใจ</span> | โรงพยาบาลรามาธิบดี</h5>
                                <p class="card-text"><small class="text-muted">ให้บริการในลักษณะบริการเบ็ดเสร็จ ณ
                                        จุดเดียว ที่มุ่งเน้นการดูแลผู้ป่วยแบบบูรณการ เพื่อให้การรักษามีประสิทธิภาพ</small></p>
                                <a target="new" href="https://med.mahidol.ac.th/cvmc/th/content/premium?fbclid=IwAR0B8jaDqNvISJfK10drhW3n-E8sW2wrM3LF9Ydx9UlBAE7CdrlLpyspdQo"
                                    class="detail-link">
                                    <p class="card-text stb_color">รายละเอียดเพิ่มเติม&ensp;<i class="fa fa-arrow-alt-circle-right"></i></p>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="card-deck col-md-3">
                        <div class="card">
                            <img class="card-img-top" src="{{ url('storage/Images/2.jpg') }}" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title"><span class="stb_color">ศูนย์หัวใจ</span> | โรงพยาบาลรามาธิบดี</h5>
                                <p class="card-text"><small class="text-muted">ให้บริการในลักษณะบริการเบ็ดเสร็จ ณ
                                        จุดเดียว ที่มุ่งเน้นการดูแลผู้ป่วยแบบบูรณการ เพื่อให้การรักษามีประสิทธิภาพ</small></p>
                                <a target="new" href="https://med.mahidol.ac.th/cvmc/th/content/premium?fbclid=IwAR0B8jaDqNvISJfK10drhW3n-E8sW2wrM3LF9Ydx9UlBAE7CdrlLpyspdQo"
                                    class="detail-link">
                                    <p class="card-text stb_color">รายละเอียดเพิ่มเติม&ensp;<i class="fa fa-arrow-alt-circle-right"></i></p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</body>

</html>
