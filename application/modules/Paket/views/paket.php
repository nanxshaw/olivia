<div class="paper select-modif">
    <div class="col-md-8 col-lg-8 col-xs-12 col-sm-12">
        <div class="isi">
            <h3 class="font-bold">ORDER PAKET</h3>
            <div class="row">
                <div class="col-md-5 col-sm-6 resgrid">
                    <div class="form-group">
                        <select name="customer" id="customer" class="form-select input-modif">
                            <option value="">---Pilih Customer</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-5 col-sm-6 resgrid">
                    <div class="form-group">
                        <select name="customer" id="customer" class="form-select input-modif">
                            <option value="">Order Paket / Ambil Paket</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-2 col-sm-12 resgrid">
                    <button class="btn btn-radius bg-yellow w-100">PROSES</button>
                </div>
            </div>

            <div class="row">
                <div class="col-md-5 col-lg-5 col-sm-5 col-xs-5"><h4><label>Data Customer</label></h4></div>
                <div class="col-md-7 col-lg-7 col-sm-5 col-xs-5"><h4><a href="<?= base_url(); ?>paket">Order Paket</a> / <a href="<?= base_url(); ?>paket/ambil_paket">Ambil Paket</a></h4></div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="box-form">
                        <div class="row">
                            <div class="col-md-8 col-sm-12 resgrid2">
                                <pre><h4>Nama Customer      :</h4></pre>
                                <pre><h4>Jenis Layanan      :</h4></pre>
                                <pre><h4>Kode Transaksi     :</h4></pre>
                            </div>
                            <div class="col-md-4 col-sm-12 no-padding p-t-10 resgrid2">
                                <button class="btn btn-radius bg-sky m-r-10">PROFILE</button>
                                <button class="btn btn-radius bg-sky">REKAM MEDIS</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-12 m-t-20">
                    <div class="box-form">
                        <div class="row">
                            <div class="col-md-9">
                                <div class="form-group">
                                    <select name="paket" id="paket" class="form-select input-modif">
                                        <option value="">---Pilih Paket</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <button class="btn btn-radius bg-sky w-100">ADD</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-12 m-t-20">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Nama Paket</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td></td>
                                <td></td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="col-md-12">
                    <button class="btn btn-radius bg-yellow btn-large float-right m-b-65">SIMPAN</button>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <?=$this->load->view('template/right_menu')?>
    </div>
</div>

