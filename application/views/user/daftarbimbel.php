

<div class="container">
  <div class="col-lg-12 mt-5" style="border: 1px solid #ccc;">
    <div class="row p-5">
      <div class="col-lg-12">
        <h2 class="txt-primary text-center">Daftar Bimbel</h2>
        <hr class="garisbawah">
        <div class="row mt-5">
          <div class="col-lg-12">
            <div class="progress" style="height: 40px;">
              <div class="progress-bar bg-success" role="progressbar" style="width: 33.3%;" id="progressBar">
              <b class="lead" id="progressText">Step 1</b>
              </div>
            </div>
          </div>
        </div>
        <form action="" method="post">
        <div id="first"> <!-- AWAL FIRST -->
        <div class="row mt-5">
            <div class="col-lg-12 mb-4 text-center">
              <h2>Isi Fomulir</h2>
            </div>
          <div class="col-lg-6">
            <div class="form-group">
              <input type="text" name="" class="form-control" placeholder="Nama Lengkap">
            </div>

            <div class="form-group">
              <input type="text" name="" class="form-control" placeholder="Alamat Tinggal">
            </div>

            <div class="form-group">
              <input type="text" name="" class="form-control" placeholder="Tempat Lahir">
            </div>

            <div class="form-group">
              <input type="date" name="" class="form-control" placeholder="Tanggal Lahir">
            </div>

            <div class="custom-control custom-radio">
              <input type="radio" id="customRadio1" name="customRadio" class="custom-control-input">
              <label class="custom-control-label" for="customRadio1">Laki - Laki</label>
            </div>
            <div class="custom-control custom-radio">
              <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input">
              <label class="custom-control-label" for="customRadio2">Perempuan</label>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="form-group">
              <input type="text" name="" class="form-control" placeholder="No Telepon">
            </div>

            <div class="form-group">
              <input type="text" name="" class="form-control" placeholder="Nama Orang Tua">
            </div>

            <div class="form-group">
              <input type="text" name="" class="form-control" placeholder="Asal Sekolah">
            </div>

            <select class="custom-select my-select">

              <optgroup label="SD / MI">
                <option value="" selected="" disabled="">Please select</option>
                <option>1 SD</option>
                <option>2 SD</option>
                <option>3 SD</option>
                <option>4 SD</option>
                <option>5 SD</option>
                <option>6 SD</option>
              </optgroup>

              <optgroup label="SMP / MTs">
                <option>7 SMP</option>
                <option>8 SMP</option>
                <option>9 SMP</option>
              </optgroup>

              <optgroup label="SMA">
                <option>10 IPA SMA</option>
                <option>10 IPS SMA</option>
                <option>11 IPA SMA</option>
                <option>11 IPS SMA</option>
                <option>12 IPA SMA</option>
                <option>12 IPS SMA</option>
              </optgroup>
            </select>
          </div>
        </div> <!-- AKHIR FIRST -->
          <div class="col-lg-12 text-center">
            <button class="btn btn-primary" id="next-1" type="button">Lanjut</button>
          </div>
        </div>

        <div id="second"> <!-- AWAL SECOND -->
          <div class="row mt-5">
            <div class="col-lg-12 mb-4 text-center">
              <h2>Upload Berkas</h2>
            </div>
            <div class="col-lg-12">
              <div class="form-group">
                <label for="upload_berkas">Upload Berkas :</label>
                <input type="file" name="" class="form-control" placeholder="Upload Berkas" id="upload_berkas">
              </div>

              <div class="col-lg-12 text-center">
                <button class="btn btn-danger" id="prev-2" type="button">Kembali</button>
                <button class="btn btn-primary" id="next-2" type="button">Lanjut</button>
              </div>
            </div>
          </div>
        </div> <!-- AKHIR SECOND -->

        <div id="third"> <!-- AWAL THIRD -->
          <div class="row mt-5">
            <div class="col-lg-12 mb-4 text-center">
              <h2>Pembayaran</h2>
            </div>
            <div class="col-lg-12">
              <div class="form-group">
                <label for="upload_pembayaran">Upload Bukti Pembayaran :</label>
                <input type="file" name="" class="form-control" placeholder="Upload Berkas" id="upload_pembayaran">
              </div>

              <div class="col-lg-12 text-center">
                <button class="btn btn-danger" id="prev-3" type="button">Kembali</button>
                <button class="btn btn-primary" id="submit" type="submit" disabled="">Submit</button>
              </div>
            </div>
          </div>
        </div> <!-- AKHIR THIRD -->
        </form>


        <div class="row">
          
        </div>
      </div>
    </div>
  </div>
</div>

