<?php 
  $title = "Профиль";
  $headline ="Отправленные данные";
  require_once "./header.php";
  session_start();
?>

<body>
<div class="container">  
        <div class="row">
<div class=" col-lg-8 col-md-8 ">
    <h4>О пользователе</h4> 
    <table class="table table-th-block">
      <tbody>
       <tr><td class="active">Зарегистрирован:</td><td><?=$_SESSION['dateReg']?></td></tr>
       <tr><td class="active">Имя:</td><td><?=$_SESSION['username']?></td></tr>
       <tr><td class="active">Почта:</td><td><?=$_SESSION['email']?></td></tr>
       <tr><td class="active">Пароль (md5):</td><td><?=$_SESSION['password']?></td></tr>
       <tr><td class="active">Пол:</td><td><?=$_SESSION['sex']?></td></tr>
       <tr><td class="active">Языки:</td><td><?=$_SESSION['langString']?></td></tr>
       <tr><td class="active">Идентичность:</td><td><?=$_SESSION['identity']?></td></tr>
       <tr><td class="active">О себе:</td><td><?=$_SESSION['aboutMe']?></td></tr>
     </tbody>
    </table>
 </div>
 <?php $temp =  "usersImages\\".$_SESSION['fileName'];?>
  
  <div class="  col-md-4 my-3 " > 
  <img class = "img-fluid " src=  <?echo $temp?>>
  </div> 
</div> 
</div>
</body>
  