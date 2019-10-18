<?php
header("Content-type: text/html; charset=utf-8");
error_reporting(-1);

require_once ('func.php');

if ( ! empty( $_POST ) ) {
	save_mess();

	//решаем проблему f5
	header("Location: {$_SERVER['PHP_SELF']}");
	exit();
}

$messages = get_mess();
$messages = array_mess($messages);
?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
		  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Гостевая книга</title>
	<style>
		.messages {
			border: 1px solid #ccc;
			padding: 1rem;
			margin-bottom: 1rem;
			border-radius: .3rem;
		}
	</style>
</head>
<body>

	<?php
	if ( ! empty($messages) ) {
		foreach ($messages as $message) {
			$mes = get_format_mess($message);
			?>
			<div class="messages">
				<p>Автор: <?php echo $mes['0']; ?> | Дата: <?php echo $mes['2']; ?> </p>
				<div class="message"><?php echo nl2br( htmlspecialchars( $mes['1'] ) ); ?></div>
			</div>
			<?php
		}
	} ?>

	<form method="post">
		<p>
			<label for="name">Имя:</label><br>
			<input type="text" name="name" id="name">
		</p>
		<p>
			<label for="name">Текст:</label><br>
			<textarea name="text" id="text" cols="30" rows="10"></textarea>
		</p>
		<button type="submit">Написать</button>
	</form>

</body>
</html>
