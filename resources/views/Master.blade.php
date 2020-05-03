<!DOCTYPE html>
<html lang="en">
<head>
    <title>Aplikasi Kepegawaian</title>
    <style>
        body{
            background-color:#AAA5C7;
            font-family:verdana;
        }
        .header{
           
            font-family:verdana;
            font-size:18px;
            text-align:center;
            padding-top:15px;
            padding-bottom:15px;
            background-color:#808080;
        }
        .header a{
            color:#FFFFFF;
            text-decoration:none;
        }
        .header a:hover{
           font-weight:bold;
        }
        .content{
            padding-left:25px;
            padding-top:10px;
            padding-right:25px;
            background-color:#FFFFFF;
            min-height:450px;
        }
        .content a{
            text-decoration:none;
        }
        .h3{
            padding-top:20px;
        }
        </style>

</head>
<body>
        <h1 align = "center"> PT. SANS Technology </h1>
        <div class = "header">
            <a href = "/">Home</a> &nbsp;
            <a href = "/TampilPegawai">Data Pegawai</a> &nbsp;
            <a href = "/CariPegawai">Cari Pegawai</a> &nbsp;
            <a href = "/TambahData">Input Pegawai</a> &nbsp;
        </div>
        <div class = "content">
            <!-- Bagian Judul Halaman -->
            <h3> @yield('judul_halaman')</h3>
            <!-- Bagian Isi Halaman -->
            @yield('konten')
        </div>
</body>
</html>