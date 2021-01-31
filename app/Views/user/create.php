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
                    <a href="<?php echo base_url()."/$url"; ?>" class="btn btn-primary">Kembali</a>
                </div>
                <form action="<?php echo base_url()."/$url/store" ?>" method="post">
                    <div class="form-group">
                        <label>Nama Lengkap</label>
                        <input type="text" id="i-nama" class="form-control" name="nama">
                    </div>
                    <div class="form-group">
                        <label>No Handphone</label>
                        <input type="number" id="i-phone" class="form-control" name="phone" oninput="this.value = Math.abs(this.value)">
                    </div>
                    <div class="form-group">
                        <label>Kata Sandi</label>
                        <input type="password" id="i-password" class="form-control" name="password">
                    </div>
                    <div class="form-group">
                        <label>Level</label>
                        <select id="i-level" class="form-control" name="level">
                            <option value="User">User</option>
                            <option value="Ambulance">Ambulance</option>
                            <option value="Admin">Admin</option>
                        </select>
                    </div>

                    <button type="submit" class="btn btn-success">Simpan</button>
                </form>
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