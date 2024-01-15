<?php

// require 'classes/LanguageGame.php';
// require 'classes/Player.php';
// require 'classes/Word.php';
// require 'classes/Data.php';

$game = new LanguageGame();


?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Game</title>
</head>
<body>
	<br>
<form method="post">
    <label for="nickname">Enter your nickname:</label>
    <input type="text" id="nickname" name="nickname" required>
    <button type="submit" name="submit">Start Game</button>
	<button>RESET</button>
</form>

</body>
</html>
