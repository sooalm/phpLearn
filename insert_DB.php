<?php 
//инсерт полученных данных

 $sql = "INSERT INTO users (username, email, password, sex, languages,identity,aboutMe,fileName, dateReg) VALUES 
   ('$username', '$email', '$password', '$sex', '$langString','$identity','$aboutMe','$fileName','$dateReg')";
//$sql = "INSERT INTO users (username) VALUES ('$username')";
//echo "    " . $password;
if ($conn->query($sql) === TRUE) {
   //echo "Успешно создана новая запись";
} else {
   echo "Ошибка: " . $sql . "<br>" . $conn->error;
}

mysqli_close($conn);




?>