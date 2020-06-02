
<div class="container">
  <div class="col-lg-12 mt-5" style="border: 1px solid #ccc;">
    <div class="row p-5">
      <div class="col-lg-12">
        <h2 class="txt-primary text-center">Data Kelas</h2>
        <hr class="garisbawah">
        <div class="row mt-5">
          <div class="col-lg-12">
            <table class="table table-striped w-100" border="3" bordercolor="white">
              <thead>
                <tr class="text-center">
                  <th>No</th>
                  <th>Nama Kelas</th>
                  <th>Tanggal Dibuat</th>
                  <th style="width: 15%">Jumlah Siswa</th>
               
                 
                </tr>
              </thead>
              <tbody>
                <?php foreach ($kelas as $i => $row) : 
                  $date = $row['created_at'];
                  $date = date("d M yy", strtotime($date));
                  ?>
                  <tr>
                    <td><?= $i+1 ?></td>
                    <td><?= $row['nama'] ?></td>
                    <td><?= $date ?></td>
                    <td><?= $row['jumlah_siswa'] ?></td>
                  </tr>
                <?php endforeach; ?>
                
       
              </tbody>


            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>