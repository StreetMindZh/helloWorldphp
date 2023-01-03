<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hello World</title>
    
</head>
<style>
    .question{
        font-size: 30px;
        color: green;
    }

    </style>
<body>
    <div>
    <?php
        echo "<p>Hello World!</p>";
        $firstName = "Zlatko";
        $lastName = "Jankovski";
        echo "Hello $firstName $lastName! <p class=question>how are you?</p>";

        

    ?>
    </div>
</body>
</html>