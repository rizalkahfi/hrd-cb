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
  </div>
  <div class="row">
    <div class="form-group col-xs-2">
      <label for="search_by">Search by</label>
      <select class="form-control input-sm" name="search_by" id="search_by">
        <option value="nip">NIP</option>
        <option value="nama">Nama</option>
        <option value="status">Status</option>
      </select>
    </div>
    <div class="form-group col-xs-2">
      <label for="text_search">&nbsp;</label>
      <input type="text" class="form-control" id="text_search" name="text_search">
    </div>
    <div class="form-group col-xs-2"><br/>
      <button class="btn btn-info">Cari</button>
    </div>
  </div>
  <table class="table" border="1">
    <tr>
      <th>NIP</th>
      <th>Nama Karyawan</th>
      <th>Cabang</th>
      <th>Department</th>
      <th>Jabatan</th>
      <th>Machine</th>
      <th>Enroll</th>
      <th></th>
    </tr>
    <tr>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
  </table>
</div>
