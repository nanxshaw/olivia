<div class="paper">
    <div class="col-md-8">
        <div class="isi">
            <h3 class="font-bold">SERVICE REGISTER</h3>
            <div class="row">
                <div class="col-md-5 col-sm-6 resgrid">
                    <div class="form-group">
                        <select name="customer" id="customer" class="form-select input-modif">
                            <option value="">--- Pilih Customer</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-5 col-sm-6 resgrid">
                    <div class="form-group">
                        <select name="layanan" id="layanan" class="form-select input-modif">
                            <option value=""> -- Pilih Layanan -- </option>
                            <option value="1"> / Treatment </option>
                            <option value="2"> / Periksa </option>
                            <option value="3"> / Konsultasi </option>
                        </select>
                    </div>
                </div>
                <div class="col-md-2 col-sm-12 resgrid">
                    <button id="proses" class="btn btn-radius bg-yellow w-100">PROSES</button>
                    <button id="cancel" class="btn btn-radius-del bg-red w-100">CANCEL</button>
                </div>
            </div>

            <div class="row">
                <div class="col-md-5 col-lg-5"><h4><label>Data Customer</label></h4></div>
                <div class="col-md-7 col-lg-7"><h4><a id="layanan_1" href="#" >Treatment</a> / <a id="layanan_2" href="#" >Periksa</a> / <a id="layanan_3" href="#" >Konsultasi</a></h4></div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="box-form">
                        <div class="row">
                            <div class="col-md-8 col-sm-12 resgrid2">
                                <pre><h4>Nama Customer      :</h4></pre>
                                <pre><h4>Jenis Layanan      :</h4></pre>
                                <pre><h4>No HP              :</h4></pre>
                            </div>
                            <div class="col-md-4 col-sm-12 no-padding p-t-10 resgrid2">
                                <a href="<?=base_url('register/profile')?>" style="padding-top:11px;" class="btn btn-radius bg-sky m-r-10">PROFILE</a>
                                <a href="<?=base_url('register/medis')?>" style="padding-top:11px;" class="btn btn-radius bg-sky">REKAM MEDIS</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="treatment" class="col-md-12 m-t-20">
                    <div class="box-form">
                        <div class="row">
                            <div class="col-md-9">
                                <div class="form-group">
                                    <select name="paket" id="paket" class="form-select input-modif">
                                        <option value="">--- Pilih Perawatan</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <button class="btn btn-radius bg-sky w-100">ADD</button>
                            </div>
                        </div>
                    </div>
                </div>

                
                <div id="periksa" class="col-md-12 m-t-20">
                    <div class="box-form">
                        <div class="row">
                            <div class="col-md-5">
                                <div class="form-group">
                                    <select name="dokter" id="dokter" class="form-select input-modif">
                                        <option value="">--- Pilih Dokter</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <select name="cus-layanan" id="cus-layanan" class="form-select input-modif">
                                        <option value="">--- Pilih Layanan</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <button class="btn btn-radius bg-sky w-100">ADD</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="konsultasi" class="col-md-12 m-t-20">
                    <div class="box-form">
                        <div class="row">
                            <div class="col-md-9">
                                <div class="form-group">
                                    <select name="dokter" id="dokter" class="form-select input-modif">
                                        <option value="">--- Pilih Dokter</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <button class="btn btn-radius bg-sky w-100">ADD</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="treatment-2" class="col-md-12 m-t-20">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Nama Perawatan</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Olive Diamond Peel Treatment</td>
                                <td><button class="icon-btn"><img src="<?php echo base_url(); ?>assets/images/delete white.png" width="30px" height="30px" /></button></td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div id="periksa-2" class="col-md-12 m-t-20">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Nama Dokter</th>
                                <th>Nama Layanan</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Dokter Coyke</td>
                                <td>Periksa</td>
                                <td><button class="icon-btn"><img src="<?php echo base_url(); ?>assets/images/delete white.png" width="30px" height="30px" /></button></td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div id="konsultasi-2" class="col-md-12 m-t-20">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Nama Dokter</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>dr. Coyke</td>
                                <td><button class="icon-btn"><img src="<?php echo base_url(); ?>assets/images/delete white.png" width="30px" height="30px" /></button></td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="col-md-12">
                    <button class="btn btn-radius bg-yellow btn-large float-right">SIMPAN</button>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <?=$this->load->view('template/right_menu')?>
    </div>
</div>

