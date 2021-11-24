<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Login</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
	<link rel="stylesheet" href="<?=base_url()?>assets/css/login.css">
</head>
<body style="background-image: url(https://i.pinimg.com/originals/86/6d/48/866d4856ac5eb5bff1d5eec5eb791229.png)">
	<div class="container">
		<div class="row">
			<div class="col-6">
				<div class="jumbotron form-login">
					<h5><?= $data['Title'] = $this->lang->line("Title")?></h5>
					<hr class="my-4">
						<form action="<?=base_url('entrarUs')?>" method="post">
						<div class="form-group">
							<div class="row">
								<label for="email"><?= $data['LabelEmail'] = $this->lang->line("LabelEmail")?>:</label>
								<input type="email" id="email" name="email" class="form-control" placeholder="<?= $data['EmailPlaceholder'] = $this->lang->line("EmailPlaceholder")?>">
							</div>
						</div>
						<div class="form-group">
							<div class="row">
								<label for="senha"><?= $data['LabelPassword'] = $this->lang->line("LabelPassword")?>:</label>
								<input type="password" id="senha" class="form-control" name="senha">
							</div>
						</div>
						<div class="form-group">
							<div class="row">
								<button class="btn btn-success btn-block" type="submit"><?= $data['btnEnter'] = $this->lang->line("btnEnter")?></button>
							</div>
						</div>
						</form>
						<hr class="my-4">
						<div class="form-group">
							<div class="row">
								<a href="<?=base_url()?>cadastroUs" class="btn btn-primary btn-block"><?= $data['btnSignUp'] = $this->lang->line("btnSignUp")?></a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class=" alert alert-secondary col-2 offset-1">
					<a href="<?=base_url('login')?>" class="btn btn-default btn-block">PT BR</a>
				</div>
				<div  class=" col-2 alert alert-secondary offset-1">
					<a href="<?=base_url('loginus')?>" class="btn btn-default btn-block">EN US</a>
				</div>
			<div>
		</div>
	</div>
</body>
</html>
