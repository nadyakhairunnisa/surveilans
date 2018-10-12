    <script src="<?php echo base_url("assets/js/hightcharts/jquery-3.1.1.min.js") ?>"></script>
    <script src="<?php echo base_url("assets/js/hightcharts/highcharts.js") ?>"></script>
    <script src="<?php echo base_url("assets/js/hightcharts/data.js") ?>"></script>
    <script src="<?php echo base_url("assets/js/hightcharts/drilldown.js") ?>"></script>
    <script src="<?php echo base_url("assets/js/hightcharts/exporting.js") ?>"></script>
    <script src="https://code.highcharts.com/highcharts.js"></script>



     <div class=" col-md-6">
  <div id="grafikdua"></div>
  <script type="text/javascript">
   
    Highcharts.chart('grafikdua', {
      chart: 
      {
        type: 'column'
      },
      title: {
        text: 'Grafik Jumlah Pasien perBulan'
      },
      xAxis:
      {
        type: 'category'
      },
      yAxis:{
        title:{
          text: 'Jumlah Pasien KLB'
        }

      },
      legend: 
      {
        enabled: true
      },
      plotOptions:
      {
        series: 
        {
          borderWidth: 0,
          dataLabels: {
            enabled: true,
            format: '{point.y:1f}'
          }
        }
      },

      tooltip: 
      {
        headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
        pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y:1f} </b><br/>'
      },

      series: 
      [{


        name: 'Jumlah Penderita',
        colorByPoint: true,
        data: 
        [
        <?php foreach ($penyakit as $key => $value): ?>
        {
          name:'<?php echo $value['nama_penyakit']; ?>',
          y:<?php echo $value['jumlah_pasien_bulan'] ?>
        },
      <?php endforeach ?>
      ]
    }],
  });

  </script>

</div>



<div class="col-md-6">
    <div id="grafikbaru"></div>
    <script type="text/javascript">
      $(function () {
        Highcharts.chart('grafikbaru', {
          chart: {
            type: 'column'
          },
          title: {
            text: 'Jumlah Penyakit Perkecamatan PerBulan'
          },
          subtitle: {
            text: 'Source: WorldClimate.com'
          },
          xAxis: {
            categories: [
            <?php foreach ($kecamatan_terjadi as $key => $value): ?>
            '<?php echo $value ?>',
          <?php endforeach ?>
          ],
          crosshair: true
        },
        yAxis: {
          min: 0,
          title: {
            text: 'Jumlah Pasien'
          }
        },
        tooltip: {
          headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
          pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
          '<td style="padding:0"><b>{point.y:.1f}</b></td></tr>',
         
          footerFormat: '</table>',
          shared: true,
          useHTML: true
        },
        plotOptions: {
          column: {
            pointPadding: 0.2,
            borderWidth: 0
          }

        },
        series: [
        <?php foreach ($penyakit_terjadi as $id_penyakit => $nama_penyakit): ?>
          {
            name: '<?php echo $nama_penyakit ?>',
            data: [
              <?php foreach ($kecamatan_terjadi as $id_kecamatan => $nama_kecamatan): ?>
                  <?php echo $jumlah_pasien[$id_penyakit][$id_kecamatan] ?>,
              <?php endforeach ?>
            ]

          },
        <?php endforeach ?>
        ]
      });
      });
    </script>
  </div>