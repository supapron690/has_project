<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Login</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Prompt" rel="stylesheet">

    <!-- import CSS -->
    <link rel="stylesheet" href="{{ asset('css/has.css') }}">


   
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>

</head>

<body>
    <div class="container-fluid">
        <header id="header Fontt">
                <div class="row">
                        <div class="col-md-12" align="center" style="background-color:#D3D3D3;">
                            <img src="{{ url('storage/Images_inView/logo-01.png') }}" alt="Cinque Terre" width="200" height="100">
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
        </header>

        <div class="jumbotron text-center FontBody" style="margin-bottom:0">
            <img src="{{ url('storage/Images/logo.png') }}" alt="Cinque Terre" width="200" height="200">
            <h3 class="AlCenter">สมัครสมาชิก</h3>
            <div class="row">
                <div class="col-md-4 ">
                    <p class="AlRight">ชื่อบัญชี</p>
                </div>
                <div class="col-md-4">
                    <input type="search" class="form-control" id="search">
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 ">
                    <p class="AlRight">รหัสผ่าน</p>
                </div>
                <div class="col-md-4">
                    <input type="search" class="form-control" id="search">
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 ">
                    <p class="AlRight">หมายเลขโทรศัพท์</p>
                </div>
                <div class="col-md-4">
                    <input type="search" class="form-control" id="search">
                </div>
            </div>
        </div>
</body>

</html>
