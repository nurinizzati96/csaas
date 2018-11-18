<div class="users view">
	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Maklumat Pengguna'); ?></h1>
			</div>
		</div>
	</div>
	
	
 
  
	

	<div><!--START-->
	<div class="row">
		<div class="col-md-6">	
<div class="panel panel-default">
  <div class="panel-heading">Maklumat Pengguna</div>
  <div class="panel-body">
<table cellpadding="0" cellspacing="0" class="table table-striped">
				<tbody>
				<tr>
<th><?php echo __('Gambar Profil'); ?></th>
    <td>
        <?php echo $this->Html->image('../files/avatar/' . $user['User']['avatar_dir'] . '/' . $user['User']['avatar'], 
            array(
                'alt' => 'Gambar Profil', 
                'width'=>'150px', 
                'height'=>'150px',
				'class'=>'img-circle')); 
        ?>
    </td>
</tr>


		<th><?php echo __('Id'); ?></th>
		<td>
			<?php echo h($user['User']['id']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Nama Pengguna'); ?></th>
		<td>
			<?php echo h($user['User']['username']); ?>
			&nbsp;
		</td>
</tr>

<tr>
		<th><?php echo __('Nama Penuh'); ?></th>
		<td>
			<?php echo h($user['User']['nama_penuh']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('E-mel'); ?></th>
		<td>
			<?php echo h($user['User']['email']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('No Tel'); ?></th>
		<td>
			<?php echo h($user['User']['phone']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Role'); ?></th>
		<td>
			<?php echo h($user['User']['role']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Status'); ?></th>
		<td>
			<?php echo h($user['User']['status']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Jawatan'); ?></th>
		<td>
			<?php echo h($user['User']['jawatan']); ?>
			&nbsp;
		</td>
</tr>



				</tbody>
			</table>
  </div>
		</div>
		</div>
		<div class="col-md-6">	
<div class="panel panel-default">
  <div class="panel-heading">Maklumat Pengguna</div>
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
					<?php echo $this->Form->input('email', array('class' => 'form-control', 'placeholder' => 'E-mel', 'label' => 'E-mel'));?>
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
		</div>
	</div>
	</div><!--END-->
</div>

	