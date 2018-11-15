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


<?php
	$quizPieces = array(

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
	$answers = array('1', '3', '1', '2', '1')
	// var_dump($quizPieces);
	// echo count($quizPieces);
?>
<?php
	for ($i = 0; $i < 5; $i++) { ?>

	<section class='box'>
			<h2>
				Question <span class="num"> <?php echo $i+1 ?> </span>
			</h2>
			<p>
				<?php echo $quizPieces[$i]['q']; ?>
			</p>
			<form action='index.php' method="post">
			<section class='grid'>
			<?php 
				$x = 0;
			for ($n = $i*4; $n < ($i+1)*4; $n++) { 

				?>
				<input type='radio' name="option" value="<?php echo $x ?>" id="<?php echo $n ?>"><label class="option" for="<?php echo $n ?>"><?php echo $quizPieces[$i][$x] ?></label>
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
		<form action="index.php" method="post">
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
<?php
// 	$results = array();
// 	foreach ($answers as $answer) {
// 			if ($inputs[$answer] == $answer) {
// 				array_push($results, $answer);
// 		}
//  }
//  var_dump($results);
var_dump($_POST);
?>
</body>
</html>