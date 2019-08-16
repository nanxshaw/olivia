<div class="paper select-modif">
    <div class="col-md-8">
        <div class="isi">
            <h3 class="font-bold">TAMBAH CUSTOMER</h3>
            <div class="row">
                <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                    <div class="form-group">
                        <label class="f-size-10" for="k_customer">Kode Customer</label>
                        <input type="text" name="k_customer" id="k_customer" class="form-control input-modif" disabled>
                    </div>
                    <div class="form-group">
                        <label  class="f-size-10" for="ktp">No. KTP / SIM</label>
                        <input type="text" name="ktp" id="ktp" class="form-control input-modif">
                    </div>
                    <div class="form-group">
                        <label  class="f-size-10" for="tgl">Tanggal Lahir</label>
                        <input type="date" name="tgl" id="tgl" class="form-control input-modif">
                    </div>
                    <div class="form-group">
                        <label  class="f-size-10" for="pekerjaan">Pekerjaan</label>
                        <select name="pekerjaan" id="pekerjaan" class="form-select input-modif">
                            <option value="Mahasiswa">Mahasiswa</option>
                            <option value="Mahasiswa">Petani</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label  class="f-size-10" for="agama">Agama</label>
                        <select name="agama" id="agama" class="form-select input-modif">
                            <option value="islam">Islam</option>
                            <option value="hindu">Hindu</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label  class="f-size-10" for="k_customer">Kategori Customer</label>
                        <select name="agama" id="agama" class="form-select input-modif">
                            <option value="islam">Non Member</option>
                            <option value="hindu">Member</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label  class="f-size-10" for="afiliasi">Afiliasi</label>
                        <select class="input-modif form-select">
                            <option>Pilih Afiliasi</option>
                        </select>
                    </div>
                    <div class="float-right">
                        <button class="btn btn-bg bg-cancel">CANCEL</button>
                    </div>
                </div>

                <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                    <div class="form-group">
                        <label class="f-size-10" for="nm_customer">Nama Custmer</label>
                        <input type="text" name="nm_customer" id="nm_customer" class="form-control input-modif">
                    </div>
                    <div class="form-group">
                        <label  class="f-size-10" for="tmpt_lhr">Tempat Lahir</label>
                        <input type="text" name="tmpt_lhr" id="tmpt_lhr" class="form-control input-modif">
                    </div>
                    <div class="form-group">
                        <label  class="f-size-10" for="notelp">No Telephone</label>
                        <input type="text" name="notelp" id="notelp" class="form-control input-modif">
                    </div>
                    <div class="form-group">
                        <label  class="f-size-10" for="status_kw">Status Perkawinan</label>
                        <select name="status_kw" id="status_kw" class="form-select input-modif">
                            <option value="Mahasiswa">Belum Nikah</option>
                            <option value="Mahasiswa">Nikah</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label  class="f-size-10" for="jk">Jenis Kelamin</label>
                        <select name="jk" id="jk" class="form-select input-modif">
                            <option value="islam">Perempuan</option>
                            <option value="hindu">Laki - Laki</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label  class="f-size-10" for="s_customer">Status Customer</label>
                        <select name="agama" id="agama" class="form-select input-modif">
                            <option value="islam">Aktif</option>
                            <option value="hindu">Tidka Aktif</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label  class="f-size-10" for="alamt">Alamat</label>
                        <input type="text" name="alamt" id="alamt" class="form-control input-modif">
                    </div>
                    <div class="float-left">
                        <a href="<?=base_url('register')?>"><button class="btn btn-bg bg-simpan">SIMPAN</button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <?=$this->load->view('template/right_menu')?>
    </div>
</div>

