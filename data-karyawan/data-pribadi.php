<form>
<div class="row">
  <h2 id="judul">Data Pegawai / Karyawan (Data Pribadi)</h2>
</div><br/>
<div class="row">
  <div class="form-group col-xs-4" id="atas">
    <label for="nip">No NIP : </label>
    <input type="text" id="nip" name="nip" value="9903383" readonly>
  </div>
  <div class="form-group col-xs-4" id="atas">
    <label for="namakar">Nama Karyawan : </label>
    <input type="text" id="nama_kar" name="nama_kar" value="Muhamad Rizal Kahfi" readonly>
  </div>
</div>
<div class="row">
  <div class="form-group col-xs-4" id="atas">
    Cabang Data : <input type="text" id="cab" name="cab" value="Lebak Bulus(LWA)" readonly>
  </div>
  <div class="form-group col-xs-4" id="atas">
    Status Karyawan : <input type="text" id="statuskar" name="statuskar" value="Unknown" readonly>
  </div>
</div>
<div class="row">
  <div class="form-group col-xs-4" id="atas">
    Department : <input type="text" id="dept" name="dept" value="IT/EDP" readonly>
  </div>
  <div class="form-group col-xs-4" id="atas">
    Mulai Bekerja : <input type="text" id="tgl_in" name="tgl_in" value="06/04/2017" readonly>
  </div>
</div>
<div class="row">
  <div class="form-group col-xs-4" id="atas">
    Jabatan : <input type="text" id="jbtn" name="jbtn" value="Web Developer" readonly>
  </div>
  <div class="form-group col-xs-4" id="atas">
    <img src="img/user.png" id="pas-foto">
  </div>
</div>
<table>
  <tr>
    <td>Tempat/Tgl Lahir </td>
    <td><input type="text" class="form-control input-sm form-hrd" id="tempat" name="tempat" value="Jakarta"></td>
    <td> / </td>
    <td><input type="date" class="form-control input-sm form-hrd" id="tgl_lahir" name="tgl_lahir"></td>
    <td>&nbsp;&nbsp;&nbsp;</td>
    <td>Jenis Kelamin &nbsp;</td>
    <td><select class="form-control input-sm form-hrd" name="jen_kel" id="jen_kel">
      <option value=" ">-</option>
      <option value="Pria">Pria</option>
      <option value="Wanita">Wanita</option>
    </select></td>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
    <td>Agama</td>
    <td><select class="form-control input-sm form-hrd" name="agama" id="agama">
      <option value=" ">-</option>
      <option value="Islam">Islam</option>
      <option value="Kristen">Kristen</option>
      <option value="Protestan">Protestan</option>
      <option value="Khatolik">Khatolik</option>
      <option value="Budha">Budha</option>
      <option value="Hindu">Hindu</option>
    </select></td>
  </tr>
  <tr>
    <td>Suku</td>
    <td colspan="3"><input type="text" class="form-control input-sm form-hrd" id="suku" name="suku" value="Betawi"></td>
    <td>&nbsp;&nbsp;&nbsp;</td>
    <td>Status Perkawinan &nbsp;</td>
    <td><select class="form-control input-sm form-hrd" name="s_kawin" id="s_kawin">
      <option value=" ">-</option>
      <option value="Lajang">Lajang</option>
      <option value="Kawin">Kawin</option>
      <option value="Duda">Duda</option>
      <option value="Janda">Janda</option>
    </select></td>
    <td></td><td></td><td></td>
  </tr>
  <tr>
    <td>Nama Istri/Suami</td>
    <td colspan="3"><input type="text" class="form-control input-sm form-hrd" id="pasangan" name="pasangan" value="None"></td>
    <td>&nbsp;&nbsp;&nbsp;</td>
    <td>Tempat/Tgl Lahir </td>
    <td><input type="text" class="form-control input-sm form-hrd" id="tempat_pas" name="tempat_pas" value="Jakarta"></td>
    <td>/</td>
    <td><input type="date" class="form-control input-sm form-hrd" id="tgl_lahir_pas" name="tgl_lahir_pas"></td>
    <td></td>
  </tr>
  <tr>
    <td><p id="anak">Nama Anak-1</p></td>
    <td colspan="3"><input type="text" class="form-control input-sm form-hrd anak" id="anak1" name="anak1" value="None"></td>
    <td>&nbsp;&nbsp;&nbsp;</td>
    <td>Tgl Lahir </td>
    <td><input type="date" class="form-control input-sm form-hrd tgl-anak" id="tgl_lahir_anak1" name="tgl_lahir_anak1"></td>
    <td>&nbsp;&nbsp;&nbsp;</td>
    <td>Bawahan</td>
    <td><select class="form-control input-sm" name="bawahan" id="bawahan">
      <option value="1">Ya</option>
      <option value="0">Tidak</option>
    </select></td>
  </tr>
  <tr>
    <td><p id="anak">Nama Anak-2</p></td>
    <td colspan="3"><input type="text" class="form-control input-sm form-hrd anak" id="anak2" name="anak2" value="None"></td>
    <td>&nbsp;&nbsp;&nbsp;</td>
    <td>Tgl Lahir </td>
    <td><input type="date" class="form-control input-sm form-hrd tgl-anak" id="tgl_lahir_anak2" name="tgl_lahir_anak2"></td>
  </tr>
  <tr>
    <td><p id="anak">Nama Anak-3</p></td>
    <td colspan="3"><input type="text" class="form-control input-sm form-hrd anak" id="anak3" name="anak3" value="None"></td>
    <td>&nbsp;&nbsp;&nbsp;</td>
    <td>Tgl Lahir </td>
    <td><input type="date" class="form-control input-sm form-hrd tgl-anak" id="tgl_lahir_anak3" name="tgl_lahir_anak3"></td>
    <td>&nbsp;&nbsp;&nbsp;</td>
    <td>Atasan</td>
    <td><select class="form-control input-sm form-hrd" name="atasan" id="atasan">
      <option value="">Pilih Atasan</option>
      <option value='Vitto Veroy'>Vitto Veroy</option>
    </select></td>
  </tr>
  <tr>
    <td>Alamat</td>
    <td colspan="4"><input type="text" class="form-control input-sm form-hrd" id="alamat" name="alamat" ></td>
    <td><p id="alamatw">RT/RW</p></td>
    <td><input type="text" class="form-control input-sm form-hrd" id="rtrw" name="rtrw"></td>
    <td><p id="kec">Kecamatan</p></td>
    <td colspan="2"><input type="text" class="form-control input-sm form-hrd" id="camat" name="camat"></td>
  </tr>
  <tr>
    <td colspan="5"></td>
    <td><p id="alamatw">Kota</p></td>
    <td><input type="text" class="form-control input-sm form-hrd" id="kota" name="kota"></td>
    <td>&nbsp;&nbsp;&nbsp;</td>
    <td><p id="">Kode Pos</p></td>
    <td><input type="text" class="form-control input-sm form-hrd" id="kodepos" name="kodepos"></td>
  </tr>
  <tr>
    <td>Tlp. Rumah</td>
    <td><input type="text" class="form-control input-sm form-hrd" id="tlprmh" name="tlprmh" ></td>
    <td><p id="hpt">HP</p></td>
    <td colspan="2"><input type="text" class="form-control input-sm form-hrd" id="hp" name="hp" ></td>
    <td><p id="alamatw">Email</p></td>
    <td colspan="3"><input type="text" class="form-control input-sm form-hrd" id="emailkar" name="emailkar"></td>
  </tr>
  <tr>
    <td>Alamat Emergency</td>
    <td colspan="4"><input type="text" class="form-control input-sm form-hrd" id="alamatemg" name="alamatemg" ></td>
    <td><p id="alamatw">Tlp. Emg</p></td>
    <td><input type="text" class="form-control input-sm form-hrd" id="tlpemg" name="tlpemg"></td>
  </tr>
