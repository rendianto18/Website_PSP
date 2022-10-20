<!-- <link href="<?php echo base_url() ?>assets/style.css" rel="stylesheet"> -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<link href="<?php echo base_url() ?>assets/css/admin.css" rel="stylesheet">

<section id="editData">
  <div class="container dashboard">
    <div class="row mb-3">
      <div class="col">
        <h2 class="text-center">Form Ubah Data Puskesmas</h2>
      </div>
    </div>
    
    <div style="color: red;"><?php echo validation_errors(); ?></div>
    <?php echo form_open("admin/ubah/".$tbl_puskesmas->id_list); ?>
      <div class="row mb-3">
        <label class="col-sm-2 col-form-label text-end">ID</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" name="input_id" value="<?php echo $tbl_puskesmas->id_list ?>" disabled>
        </div>
      </div>
      <div class="row mb-3">
        <label class="col-sm-2 col-form-label text-end">Nama Puskesmas</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" name="input_nmpuskesmas" value="<?php echo $tbl_puskesmas->nama ?>">
        </div>
      </div>
      <div class="row mb-3">
        <label class="col-sm-2 col-form-label text-end">Alamat</label>
        <div class="col-sm-10">
          <textarea class="form-control" name="input_alamat" id="exampleFormControlTextarea1" rows="2"><?php echo $tbl_puskesmas->alamat ?></textarea>
        </div>
      </div>
      <div class="row mb-3">
        <label class="col-sm-2 col-form-label text-end">Kuota Vaksin</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" name="input_kuota" value="<?php echo $tbl_puskesmas->kuota ?>">
        </div>
      </div>
      <div class="row mb-3">
        <label class="col-sm-2 col-form-label text-end">Jenis Vaksin</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" name="input_jenis" value="<?php echo $tbl_puskesmas->jenis ?>">
        </div>
      </div>
      <div class="row mb-3">
        <label class="col-sm-2 col-form-label text-end">Latitude</label>
        <div class="col-sm-10">
        <input type="text" class="form-control" name="input_lat" value="<?php echo $tbl_puskesmas->lat ?>">
        </div>
      </div>
      <div class="row mb-3">
        <label class="col-sm-2 col-form-label text-end">Longitude</label>
        <div class="col-sm-10">
          
          <input type="text" class="form-control" name="input_long" value="<?php echo $tbl_puskesmas->long ?>">
          
        </div>
      </div>
      <div class="row mb-3">
        <label class="col-sm-2 col-form-label text-end">Gambar</label>
        <div class="col-sm-10">
          <input type="file" class="form-control" name="input_gambar" value="<?php echo $tbl_puskesmas->gambar ?>">
        </div>
      </div>

      <div class="row text-end">
        <div class="col">
          <a class="btn btn-danger"  href="<?php echo base_url(); ?>admin/index_admin">Batal</a>
          <input class="btn btn-primary" type="submit" name="submit" value="Simpan">
        </div>
      </div>
    <?php echo form_close(); ?>
  </div>
</section>