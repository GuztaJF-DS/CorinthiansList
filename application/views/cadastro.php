<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Login</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
	<link rel="stylesheet" href="<?=base_url()?>assets/css/cadastro.css">
</head>
<body style="
background-image: url(https://cdn.meutimao.com.br/_upload/wallpapers/arena_corinthians_em_hd_p4_1920x1080.jpg);
background-repeat: no-repeat;
">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<h1><?= $data['FansSignUp'] = $this->lang->line("FansSignUp")?></h1>
			</div>
		</div>
		<form action="<?=base_url('inserir')?>" method="post">
			<div class="form-group">
				<div class="row">
					<div class="col-12">
						<label for="nome"><?= $data['LabelName'] = $this->lang->line("LabelName")?>:</label>
						<input type="text" class="form-control" id="nome" name="nome">
					</div>
				</div>
			</div>
			<div class="form-group">
				<div class="row">
					<div class="col-6">
						<label for="email"><?= $data['LabelEmail'] = $this->lang->line("LabelEmail")?>:</label>
						<input type="email" class="form-control" id="email" name="email">
					</div>
					<div class="col-6">
						<label for="senha"><?= $data['LabelPassword'] = $this->lang->line("LabelPassword")?>:</label>
						<input type="password" class="form-control" id="senha" name="senha">
					</div>
				</div>
			</div>
			<div class="form-group">
				<div class="row">
					<div class="col-12">
						<fieldset>
						<h5><?= $data['YouAre'] = $this->lang->line("YouAre")?></h5>
						<input type="radio" name="corintiano" id="tru" value=Sim>
						<label for="TRUE"><?= $data['Yes'] = $this->lang->line("Yes")?></label><br>
						<input type="radio" name="corintiano" id="fake" value=Não>
						<label for="FALSE"><?= $data['No'] = $this->lang->line("No")?></label><br>
						</fieldset>

					</div>
				</div>
			</div>
			<div class="form-group">
				<div class="row">
					<div class="col-12">
						<button class="btn btn-success btn-block" type="submit"><?= $data['btnSignUp'] = $this->lang->line("btnSignUp")?></button>
					</div>
				</div>
			</div>
		</form>
	</div>
</body>
</html>
