<?php

	require __DIR__.'/vendor/autoload.php';

	use App\CardGenerator;
	use Monolog\Logger;
	use Monolog\Handler\StreamHandler;
	use Monolog\Handler\FirePHPHandler;


	$logger = new Logger('my_logger');

	$logger->pushHandler(new StreamHandler(__DIR__.'/my_app.log', Logger::DEBUG));
	$logger->pushHandler(new FirePHPHandler());

	echo("Generamos una cartilla");

	$gen = new CardGenerator;
	$card = $gen->generateMatrix();
	print_r($card);

	for ($i=0; $i <= 74 ; $i++) { 
		$numbersBingo[$i] = $i + 1;
	}

	$coincidences = 0;
	while ($coincidences <= 25)
	{
		echo("Generamos un número\n");
		$number = rand(1, 75);
		foreach ($numbersBingo as $num) {
			if ($num == $number){
				$num = 0;
				echo($number);
				echo "\nVeamos si tienes ese numero en tu cartilla\n";
				for ($i=0; $i < 5; $i++) { 
					for ($j=0; $j < 5; $j++) { 
						if ($number == $card[$i][$j]) {
							$coincidences++;
							echo "Si tenias el numero $number en tu cartilla\n";
							break;
						}
					}
				}
				break;
			}
		}
	}

	echo("Ganaste el juego");


?>