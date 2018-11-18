<div class="persatuans form">

	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Edit Persatuan'); ?></h1>
			</div>
		</div>
	</div>



	<div class="row">

		<div class="col-md-8">
<div class="panel panel-default">
  <div class="panel-heading"><?php echo __('Edit Persatuan'); ?></div>
  <div class="panel-body">
			<?php echo $this->Form->create('Persatuan', array('role' => 'form')); ?>

				<div class="form-group">
					<?php echo $this->Form->input('id', array('class' => 'form-control', 'placeholder' => 'Id'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('kod', array('class' => 'form-control', 'placeholder' => 'Kod'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('nama', array('class' => 'form-control', 'placeholder' => 'Nama'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('penasihat', array('class' => 'form-control', 'placeholder' => 'Penasihat'));?>
				</div>

  </div>
</div>

		</div><!-- end col md 8 -->
		<div class="col-md-4">
		
<div class="panel panel-default">
  <div class="panel-heading">Actions</div>
  <div class="panel-body">
  <div class="btn-group btn-group-justified" role="group" aria-label="...">
    <div class="btn-group" role="group">
					<?php echo $this->Form->button(__('<i class="fa fa-check" aria-hidden="true"></i>&nbsp;&nbsp;Submit'), array('class' => 'btn btn-success btn-block')); ?>
</div>
  <div class="btn-group" role="group">
					<?php echo $this->Html->link(__('<i class="fa fa-times" aria-hidden="true"></i>&nbsp;&nbsp;Cancel'), array('action' => 'index'), array('class' => 'btn btn-warning btn-block', 'escape' => false)); ?>
			<?php echo $this->Form->end() ?>

</div>
	</div>
  </div>
</div>		
		
		
			<div class="actions">
				<div class="panel panel-default">
					<div class="panel-heading">Quick Access</div>
						<div class="panel-body">

																<?php echo $this->Form->postLink(__('<i class="fa fa-trash-o" aria-hidden="true"></i>&nbsp;&nbsp;Delete'), array('action' => 'delete', $this->Form->value('Persatuan.id')), array('class'=>'btn btn-danger btn-block', 'escape' => false), __('Are you sure you want to delete # %s?', $this->Form->value('Persatuan.id'))); ?>																<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;List Persatuans'), array('action' => 'index'), array('class'=>'btn btn-warning btn-block', 'escape' => false)); ?>									<?php echo $this->Html->link(__('<i class="fa fa-list" aria-hidden="true"></i>&nbsp;&nbsp;List Permohonans'), array('controller' => 'permohonans', 'action' => 'index'), array('class'=>'btn btn-warning btn-block', 'escape' => false)); ?> 
		<?php echo $this->Html->link(__('<i class="fa fa-plus" aria-hidden="true"></i>&nbsp;&nbsp;New Permohonan'), array('controller' => 'permohonans', 'action' => 'add'), array('class'=>'btn btn-primary btn-block', 'escape' => false)); ?> 
						</div>
					</div>
				</div>			
		</div><!-- end col md 4-->
	</div><!-- end row -->
</div>
