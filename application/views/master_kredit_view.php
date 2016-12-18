<link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/datepicker/datepicker3.css">
<section class="content-header">
  <h1>
    Register Master Kredit
  </h1>
 <!--  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a href="#">Forms</a></li>
    <li class="active">Advanced Elements</li>
  </ol> -->
</section>

<!-- Main content -->
<section class="content">

  <!-- SELECT2 EXAMPLE -->
  <div class="box box-default">
    <div class="box-header with-border">

      <div class="box-tools pull-right">
        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
        <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
      </div>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
      <div class="row">
        <div class="col-md-6">
          <div class="form-group">
            <label>No Rekening</label>
            <input type="text" class="form-control">
          </div>
          <div class="form-group">
            <label>Nasabah</label>
            <div class="input-group">
              <span class="input-group-addon"><i class="fa fa-search"></i></span>
              <input type="text" class="form-control"> 
            </div>
          </div>
          <div class="form-group">
            <label>Produk</label>
            <div class="input-group">
              <span class="input-group-addon"><i class="fa fa-search"></i></span>
              <input type="text" class="form-control"> 
            </div>
          </div>
          <div class="form-group">
            <label>Kode Group II</label>
            <div class="input-group">
              <span class="input-group-addon"><i class="fa fa-search"></i></span>
              <input type="text" class="form-control"> 
            </div>
          </div>
          <div class="form-group">
            <label>Type</label>
            <div class="input-group">
              <span class="input-group-addon"><i class="fa fa-search"></i></span>
              <input type="text" class="form-control"> 
            </div>
          </div>
          <div class="form-group">
            <label>Jumlah Angsuran</label>
            <select class="form-control select2" style="width: 100%;">
              <option selected="selected">12</option>
              <option>24</option>
              <option>32</option>
            </select>
          </div>
          <div class="form-group">
            <label>Tanggal Tagih</label>
            <select class="form-control select2" style="width: 100%;">
              <option selected="selected">1</option>
              <option>2</option>
              <option>3</option>
            </select>
          </div>
          <div class="form-group">
            <label>Suku Bunga</label>
            <input type="text" class="form-control">
          </div>
          <div class="form-group">
            <label>Adm. Lain</label>
            <input type="text" class="form-control">
          </div>
        </div>
        <!-- /.col -->
        <div class="col-md-6">
          <div class="form-group">
            <label>No Alternatif</label>
            <input type="text" class="form-control">
          </div>
          <div class="form-group">
            <label>Kode Integrasi</label>
            <div class="input-group">
              <span class="input-group-addon"><i class="fa fa-search"></i></span>
              <input type="text" class="form-control"> 
            </div>
          </div>
          <div class="form-group">
            <label>Group I</label>
            <div class="input-group">
              <span class="input-group-addon"><i class="fa fa-search"></i></span>
              <input type="text" class="form-control"> 
            </div>
          </div>
          <div class="form-group">
            <label>Kode Group III</label>
            <div class="input-group">
              <span class="input-group-addon"><i class="fa fa-search"></i></span>
              <input type="text" class="form-control"> 
            </div>
          </div>
          <div class="form-group">
            <label>Jangka Waktu</label>
            <div class="input-group">
              <span class="input-group-addon"><i class="fa fa-search"></i></span>
              <input type="text" class="form-control"> 
            </div>
          </div>
          <div class="form-group">
            <label>Tanggal Tempo</label>
            <div class="input-group date">
              <div class="input-group-addon">
                <i class="fa fa-calendar"></i>
              </div>
              <input type="text" class="form-control pull-right" id="datepicker">
            </div>
          </div>
          <div class="form-group">
            <label>Periode</label>
            <input type="text" class="form-control">
          </div>
          <div class="form-group">
            <label>Jumlah Pinjam</label>
            <input type="text" class="form-control">
          </div>
          <!-- /.form-group -->
        </div>
        <!-- /.col -->
      </div>
      <div class="box-footer">
        <button type="submit" class="btn btn-primary">Simpan Registrasi Nasabah</button>
        <button type="submit" class="btn btn-danger">Batalkan Registrasi</button>
      </div>
      <!-- /.row -->
    </div>
    <!-- /.box-body -->
    <div class="box-footer">
    </div>
  </div>
  <!-- /.box -->
</section>
<script src="<?php echo base_url(); ?>assets/plugins/datepicker/bootstrap-datepicker.js"></script>
<script>
  $(function () {
    //Date picker
    $('#datepicker').datepicker({
      autoclose: true
    });
  });
</script>