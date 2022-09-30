@extends('master-layout')
@section('content')
<form action="">
    <div class="chatbox" id="messmain">
        <div class="chat-content" id="mess">
                {{-- vùng chát --}}
        @foreach ($chatting as $nd)
            {!!$nd->noidung;!!}
            <br>
        @endforeach
            
        </div>
    </div>
    <div class="input-chat">
 
        <input type="text" name="" id="nd">
        <input type="submit" value="Gởi" id="send">
    </div>
</form>

    <script>
        $(document).ready(function(){
            let ip_address = '127.0.0.1';
            let socket_port = '3000';
            let socket = io(ip_address+':'+socket_port);

        $('#send').click(function(){
           
            if($('#nd').val()==""){
                alert('hãy nhập nội dung');
                return false;
            }
            else {
                socket.emit("chat message","<div class='ten'>"+"{{Auth::user()->name}}:"+"</div>"+"  " /* nội dung */+  "<div class='chat-main'>"+$('#nd').val()+"</div>");
                $('#nd').val("");
                return false;
            }
          });
        
        socket.on("chat message", function(msg){
            $("#mess").append("<br>"+msg);
            $("#messmain").scrollTop($("#messmain")[0].scrollHeight);
        });
        })
    </script>
@endsection