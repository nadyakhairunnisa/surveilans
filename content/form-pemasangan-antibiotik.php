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
    <input type="text" name="dosis" placeholder="Dosis (dalam mg)" class="form-control" onkeypress="return hanyaAngka(event)" required>
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
          <input type="radio" name="indikasi" id="kulturIDO1" value="Profilaksis" checked>Profilaksis
        </div>
      </div>
      <div class="col-sm-2">
        <div class="radio-inline">
          <input type="radio" name="indikasi" id="kulturIDO2" value="Pengobatan">Pengobatan
        </div>
      </div>
    </div>
  </div>
</div><br> <!-- /.form-group -->

<script>
  //Hanya Angka
  function hanyaAngka(evt) {
    var charCode = (evt.which) ? evt.which : event.keyCode
    if (charCode > 31 && (charCode < 48 || charCode > 57))
     
      return false;
    return true;
  }
</script>