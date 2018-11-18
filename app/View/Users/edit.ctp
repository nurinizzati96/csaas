<div class="users form">

	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Edit Akaun'); ?></h1>
			</div>
		</div>
	</div>



	<div class="row">

		<div class="col-md-6">
<div class="panel panel-default">
  <div class="panel-heading"><?php echo __('Edit Akaun'); ?></div>
  <div class="panel-body">
			<?php echo $this->Form->create('User', array('type' => 'file')); ?>

				<div class="form-group">
					<?php echo $this->Form->input('id', array('class' => 'form-control', 'placeholder' => 'Id'));?>
				</div>
				<div class="form-group">
		<?php echo $this->Form->input('User.avatar', array(
'class' => 'form-control',
'label' => 'Gambar Profil', 
'type' => 'file'));
?>
</div>
				<div class="form-group">
					<?php echo $this->Form->input('avatar_dir', array('class' => 'form-control', 'placeholder' => 'Avatar Dir','type'=>'hidden'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('avatar_type', array('class' => 'form-control', 'placeholder' => 'Avatar Type','type'=>'hidden'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('avatar_size', array('class' => 'form-control', 'placeholder' => 'Avatar Size','type'=>'hidden'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('username', array('class' => 'form-control', 'placeholder' => 'Nama Pengguna', 'label' => 'Nama Pengguna' ));?>
				</div>
				
				
				<div class="form-group">
					<?php echo $this->Form->input('nama_penuh', array('class' => 'form-control', 'placeholder' => 'Nama Penuh'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('email', array('class' => 'form-control', 'placeholder' => 'Email', 'label' => 'Email'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('phone', array('class' => 'form-control', 'placeholder' => 'No Tel', 'label' => 'No Tel'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('role', array('class' => 'form-control', 'placeholder' => 'Role'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('status', array('class' => 'form-control', 'placeholder' => 'Status'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('jawatan', array('class' => 'form-control', 'placeholder' => 'Jawatan'));?>
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

																<?php echo $this->Form->postLink(__('<i class="fa fa-trash-o" aria-hidden="true"></i>&nbsp;&nbsp;Padam'), array('action' => 'delete', $this->Form->value('User.id')), array('class'=>'btn btn-danger btn-block', 'escape' => false), __('Anda Pasti untuk memadam akaun # %s?', $this->Form->value('User.id'))); ?>																</div>
					</div>
				</div>			
		</div><!-- end col md 4-->
	</div><!-- end row -->
</div>
