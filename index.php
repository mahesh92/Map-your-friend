<!DOCTYPE html>
<html>
    <head>
    <style>


     body {
                background: white; 
                width: 600px; 
                margin: 0px auto; 
                padding: 0px auto;
                /* background-image:url('BlankMap.png');
                background-repeat:no-repeat; */
               }
    .nick{
                margin-left:auto;
                margin-right:auto;
                border-style:solid;
                width:400px;
                height:250px;
                padding:10px;
                border:5px solid gray;
                margin:10px;
                right:0px;
                background-image:url('res/myf.png');
                background-repeat:no-repeat;
                background-size: 420px 320px;
                font-family:"Times New Roman", Times, serif;
                font-weight:bold;
                font-size:24px;
                position : absolute;
                top : 100px;
                left : 450px;
    }
    form{
     position : absolute;
     top : 100px;
     left : 50px; 
    }
    label
    {
        color : white;
    }
    </style
    </head>
    <body>
    
            <div id="nick" class="nick">
            <center>
                <form method="GET" action="src/map.php">
                    <label for="name">Nick Name: </label>
                    <input type = "text" id="name" name="name"></input>
                    <br>
                    <center><input type="submit"></center>
                </form></center>
            </div>
        
    </body>
</html>
