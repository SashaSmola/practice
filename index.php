
<?php
ini_set('display_errors', 0);
ini_set('display_startup_errors', 0);
error_reporting(E_ALL);
session_start();
$error_name="";
$error_email="";
$error_phone="";
$error_text="";
$error=false;
$success="";
$numbers=0;
$storage='database.txt';
$file = fopen("database.txt", "a+");
$strings = file($storage, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);






if (isset($_POST["done"])){


	$_SESSION["name"]=$_POST["name"];
$_SESSION["email"]=$_POST["email"];
$_SESSION["phone"]=$_POST["phone"];
$_SESSION["text"]=$_POST["text"];
if ( $_POST["name"] == "" or $_POST["email"] == "" or $_POST["phone"] == "" or $_POST["text"] == '') {
if ($_POST["name"]==""){ 
$error_name="Вы не написали имя!";
$error=true;}
if ($_POST["email"]==""){
$error_email="Вы не написали email!";
$error=true;}
	
if ($_POST["phone"]==""){
$error_phone="Вы не написали номер телефона!";
$error=true;}
	
if ($_POST["text"]==""){
$error_text="Вы не написали текст!";
$error=true;}
	




} 

if (!$error){
	
	$numbers+=1;
	$success= "Спасибо за обращение.Мы скоро с вами свяжемся";
	$log="Пользователь ".$_POST["name"]." c Эл.почтой : ".$_POST["email"]." и с номером телефона: ".$_POST["phone"]." и с текстом : ".$_POST["text"]." обратился к нам ! <br>";		
//$input= json_encode($log,JSON_UNESCAPED_UNICODE);
fwrite($file,$log .PHP_EOL);
//$output=json_decode("database.txt",true);
$output=file($storage,FILE_IGNORE_NEW_LINES);
$total_lines = count($output);
$line_number = 0;

	   
	   
   
    
 
}
	$success= "Спасибо за обращение.Мы скоро с вами свяжемся";

};
	
	








?>








<!doctype html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Практика</title>
   <link rel="stylesheet" href="index.css">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  </head>
  
  
  <body>
<style>
body {
	background-image:url("background.jpg");
	background-repeat: no-repeat;
	background-size:cover;
}


</style>


   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  <ul class="nav nav-fill nav-underline ">
  <li class="nav-item">
    <a class="nav-link active" aria-current="page" href="index.php">Форма связи</a>
  </li>
  <li class="nav-item">
    <a class="nav-link"  href="news.php">Новости</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Ссылка</a>
  </li>
</ul>

<div class="row">
<div class="col-3">
<div class="col"><span class="weeklynews">Новости</span><script type="text/javascript" src="http://weekly-news.ru/informer.htm?theme=&num=3&width=240&css=&font=Arial&bgcolor=&bsize=0&bcol=DDDDDD&tcol=000000&tsize=16&lcol=0000C0&lsize=13&dcol=333333&dsize=12&img=1&desc="></script></div>


</div>
  <div class="col-5 border rounded-4 fs-4    mt-5 " id="forma" >
  <form action="" method="POST">
  <div class="row g-3">
  <div class="col">
   <label for="name" class="form-label" >Ваше имя</label>
    <input type="text" class="form-control" placeholder="Имя" name="name" value= "<?=$_SESSION["name"] ?>">  <span style=" color:red"><?=$error_name ?></span>
  </div>
  <div class="col">
   <label for="email" class="form-label"    >Ваш адрес электронной почты</label>
    <input type="email" class="form-control" placeholder="Email" name="email" value= "<?=$_SESSION["email"] ?>" id="email"  ><span style=" color:red"><?=$error_email ?></span>
  </div>
</div>
<div class="row g-3">
  <div class="col">
   <label for="phone" class="form-label"    >Ваш номер телефона</label>
    <input  type="text" class="form-control" placeholder="Номер телефона" name="phone" value= "<?=$_SESSION["phone"] ?>" id="phone" ><span style=" color:red"><?=$error_phone ?></span>
  </div>
  <div class="col">
   <label for="text" class="form-label"    >Текст</label>
    <input type="text" class="form-control" placeholder="Текст" name="text" value= "<?=$_SESSION["text"] ?>" id="text" ><span style=" color:red"><?=$error_text ?></span>
  </div>
  <div class="row g-3">
  <button class="btn btn-success align-content-center  " name="done">Отправить</button>
  <span class="form-label align-content-center"  ><?=$success?></span>
  </div>
  
  
  
  </div>
  
 

   
  
  
  
  
  
  
  
  
  </form>
  </div>
  
  </div>
   <div class="container p-5">
   <div class="row p-5" id=""> <?php
   ini_set('display_errors', 0);
ini_set('display_startup_errors', 0);
error_reporting(E_ALL);
     include "outputdata.php";

   ?> </div>
   <div class="row p-5" id="">  </div>
   <div class="row p-5" id=""> </div>
   
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
 
  
  
  
  
  
  </body>
  
</html>