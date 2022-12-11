<?php
    $title = "Пользователь";
    $headline ="Обработка данных";
    require_once "./header.php";

    session_start();
    //очищаем сессию чтобы ошибки не отображались постоянно
    unset($_SESSION['error_username']);
    unset($_SESSION['error_password']);
    unset($_SESSION['error_aboutMe']);

    //функция для редиректа обратнов в страницу-формы в случае ошибки
    function redirect(){
      header('Location: index.php');
      exit;
    }
    
 
  //присвоение переменных для дальнейшего использования в html части
  $_SESSION['username'] = $username = $_POST['username']; 
  $_SESSION['email'] = $email = $_POST['email'];         //почта
  $_SESSION['aboutMe'] = $aboutMe = $_POST['message'];    //о себе
  $_SESSION['identity'] = $identity = $_POST['select'];    //Селект : человек, волк, робот,кофеин
  $_SESSION['password'] = $password = md5($_POST['password']);//хеш пароля
  $_SESSION['dateReg'] = $dateReg = date("d.m.y");       //дата регистрации
  $_SESSION['fileName'] = $fileName = basename( $_FILES["avatar"]["name"]);
  
  //сохраняем аватар в папку на сервере, его имя будет храниться в БД
  $destination_dir = getcwd().DIRECTORY_SEPARATOR . "usersImages\\";
  $target_path = $destination_dir . basename( $_FILES["avatar"]["name"]);
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
  $_SESSION['sex'] = $sex;


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
    $_SESSION['langString'] = $langString;
    
    
    //обработка ошибок
if( strlen(trim($username))< 3)
{
    $_SESSION['error_username'] = "Имя должно содержать больше 3 символов";
    redirect();
} else if(strlen(trim($password))<5)
  {
    $_SESSION['error_password'] = "Пароль не может быть менее 5 символов";
    redirect();
  } else if( strlen($aboutMe)<5)
    {
      $_SESSION['error_aboutMe'] = "Напишите хотя бы 5 символов";
      redirect();
    }else
     {
      $subject="=?utf-8?B?".base64_encode("Связь с нами")."?=";
      $headers="From: $email\r\rReply-to: $email\r\r Content-type:text/plain; charset=utf-8\r\n";
      mail("admin@local.com",$subject,$username,$aboutMe,$identity,$headers);
     }
    


  


// подключаемся к базе данных
require_once "./connect_DB.php";
// вносим полученные с формы данные в нашу БД
require_once "./insert_DB.php";

 // введенные данные
 header('Location: profile.php');
 exit;



