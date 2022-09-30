@extends('master-layout')
@section('content')
<link rel="stylesheet" href="{{asset('css/senddata.css')}}">
<div class="main-content">
<form action="" method="post" id="banggoi">
    <label for="">English</label>
    <input type="text" name="" id="ta" >
    <br>
    <br>
    <label for="">Vietnamese</label>
    <input type="text" name="" id="tv">
    <br>
    <br>
    <label for="lop">Class</label>
    <select name="" id="lop">
        <option value="3">3</option>
        <option value="5">5</option>
        <option value="9">9</option>
    </select>
    <br>
    <br>
    <label for="unit">Unit</label>
    <select name="" id="unit">
   {{-- nơi chưa option --}}
  </select>
    <div id="tb"></div>
    <br>

    <input type="submit" value="Xác nhận" id="send">
    <script>
        var soUnit = 17;
        for (let i = 0; i < soUnit; i++) {
            $('#unit').html($('#unit').html()+"<option value="+i+">"+i+"</option>");
            
        }
        $("#send").click(function(){
                $.get("{{url('/nhandata')}}",
                {
                    tienganh: $("#ta").val(),
                    tiengviet: $('#tv').val(),
                    lop: $('#lop').val(),
                    unit: $('#unit').val()
                },
                function(data, status){
                    if(status == 'success'){
                       $('#tb').html('thành công');
                    }else {
                        $('#tb').html('');  
                    }
                
                 
                });
                $("#ta").val("");
                $("#tv").val("");
                $("#ta").focus();
             return false;   
        });
    </script>
</form>
</div>
@endsection
