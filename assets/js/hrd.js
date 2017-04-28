$(".delete").on('click', function() {
	$('.case:checkbox:checked').parents("tr").remove();
    $('.check_all').prop("checked", false);
	check();

});
var a=2;
$(".addmore").on('click',function(){
	count=$('table tr').length;
    var data="<tr><td><div class='col-sm-12'><input type='text' id='sekolah"+a+"' name='sekolah[]' class='form-control input-sm'></div></td>";
    data +="<td><div class='col-sm-12'><input type='text' id='kota"+a+"' name='kota[]' class='form-control input-sm'></div></td>";
    data +="<td><div class='col-sm-8'><input type='text' id='tahun"+a+"' name='tahun[]' class='form-control input-sm'></div></td>";
    data +="<td><div class='row'><div class='col-sm-2'><input type='text' id='attach_sekolah"+a+"' name='attach_sekolah[]' class='form-control input-sm'></div><div class='col-sm-10'><button class='btn btn-outline btn-primary btn-sm'>Browse</button>&nbsp;<button class='btn btn-outline btn-primary btn-sm'>Attach</button>&nbsp;<button class='btn btn-outline btn-primary btn-sm'>Clear</button></div></div></td></tr>";
	$('.table_pendidikan').append(data);
	i++;
});
var b=2;
$(".add_pengalaman").on('click',function(){
	count=$('table tr').length;
    var data="<tr><td><div class='col-sm-12'><input type='text' id='perusahaan"+b+"' name='perusahaan[]' class='form-control input-sm'></div></td>";
    data +="<td><div class='col-sm-12'><input type='text' id='durasi_kerja"+b+"' name='durasi_kerja[]' class='form-control input-sm'></div></td>";
    data +="<td><div class='col-sm-12'><input type='text' id='jabatan"+b+"' name='jabatan[]' class='form-control input-sm'></div></td>";
    data +="<td><div class='col-sm-12'><input type='text' id='alasan"+b+"' name='alasan[]' class='form-control input-sm'></div></td>";
    data +="<td><div class='row'><div class='col-sm-2'><input type='text' id='attach_per"+b+"' name='attach_per[]' class='form-control input-sm'></div><div class='col-sm-10'><button class='btn btn-outline btn-primary btn-sm'>Browse</button>&nbsp;<button class='btn btn-outline btn-primary btn-sm'>Attach</button>&nbsp;<button class='btn btn-outline btn-primary btn-sm'>Clear</button></div></div></td></tr>";
	$('.table_pengalaman').append(data);
	i++;
});
var c=2;
$(".add_uji").on('click',function(){
	count=$('table tr').length;
    var data="<tr><td><div class='col-sm-12'><input type='text' id='department"+c+"' name='department[]' class='form-control input-sm'></div></td>";
    data +="<td><div class='col-sm-12'><input type='text' id='user_uji"+c+"' name='user_uji[]' class='form-control input-sm'></div></td>";
    data +="<td><div class='col-sm-12'><input type='text' id='keterangan_uji"+c+"' name='keterangan_uji[]' class='form-control input-sm'></div></td>";
    data +="<td><div class='row'><div class='col-sm-2'><input type='text' id='attach_uji"+c+"' name='attach_uji[]' class='form-control input-sm'></div><div class='col-sm-10'><button class='btn btn-outline btn-primary btn-sm'>Browse</button>&nbsp;<button class='btn btn-outline btn-primary btn-sm'>Attach</button>&nbsp;<button class='btn btn-outline btn-primary btn-sm'>Clear</button></div></div></td></tr>";
	$('.table_uji').append(data);
	i++;
});
var d=2;
$(".add_nilai").on('click',function(){
	count=$('table tr').length;
    var data="<tr><td><div class='col-sm-12'><input type='text' id='user_rev"+d+"' name='user_rev[]' class='form-control input-sm'></div></td>";
    data +="<td><div class='col-sm-12'><input type='text' id='keterangan_rev"+d+"' name='keterangan_rev[]' class='form-control input-sm'></div></td>";
    data +="<td><div class='row'><div class='col-sm-2'><input type='text' id='attach_rev"+d+"' name='attach_rev[]' class='form-control input-sm'></div><div class='col-sm-10'><button class='btn btn-outline btn-primary btn-sm'>Browse</button>&nbsp;<button class='btn btn-outline btn-primary btn-sm'>Attach</button>&nbsp;<button class='btn btn-outline btn-primary btn-sm'>Clear</button></div></div></td></tr>";
	$('.table_penilaian').append(data);
	i++;
});
var e=2;
$(".add_train").on('click',function(){
	count=$('table tr').length;
    var data="<tr><td><div class='col-sm-12'><input type='date' id='tgl_train"+e+"' name='tgl_train[]' class='form-control input-sm'></div></td>";
    data +="<td><div class='col-sm-12'><input type='time' id='jam_train"+e+"' name='jam_train[]' class='form-control input-sm'></div></td>";
    data +="<td><div class='col-sm-12'><input type='text' id='department_train"+e+"' name='department_train[]' class='form-control input-sm'></div></td>";
    data +="<td><div class='col-sm-12'><input type='text' id='user_train"+e+"' name='user_train[]' class='form-control input-sm'></div></td>";
    data +="<td><div class='row'><div class='col-sm-2'><input type='text' id='attach_train"+e+"' name='attach_train[]' class='form-control input-sm'></div><div class='col-sm-10'><button class='btn btn-outline btn-primary btn-sm'>Browse</button>&nbsp;<button class='btn btn-outline btn-primary btn-sm'>Attach</button>&nbsp;<button class='btn btn-outline btn-primary btn-sm'>Clear</button></div></div></td></tr>";
	$('.table_training').append(data);
	i++;
});
