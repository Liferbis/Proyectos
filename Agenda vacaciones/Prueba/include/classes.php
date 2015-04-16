<?php 
///////////////////////////////////////////////////////////////////////
///////////////////////*/***//* CLASES  *//***/*///////////////////////
///////   |   /////   |   //////////   |   ///////   |   //////////////
///////   V   /////   V   //////////   V   ///////   V   //////////////
/////// CLASES ////////// En este documento se encuentran /////////////
///////    TODAS las clases que utiliza el gestor       ///////////////
///////////////////////////////////////////////////////////////////////


/////// CLASE ////// en esta clase se encuentr todo lo referente //////
/////////////////////    la clase EMPLEADO          ///////////////////

	class Empleado{
		private $codigo;
		private $dni;
		private $nombre;
		private $apellido1;
		private $apellido2;
		private $localidad;
		private $movil;
		private $comentarios;
		private $saldo;

		public function __construct($codigo, $dni, $nombre, $apellido1, $apellido2, $localidad, $movil, $comentarios, $saldo ){

			$this->codigo=$codigo;
			$this->dni=$dni;
			$this->nombre=$nombre;
			$this->apellido1=$apellido1;
			$this->apellido2=$apellido2;
			$this->localidad=$localidad;
			$this->movil=$movil;
			$this->comentarios=$comentarios;
			$this->saldo=$saldo;

		}

		public function __set($var, $valor) {
			if (property_exists(__CLASS__, $var)) {
				$this->$var = $valor;
			} else {
				echo "No existe el atributo $var.";
			}
		}

		public function __get($var) {
			if (property_exists(__CLASS__, $var)) {
				return $this->$var;
			}
			return NULL;
		}

		
	}

/////// CLASE ////// en esta clase se encuentr todo lo referente //////
/////////////////// /////    la clase FESTIVO    //////////////////////
class Festivos {
	private $ambito;
	private $comentarios;
	private $fecha;

	function __construct($ambito,$fecha, $comentarios){
		$this->ambito=$ambito;
		$this->fecha=$fecha;
		$this->comentarios=$comentarios;
		
	}

	public function __set($var, $valor) {
		if (property_exists(__CLASS__, $var)) {
			$this->$var = $valor;
		} else {
			echo "No existe el atributo $var.";
		}
	}

	public function __get($var) {
		if (property_exists(__CLASS__, $var)) {
			return $this->$var;
		}
		return NULL;
	}
	
}


/////// CLASE ////// en esta clase se encuentr todo lo referente //////
/////////////////////    la clase VACACION     ////////////////////////

class vacacion {
	private $cod_dias;
	private $cod_emplead;
	private $FechaInicio;
	private $FechaFin;
	private $dias_Natu;
	private $dias_lab;
	private $aumentoDias;
	private $SALDO_DIAS;
	private $vacaciones;
	private $PerRetri;
	private $PerNoRetri;
	private $Bec;
	private $Bal;
	private $Comentarios;
	private $user_login;

	function __construct( $cod_dias, $cod_emplead, $nombre, $apellido1, $apellido2, $FechaInicio, $FechaFin, $dias_Natu, $dias_lab, $aumentoDias, $SALDO_DIAS, $vacaciones, $PerRetri, $PerNoRetri, $Bec, $Bal, $Comentarios, $user_login){
		
		$this->cod_dias=$cod_dias;
		$this->cod_emplead=$cod_emplead;
		$this->nombre=$nombre;
		$this->apellido1=$apellido1;
		$this->apellido2=$apellido2;
		$this->FechaInicio=$FechaInicio;
		$this->FechaFin=$FechaFin;
		$this->dias_Natu=$dias_Natu;
		$this->dias_lab=$dias_lab;
		$this->aumentoDias=$aumentoDias;
		$this->SALDO_DIAS=$SALDO_DIAS;
		$this->vacaciones=$vacaciones;
		$this->PerRetri=$PerRetri;
		$this->PerNoRetri=$PerNoRetri;
		$this->Bec=$Bec;
		$this->Bal=$Bal;
		$this->Comentarios=$Comentarios;
		$this->user_login=$user_login;
		
	}

	public function __set($var, $valor) {
		if (property_exists(__CLASS__, $var)) {
			$this->$var = $valor;
		} else {
			echo "No existe el atributo $var.";
		}
	}

	public function __get($var) {
		if (property_exists(__CLASS__, $var)) {
			return $this->$var;
		}
		return NULL;
	}
		
}



/////// CLASE ////// en esta clase se encuentr todo lo referente //////
/////////////////////    la clase CALENDARIO   ////////////////////////

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
					}
					foreach ( $calendar as $days ){
						echo "		
								<tr  >";
						for ( $i=1;$i<=7;$i++ ){
							echo "<td>";
							echo isset( $days[ $i ] ) ? $days[ $i ] : '';
							echo "	</td>";
						}
						echo "	</tr>";
					}
					if($week<6){
						echo "<br>
								<tr><td></td></tr>";
					}
					echo "
							</tbody>
						</table>
					</div>";
			}
		}
	}

 ?>