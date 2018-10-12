<!-- Modal -->
    <div class="modal fade" id="editModal-<?php echo $index; ?>" role="dialog">
      <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Bundles Kepatuhan Surveilans Phlebitis</h4>
          </div>
          <div class="modal-body">

            <table class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>Lakukan Kebersihan Tangan Sebelum dan Sesudah Pemasangan</th>
                  <th>Melepas Pemasangan Apabila Ada Keluhan/Peradangan</th>
                  <th>Lakukan Pengecekan Balutan Pemasangan (Drayssing)</th>
                  <th>Melepas Pemasangan Apabila Lebih dari 72 Jam</th>
                  <th>Lakukan Pengecekan Tempat Pemasangan</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td><?php echo $row2['bundles_kebersihan']; ?></td>
                  <td><?php echo $row2['bundles_lepas_bykeluhan']; ?></td>
                  <td><?php echo $row2['bundles_cek_balutan']; ?></td>
                  <td><?php echo $row2['bundles_lepas_bywaktu']; ?></td>
                  <td><?php echo $row2['bundles_cek_tempat']; ?></td>
                </tr>
              </tbody>
            </table>

          </div>
          <!-- /.Modal-body -->
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
        </div>
        <!-- /.Modal-content -->
      </div>
      <!-- /.Modal-dialog -->
    </div>
    <!-- /.Modal -->