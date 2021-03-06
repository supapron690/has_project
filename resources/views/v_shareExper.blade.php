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
    
    <!-- import CSS -->
    <link rel="stylesheet" href="{{ asset('css/has.css') }}">
    


</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 AlCenter"  style="background-color:#D3D3D3;">
                {{-- <img src="Images_inView/logo-01.png" alt="Cinque Terre" width="200" height="100"> --}}
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
        <div class="row">
            <div class="col-md-12  Fontt" style="background-color:skyblue;padding:0px;">
                <p style="padding-left:40px;padding-top:10px;"><b>แชร์ประสบการณ์</b></p>
            </div>
            <div class="col-md-12 "> 
                <div class="text-image">
                {{-- <img src="Images_inView/OBFCYE0.jpg" width="100%" height="100%"> --}}
                <img src="{{ url('storage/Images_inView/OBFCYE0.jpg') }}" width="100%" height="500">
                <span class="Fontt set-head">
                    <h3>ขั้นตอนที่ 1 : เลือกหมวดหมู่ที่ต้องการแชร์ประสบการณ์</h3>
                </span>
                <div class="row">
                    <div class="col-md-4 Fontt set-box set-distance10">
                        {{-- <img src="Images_inView/stethoscope (3).png" width="50%" height="50%"> --}}
                        <img src="{{ url('storage/Images_inView/stethoscope (3).png') }}"width="50%" height="50%">
                        <p>
                            <h5>หมวดหมู่ : การรักษา</h5>
                        </p>
                        <p>เนื้อหาที่เกี่ยวข้องกับการรักษาทุกรูปแบบทั้งแผนโบราณ และแผนปัจจุบัน</p>
                    </div>
                    <div class="col-md-4 Fontt set-box set-distance40">
                        {{-- <img src="Images_inView/care.png" width="50%" height="50%"> --}}
                        <img src="{{ url('storage/Images_inView/care.png') }}" width="50%" height="50%">
                        <p>
                            <h5>หมวดหมู่ : ชีวิตชีวา</h5>
                        </p>
                        <p>เนื้อหาที่เกี่ยวข้องกับการรักษาทุกรูปแบบทั้งแผนโบราณ และแผนปัจจุบัน</p>
                    </div>
                    <div class="col-md-4 Fontt set-box set-distance70" >
                        {{-- <img src="Images_inView/salad (2).png" width="50%" height="50%"> --}}
                        <img src="{{ url('storage/Images_inView/salad (2).png ') }}" width="50%" height="50%">
                        <p>
                            <h5>หมวดหมู่ : โภชนาการ</h5>
                        </p>
                        <p>เนื้อหาที่เกี่ยวข้องกับการรักษาทุกรูปแบบทั้งแผนโบราณ และแผนปัจจุบัน</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

        <br>
        <form action="#">
            <div class="Fontt" style=" width: 100%;
    height: 500px;
    border: 1px solid #00004d;">
                <p style="padding-left:40px;padding-top:10px;padding-bottom:10px;background-color:#00004d;color:white">ขั้นตอนที่
                    2 : ใส่รายละเอียดของเรื่องที่ต้องการแชร์ประสบการณ์</p>
                <br>
                <div class="row">
                    <div class="col-md-2">
                        <span style="padding-left:60px;color:#00004d;"> ชื่อเรื่อง<span style="color:red;">*</span></span>
                    </div>
                    <div class="col-md-10">
                        <input type="text" style="width:90%" class="form-control form-control-sm" name="info">
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-2">
                        <span style="padding-left:60px;color:#00004d;"> รายละเอียด<span style="color:red;">*</span></span>
                    </div>
                    <div class="col-md-10">
                        <div style=" width: 90%;
            height: 50px;
            border: 1px solid #00004d;background-color:#00004d;">

                        </div>
                        <input type="text-box" style="width:90%;height:200px;" class="form-control form-control-sm"
                            name="info">
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-3">
                        <span style="padding-left:60px;color:#00004d;"> อัพโหลดรูปภาพหน้าปก<span style="color:red;">*</span></span>
                    </div>
                    <div class="col-md-9">
                        <div class="custom-file" style="width:30%;">
                            <input type="file" class="custom-file-input" id="customFile" lang="th">
                            <label class="custom-file-label" for="customFile">เลือกไฟล์</label>

                        </div>
                    </div>
                </div>
            </div>
            <br>
            <button class="btn" type="submit" style="background-color:#33cc33;color:white;width:100px;position: absolute;left:50%;"><b>บันทึก</b></button>
        </form>
        <br>
        <br>
        <br>
        <div class="row">
            <div class="col-md-12" align="left" style="background-color:#D3D3D3;">
                {{-- <img src="Images_inView/logo-01.png" alt="Cinque Terre" width="200" height="100"> --}}
                <img src="{{ url('storage/Images_inView/logo-01.png') }}" alt="Cinque Terre" width="200" height="100">
            </div>
        </div>
    </div>
</body>

</html>
