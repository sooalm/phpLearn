<?php
    $title = "Contact us";
    $headline = "Свяжитесь с нами";
    require_once "./header.php";
    
    session_start();
   
?>


<div class="container mt-2">
    <form enctype="multipart/form-data" action="check_post.php" method="post">

        <div >
           
            <label for="inputName">Введите имя</label>
            <input  required type="text" class="form-control" id="inputName" name="username"  placeholder="имя" >
                <div class="text-danger"><?=$_SESSION['error_username']?></div>
        </div>

        <div class="mb-2">
            <label for="inputEmail">Введите email</label>
            <input required type="email" class="form-control" id="inputEmail"  name="email"  placeholder="почта@gmail.com"  >
        </div>

        <div class="mb-2">
            <label for="inputPassword">Введите пароль</label>
            <input required type="password" class="form-control" id="inputPassword" name="password" placeholder="пароль"  >
                <div class="text-danger"><?=$_SESSION['error_password']?></div>
        </div>

        <div class="mb-2">
       
            <label for="inputFile" class="form-label">Выберите фотографию (файл) </label>
            <input type="file" class="form-control-file"  id="inputFile" name ="avatar">
        </div>

        <div class="mb-2">
            <textarea name="message" placeholder="Напишите о себе" class="form-control"> </textarea><br/>
                <div class="text-danger"><?=$_SESSION['error_aboutMe']?></div>
        </div>
        
        <label class="form-check-label">Ваш пол</label>         <label class="form-check-label space120 ">Выберите языки, которые вы учите</label><br>
        
        <div class="form-check form-check-inline" >
            <input class="form-check-input" type="radio" name="sex"  value="option1">
            <label class="form-check-label" for="male">М</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="sex"  value="option2">
            <label class="form-check-label" for="female">Ж</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="sex"  value="option3" >
            <label class="form-check-label" for="it">Не знаю</label>
        </div>

        

        <div class="form-check form-check-inline ml-5">
            <input class="form-check-input " type="checkbox" id="PHPcheck" name="langCheck[]" value="PHP">
            <label class="form-check-label" for="PHPcheck">PHP</label>
        </div>
        <div class="form-check form-check-inline ">
            <input class="form-check-input" type="checkbox" id="JScheck" name="langCheck[]" value="JS">
            <label class="form-check-label" for="JScheck">JS</label>
        </div>
        <div class="form-check form-check-inline ">
            <input class="form-check-input" type="checkbox" id="Rubycheck" name="langCheck[]" value="Ruby">
            <label class="form-check-label" for="Rubycheck">Ruby</label>
        </div>
       

        <div class="form-group">
            <label for="select1">Вы:</label>
            <select class="form-control" name="select" id="select1">
                <option>Человек</option>
                <option>Волк</option>
                <option>Кофеин</option>
                <option>Робот</option>
            </select>
        </div>
       <div class="d-flex justify-content-end">
            <input type="reset" class="btn btn-primary me-md-2" name="reset"  class="form-control" >
            <input type="submit" value="Отправить" class="btn btn-success ml-2 ">
        </div>
    </form>
   
</div>





<?php
    require_once "./footer.php";   
?>