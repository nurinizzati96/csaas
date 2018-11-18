<div class="persatuans index">

	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Persatuan'); ?></h1>
			</div>
		</div><!-- end col md 12 -->
	</div><!-- end row -->



	<div class="row">

		<div class="col-md-8">
		
<div class="panel panel-default">
  <div class="panel-heading">Content</div>
  <div class="panel-body">
<table cellpadding="0" cellspacing="0" class="table table-striped">
				<thead>
					<tr>
						<th><?php echo $this->Paginator->sort('id'); ?></th>
						<th><?php echo $this->Paginator->sort('kod'); ?></th>
						<th><?php echo $this->Paginator->sort('nama'); ?></th>
						<th><?php echo $this->Paginator->sort('penasihat'); ?></th>
						
						<th class="actions"></th>
					</tr>
				</thead>
				<tbody>
				<?php foreach ($persatuans as $persatuan): ?>
					<tr>
						<td><?php echo h($persatuan['Persatuan']['id']); ?>&nbsp;</td>
						<td><?php echo h($persatuan['Persatuan']['kod']); ?>&nbsp;</td>
						<td><?php echo h($persatuan['Persatuan']['nama']); ?>&nbsp;</td>
						<td><?php echo h($persatuan['Persatuan']['penasihat']); ?>&nbsp;</td>
						
						<td class="actions">
							<?php echo $this->Html->link('<i class="fa fa-folder-open-o" aria-hidden="true"></i>', array('action' => 'view', $persatuan['Persatuan']['id']), array('class'=>'btn btn-success btn-xs', 'escape' => false)); ?>
							<?php echo $this->Html->link('<i class="fa fa-pencil-square-o" aria-hidden="true"></i>', array('action' => 'edit', $persatuan['Persatuan']['id']), array('class'=>'btn btn-warning btn-xs', 'escape' => false)); ?>
							<?php echo $this->Form->postLink('<i class="fa fa-trash-o" aria-hidden="true"></i>', array('action' => 'delete', $persatuan['Persatuan']['id']), array('class'=>'btn btn-danger btn-xs', 'escape' => false), __('Are you sure you want to delete # %s?', $persatuan['Persatuan']['id'])); ?>
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
							
								<?php echo $this->Html->link(__('<i class="fa fa-plus" aria-hidden="true"></i>&nbsp;&nbsp;Daftar Persatuan'), array('action' => 'add'), array('class'=>'btn btn-primary btn-block', 'escape' => false)); ?>								<?php echo $this->Html->link(__('<i class="fa fa-list" aria-hidden="true"></i>&nbsp;&nbsp;Senarai Permohonan'), array('controller' => 'permohonans', 'action' => 'index'), array('class'=>'btn btn-warning btn-block', 'escape' => false)); ?> 
		<?php echo $this->Html->link(__('<i class="fa fa-plus" aria-hidden="true"></i>&nbsp;&nbsp;Permohonan Baru'), array('controller' => 'permohonans', 'action' => 'add'), array('class'=>'btn btn-primary btn-block', 'escape' => false)); ?> 
		
		<?php echo $this->Html->link(__('<i class="fa fa-plus" aria-hidden="true"></i>&nbsp;&nbsp;Senarai Pengguna'), array('controller' => 'users', 'action' => 'index'), array('class'=>'btn btn-primary btn-block', 'escape' => false)); ?> 
							
						</div><!-- end body -->
				</div><!-- end panel -->
			</div><!-- end actions -->
		</div><!-- end col md 4 -->
		
	</div><!-- end row -->


</div><!-- end containing of content -->