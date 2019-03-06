<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

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
        <header id="header Fontt">
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
        </header>

        <div class="jumbotron text-center FontBody" style="margin-bottom:0">
            <img src="{{ url('storage/Images/logo.png') }}" alt="Cinque Terre" width="200" height="200">
            <h3 style="text-align: center">สมัครสมาชิก</h3>
            <div class="row">
                <div class="col-md-4 ">
                    <p align="right">ชื่อบัญชี</p>
                </div>
                <div class="col-md-4">
                    <input type="search" class="form-control" id="search">
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 ">
                    <p align="right">รหัสผ่าน</p>
                </div>
                <div class="col-md-4">
                    <input type="search" class="form-control" id="search">
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 ">
                    <p align="right">หมายเลขโทรศัพท์</p>
                </div>
                <div class="col-md-4">
                    <input type="search" class="form-control" id="search">
                </div>
            </div>
        </div>
</body>

</html>
