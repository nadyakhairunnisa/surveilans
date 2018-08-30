<div class="form-group">
  <label for="namaObat" class="col-sm-2 control-label">Nama Obat</label>
  <div class="col-sm-9">
    <input type="text" name="namaObat" placeholder="Nama Obat" class="form-control" required>
  </div>
</div>

<div class="form-group">
    <label for="pemakaianDate" class="col-sm-2 control-label">Tanggal Pemakaian</label>
    <div class="col-sm-9">
      <input type="date" name="pemakaianDate" class="form-control" required>
  </div>
</div>

<div class="form-group">
  <label for="dosis" class="col-sm-2 control-label">Dosis</label>
  <div class="col-sm-9">
    <input type="text" name="dosis" placeholder="Dosis" class="form-control" required>
  </div>
</div>

<div class="form-group">
    <label class="control-label col-sm-2">Jenis</label>
    <div class="col-sm-9">
      <div class="row">
        <div class="col-sm-2">
          <label class="radio-inline">
            <input type="radio" name="jenis" id="po" value="PO" checked>PO
          </label>
        </div>
        <div class="col-sm-2">
          <label class="radio-inline">
            <input type="radio" name="jenis" id="iv" value="IV">IV
          </label>
        </div>
        <div class="col-sm-2">
          <label class="radio-inline">
            <input type="radio" name="jenis" id="im" value="IM">IM
          </label>
        </div>
      </div>
    </div>
</div><br> <!-- /.form-group -->

<div class="form-group">
    <label class="control-label col-sm-2">Indikasi</label>
    <div class="col-sm-9">
      <div class="row">
        <div class="col-sm-2">
          <div class="radio-inline">
            <label>
              <input type="radio" name="indikasi" id="kulturIDO1" value="Profilaksis" checked>Profilaksis
            </label>
          </div>
        </div>
        <div class="col-sm-2">
          <div class="radio-inline">
            <label>
              <input type="radio" name="indikasi" id="kulturIDO2" value="Pengobatan">Pengobatan
            </label>
          </div>
        </div>
      </div>
    </div>
</div><br> <!-- /.form-group -->