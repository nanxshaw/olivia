<div class="paper">
    <div class="col-md-8">
        <div class="isi">
            <h3 class="font-bold">DATA LAYANAN</h3>

            <div class="row">
                <div class="col-md-12 m-t-20">
                    <div class="col-md-4"><div class="segment-header">PERIKSA</div></div>
                    <div class="col-md-4"><div class="segment-header">KONSULTASI</div></div>
                    <div class="col-md-4"><div class="segment-header-select">TREATMENT</div></div>
                </div>
                <div class="col-md-12 m-t-20">
                    <div class="box-form">
                        <div class="row">
                            <div class="col-md-12 no-padding" style="padding-bottom:20px;">
                                <input type="text" placeholder="Kode , Nama Customer" class="form-select input-modif" />
                            </div>
                            <div class="col-md-5 no-padding" style="padding-right:10px;">
                                <div class="form-group">
                                    <input type="text" placeholder="Tanggal Awal" class="form-select input-modif" />
                                </div>
                            </div>
                            <div class="col-md-5 no-padding" style="padding-right:10px;">
                                <div class="form-group">
                                    <input type="text" placeholder="Tanggal Akhir" class="form-select input-modif" />
                                </div>
                            </div>
                            <div class="col-md-2 no-padding">
                                <button class="btn btn-radius bg-sky w-100">CARI</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row" style="margin-left:1px;">
                    <div class="col-md-5 col-lg-5"><h4><label>Data Layanan Treatment</label></h4></div>
                </div>

                <div class="col-md-12 m-t-20">
                    <table id="table_id" class="display">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Kode Transaksi</th>
                                <th>Tanggal transaksi</th>
                                <th>Nama Customer</th>
                                <th>Nama Layanan</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>LYN_190806100359</td>
                                <td>06 Agustus 2019</td>
                                <td>Lala (Staf)</td>
                                <td>Treatment</td>
                                <td>
                                    <div class="btn-group btn-group-toggle">
                                        <a href="<?= base_url('layanan/detail_paket') ?>" class="btn btn-success"><span class="glyphicon glyphicon-search"></span></a>
                                        <a href="<?= base_url('layanan/detail_paket') ?>" class="btn btn-warning"><span class="glyphicon glyphicon-print"></span></a>
                                    </div>
                                </td>
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
<style>
::placeholder {
    
  font-style: italic;
}
</style>

