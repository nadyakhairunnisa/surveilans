<div class="form-group">
  <label for="operasiDate" class="col-sm-2 control-label">Tanggal Operasi</label>
  <div class="col-sm-9">
    <input type="date" name="operasiDate" class="form-control" required>
  </div>
</div>

<div class="form-group">
	<label for="tindakanOpr" class="col-sm-2 control-label">Tindakan Operasi</label>
	<div class="col-sm-9">
		<input type="text" name="tindakanOpr" placeholder="Tindakan" class="form-control" required>
  </div>
</div>

<!-- BUNDLES START -->

<div class="form-group">
  <label class="control-label col-sm-2">Tidak Mencukur Rambut (Kecuali Mengganggu Jalannya Operasi)</label>
  <div class="col-sm-3">
    <div class="row">
      <div class="col-sm-4">
        <label class="radio-inline">
          <input type="radio" name="bundles1" id="obat" value="Pemberian Obat" checked>Ya
        </label>
      </div>
      <div class="col-sm-4">
        <label class="radio-inline">
          <input type="radio" name="bundles1" id="transfusi" value="Transfusi">Tidak
        </label>
      </div>
    </div>
  </div>    
  <label class="control-label col-sm-2">Melakukan Pencukuran 1 Jam Sebelum Operasi Menggunakan Clipper</label>
  <div class="col-sm-3">
    <div class="row">
      <div class="col-sm-4">
        <label class="radio-inline">
          <input type="radio" name="bundles2" id="obat" value="Pemberian Obat" checked>Ya
        </label>
      </div>
      <div class="col-sm-4">
        <label class="radio-inline">
          <input type="radio" name="bundles2" id="transfusi" value="Transfusi">Tidak
        </label>
      </div>
    </div>
  </div>
</div> <!-- /.form-group -->

<div class="form-group">
  <label class="control-label col-sm-2">Suhu Tubuh Pasien Normal (36-37C)</label>
  <div class="col-sm-3">
    <div class="row">
      <div class="col-sm-4">
        <label class="radio-inline">
          <input type="radio" name="bundles3" id="obat" value="Pemberian Obat" checked>Ya
        </label>
      </div>
      <div class="col-sm-4">
        <label class="radio-inline">
          <input type="radio" name="bundles3" id="transfusi" value="Transfusi">Tidak
        </label>
      </div>
    </div>
  </div>
  <label class="control-label col-sm-2">Pemberian Antibiotik Profilaksis</label>
  <div class="col-sm-3">
    <div class="row">
      <div class="col-sm-4">
        <label class="radio-inline">
          <input type="radio" name="bundles4" id="obat" value="Pemberian Obat" checked>Ya
        </label>
      </div>
      <div class="col-sm-4">
        <label class="radio-inline">
          <input type="radio" name="bundles4" id="transfusi" value="Transfusi">Tidak
        </label>
      </div>
    </div>
  </div>
</div> <!-- /.form-group -->

<div class="form-group">
  <label class="control-label col-sm-2">Kontrol Gula Darah</label>
  <div class="col-sm-3">
    <div class="row">
      <div class="col-sm-4">
        <label class="radio-inline">
          <input type="radio" name="bundles5" id="obat" value="Pemberian Obat" checked>Ya
        </label>
      </div>
      <div class="col-sm-4">
        <label class="radio-inline">
          <input type="radio" name="bundles5" id="transfusi" value="Transfusi">Tidak
        </label>
      </div>
    </div>
  </div>
</div> <!-- /.form-group -->

<!-- /.END-BUNDLES -->

<div class="form-group">
  <label for="country" class="col-sm-2 control-label">Dokter Konsultan</label>
  <div class="col-sm-5">
    <select name="dokterKons" class="form-control select2" style="width: 100%;" required>
      <option value="" selected disabled>Pilih Dokter</option>
      <?php 
      $query = mysqli_query($conn, "SELECT * FROM dokter");
      while($data = mysqli_fetch_assoc($query)) {
        $id_d = $data['id_dokter'];
        $nama_d = $data['nama_dokter'];
        echo "<option value='$id_d'>$nama_d</option>"; }
        ?>
    </select>
  </div>
</div> <!-- /.form-group --><br>

<div class="form-group">
  <label for="dokterKons" class="col-sm-2 control-label">Dokter Operator</label>
  <div class="col-sm-9">
    <input type="text" name="dokterOpr" placeholder="Dokter Konsultan" class="form-control" required>
  </div>
</div>

<div class="form-group">
  <label class="control-label col-sm-2">Sifat Operasi Emergensi</label>
  <div class="col-sm-9">
    <div class="row">
      <div class="col-sm-2">
        <label class="radio-inline">
          <input type="radio" name="emergensi" id="ya" value="Ya" checked>Ya
        </label>
      </div>
      <div class="col-sm-2">
        <label class="radio-inline">
          <input type="radio" name="emergensi" id="tidak" value="Tidak">Tidak
        </label>
      </div>
    </div>
  </div>
</div><br> <!-- /.form-group -->

