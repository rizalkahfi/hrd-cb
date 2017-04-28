<h2 id="judul">Data Pegawai / Karyawan (Data Pribadi)</h2><br/>
    <form>
	<div class="form-group col-sm-10">
		<div class="row">
			<div class="col-xs-12 col-sm-3 center">
				<span class="profile-picture">
					<img class="editable img-responsive" alt="Alex's Avatar" id="avatar2" src="assets/images/avatars/profile-pic.jpg" />
				</span>
				<div class="space space-4"></div>
			</div>
			<div class="col-xs-12 col-sm-9">
				<div class="profile-user-info">
					<div class="profile-info-row">
						<div class="profile-info-name">NIP </div>
						<div class="profile-info-value">
							<span><input type="text" id="noin" name="noin" value="9903383" readonly></span>
						</div>
						<div class="profile-info-name">Nama </div>
						<div class="profile-info-value">
							<span><input type="text" id="namakar" name="namakar" value="Muhamad Rizal Kahfi" readonly></span>
						</div>
					</div>
					<div class="profile-info-row">
						<div class="profile-info-name">Cabang Data </div>
						<div class="profile-info-value">
							<span><input type="text" id="cabang" name="cabang" value="Lebak Bulus(LWA)" readonly></span>
						</div>
						<div class="profile-info-name">Department </div>
						<div class="profile-info-value">
							<span><input type="text" id="dept" name="dept" value="IT/EDP" readonly></span>
						</div>
					</div>
					<div class="profile-info-row">
						<div class="profile-info-name">Status Karyawan </div>
						<div class="profile-info-value">
							<span><input type="text" id="status_kar" name="status_kar" value="Unknown" readonly></span>
						</div>
						<div class="profile-info-name">Mulai Bekerja </div>
						<div class="profile-info-value">
							<span><input type="text" id="tgl_masuk" name="tgl_masuk" value="06/04/2017" readonly></span>
						</div>
					</div>
					<div class="profile-info-row">
						<div class="profile-info-name">Jabatan </div>
						<div class="profile-info-value">
							<span><input type="text" id="jbtn" name="jbtn" value="Web Developer" readonly></span>
						</div>
					</div>
				</div>
				<div class="hr hr-8 dotted"></div>
			</div>
		</div>
        <table class="table-atas">
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
                    </select>
				</td>
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
                    </select>
				</td>
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
                    </select>
				</td>
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
                <td><select class="form-control input-sm" name="bawahan2" id="bawahan2">
                    <option value="1">Ya</option>
                    <option value="0">Tidak</option>
                    </select>
				</td>
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
                <td><select class="form-control input-sm form-hrd" name="atasan2" id="atasan2">
                    <option value="">Pilih Atasan</option>
                    <option value='Vitto Veroy'>Vitto Veroy</option>
                    </select>
				</td>
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
        <table class="table">
            <tr>
                <td>KTP</td>
                <td id ="attachment">
					<ul class="ace-thumbnails clearfix">
						<li>
							<a href="assets/images/fullscreen/ktp-full.jpg" data-rel="colorbox">
							<img width="140" height="100" alt="150x150" src="assets/images/fullscreen/ktp-full.jpg" />
							<div class="text">
								<div class="inner">Kartu Tanda Penduduk</div>
							</div>
							</a>

							<div class="tools tools-bottom">
								<a href="#">
									<i class="ace-icon fa fa-pencil"></i>
								</a>
								<a href="#">
									<i class="ace-icon fa fa-times red"></i>
								</a>
							</div>
						</li>
					</ul>
				</td>
                <td>NPWP</td>
                <td id ="attachment">
					<ul class="ace-thumbnails clearfix">
						<li>
							<a href="http://4.bp.blogspot.com/-A9EJF-8WSV4/UtQTZDiBSDI/AAAAAAAAALA/z7xopeTtgAM/s1600/npwp.jpg" data-rel="colorbox">
							<img width="140" height="100" alt="150x150" src="http://4.bp.blogspot.com/-A9EJF-8WSV4/UtQTZDiBSDI/AAAAAAAAALA/z7xopeTtgAM/s1600/npwp.jpg" />
							<div class="text">
								<div class="inner">Nomor Pokok Wajib Pajak</div>
							</div>
							</a>

							<div class="tools tools-bottom">
								<a href="#">
									<i class="ace-icon fa fa-pencil"></i>
								</a>
								<a href="#">
									<i class="ace-icon fa fa-times red"></i>
								</a>
							</div>
						</li>
					</ul>
				</td>
            </tr>
            <tr>
                <td>SIM</td>
                <td id ="attachment">
					<ul class="ace-thumbnails clearfix">
						<li>
							<a href="http://i794.photobucket.com/albums/yy223/sri_ningsih/sima.gif" data-rel="colorbox">
							<img width="140" height="100" alt="150x150" src="http://i794.photobucket.com/albums/yy223/sri_ningsih/sima.gif" />
							<div class="text">
								<div class="inner">Surat Izin Mengemudi</div>
							</div>
							</a>

							<div class="tools tools-bottom">
								<a href="#">
									<i class="ace-icon fa fa-pencil"></i>
								</a>
								<a href="#">
									<i class="ace-icon fa fa-times red"></i>
								</a>
							</div>
						</li>
					</ul>
				</td>
                <td>BPJSK</td>
                <td id ="attachment">
					<ul class="ace-thumbnails clearfix">
						<li>
							<a href="http://3.bp.blogspot.com/-ZzImzWbpvys/VbeZUzRu-lI/AAAAAAAAApI/nJc7lXppams/w1200-h630-p-k-no-nu/Perlukah-Menukarkan-e-ID-Bpjs-Dengan-Kartu-Bpjs-Kesehatan.JPG" data-rel="colorbox">
							<img width="140" height="100" alt="150x150" src="http://3.bp.blogspot.com/-ZzImzWbpvys/VbeZUzRu-lI/AAAAAAAAApI/nJc7lXppams/w1200-h630-p-k-no-nu/Perlukah-Menukarkan-e-ID-Bpjs-Dengan-Kartu-Bpjs-Kesehatan.JPG" />
							<div class="text">
								<div class="inner">BPJS Kesehatan</div>
							</div>
							</a>

							<div class="tools tools-bottom">
								<a href="#">
									<i class="ace-icon fa fa-pencil"></i>
								</a>
								<a href="#">
									<i class="ace-icon fa fa-times red"></i>
								</a>
							</div>
						</li>
					</ul>
				</td>
            </tr>
            <tr>
                <td>KK</td>
                <td id ="attachment">
					<ul class="ace-thumbnails clearfix">
						<li>
							<a href="http://3.bp.blogspot.com/-vEZuGYwBWqc/VkA4avQYhMI/AAAAAAAAAGg/-5dZ2L0rF04/s1600/Kartu-Keluarga.jpg" data-rel="colorbox">
							<img width="140" height="100" alt="150x150" src="http://3.bp.blogspot.com/-vEZuGYwBWqc/VkA4avQYhMI/AAAAAAAAAGg/-5dZ2L0rF04/s1600/Kartu-Keluarga.jpg" />
							<div class="text">
								<div class="inner">Kartu Keluarga</div>
							</div>
							</a>

							<div class="tools tools-bottom">
								<a href="#">
									<i class="ace-icon fa fa-pencil"></i>
								</a>
								<a href="#">
									<i class="ace-icon fa fa-times red"></i>
								</a>
							</div>
						</li>
					</ul>
				</td>
                <td>Photo</td>
                <td id ="attachment">
					<ul class="ace-thumbnails clearfix">
						<li>
							<a href="assets/images/avatars/profile-pic.jpg" data-rel="colorbox">
							<img width="140" height="100" alt="150x150" src="assets/images/avatars/profile-pic.jpg" />
							<div class="text">
								<div class="inner">User Photo</div>
							</div>
							</a>

							<div class="tools tools-bottom">
								<a href="#">
									<i class="ace-icon fa fa-pencil"></i>
								</a>
								<a href="#">
									<i class="ace-icon fa fa-times red"></i>
								</a>
							</div>
						</li>
					</ul>
				</td>
            </tr>
        </table>
        <button class="btn btn-sm btn-outline btn-success">Update</button>
    </form>
		</div>
