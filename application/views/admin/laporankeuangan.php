
<div class="container">
  <div class="col-lg-12 mt-5" style="border: 1px solid #ccc;">
    <div class="row p-5">
      <div class="col-lg-12">
        <h2 class="txt-primary text-center">Laporan Keuangan</h2>
        <hr class="garisbawah">
        <div class="row mt-5">
          <div class="col-lg-12">
            <table class="table table-striped w-100 keuangan" border="3" bordercolor="white">
              <thead>
                <tr class="text-center">
                  <th style="width: 5%">ID</th>
                  <th style="width: 15%">Nama Siswa</th>
                  <th style="width: 20%">Pemabayaran Bimbel</th>
                  <th style="width: 20%">Jumlah yang dibayar</th>
                  <th style="width: 20%">Keterangan (Lunas/Belum)</th>
                  <th style="width: 15%">Keterangan Penyetor</th>
                  <th>Bukti Pembayaran</th>
                 
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td><button class="btn btn-primary btn-sm" type="button" data-toggle="modal" data-target="#lihatPembayaran">Lihat Pembayaran</button></td>
                </tr>
       
              </tbody>


            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="lihatPembayaran" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Lihat Pembayaran (Nama User)</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-group">
                  <div class="row justify-content-center">
                    <div class="col-lg-8">
                      <h5 class="text-center">Jumlah yang Harus dibayar:</h5>
                    </div>
                  </div>
                  <div class="row justify-content-center text-center">
                    <div class="col-lg-5">
                      <div class="">
                        <input type="text" class="form-control text-center" value="Rp. 2.000.000" readonly="" style="font-weight: 600; font-size: 20px;">
                        
                      </div>
                    </div>
                  </div>
                  
                  
                </div>
          <div class="form-group">


          </div>
          <div class="form-group">
            <div class="col-lg-12 text-center">
              <p>Bukti Pembayaran:</p>
              <img src="<?= base_url('assets/img/struk.jpg'); ?>" class="w-100">
            </div>
          </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Terima Pembayaran</button>
      </div>
    </div>
  </div>
</div>