</table>
<hr id="line">
<table>
  <tr>
    <td>KTP</td>
    <td><input type="text" class="form-control input-sm form-hrd" id="ktp" name="ktp"></td>
    <td>&nbsp;</td>
    <td><input type="text" class="form-control input-sm form-hrd" id="ktpbrowse" name="ktpbrowse"></td>
    <td><button class="btn btn-outline btn-sm btn-primary btn-hrd">Browse</button></td>
    <td><button class="btn btn-outline btn-sm btn-primary btn-hrd attach">Attach KTP</button></td>
    <td>NPWP</td>
    <td><input type="text" class="form-control input-sm form-hrd" id="npwp" name="npwp"></td>
    <td>&nbsp;</td>
    <td><input type="text" class="form-control input-sm form-hrd" id="browsenpwp" name="browsenpwp"></td>
    <td><button class="btn btn-outline btn-sm btn-primary btn-hrd">Browse</button></td>
    <td><button class="btn btn-outline btn-sm btn-primary btn-hrd attach">Attach NPWP</button></td>
  </tr>
  <tr>
    <td>SIM</td>
    <td><input type="text" class="form-control input-sm form-hrd" id="sim" name="sim"></td>
    <td>&nbsp;</td>
    <td><input type="text" class="form-control input-sm form-hrd" id="browsesim" name="browsesim"></td>
    <td><button class="btn btn-outline btn-sm btn-primary btn-hrd">Browse</button></td>
    <td><button class="btn btn-outline btn-sm btn-primary btn-hrd attach">Attach SIM</button></td>
    <td>BPJSK</td>
    <td><input type="text" class="form-control input-sm form-hrd" id="bpjsk" name="bpjsk"></td>
    <td>&nbsp;</td>
    <td><input type="text" class="form-control input-sm form-hrd" id="browsebpjsk" name="browsebpjsk"></td>
    <td><button class="btn btn-outline btn-sm btn-primary btn-hrd">Browse</button></td>
    <td><button class="btn btn-outline btn-sm btn-primary btn-hrd attach">Attach BPJSK</button></td>
  </tr>
  <tr>
    <td>Kartu Keluarga</td>
    <td><input type="text" class="form-control input-sm form-hrd" id="kk" name="kk"></td>
    <td>&nbsp;</td>
    <td><input type="text" class="form-control input-sm form-hrd" id="browsekk" name="browsekk"></td>
    <td><button class="btn btn-outline btn-sm btn-primary btn-hrd">Browse</button></td>
    <td><button class="btn btn-outline btn-sm btn-primary btn-hrd attach">Attach KK</button></td>
    <td>Photo</td>
    <td><input type="text" class="form-control input-sm form-hrd" id="user_photo" name="user_photo"></td>
    <td>&nbsp;</td>
    <td><input type="text" class="form-control input-sm form-hrd" id="browsephoto" name="browsephoto"></td>
    <td><button class="btn btn-outline btn-sm btn-primary btn-hrd">Browse</button></td>
    <td><button class="btn btn-outline btn-sm btn-primary btn-hrd attach">Attach Photo</button></td>
  </tr>
</table>
<button class="btn btn-sm btn-outline btn-success">Update</button>
</form>
