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