<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Just LINK</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
	<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>	
	<link rel="shortcut icon" href="/img/logo.svg" /> 
	<link rel="stylesheet" href="css/main.css">	
	<link rel="stylesheet" href="css/gr8t.css">
	<link rel="stylesheet" href="css/media.css">
</head>
<body>
	<div class="wrapper" id="center-heigh">
		<div class="hello-block">
			<div class="tac">
				<img src="img/logo.svg">
			</div>
			<p>Cut link</p>
			<input type="text" autocomplete="off" name="link" placeholder="Your link">
			<div class="tac">
				<div class="my-btn">Cut</div>
			</div>
			<div class="lang-picker">
				<div class="d-flex jcsb">
					<div class="pointer ru">RU</div>
					<div class="pointer en cfff">EN</div>
					<div class="selector"></div>

				</div>

			</div>
		</div>

		<div class="load-block tac">
			<img src="img/load.gif">
		</div>


		<div class="link-block">
			<div class="tac">
				<img src="img/logo.svg">
			</div>
			<p>Your shortened link</p>
			<div class="d-flex jcc tac">
				<div class="link"></div>
				<div onclick="copytext('.link-block .link')" class="copy pointer ml-2 mr-2"><img src="img/copy.svg"></div>
				<a target="_blank" class="enter pointer"><img src="img/enter.svg"></a>
			</div>
			<div class="tac">
				<div class="my-btn">Cut something else</div>
			</div>
		</div>

	</div>

	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js" integrity="sha384-LtrjvnR4Twt/qOuYxE721u19sVFLVSA4hf/rRt6PrZTmiPltdZcI7q7PXQBYTKyf" crossorigin="anonymous"></script>
	<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	<script src="js/index.js"></script>
</body>
</html>