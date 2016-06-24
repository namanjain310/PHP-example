<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <style>
            #div1{
                text-align: right;
                    width : 400px;
                    height:30px;
                    border: 2px solid #00FFAA;
                
            }
            #div2{
                margin:auto;
                    width : 400px;
                    height:408px;
            }
            #div3{
              text-align: center;
                    width : 400px;
                    height:30px;
                    border: 2px solid #FFFFFF;
                 
            }
            </style>
            
    </head>
    <body>
         <form method="post" action="<?php htmlspecialchars($_SERVER["PHP_SELF"]);?>" >
             <div id="div2">
        <div id="div1">
          Username:<input type="text"  name="name"> 
        </div>
          <div id="div1">
        EMAIL:<input type="email"  name="email" value="<?php echo $_REQUEST["email"]?>">
          </div>
        <div id="div1">
          password: <input type="password"  name="password"> 
        </div>
          <div id="div1">
          password confirm: <input type="password"  name="confirm"> 
          <div id="div1">
          First Name: <input type="text"  name="fname" value="<?php echo $_REQUEST["fname"]?>"> 
          </div> 
          <div id="div1">
          Last Name: <input type="text"  name="lname" value="<?php echo $_REQUEST["lname"]?>"> 
          </div>
          <div id="div3">
            <input type="SUBMIT"  name="submit" id="submit"> 
          </div>
          </div>
        </form>
        <?php
        if($_SERVER["REQUEST_METHOD"]=="POST"){
            $NAME =$_REQUEST["name"];
            $EMAIL=$_REQUEST["email"];
            $password=$_REQUEST["password"];
            $confirm=$_REQUEST["confirm"];
            $fname=$_REQUEST["fname"];
            $lname=$_REQUEST["lname"];
            
            
            
        
        }
            
        ?>
    </body>
</html>