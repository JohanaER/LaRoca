<!DOCTYPE html>
<html>
  <head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SHELF APPAREL</title>
    <?php
      ob_start();
      require_once('includes/load.php');
      if($session->isUserLoggedIn(true)) { redirect('home.php', false);}
    ?>
    


    <?php include_once('layouts/header.php'); ?>

    <link rel="stylesheet" type="text/css" href="css/css1.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link href="css/bootstrap-responsive.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>


    <header id="header1">
      <div class="logo pull-left"> SHELF APPARELLL</div>
      <div class="header1-content">
      <div class="header1-date pull-left" style="text-align: right;">
        <strong><?php date_default_timezone_set('America/Mexico_City'); ;echo date("d/m/Y g:i a");;?></strong>
      </div>
     </div>
    </header>

    <style>
      

    @media (max-width: 768px) {
      /* Estilos para dispositivos con un ancho máximo de 768px */
    }

    @media (max-width: 480px) {
      /* Estilos para dispositivos con un ancho máximo de 480px */
    }

      .header1-date {
  text-align: right;
}
     
#header1 {
  position: fixed;
  z-index: 99;
  top: 0;
  left: 0;
  background-color: #09145a;
  color: white;
  width: 100%;
  height: 65px;
  line-height: 65px;
  -moz-box-shadow: 0 1px 2px rgba(0,0,0,0.1);
  -webkit-box-shadow: 0 1px 2px rgba(0,0,0,0.1);
   box-shadow: 0 1px 2px rgba(0,0,0,0.1);
}


body {
          
  background: rgb(0,204,255);
  background: linear-gradient(180deg, rgba(0,204,255,1) 0%, rgba(158,236,255,1) 100%);
  margin-left: 0;
  }
  .container {
  display: flex;
  justify-content: flex-start;
  align-items: center;
  background: #0cb7f2;
  
      
  
}

@media (max-width: 780x) {
  .container {
    flex-direction: column;
  }
}
      .login-container {
        width: 110%;
        margin-left: -10px;
        
      }
      .carousel-container {
    position: static;
    margin-right: 20px;
    overflow: hidden;
    margin-left: 20px;
}

/* Estilos para pantallas más pequeñas */
@media (max-width: 768px) {
    .carousel-container {
        margin-right: 10px;
        margin-left: 10px;
    }
}

/* Estilos para pantallas aún más pequeñas */
@media (max-width: 480px) {
    .carousel-container {
        margin-right: 5px;
        margin-left: 5px;
    }
}









      .form-group label {
  color: white;
  
}

.sidebar1 {
  width: 450px; /* ajustar según sea necesario */
  padding: 20px;
}

.card {
  border: none;
}

.card-body {
  padding: 20px;
}

    </style>

  </head>
  <body>
  
    <div class="container">
     
    <div class="sidebar1">
  <div class="card">
    <div class="card-body">
      
      <div class="login-container">
        <div class="login-page">
          <div class="text-center" style="font-size: 25px" color="write">
            <h1>Bienvenido</h1>
            <p>Iniciar sesión </p>
          </div>
          <?php echo display_msg($msg); ?>
          <form method="post" action="auth.php" class="clearfix">
            <div class="form-group">
              <label for="username" class="control-label" p style="font-family: Arial; font-size: 20px;">Usuario</label>
              <input type="name" class="form-control" name="username" placeholder="Usuario">
            </div>
            <div class="form-group">
              <label for="Password" class="control-label" p style="font-family: Arial; font-size: 20px;">Contraseña</label>
              <input type="password" name="password" class="form-control" placeholder="Contraseña">
            </div>
            <div class="form-group">
              <button type="submit" class="btn btn-info pull-right">Entrar</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

      
      <div class="carousel-container">
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      
     <div class="item active">
        <img src="images/slide1.jpg" alt="Slide 1">
      </div>

      <div class="item">
        <img src="images/slide2.jpg" alt="Slide 2">
      </div>

    

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

    </div>
    
    <style>
.carousel-inner .item img {
  width: 1080px; /* Establece el ancho deseado */
  height: 700px; /* Establece la altura deseada */
  

}
</style>

<div class="carousel-container">
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Resto de tu código -->
  </div>
</div>


   
  </body>
</html>



 
