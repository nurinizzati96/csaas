<div class="permohonans view">
	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Permohonan'); ?></h1>
			</div>
		</div>
	</div>
</div

	<div class="row">
	


		

<div class="col-md-8">	
<div class="panel panel-default">
  <div class="panel-heading"><?php echo __('Permohonan'); ?> Details</div>
  <div class="panel-body">
			<table cellpadding="0" cellspacing="0" class="table table-striped">
				<tbody>
<tr>				
		<th><?php echo __('Id'); ?></th>
		<td>
			<?php echo h($permohonan['Permohonan']['id']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('No Daftar'); ?></th>
		<td>
			<?php echo h($permohonan['Permohonan']['no_daftar']); ?>
			&nbsp;
		</td>
</tr>

<tr>
		<th><?php echo __('Persatuan'); ?></th>
		<td>
			<?php echo $this->Html->link($permohonan['Persatuan']['id'], array('controller' => 'persatuans', 'action' => 'view', $permohonan['Persatuan']['id'])); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Nama Aktiviti'); ?></th>
		<td>
			<?php echo h($permohonan['Permohonan']['nama_aktiviti']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Peringkat Aktiviti'); ?></th>
		<td>
			<?php echo h($permohonan['Permohonan']['peringkat_aktiviti']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Kategori Aktiviti'); ?></th>
		<td>
			<?php echo h($permohonan['Permohonan']['kategori_aktiviti']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Anjuran'); ?></th>
		<td>
			<?php echo h($permohonan['Permohonan']['anjuran']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Tarikh Aktiviti'); ?></th>
		<td>
			<?php echo h($permohonan['Permohonan']['tarikh_aktiviti']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Tempat Aktiviti'); ?></th>
		<td>
			<?php echo h($permohonan['Permohonan']['tempat_aktiviti']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Anggaran Kos'); ?></th>
		<td>
			<?php echo h($permohonan['Permohonan']['anggaran_kos']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('H A 1'); ?></th>
		<td>
			<?php echo h($permohonan['Permohonan']['h_a_1']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('H A 2'); ?></th>
		<td>
			<?php echo h($permohonan['Permohonan']['h_a_2']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('H A 3'); ?></th>
		<td>
			<?php echo h($permohonan['Permohonan']['h_a_3']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('H A 4'); ?></th>
		<td>
			<?php echo h($permohonan['Permohonan']['h_a_4']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('H A 5'); ?></th>
		<td>
			<?php echo h($permohonan['Permohonan']['h_a_5']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('A01'); ?></th>
		<td>
			<?php echo h($permohonan['Permohonan']['a01']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('A02'); ?></th>
		<td>
			<?php echo h($permohonan['Permohonan']['a02']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('A03'); ?></th>
		<td>
			<?php echo h($permohonan['Permohonan']['a03']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('A04'); ?></th>
		<td>
			<?php echo h($permohonan['Permohonan']['a04']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('A05'); ?></th>
		<td>
			<?php echo h($permohonan['Permohonan']['a05']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Ketua Projek'); ?></th>
		<td>
			<?php echo h($permohonan['Permohonan']['ketua_projek']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Jawatan'); ?></th>
		<td>
			<?php echo h($permohonan['Permohonan']['jawatan']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Tel Pelajar'); ?></th>
		<td>
			<?php echo h($permohonan['Permohonan']['tel_pelajar']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Email Pelajar'); ?></th>
		<td>
			<?php echo h($permohonan['Permohonan']['email_pelajar']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Nama Penasihat Persatuan'); ?></th>
		<td>
			<?php echo h($permohonan['Permohonan']['nama_penasihat_persatuan']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Tel Penasihat'); ?></th>
		<td>
			<?php echo h($permohonan['Permohonan']['tel_penasihat']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Bil Lelaki'); ?></th>
		<td>
			<?php echo h($permohonan['Permohonan']['bil_lelaki']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Bil Perempuan'); ?></th>
		<td>
			<?php echo h($permohonan['Permohonan']['bil_perempuan']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Sumber 4'); ?></th>
		<td>
			<?php echo h($permohonan['Permohonan']['sumber_4']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Minum Pagi'); ?></th>
		<td>
			<?php echo h($permohonan['Permohonan']['minum_pagi']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Makan Tengahari'); ?></th>
		<td>
			<?php echo h($permohonan['Permohonan']['makan_tengahari']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Makan Malam'); ?></th>
		<td>
			<?php echo h($permohonan['Permohonan']['makan_malam']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Makan Vip'); ?></th>
		<td>
			<?php echo h($permohonan['Permohonan']['makan_vip']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Jumlah Peserta'); ?></th>
		<td>
			<?php echo h($permohonan['Permohonan']['jumlah_peserta']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Bilangan Hari'); ?></th>
		<td>
			<?php echo h($permohonan['Permohonan']['bilangan_hari']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Bilangan Vip'); ?></th>
		<td>
			<?php echo h($permohonan['Permohonan']['bilangan_vip']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Kos Keseluruhan 2'); ?></th>
		<td>
			<?php echo h($permohonan['Permohonan']['kos_keseluruhan_2']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Kain Rentang'); ?></th>
		<td>
			<?php echo h($permohonan['Permohonan']['kain_rentang']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Laporan'); ?></th>
		<td>
			<?php echo h($permohonan['Permohonan']['laporan']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Kos Keseluruhan 3'); ?></th>
		<td>
			<?php echo h($permohonan['Permohonan']['kos_keseluruhan_3']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Fasilitator Staff'); ?></th>
		<td>
			<?php echo h($permohonan['Permohonan']['fasilitator_staff']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Fasilitator Pelajar'); ?></th>
		<td>
			<?php echo h($permohonan['Permohonan']['fasilitator_pelajar']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Pengadil'); ?></th>
		<td>
			<?php echo h($permohonan['Permohonan']['pengadil']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Pengadil Professional'); ?></th>
		<td>
			<?php echo h($permohonan['Permohonan']['pengadil_professional']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Wang Saku Antarabangsa'); ?></th>
		<td>
			<?php echo h($permohonan['Permohonan']['wang_saku_antarabangsa']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Artis'); ?></th>
		<td>
			<?php echo h($permohonan['Permohonan']['artis']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Nota'); ?></th>
		<td>
			<?php echo h($permohonan['Permohonan']['nota']); ?>
			&nbsp;
		</td>
</tr>
				</tbody>
			</table>
  </div>
</div>
		


		</div><!-- end col md 8 -->
		
		
		<div class="col-md-4">
<div class="panel panel-default">
  <div class="panel-heading">Actions</div>
  <div class="panel-body">
    <div class="btn-group btn-group-justified" role="group" aria-label="...">	
									<?php echo $this->Html->link(__('<i class="fa fa-pencil-square-o" aria-hidden="true"></i>&nbsp&nbsp;Edit Permohonan'), array('action' => 'edit', $permohonan['Permohonan']['id']), array('class'=>'btn btn-default btn-block', 'escape' => false)); ?> 
		<?php echo $this->Form->postLink(__('<i class="fa fa-trash-o" aria-hidden="true"></i>&nbsp;&nbsp;Delete Permohonan'), array('action' => 'delete', $permohonan['Permohonan']['id']), array('class'=>'btn btn-danger btn-block', 'escape' => false), __('Are you sure you want to delete # %s?', $permohonan['Permohonan']['id'])); ?> 
							</div>
  </div>
</div>
</div>
</div>		
		



