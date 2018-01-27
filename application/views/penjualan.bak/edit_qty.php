<section class="content">
  <form method="post" enctype="multipart/form-data">
  <div class="row">
    <div class="col-md-12">
      <div class="box box-warning">
        <div class="box-header">
          <h3 class="box-title">Bayar</h3>
          <div class="box-tools pull-right" style="display: -webkit-inline-box">
            <?php echo anchor('penjualan/transaksi_barang/'.$id_faktur,'<i class="fa fa-close"></i>', array('class'=>'btn btn-box-tool','title'=>'Batal', 'data-toggle'=>'tooltip', 'data-placement'=>'top'))?>
          </div>
        </div>
        <div class="box-body">
          <?php
            $msg=validation_errors();
            if($msg!=NULL)
            echo msg_warning($msg);

            $msg2=$this->session->flashdata('msg');
            if($msg2!=NULL)
            echo $msg2;
          ?>
          <div class="form-horizontal">
            <div class="form-group">
              <label class="control-label col-md-3">Kode</label>
              <div class="col-md-6">
                <input type="text" name="kode" class="form-control disabled" value="<?php echo $kode; ?>" placeholder="kode">
              </div>
            </div>
            <br>
            <div class="form-group">
              <label class="control-label col-md-3">Barang</label>
              <div class="col-md-6">
                <input type="text" name="namabarang" class="form-control disabled" value="<?php echo getnamabarang($kode); ?>" placeholder="kode">
              </div>
            </div>
            <br>
            <div class="form-group">
              <label class="control-label col-md-3">Quantity</label>
              <div class="col-md-6">
                <input type="text" name="quantity" class="form-control" <?php if(isset($quantity)){ if($quantity!='0'){echo 'value="'.$quantity.'"'; }} ?> placeholder="qty">
              </div>
            </div>
          </div>
        </div>
        <div class="box-footer clearfix">
          <input type="submit" name="batal" value="Batal" class="btn btn-sm btn-default btn-flat pull-left" data-toggle="tooltip" data-placement="top" title="Batal">
          <input type="submit" name="update_qty" value="Update" class="btn btn-sm btn-info btn-flat pull-right" data-toggle="tooltip" data-placement="top" title="Simpan">
        </div>
      </div>
    </div>
  </div>
  </form>
</section>