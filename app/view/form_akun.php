<?php

	include_once "app/module/akun/list.php";

?>
<div class="container-2">
	<h4 class="center underline">Kelola Akun</h4>
</div>
<form action="<?= BASE_URL."app/module/akun/action.php" ?>" method="post">
	<div class="row">
		<div class="input-field col l5">
			<input type="text" name="nama" id="nama">
			<label for="nama">Nama</label>
		</div>
		<div class="input-field col l5">
			<input type="text" name="username" id="username">
			<label for="username">Username</label>
		</div>
		<div class="input-field col l5">
			<input type="email" name="email" id="email">
			<label for="email">Email</label>
		</div>
		<div class="input-field col l5">
			<input type="number" name="whatsapp" id="whatsapp">
			<label for="whatsapp">No WhatsApp</label>
		</div>
		<div class="input-field col s12 m5 l5">
			<select name="jabatan">
				<option disabled selected>Jabatan</option>
      				<option value="admin" <?php if($numAdmin == 1){ ?>disabled <?php } ?> >Admin</option>
     				<option value="kepala_dinas" <?php if($numKepala_dinas == 1){ ?>disabled <?php } ?> >Kepala Dinas</option>
     				<option value="sekretaris_dinas" <?php if($numSekretaris_dinas == 1){ ?>disabled <?php } ?> >Sekretaris Dinas</option>
			</select>
		</div>
	</div>
	<div class="row">
		<div class="input-field col l5">
			<button class="waves-effect waves-light btn" type="submit" name="tambah">Tambah</button>
		</div>
	</div>
</form>