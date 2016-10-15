<script src="<?= base_url()?>assets/js/serialize.js"></script>
<script src="<?= base_url()?>assets/js/validateData.js"></script>
<body>
<div class="jumbotron text-center">
  <h1>Bienvenido@ a la aplicaci&oacute;n</h1>
</div>
<div class="container">
  <br>
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="<?= base_url()?>assets/images/vuelta.png" alt="vuelta-cole" width="100%">
      </div>

      <div class="item">
        <img src="<?= base_url()?>assets/images/lobro.png" alt="libro" width="100%">
      </div>
    
      <div class="item">
        <img src="<?= base_url()?>assets/images/hal.png" alt="haloween" width="100%">
      </div>

      <div class="item">
        <img src="<?= base_url()?>assets/images/nav.png" alt="navidad" width="100%">
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Anterior</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Siguiente</span>
    </a>
  </div>
</div>
<div class="container-fluid">
  <h1>Estas registrado? Si no lo est&aacute;s, reg&iacute;strate! Es gratis :)</h1>
  <div class="row">
<div class="col-sm-5">
    <form class="form-horizontal" id="myForm">
    <div class="form-group row">
  <label for="example-text-input" class="control-label col-sm-2">Nombre: </label>
  <div class="col-xs-10">
    <input class="form-control" name="name" type="text" style="width:36%" placeholder="Escribe tu nombre" id="example-text-input">
  </div>
  </div>
  <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Password:</label>
      <div class="col-sm-10">
        <input type="password" name="pass" class="form-control" style="width:36%" id="pwd" placeholder="Contrase&ntilde;a">
      </div>
    </div>
    <div class="form-group">
      <div class="col-sm-offset-2 col-sm-10">
        <button type="button" class="btn btn-primary btn-lg" onclick="checkData(this.form)">Enviar</button>
        <a href="<?php echo base_url()?>registro/registrasrse" class="btn btn-default btn-lg active" role="button">Registrate</a>
      </div>
    </div>
    </form>
    </div>
</div>
</div>
</body>