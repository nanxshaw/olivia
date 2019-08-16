<div class="paper data-paket">
    <div class="col-md-8">
        <div class="isi">
            <h3 class="font-bold">DATA PAKET CUSTOMER</h3>
            <div class="row">
               <div class="col-md-12">
                    <div class="box-form">
                        <input type="text" class="form-control input-modif italic" placeholder="Kode, Nama Customer">
                    </div>
               </div>

               <div class="col-md-12 m-t-35">
                    <table id="table_id" class="display">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Kode Transaksi</th>
                                <th>Tanggal Transaksi</th>
                                <th>Kode Customer</th>
                                <th>Nama Customer</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>RES 0001</td>
                                <td>2019-02-23</td>
                                <td>0023</td>
                                <td>Putri</td>
                                <td>menunggu</td>
                                <td><a href="<?= base_url('paket/detail_paket') ?>" class="btn btn-success"><span class="glyphicon glyphicon-search"></span></a></td>
                            </tr>
                        </tbody>
                    </table>
               </div>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <?=$this->load->view('template/right_menu')?>
    </div>
</div>


