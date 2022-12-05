<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Hind:wght@300&display=swap" rel="stylesheet">
  <link rel="icon" type="image/png" href="./../assets/images/ico.png" />
  <link href="./../assets/css/style_page_questions.css" rel="stylesheet">
  <title>Bilan des questions</title>
</head>

<body>
  <div class="container">
    
    <?php       
        error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING);
        $file =  file_get_contents('question.txt',FILE_SKIP_EMPTY_LINES);
        $monTab = array();
        $Separateur = "\n";
        $parseLine = explode("\r----------------------------------------",$file);
         
        foreach($parseLine as $line) {
            $dec = explode($Separateur, $line);
            array_push($monTab, array(
                'date'           =>   $dec[0],    
                'zt_email'        =>   $dec[1],    
                'zt_question'      =>   $dec[2],

            ));
          }

          $compteur = count($monTab) - 1;
          if ($compteur == 0){
            echo "<h1>Il n'y a aucune question pour le moment</h1>";
          } else {
            echo '<h1>Bilan des '.$compteur. ' questions déposées</h1>';
          };
          for ($i = 0; $i < $compteur; $i++) {
            echo '<div class="reponse">
            <p id=hautDiv>le '.$monTab[$i]['date'].' par 
            <span>'.$monTab[$i]['zt_email'].'</span>
            </p><br><p id="question">'.$monTab[$i]['zt_question'].'</p>
            <a id="repondre" href="mailto:'.$monTab[$i]['zt_email'].'">Répondre</a>
            </div>';} 
          
        
        
        
      ?>
  </div>
  <hr>
      </body>


</html>