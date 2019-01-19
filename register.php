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
    
    <div class="uk-section uk-container uk-text-center">
        <div class="uk-grid uk-child-width-1-3@s uk-child-width-1-1" uk-grid="">
            <form class="uk-form-stacked js-register">
                <h2>Register</h2>

                <div class="uk-margin">
                    <label class="uk-form-label" for="form-stacked-text">Email</label>
                    <div class="uk-form-controls">
                        <input class="uk-input" id="form-stacked-text1" type="email" required="required" placeholder="email@email.com">
                    </div>
                </div>
                <div class="uk-margin">
                    <label class="uk-form-label" for="form-stacked-text">Password</label>
                    <div class="uk-form-controls">
                        <input class="uk-input" id="form-stacked-text2" type="password" required="required"   placeholder="Your Password">
                    </div>
                </div>
                <div class="uk-margin uk-alert uk-alert-danger js-error" style='display:none;'></div>

                <div class="uk-margin">
                    <button class="uk-button uk-button-default"type="submit">Register</button>
                </div>

            </form>
        </div>
    </div>





<?php require_once "inc/footer.php"; ?>

</body>
</html>