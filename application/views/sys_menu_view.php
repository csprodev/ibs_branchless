<link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/datatables/dataTables.bootstrap.css">
<link rel="stylesheet" href="https://cdn.datatables.net/select/1.2.1/css/select.dataTables.min.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/select2/select2.min.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/iCheck/all.css">

<script src="<?php echo base_url(); ?>assets/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url()  ; ?>assets/plugins/datatables/dataTables.bootstrap.min.js"></script> 
<script src="<?php echo base_url(); ?>assets/plugins/slimScroll/jquery.slimscroll.min.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/fastclick/fastclick.js"></script>



<section class="content-header">
  <h1>
    Sys Menu
  </h1>
</section>
<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-xs-12">
      <div class="box">
        <!-- /.box-header -->
        <div class="margin">
          <button type="button" class="btn btn-app" data-toggle="modal" data-target="#form_user"><i class="fa fa-plus"></i>Add</button>
          <a id="editButton" class="btn btn-app">
            <i class="fa fa-edit"></i> Edit
          </a>
          <a  id="deleteButton" class="btn btn-app">
            <i class="fa fa-trash"></i> Delete
          </a>
        </div>
        <div class="box-body">
          <table width="1500px" id="grid" class="table table-bordered table-striped table-hover display">
            <thead>
              <tr>
                <th hidden="true"></th>
                <th>No</th>
                <?php
                $hide_column = array('sm_id', 'sm_user_id');
                foreach ($column_table as $key => $data) 
                {
                  if(!in_array($data['COLUMN_NAME'], $hide_column))
                    echo "<th>".str_replace('_', ' ', substr($data['COLUMN_NAME'], 3))."</th>";
                }
                ?>
              </tr>
            </thead>
            <tbody>
              <?php 
                $no = 1;
                foreach($list_data as $data)
                { 
                  echo "<tr>";
                  echo "<td hidden='true'>".$data['sm_id']."</td>";
                  echo "<td>".$no."</td>";
                  echo "<td>".$data['sm_title']."</td>";
                  if($data['sm_is_child'] == 1){
                    echo "<td>Yes</td>";
                  } else {
                    echo "<td>No</td>";
                  }
                  echo "<td>".$data['sm_controller']."</td>";
                  echo "<td>".$data['sm_icon']."</td>";
                  echo "<td>".$data['sm_id_parent']."</td>";
                  echo "<td>".$data['sm_order']."</td>";
                  echo "<td>".$data['sm_is_parent']."</td>";
                  echo "<td>".$data['sm_is_active']."</td>";
                  echo "</tr>";
                  $no++;
              }?>
            </tbody>
            <tfoot>
            </tfoot>
          </table>
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->
    </div>
    <!-- /.col -->
  </div>
  <!-- /.row -->
  <div class="modal fade form_user" id="form_user" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document" style="width:700px">
      <div class="modal-content">
      <form method="post" role="form" action="sys_menu/save">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title" id="myModalLabel">Form User</h4>
        </div>
        <div class="modal-body">
            <div class="box-body">
              <div class="row">
                <div class="form-group">
                  <label for="title">Title</label>
                  <input type="text" class="form-control" id="title" name="title"  value="">
                  <input type="hidden" class="form-control" id="id" name="id">
                </div>
                <div class="form-group">
                  <label for="controller">Controller</label>
                  <input type="text" class="form-control" id="controller" name="controller" value="">
                </div>
                <div class="form-group">
                  <label for="icon">Icon</label>
                  <input type="text" class="form-control" id="icon" name="icon" value="">
                </div>
                <div class="form-group">
                  <label for="order">Order</label>
                  <input type="text" class="form-control" id="order" name="order" value="">
                </div>
                <div class="form-group">
                  <label for="is_active">Is Active</label> <br/>
                  <label>
                    <input type="checkbox"  class="flat-red" >
                  </label>
                </div>
                <div class="form-group">
                  <label for="is_child">Is Child</label> <br/>
                  <label>
                    <input id="is_child" type="checkbox"  class="flat-red" checked>
                  </label>
                </div>
                <div class="form-group">
                  <label>Parent</label>
                  <select id="is_parent" class="form-control select2" style="width: 100%;" disabled>
                    <option>---</option>
                    </select>
                </div>
              </div>
            </div>
            <!-- <div class="box-footer">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div> -->
          
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
            <button type="submit" class="btn btn-primary btnSubmitSetor" name="btnSubmitSetor">Save</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>
<!-- /.content -->
<script src="<?php echo base_url(); ?>assets/plugins/iCheck/icheck.min.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/select2/select2.full.min.js"></script>

<script>

  $(function () {
    $(".select2").select2({
      ajax: {
        url: "sys_menu/get_parent",
        dataType: 'json',
        delay: 250,
        data: function (params) {
          return {
            q: params.term, // search term
            page: params.page
          };
        },
        processResults: function (data, params) {
          params.page = params.page || 1;
          return {
            results: $.map(data, function(obj) {
                return { id: obj.sm_id, text: obj.sm_title};
            }),
            pagination: {
              more: (params.page * 30) < data.total_count
            }
          };
        }
      }
    });

    $('input:checkbox[id=is_child]').on('ifChecked', function(event){
      $("select[id=is_parent]").attr('disabled', false);
    });

    $('input:checkbox[id=is_child]').on('ifUnchecked', function(event){
      $("select[id=is_parent]").attr('disabled', true);
    });

    var table = $('#grid').DataTable({
      "scrollX": true
    });

    $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
      checkboxClass: 'icheckbox_flat-green',
      radioClass: 'iradio_flat-green'
    });

    $('#grid tbody').on( 'click', 'tr', function (a) {
      if ( $(this).hasClass('selected')){
        $(this).removeClass('selected');
      } 
      else {
        var d = table.row( this ).data();
        table.$('tr.selected').removeClass('selected');
        $(this).addClass('selected');
      }
    });

    $('#editButton').click( function (){
      var params = table.row('.selected').data();
      if(!params) {
        alert('Select row first!');
      } else {
        location.href = "<?php echo base_url(); ?>sys_menu/index/" + params[0]; 
      }
    });

    $('#deleteButton').click( function (){
      var params = table.row('.selected').data();

      if(!params) { 
        alert('Select row first !');
      } else {
        if (confirm("Are you sure?")) {
          $.ajax({
            url: "<?php echo base_url().'sys_menu/delete/'; ?>"+params[0],
            context: document.body,
            success:function(res) {

              if(res == 'success'){
                table.row('.selected').remove().draw( false );
              } else {
                alert(res);
              }
            }
          });
        }
        return false;
      }
    });
  });
</script>