<div class="users form">

	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Daftar Akaun'); ?></h1>
			</div>
		</div>
	</div>



	<div class="row">

		<div class="col-md-8">
<div class="panel panel-default">
  <div class="panel-heading"><?php echo __('Daftar Akaun'); ?></div>
  <div class="panel-body">
			<?php echo $this->Form->create('User', array('role' => 'form')); ?>

				<div class="form-group">
					<?php echo $this->Form->input('username', array('class' => 'form-control','label'=>'Nama Pengguna'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('password', array('class' => 'form-control','label'=>'Kata Laluan'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('nama_penuh', array('class' => 'form-control', 'label'=> 'Nama Penuh'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('email', array('class' => 'form-control', 'placeholder' => 'Email'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('phone', array('class' => 'form-control', 'placeholder' => 'No Telefon'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('jawatan', array('class' => 'form-control', 'empty' => 'pilih jawatan', 'options' => array ('admin' => 'Admin', 'moderator' => 'Moderator', 'student' => 'Student'),));?>
				</div>
				
  </div>
</div>

		</div><!-- end col md 8 -->
		<div class="col-md-4">
		
<div class="panel panel-default">
  <div class="panel-heading">Tindakan</div>
  <div class="panel-body">
  <div class="btn-group btn-group-justified" role="group" aria-label="...">
    <div class="btn-group" role="group">
					<?php echo $this->Form->button(__('<i class="fa fa-check" aria-hidden="true"></i>&nbsp;&nbsp;Hantar'), array('class' => 'btn btn-success btn-block')); ?>
</div>
  <div class="btn-group" role="group">
					<?php echo $this->Html->link(__('<i class="fa fa-times" aria-hidden="true"></i>&nbsp;&nbsp;Batal'), array('action' => 'index'), array('class' => 'btn btn-warning btn-block', 'escape' => false)); ?>
			<?php echo $this->Form->end() ?>

</div>
	</div>
  </div>
</div>		
		
		
			<div class="actions">
				<div class="panel panel-default">
					<div class="panel-heading">Pintasan</div>
						<div class="panel-body">

																<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;Senarai Pengguna'), array('action' => 'index'), array('class'=>'btn btn-warning btn-block', 'escape' => false)); ?>													</div>
					</div>
				</div>			
		</div><!-- end col md 4-->
	</div><!-- end row -->
</div>
