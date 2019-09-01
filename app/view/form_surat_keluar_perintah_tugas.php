<div class="container-2">
	<h4 class="center underline">Kelola Surat Perintah Tugas</h4>
</div>
<form action="">
	<div class="row">
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
		<div class="input-field col s12 m5 l5">
			<input type="date" name="tgl_surat" id="tgl_surat">
			<label for="tgl_surat">Tanggal Surat</label>
		</div>
	</div>
	<div class="row">
		<div class="col s12 m12 l12">
			<div class="col s12 m5 l5">
				<label for="">Dasar :</label>
				<div class="input-field s12 m12 l12">
					<textarea name="dasar" id="area-1"></textarea>
				</div>
			</div>
			<div class="col s12 m5 l5">
				<label for="">Untuk :</label>
				<div class="input-field s12 m12 l12">
					<textarea name="dasar" id="area-1"></textarea>
				</div>
			</div>
		</div>
		<div class="input-field col s12 m5 l5">
			<input type="text" name="nama" id="nama">
			<label for="nama">Nama</label>
		</div>
		<div class="input-field col s12 m5 l5">
			<select name="hari">
				<option disabled selected>Hari</option>
      			<option value="senin">Senin</option>
     			<option value="selasa">Selasa</option>
			</select>
		</div>
		<div class="input-field col s12 m5 l5">
			<input type="number" name="nip" id="nip">
			<label for="nip">NIP</label>
		</div>
		<div class="input-field col s12 m5 l5">
			<input type="text" name="tanggal" id="tanggal">
			<label for="tanggal">Tanggal</label>
		</div>
		<div class="input-field col s12 m5 l5">
			<input type="text" name="pangkat" id="pangkat">
			<label for="pangkat">Pangkat / Gol</label>
		</div>
		<div class="input-field col s12 m5 l5">
			<input type="text" name="pembukaan" id="pembukaan">
			<label for="pembukaan">Pembukaan</label>
		</div>
		<div class="input-field col s12 m5 l5">
			<input type="text" name="jabatan" id="jabatan">
			<label for="jabatan">Jabatan</label>
		</div>
		<div class="input-field col s12 m5 l5">
			<input type="text" name="tempat" id="tempat">
			<label for="tempat">Tempat</label>
		</div>
	</div>
	<div class="row">
		<div class="col l5 m5">
			<button class="waves-effect waves-light btn" type="submit" name="tambah">Tambah Surat</button>
		</div>
	</div>
</form>