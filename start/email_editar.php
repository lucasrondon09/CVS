<?php include "conexao.php"?>
<?php include "header.php"?>

<?php

$idemail = $_GET['id'];
	
$query = "select * from email where idemail =".$idemail;
$execQuery = mysql_query($query);
$rowsQuery = mysql_num_rows($execQuery);

if($rowsQuery > 0){
	
	$res = mysql_fetch_array($execQuery);
	$host 				= $res['host'];
	$porta	 			= $res['porta'];
	$login 				= $res['login'];
	$senha 				= $res['senha'];
	$nomeremetente 		= $res['nomeremetente'];
	$emailremetente 	= $res['emailremetente'];
	$destinatario1 		= $res['destinatario1'];
	$destinatario2 		= $res['destinatario2'];
	$destinatariocc 	= $res['destinatariocc'];
	$destinatariocco 	= $res['destinatariocco'];
		
	
}

?>

      <div id="content-wrapper">

        <div class="container-fluid">

          <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="#">Textos</a>
            </li>
            <li class="breadcrumb-item active">Editar</li>
          </ol>

          <!-- DataTables Example -->
          <div class="card mb-3">
            <div class="card-header">
              <i class="fas fa-table"></i>
              Editar</div>
            <div class="card-body">
              <form action="email_editar_action.php" method="post">
				  <div class="form-group">
					<label for="titulo">Host</label>
					<input type="text" class="form-control" id="host" name="host" value="<?php echo $host?>" required>
					<input type="text" hidden="" class="form-control" id="idemail" name="idemail" value="<?php echo $idemail?>"> 
				  </div>
				  <div class="form-group">
					<label for="subtitulo">Porta</label>
					<input type="text" class="form-control" id="porta" name="porta" value="<?php echo $porta?>" required>
				  </div>
				  <div class="form-group">
					<label for="subtitulo">Login</label>
					<input type="text" class="form-control" id="login" name="login" value="<?php echo $login?>" required>
				  </div>
				  <div class="form-group">
					<label for="subtitulo">Senha</label>
					<input type="text" class="form-control" id="senha" name="senha" value="<?php echo $senha?>" required>
				  </div>
				  <div class="form-group">
					<label for="subtitulo">Remetente</label>
					<input type="text" class="form-control" id="nomeremetente" name="nomeremetente" value="<?php echo $nomeremetente?>" required>
				  </div>
				  <div class="form-group">
					<label for="subtitulo">E-mail Remetente</label>
					<input type="text" class="form-control" id="emailremetente" name="emailremetente" value="<?php echo $emailremetente?>" required>
				  </div>
				  <div class="form-group">
					<label for="subtitulo">Destinatário 1</label>
					<input type="text" class="form-control" id="destinatario1" name="destinatario1" value="<?php echo $destinatario1?>" required>
				  </div>
				  <div class="form-group">
					<label for="subtitulo">Destinatário 2</label>
					<input type="text" class="form-control" id="destinatario2" name="destinatario2" value="<?php echo $destinatario2?>">
				  </div>
				  <div class="form-group">
					<label for="subtitulo">Destinatário CC</label>
					<input type="text" class="form-control" id="destinatariocc" name="destinatariocc" value="<?php echo $destinatariocc?>">
				  </div>
				  <div class="form-group">
					<label for="subtitulo">Destinatário CCO</label>
					<input type="text" class="form-control" id="destinatariocco" name="destinatariocco" value="<?php echo $destinatariocco?>">
				  </div>
				  <a href="artigos.php" class="btn btn-primary">Voltar</a>
				  <button type="submit" class="btn btn-primary">Salvar</button>
			  </form>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

<?php include "footer.php"?>
