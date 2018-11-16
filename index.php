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
		<h1>Quizzed Off!</h1>
	</header>

	<form action='results.php' method="post">


<?php
	$quizPieces = array(

		array('q' => 'Stand on me, youre not stable. Jump on me you\'re free as can be. Launch yourself at the right time and fly high! What am I?', 'a jetpack', 'a balance beam', 'a rocket', 'a trampoline'),
		array('q' => 'I have eighty-eight keys, but cannot open a single door. What am I?', 'a fingerprint', 'a piano', 'a padlock', 'rubik\'s cube'),
		array('q' => 'I get smaller every time I take a bath. What am I?', 'skin', 'soap', 'hair', 'a mirror'),
		array('q' => 'It\'s got twists and turns, but has no curves. Twist it to fix it, turn it to ruin it. What is it?', 'spoon', 'ruler', 'fork', 'rubik\'s cube'),
		array('q' => 'what is this?', 'this', 'that', 'them', 'the other'),
		array('q' => 'what is this?', 'this', 'that', 'them', 'the other'),
		array('q' => 'what is this?', 'this', 'that', 'them', 'the other'),
		array('q' => 'what is this?', 'this', 'that', 'them', 'the other'),
		array('q' => 'what is this?', 'this', 'that', 'them', 'the other'),
		array('q' => 'what is this?', 'this', 'that', 'them', 'the other'),
		array('q' => 'what is this?', 'this', 'that', 'them', 'the other'),
		array('q' => 'what is this?', 'this', 'that', 'them', 'the other'),
		array('q' => 'Which answer in this list is the correct answer to this question? <br><br>
		1. All of the below. <br>
		2. None of the below. <br>
		3. All of the above. <br>
		4. One of the above. <br>
		5. None of the above. <br>
		6. None of the above.', '6', '5', '3', '7'),
		array('q' => 'If 1 = 5, 2 = 10, 3 = 15 and 4 = 20, what is 5 equal to?', '25', '5', '50', '1'),
		array('q' => 'I am tall when I am young and short when I am old, what am I?', 'robber', 'candle', 'age', 'river'),
		array('q' => 'If you randomly choose one of the following answers to this question, what is your chance of getting it right? <br><br>
		A) 50% <br>
		B) 25% <br>
		C) 0% <br>
		D) 25%', 'a', 'b', 'c', 'd'),
		array('q' => 'John has been hired to paint the numbers 1 through 100 on 100 apartments.	How many times will he have to paint 8?', '8', '20', '1', '64'),
		array('q' => 'A tomato vine is 3 meters long. The bottom foot of the vine doesnt grow any tomatoes but the rest of the vine grows a tomato every 5 inches. How many vegetables can grow off of the vine?', '3', '0', '21', '5'),
		array('q' => 'what is this?', 'this', 'that', 'them', 'the other'),
		array('q' => 'what is this?', 'this', 'that', 'them', 'the other')
		
	);

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
			<section class='grid'>
			<?php 
				$x = 0;
			for ($n = $i*4; $n < ($i+1)*4; $n++) { 

				?>
				<input type='radio' name="<?php echo $i; ?>" value="<?php echo $x ?>" id="<?php echo $n ?>"><label class="option" for="<?php echo $n ?>"><?php echo $quizPieces[$i][$x] ?></label>
			<?php
					$x++; 
		
		} ?>
			</section>
		</section>

	<?php }
?>

	<section class="submit">
		<h2>Submit Your Results!</h2>
			<input type="submit" value="Submit!">
	</section>
	</form>

</body>
</html>