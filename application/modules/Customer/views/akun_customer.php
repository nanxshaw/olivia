<div class="paper">
    <div class="col-md-8">
        <div class="isi">
            <h3 class="font-bold">AKUN CUSTOMER</h3>
            <div class="row">
               <div class="col-md-12">
                    <div class="box-form">
                        <input type="text" class="form-control input-modif italic" placeholder="Kode, Nama Customer">
                    </div>
               </div>

               <div class="col-md-12 m-t-15">
                   <a href="<?=base_url('customer/profile_customer')?>">
                    <div class="box-list">
                            <div class="row">
                                <div class="col-md-6 col-sm-6">
                                    <h4>0081122 -- Luna Maya</h4>
                                </div>
                                <div class="col-md-6 col-sm-6 text-right">
                                    <h4>icon</h4>
                                </div>
                            </div>
                    </div>
                   </a>
               </div>

            </div>
        </div>
    </div>

    <div class="col-md-4">
        <?=$this->load->view('template/right_menu')?>
    </div>
</div>


