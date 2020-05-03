<!DOCTYPE html>
<html lang="en">
<head>
    <title>Aplikasi Kepegawaian</title>
    <link href="/style.css" rel="stylesheet"/>
</head>
<body>
    <h2 align = "center"> PT Sans Technology</h2>
    <div class = "content">
    <h3> Login Page </h3>
    <form method="POST" action="/CekLogin">
    {{csrf_field()}}
    <p>Username :<br/>
    <br/><input type = "text" name = "txtUser" placeholder = "Masukkan Username"/>
        @if($errors->has('txtUser'))<br/>
        <label style = "color:red">Username Jangan Kosong</label>
    @endif
    </p>

    <p> Password :<br/> 
    <br/><input type="password" name="txtPass" placeholder = "Masukkan Password"/>
        @if($errors->has('txtPass'))<br/>
        <label style = "color:red">Password Jangan Kosong</label>
        @endif
    </p>

    <p>
        <button type = "submit"> Login </button>
    </p>
    </form>
</body>
</html>