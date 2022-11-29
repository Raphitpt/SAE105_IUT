<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php
    session_start();
    $_SESSION['email'] = $_POST['zt_email'];
    $_SESSION['question'] = $_POST['zt_question']; 
    $zt_email = $_POST['zt_email'];
    $zt_question = $_POST['zt_question'];
    $today = date("Y-m-d H:i:s");
    $points = "----------------------------------------";
    file_put_contents('./question.txt', "$today", FILE_APPEND);
    file_put_contents('./question.txt', "\n\n$zt_email", FILE_APPEND);
    file_put_contents('./question.txt', "\n\n$zt_question", FILE_APPEND);
    file_put_contents('./question.txt', "\n\n$points\n\n", FILE_APPEND);
    
?>

</body>
</html>
