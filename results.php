<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Results</title>
	<link rel="stylesheet" href="css/main.css">
</head>
<body>
	<header>
		<h1>Are You A Qu<span>?</span>zard</h1>
		<h2>or<?php echo $_SESSION['msg'][rand(0, count($_SESSION['msg'])-1)]?><span>?</span></h2>
	</header>
	
<?php
	$answers = array('3', '1', '1', '3', '0', '2', '1', '3', '1', '0', '0', '3', '1', '3', '1', '2', '1', '1', '1', '3');
	$corrections = array('3', '1', '1', '3', '0', '2', '1', '3', '1', '0', '0', '3', '1', '3', '1', '2', '1', '1', '1', '3');

	if (isset($_POST)) {
		$results = array();
		foreach ($answers as $count => $answer) {
	
				if ($_POST[$count] == $answer) {
					array_push($results, $answer);
				}
			}
	 	}
	$total = count($results);
		switch ($total) {
			case ($total < 5):
?>
					<section class="bad">	
						<div class="score"><?php echo $total; ?><span>/20</span></div>

						<h1>
							Come On, <?php echo $_POST['name']; ?>
											
						</h1>
						<p>
							You can do much better, try again!
						</p>
					</section>
				<?php
				break;

			case ($total < 10 && $total >= 5):
				?>
					<section class="bad">	
						<div class="score"><?php echo $total; ?><span>/20</span></div>

						<h1>
							Keep Trying!											
						</h1>
						<p>
							You have a lot more in you <?php echo $_POST['name']; ?>, go for it again!	
						</p>
					</section>
				<?php
				break;
			
			case ($total >= 10 && $total < 16):
				?>
					<section class="okay">	
						<div class="score"><?php echo $total; ?><span>/20</span></div>

						<h1>
							Great stuff <?php echo $_POST['name'] ?>!
						</h1>
						<p>
							Respectable score, however I believe you can do much better!
						</p>
					</section>
				<?php
				break;

			case ($total >= 16) :
				?>
					<section class="excellent">
						<div class="score"><?php echo $total; ?><span>/20</span></div>
						<h1>
							Well Done, <?php echo $_POST['name'] ?>!
						</h1>
						<p>
							This is excellent, I knew you could do it!
						</p>
					</section>
				<?php
				break;
		}
				?>
<?php 
	if ($total < 20) {
		?> <h1 class="activate" id="acti">Click Here</h1> 
			 <h1 class="wrong" id="wrong">to view the correct answers</h1> 
			<div class="hide" id="hide">		
		<?php
		foreach ($corrections as $key => $correction) {
			if ($_POST[$key] != $correction) {
					?>
					<section class="box">
					<h2>
						Question <span class="num"> <?php echo $key+1 ?> </span> <span class="green">Correction</span>
					</h2>
					<p>
						<?php echo $_SESSION['quizPieces'][$key]['q'];?>
					</p>
					<div class="incorrect">Your Answer: <?php echo $_SESSION['quizPieces'][$key][$_POST[$key]] ?></div>
					<div class="correct">Correct Answer: <?php echo $_SESSION['quizPieces'][$key][$correction] ?></div>
					</section>

					<?php
			}
		}
		?> </div> <?php
	}
?>

	<section class="submit">
		<form action="index.php" method="post">
		<h2>Retake Test</h2>
		<input type="submit" value="Retake">
		
		</form>
	</section>

	<script src="js/main.js"></script>

	
</body>
</html>