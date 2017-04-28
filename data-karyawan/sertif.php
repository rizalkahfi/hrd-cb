<div class="container">
  <h2>Daftar Pegawai</h2>
  <div class="row">
    <div class="form-group col-xs-2">
      <label for="cab">Cabang Data</label>
      <select class="form-control input-sm" name="cab" id="cab">
        <option value="">Pilih Cabang</option>
        <option value='head'>Head Department</option>
      </select>
    </div>
    <div class="form-group col-xs-2">
      <label for="dep">Department</label>
      <select class="form-control input-sm" name="dep" id="dep">
        <option value="">Pilih Department</option>
        <option value='IT/EDP'>IT/EDP</option>
      </select>
    </div>
	<div class="form-group col-xs-2">
      <label for="statuspeg">Status Pegawai</label>
      <select class="form-control input-sm" name="statuspeg" id="statuspeg">
        <option value="1">Aktif</option>
        <option value="0">Tidak Aktif</option>
      </select>
    </div>
  </div>
  <div class="row">
    <div class="form-group col-xs-2">
      <label for="hasilser">Hasil Sertifikasi</label>
      <select class="form-control input-sm" name="hasilser" id="hasilser">
        <option value="all">Semua</option>
      </select>
    </div>
    <div class="form-group col-xs-2"><br/>
      <button class="btn btn-info">Cari</button>
    </div>
  </div>
  <table class="table" border="1">
    <tr>
      <th>NIP</th>
      <th>Nama Karyawan</th>
      <th>Data Sertfikasi</th>
    </tr>
    <tr>
      <td></td>
      <td></td>
      <td></td>
    </tr>
  </table>
</div>
