<!-- BAR CHART -->
<div class="box box-chart">
  <div class="box-header with-border">
    <h3 class="box-title">Pratinjau Grafik Pemasangan Kateter V Perifer</h3>

    <div class="box-tools pull-right">
      <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
      </button>
      <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
    </div>
  </div>
  <div class="box-body chart-responsive">
    <div class="chart" id="bar-chart" style="height: 300px;"></div>
  </div>
  <!-- /.box-body -->

  <div class="box-footer clearfix">
    <!-- <a href="javascript:void(0)" class="btn btn-sm btn-info btn-flat pull-left">Place New Order</a> -->
    <a href="index-detail.html" class="btn btn-sm btn-default btn-flat pull-right">Unduh Laporan (.xls)</a>
  </div>
  <!-- /.box-footer -->

</div>
<!-- /.box -->

<script>
  $(function () {
    "use strict";

      $(".box-chart").boxWidget();
      
      //BAR CHART
      var bar = new Morris.Bar({
        element: 'bar-chart',
        resize: true,
        data: [
        {y: 'ICU', a: 100, b: 90, c: 100, d: 90},
        {y: 'Pav.Melati', a: 75, b: 65, c: 100, d: 90},
        {y: 'Anyelir', a: 50, b: 40, c: 100, d: 90},
        {y: 'Pav.Mawar', a: 75, b: 65, c: 100, d: 90},
        {y: 'Dahlia', a: 100, b: 90, c: 100, d: 90}
        ],
        barColors: ['#00a65a', '#f56954', '#00a65a', '#f56954'],
        xkey: 'y',
        ykeys: ['a', 'b', 'c', 'd'],
        labels: ['Jml. Pasien Terpasang', 'Jml. Infeksi (Plehibitis)', 'Lama Hari Terpasang', 'Rate MIL (%0)'],
        hideHover: 'auto'
      });
    });
</script>