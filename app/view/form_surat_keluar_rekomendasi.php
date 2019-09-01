<div class="container-2">
	<h4 class="center underline">Kelola Surat Keluar Rekomendasi</h4>
</div>
<form action="">
	<div class="row row-rekomendasi">
		<div class="col s12 m5 l5">
			<div class="row">
				<div class="input-field col s12 m6 l6">
					<input type="number" name="nomor_surat1" id="nomor_surat1">
					<label for="nomor_surat1">Nomor surat</label>
				</div>
				<div class="input-field col s12 m6 l6">
					<input type="number" name="nomor_surat2" id="nomor_surat2">
					<label for="nomor_surat2">Nomor Surat</label>
				</div>
			</div>
		</div>
		<div class="col s12 m5 l5 sifat-rekomendasi">
			<select name="sifat">
				<option disabled selected>Sifat</option>
      			<option value="biasa">Biasa</option>
     			<option value="penting">Penting</option>
			</select>
		</div>
	</div>
	<div class="row">
		<div class="input-field col s12 m5 l5">
			<input type="text" name="lampiran" id="lampiran">
			<label for="lampiran">Lampiran</label>
		</div>
		<div class="input-field col s12 m5 l5">
			<input type="text" name="perihal" id="perihal">
			<label for="perihal">Perihal</label>
		</div>
		<div class="input-field col s12 m5 l5">
			<input type="text" name="kepada" id="kepada">
			<label for="kepada">Kepada</label>
		</div>
		<div class="input-field col s12 m5 l5">
			<input type="date" name="tgl_surat" id="tgl_surat">
			<label for="tgl_surat">Tanggal Surat</label>
		</div>
		<div class="col s12 m12 l12">
			<label for="area">Isi Surat :</label>
			<div class="row">
				<div class="input-field col s12 m12 l12">
					<textarea name="isi_surat" id="area"></textarea>	
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col l5 m5">
			<button class="waves-effect waves-light btn" type="submit" name="tambah">Tambah Surat</button>
		</div>
	</div>
</form>