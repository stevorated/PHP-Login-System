
<?php 
    // allow to config
    define('__CONFIG__', true);
    // require the config
    require_once 'inc/config.php' ; 
?>

<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1"/>

    <title>Page Title</title>

    <!-- CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.2/css/uikit.min.css" />
</head>

<body>

<div class="uk-section uk-container">
    <?php 
        echo 'hello world. today is ';
        echo date('Y m d');
    ?>
    <p>
        <a href="login.php">Login</a>
        <a href="register.php">Register</a>
    </p>
</div>





<?php require_once "inc/footer.php"; ?>

</body>
</html>
