<?php 

	// Allow the config
	define('__CONFIG__', true);

	// Require the config
	require_once "../inc/config.php"; 

	if($_SERVER['REQUEST_METHOD'] == 'POST') {
		// Always return JSON format
		// header('Content-Type: application/json');

		$return = [];

		$email = Filter::String( $_POST['email'] );
		$password = $_POST['password'];

		// Make sure the user does not exist. 
		$findUser = $con->prepare("SELECT user_id, password FROM users WHERE email = LOWER(:email) LIMIT 1");
		$findUser->bindParam(':email', $email, PDO::PARAM_STR);
		$findUser->execute();

		if($findUser->rowCount() == 1) {
			// User exists , Try signing in.
			$User = $findUser->fetch(PDO::FETCH_ASSOC);

			$user_id = (int) $User['user_id'];
			$hash = $User['password'];
			// User Validation
			if(password_verify($password, $hash)) {
				//User signed in
				$return['is_logged_in'] = true;
				$return['redirect'] = '/dashboard.php?message=welcome';
				$_SESSION['user_id'] = $user_id;
			} else {
				//invalid user
				$return['error'] = "invalid user/password";
			}

		} else {
			//  
			$return['error'] = "email Does Not Exist! check your email or <a href='/register.php'> create a new account</a> ";

		}

		echo json_encode($return, JSON_PRETTY_PRINT); exit;
	 	} else {

			// Die. Kill the script. Redirect the user. Do something regardless.
			exit('Invalid URL');

		
	}
?>
