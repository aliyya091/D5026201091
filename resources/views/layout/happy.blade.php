<!DOCTYPE html>
<html>

<head>
    <title>Aplikasi Kepegawaian - @yield('title')</title>
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/layout.css">
    <link
        href="http://cdn.rawgit.com/Eonasdan/bootstrap-datetimepicker/e8bddc60e73c1ec2475f827be36e1957af72e2ea/build/css/bootstrap-datetimepicker.css"
        rel="stylesheet">


    <script type="text/javascript" src="http://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment-with-locales.js"></script>
    <script
        src="http://cdn.rawgit.com/Eonasdan/bootstrap-datetimepicker/e8bddc60e73c1ec2475f827be36e1957af72e2ea/src/js/bootstrap-datetimepicker.js">
    </script>
</head>

<body>
    <section class="container-fluid">
        <!--header-->
        <header>
            <div class="row">
                <!--foto-->
                <div class="col-sm-3">
                    <img src="{{URL::asset('/images/aliyya.jpeg')}}" alt="foto-aliyya" width="150px">
                </div>
                <!--nama dan nrp-->
                <div class="col-sm-9 identitas">
                    <br>
                    <h1 class="fs-2">Aliyya Zahra Nurulhusna</h1>
                    <br>
                    <h2 class="fs-3">5026201091</h2>
                    <br>
                </div>
            </div>
        </header>

        <!--konten-->
        <div class="row side-content">
            <!--navbar-->
            <div class="col-sm-3 nav-content">
                <div>
                    <h1 class="head-nav">Navigation Link</h1>
                </div>
                <div>
                    <ul class="nav flex-column justify-content-center">
                        <li class="nav-item">
                            <a class="nav-link btn btn-block" href="/pegawai">Pegawai</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link btn btn-block" href="/absen">Absen</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link btn btn-block" href="/praktikum">Praktikum</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link btn btn-block" href="/nilaikuliah">EAS Nilai Kuliah<br> Kode E5</a>
                        </li>
                    </ul>
                </div>

            </div>
            <div class="col-sm-9 main-content">
                <div>
                    <h1 class="judulhalaman">@yield('judulhalaman')<br></h1>
                    @section('konten')
                    @show
                </div>
            </div>

        </div>

        <!--footer-->
        <footer class="col text-center fs-3">
            <h2>Hak Cipta milik Aliyya Zahra Nurulhusna</h2>
        </footer>
</body>

</html>
