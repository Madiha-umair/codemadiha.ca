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
    
    echo '<h1>PHP and Creating Output</h1>';
  
    echo "<p>The PHP echo command can be used to create output.</p>";
    
    echo '<p>When creating output using echo and PHP, quotes can often cause problems. There are several solutions to using quotes within an echo statement:</p>';
    
   
    echo "<ul>
        <li>Use HTML special characters</li>
        <li>Alternate between single and double quotes</li>
        <li>Use a backslash to escape quotes</li>
    </ul>";
    
    echo "<h2>More HTML to Convert</h2>";
    

    echo '<p>PHP says "Hello World!"</p>';
    ?>
    
    <?php 
    echo "<p>Can you display a sentence with ''' and \" \" \"?</p>"; 
    echo "<p>Can you also display with dot '''" . ' and " " "?</p>'; 
    echo '<img src="php-logo.png">';
    ?>

  </body>
</html>