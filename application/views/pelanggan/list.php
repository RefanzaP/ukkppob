<section class="content-header">
<div class="btn-group">


  </div>
<div class="panel-body">
</section>
<!-- Main content -->
<section class="content">
<div class="row">
  <div class="col-xs-12">
    <div class="box">
      <div class="box-header">
        <h3 class="box-title">Data Customer</h3>
      </div>
      <!-- /.box-header -->
      <div class="box-body">
      <table id="example2" class="table table-hover table-stripped">
      <thead>
        <tr>
          <td>No</td>
          <td>Customer Name</td>
          <td>Email</td>
          <td>Address</td>
          <td>KWH</td>
        </tr>
      </thead>
      <tbody>
        <?php $no=0; foreach($arr as $dt_bar):
        $no++; ?>
        <tr>
          <td><?= $no ?></td>
          <td><?= $dt_bar->nama ?></td>
          <td><?= $dt_bar->email ?></td>
          <td><?= $dt_bar->alamat?></td>
          <td><?= $dt_bar->nomor_kwh?></td>
          <td>
            <!-- <a href="<?=base_url('index.php/kategori/hapus_kategori/'.$dt_bar->id_kategori)?>" onclick="return confirm('Apakah Anda Yakin?')" class="btn btn-danger btn-sm "><i class="fa fa-trash"></i></a></td> -->
        </tr>
      <?php endforeach ?>
      </tbody>
    </table>
<!-- tambah kategori -->
          </tr>
          </tfoot>
        </table>
      </div>
      <!-- /.box-body -->


    <?php if($this->session->flashdata('pesan')!=null): ?>
       <div class= "alert alert-success"><?= $this->session->flashdata('pesan');?></div>
    <?php endif?>
    <!-- /.box -->
  </div>



<div class="modal fade" id="tambah">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
      </div>
      <div class="modal-body">
          <form action="<?php echo base_url() ?>index.php/Kategori/add" method="post" enctype="multipart/form-data">
            Nama Kategori
            <input type="text" name="title" placeholder="Nama Kategori" class="form-control"><br>
            Deskripsi
            <input type="text" name="deskripsi" placeholder="Nama Kategori" class="form-control"><br>
            Gambar
            <td><input type="file" name="foto_cover" class="form-control"></td>
            <input type="submit" name="simpan" value="Simpan" class="btn btn-success">
            <input type="button" value="Cancel" class="btn btn-defaul" data-dismiss="modal">
          </form>
      </div>
    </div>
  </div>
</div>


<div class="modal fade" id="update">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">Ubah Kategori</h4>
      </div>
      <div class="modal-body">
        <form action="<?=base_url()?>index.php/kategori/update" method="post" enctype="multipart/form-data">
          <input type="hidden" name="id_kategori_lama" id="id_kategori_lama" ><br>
          Title
          <input id="title" type="text" name="title" class="form-control"  placeholder="Title"><br>
          Deskripsi
          <input id="deskripsi" type="text" name="deskripsi" class="form-control" placeholder="Deskripsi"><br>
          Gambar
          <td><input type="file" name="foto_cover" id="foto_cover" class="form-control"></td>
          <input type="submit" name="simpan" value="Simpan" class="btn btn-success">
        </form>
      </div>
    </div>
  </div>
</div>





<!-- <script type="text/javascript">
function tm_detail(id_kategori){
  $.ajax({
    type:"kategori",
    url:"<?=base_url()?>index.php/Kategori/get_detail/"+id_kategori,
    dataType:"json",
    success:function(data){
      $('#update').modal('toggle');
      $("#title").val(data.title);
      $("#deskripsi").val(data.deskripsi);
      $("#id_kategori_lama").val(data.id_kategori);
    }
  })
}
</script> -->
