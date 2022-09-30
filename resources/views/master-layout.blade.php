<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Sriracha&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{-- css cho chat box --}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.socket.io/4.5.0/socket.io.min.js" integrity="sha384-7EyYLQZgWBi67fBtVxw60/OWl1kjsfrPFcaU0pp0nAh+i8FD068QogUvg85Ewy1k" crossorigin="anonymous"></script>
    {{--  --}}
    <title>Document</title>
   
    <link rel="stylesheet" type="text/css" href="{{  asset('css/master.css')  }}">
</head>
<body>
    <div class="dropdown">
        @foreach ($monhoc as $mh )
        <div class="dropdown-btn">
            <a href="">{{$mh->tenmonhoc}}</a>
        
            <div class="content">
            @foreach ($mh->phanmon as $tpm )

              <a href="{{route('phanmon')}}/{{changeTitle($tpm->tenphanmon)}}.{{$tpm->id}}">{{$tpm->tenphanmon}}</a>

            @endforeach
            </div>
        </div>
        @endforeach
        <div class="dropdown-btn">
            <a href="{{url('chat')}}">Nhắn tin</a>
        </div>
        <div class="dropdown-btn">
            <a href="">Dò bài</a>
            <div class="content">
                <a href="{{url('bangcuuchuong')}}">Bảng cửu chương</a>
                <a href="{{url('dotienganh1')}}">Tiếng Anh 1</a>
                <a href="{{url('dotienganh2')}}">Tiếng Anh 2</a>
                <a href="{{url('dotienganh3')}}">Tiếng Anh 3</a>
                <a href="{{url('senddata')}}">Nhập từ</a>
            </div>
        </div>
        <div class="dropdown-btn">
            <a href="">{{Auth::user()->name}}</a>
        </div>
        <div class="dropdown-btn">
            <a href="{{route('dangxuat')}}">Đăng xuất</a>
        </div>
    </div>
    <div class="main">
        <p class="title">HOC TOT</p>
      
            @yield('content')
    </div>
     

</body>
</html>