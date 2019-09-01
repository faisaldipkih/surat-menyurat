<div class="container-2">
	<h4 class="center underline">Kelola Surat Masuk</h4>
</div>
<form action="">
	<div class="row flex">
		<div class="col l6 m6">
			<a class="waves-effect waves-light btn" href="<?= BASE_URL."form_surat_masuk" ?>">Tambah Surat Masuk</a>
		</div>
		<div class="col l5 m5">
			<div class="input-field">
				<input id="input_text" type="text" data-length="10">
           		<label for="input_text">Masukan</label>
			</div>
		</div>
		<div class="co l1 m1">
			<button type="submit" class="waves-effect waves-light btn modal-trigger btn-tambah" name="cari">Cari</button>
		</div>
	</div>
</form>
<table class="responsive-table highlight">
	<thead class="blue-grey lighten-4">
		<th>NO</th>
		<th>Nomor</th>
		<th>Perihal</th>
		<th>Action</th>
	</thead>
	<tbody>
		<td>1</td>
		<td>223</td>
		<td>rekomendasi</td>
	</tbody>
</table>