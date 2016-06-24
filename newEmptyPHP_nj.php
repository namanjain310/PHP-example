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
                text-align: center;
                width: 500px;
                    height: 100px;
            
                
            }
            </style>
            
    </head>
    <body>
        <div id="div1">
        <form method="post" action="<?php htmlspecialchars($_SERVER["PHP_SELF"]);?> html" >
           NAME: <input type="text"  name="name"> 
           EMAIL:<input type="text"  name="email"></div>
        
        </form>
        <?php
        if($_SERVER["REQUEST_METHOD"]=="POST"){
            $NAME =$_REQUEST["name"];
            $EMAIL=$_REQUEST["email"];
           echo "<h2>INPUT</h2><br>";
            echo "$NAME"."<br>";
            echo "$EMAIL"."<br>";
            
           
        }
            
        ?>
    </body>
</html>