<div class="form-group">
  <label class="control-label col-sm-2">Jenis Pemasangan</label>
  <div class="col-sm-9">
    <div class="row">
      <div class="col-sm-3">
        <label class="radio-inline">
          <input type="radio" name="jenis" id="spp" value="SPP" checked>SPP
        </label>
      </div>
      <div class="col-sm-3">
        <label class="radio-inline">
          <input type="radio" name="jenis" id="dauer" value="Dauer">Dauer
        </label>
      </div>
      <div class="col-sm-3">
        <label class="radio-inline">
          <input type="radio" name="jenis" id="intermiten" value="Intermiten">Intermiten
        </label>
      </div>
      <div class="col-sm-3">
        <label class="radio-inline">
          <input type="radio" name="jenis" id="kondom" value="Kondom">Kondom
        </label>
      </div>
    </div>
  </div>
</div><br> <!-- /.form-group -->

<div class="form-group">
  <label class="control-label col-sm-2">Pemeriksaan</label>
  <div class="col-sm-9">
    <div class="row">
      <div class="col-sm-3">
        <div class="radio-inline">
          <input type="radio" name="pemeriksaan" value="Urine" checked>Urine
        </div>
      </div>
      <div class="col-sm-3">
        <div class="radio-inline">
          <input type="radio" name="pemeriksaan" value="Biakan Urine">Biakan Urine
        </div>
      </div>
    </div>
  </div>
</div><br> <!-- /.form-group -->

<div class="form-group">
<label for="inDate" class="col-sm-2 control-label">Tanggal Pemeriksaan</label>
  <div class="col-sm-5">
    <input type="date" name="date" class="form-control" required>
  </div>
</div>

<div class="form-group">
    <label for="address" class="col-sm-2 control-label">Keterangan</label>
    <div class="col-sm-9">
      <textarea name="keterangan" placeholder="Hasil Pemeriksaan ..." rows="3" class="form-control"></textarea>
  </div>
</div><br>