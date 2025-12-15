<?php
error_reporting(E_ALL & ~E_DEPRECATED);
require_once __DIR__ . '/../vendor/autoload.php';

use App\FormFactory;

$formConfig = require __DIR__ . '/../config/form.php';

$fields = FormFactory::build($formConfig);



$errors = [];
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	$validator = new FormLib\Validation($_POST);

	$validator->required('email', 'Email is required');
	$validator->email('email', 'Please enter a valid email address');

	$validator->required('username', 'Username is required');
	$validator->required('password', 'Password is required');
	$validator->required('country', 'Select a country');
	$validator->required('gender', 'Select a gender');
	$validator->required('privacy', 'Box must be checked');

	if ($validator->hasErrors()) {
		$errors = $validator->getErrors();
	}
}
?>
<!DOCTYPE html>
<html lang="de">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Input Test</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
		integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
		crossorigin="anonymous"></script>
</head>

<body>
	<div class="container mt-5">
		<h1>Input Test</h1>
		<form action="" method="post">

			<?php require __DIR__ . '/../templates/errors.php'; ?>
			<?php foreach ($fields as $field): ?>
				<div class="mb-3">
					<?= $field->render(); ?>
				</div>
			<?php endforeach; ?>

		</form>
	</div>
</body>

</html>