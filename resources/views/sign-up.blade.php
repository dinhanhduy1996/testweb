<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/sign-up.css')}}">
</head>
<body>
    <form class="signup-box" action="" method="post">
        @csrf
        <label for="user-name">Tên đăng ký</label>
        <input type="text" name="username" id="user-name">
        <br>
        <br>
        <label for="user-password">Mật khẩu</label>
        <input type="password" name="password" id="user-password">
        <br>
        <br>
        <label for="repassword">Gõ lại mật khẩu</label>
        <input type="password" name="repassword" id="repassword">
        <br>
        <br>
        <label for="email-sign">Email</label>
        <input type="text" name="email" id="email-sign">
        <br>
        <br>
        <br>

        <input type="submit" value="Đăng ký">
        {{-- hiện lỗi --}}
        @if (count($errors)>0)
            <h3>
                @foreach ($errors->all() as $err )
                {{$err}}<br>
                @endforeach
            </h3>
            
        @endif
        {{-- hiện thông báo --}}
        @if (session('thongbao'))
            <h3>{{session('thongbao')}}</h3>
        @endif
    </form>


 
</body>
</html>