<script src="<?= base_url()?>/assets/js/serialize.js"></script>
<script>
	function checkData(f){
		var name=f.name.value;
		var pass = f.pass.value;

		var namePattern=/^([A-ZÁÉÑIÓÚ])?[a-záéíóúñ ]$/;
		var passPattern=/^((?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[\W]).{6,20})$/;

		var contador=0;
		var wrongData=[];
		if(!isOK(name,namePattern)){
			wrongData[contador]="nombre";
			contador++;
		}
		
		if(!isOK(pass,passPattern)){
			wrongData[contador]="contrase&ntilde;a";
			contador++;
		}

		showResults(wrongData);
		
	}//checkData

	function isOK(value,pattern){
		if(pattern.test(value)){
			return true;
		}
		else{
			return false;
		}
	}//isOK

	function showResults(array){
		if(array.length!=0){
		var result="Comprueba si es correcto: ";
			for(i=0;i<array.length;i++){
				result+=array[i]+" ";
			}
			alertify.error(result);
		}
	}
	
</script>
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
        <img src="<?= base_url()?>/assets/images/vuelta.png" alt="vuelta-cole" width="100%">
      </div>

      <div class="item">
        <img src="<?= base_url()?>/assets/images/lobro.png" alt="libro" width="100%">
      </div>
    
      <div class="item">
        <img src="<?= base_url()?>/assets/images/hal.png" alt="haloween" width="100%">
      </div>

      <div class="item">
        <img src="<?= base_url()?>/assets/images/nav.png" alt="navidad" width="100%">
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
<form class="form-horizontal">
 <div class="form-group row">
  <label for="example-text-input" class="control-label col-sm-2">Nombre: </label>
  <div class="col-xs-10">
    <input class="form-control" type="text" style="width:36%" placeholder="Escribe tu nombre" id="example-text-input">
  </div>
  </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Email:</label>
      <div class="col-sm-10">
        <input type="email" class="form-control" style="width:36%" id="email" placeholder="Correo electr&oacute;nico">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Password:</label>
      <div class="col-sm-10">
        <input type="password" class="form-control" style="width:36%" id="pwd" placeholder="Contrase&ntilde;a">
      </div>
    </div>
    
    <div class="form-group">
  <label for="human" class="col-sm-2 control-label">2 + 3 = ?</label>
  <div class="col-sm-10">
   <input type="text" class="form-control" style="width:36%" id="human" name="human" placeholder="Demuestra que no eres un robot!">
  </div>
 </div>
    <div class="form-group">
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default">Submit</button>
      </div>
    </div>
  </form>
   </div>
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
        <button type="submit" class="btn btn-default" onclick="checkData(this.form)">Submit</button>
      </div>
    </div>
    </form>
    </div>
  </div>
</div>
</body>