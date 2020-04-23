
<!DOCTYPE html>
<html lang="es">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>GRINCOC - TENNIS</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
  <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet'
    type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

  <!-- Custom styles for this template -->
  <link href="css/agency.min.css" rel="stylesheet">
  
</head>
<!-- <form action="trabajo.php" method="post" > -->
<body id="page-top">

<?php 
if (!isset($_POST["submit"])) { ?>
 
  <form method="post" enctype="multipart/form-data" action="<?php echo $_SERVER["PHP_SELF"];?>">
  
  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="index.html"><img src="img/GC_LOGO-CH.png" alt="" width="193"
          height="80" /></a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
        data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
        aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav text-uppercase ml-auto">
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#services">Servicios</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#portfolio">Nosotros</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#about">Sedes</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#team">Becas</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#contact">Contacto</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>


  <!-- Header -->

  <header class="masthead">
    <div class="container">
      <div class="intro-text">

        <br>


        <div class="col-sm-12 col-md-12 col-lg-12 text-center">
          <h4 class="section-subheading">Trabajo y pasantías</h4>
        </div>
        <br>

        <div class="form-row">
          <div class="col-sm-6 col-md-6 col-lg-4">
            <label for="txtnombre">Nombre</label>
            <input type="text" class="form-control" name="txtnombre" placeholder="Nombre">
            <div class="form-group">
              <label for="txtfecnac">Fecha de nacimiento</label>
              <input type="date" class="form-control" name="txtfecnac" placeholder="fecha de nacimiento">
              <label for="txtemail">Mail</label>
              <input type="email" class="form-control" name="txtemail" placeholder="Mail">
              <br>
              <div class="form-col-12">
                <label for="txtmensaje">¿Por qué te gustaría trabajar con nosotros?</label>
                <textarea class="form-control" name="txtmensaje" rows="3"></textarea>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-6 col-lg-4">
            <label for="txtapellido">Apellido</label>
            <input type="text" class="form-control" name="txtapellido" placeholder="Apellido">
            <label for="txtnrodoc">DNI / CUIT</label>
            <input type="number" class="form-control" name="txtnrodoc" placeholder="DNI / CUIT">
            <label for="txttel">Teléfono</label>
            <input type="number" class="form-control" name="txttel" placeholder="Teléfono">
            <br>
            <div class="form-row">
              <label for="my_file">Adjuntar Curriculum con antecedentes deportivos, académicos y
                laborales.</label>
                <input type="file"  class="form-control-file" name="my_file" />   
            </div>
          </div>
        </div>
        <br>
      
        <input type="submit" class="btn btn-warning" name="submit" value="Enviar">
  </form>
<?php
} else {
  if($_POST && isset($_FILES['my_file']))
  {
      $from_email  = "sitio@grincoctennis.com";  // sender email
      $to_email    = "grincoc@gmail.com";    //recipient email 
      $Nombre = $_POST['txtnombre'];
      $Apellido = $_POST['txtapellido'];
      $FecNac = $_POST['txtfecnac'];
      $NroDoc = $_POST['txtnrodoc'];
      $Tel = $_POST['txttel'];
      $Mensaje = $_POST['txtmensaje'];
      $Email = $_POST['txtemail'];
      $MensajeCompuesto = 'Este es un mensaje automatico desde el sitio Grinco' . "\n";
      $MensajeCompuesto = 'Nombre: ' . $Nombre . "\n";
      $MensajeCompuesto .= 'Apellido: ' . $Apellido . "\n";
      $MensajeCompuesto .= 'FecNac: ' . $FecNac .  "\n";
      $MensajeCompuesto .= 'Tel: ' . $Tel .  "\n";
      $MensajeCompuesto .= 'Email: ' . $Email . "\n";
      $MensajeCompuesto .= 'Mensaje: ' . $Mensaje;
      //echo $MensajeCompuesto;
      //Capture POST data from HTML form and Sanitize them, 
      $sender_name    = filter_var("GrincoTennis Mail Automatico", FILTER_SANITIZE_STRING); //sender name
      $reply_to_email = filter_var("sitio@grincoctennis.com", FILTER_SANITIZE_STRING); //sender email used in "reply-to" header
      $subject        = filter_var("Email desde Grinco Trabajo y pasantías", FILTER_SANITIZE_STRING); //get subject from HTML form
      $message        = filter_var($MensajeCompuesto, FILTER_SANITIZE_STRING); //message
      
       
      //Get uploaded file data
      $file_tmp_name    = $_FILES['my_file']['tmp_name'];
      $file_name        = $_FILES['my_file']['name'];
      $file_size        = $_FILES['my_file']['size'];
      $file_type        = $_FILES['my_file']['type'];
      $file_error       = $_FILES['my_file']['error'];
  
      if($file_error > 0)
      {
          die('Error en Archivo adjunto');
      }
      //read from the uploaded file & base64_encode content for the mail
      $handle = fopen($file_tmp_name, "r");
      $content = fread($handle, $file_size);
      fclose($handle);
      $encoded_content = chunk_split(base64_encode($content));
  
          $boundary = md5("sanwebe");
          //header
          $headers = "MIME-Version: 1.0\r\n"; 
          $headers .= "From:".$from_email."\r\n"; 
          $headers .= "Reply-To: ".$reply_to_email."" . "\r\n";
          $headers .= "Content-Type: multipart/mixed; boundary = $boundary\r\n\r\n"; 
          
          //plain text 
          $body = "--$boundary\r\n";
          $body .= "Content-Type: text/plain; charset=ISO-8859-1\r\n";
          $body .= "Content-Transfer-Encoding: base64\r\n\r\n"; 
          $body .= chunk_split(base64_encode($message)); 
          
          //attachment
          $body .= "--$boundary\r\n";
          $body .="Content-Type: $file_type; name=".$file_name."\r\n";
          $body .="Content-Disposition: attachment; filename=".$file_name."\r\n";
          $body .="Content-Transfer-Encoding: base64\r\n";
          $body .="X-Attachment-Id: ".rand(1000,99999)."\r\n\r\n"; 
          $body .= $encoded_content; 
      
      $sentMail = @mail($to_email, $subject, $body, $headers);
      if($sentMail) 
      {       
        header("Location: http://www.grincoctennis.com/nuevositio/EmailEnviado.html");
        die();
      }else{
        //echo $MensajeCompuesto;
        die('Hubo un error intente nuevamente mas tarde, disculpe las molestias');  
      }
  
  }else{
    echo '<script language="javascript">';
    echo 'alert("Por Favor Adjunte su CV")';
    echo '</script>';
  }
}
?>

 



        <!--  
          
         
         -->







      </div>
    </div>
  </header>



  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Contact form JavaScript -->
  <script src="js/jqBootstrapValidation.js"></script>
  <script src="js/contact_me.js"></script>

  <!-- Custom scripts for this template -->
  <script src="js/agency.min.js"></script>

</body>
<!-- </form> -->
</html>