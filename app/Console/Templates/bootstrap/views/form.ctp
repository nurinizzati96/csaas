<?php
/**
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       Cake.Console.Templates.default.views
 * @since         CakePHP(tm) v 1.2.0.5234
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
?>
<div class="<?php echo $pluralVar; ?> form">

	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php printf("<?php echo __('%s %s'); ?>", Inflector::humanize($action), $singularHumanName); ?></h1>
			</div>
		</div>
	</div>



	<div class="row">

		<div class="col-md-8">
<div class="panel panel-default">
  <div class="panel-heading"><?php printf("<?php echo __('%s %s'); ?>", Inflector::humanize($action), $singularHumanName); ?></div>
  <div class="panel-body">
<?php 		echo "\t\t\t<?php echo \$this->Form->create('{$modelClass}', array('role' => 'form')); ?>\n\n"; ?>
<?php
		foreach ($fields as $field) {
			if (strpos($action, 'add') !== false && $field == $primaryKey) {
				continue;
			} elseif (!in_array($field, array('created', 'modified', 'updated'))) {
				echo "\t\t\t\t<div class=\"form-group\">\n";
				echo "\t\t\t\t\t<?php echo \$this->Form->input('{$field}', array('class' => 'form-control', 'placeholder' => '".Inflector::humanize($field)."'));?>\n";
				echo "\t\t\t\t</div>\n";
			}
		}
		if (!empty($associations['hasAndBelongsToMany'])) {
			foreach ($associations['hasAndBelongsToMany'] as $assocName => $assocData) {
				echo "\t\t\t\t<div class=\"form-group\">\n";
				echo "\t\t\t\t\t<?php echo \$this->Form->input('{$assocName}', array('class' => 'form-control', 'placeholder' => '".Inflector::humanize($field)."'));?>\n";
				echo "\t\t\t\t</div>\n";
			}
		}
?>

  </div>
</div>

		</div><!-- end col md 8 -->
		<div class="col-md-4">
		
<div class="panel panel-default">
  <div class="panel-heading">Actions</div>
  <div class="panel-body">
  <div class="btn-group btn-group-justified" role="group" aria-label="...">
    <div class="btn-group" role="group">
<?php
				
				echo "\t\t\t\t\t<?php echo \$this->Form->button(__('<i class=\"fa fa-check\" aria-hidden=\"true\"></i>&nbsp;&nbsp;Submit'), array('class' => 'btn btn-success btn-block')); ?>\n";
?>
</div>
  <div class="btn-group" role="group">
<?php
				echo "\t\t\t\t\t<?php echo \$this->Html->link(__('<i class=\"fa fa-times\" aria-hidden=\"true\"></i>&nbsp;&nbsp;Cancel'), array('action' => 'index'), array('class' => 'btn btn-warning btn-block', 'escape' => false)); ?>\n";
					
				
			echo "\t\t\t<?php echo \$this->Form->end() ?>\n\n";

?>
</div>
	</div>
  </div>
</div>		
		
		
			<div class="actions">
				<div class="panel panel-default">
					<div class="panel-heading">Quick Access</div>
						<div class="panel-body">

							<?php if (strpos($action, 'add') === false): ?>
									<?php echo "<?php echo \$this->Form->postLink(__('<i class=\"fa fa-trash-o\" aria-hidden=\"true\"></i>&nbsp;&nbsp;Delete'), array('action' => 'delete', \$this->Form->value('{$modelClass}.{$primaryKey}')), array('class'=>'btn btn-danger btn-block', 'escape' => false), __('Are you sure you want to delete # %s?', \$this->Form->value('{$modelClass}.{$primaryKey}'))); ?>"; ?>
							<?php endif; ?>
									<?php echo "<?php echo \$this->Html->link(__('<span class=\"glyphicon glyphicon-list\"></span>&nbsp;&nbsp;List " . $pluralHumanName . "'), array('action' => 'index'), array('class'=>'btn btn-warning btn-block', 'escape' => false)); ?>"; ?>
							<?php
									$done = array();
									foreach ($associations as $type => $data) {
										foreach ($data as $alias => $details) {
											if ($details['controller'] != $this->name && !in_array($details['controller'], $done)) {
												echo "\t\t<?php echo \$this->Html->link(__('<i class=\"fa fa-list\" aria-hidden=\"true\"></i>&nbsp;&nbsp;List " . Inflector::humanize($details['controller']) . "'), array('controller' => '{$details['controller']}', 'action' => 'index'), array('class'=>'btn btn-warning btn-block', 'escape' => false)); ?> \n";
												echo "\t\t<?php echo \$this->Html->link(__('<i class=\"fa fa-plus\" aria-hidden=\"true\"></i>&nbsp;&nbsp;New " . Inflector::humanize(Inflector::underscore($alias)) . "'), array('controller' => '{$details['controller']}', 'action' => 'add'), array('class'=>'btn btn-primary btn-block', 'escape' => false)); ?> \n";
												$done[] = $details['controller'];
											}
										}
									}
							?>
						</div>
					</div>
				</div>			
		</div><!-- end col md 4-->
	</div><!-- end row -->
</div>
