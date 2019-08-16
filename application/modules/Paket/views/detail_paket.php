<div class="h-detail">
    <div class="row">
        <div class="col-md-6">
            <h4 class="c-red"><label>DATA PAKET - PUTRI NILA</label></h4>
        </div>
        <div class="col-md-6 text-right">
            <a href="<?=base_url('paket')?>">
                <img src="<?php echo base_url(); ?>assets/images/back.png" class="t-back" />
            </a>
        </div>
    </div>
</div>

<div class="container-fluid">
    <div class="card border-box">
        <div class="card-header">
            <h4>Detail</h4>
        </div>
        <div class="card-body">
            <h4><label>Detail Transaksi</label></h4>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="k_transaksi">Kode Transaksi</label>
                        <input type="text" class="form-control" name="k_transaksi" disabled>
                    </div>
                    <div class="form-group m-t-15">
                        <label for="k_transaksi">Kode Customer</label>
                        <input type="text" class="form-control" name="k_transaksi" disabled>
                    </div>
                    <div class="form-group m-t-15">
                        <label for="k_transaksi">Jenis Reservasi</label>
                        <input type="text" class="form-control" name="k_transaksi" disabled>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="k_transaksi">Tanggal Transaksi</label>
                        <input type="date" class="form-control" name="k_transaksi" disabled>
                    </div>
                    <div class="form-group m-t-15">
                        <label for="k_transaksi">Nama Customer</label>
                        <input type="text" class="form-control" name="k_transaksi" disabled>
                    </div>
                </div>

                <div class="col-md-12 m-t-15">
                    <table id="table_id" class="display">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Kode</th>
                                <th>Nama</th>
                                <th>QTY</th>
                                <th>QTY Diambil</th>
                                <th>QTY Sisa</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>RES 0001</td>
                                <td>Olivia</td>
                                <td>6</td>
                                <td>0</td>
                                <td>6</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>