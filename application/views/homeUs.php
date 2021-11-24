<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Login</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
	<link rel="stylesheet" href="<?=base_url()?>assets/css/home.css">
	
</head>
<body style="
background-image: url(https://i.ibb.co/KjR6cYf/866d4856ac5eb5bff1d5eec5eb791229-1.png);
">
	<?php
		if($this->session->userdata("logado")){
	?>

		<div class="container">
			<div class="row">
				<div class="col-8">
					<h1><?= $info['EmailPlaceholder'] = $this->lang->line("EmailPlaceholder")?></h1>
				</div>
				<div class="col-4">
					<a href="<?=base_url('sairUs')?>" class="btn btn-warning btn-block">Exit</a>
				</div>
			</div>
			
					<div class="col-12">
						<h3>Corinthians's Fans List</h3>
					</div>
					<div class="col-4" style="overflow-x:auto;">
						<table  class="table table-bordered table-striped">
						  <thead class="thead-dark">
						    <tr>
						      <th scope="col">#</th>
						      <th scope="col">Name</th>
						      <th scope="col">Is a Corinthians's Fan</th>
						    </tr>
						  </thead>
						  <tbody>
						    <?php
							foreach($data as $tb_usuario){
							?>
									<tr>
										<th scope="row"><?= $tb_usuario->cd_usuario ?></th>
										<td><?= $tb_usuario->nm_usuario ?></td>
										<td><?= $tb_usuario->bl_corintiano ?></td><br>
									</tr>
							<?php		
								}
							?>
						  </tbody>
						</table>						
					</div>
				</div>
			
		</div>
	<?php
		}
		else{
			redirect(base_url('loginUs'));
		}
	?>
</body>
</html>
