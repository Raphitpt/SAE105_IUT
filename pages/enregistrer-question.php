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
    $_POST['zt_question'] = str_replace("\r\n",' <br/> ',$_POST['zt_question']);
    $tableau=[
        $_POST['zt_email'],
        $zt_question= $_POST['zt_question']. "\r----------------------------------------",
        $today = date("Y-m-d H:i:s"),
        
    ];
    var_dump($tableau);
    file_put_contents('./question.txt', "\r$tableau[2]\n", FILE_APPEND);
    file_put_contents('./question.txt', "$tableau[0]", FILE_APPEND);
    file_put_contents('./question.txt', "\n$tableau[1]", FILE_APPEND);
    $alert = "Your message has been sent to ";
    echo '<script type="text/javascript">alert("'.$alert.'");';
    echo '</script>';

    header("Location: ./../index.html");
    exit();


    
?>

</body>
</html>
