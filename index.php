<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="css/main.css">
	<title>Riddles</title>
</head>
<body>

	<h1>Riddle Me This!</h1>

<?php
	$quizPieces = array(

		array('q' => 'what is this?', 'this', 'that', 'them', 'correct' => 'the other'),
		array('q' => 'what is this?', 'this', 'that', 'them', 'correct' => 'the other'),
		array('q' => 'what is this?', 'this', 'that', 'them', 'correct' => 'the other'),
		array('q' => 'what is this?', 'this', 'that', 'them', 'correct' => 'the other'),
		array('q' => 'what is this?', 'this', 'that', 'them', 'correct' => 'the other'),
		array('q' => 'what is this?', 'this', 'that', 'them', 'correct' => 'the other'),
		array('q' => 'what is this?', 'this', 'that', 'them', 'correct' => 'the other'),
		array('q' => 'what is this?', 'this', 'that', 'them', 'correct' => 'the other'),
		array('q' => 'what is this?', 'this', 'that', 'them', 'correct' => 'the other'),
		array('q' => 'what is this?', 'this', 'that', 'them', 'correct' => 'the other'),
		array('q' => 'what is this?', 'this', 'that', 'them', 'correct' => 'the other'),
		array('q' => 'what is this?', 'this', 'that', 'them', 'correct' => 'the other'),
		array('q' => 'what is this?', 'this', 'that', 'them', 'correct' => 'the other'),
		array('q' => 'what is this?', 'this', 'that', 'them', 'correct' => 'the other'),
		array('q' => 'what is this?', 'this', 'that', 'them', 'correct' => 'the other'),
		array('q' => 'what is this?', 'this', 'that', 'them', 'correct' => 'the other'),
		array('q' => 'what is this?', 'this', 'that', 'them', 'correct' => 'the other'),
		array('q' => 'what is this?', 'this', 'that', 'them', 'correct' => 'the other'),
		array('q' => 'what is this?', 'this', 'that', 'them', 'correct' => 'the other'),
		array('q' => 'what is this?', 'this', 'that', 'them', 'correct' => 'the other')
		
	);
	// var_dump($quizPieces);
	// echo count($quizPieces);
?>
<?php
	for ($n = 1; $n < count($quizPieces); $n++) {
	echo "
		<section class='box'>
			<h2>
				Question";
	echo $n;
	echo "	 
			</h2>
			<p>
				";
	echo $quizPieces[$n]['q']; 
			
	echo "
			</p>
			<form action='index.php'>
			<section class='grid'>
				<span><input type='submit' value='";
				echo $quizPieces[$n][0];
				echo "'></span>
				<span><input type='submit' value='";
				echo $quizPieces[$n][1]; 
				echo "'></span>
				<span><input type='submit' value='";
				echo $quizPieces[$n][2];
				echo "'></span>
				<span><input type='submit' value='";
				echo $quizPieces[$n][3];
				echo "'></span>
			</section>
			</form>

		</section>
	";
	}
?>



	<section class="excellent">
		<h1>
			Congratulations
		</h1>
		<p>
			This is excellent, however, even though you've just achieved a perfect score I'm sure Evan would have found some way to achieve better.
		</p>
	</section>
	<section class="okay">	
		<h1>
			Uhm...
		</h1>
		<p>
			Somebody forgot to do their homework. This is terribly un-Evan-like of you.
		</p>
	</section>
	<section class="bad">	
		<h1>
			Haha WOW!
							
		</h1>
		<p>
			This score is absolutely fucking terrible. I can't believe people like you have actually survived natural selection.		
		</p>
	</section>
</body>
</html>