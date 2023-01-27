<?php

require_once __DIR__ . '/incs/data.php';
require_once __DIR__ . '/incs/functions.php';

if(!empty($_POST)){
   //  debug($_POST);
    $fields = load($fields);
   //  debug($fields);
    if($errors = validate($fields)){
        debug($errors);
    }else{
        // mail
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	 <meta http-equiv="refresh" content="10">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="style.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
</head>

<body>
	<main>
		<?php
		if($message_sent):
		?>

			<h2 class="form-title">Thanks, we'll be in touch</h2>

			<?php
			else:
				?>

		<section class="section">
			<h1 class="form-title">Send e-mail</h1>
			<form class="form" method="post">
				<input class="form-input" type="text" name="name" placeholder="Full name">
				<input class="form-input" type="text" name="mail" placeholder="Your e-mail">
				<input class="form-input" type="text" name="subject" placeholder="Subject">
				<textarea class="form-textarea" name="message" placeholder="Message"></textarea>
				<button class="button" type="submit" name="submit">send mail</button>
			</form>
		</section>

		<?php
		endif;
		?>
	</main>
</body>

</html>