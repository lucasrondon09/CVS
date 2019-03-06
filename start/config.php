
<!DOCTYPE html>

<html lang="pt">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>START SITE - CONFIGURAÇÕES DE CONEXÃO</title>

    <!-- Bootstrap core CSS-->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin.css" rel="stylesheet">

  </head>


  <body class="bg-dark">
	  
 

    <div class="container">
      <div class="card card-login mx-auto mt-5">
        <div class="card-header">START SITE - CONFIGURAÇÕES DE BANCO</div>
        <div class="card-body">
          <form action="config_action.php" method="post"> 		 
            <div class="form-group">
              <div class="form-label-group">
                <input type="text" id="host" name="host" class="form-control" placeholder="Host" required="required" autofocus="autofocus">
                <label for="usuario">Host</label>
              </div>
            </div>
			<div class="form-group">
              <div class="form-label-group">
                <input type="text" id="banco" name="banco" class="form-control" placeholder="Banco" required="required" >
                <label for="usuario">Nome do Banco</label>
              </div>
            </div>  
			<div class="form-group">
              <div class="form-label-group">
                <input type="text" id="usuario" name="usuario" class="form-control" placeholder="Usuário" required="required" >
                <label for="usuario">Usuário</label>
              </div>
            </div>  
            <div class="form-group">
              <div class="form-label-group">
                <input type="text" id="senha" name="senha" class="form-control" placeholder="Senha" required="required">
                <label for="senha">Senha</label>
              </div>
            </div>
			  <button class="btn btn-primary btn-block" type="submit">Acessar</button>
            
          </form>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  </body>

</html>
