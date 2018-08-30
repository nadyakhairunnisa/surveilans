<div class="form-group">
	<label for="NoVent" class="col-sm-2 control-label">Nomor Ventilator</label>
	<div class="col-sm-9">
		<input type="text" name="no" placeholder="Nomor Ventilator" class="form-control" autofocus required>
  </div>
</div>

<div class="form-group">
    <label for="pasangDate" class="col-sm-2 control-label">Tanggal Pasang</label>
    <div class="col-sm-9">
      <input type="date" name="pasangDate" class="form-control" required>
  </div>
</div>

<!-- BUNDLES START -->

<div class="form-group">
    <label class="control-label col-sm-2">Posisi Pasien 30-45 Derajat (Kecuali Kontra Indikasi)</label>
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
    <label class="control-label col-sm-2">Lakukan Kebersihan Tangan Sebelum dan Sesudah Kontak Pasien</label>
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
    <label class="control-label col-sm-2">Lakukan Kebersihan Mulut Setiap 4 Jam</label>
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
    <label class="control-label col-sm-2">Manajemen Sekresi Oropharingeal dan Trakheal</label>
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
    <label class="control-label col-sm-2">Pengkajian Setiap Hari "Sedasi dan Ekstubasi"</label>
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
    <label for="lepasDate" class="col-sm-2 control-label">Tanggal Lepas</label>
    <div class="col-sm-9">
      <input type="date" name="lepasDate" class="form-control" required> 
  </div>
</div>

<div class="form-group">
    <label class="control-label col-sm-2">Tanda-Tanda Infeksi</label>
    <div class="col-sm-9">
      <div class="row">
        <div class="col-sm-5">
          <div class="checkbox">
            <label>
              <input type="hidden" name="tanda[]" id="" value="" checked>
              <input type="checkbox" name="tanda[]" id="suhu" value="Suhu>38C">Suhu >38C
            </label>
          </div>
        </div>
      </div><br>
      <div class="row">
        <div class="col-sm-5">
          <div class="checkbox">
            <label>
              <input type="checkbox" name="tanda[]" id="sekresiDahak" value="Sekresi Dahak Purulen">Sekresi Dahak Purulen
            </label>
          </div>
        </div>
      </div><br>
      <div class="row">
        <div class="col-sm-5">
          <div class="checkbox">
            <label>
              <input type="checkbox" name="tanda[]" id="fio2Lebih" value="FIO2/PO2 > 240 mmHg">FIO2/PO2 (Lebih dari 240 mmHg)
            </label>
          </div>
        </div>
      </div><br>
      <div class="row">
        <div class="col-sm-5">
          <div class="checkbox">
            <label>
              <input type="checkbox" name="tanda[]" id="fio2Kurang" value="FIO2/PO2 < 240 mmHg">FIO2/PO2 (Kurang dari 240 mmHg)
            </label>
          </div>
        </div>
      </div><br>
    </div>
</div> <!-- /.form-group -->

<div class="form-group">
  <label for="keterangan" class="col-sm-2 control-label">Keterangan</label>
    <div class="col-sm-9">
      <textarea name="keterangan" placeholder="Masukkan Keterangan Tanda-Tanda Infeksi" rows="3" class="form-control" required></textarea>
    </div>
</div><!-- /.form-group -->

<div class="form-group">
    <label class="control-label col-sm-2">Foto Thorax</label>
    <div class="col-sm-9">
      <div class="row">
        <div class="col-sm-2">
          <label class="radio-inline">
            <input type="radio" name="thorax" id="infitrat" value="Infitrat" checked>Infitrat
          </label>
        </div>
        <div class="col-sm-2">
          <label class="radio-inline">
            <input type="radio" name="thorax" id="merata" value="Merata">Merata
          </label>
        </div>
        <div class="col-sm-2">
          <label class="radio-inline">
            <input type="radio" name="thorax" id="patchy" value="Patchy">Patchy
          </label>
        </div>
        <div class="col-sm-2">
          <label class="radio-inline">
            <input type="radio" name="thorax" id="terlokalisir" value="Terlokalisir">Terlokalisir
          </label>
        </div>
      </div>
    </div>
</div><br> <!-- /.form-group -->

<div class="form-group">
    <label class="control-label col-sm-2">Kultur Aspirat</label>
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
</div><br> <!-- /.form-group -->