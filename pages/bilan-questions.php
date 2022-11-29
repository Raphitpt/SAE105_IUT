<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
  <link href="./../assets/css/style_page_questions.css" rel="stylesheet">
  <?php include("./enregistrer-question.php");?>
  <title>Bilan des questions</title>
</head>

<body>
  <div class="container">
    <h1>Bilan des <?php ?> questions</h1>
    <div class="response">
      <?php 
       for ($i = 1; $i <= 10; $i++) {
        echo $_SESSION['email'];
       }
      ?>
    </div>
<hr>
</body>

</html>