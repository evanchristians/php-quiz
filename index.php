<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="css/main.css">
	<title>Riddles</title>
</head>
<body id="test">
	<header>
		<h1>Riddle Me This!</h1>
	</header>


<?php
	$quizPieces = array(

		array('q' => 'The more there is the less you see, what am I?', 'stars', 'clouds', 'darkness', 'dreams'),
		array('q' => 'what is this?', 'this', 'that', 'them', 'the other'),
		array('q' => 'what is this?', 'this', 'that', 'them', 'the other'),
		array('q' => 'what is this?', 'this', 'that', 'them', 'the other'),
		array('q' => 'what is this?', 'this', 'that', 'them', 'the other'),
		array('q' => 'what is this?', 'this', 'that', 'them', 'the other'),
		array('q' => 'what is this?', 'this', 'that', 'them', 'the other'),
		array('q' => 'what is this?', 'this', 'that', 'them', 'the other'),
		array('q' => 'what is this?', 'this', 'that', 'them', 'the other'),
		array('q' => 'what is this?', 'this', 'that', 'them', 'the other'),
		array('q' => 'what is this?', 'this', 'that', 'them', 'the other'),
		array('q' => 'what is this?', 'this', 'that', 'them', 'the other'),
		array('q' => 'what is this?', 'this', 'that', 'them', 'the other'),
		array('q' => 'what is this?', 'this', 'that', 'them', 'the other'),
		array('q' => 'what is this?', 'this', 'that', 'them', 'the other'),
		array('q' => 'what is this?', 'this', 'that', 'them', 'the other'),
		array('q' => 'what is this?', 'this', 'that', 'them', 'the other'),
		array('q' => 'what is this?', 'this', 'that', 'them', 'the other'),
		array('q' => 'what is this?', 'this', 'that', 'them', 'the other'),
		array('q' => 'what is this?', 'this', 'that', 'them', 'the other')
		
	);
	// var_dump($quizPieces);
	// echo count($quizPieces);
?>
<?php
	for ($i = 0; $i < count($quizPieces); $i++) { ?>

	<section class='box'>
			<h2>
				Question <span class="num"> <?php echo $i+1 ?> </span>
			</h2>
			<p>
				<?php echo $quizPieces[$i]['q']; ?>
			</p>
			<form action='index.php'>
			<section class='grid'>
			<?php 
				$x = 0;
			for ($n = $i*4; $n < ($i+1)*4; $n++) { 

				?>
				<input type='radio' name='option' id="<?php echo $n ?>"><label class="option" for="<?php echo $n ?>"><?php echo $quizPieces[$i][$x] ?></label>
			<?php
					$x++; 
		
		} ?>
			</section>
			</form>
		</section>

	<?php }
?>

	<section class="submit">
		<h2>Submit Your Results!</h2>
		<form action="index.php">
			<input type="submit" value="Submit!">
		</form>
	</section>

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