<div class="form-group">
  <label class="control-label col-sm-2">Jenis Operasi</label>
  <div class="col-sm-9">
    <div class="row">
      <div class="col-sm-2">
        <label class="radio-inline">
          <input type="radio" name="jenisOperasi" id="bersih" value="Bersih" checked>Bersih
        </label>
      </div>
      <div class="col-sm-3">
        <label class="radio-inline">
          <input type="radio" name="jenisOperasi" id="bersihTercemar" value="Bersih Tercemar">Bersih Tercemar
        </label>
      </div>
      <div class="col-sm-2">
        <label class="radio-inline">
          <input type="radio" name="jenisOperasi" id="tercemar" value="Tercemar">Tercemar
        </label>
      </div>
      <div class="col-sm-2">
        <label class="radio-inline">
          <input type="radio" name="jenisOperasi" id="kotor" value="Kotor">Kotor
        </label>
      </div>
    </div>
  </div>
</div><br> <!-- /.form-group -->

<div class="form-group">
  <label class="control-label col-sm-2">Anestesi Umum</label>
  <div class="col-sm-9">
    <div class="row">
      <div class="col-sm-2">
        <label class="radio-inline">
          <input type="radio" name="anestesi" id="ya" value="Ya" checked>Ya
        </label>
      </div>
      <div class="col-sm-2">
        <label class="radio-inline">
          <input type="radio" name="anestesi" id="tidak" value="Tidak">Tidak
        </label>
      </div>
    </div>
  </div>
</div><br> <!-- /.form-group -->

<div class="form-group">
  <label class="control-label col-sm-2">Kamar Operasi</label>
  <div class="col-sm-9">
    <div class="row">
      <div class="col-sm-6">
        <input type="text" name="noKamarOpr" placeholder="Nomor" class="form-control" required>
      </div>
      <div class="col-sm-6">
        <input type="text" name="rondeKamarOpr" placeholder="Ronde Ke-" class="form-control" required>
      </div>
    </div><br>
  </div>
</div><br> <!-- /.form-group -->

<div class="form-group">
  <label class="control-label col-sm-2">Menggunakan Implant</label>
  <div class="col-sm-9">
    <div class="row">
      <div class="col-sm-6">
        <input type="text" name="implant" placeholder="Implant" class="form-control" required>
      </div>
      <label class="control-label col-sm-2">Trauma</label>
      <div class="col-sm-2">
        <label class="radio-inline">
          <input type="radio" name="implantTrauma" id="ya" value="Ya" checked>Ya
        </label>
      </div>
      <div class="col-sm-2">
        <label class="radio-inline">
          <input type="radio" name="implantTrauma" id="tidak" value="Tidak">Tidak
        </label>
      </div>
    </div><br>
  </div>
</div><br> <!-- /.form-group -->

<div class="form-group">
  <label class="control-label col-sm-2">Menggunakan Endoscopi</label>
  <div class="col-sm-9">
    <div class="row">
      <div class="col-sm-6">
        <input type="text" name="endoscopi" placeholder="Endoscopi" class="form-control" required>
      </div>
      <label class="control-label col-sm-2">Trauma</label>
      <div class="col-sm-2">
        <label class="radio-inline">
          <input type="radio" name="endoscopiTrauma" id="ya" value="Ya" checked>Ya
        </label>
      </div>
      <div class="col-sm-2">
        <label class="radio-inline">
          <input type="radio" name="endoscopiTrauma" id="tidak" value="Tidak">Tidak
        </label>
      </div>
    </div><br>
  </div>
</div><br> <!-- /.form-group -->

<div class="form-group">
  <label for="inTime" class="col-sm-2 control-label">Lama Operasi</label>
  <div class="col-sm-9">
    <input type="time" name="inTime" class="form-control" required>
  </div>
</div>

<div class="form-group">
  <label class="control-label col-sm-2">Skor ASA</label>
  <div class="col-sm-9">
    <div class="row">
      <div class="col-sm-2">
        <label class="radio-inline">
          <input type="radio" name="skorASA" id="1" value="1" checked>1
        </label>
      </div>
      <div class="col-sm-2">
        <label class="radio-inline">
          <input type="radio" name="skorASA" id="2" value="2">2
        </label>
      </div>
      <div class="col-sm-2">
        <label class="radio-inline">
          <input type="radio" name="skorASA" id="3" value="3">3
        </label>
      </div>
      <div class="col-sm-2">
        <label class="radio-inline">
          <input type="radio" name="skorASA" id="4" value="4">4
        </label>
      </div>
    </div>
  </div>
</div><br> <!-- /.form-group -->

<div class="form-group">
  <label for="pjKamarOpr" class="col-sm-2 control-label">PJ Kamar Operasi</label>
  <div class="col-sm-9">
    <input type="text" name="pjKamarOpr" placeholder="Penanggung Jawab" class="form-control" required>
  </div>
</div><br>

<div class="form-group">
  <label class="control-label col-sm-2">Dilakukan Kultur</label>
  <div class="col-sm-9">
    <div class="row">
      <div class="col-sm-3">
        <input type="date" name="dateKultur" class="form-control" required>
      </div>
      <div class="col-sm-6">
        <input type="text" name="hasilKultur" placeholder="Hasil" class="form-control" required>
      </div>
    </div>
  </div>
</div><br><!-- /.form-group -->