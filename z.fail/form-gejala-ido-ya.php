<div class="form-group">
  <label for="pasangDate" class="col-sm-2 control-label">Tanggal Kejadian</label>
  <div class="col-sm-3">
    <input type="date" id="pasangDate" class="form-control">
  </div>
</div>

<div class="form-group">
  <label class="control-label col-sm-2">Tanda-Tanda Infeksi</label>
  <div class="col-sm-9">
    <div class="row">
      <div class="col-sm-2">
        <div class="checkbox">
          <label>
            <input type="checkbox" id="suhu" value="Suhu>38C">Suhu >38C
          </label>
        </div>
      </div>
      <div class="col-sm-2">
        <div class="checkbox">
          <label>
            <input type="checkbox" id="drainase" value="Drainase">Drainase
          </label>
        </div>
      </div>
      <div class="col-sm-2">
        <div class="checkbox">
          <label>
            <input type="checkbox" id="pus" value="Pus">Pus
          </label>
        </div>
      </div>
      <div class="col-sm-2">
        <div class="checkbox">
          <label>
            <input type="checkbox" id="perforasi" value="Perforasi">Perforasi
          </label>
        </div>
      </div>
      <div class="col-sm-2">
        <div class="checkbox">
          <label>
            <input type="checkbox" id="fistula" value="Fistula">Fistula
          </label>
        </div>
      </div>
    </div>
  </div>
</div> <!-- /.form-group -->

<div class="form-group">
  <label for="keterangan" class="col-sm-2 control-label">Keterangan</label>
    <div class="col-sm-9">
      <textarea placeholder="Masukkan Keterangan Tanda-Tanda Infeksi" rows="3" class="form-control"></textarea>
    </div>
</div><!-- /.form-group -->

<div class="form-group">
  <label class="control-label col-sm-2">Kultur Aspirat</label>
  <div class="col-sm-9">
    <div class="row">
      <div class="col-sm-3">
        <input type="date" id="dateKultur" class="form-control">
      </div>
      <div class="col-sm-6">
        <input type="text" id="hasilKultur" placeholder="Hasil" class="form-control">
      </div>
    </div>
  </div>
</div><br> <!-- /.form-group -->