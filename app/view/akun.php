<?php

	include_once "app/module/akun/list.php";

?>

<div class="container-2">
	<h4 class="center underline">Kelola Akun</h4>
</div>
	<div class="row">
		<div class="col m6 l6">
			<a class="waves-effect waves-light btn" href="<?= BASE_URL."form_akun"?>" <?php if($numAdmin == 1 && $numKepala_dinas == 1 && $numSekretaris_dinas == 1){ ?>style="visibility:hidden;"<?php } ?> >
				Tambah Akun
			</a>
		</div>
	</div>
<table class="responsive-table highlight">
	<thead class="blue-grey lighten-4">
		<tr>
			<th>NO</th>
			<th>Nama</th>
			<th>Email</th>
			<th>Username</th>
			<th>WhatsApp</th>
			<th>Level</th>
			<th>Action</th>
		</tr>
	</thead>
	<tbody>
<?php
	foreach($query as $row){
?>
		<tr>
			<td><?= $no++ ?></td>
			<td><?= $row["nama"] ?></td>
			<td><?= $row["email"] ?></td>
			<td><?= $row["username"] ?></td>
			<td><?= $row["whatsapp"] ?></td>
			<td><?= $row["jabatan"] ?></td>
			<td>
				<a href="<?= BASE_URL."form_akun/edit/$row[id_akun]" ?>" class="waves-effect waves-light btn-small tooltipped" data-position="top" data-tooltip="Edit">
				<i class="material-icons">mode_edit</i>
				</a>
				<a href="" class="waves-effect waves-light btn-small purple resetpass tooltipped"  data-position="top" data-tooltip="Reset Password">
                <i class="material-icons">loop</i>
            	</a>
			</td>
		</tr>
<?php
	}
?>
	</tbody>
</table>