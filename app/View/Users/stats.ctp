<div class="users index">

	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Statistik'); ?></h1>
			</div>
		</div><!-- end col md 12 -->
	</div><!-- end row -->



	<div class="row">

		<div class="col-md-12">
		
<div class="panel panel-default">
  <div class="panel-heading">Kandungan</div>
  <div class="panel-body">
Jumlah "Role": <?php echo $jumlah_role; ?><br>
Jumlah "Administrator": <?php echo $jumlah_administrator; ?><br>
Jumlah Staff: <?php echo $jumlah_staff; ?><br>
Jumlah Pelajar: <?php echo $jumlah_student; ?><br><br>

Jumlah Pengguna Aktif: <?php echo $jumlah_active; ?><br>
Jumlah Pengguna Tidak Aktif: <?php echo $jumlah_inactive; ?><br><br>

Jumlah Pelajar : <?php echo $jumlah_active_student; ?>

<!--Load the AJAX API-->
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">

      google.charts.load('current', {'packages':['corechart']});

      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Bilangan');
        data.addColumn('number', 'Respon');
		
		
		
        data.addRows([
          ["Jumlah Administrator", <?php echo json_encode($jumlah_administrator); ?>],
          ["Jumlah Staff", <?php echo json_encode($jumlah_staff); ?>],
		  ["Jumlah Pelajar", <?php echo json_encode($jumlah_student); ?>]
        ]);


      var options = {
        chart: {
          title: 'Role',
   
		  
        },
        vAxis: {
          title: 'Bil'
        },
		legend: 'none',
      };

        var chart = new google.visualization.ColumnChart(document.getElementById('chart_div0'));
        chart.draw(data, options);
      }
    </script>



    <div id="chart_div0"></div>



  </div>
</div>	
		
			

		</div> <!-- end col md 12 -->
										
						</div><!-- end body -->
				</div><!-- end panel -->
			</div><!-- end actions -->
		</div><!-- end col md 4 -->
		
	</div><!-- end row -->


</div><!-- end containing of content -->