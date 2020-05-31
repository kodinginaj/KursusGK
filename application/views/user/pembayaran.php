

<div class="container">
  <div class="col-lg-12 mt-5" style="border: 1px solid #ccc;">
    <div class="row p-5">
      <div class="col-lg-12">
        <h2 class="txt-primary text-center">Pembayaran</h2>
        <hr class="garisbawah">
        <div class="row mt-5">
          <div class="col-lg-12">
            <table class="table table-striped w-100" border="3" bordercolor="white">
              <thead>
                <tr class="text-center">
                  <th>No</th>
                  <th>Pembayaran</th>
                  <th style="width: 15%">Bayar (RP)</th>
                  <th style="width: 15%">Tgl Posting</th>
                  <th style="width: 25%">Jumlah yang dibayar (RP)</th>
                  <th style="width: 25%">Keteragan (Penyetor)</th>
                </tr>
              </thead>
              <tbody>
                <?php foreach ($pembayaran as $i => $row) : 
                  $tanggal = $row['created_at'];
                  $tanggal = date( "d M yy", strtotime($tanggal));
                  
                  ?>
                
                <tr>
                  <td><?= $i+1 ?></td>
                  <td><?= $row['kelas']['nama'] ?></td>
                  <td>Rp. <?= $row['total_pembayaran'] ?></td>
                  <td><?= $tanggal ?></td>
                  <td>Rp. <?= $row['total_pembayaran'] ?></td>
                  <td class="text-center"><button class="btn btn-sm btn-outline-secondary">Bayar</button></td>
                </tr>
                <?php endforeach ; ?>
              </tbody>


            </table>
          </div>
        </div>

        <div class="row">
          <div class="col-lg-12 text-center">
            <button class="btn btn-primary">Kembali</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

