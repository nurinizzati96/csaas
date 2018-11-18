<div class="users index">

	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Senarai Pengguna'); ?></h1>
			</div>
		</div><!-- end col md 12 -->
	</div><!-- end row -->

	<div class="row">

		<div class="col-md-8">
		
<div class="panel panel-default">
  <div class="panel-heading">Isi Kandungan</div>
  <div class="panel-body">
<table cellpadding="0" cellspacing="0" class="table table-striped">
				<thead>
					<tr>
						<th><?php echo $this->Paginator->sort('id'); ?></th>
						<th><?php echo $this->Paginator->sort('nama pengguna'); ?></th>
						
						<th><?php echo $this->Paginator->sort('nama_penuh'); ?></th>
						
					
						<th class="actions"></th>
					</tr>
				</thead>
				<tbody>
				<?php foreach ($users as $user): ?>
					<tr>
						<td><?php echo h($user['User']['id']); ?>&nbsp;</td>
						<td><?php echo h($user['User']['username']); ?>&nbsp;</td>
						
						<td><?php echo h($user['User']['nama_penuh']); ?>&nbsp;</td>
						
						
						<td class="actions">
							<?php echo $this->Html->link('<i class="fa fa-folder-open-o" aria-hidden="true"></i>', array('action' => 'view', $user['User']['id']), array('class'=>'btn btn-success btn-xs', 'escape' => false)); ?>
							<?php echo $this->Html->link('<i class="fa fa-pencil-square-o" aria-hidden="true"></i>', array('action' => 'edit', $user['User']['id']), array('class'=>'btn btn-warning btn-xs', 'escape' => false)); ?>
							<?php echo $this->Form->postLink('<i class="fa fa-trash-o" aria-hidden="true"></i>', array('action' => 'delete', $user['User']['id']), array('class'=>'btn btn-danger btn-xs', 'escape' => false), __('Are you sure you want to delete # %s?', $user['User']['id'])); ?>
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
					<div class="panel-heading">Tindakan</div>
						<div class="panel-body">
							
								<?php echo $this->Html->link(__('<i class="fa fa-plus" aria-hidden="true"></i>&nbsp;&nbsp;Akaun Baru'), array('action' => 'add'), array('class'=>'btn btn-primary btn-block', 'escape' => false)); ?> 
		
								 								
						</div><!-- end body -->
				</div><!-- end panel -->
			</div><!-- end actions -->
		</div><!-- end col md 4 -->
		
	</div><!-- end row -->


</div><!-- end containing of content -->
