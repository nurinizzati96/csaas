<br>
<div class="col-md-4"></div>
<div class="col-md-4">
<div class="panel panel-default">
    <div class="panel-heading">Log Masuk</div>
        <div class="panel-body">
            <?php echo $this->Form->create('User'); ?>
<fieldset>
    <?php echo $this->Form->input('username', array('class' => 'form-control', 'label' => 'Nama Pengguna')); ?>

    <?php echo $this->Form->input('password', array('class' => 'form-control', 'label' => 'Kata Laluan')); ?>
</fieldset>

<div class="form-group">
<?php echo $this->Html->link(__('Daftar'), 
    array('controller' => 'users', 'action' => 'add'),
    array('class'=>'btn btn-warning',  'escape' => false)); 
?>

<?php echo $this->Form->button(__('Log Masuk'), array(
    'type' => 'submit', 
    'class' => 'btn btn-primary',
    'escape' => false));
?>
<div class="col-md-4"></div>
</div>
</div>
        </div>
</div></div>
