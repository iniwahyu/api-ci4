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
                
                </div>
                <table id="datatable" class="table table-responsive">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Aksi</th>
                            <th>Gambar</th>
                            <th>Lokasi</th>
                            <th>Latitude</th>
                            <th>Longitude</th>
                            <th>Pelapor</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i=1; foreach($pelaporan as $pelaporans): ?>
                        <tr>
                            <td><?php echo $i++; ?></td>
                            <td>
                              <a href="<?php echo base_url()."/$url/delete/".$pelaporans['id']; ?>" class="btn btn-sm btn-danger">Hapus</a>
                            </td>
                            <td><?php // echo $pelaporans['image']; ?></td>
                            <td><?php echo $pelaporans['lokasi']; ?></td>
                            <td><?php echo $pelaporans['latitude']; ?></td>
                            <td><?php echo $pelaporans['longitude']; ?></td>
                            <td><?php echo $pelaporans['id_user']; ?></td>
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