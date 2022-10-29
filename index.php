<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Printing for screen</title>
</head>
<body>
    <h1>Master of PHP</h1>
    <!--Now let's make an h2, a list and a paragraph.-->
    <?php
        echo'<h2>Videogames list.</h2>';
        echo'<ul>
                <li>Item-1</li>
                <li>Item-2</li>
                <li>Item-3</li>
            </ul>';
    // With the point we can join or concatenate code fragments
        echo '<p>First phrase' . ', second  phrase.</p>';

    ?>

    <!-- The PHP tags can insert in anywhere of code -->
    <!-- We see a shortcut for create a echo -->
    <?= ?>
    <?='<p>This is a shortcut</p>';?>
    <?='This is other echo, but without any HTML tags';?>
</body>
</html>

