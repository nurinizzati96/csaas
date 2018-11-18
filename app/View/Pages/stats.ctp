<div class="users index">

	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Users'); ?></h1>
			</div>
		</div><!-- end col md 12 -->
	</div><!-- end row -->



	<div class="row">

		<div class="col-md-8">
		
<div class="panel panel-default">
  <div class="panel-heading">Kandungan</div>
  <div class="panel-body">
Jumlah Role: <?php echo $jumlah_role; ?><br>
Jumlah Administrator: <?php echo $jumlah_administrator; ?><br>
Jumlah Staff: <?php echo $jumlah_staff; ?><br>
Jumlah Student: <?php echo $jumlah_student; ?><br><br>

Jumlah Active: <?php echo $jumlah_active; ?><br>
Jumlah Inactive: <?php echo $jumlah_inactive; ?><br><br>

Jumlah Lelaki di Johor: <?php echo $jumlah_active_student; ?>

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
		  ["Jumlah Student", <?php echo json_encode($jumlah_student); ?>]
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
		
			

		</div> <!-- end col md 8 -->
		
		<div class="col-md-4">
			<div class="actions">
				<div class="panel panel-default">
					<div class="panel-heading">Actions</div>
						<div class="panel-body">
							
								<?php echo $this->Html->link(__('<i class="fa fa-plus" aria-hidden="true"></i>&nbsp;&nbsp;New User'), array('action' => 'add'), array('class'=>'btn btn-primary btn-block', 'escape' => false)); ?>			
<?php echo $this->Html->link(__('<i class="fa fa-plus" aria-hidden="true"></i>&nbsp;&nbsp;Stats'), array('action' => 'stats'), array('class'=>'btn btn-default btn-block', 'escape' => false)); ?>										
						</div><!-- end body -->
				</div><!-- end panel -->
			</div><!-- end actions -->
		</div><!-- end col md 4 -->
		
	</div><!-- end row -->


</div><!-- end containing of content -->