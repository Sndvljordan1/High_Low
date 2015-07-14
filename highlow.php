<?php
	//gets random #
	
	if($argc == 3){
		$arg1 = $argv[1];
		$arg2 = $argv[2];
		if ($arg1 < $arg2){
			$a = mt_rand($arg1, $arg2);
		}else{
			$arg1 = 1;
			$arg2 = 100;
			$a = mt_rand(1, 100);
		}
	}else{
		$arg1 = 1;
		$arg2 = 100;
		$a = mt_rand(1, 100);
	};
	
	//gives prompt
	fwrite(STDOUT, "Guess what number I'm thinking of.\n Hint: I picked a number from $arg1 to $arg2" .PHP_EOL);
	//accepts input
	$guess = trim(fgets(STDIN));
	// begin logging of tries starting with one
	$tries = 1;
	//runs when guess is incorrect
	while ($guess != $a) {
		if ($guess < $a) {
			//if guess is too low
			fwrite(STDOUT, "Higher" . PHP_EOL);
			fwrite(STDOUT, "Guess again." . PHP_EOL);
		}elseif ($guess > $a){
			//if guess is too high
			fwrite(STDOUT, "Lower" . PHP_EOL);
			fwrite(STDOUT, "Guess again." . PHP_EOL);
		}
		//counts # of tries
		$tries +=1;
		//allows for new guess
		$guess = fgets(STDIN);
	}
	//if guess is correct
	if ($guess == $a){
		fwrite(STDOUT, "Good Job!" . PHP_EOL);
		//allows user to know how many tries they made before success
		fwrite(STDOUT, "You made $tries guesses!" . PHP_EOL);
		//prompts user to play again
		fwrite(STDOUT, "Play again? y / n" . PHP_EOL);
		//takes user input
		$yes = fgets(STDIN);
		//if user says yes, rerun game
		if (strtolower($yes) == "y\n"){
			playAgain();
		}else{
			//if not yes then say ok and stop script
			echo 'OK' . PHP_EOL;
		};
	};
// };
//calls back to restart if user chooses to play again
function playAgain(){
	fwrite(STDOUT, "Give me a base number ");
	$var1 = fgets(STDIN);
	fwrite(STDOUT, "Give me a maximum ");
	$var2 = fgets(STDIN);
	
	if ($var1 < $var2){
		$a = mt_rand($var1, $var2);
	}else{
		$var1 = 1;
		$var2 = 100;
		$a = mt_rand(1, 100);
	}
	//gives prompt
	fwrite(STDOUT, "Guess what number I'm thinking of.\n Hint: I picked a number from $var1 to $var2" .PHP_EOL);
	//accepts input
	$guess = trim(fgets(STDIN));
	// begin logging of tries starting with one
	$tries = 1;
	//runs when guess is incorrect
	while ($guess != $a) {
		if ($guess < $a) {
			//if guess is too low
			fwrite(STDOUT, "Higher" . PHP_EOL);
			fwrite(STDOUT, "Guess again." . PHP_EOL);
		}elseif ($guess > $a){
			//if guess is too high
			fwrite(STDOUT, "Lower" . PHP_EOL);
			fwrite(STDOUT, "Guess again." . PHP_EOL);
		}
		//counts # of tries
		$tries +=1;
		//allows for new guess
		$guess = fgets(STDIN);
	}
	//if guess is correct
	if ($guess == $a){
		fwrite(STDOUT, "Good Job!" . PHP_EOL);
		//allows user to know how many tries they made before success
		fwrite(STDOUT, "You made $tries guesses!" . PHP_EOL);
		//prompts user to play again
		fwrite(STDOUT, "Play again? y / n" . PHP_EOL);
		//takes user input
		$yes = fgets(STDIN);
		//if user says yes, rerun game
		if (strtolower($yes) == "y\n"){
			playAgain();
		}else{
			//if not yes then say ok and stop script
			echo 'OK' . PHP_EOL;
		};
	};
}

?>