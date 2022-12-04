<?php
    $title = "Пользователь";
    $headline ="Ваш профиль";
    require_once "./header.php";

 
  //присвоение переменных для дальнейшего использования в html части
$username = $_POST['username'];
if( trim($username) == "")
{
    echo " Ошибка: Поле Имя не должно быть пустым"; //выводит сообщение если поле имя заполнено пробелами
}
else{

  
  $email = $_POST['email'];         //почта
  $aboutMe = $_POST['message'];    //о себе
  $identity = $_POST['select'];    //Селект : человек, волк, робот,кофеин
  $password = md5($_POST['password']);//хеш пароля
  $dateReg = date("m.d.y");       //дата регистрации
  $fileName = basename( $_FILES["avatar"]["name"]);
  //сохраняем аватар в папку на сервере, его имя будет храниться в БД
  
  $destination_dir = getcwd().DIRECTORY_SEPARATOR . "usersImages\\";// МУСОРНЫЙ КОММЕНТ: $destiation_dir = "\usersImages";//if( isset($_FILES) && $_FILES['avatar']['name'] == 0){ echo ' Файл загружен  ';}
  echo $destination_dir;echo ' ';
  $target_path = $destination_dir . basename( $_FILES["avatar"]["name"]);
  echo $target_path;  //echo __DIR__.$destiation_dir;
  move_uploaded_file($_FILES['avatar']['tmp_name'], $target_path );

  switch($_POST['sex'] )           //пол пользователя
  {
    case 'option1':
        $sex = "мужской";
        break;
    case 'option2':
        $sex = "женский";
         break;
    default:
         $sex = "не указан";
        break;
  }


  // массив чекбоксов языков -> в строку для удобства
    $langString;                   
    if(empty($_POST['langCheck'])) 
    {
      $langString = "Вы не выбрали ни одного языка.";
    } 
   else
    {
      $N = count($_POST['langCheck']);

      if($N==1){  //echo("Вы выбрали $N язык: ");
          $langString .="Изучает $N язык: ".$_POST['langCheck'][0];
        }
        else {
          // echo("Вы выбрали $N языка: ");
          $langString .="Изучает $N языка: ";
            for($i=0; $i < $N; $i++)
            {
            $langString .= $_POST['langCheck'][$i] . " " ;
            }
        }
    }
  }
  
  


// подключаемся к базе данных
require_once "./connect_DB.php";
// вносим полученные с формы данные в нашу БД
require_once "./insert_DB.php";
?>

<body>
<div class="container">  
        <div class="row">
<div class=" col-lg-8 col-md-8 ">
    <h4>О пользователе</h4> 
    <table class="table table-th-block">
      <tbody>
       <tr><td class="active">Зарегистрирован:</td><td>ЕЩЕ НЕ СДЕЛАЛ</td></tr>
       <tr><td class="active">Имя:</td><td><?php echo $username?></td></tr>
       <tr><td class="active">Почта:</td><td><?php echo $email?></td></tr>
       <tr><td class="active">Пароль (md5):</td><td><?php echo $password ?></td></tr>
       <tr><td class="active">Пол:</td><td><?php echo $sex?></td></tr>
       <tr><td class="active">Языки:</td><td><?php echo $langString?></td></tr>
       <tr><td class="active">Идентичность:</td><td><?php echo $identity?></td></tr>
       <tr><td class="active">О себе:</td><td><?php echo $aboutMe?></td></tr>
     </tbody>
    </table>
 </div>
 
  <div class="  col-md-4 my-5 " >
  <img class = "img-fluid " src="https://www.meme-arsenal.com/memes/a5365dfac79e08ce52538cfcb9124d3f.jpg">
  </div> 
</div> 
</div>
</body>
  