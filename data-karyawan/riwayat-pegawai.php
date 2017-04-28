
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs">
                                <li class="active"><a href="#pribadi-data" data-toggle="tab">Data Pribadi</a>
                                </li>
                                <li><a href="#pendidikan" data-toggle="tab">Pendidikan</a>
                                </li>
                                <li><a href="#pengalaman" data-toggle="tab">Pengalaman</a>
                                </li>
                                <li><a href="#ujian" data-toggle="tab">Ujian</a>
                                </li>
                                <li><a href="#penilaian" data-toggle="tab">Penilaian</a>
                                </li>
                                <li><a href="#training" data-toggle="tab">Training</a>
                                </li>
                                <li><a href="#interview" data-toggle="tab">Interview</a>
                                </li>
                                <li><a href="#pujian" data-toggle="tab">Pujian</a>
                                </li>
                                <li><a href="#pemecatan" data-toggle="tab">Pemecatan</a>
                                </li>
                            </ul>

                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div class="tab-pane fade in active" id="pribadi-data">
                                    <h2 id="judul">Data Pegawai / Karyawan (Data Pribadi)</h2><br/>
                                  <form>
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
                                      <td><select class="form-control input-sm" name="bawahan2" id="bawahan2">
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
                                      <td><select class="form-control input-sm form-hrd" name="atasan2" id="atasan2">
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
                                      <td><input type="file" class="form-control input-sm form-hrd choose-file" id="ktp" name="ktp"></td>
                                      <td>NPWP</td>
                                      <td><input type="file" class="form-control input-sm form-hrd choose-file" id="npwp" name="npwp"></td>
                                    </tr>
                                    <tr>
                                      <td>SIM</td>
                                      <td><input type="file" class="form-control input-sm form-hrd choose-file"id="sim" name="sim"></td>
                                      <td>BPJSK</td>
                                      <td><input type="file" class="form-control input-sm form-hrd choose-file" id="bpjsk" name="bpjsk"></td>
                                    </tr>
                                    <tr>
                                      <td>KK</td>
                                      <td><input type="file" class="form-control input-sm form-hrd choose-file" id="kk" name="kk"></td>
                                      <td>Photo</td>
                                      <td><input type="file" class="form-control input-sm form-hrd choose-file" id="user_photo" name="user_photo"></td>
                                     </tr>
                                  </table>
                                  <button class="btn btn-sm btn-outline btn-success">Update</button>
                                  </form>
                                </div>
                                <div class="tab-pane fade" id="pendidikan">
                                    <h2 id="judul">Data Pegawai / Karyawan (Pendidikan)</h2>
                                    <table class="table table_pendidikan">
                                        <tr>
                                           <th><div class="col-sm-12">Sekolah/Fakultas</div></th>
                                            <th><div class="col-sm-12">Kota</div></th>
                                            <th><div class="col-sm-12">Tahun</div></th>
                                            <th>Attach Document</th>
                                        </tr>
                                        <tr>
                                            <td><div class="col-sm-12"><input type="text" id="sekolah" name="sekolah[]" class="form-control input-sm"></div></td>
                                            <td><div class="col-sm-12"><input type="text" id="kota" name="kota[]" class="form-control input-sm"></div></td>
                                            <td><div class="col-sm-8"><input type="text" id="tahun" name="tahun[]" class="form-control input-sm"></div></td>
                                            <td><div class="col-sm-12"><input type="file" name="attach_pen" class="form-control input-sm choose-file"></div>
                                            </td>
                                        </tr>
                                    </table>
                                    <div class="row">
                                        <div class="col-sm-12">
                                          <button type="button" class="delete btn btn-xs btn-danger"><i class="fa fa-minus"></i></button>
                                          <button type="button" class="addmore btn btn-xs btn-primary"><i class="fa fa-plus-square"></i></button>
                                        </div>
                                    </div><br/>
                                    <div class="row">
                                      <div class="col-sm-12">
                                        <button class="btn btn-outline btn-success btn-sm">Simpan</button>
                                        <button class="btn btn-outline btn-danger btn-sm">Batal</button>
                                      </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="pengalaman">
                                    <h2 id="judul">Data Pegawai / Karyawan (Pengalaman Bekerja)</h2>
                                    <table class="table table_pengalaman">
                                        <tr>
                                            <th><div class="col-sm-12">Perusahaan</div></th>
                                            <th><div class="col-sm-12">Masa Kerja</div></th>
                                            <th><div class="col-sm-12">Jabatan Terakhir</div></th>
                                            <th><div class="col-sm-12">Alasan Berhenti</div></th>
                                            <th>Attach Document</th>
                                        </tr>
                                        <tr>
                                            <td><div class="col-sm-12"><input type="text" id="perusahaan" name="perusahaan[]" class="form-control input-sm"></div></td>
                                            <td><div class="col-sm-12"><input type="text" id="durasi_kerja" name="durasi_kerja[]" class="form-control input-sm"></div></td>
                                            <td><div class="col-sm-12"><input type="text" id="jabatan" name="jabatan[]" class="form-control input-sm"></div></td>
                                            <td><div class="col-sm-12"><input type="text" id="alasan" name="alasan[]" class="form-control input-sm"></div></td>
                                            <td><div class="col-sm-12"><input type="file" name="attach_kar" class="form-control input-sm choose-file"></div>
                                            </td>
                                        </tr>
                                    </table><br/>
                                    <div class="row">
                                        <div class="col-sm-12">
                                          <button type="button" class="del_pengalaman btn btn-xs btn-danger"><i class="fa fa-minus"></i></button>
                                          <button type="button" class="add_pengalaman btn btn-xs btn-primary"><i class="fa fa-plus-square"></i></button>
                                        </div>
                                    </div><br/>
                                    <div class="row">
                                      <div class="col-sm-12">
                                        <button class="btn btn-outline btn-success btn-sm">Simpan</button>
                                        <button class="btn btn-outline btn-danger btn-sm">Batal</button>
                                      </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="ujian">
                                    <h2 id="judul">Data Pegawai / Karyawan (Ujian & Sertifikasi)</h2>
                                    <table class="table table_uji" id="table_uji">
                                        <tr>
                                            <th><div class="col-sm-12">Department</div></th>
                                            <th><div class="col-sm-12">Oleh</div></th>
                                            <th><div class="col-sm-12">Keterangan</div></th>
                                            <th>Attach Document</th>
                                        </tr>
                                        <tr>
                                            <td><div class="col-sm-12"><input type="text" id="department" name="department[]" class="form-control input-sm"></div></td>
                                            <td><div class="col-sm-12"><input type="text" id="user_uji" name="user_uji[]" class="form-control input-sm"></div></td>
                                            <td><div class="col-sm-12"><input type="text" id="keterangan_uji" name="keterangan_uji[]" class="form-control input-sm"></div></td>
                                            <td><div class="col-sm-12"><input type="file" name="attach_uji" class="form-control input-sm choose-file"></div>
                                            </td>
                                        </tr>
                                    </table><br/>
                                    <div class="row">
                                        <div class="col-sm-12">
                                          <button type="button" class="del_uji btn btn-xs btn-danger"><i class="fa fa-minus"></i></button>
                                          <button type="button" class="add_uji btn btn-xs btn-primary"><i class="fa fa-plus-square"></i></button>
                                        </div>
                                    </div><br/>
                                    <div class="row">
                                      <div class="col-sm-12">
                                        <button class="btn btn-outline btn-success btn-sm">Simpan</button>
                                        <button class="btn btn-outline btn-danger btn-sm">Batal</button>
                                      </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="penilaian">
                                    <h2 id="judul">Data Pegawai / Karyawan (Penilaian)</h2>
                                    <table class="table table_penilaian">
                                        <tr>
                                            <th><div class="col-sm-12">Di-Review Oleh</div></th>
                                            <th><div class="col-sm-12">Keterangan</div></th>
                                            <th>Attach Document</th>
                                        </tr>
                                        <tr>
                                            <td><div class="col-sm-12"><input type="text" id="user_rev" name="user_rev[]" class="form-control input-sm"></div></td>
                                            <td><div class="col-sm-12"><input type="text" id="keterangan_rev" name="keterangan_rev[]" class="form-control input-sm"></div></td>
                                            <td><div class="col-sm-12"><input type="file" name="attach_rev" class="form-control input-sm choose-file"></div>
                                            </td>
                                    </table><br/>
                                    <div class="row">
                                        <div class="col-sm-12">
                                          <button type="button" class="del_nilai btn btn-xs btn-danger"><i class="fa fa-minus"></i></button>
                                          <button type="button" class="add_nilai btn btn-xs btn-primary"><i class="fa fa-plus-square"></i></button>
                                        </div>
                                    </div><br/>
                                    <div class="row">
                                      <div class="col-sm-12">
                                        <button class="btn btn-outline btn-success btn-sm">Simpan</button>
                                        <button class="btn btn-outline btn-danger btn-sm">Batal</button>
                                      </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="training">
                                    <h2 id="judul">Data Pegawai / Karyawan (Training)</h2>
                                    <table class="table table_training">
                                        <tr>
                                            <th><div class="col-sm-12">Tanggal</th>
                                            <th><div class="col-sm-12">Jam</th>
                                            <th><div class="col-sm-12">Department</th>
                                            <th><div class="col-sm-12">Oleh</th>
                                            <th>Attach Document</th>
                                        </tr>
                                        <tr>
                                            <td><div class="col-sm-12"><input type="date" id="tgl_train" name="tgl_train[]" class="form-control input-sm"></div></td>
                                            <td><div class="col-sm-12"><input type="time" id="jam_train" name="jam_train[]" class="form-control input-sm"></div></td>
                                            <td><div class="col-sm-12"><input type="text" id="department_train" name="department_train[]" class="form-control input-sm"></div></td>
                                            <td><div class="col-sm-12"><input type="text" id="user_train" name="user_train[]" class="form-control input-sm"></div></td>
                                            <td><div class="col-sm-12"><input type="file" name="attach_train" class="form-control input-sm choose-file"></div></td>
                                        </tr>
                                    </table><br/>
                                    <div class="row">
                                        <div class="col-sm-12">
                                          <button type="button" class="del_train btn btn-xs btn-danger"><i class="fa fa-minus"></i></button>
                                          <button type="button" class="add_train btn btn-xs btn-primary"><i class="fa fa-plus-square"></i></button>
                                        </div>
                                    </div><br/>
                                    <div class="row">
                                      <div class="col-sm-12">
                                        <button class="btn btn-outline btn-success btn-sm">Simpan</button>
                                        <button class="btn btn-outline btn-danger btn-sm">Batal</button>
                                      </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="interview">
                                    <h2 id="judul">Data Pegawai / Karyawan (Interview)</h2>
                                    <div class="row">
                                        <div class="form-group col-xs-2">
                                            <label for="tgl_int">Tanggal</label>
                                            <input type="date" class="form-control input-sm" id="tgl_int" name="tgl_int">
                                        </div>
                                        <div class="form-group col-xs-1">
                                            <label for="bg_test">Test BG</label>
                                            <input type="text" class="form-control input-sm" id="bg_test" name="bg_test">
                                        </div>
                                        <div class="form-group col-xs-2">
                                            <label for="user_uji1">Penguji 1</label>
                                            <input type="text" class="form-control input-sm" id="user_uji1" name="user_uji1">
                                        </div>
                                        <div class="form-group col-xs-2">
                                            <label for="user_uji2">Penguji 2</label>
                                            <input type="text" class="form-control input-sm" id="user_uji2" name="user_uji2">
                                        </div>
                                        <div class="form-group col-xs-1">
                                            <label for="iq_test">IQ</label>
                                            <input type="text" class="form-control input-sm" id="iq_test" name="iq_test">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-xs-2">
                                            <label for="user_int">Interviewer</label>
                                            <input type="text" class="form-control input-sm" id="user_int" name="user_int">
                                        </div><br/>
                                        <div class="form-group col-xs-7">
                                            <label class="checkbox-inline"><input type="checkbox" value="English" name="softskill">English</label>
                                            <label class="checkbox-inline"><input type="checkbox" value="Good Attitude" name="softskill">Good Attitude</label>
                                            <label class="checkbox-inline"><input type="checkbox" value="Confidence" name="softskill">Confidence</label>
                                            <label class="checkbox-inline"><input type="checkbox" value="Eye Contact" name="softskill">Eye Contact</label>
                                            <label class="checkbox-inline"><input type="checkbox" value="Experienced" name="softskill">Experienced</label>
                                            <label class="checkbox-inline"><input type="checkbox" value="To The Point" name="softskill">To The Point</label>
                                            <label class="checkbox-inline"><input type="checkbox" value="Skills" name="softskill">Skills</label>
                                            <input type="text" name="skill_tambah" class="form-control input-sm">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-xs-6">
                                            <label for="komentar">Komentar</label>
                                            <input type="text" name="komentar" class="form-control input-sm">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-xs-6">
                                            <label for="proses">Proses Lanjutan</label>
                                            <input type="text" name="proses" class="form-control input-sm">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-xs-4">
                                            <label for="attach_int">Attachment Document</label>
											<input type="file" name="attach_int" class="form-control input-sm choose-file">
                                        </div>
                                    </div>
                                    <div class="row">
                                      <div class="col-sm-12">
                                        <button class="btn btn-outline btn-success btn-sm">Simpan</button>
                                        <button class="btn btn-outline btn-danger btn-sm">Batal</button>
                                      </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="pujian">
                                    <h2 id="judul">Data Pegawai / Karyawan (Pujian & Penghargaan)</h2>
                                    <div class="row">
                                        <div class="form-group col-xs-2">
                                            <label for="tgl_pujian">Tanggal</label>
                                            <input type="date" class="form-control input-sm" id="tgl_pujian" name="tgl_pujian">
                                        </div>
                                        <div class="form-group col-xs-4">
                                            <label for="user_pujian">Dikeluarkan Oleh</label>
                                            <input type="text" class="form-control input-sm" id="user_pujian" name="user_pujian">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-xs-6">
                                            <label for="alasan_pujian">Alasan Dikeluarkan</label>
                                            <input type="text" class="form-control input-sm" id="alasan_pujian" name="alasan_pujian">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-xs-6">
                                            <label for="ket_pujian">Keterangan</label>
                                            <input type="text" class="form-control input-sm" id="ket_pujian" name="ket_pujian">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-xs-4">
                                            <label for="attach_pujian">Attachment Document</label>
                                            <input type="file" name="attach_pujian" class="form-control input-sm choose-file">
                                        </div>
                                    </div>
                                    <div class="row">
                                      <div class="col-sm-12">
                                        <button class="btn btn-outline btn-success btn-sm">Simpan</button>
                                        <button class="btn btn-outline btn-danger btn-sm">Batal</button>
                                      </div>
                                    </div><br/>
                                    <table class="table">
                                        <tr>
                                            <th>No.</th>
                                            <th>Tanggal</th>
                                            <th>Oleh</th>
                                            <th>Alasan</th>
                                            <th>Keterangan</th>
                                            <th>Attach</th>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                    </table>
                                </div>
                                <div class="tab-pane fade" id="pemecatan">
                                    <h2 id="judul">Data Pegawai / Karyawan (Pengunduran diri & Pemecatan)</h2>
                                    <div class="row">
                                        <div class="form-group col-xs-2">
                                            <label for="tgl_undur">Tanggal</label>
                                            <input type="date" class="form-control input-sm" id="tgl_undur" name="tgl_undur">
                                        </div>
                                        <div class="form-group col-xs-4">
                                            <label for="user_undur">Dikeluarkan Oleh</label>
                                            <input type="text" class="form-control input-sm" id="user_undur" name="user_undur">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-xs-6">
                                            <label for="alasan_undur">Alasan</label>
                                            <input type="text" class="form-control input-sm" id="alasan_undur" name="alasan_undur">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-xs-6">
                                            <label for="ket_undur">Keterangan</label>
                                            <input type="text" class="form-control input-sm" id="ket_undur" name="ket_undur">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-xs-4">
                                            <label for="attach_undur">Attachment Document</label>
                                            <input type="file" name="attach_undur" class="form-control input-sm choose-file">
                                        </div>
                                    </div>
                                    <div class="row">
                                      <div class="col-sm-12">
                                        <button class="btn btn-outline btn-success btn-sm">Simpan</button>
                                        <button class="btn btn-outline btn-danger btn-sm">Batal</button>
                                      </div>
                                    </div>
                                </div>
                            </div>
                        </div>
<script src="assets/js/hrd.js"></script>
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
							<h4 class="blue">Change User Photor</h4>\
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
						btn_choose:'Click to choose new user photo',
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
