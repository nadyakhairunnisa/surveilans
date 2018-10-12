<!-- <form class="form-horizontal" role="form" role="form" method="post" action="process/add-pemasangan-phlebitis.php" align=""> -->

<div class="form-group">
  <label class="control-label col-sm-2">Jenis Pemasangan</label>
  <div class="col-sm-9">
    <div class="row">
      <div class="col-sm-3">
        <label class="radio-inline">
          <input type="radio" name="jenis" id="perifer" value="Kateter V Perifer" checked>Kateter V Perifer
        </label>
      </div>
      <div class="col-sm-3">
        <label class="radio-inline">
          <input type="radio" name="jenis" id="umbilikal" value="Umbilikal">Umbilikal
        </label>
      </div>
      <div class="col-sm-3">
        <label class="radio-inline">
          <input type="radio" name="jenis" id="dlumen" value="Double Lumen">Double Lumen
        </label>
      </div>
    </div>
  </div>
</div> <!-- /.form-group -->

<div class="form-group">
  <label class="control-label col-sm-2">Tujuan Pemasangan</label>
  <div class="col-sm-9">
    <div class="row">
      <div class="col-sm-3">
        <label class="radio-inline">
          <input type="radio" name="tujuan" id="obat" value="Pemberian Obat" checked>Pemberian Obat
        </label>
      </div>
      <div class="col-sm-3">
        <label class="radio-inline">
          <input type="radio" name="tujuan" id="transfusi" value="Transfusi">Transfusi
        </label>
      </div>
      <div class="col-sm-3">
        <label class="radio-inline">
          <input type="radio" name="tujuan" id="nutrisi" value="Nutrisi Parenteral">Nutrisi Parenteral
        </label>
      </div>
      <div class="col-sm-3">
        <label class="radio-inline">
          <input type="radio" name="tujuan" id="terapi" value="Terapi Cairan">Terapi Cairan
        </label>
      </div>
    </div>
  </div>
</div> <!-- /.form-group -->

<div class="form-group">
  <label for="address" class="col-sm-2 control-label">Keterangan</label>
  <div class="col-sm-9">
    <textarea name="keterangan" placeholder="Keterangan Tujuan Pemasangan ..." rows="3" class="form-control"></textarea>
  </div>
</div><br>