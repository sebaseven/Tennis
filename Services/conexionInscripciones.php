<?php
//$url = '198.50.240.101';
$url = 'localhost';
$usuario = 'grincoct_db';
$contraseña = 'TeNnIs2019';
$database = 'grincoct_news';
$conn = mysqli_connect($url, $usuario, $contraseña, $database);
// try {
//     $mbd = new mysqli_connect($url, $usuario, $contraseña,$database);
//     // foreach($mbd->query('SELECT * from Inscripciones') as $fila) {
//     //     print_r($fila);
//     // }
//     //$mbd = null;
//     //echo 'conectDO';
// } catch (PDOException $e) {
//     print "¡Error!: " . $e->getMessage() . "<br/>";
//     die();
// }

if(!$conn){
   die("conection failed: ".$conn->connect_error);
}
$method = $_SERVER['REQUEST_METHOD'];

if($method=='GET'){ 
    header('Content-type: application/json');
    $sql = 'select * from Inscripciones';
    $result = mysqli_query($conn,$sql);
    $rows = array();
    if(mysqli_num_rows($result) > 0){
        while($r = mysqli_fetch_assoc($result)){
            array_push($rows,$r);
        }
        print json_encode($rows);
    }else{print 'sin datos';}
}elseif($method=='POST') {
    $inputJSON = file_get_contents('php://input');
    $input= json_decode( $inputJSON, TRUE ); //convert JSON into array

    //print_r(json_encode($input));
      // $inputJSON = $_POST;
       //$input= json_decode($inputJSON); 
        $Nombre = $input['Nombre'];
       $Apellido = $input['Apellido'];
       $Documento = $input['Documento'];
       $FecNac = $input['FecNac'];
       $Telefono = $input['Telefono'];
       $EMail = $input['EMail'];
       $Sexo = $input['Sexo'];
       $CUIL_Factura = $input['CUIL_Factura'];
       $RazonSocial_Factura = $input['RazonSocial_Factura'];
       $Ocupacion_Factura = $input['Ocupacion_Factura'];
       $Telefono_Factura = $input['Telefono_Factura'];
       $EMail_Factura = $input['EMail_Factura'];
       $sql_insert = 
       "INSERT INTO Inscripciones(idInscripciones,Nombre,Apellido,Documento,FecNac,Telefono,EMail,Sexo,CUIL_Factura,RazonSocial_Factura,Ocupacion_Factura,Telefono_Factura,EMail_Factura)
       VALUES
       (0,
       '$Nombre',
       '$Apellido',
       '$Documento',
       '$FecNac',
       '$Telefono',
       '$EMail',
       '$Sexo',
       '$CUIL_Factura',
       '$RazonSocial_Factura',
       '$Ocupacion_Factura',
       '$Telefono_Factura',
       '$EMail_Factura'
       )";
       if(mysqli_query($conn,$sql_insert)){
           echo "Inscripcion Realizada";
       }else {
           echo $_POST;
           console.log($_POST);
           echo "Error: $sql_insert Inscripcion no realizada ".mysqli_error($conn);
           print_r(mysqli_error($conn));
       }
}

mysqli_close($conn);

?>
