

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
        #a{
            padding: 0px 20px;
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

    <div id='a'>

    </div>

    <button onclick="thaydoi()" id="click">Click</button>
    <button onclick='an()' id="an">Hide</button>
    <script>
        var dot = '...................................................................................';
        var chuoi="";
        var chuoitv='';
        var so_an = 3;
        var rm;
      
       
    
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

        function thaydoi() {
       
        var tachchuoi = chuoi.split(",");
        var tachchuoi1 = chuoitv.split(",");
            
        var luuso = [];
                    for (let j = 0; j < tachchuoi.length; j++) {
                    luuso[j]=[];
                    for (let i = 1; i < so_an; i++) {
                    luuso[j][i] = Math.floor(Math.random()*(tachchuoi[j].length-1));
                    /* nếu bị trùng thì chọn số khác */
                    if(i > 1 && luuso[j][i] == luuso[j][i-1]){
                        for (let k = 0; k < 20; k++) {
                            luuso[j][i] = Math.floor(Math.random()*(tachchuoi[j].length-1));
                            if (luuso[j][i]!= luuso[j][i-1]){
                                break;
                            }
    
                }
                    }
                    /*  */
                }
                    
                }
                
                document.getElementById('a').innerHTML = "";
                for (let j = 0; j < tachchuoi.length-1; j++) {
                    var new_chuoi = tachchuoi[j];/* gán vào để đưa vào vòng lặp không bị trúng */
                    
                    for (let i = 1; i < so_an; i++) {
                        var new_chuoi = new_chuoi.replace(new_chuoi[luuso[j][i]], '_');
                        
                    }
                  
                    document.getElementById('a').innerHTML += "<p>"+ new_chuoi +dot+tachchuoi1[j]+"</p>";
                }
      
    
        }

        function an(){
            $('#phom').hide();
            $('#click').hide();
            $('#an').hide();
        }

    </script>
</body>
</html>

