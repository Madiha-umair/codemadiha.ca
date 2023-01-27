<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Links and Variables</title>
</head>
<body>
<?php
     echo '<h1>Links and Variables</h1>' ;
     echo '<p>Use PHP echo and variables to output the 
           following link information:</p>' ;   
     echo  '<hr>' ;
    ?>
    <?php
    $linkName = 'Codecademy';
    $linkURL = 'https://www.codecademy.com/';
    $linkImage = 'https://images.codecademy.com/social/logo-codecademy-social.png';
    $linkDescription = 'Learn to code interactively, for free.';
    
    echo '<h1>'.$linkName.'</h1>'; 
    echo '<h1> <a href='.$linkURL.'> '.$linkURL.' </a></h1>'; 
    echo '<img src='.$linkImage.' alt="code academy image" height="100" width="100"  >'; 
    echo '<h1>'.$linkDescription.'</h1>'; 
    ?> 
</body>
</html>