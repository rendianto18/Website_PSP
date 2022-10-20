
  <!-- <link href="<?php echo base_url() ?>assets/style.css" rel="stylesheet"> -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <link href="<?php echo base_url() ?>assets/css/admin.css" rel="stylesheet">

  <section id="admin">
    <div class="container dashboard">
      <div class="row">
        <div class="col">
          <h2 class="text-center">DATA PUSKESMAS</h2>
        </div>
      </div>

      <div class="row mb-3 buttonNavigator">
        <div class="col">
          <a class="btn homeButton" href="<?php echo base_url() ?>">HOME</a>
        </div>
      </div>

      <div class="row">  
        <div class="col">
          <table class="table table-striped table-hover">
            <thead class="head text-center align-middle">
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Nama Puskesmas</th>
                <th scope="col">Alamat</th>
                <th scope="col">Kuota Vaksin</th>
                <th scope="col">Jenis Vaksin</th>
                <th scope="col">Latitude</th>
                <th scope="col">Longitude</th>
                <th scope="col">Gambar</th>
                <th scope="col" colspan="2">Aksi</th>

              </tr>
            </thead>
            <tbody class="text-center align-middle">
              <?php
                foreach($tbl_puskesmas as $data){
                  ?>
                  <tr>
                    <td> <?php echo $data['id_list'] ?> </td>
                    <td> <?php echo $data['nama'] ?> </td>
                    <td> <?php echo $data['alamat'] ?> </td>
                    <td> <?php echo $data['kuota'] ?> </td> 
                    <td> <?php echo $data['jenis'] ?> </td> 
                    <td> <?php echo $data['lat'] ?> </td> 
                    <td> <?php echo $data['long'] ?> </td> 
                    <td> <?php echo $data['gambar'] ?> </td>
                    <td>
                      <a class="btn btn-warning" href= " <?php echo base_url(); ?>admin/ubah/<?php echo $data['id_list']; ?>" >
                        <img class="actionImage" src="<?php echo base_url() ?>assets/images/admin/edit.png" alt="edit">
                      </a>
                    </td>
                    <td>
                      <a class="btn btn-danger" href= " <?php echo base_url(); ?>admin/delete/<?php echo $data['id_list']; ?>" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Tooltip on bottom">
                        <img class="actionImage" src="<?php echo base_url() ?>assets/images/admin/delete.png" alt="edit">
                      </a>
                    </td>
                  </tr>
        
              <?php } ?>
            </tbody>
          </table>
        </div>
      </div>

      <div class="row text-end buttonNavigator">
        <div class="col">
          <a class="btn tambahdataButton" href='<?php echo base_url("admin/tambah"); ?>'>+ TAMBAH DATA</a>
        </div>
      </div>
  
    </div>
  </section>

