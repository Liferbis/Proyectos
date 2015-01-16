<?php 

	class Calendario {
		public $month;
		public $year;
		public $diaActual;
		public $meses;

		function __construct(){
			# definimos los valores iniciales para nuestro calendario
			$this->month=date("n");
			$this->year=date("Y");
			$this->diaActual=date("j");
			$this->meses=array(1=>"Enero", "Febrero",
				 "Marzo", "Abril", "Mayo", "Junio",
				 "Julio", "Agosto", "Septiembre",
				 "Octubre", "Noviembre", "Diciembre");
		}

		public static function getdia1($month){
			# Obtenemos el dia de la semana del primer dia
			# Devuelve 0 para domingo, 6 para sabado
			$diaSemana=date("w",mktime(0,0,0,$month,1,("Y")))+7; 
			return $diaSemana;
		}

		public static function getDiaD($month){
			# Obtenemos el ultimo dia del mes
			$ultimoDiaMes=date("d",(mktime(0,0,0,$month+1,1,$year)-1));
			return $ultimoDiaMes;
		}

		public function getTodosMeses(){
			$M=date("n");
			for($num=1; $num<=12; $num++){
				if($num==$M){
					echo "<caption>";
				}else{
					echo "<caption>";
					echo $meses[$num];
					echo "
						</caption>
						<tr> 
							<th>Lun</th><th>Mar</th><th>Mie</th><th>Jue</th>
								<th>Vie</th><th>Sab</th><th>Dom</th>
						</tr>
						<tr bgcolor='silver'>
						";

					$week = 1;
					for ( $i=1;$i<=date( 't', strtotime( $month ) );$i++ ) {
						$day_week = date( 'N', strtotime( $month.'-'.$i )  );
						$calendar[ $week ][ $day_week ] = $i;
						if ( $day_week == 7 )
							$week++;
								
					}
					foreach ( $calendar as $days ){
						for ( $i=1;$i<=7;$i++ ){
							echo "<th>";
							isset( $days[ $i ] ) ? $days[ $i ] : '';
							echo "</th>";
						}
					}
					
						echo "</tr><tr>\n";
					}
					$num++;	
				}
			}
		}
	

 ?>