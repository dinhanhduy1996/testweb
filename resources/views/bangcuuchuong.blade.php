<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Sriracha&display=swap" rel="stylesheet">
    <title>Document</title>
    <style>
       *{
        font-family: 'Sriracha', cursive;
       }
        #bao{
            display:flex;
            font-size: 17px;

        }
        p{
            padding: 20px;
        
            flex: 1;
        }
        button{
            display: inline-block;
            padding: 20px;
            color: blue;
            border-radius: 10%;
         
      
            background-color: chartreuse;
            border: none;
            
        }
        .nut{
            position: fixed;
            top:100px;
            left: 500px;
            z-index: 0;
        }
    </style>
</head>
<body  id="bd" >

        <div id="bao">
            <p id="a1"></p>
            <p id="a2"></p>
            <p id="a3"></p>
            <p id="a4"></p>
        </div>
        <div class="nut">
            <button onclick="nhanchia()" id="nutnhan">Reset</button>
            <button onclick="annut()" id="nutxoa">Hide Reset Button</button>
    
        </div>
       

</body>
<script>
    function nhanchia(){
    /* khai báo bién */
                var ts1
                var ts2 
                var rs 
                var pt;
                var kq;
                var sd;
                /*  */
                document.getElementById("a1").innerHTML = "";
                document.getElementById("a2").innerHTML = "";
                document.getElementById("a3").innerHTML = "";
                document.getElementById("a4").innerHTML = "";
                 function pheptinh() {
                    ts1 = Math.floor(Math.random() * 10).toString();
                    ts2 = Math.floor(Math.random()*10).toString();
                    rs  = Math.floor(Math.random()*2)+1;
                  switch (rs) {
                    case 1:
                        pt="x";
                        break;
                    case 2:
                        ts1 = ts2 *  Math.floor(Math.random()*10);
                        pt=':';
                        break;
                }

                kq= ts1 + " "+ pt + " "+ ts2 + " "+"=" ;
                }
            sd = 18;
            for (let index = 0; index < sd; index++) {
                pheptinh();
                document.getElementById("a1").innerHTML += kq+"<br><br>";
                
            }
            for (let index = 0; index < sd; index++) {
                pheptinh();
                document.getElementById("a2").innerHTML += kq+"<br><br>";
                
            }
            for (let index = 0; index < sd; index++) {
                pheptinh();
                document.getElementById("a3").innerHTML += kq+"<br><br>";
                
            }
            for (let index = 0; index < sd; index++) {
                pheptinh();
                document.getElementById("a4").innerHTML += kq+"<br><br>";
                
            }
        }
        function annut(){
            document.getElementById('nutnhan').style.display= "none";
            document.getElementById('nutxoa').style.display= "none";
            document.getElementById('bd').onclick = function(){
                
            };
        }

            
        

   
</script>
</html>