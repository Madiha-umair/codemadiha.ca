<!DOCTYPE html>
<html>
    <head>
        <title>PHP Exercise 2: Links and If Statements</title>
    </head>
    <body>
        <h1>PHP Exercise 2: Links and If Statements</h1>
        <p>Use PHP echo and variables to output the
        following link information, use if statements
        to make sure everything outputs correctly:</p>
        <?php
        $randomNumber = ceil( rand( 1,3 ) );
        echo '<p>The random number is '.$randomNumber.'.</p>';
            if( $randomNumber == 1 )
            {
                $linkName = '';
                $linkURL = '<a href="https://www.codecademy.com/">https://www.codecademy.com/</a>';
                $linkImage = ' <img src="https://i.pcmag.com/imagery/reviews/05XBKmNFYeHCMIn726Nohqb-10.fit_scale.size_1028x578.v1627594235.png" alt="Code Acadmy logo" width="500" height="600">';
                $linkDescription = 'Learn to code interactively, for free.';
                }
            elseif( $randomNumber == 2 )
            {
                $linkName = '<a href="https://www.w3schools.com/">W3Schools</a>';
                $linkURL = '<a href="https://www.w3schools.com/">https://www.w3schools.com/</a>';
                $linkImage = '';
                $linkDescription = 'W3Schools is optimized for learning,
                testing, and training.';
                }
            else
            {
                $linkName = '<a href="https://www.codecademy.com/">Mozilla Developer Network</a>';
                $linkURL = '';
                $linkImage = '';
                $linkDescription = 'The Mozilla Developer Network (MDN)
                provides information about Open Web technologies.';
            }
            if($linkName != ''){
                echo '<h2>'.$linkName.'</h2>';
            } else{
                echo '<h2>'.$linkURL.'</h2>';
                //echo '<h2>'.parse_url($linkURL, PHP_URL_HOST).'</h2>'; // its not working for me!
            }

            if($linkURL != ''){
                echo '<h2>'.$linkURL.'</h2>';
            } else{
                echo '<h2>'.('https://www.'.$linkName.'.com/').'</h2>';
            }

            if($linkImage != ''){
                echo '<h2>'.$linkImage.'</h2>';
            } else{
                echo '<h2>'.($linkName).'.jpg</h2>';
            }

            if($linkDescription != ''){
                echo '<h2>'.$linkDescription.'</h2>';
            } else{
                echo '<h2>'.($linkName).'</h2>';
            }
        ?>
    </body>
</html>