<script type="text/javascript">
jQuery(function($) {
	var $overflow = '';
	var colorbox_params = {
		rel: 'colorbox',
		reposition:true,
		scalePhotos:true,
		scrolling:false,
		previous:'<i class="ace-icon fa fa-arrow-left"></i>',
		next:'<i class="ace-icon fa fa-arrow-right"></i>',
		close:'&times;',
		current:'{current} of {total}',
		maxWidth:'100%',
		maxHeight:'100%',
		onOpen:function(){
			$overflow = document.body.style.overflow;
			document.body.style.overflow = 'hidden';
		},
		onClosed:function(){
			document.body.style.overflow = $overflow;
		},
		onComplete:function(){
			$.colorbox.resize();
		}
	};

	$('.ace-thumbnails [data-rel="colorbox"]').colorbox(colorbox_params);
	$("#cboxLoadingGraphic").html("<i class='ace-icon fa fa-spinner orange fa-spin'></i>");//let's add a custom loading icon
	
	
	$(document).one('ajaxloadstart.page', function(e) {
		$('#colorbox, #cboxOverlay').remove();
   });
   //editables on first profile page
				$.fn.editable.defaults.mode = 'inline';
				$.fn.editableform.loading = "<div class='editableform-loading'><i class='ace-icon fa fa-spinner fa-spin fa-2x light-blue'></i></div>";
			    $.fn.editableform.buttons = '<button type="submit" class="btn btn-info editable-submit"><i class="ace-icon fa fa-check"></i></button>'+
			                                '<button type="button" class="btn editable-cancel"><i class="ace-icon fa fa-times"></i></button>';    
				
				//editables 
				
				//text editable
			    $('#username')
				.editable({
					type: 'text',
					name: 'username'		
			    });
			
			
				
				//select2 editable
				var countries = [];
			    $.each({ "CA": "Canada", "IN": "India", "NL": "Netherlands", "TR": "Turkey", "US": "United States"}, function(k, v) {
			        countries.push({id: k, text: v});
			    });
			
				var cities = [];
				cities["CA"] = [];
				$.each(["Toronto", "Ottawa", "Calgary", "Vancouver"] , function(k, v){
					cities["CA"].push({id: v, text: v});
				});
				cities["IN"] = [];
				$.each(["Delhi", "Mumbai", "Bangalore"] , function(k, v){
					cities["IN"].push({id: v, text: v});
				});
				cities["NL"] = [];
				$.each(["Amsterdam", "Rotterdam", "The Hague"] , function(k, v){
					cities["NL"].push({id: v, text: v});
				});
				cities["TR"] = [];
				$.each(["Ankara", "Istanbul", "Izmir"] , function(k, v){
					cities["TR"].push({id: v, text: v});
				});
				cities["US"] = [];
				$.each(["New York", "Miami", "Los Angeles", "Chicago", "Wysconsin"] , function(k, v){
					cities["US"].push({id: v, text: v});
				});
				
				var currentValue = "NL";
			    $('#country').editable({
					type: 'select2',
					value : 'NL',
					//onblur:'ignore',
			        source: countries,
					select2: {
						'width': 140
					},		
					success: function(response, newValue) {
						if(currentValue == newValue) return;
						currentValue = newValue;
						
						var new_source = (!newValue || newValue == "") ? [] : cities[newValue];
						
						//the destroy method is causing errors in x-editable v1.4.6+
						//it worked fine in v1.4.5
						/**			
						$('#city').editable('destroy').editable({
							type: 'select2',
							source: new_source
						}).editable('setValue', null);
						*/
						
						//so we remove it altogether and create a new element
						var city = $('#city').removeAttr('id').get(0);
						$(city).clone().attr('id', 'city').text('Select City').editable({
							type: 'select2',
							value : null,
							//onblur:'ignore',
							source: new_source,
							select2: {
								'width': 140
							}
						}).insertAfter(city);//insert it after previous instance
						$(city).remove();//remove previous instance
						
					}
			    });
			
				$('#city').editable({
					type: 'select2',
					value : 'Amsterdam',
					//onblur:'ignore',
			        source: cities[currentValue],
					select2: {
						'width': 140
					}
			    });
			
			
				
				//custom date editable
				$('#signup').editable({
					type: 'adate',
					date: {
						//datepicker plugin options
						    format: 'yyyy/mm/dd',
						viewformat: 'yyyy/mm/dd',
						 weekStart: 1
						 
						//,nativeUI: true//if true and browser support input[type=date], native browser control will be used
						//,format: 'yyyy-mm-dd',
						//viewformat: 'yyyy-mm-dd'
					}
				})
			
			    $('#age').editable({
			        type: 'spinner',
					name : 'age',
					spinner : {
						min : 16,
						max : 99,
						step: 1,
						on_sides: true
						//,nativeUI: true//if true and browser support input[type=number], native browser control will be used
					}
				});
				
			
			    $('#login').editable({
			        type: 'slider',
					name : 'login',
					
					slider : {
						 min : 1,
						  max: 50,
						width: 100
						//,nativeUI: true//if true and browser support input[type=range], native browser control will be used
					},
					success: function(response, newValue) {
						if(parseInt(newValue) == 1)
							$(this).html(newValue + " hour ago");
						else $(this).html(newValue + " hours ago");
					}
				});
			
				$('#about').editable({
					mode: 'inline',
			        type: 'wysiwyg',
					name : 'about',
			
					wysiwyg : {
						//css : {'max-width':'300px'}
					},
					success: function(response, newValue) {
					}
				});
				
				
				
				// *** editable avatar *** //
				try {//ie8 throws some harmless exceptions, so let's catch'em
			
					//first let's add a fake appendChild method for Image element for browsers that have a problem with this
					//because editable plugin calls appendChild, and it causes errors on IE at unpredicted points
					try {
						document.createElement('IMG').appendChild(document.createElement('B'));
					} catch(e) {
						Image.prototype.appendChild = function(el){}
					}
			
					var last_gritter
					$('#avatar').editable({
						type: 'image',
						name: 'avatar',
						value: null,
						//onblur: 'ignore',  //don't reset or hide editable onblur?!
						image: {
							//specify ace file input plugin's options here
							btn_choose: 'Change Avatar',
							droppable: true,
							maxSize: 110000,//~100Kb
			
							//and a few extra ones here
							name: 'avatar',//put the field name here as well, will be used inside the custom plugin
							on_error : function(error_type) {//on_error function will be called when the selected file has a problem
								if(last_gritter) $.gritter.remove(last_gritter);
								if(error_type == 1) {//file format error
									last_gritter = $.gritter.add({
										title: 'File is not an image!',
										text: 'Please choose a jpg|gif|png image!',
										class_name: 'gritter-error gritter-center'
									});
								} else if(error_type == 2) {//file size rror
									last_gritter = $.gritter.add({
										title: 'File too big!',
										text: 'Image size should not exceed 100Kb!',
										class_name: 'gritter-error gritter-center'
									});
								}
								else {//other error
								}
							},
							on_success : function() {
								$.gritter.removeAll();
							}
						},
					    url: function(params) {
							// ***UPDATE AVATAR HERE*** //
							//for a working upload example you can replace the contents of this function with 
							//examples/profile-avatar-update.js
			
							var deferred = new $.Deferred
			
							var value = $('#avatar').next().find('input[type=hidden]:eq(0)').val();
							if(!value || value.length == 0) {
								deferred.resolve();
								return deferred.promise();
							}
			
			
							//dummy upload
							setTimeout(function(){
								if("FileReader" in window) {
									//for browsers that have a thumbnail of selected image
									var thumb = $('#avatar').next().find('img').data('thumb');
									if(thumb) $('#avatar').get(0).src = thumb;
								}
								
								deferred.resolve({'status':'OK'});
			
								if(last_gritter) $.gritter.remove(last_gritter);
								last_gritter = $.gritter.add({
									title: 'Avatar Updated!',
									text: 'Uploading to server can be easily implemented. A working example is included with the template.',
									class_name: 'gritter-info gritter-center'
								});
								
							 } , parseInt(Math.random() * 800 + 800))
			
							return deferred.promise();
							
							// ***END OF UPDATE AVATAR HERE*** //
						},
						
						success: function(response, newValue) {
						}
					})
				}catch(e) {}
				
				/**
				//let's display edit mode by default?
				var blank_image = true;//somehow you determine if image is initially blank or not, or you just want to display file input at first
				if(blank_image) {
					$('#avatar').editable('show').on('hidden', function(e, reason) {
						if(reason == 'onblur') {
							$('#avatar').editable('show');
							return;
						}
						$('#avatar').off('hidden');
					})
				}
				*/
			
				//another option is using modals
				$('#avatar2').on('click', function(){
					var modal = 
					'<div class="modal fade">\
					  <div class="modal-dialog">\
					   <div class="modal-content">\
						<div class="modal-header">\
							<button type="button" class="close" data-dismiss="modal">&times;</button>\
							<h4 class="blue">Change Avatar</h4>\
						</div>\
						\
						<form class="no-margin">\
						 <div class="modal-body">\
							<div class="space-4"></div>\
							<div style="width:75%;margin-left:12%;"><input type="file" name="file-input" /></div>\
						 </div>\
						\
						 <div class="modal-footer center">\
							<button type="submit" class="btn btn-sm btn-success"><i class="ace-icon fa fa-check"></i> Submit</button>\
							<button type="button" class="btn btn-sm" data-dismiss="modal"><i class="ace-icon fa fa-times"></i> Cancel</button>\
						 </div>\
						</form>\
					  </div>\
					 </div>\
					</div>';
					
					
					var modal = $(modal);
					modal.modal("show").on("hidden", function(){
						modal.remove();
					});
			
					var working = false;
			
					var form = modal.find('form:eq(0)');
					var file = form.find('input[type=file]').eq(0);
					file.ace_file_input({
						style:'well',
						btn_choose:'Click to choose new avatar',
						btn_change:null,
						no_icon:'ace-icon fa fa-picture-o',
						thumbnail:'small',
						before_remove: function() {
							//don't remove/reset files while being uploaded
							return !working;
						},
						allowExt: ['jpg', 'jpeg', 'png', 'gif'],
						allowMime: ['image/jpg', 'image/jpeg', 'image/png', 'image/gif']
					});
			
					form.on('submit', function(){
						if(!file.data('ace_input_files')) return false;
						
						file.ace_file_input('disable');
						form.find('button').attr('disabled', 'disabled');
						form.find('.modal-body').append("<div class='center'><i class='ace-icon fa fa-spinner fa-spin bigger-150 orange'></i></div>");
						
						var deferred = new $.Deferred;
						working = true;
						deferred.done(function() {
							form.find('button').removeAttr('disabled');
							form.find('input[type=file]').ace_file_input('enable');
							form.find('.modal-body > :last-child').remove();
							
							modal.modal("hide");
			
							var thumb = file.next().find('img').data('thumb');
							if(thumb) $('#avatar2').get(0).src = thumb;
			
							working = false;
						});
						
						
						setTimeout(function(){
							deferred.resolve();
						} , parseInt(Math.random() * 800 + 800));
			
						return false;
					});
							
				});
			
				
			
				//////////////////////////////
				$('#profile-feed-1').ace_scroll({
					height: '250px',
					mouseWheelLock: true,
					alwaysVisible : true
				});
			
				$('a[ data-original-title]').tooltip();
			
				$('.easy-pie-chart.percentage').each(function(){
				var barColor = $(this).data('color') || '#555';
				var trackColor = '#E2E2E2';
				var size = parseInt($(this).data('size')) || 72;
				$(this).easyPieChart({
					barColor: barColor,
					trackColor: trackColor,
					scaleColor: false,
					lineCap: 'butt',
					lineWidth: parseInt(size/10),
					animate:false,
					size: size
				}).css('color', barColor);
				});
			  
				///////////////////////////////////////////
			
				//right & left position
				//show the user info on right or left depending on its position
				$('#user-profile-2 .memberdiv').on('mouseenter touchstart', function(){
					var $this = $(this);
					var $parent = $this.closest('.tab-pane');
			
					var off1 = $parent.offset();
					var w1 = $parent.width();
			
					var off2 = $this.offset();
					var w2 = $this.width();
			
					var place = 'left';
					if( parseInt(off2.left) < parseInt(off1.left) + parseInt(w1 / 2) ) place = 'right';
					
					$this.find('.popover').removeClass('right left').addClass(place);
				}).on('click', function(e) {
					e.preventDefault();
				});
			
			
				///////////////////////////////////////////
				$('#user-profile-3')
				.find('input[type=file]').ace_file_input({
					style:'well',
					btn_choose:'Change avatar',
					btn_change:null,
					no_icon:'ace-icon fa fa-picture-o',
					thumbnail:'large',
					droppable:true,
					
					allowExt: ['jpg', 'jpeg', 'png', 'gif'],
					allowMime: ['image/jpg', 'image/jpeg', 'image/png', 'image/gif']
				})
				.end().find('button[type=reset]').on(ace.click_event, function(){
					$('#user-profile-3 input[type=file]').ace_file_input('reset_input');
				})
				.end().find('.date-picker').datepicker().next().on(ace.click_event, function(){
					$(this).prev().focus();
				})
				$('.input-mask-phone').mask('(999) 999-9999');
			
				$('#user-profile-3').find('input[type=file]').ace_file_input('show_file_list', [{type: 'image', name: $('#avatar').attr('src')}]);
			
			
				////////////////////
				//change profile
				$('[data-toggle="buttons"] .btn').on('click', function(e){
					var target = $(this).find('input[type=radio]');
					var which = parseInt(target.val());
					$('.user-profile').parent().addClass('hide');
					$('#user-profile-'+which).parent().removeClass('hide');
				});
				
				
				
				/////////////////////////////////////
				$(document).one('ajaxloadstart.page', function(e) {
					//in ajax mode, remove remaining elements before leaving page
					try {
						$('.editable').editable('destroy');
					} catch(e) {}
					$('[class*=select2]').remove();
				});
})
				
</script>

								  