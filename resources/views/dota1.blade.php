<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <title>Document</title>
    
  
    <style>
        *{
            font-size: 30px;
        }
        #nd{
            padding: 0px 20px;
        }
        #a{
            padding: 30px;
     
        }
    </style>
</head>
<body>
    <form action="" method="get" id="phom">{{-- điều kiện dữ liệu --}}
        <label for="">Class</label>
        <input type="text" name="" id="ipLop">
        <br>
        <br>
        <label for="">Unit</label>
        <input type="text" name="" id="ipUnit">
        <br>
        <br>
        <label for="">Vocabulary Number</label>
        <input type="text" name="" id="ipN">
        <input type="submit" value="send" id="send">
    </form>

    <div id='a' >

    </div>

    
    
    <button onclick="thaydoi()" id="click">Click</button>
    <button onclick='an()' id="an">Hide</button>
    <script>
         var chuoi ="";/* tiếng anh */
         var chuoitv="";
         var c="";
               

$("#send").click(function(){
                chuoi="";
                chuoitv="";
                $.get("{{url('/laydata')}}",
                {
                    
                    lop: $('#ipLop').val(),
                    sotu: $('#ipN').val(),
                    unit: $('#ipUnit').val()
                },
                function(data, status){
                    
                    var a = JSON.parse(data);
                    
                    for (const key in a) {
                        var te=a[key];
                       
                            for (const u in te) {
                               if(u=='tienganh')
                                {chuoi += te[u]+',';
                      
                            }  
                                if(u=='tiengviet')
                                {chuoitv += te[u]+',';}                       
                        }
                       
                    }
               
                document.getElementById('a').innerHTML=chuoi;/* đặt ở đây mà ko đặt ở dưới vì hàm $.get chạy sau, nên kết quả bị trễ */
                
                    
               }            
                );
             return false;   
        });
        function thaydoi(){
            c = "";
            console.log(chuoi);
            var sach=chuoi.slice(0,-1);
            var sach1=chuoitv.slice(0,-1);
            var catchuoiTA =sach.split(',');
        
            var catchuoiTV = sach1.split(',');
            shuffleArr(catchuoiTA);
        
            for (let i = 0; i < catchuoiTA.length; i++) {
               c = c+ catchuoiTA[i]+Array(20).fill('\xa0').join('')/* khoảng trống */+catchuoiTV[i]+"<br><br>";
                
            }
            $('#a').html(c);
        }

        function an(){
            $('#phom').hide();
            $('#click').hide();
            $('#an').hide();
        }
        function shuffleArr (array){/* ngẫu nhiên mảng */
            for (var i = array.length - 1; i > 0; i--) {
                var rand = Math.floor(Math.random() * (i + 1));
                [array[i], array[rand]] = [array[rand], array[i]]
            }
    }
    </script>
</body>
</html>