<?php 

	// Allow the config
	define('__CONFIG__', true);
	// Require the config
	require_once "inc/config.php"; 


	ForceLogin();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<meta name="robots" content="follow">

<title>Dashboard</title>

<base href="/" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.2/css/uikit.min.css" />
</head>

<body>
  	

  	<div class="uk-section uk-container">
      Secret Info
  	    <?php require_once "inc/footer.php";?> 
    </div>
</body>
</html>
