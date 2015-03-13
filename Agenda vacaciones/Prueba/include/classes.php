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

		public function __construct($codigo, $dni, $nombre, $apellido1, $apellido2,  $localidad, $movil, $comentarios ){

			$this->codigo=$codigo;
			$this->dni=$dni;
			$this->nombre=$nombre;
			$this->apellido1=$apellido1;
			$this->apellido2=$apellido2;
			$this->localidad=$localidad;
			$this->movil=$movil;
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
/////////////////// /////    la clase FESTIVO    //////////////////////
class Festivos {
	public $ambito;
	public $fecha;
	public $comentarios;

	function __construct($ambito, $comentarios, $fecha){
		$this->ambito=$ambito;
		$this->comentarios=$comentarios;
		$this->fecha=$fecha;
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
	protected $diasPropios;
	protected $PermisoRetribuido;
	protected $NoRetribuido;
	protected $baja;
	protected $ambito;
	protected $fecha;
	protected $comentarios;

	function __construct($ambito, $fecha, $comentarios){
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