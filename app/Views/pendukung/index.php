<?php echo $this->extend('template') ?>

<?php echo $this->section('css'); ?>
<link rel="stylesheet" href="<?php echo base_url(); ?>/app/assets/vendors/datatables.net-bs4/dataTables.bootstrap4.css">
<?php echo $this->endSection('css'); ?>

<?php echo $this->section('content'); ?>
<div class="row">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-body">
                <div class="row d-flex mb-3">
                  <a href="<?php echo base_url()."/$url/create"; ?>" class="btn btn-primary">Tambah Data</a>
                </div>
                <table id="datatable" class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Aksi</th>
                            <th>Nama</th>
                            <th>Alamat</th>
                            <th>Jenis</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i=1; foreach($pendukung as $pendukungs): ?>
                        <tr>
                            <td><?php echo $i++; ?></td>
                            <td>
                              <a href="<?php echo base_url()."/$url/edit/".$pendukungs['id']; ?>" class="btn btn-sm btn-primary">Edit</a>
                              <a href="<?php echo base_url()."/$url/delete/".$pendukungs['id']; ?>" class="btn btn-sm btn-danger">Hapus</a>
                            </td>
                            <td><?php echo $pendukungs['nama']; ?></td>
                            <td><?php echo $pendukungs['alamat']; ?></td>
                            <td><?php echo $pendukungs['jenis']; ?></td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<?php echo $this->endSection('content'); ?>

<?php echo $this->section('js'); ?>
<script src="<?php echo base_url(); ?>/app/assets/vendors/datatables.net/jquery.dataTables.js"></script>
<script src="<?php echo base_url(); ?>/app/assets/vendors/datatables.net-bs4/dataTables.bootstrap4.js"></script>
<script>
  $(document).ready(function() {
      $("#datatable").DataTable();
  });
</script>
<?php echo $this->endSection('js'); ?>