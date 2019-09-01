<div class="container-2">
	<h4 class="center underline">Kelola Surat Masuk</h4>
</div>
<form action="">
	<div class="row">
		<div class="input-field col s12 m5 l5">
			<input type="number" name="nomor_surat" id="nomor_surat">
			<label for="nomor_surat">Nomor Surat</label>
		</div>
		<div class="input-field col s12 m5 l5">
			<input type="text" name="asal_surat" id="asal_surat">
			<label for="asal_surat">Asal Surat</label>
		</div>
		<div class="input-field col s12 m5 l5">
			<input type="text" name="perihal" id="perihal">
			<label for="perihal">Perihal</label>
		</div>
		<div class="input-field col s12 m5 l5">
			<input type="date" name="tanggal_surat" id="tanggal_surat">
			<label for="tanggal_surat">Tanggal Surat</label>
		</div>
		<div class="input-field col s12 m5 l5">
			<select name="sifat">
				<option disabled selected>Sifat</option>
      			<option value="biasa">Biasa</option>
     			<option value="penting">Penting</option>
			</select>
		</div>
		<div class="file-field input-field col s12 m5 l5">
			<div class="btn">
				<span>File</span>
				<input type="file">
			</div>
			<div class="file-path-wrapper">
				<input class="file-path validate" type="text">
			</div>
		</div>
		<div class="input-field col s12 m5 l5">
			<textarea id="keterangan" class="materialize-textarea" name="keterangan"></textarea>
          <label for="keterangan">Keterangan</label>
		</div>
	</div>
	<div class="row">
		<div class="col l5 m5">
			<button class="waves-effect waves-light btn" type="submit" name="tambah">Tambah Surat</button>
		</div>
	</div>
</form>