<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

</head>
<body>
  <h2 id="judul">Data Pegawai / Karyawan</h2>
<form id="form" method="POST" class="form" action="index.php">
  <div class="panel-group" id="accordion">
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">
        Data Pegawai</a>
      </h4>
    </div>
    <div id="collapse1" class="panel-collapse collapse in">
      <div class="panel-body">
          <div class="row">
            <div class="form-group col-xs-2">
              <label for="noin">No Induk Pegawai</label>
              <input type="text" class="form-control" id="noin" name="noin" readonly>
            </div>
            <div class="form-group col-xs-4">
              <label for="namakar">Nama Karyawan</label>
              <input type="text" class="form-control" id="namakar" name="namakar">
            </div>
			<div class="form-group col-xs-4">
              <label for="user_foto">Upload foto</label>
              <input type="file" class="form-control choose-file" id="user_foto" name="user_foto">
            </div>
          </div>
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
              <label for="jabatan">Jabatan</label>
              <select class="form-control input-sm" name="jabatan" id="jabatan">
                <option value="">Pilih Jabatan</option>
                <option value='General Manager'>General Manager</option>
              </select>
            </div>
            <div class="form-group col-xs-3">
              <label for="atasan">Atasan/Penanggung Jawab</label>
              <select class="form-control input-sm" name="atasan" id="atasan">
                <option value="">Pilih Atasan</option>
                <option value='Vitto Veroy'>Vitto Veroy</option>
              </select>
            </div>
          </div>
          <div class="row">
			<div class="form-group col-xs-2">
              <label for="tgl_in">Tanggal Mulai Bekerja</label>
              <input type="date" class="form-control input-sm" name="tgl_in" id="tgl_in">
            </div>
            <div class="form-group col-xs-2">
              <label for="statuskar">Status Karyawan</label>
              <select class="form-control input-sm" name="statuskar" id="statuskar" onchange='CheckStatus(this.value);'>
                <option value="">Pilih Status</option>
                <option value='Kontrak'>Kontrak</option>
                <option value='Permanen'>Permanen</option>
              </select>
            </div>
			<div  id="durhid" style='display:none;'>
            <div class="form-group col-xs-2">
              <label for="durasi">Durasi Kontrak</label>
              <select class="form-control input-sm" name="durasi" id="durasi" >
                <option value=" ">Bulan</option>
                <?php
                for ($x = 1; $x <= 12; $x++) {
                ?>
                <option value='<?php echo $x;?>'><?php echo $x;?></option>
                <?php } ?>
              </select>
            </div>
            <div class="form-group col-xs-2">
              <label for="tgl_out">Tanggal Akhir Bekerja</label>
              <input type="date" class="form-control input-sm" name="tgl_out" id="tgl_out" >
            </div>
          </div>
		  </div>
          <div class="row">
            <div class="form-group col-xs-4">
              <label for="email">Email Perusahaan</label>
              <input type="email" class="form-control" id="email" name="email" >
            </div>
            <div class="form-group col-xs-2">
              <label for="bawahan">Bawahan/Anak Buah</label>
              <select class="form-control input-sm" name="bawahan" id="bawahan">
                <option value="1">Ya</option>
                <option value="0">Tidak</option>
              </select>
            </div>
          </div>
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse2" class="btn btn-success"> Next</a>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">
        Model Jam Kerja & Hari Libur</a>
      </h4>
    </div>
    <div id="collapse2" class="panel-collapse collapse">
      <div class="panel-body">
        <div class="row">
          <div class="form-group col-xs-8">
            <label for="jenis_libur">Jenis Libur Karyawan </label>
              <div class="radio">
                <label><input type="radio" name="optradio">Libur Tetap</label>
              </div>
                <label class="checkbox-inline"><input type="checkbox" value="Sabtu" name="harilibur">Sabtu</label>
                <label class="checkbox-inline"><input type="checkbox" value="Minggu" name="harilibur">Minggu</label>
                <label class="checkbox-inline"><input type="checkbox" value="Senin" name="harilibur">Senin</label>
                <label class="checkbox-inline"><input type="checkbox" value="Selasa" name="harilibur">Selasa</label>
                <label class="checkbox-inline"><input type="checkbox" value="Rabu" name="harilibur">Rabu</label>
                <label class="checkbox-inline"><input type="checkbox" value="Kamis" name="harilibur">Kamis</label>
                <label class="checkbox-inline"><input type="checkbox" value="Jumat" name="harilibur">Jumat</label>
              <div class="radio">
                <label><input type="radio" name="optradio">Libur dalam jumlah hari</label>
              </div>
                <label><input type="text" name="harilibur" id="hari_libur" size="1px" placeholder="0"> hari dalam satu periode penggajian</label>
              <div class="radio">
                <label><input type="radio" name="optradio">None. (Semua hari masuk)</label>
              </div>
          </div>
        </div>
        <div class="row">
          <div class="form-group col-xs-4">
            <label for="libur_nas">Libur Nasional</label>
            <label class="radio-inline"><input type="radio" name="libur_nas">Ya</label>
            <label class="radio-inline"><input type="radio" name="libur_nas">Tidak</label>
          </div>
        </div>
        <a data-toggle="collapse" data-parent="#accordion" href="#collapse1" class="btn btn-success"> Previous</a>
        <a data-toggle="collapse" data-parent="#accordion" href="#collapse3" class="btn btn-success"> Next</a>
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">
        Gaji & Pendapatan</a>
      </h4>
    </div>
    <div id="collapse3" class="panel-collapse collapse">
      <div class="panel-body">
        <table id="table-gaji">
          <tr class="tr_clone">
            <td>
              <select class="form-control input-sm" name="period" id="period">
                <option value="Gaji Pokok">Gaji Pokok</option>
                <option value="Aktivitas">Aktivitas</option>
                <option value="Makan">Makan</option>
                <option value="Tunjangan Harian">Tunjangan Harian</option>
                <option value="Tunjangan Tetap">Tunjangan Tetap</option>
                <option value="Service Charge">Service Charge Min</option>
              </select>
            </td>
            <td>&nbsp;&nbsp;
              <input type="text" name="harilibur" id="hari_libur" placeholder="0">&nbsp;&nbsp;
            </td>
            <td>
              <select class="form-control input-sm" name="period" id="period">
                <option value="0">None</option>
                <option value="Bulan">Bulan</option>
                <option value="Hari">Hari</option>
              </select>
            </td>
            <td>&nbsp;&nbsp;
              <span><a href="javascript:void(0);" class="tr_clone_add" title="Add field"><span>add</span></a> <a href="javascript:void(0);" class="tr_clone_remove" title="Remove field"><span style="color: #D63939;">remove</span></a> </span>
            </td>
          </tr>
        </table>
        <div class="row">
          <div class="form-group col-xs-2">
            <label for="bpjs_kes">BPJS Kesehatan(1%)</label>
            <input type="text" class="form-control" id="bpjs_kes" name="bpjs_kes">
          </div>
          <div class="form-group col-xs-2">
            <label for="bpjs_kt">BPJS Tenaga Kerja(2%)</label>
            <input type="text" class="form-control" id="bpjs_kt" name="bpjs_kt">
          </div>
		  <div class="form-group col-xs-3">
            <label for="idkes">ID BPJS Kesehatan</label>
            <input type="text" class="form-control" id="idkes" name="idkes">
          </div>
          <div class="form-group col-xs-3">
            <label for="idkt">ID BPJS Ketenaga Kerjaan</label>
            <input type="text" class="form-control" id="idkt" name="idkt">
          </div>
          <div class="form-group col-xs-2">
            <label for="k_pajak">Kelompok Pajak</label>
            <select class="form-control input-sm" name="k_pajak" id="k_pajak">
              <option value="TK">TK</option>
              <option value="K">K</option>
              <option value="K1">K1</option>
              <option value="K2">K2</option>
              <option value="K3">K3</option>
            </select>
          </div>
        </div>
        <div class="row">
          <div class="form-group col-xs-2">
            <label for="nmrekman">Rekening Mandiri</label>
            <input type="text" class="form-control" id="nmrekman" name="nmrekman">
          </div>
          <div class="form-group col-xs-3">
            <label for="rekman">Nomor Rekening</label>
            <input type="text" class="form-control" id="rekman" name="rekman">
          </div>
        </div>
        <!--<table id="table-rek">
          <tr><td><label for="rekening">Rekening</label></td></tr>
          <tr class="tr_rek">
            <td>
              <select class="form-control input-sm" name="rekening" id="rekening">
                <option value="Mandiri">Mandiri</option>
                <option value="BCA">BCA</option>
              </select>
            </td>
            <td>&nbsp;&nbsp;
              <input type="text" name="nmrek" id="nmrek" placeholder="Nama Pemilik">&nbsp;&nbsp;
            </td>
            <td>
              <input type="text" name="rek" id="rek" placeholder="Nomor Rekening">
            </td>
            <td>&nbsp;&nbsp;
              <span><a href="javascript:void(0);" class="tr_rek_add" title="Add field"><span>add</span></a> <a href="javascript:void(0);" class="tr_rek_remove" title="Remove field"><span style="color: #D63939;">remove</span></a> </span>
            </td>
          </tr>
        </table>-->
        <button class="btn btn-success">Simpan</button>&nbsp;<button class="btn btn-danger">Batal</button>
        </div>
      </div>
    </div>
  </div>
</div>
</form>
<script>
var table = $( '#table-gaji' )[0];

$( table ).delegate( '.tr_clone_add', 'click', function () {
    var thisRow = $( this ).closest( 'tr' )[0];
    $( thisRow ).clone().insertAfter( thisRow ).find( 'input:text' ).val( '' );
});
function CheckStatus(val){
 var element=document.getElementById('durhid');
 if(val=='Kontrak')
   element.style.display='block';
 else
   element.style.display='none';
}

</script>

