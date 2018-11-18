<div class="permohonans index">

	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Permohonan'); ?></h1>
			</div>
		</div><!-- end col md 12 -->
	</div><!-- end row -->
	
	<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">			
  <div class="panel panel-default">
    <div class="panel-heading" role="button" id="headingOne">
	<role="button" data-toggle="collapse" data-parent="#accordion" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
      <h4 class="panel-title">
          Carian
      </h4>
    </div>
    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
      <div class="panel-body">
    <?php echo $this->Form->create(); ?> 
<?php echo $this->Form->input('fullname', array(
    'class' => 'form-control', 
    'placeholder' => 'Nama Aktiviti', 
    'label' => 'Nama Aktiviti')); ?> 
           

<br>

<?php
    echo $this->Form->button('<i class="glyphicon glyphicon-search"></i> Search', array(
    'type' => 'submit',
    'class' => 'btn btn-success',
    'escape' => false
)); ?>

<?php echo $this->Form->end(); ?>  

  </div>
</div>  
  </div>
  </div>



	<div class="row">

		<div class="col-md-8">
		
<div class="panel panel-default">
  <div class="panel-heading">Content</div>
  <div class="panel-body">
  
<table cellpadding="0" cellspacing="0" class="table table-striped">
				<thead>
					<tr>
						<th><?php echo $this->Paginator->sort('id'); ?></th>
						<th><?php echo $this->Paginator->sort('no_daftar'); ?></th>
						
					
						<th><?php echo $this->Paginator->sort('nama_aktiviti'); ?></th>
						
						<th><?php echo $this->Paginator->sort('ketua_projek'); ?></th>
						
						<th><?php echo $this->Paginator->sort('nama_penasihat_persatuan'); ?></th>
						<th><?php echo $this->Paginator->sort('tel_penasihat'); ?></th>
						
						<th class="actions"></th>
					</tr>
				</thead>
				<tbody>
				<?php foreach ($permohonans as $permohonan): ?>
					<tr>
						<td><?php echo h($permohonan['Permohonan']['id']); ?>&nbsp;</td>
						<td><?php echo h($permohonan['Permohonan']['no_daftar']); ?>&nbsp;</td>
						
								
						<td><?php echo h($permohonan['Permohonan']['nama_aktiviti']); ?>&nbsp;</td>
					
						<td><?php echo h($permohonan['Permohonan']['ketua_projek']); ?>&nbsp;</td>
						
						<td><?php echo h($permohonan['Permohonan']['nama_penasihat_persatuan']); ?>&nbsp;</td>
						<td><?php echo h($permohonan['Permohonan']['tel_penasihat']); ?>&nbsp;</td>
					
					
			
						
						<td class="actions">
							<?php echo $this->Html->link('<i class="fa fa-folder-open-o" aria-hidden="true"></i>', array('action' => 'view', $permohonan['Permohonan']['id']), array('class'=>'btn btn-success btn-xs', 'escape' => false)); ?>
							<?php echo $this->Html->link('<i class="fa fa-pencil-square-o" aria-hidden="true"></i>', array('action' => 'edit', $permohonan['Permohonan']['id']), array('class'=>'btn btn-warning btn-xs', 'escape' => false)); ?>
							<?php echo $this->Form->postLink('<i class="fa fa-trash-o" aria-hidden="true"></i>', array('action' => 'delete', $permohonan['Permohonan']['id']), array('class'=>'btn btn-danger btn-xs', 'escape' => false), __('Are you sure you want to delete # %s?', $permohonan['Permohonan']['id'])); ?>
						</td>
					</tr>
				<?php endforeach; ?>
				</tbody>
			</table>

			<p>
				<small><?php echo $this->Paginator->counter(array('format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')));?></small>
			</p>

			<?php
			$params = $this->Paginator->params();
			if ($params['pageCount'] > 1) {
			?>
			<ul class="pagination pagination-sm">
				<?php
					echo $this->Paginator->prev('&larr; Previous', array('class' => 'prev','tag' => 'li','escape' => false), '<a onclick="return false;">&larr; Previous</a>', array('class' => 'prev disabled','tag' => 'li','escape' => false));
					echo $this->Paginator->numbers(array('separator' => '','tag' => 'li','currentClass' => 'active','currentTag' => 'a'));
					echo $this->Paginator->next('Next &rarr;', array('class' => 'next','tag' => 'li','escape' => false), '<a onclick="return false;">Next &rarr;</a>', array('class' => 'next disabled','tag' => 'li','escape' => false));
				?>
			</ul>
			<?php } ?>
  </div>
</div>	
		
			

		</div> <!-- end col md 8 -->
		
		<div class="col-md-4">
			<div class="actions">
				<div class="panel panel-default">
					<div class="panel-heading">Actions</div>
						<div class="panel-body">
							
								<?php echo $this->Html->link(__('<i class="fa fa-plus" aria-hidden="true"></i>&nbsp;&nbsp;Permohonan Baru'), array('action' => 'add'), array('class'=>'btn btn-primary btn-block', 'escape' => false)); ?>								<?php echo $this->Html->link(__('<i class="fa fa-list" aria-hidden="true"></i>&nbsp;&nbsp;Senarai Persatuan'), array('controller' => 'persatuans', 'action' => 'index'), array('class'=>'btn btn-warning btn-block', 'escape' => false)); ?> 
		<?php echo $this->Html->link(__('<i class="fa fa-plus" aria-hidden="true"></i>&nbsp;&nbsp; Daftar Persatuan'), array('controller' => 'persatuans', 'action' => 'add'), array('class'=>'btn btn-primary btn-block', 'escape' => false)); ?> 
							
						</div><!-- end body -->
				</div><!-- end panel -->
			</div><!-- end actions -->
		</div><!-- end col md 4 -->
		
	</div><!-- end row -->


</div><!-- end containing of content -->