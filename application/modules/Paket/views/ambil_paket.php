<div class="paper select-modif">
    <div class="col-md-8">
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
                <div class="col-md-5 col-lg-5"><h4><label>Data Customer</label></h4></div>
                <div class="col-md-7 col-lg-7 col-sm-5 col-xs-5"><h4><a href="<?= base_url(); ?>paket">Order Paket</a> / <a href="<?= base_url(); ?>paket/ambil_paket">Ambil Paket</a></h4></div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="box-form">
                        <div class="row">
                            <div class="col-md-8 col-sm-12 resgrid2">
                                <pre><h4>Nama Customer      :</h4></pre>
                                <pre><h4>Jenis Layanan      :</h4></pre>
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
                                        <option value="">---Pilih Kode Transaksi</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <button class="btn btn-radius bg-yellow w-100">LOCK</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-12 m-t-20">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Tanggal</th>
                                <th>Item Paket</th>
                                <th>QTY Total</th>
                                <th>QTY Terambil</th>
                                <th>QTY Sisa</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="col-md-12 text-center m-b-65 m-t-35">
                    <button class="btn btn-radius btn-danger btn-large m-r-10">SELESAI</button>
                    <button class="btn btn-radius bg-yellow btn-large" data-toggle="modal" data-target="#exampleModal">AMBIL PAKET</button>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <?=$this->load->view('template/right_menu')?>
    </div>
</div>

<!-- Modal -->
<div class="modal fade select-modif" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
          <img src="<?=base_url('assets/images/cosmetic white.png')?>" class="gambar">
          <h4 class="modal-title fint-bold text-white m-t-5" id="exampleModalLabel">AMBIL PAKET</h4>
      </div>
      <div class="modal-body text-center">
            <div class="form-group">
                <select name="paket" id="paket" class="form-select input-modif">
                    <option value="">---Pilih Item Item</option>
                </select>
            </div>

            <button class="btn btn-radius bg-yellow btn-large m-t-35" data-toggle="modal" data-target="#confirm">AMBIL PAKET</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="confirm" tabindex="-1" role="dialog" aria-labelledby="confirm" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
          <img src="<?=base_url('assets/images/cosmetic white.png')?>" class="gambar">
          <h4 class="modal-title fint-bold text-white m-t-5">KONFIRMASI</h4>
      </div>
      <div class="modal-body text-center">
            <h4 align="left"><label> Anda akan mengambil item paket OLIVE CELL THERAPY</label></h4>
            <h4 align="left"><label> Apakah anda yakin ?</label></h3>
            <button class="btn btn-radius btn-danger btn-large m-t-35" data-toggle="modal" data-target="#exampleModal">TIDAK</button>
            <button class="btn btn-radius bg-yellow btn-large m-t-35" data-toggle="modal" data-target="#exampleModal">YA</button>
      </div>
    </div>
  </div>
</div>
