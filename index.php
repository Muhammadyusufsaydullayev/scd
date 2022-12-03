<?php

declare (strict_types=1) ;

ini_set ("display_errors" , "1") ;
error_reporting(E_ALL);


?>


<!DOCTYPE html>

<html>
 <head>

  <title>html sayt</title>
  <link rel="stylesheet" href="style3.css">

  

  
 </head>

 <body>

 <?php 


$nokia = isset($_GET  ["Ism"] , $_GET ["Familiya"], $_GET["sharf"] , $_GET["sana"], $_GET["raqam"],$_GET["email"],$_GET["parol"]);
 if($nokia) 
 {
  
  echo "ismingiz:". $_GET["Ism"] ."<br />";
  echo "Familiyangiz:". $_GET["Familiya"] ."<br />";
  echo "sharfingiz:". $_GET["sharf"] ."<br />";
  echo "Tug'ilgan sanangiz:". $_GET["sana"] ."<br />";
  echo "Tel raqamingiz:". $_GET["raqam"] ."<br />";
  echo "emailingiz:". $_GET["email"] ."<br />";
  echo "Parolingiz:". $_GET["parol"] ."<br />";
  
 }

else
 {
   echo" Sorovnomani toldiring " ;
 }



?>

  
      <div class="container">
         <div class="form">
            <form >
               <h1>Ro'yxatga olish</h1>
                  
               <p>
                  
                  Familiyangiz: <input type="text" name="Familiya">
                  Ismingiz: <input type="text" name="Ism">
               Sharifingiz: <input type="text" name="sharf">
               Tug'ilgan sanangiz: <input type="number"  name="sana"> 
               Telefon raqamingiz: <input type="number"   name="raqam">
               Email: <input type="text" name="email"> 
               Parol: <input type="password" name="parol"> 
               Oilangiz haqida ma'lumot:</p> <textarea class="box5"></textarea> <br>
               <button class="button">Yuborish</button>
            </form>

         </div>

         <div class="form1">
            <img src="ptichka.png" alt="">
            
         </div>
         
      </div>

    



 </body>
</html>