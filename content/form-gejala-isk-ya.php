<div class="form-group">
    <label for="infeksiDate" class="col-sm-2 control-label">Tanggal Infeksi</label>
    <div class="col-sm-9">
      <input type="date" name="infeksiDate" class="form-control" required>
  </div>
</div>

<div class="form-group">
    <label class="control-label col-sm-2">Tanda-Tanda Infeksi</label>
    <div class="col-sm-10">
      <div class="row">
        <div class="col-sm-2">
          <div class="checkbox">
            <label>
              <input type="checkbox" name="tanda[]" id="suhu" value="Suhu >38C">Suhu >38C
            </label>
          </div>
        </div>
        <div class="col-sm-2">
          <div class="checkbox">
            <label>
              <input type="checkbox" name="tanda[]" id="suhu" value="Suhu <37C">Suhu <37C
            </label>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="checkbox">
            <label>
              <input type="checkbox" name="tanda[]" id="sistolik" value="Nadi <100/m">Frek. Nadi <100/m
            </label>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="checkbox">
            <label>
              <input type="checkbox" name="tanda[]" id="apnu" value="Apnu">Apnu
            </label>
          </div>
        </div>
        <div class="col-sm-2">
          <div class="checkbox">
            <label>
              <input type="checkbox" name="tanda[]" id="Pus" value="Pus">Pus
            </label>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-2">
          <div class="checkbox">
            <label>
              <input type="checkbox" name="tanda[]" id="Letargi" value="Letargi">Letargi
            </label>
          </div>
        </div>
        <div class="col-sm-2">
          <div class="checkbox">
            <label>
              <input type="checkbox" name="tanda[]" id="Muntah" value="Muntah">Muntah
            </label>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="checkbox">
            <label>
              <input type="checkbox" name="tanda[]" id="Anyang-anyangan" value="Anyang-anyangan">Anyang-anyangan
            </label>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="checkbox">
            <label>
              <input type="checkbox" name="tanda[]" id="Nyeri-Supra-Publik" value="Nyeri Supra Publik">Nyeri Supra Publik
            </label>
          </div>
        </div>
        <div class="col-sm-2">
          <div class="checkbox">
            <label>
              <input type="checkbox" name="tanda[]" id="Nyeri-Berkemih" value="Nyeri Berkemih">Nyeri Berkemih
              <input type="hidden" name="tanda[]" id="" value="" checked>
            </label>
          </div>
        </div>
      </div>
    </div>
</div> <!-- /.form-group --><br>