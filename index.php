<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="css/main.css">
	<title>Riddles</title>
</head>
<audio id="audio" src="aud/click1.wav" ></audio>
<script src="js/main.js"></script>
<?php 

// RANDOM GREETING MESSAGE DATABASE

$_SESSION['msg'] = array(
	" do you use Angular for frontend",
	" are you a quater pounder with cheese, extra mayo",
	" are you a flat-earther",
	" is this is a randomly generated message",
	" do you hold your fork in your right hand",
	" are you a league player",
	" do you echo your HTML",
	" do you use internal CSS",
	" if so, who did 9/11",
	" are you a quitter",
	" are you in the JavaScript stream"
	)

?>

<body id="test">
	<header>
		<h1>Are You A Qu<span>?</span>zard</h1>
		<h2>or<?php echo $_SESSION['msg'][rand(0, count($_SESSION['msg'])-1)]?><span>?</span></h2>
	</header>

<!-- NAME INPUT SPACE FOR MESSAGE AT RESULTS PAGE -->

	<form action='results.php' method="post">
		<section class="intro">
			<p class="title">Greetings!</p>
			
			<article class="name"><input autocomplete="off" type="text" name="name" id="name" placeholder="(type your name)"><span></span></article>
			<p class="greeting"> Prepare your mind for an unambiguously objective test of your intellegence. Good luck, have fun. </p>
		</section>
<?php

// QUESTION AND ANSWER DATABASE

	$_SESSION['quizPieces'] = $quizPieces = array(

		array(
		// QUESTIONS

		'q' => 'What is the last initial of the enigmatic third Emma from CodeSpace?', 
		// ANSWERS

		'F', 
		'K', 
		'R', 
		'D',
		'none'
	),
		array(
		// QUESTIONS
		
		'q' => 'What does Evan not remember from the night of his birthday?', 
		// ANSWERS

		'21 shots', 
		'jesse', 
		'throwing up', 
		'table dancing',
		'none'
	),
		array(
		// QUESTIONS
			
		'q' => 'What nickname is given to the car driven by Jayson?', 
		// ANSWERS
		
		'white lightning', 
		'silver bullet', 
		'quicksilver', 
		'mercury',
		'none'

	),
		array(
		// QUESTIONS
			
		'q' => 'What is the name of the group with members Josh, Natheer, Evan and Gcobisa?', 
		// ANSWERS

		'fullstack', 
		'the if statement', 
		'div in a div', 
		'the symantics',
		'none'

	),
		array(
		// QUESTIONS
			
		'q' => 'Which member of the LifeChoices student body won the WhereIsMyTransport Hackathon?', 
		// ANSWERS

		'Gedeon', 
		'Candice', 
		'Kodi', 
		'Marlon',
		'none'

	),
		array(
		// QUESTIONS
			
		'q' => 'Whose car has the fattest system at LifeChoices?', 
		// ANSWERS

		'Marlene', 
		'Candice', 
		'Marlon', 
		'Natheer',
		'none'

	),
		array(
		// QUESTIONS
		
		'q' => 'Who has the catchphrase, simply, \'literally\'?', 
		// ANSWERS

		'Nicole', 
		'Reagan', 
		'Thando', 
		'Evan',
		'none'

	),
		array(
		// QUESTIONS
			
		'q' => 'Who is the creator of the \'Om Die Draai\'/\'Swerve\' dance move?', 
		// ANSWERS

		'Miguel', 
		'Jesse', 
		'Evan', 
		'Natheer',
		'none'

	),
		array(
		// QUESTIONS
			
		'q' => 'Which CodeSpace employee brought new meaning to the word \'Crisp\'?', 
		// ANSWERS

		'Emma K', 
		'Nate', 
		'Lana', 
		'Zaida',
		'none'

	),
		array(
		// QUESTIONS
			
		'q' => 'What is the name of the facebook page run by Thando, Samantha and Nuhaa', 
		// ANSWERS

		'Gossip Coders', 
		'The Scoop', 
		'Gossip Tag', 
		'Triple Threat',
		'none'

	),
		array(
		// QUESTIONS
			
		'q' => 'Who is the CEO at LifeChoices?', 
		// ANSWERS

		'Sophia', 
		'Candice', 
		'Evan', 
		'Nate',
		'none'

	),
		array(
		// QUESTIONS
			
		'q' => 'Who redefines the middle finger at LifeChoices?', 
		// ANSWERS

		'Trevor Noah', 
		'Devon', 
		'Michael', 
		'Marlene',
		'none'

	),
		array(
		// QUESTIONS
			
		'q' => 'Who is HISMAN?', 
		// ANSWERS

		'Gcobisa Nkonzo', 
		'Sean Collard', 
		'Chad Bosch', 
		'Charlize Theron',
		'none'

	),
		array(
		// QUESTIONS
			
		'q' => 'Who has the most pictures of themself in the LifeChoices whatsapp group?', 
		// ANSWERS

		'Shakeel', 
		'Ridhaa', 
		'Neo', 
		'Evan',
		'none'

	),
		array(
		// QUESTIONS
			
		'q' => 'Who is Neo\'s best friend', 
		// ANSWERS

		'Gcobisa', 
		'Evan', 
		'Sophia', 
		'Kodi',
		'none'

	),
		array(
		// QUESTIONS
			
		'q' => 'Which stream has the most Woolworths employees?', 
		// ANSWERS

		'Leader\'s Quest', 
		'JavaScript', 
		'PHP', 
		'C++',
		'none'

	),
		array(
		// QUESTIONS
			
		'q' => 'Where did Devon study?', 
		// ANSWERS

		'Wits', 
		'CPUT', 
		'Stellenbosch', 
		'UNISA',
		'none'

	),
		array(
		// QUESTIONS
			
		'q' => 'How much does the small chiproll at the fisheries cost?',
		// ANSWERS

		'R3.50', 
		'R12.00', 
		'R21.00', 
		'R18.00',
		'none'

	),
		array(
		// QUESTIONS
			
		'q' => 'What is the prime friday lunch spot?', 
		// ANSWERS

		'mcDonald\'s', 
		'the tikka shop', 
		'debonairs', 
		'burgerking',
		'none'

	),
		array(
		// QUESTIONS
			
		'q' => 'What did Devon study?', 
		// ANSWERS

		'philosophy', 
		'accounting', 
		'computer science', 
		'Multimedia',
		'none'

		)
		
	);

?>
<?php
// DISPLAYS A SECTION FOR EACH QUESTION
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
				// DISPLAYS THE FOUR ANSWERS PER EACH QUESTION
			for ($n = $i*4; $n < ($i+1)*4; $n++) { 

				?>
				<input type='radio' name="<?php echo $i; ?>" value="<?php echo $x ?>" id="<?php echo $n ?>"><label class="option" for="<?php echo $n ?>" onclick="play()"><?php echo $quizPieces[$i][$x] ?></label>
			<?php
					$x++; 
		
		} ?>
			
			<!-- Hidden Defaule Input - records anser as 'none' -->
				<input type="radio" name="<?php echo $i; ?>" value="4" checked="checked">
			</section>
		</section>

	<?php }
?>

<!-- form submission -->
	<section class="submit">
		<h2>Submit Your Results!</h2>
			<input type="submit" value="Submit!">
	</section>
	</form>


</body>
</html>