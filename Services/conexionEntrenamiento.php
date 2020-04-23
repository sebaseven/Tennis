<?php
include('includes/json.php');
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
    $sql = 'select * from Entrenamiento';
    $result = mysqli_query($conn,$sql);
    $rows = array();
    if(mysqli_num_rows($result) > 0){
        while($r = mysqli_fetch_assoc($result)){
            array_push($rows,$r);
        }
        $data = json_encode($rows);
        echo ($data);
    }else{print 'sin datos';}
}elseif($method=='POST') {
    $inputJSON = file_get_contents('php://input');
    $input= json_decode( $inputJSON, TRUE ); //convert JSON into array

    //print_r(json_encode($input));
      // $inputJSON = $_POST;
       //$input= json_decode($inputJSON); 
        $Nombre = $input['Nombre'];
       $Apellido = $input['Apellido'];
       $Edad = $input['Edad'];
       $Telefono = $input['Telefono'];
       $EMail = $input['EMail'];
       $sql_insert = 
       "INSERT INTO Entrenamiento(idEntrenamiento,Nombre,Apellido,Edad,Telefono,EMail)
       VALUES
       (0,
       '$Nombre',
       '$Apellido',
       '$Edad',
       '$Telefono',
       '$EMail'
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