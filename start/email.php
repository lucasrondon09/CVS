<?php include "conexao.php"?>
<?php include "header.php"?>
      <div id="content-wrapper">

        <div class="container-fluid">

          <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="#">E-mail</a>
            </li>
            <li class="breadcrumb-item active">Visualizar</li>
          </ol>

          <!-- DataTables Example -->
          <div class="card mb-3">
            <div class="card-header">
              <i class="fas fa-table"></i>
              Visualizar</div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Id</th>
                      <th>Host</th>
                      <th>Porta</th>
					  <th>Login</th>	
					  <th></th>		
                    </tr>
                  </thead>
                  
                    
					<?php
						$query = "select * from email";
						$execQuery = mysql_query($query);
						$numQuery = mysql_num_rows($execQuery);
						if($numQuery > 0){
							
							while($res = mysql_fetch_array($execQuery)){
								$id			= $res["idemail"];
								$host 		= $res["host"];
								$porta 		= $res["porta"];
								$login 		= $res["login"];
								
								echo '<tbody>
								<tr>
								  <td>'.$id.'</td>
								  <td>'.$host.'</td>
								  <td>'.$porta.'</td>
								  <td>'.$login.'</td>
								  <td class="text-center">
								  		<a href="email_editar.php?id='.$id.'" class="btn btn-primary"><i class="fas fa-pen"></i></a>		
								  </td>
								  </tr></tbody>
								';
							}
						}

					?>
                      
                    
                  
                </table>
              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

<?php include "footer.php"?>
