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

		public static function Today($day){
			if ($this->diaActual==$day){
				return true;
			}else{
				return false;
			}
		}

		public function getTodosMeses(){
			$M=date("n");
			
			for($num=1; $num<=12; $num++){
				$d=$this->meses[$num];
				echo "<div class='col-xs-12 col-sm-6 col-md-4 col-lg-4'>
						<table id='table' class='table table-hover'>";
				if($num==$M){
					echo "
							<thead>
								<tr> 
									<th id='mes' colspan='7'>";
					}else{
						echo "	
								<tr> 
									<th colspan='7'> ";
					}
					echo $d;
					echo "
									</th>
								</tr>  
								<tr> 
									<th> Lun </th>
									<th> Mar </th>
									<th> Mie </th>
									<th> Jue </th>
									<th> Vie </th>
									<th> Sab </th>
									<th> Dom </th>
								</tr>	
							</thead>
							<tbody>		
						";
					$month = date( 'Y-'.$num.'' );
					$week = 1;
					$calendar=null;
					for ( $i=1;$i<=date( 't', strtotime( $month ) );$i++ ) {
						$day_week = date( 'N', strtotime( $month.'-'.$i )  );
						$calendar[ $week ][ $day_week ] = $i;
						if ( $day_week == 7 ){
							$week++;
						}								
					
					

					foreach ( $calendar as $days ){
						
						echo "<tr id='tbody'>";

						for ( $i=1;$i<=7;$i++ ){

							
								// echo "<td id='diaHoy'>".$days[ $i ]."</td>";

							
							echo "<td>";//.$days[ $i ]."</td>";
							
							echo isset( $days[ $i ] ) ? $days[ $i ] : '';
							echo "	</td>";
						}
						echo "	</tr>";
					
						if($week<6){
							echo "<br>
									<tr><td></td></tr>";
						}
					}
					echo "
							</tbody>
						</table>
					</div>";
			}
		}
	}
}
?>