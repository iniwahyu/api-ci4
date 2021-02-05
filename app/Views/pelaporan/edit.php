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
                <form action="<?php echo base_url()."/$url/update/".$pendukung['id'] ?>" method="post">
                    <div class="form-group">
                        <label>Nama</label>
                        <input type="text" id="i-nama" class="form-control" name="nama" value="<?php echo $pendukung['nama']; ?>">
                    </div>
                    <div class="form-group">
                        <label>Alamat</label>
                        <input type="text" id="i-alamat" class="form-control" name="alamat" value="<?php echo $pendukung['alamat']; ?>">
                    </div>
                    <div class="form-group">
                        <label>Latitude</label>
                        <input type="text" id="i-latitude" class="form-control" name="latitude" value="<?php echo $pendukung['latitude']; ?>">
                    </div>
                    <div class="form-group">
                        <label>Longitude</label>
                        <input type="text" id="i-longitude" class="form-control" name="longitude" value="<?php echo $pendukung['longitude']; ?>">
                    </div>
                    <div class="form-group">
                        <label>Jenis</label>
                        <select id="i-jenis" class="form-control" name="jenis">
                            <option value="RS" <?php echo $pendukung['jenis'] == 'RS' ? 'selected' : ''; ?>>Rumah Sakit</option>
                            <option value="POLISI" <?php echo $pendukung['jenis'] == 'POLISI' ? 'selected' : ''; ?>>Kepolisian</option>
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