<?php
class myDBC{
  
    public $mysqli=null;
 
    public function __construct(){
 
        include_once 'dbconfig.php';
        $this->mysqli = new mysqli(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
 
        if ($this->mysqli->connect_errno){
            echo "Error MySQLi: ("&nbsp. $this->mysqli->connect_errno.") " . $this->mysqli->connect_error;
            exit();
        }
        $this->mysqli->set_charset("utf8");
    }
 
    public function __destruct(){
        $this->CloseDB();
    }
 
    public function runQuery($qry){
        $result = $this->mysqli->query($qry);
        return $result;
    }
 
    public function CloseDB(){
        $this->mysqli->close();
    }
 
    public function clearText($text){
        $text = trim($text);
        return $this->mysqli->real_escape_string($text);
    }
    
    public function subirTodo($nombre,$apellido, $telefono,$fecha, $ruta){
		
		$q = "INSERT INTO cliente_gym (nombre_cliente, apellido_cliente,telefono_cliente,fecha_pago, ruta) VALUES ('$nombre', '$apellido','$telefono' ,'$fecha','$ruta')";
		$result = $this->mysqli->query($q);
		
		if($result){ //Si resultado es true, se agregó correctamente
					echo'<script type="text/javascript">
						alert("Se ha Agregado Exitosamente El Cliente ");
						window.location="http://localhost/Muscle_Art_Gym/Clientes.php"
						</script>';
		}
		else{ //Si hubo error al insertar, se avisa
				echo'<script type="text/javascript">
					 alert("A Ocurrido un Error... Algo anda mal");
					 window.location="http://localhost/Muscle_Art_Gym/index.php"
					 </script>';
		}
		
	}
 
    public function seleccionar_images(){
        $q = "select id_cliente,nombre_cliente,apellido_cliente,ruta from cliente_gym";
 
        $result = $this->mysqli->query($q);
 
        //Array asociativo que contendrá los datos
        $valores = array();
		
		//Si no hay resultados
		//Se avisa al usuario y se redirige al index de la aplicación
        if( $result->num_rows == 0)
        {
            echo'<script type="text/javascript">
              alert("No Cuenta Con Algun Cliente ");
            </script>';
            return false;
        }
	  //En otro caso, se recibe la información y se
	  //se regresa un array con los datos de la consulta
      else{
            while($row = mysqli_fetch_assoc($result)){
                //Se agrega cada valor en el array
                array_push($valores, $row);
            }
	  }
        //Regresa array asociativo
        return $valores;
    }




}

?>
