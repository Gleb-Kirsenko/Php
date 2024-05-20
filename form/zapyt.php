<?php  
  // оголошуємо змінну, в яку будемо зберігати результати роботи
  $data['result']='error'; 
  // якщо дані були відправлені методом  POST, то...
  if ($_SERVER['REQUEST_METHOD'] == 'POST') { 
    $data['result']='success';
    //отримати імя, яке ввів клієнт
    if ((isset($_POST['first_name'])) && (strlen(trim($_POST['first_name'])) > 0)) {
      $first_name = stripslashes(strip_tags($_POST['first_name']));
    } else {
      $data['result']='error';
	    $data['first_name']='Поле імя відсутнє.';
    } 
    //отримати прізвище, який ввів клієнт
    if (isset($_POST['last_name']))  {
      $last_name = stripslashes(strip_tags($_POST['last_name']));
     } else {
      $data['result']='error';
	    $data['last_name']='Поле прізвище відсутнє';
    }   
	 //отримати телефон, який ввів клієнт
    if ((isset($_POST['phone_number'])) && (strlen(trim($_POST['phone_number'])) > 0)) {
     $phone_number = stripslashes(strip_tags($_POST['phone_number']));
    } else {
      $data['result']='error';
	    $data['phone_number']='Поле телефон відсутнє.';
    } 
    //отримати пошту, яке ввів користувач
    if (isset($_POST['email'])) {
      $email = stripslashes(strip_tags($_POST['email']));
          } else {
            $data['result']='error';
      	    $data['email']='Поле email відсутнє.';

    } 
  } 
  else {
    //помилка - не існує асоціативний масив $_POST["send-message"]
    $data['result']='error';
	  $data['files']=' не існує асоціативний масив POST '; 
  }
 
  // подальші дії якщо помилок не виявлено
  if ($data['result']=='success') {
  	//1. занесення в БД
    include("con_bd.php");   
    $resultsql = mysqli_query($link,"INSERT INTO clients(first_name, last_name, phone_number, email)
    VALUES ('$first_name', '$last_name', '$phone_phone_number', '$email')");
    mysqli_close($link);

  }
 
  echo json_encode($data);
 
?> 