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
		<h1>Quizzed Off!</h1>
	</header>
<?php
	$answers = array('3', '1', '1', '3', '0', '2', '1', '3', '1', '0', '0', '3', '1', '3', '1', '2', '1', '1', '1', '3');

	$count=0;

	if (isset($_POST)) {
		$results = array();
		foreach ($answers as $answer) {
	
				if ($_POST[$count] == $answer) {
					array_push($results, $answer);
				}
				$count++;
	 	}
		$total = count($results);
			switch ($total) {
				case ($total < 5):
					?>
						<section class="bad">	
							<div class="score"><?php echo $total; ?><span>/20</span></div>

							<h1>
								Come On, <?php echo $_POST['name'] ?>
												
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
								You have a lot more in you <?php echo $_POST['name'] ?>, go for it again!	
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
								Holy Moley <?php echo $_POST['name'] ?>!
							</h1>
							<p>
								This is excellent, I knew you could do it!
							</p>
						</section>
					<?php
					break;

				

		}
	}
?>

	<section class="submit">
		<form action="index.php" method="post">
		<h2>Retake Test</h2>
		<input type="submit" value="Retake">
		
		</form>
	</section>
	
</body>
</html>