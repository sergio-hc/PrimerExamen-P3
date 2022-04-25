

<?php 
include "conexion.inc.php";

if(isset($_POST['login'])) {
$usuario = $_POST['usuario'];
$pass = $_POST["pass"];

$sql = mysqli_query($con,"SELECT * from acceso where usuario = '".$usuario."'and password ='".$pass."'");
$nr = mysqli_num_rows($sql);

    if($nr == 1){
    echo "bienvenido ".$usuario;
    header("Location: ../index.php");
    }else if($nr==0){
    echo "No ingreso";
    //header("Location: acceso.php");
    }
}
 ?>
<html>
    <link href="estilo.css" rel="stylesheet" type="text/css">
  <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-2"></div>
            <div class="col-lg-6 col-md-8 login-box">
                <div class="col-lg-12 login-key">
                    <i class="fa fa-key" aria-hidden="true"></i>
                </div>
                <div class="col-lg-12 login-title">
                    ACCESO A BDSERGIOHUANCA
                </div>

                <div class="col-lg-12 login-form">
                    <div class="col-lg-12 login-form">
                        <form method="POST" action="acceso.php">
                            <div class="form-group">
                                <label class="form-control-label">USUARIO</label>
                                <input type="text" class="form-control" name='usuario'>
                            </div>
                            <div class="form-group">
                                <label class="form-control-label">PASSWORD</label>
                                <input type="password" class="form-control" name="pass">
                            </div>

                            <div class="col-lg-12 loginbttm">
                                <div class="col-lg-6 login-btm login-text">
                                    <!-- Error Message -->
                                </div>
                                <div class="col-lg-6 login-btm login-button">
                                    <button type="submit" class="btn btn-outline-primary" name="login">LOGIN</button>
                                    
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-3 col-md-2"></div>
            </div>
        </div>
  </div>
</html>
