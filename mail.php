<?php
if (!empty($_POST['name']) AND !empty($_POST['bday']) AND !empty($_POST['vocation']) AND !empty($_POST['start']) AND !empty($_POST['end']) ANd !empty($_POST['phone'])){
    $headers = 'From:Հայրենիքի Վահան';
    $letter = 'Տվյալներ';
    $letter .='Անուն:\r\n';
    $letter .='Ծննդյան ամսաթիվ:\r\n';
    $letter .='Զինվորական կոչում:\r\n';
    $letter .='Վերջին պաշտոնը:\r\n';
    $letter .='Ծառայության սկիզբը:\r\n';
    $letter .='Ծառայության ավարտը:\r\n';
    $letter .='Հեռախոս:\r\n';
    $letter .='e-mail:\r\n';
 if(mail('vika.rostomyan@gmail.com', 'new letter', $letter, $headers)){
    header('Location:/fine.php');
 }else{
    header('Location:/error.php');
 }
}else{
    header('Location:/error.php');
}