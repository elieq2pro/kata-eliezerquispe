<?php
	namespace App;

	class CardGenerator
	{
		public function generateMatrix (){

			for ($i=0; $i < 5; $i++) { 
				for ($j=0; $j < 5; $j++) { 
					switch ($j) {
					    case 0:
					        $matrix[$i][$j] = rand(1, 16);
					        break;
					    case 1:
					        $matrix[$i][$j] = rand(16, 30);
					        break;
					    case 2:
					        $matrix[$i][$j] = rand(31, 45);
					        break;
				        case 3:
					        $matrix[$i][$j] = rand(46, 60);
					        break;
				        case 4:
					        $matrix[$i][$j] = rand(61, 75);
					        break;
					}
				}
			}
			return $matrix;
		}
	}

?>