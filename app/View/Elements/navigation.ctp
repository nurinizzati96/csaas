  
<?php if($current_user['status'] == 'Active'):?>
<div class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
		  
			
			<a class="navbar-brand" href="#"><?php echo $this->Html->image(
			'lg.png', array(
			'alt' => 'Logo',
			'width'=>'100px'));	?></a>
			</div>
			<div class="collapse navbar-collapse">
			<ul class="nav navbar-nav">
			
            <li>
			<?php echo $this->Html->link('<i class="fa fa-home" aria-hidden="true"></i> ' .__('Anjung'), 
							array('controller' => 'pages', 'action' => 'dashboard'),
							array('escape' => false)); 
			?>
			</li>
			<?php endif; ?>
				
			<?php if ($current_user['role'] == 'Administrator' || $current_user['role'] == 'Moderator'): ?>
			<li>
			<?php echo $this->Html->link('<i class="fa fa-user" aria-hidden="true"></i> ' .__('Pengguna'), 
							array('controller' => 'users/find', 'action' => 'index'),
							array('escape' => false)); 
			?>
			</li>
			
			
			<li>
			<?php echo $this->Html->link('<i class="fa fa-users" aria-hidden="true"></i> ' .__('Persatuan'), 
							array('controller' => 'persatuans/find', 'action' => 'index'),
							array('escape' => false)); 
			?>
			</li>
			<?php endif; ?>
			<?php if($current_user['status'] == 'Active'):?>
			<li>
			<?php echo $this->Html->link('<i class="fa fa-file-text" aria-hidden="true"></i> ' .__('Permohonan'), 
							array('controller' => 'permohonans/find', 'action' => 'index'),
							array('escape' => false)); 
			?>
			</li>
			
            <li>
			<?php echo $this->Html->link('<i class="fa fa-arrow-circle-right" aria-hidden="true"></i> ' .__('Log Keluar'), 
				array('controller' => 'users', 'action' => 'Logout'),
							array('escape' => false)); 
			?>
			</li>
			<?php endif; ?>
          </ul>

        </div><!--/.nav-collapse -->
      </div>
    </div>

	