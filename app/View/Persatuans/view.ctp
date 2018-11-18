<div class="persatuans view">
	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Persatuan'); ?></h1>
			</div>
		</div>
	</div>

	<div class="row">
	


		

<div class="col-md-8">	
<div class="panel panel-default">
  <div class="panel-heading"><?php echo __('Persatuan'); ?> Details</div>
  <div class="panel-body">
			<table cellpadding="0" cellspacing="0" class="table table-striped">
				<tbody>
				<tr>
		<th><?php echo __('Id'); ?></th>
		<td>
			<?php echo h($persatuan['Persatuan']['id']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Kod'); ?></th>
		<td>
			<?php echo h($persatuan['Persatuan']['kod']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Nama'); ?></th>
		<td>
			<?php echo h($persatuan['Persatuan']['nama']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Penasihat'); ?></th>
		<td>
			<?php echo h($persatuan['Persatuan']['penasihat']); ?>
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
									<?php echo $this->Html->link(__('<i class="fa fa-pencil-square-o" aria-hidden="true"></i>&nbsp&nbsp;Edit Persatuan'), array('action' => 'edit', $persatuan['Persatuan']['id']), array('class'=>'btn btn-default btn-block', 'escape' => false)); ?> 
		<?php echo $this->Form->postLink(__('<i class="fa fa-trash-o" aria-hidden="true"></i>&nbsp;&nbsp;Delete Persatuan'), array('action' => 'delete', $persatuan['Persatuan']['id']), array('class'=>'btn btn-danger btn-block', 'escape' => false), __('Are you sure you want to delete # %s?', $persatuan['Persatuan']['id'])); ?> 
							</div>
  </div>
</div>		
		
			<div class="actions">
				<div class="panel panel-default">
					<div class="panel-heading">Quick Access</div>
						<div class="panel-body">
							
							
									<?php echo $this->Html->link(__('<i class="fa fa-list" aria-hidden="true"></i>&nbsp&nbsp;List Persatuans'), array('action' => 'index'), array('class'=>'btn btn-warning btn-block', 'escape' => false)); ?> 
		<?php echo $this->Html->link(__('<i class="fa fa-plus" aria-hidden="true"></i>&nbsp&nbsp;New Persatuan'), array('action' => 'add'), array('class'=>'btn btn-primary btn-block', 'escape' => false)); ?> 
		<?php echo $this->Html->link(__('<i class="fa fa-list" aria-hidden="true"></i>&nbsp&nbsp;List Permohonans'), array('controller' => 'permohonans', 'action' => 'index'), array('class'=>'btn btn-warning btn-block', 'escape' => false)); ?> 
		<?php echo $this->Html->link(__('<i class="fa fa-plus" aria-hidden="true"></i>&nbsp&nbsp;New Permohonan'), array('controller' => 'permohonans', 'action' => 'add'), array('class'=>'btn btn-primary btn-block', 'escape' => false)); ?> 
						
						</div><!-- end body -->
				</div><!-- end panel -->
			</div><!-- end actions -->
		</div><!-- end col md 4 -->

	</div>
</div>

<div class="related row">
	<div class="col-md-12">
	<h3><?php echo __('Related Permohonans'); ?></h3>
	<?php if (!empty($persatuan['Permohonan'])): ?>
	<table cellpadding = "0" cellspacing = "0" class="table table-striped">
	<thead>
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('No Daftar'); ?></th>
		<th><?php echo __('Tarikh Terima'); ?></th>
		<th><?php echo __('Persatuan Id'); ?></th>
		<th><?php echo __('Nama Aktiviti'); ?></th>
		<th><?php echo __('Peringkat Aktiviti'); ?></th>
		<th><?php echo __('Kategori Aktiviti'); ?></th>
		<th><?php echo __('Anjuran'); ?></th>
		<th><?php echo __('Tarikh Aktiviti'); ?></th>
		<th><?php echo __('Tempat Aktiviti'); ?></th>
		<th><?php echo __('Bilangan Peserta'); ?></th>
		<th><?php echo __('Anggaran Kos'); ?></th>
		<th><?php echo __('H A 1'); ?></th>
		<th><?php echo __('H A 2'); ?></th>
		<th><?php echo __('H A 3'); ?></th>
		<th><?php echo __('H A 4'); ?></th>
		<th><?php echo __('H A 5'); ?></th>
		<th><?php echo __('A01'); ?></th>
		<th><?php echo __('A02'); ?></th>
		<th><?php echo __('A03'); ?></th>
		<th><?php echo __('A04'); ?></th>
		<th><?php echo __('A05'); ?></th>
		<th><?php echo __('Ketua Projek'); ?></th>
		<th><?php echo __('Jawatan'); ?></th>
		<th><?php echo __('Tele Pelajar'); ?></th>
		<th><?php echo __('Email Pelajar'); ?></th>
		<th><?php echo __('Nama Penasihat Persatuan'); ?></th>
		<th><?php echo __('Tel Penasihat'); ?></th>
		<th><?php echo __('Pegawai Pengiring Nama'); ?></th>
		<th><?php echo __('Pegawai Pengiring Tel'); ?></th>
		<th><?php echo __('Bil Lelaki'); ?></th>
		<th><?php echo __('Bil Perempuan'); ?></th>
		<th><?php echo __('Sumber 1'); ?></th>
		<th><?php echo __('Sumber 2'); ?></th>
		<th><?php echo __('Sumber 3'); ?></th>
		<th><?php echo __('Sumber 4'); ?></th>
		<th><?php echo __('Minum Pagi'); ?></th>
		<th><?php echo __('Makan Tengahari'); ?></th>
		<th><?php echo __('Makan Malam'); ?></th>
		<th><?php echo __('Makan Vip'); ?></th>
		<th><?php echo __('Atlet'); ?></th>
		<th><?php echo __('Program Pakej'); ?></th>
		<th><?php echo __('Yuran  Penginapan'); ?></th>
		<th><?php echo __('Kain Rentang'); ?></th>
		<th><?php echo __('Laporan'); ?></th>
		<th><?php echo __('Honorarium 1'); ?></th>
		<th><?php echo __('Honorarium 2'); ?></th>
		<th><?php echo __('Honorarium 3'); ?></th>
		<th><?php echo __('Honorarium 4'); ?></th>
		<th><?php echo __('Honorarium 5'); ?></th>
		<th><?php echo __('Honorarium Forum'); ?></th>
		<th><?php echo __('Fasilitator Staff'); ?></th>
		<th><?php echo __('Fasilitator Pelajar'); ?></th>
		<th><?php echo __('Pengadil'); ?></th>
		<th><?php echo __('Pengadil Professional'); ?></th>
		<th><?php echo __('Wang Saku Antarabangsa'); ?></th>
		<th><?php echo __('Artis'); ?></th>
		<th><?php echo __('Cenderamata Menteri'); ?></th>
		<th><?php echo __('Cenderamata Luar'); ?></th>
		<th><?php echo __('Yuran Penyertaan'); ?></th>
		<th><?php echo __('Percetakan'); ?></th>
		<th><?php echo __('Peralatan'); ?></th>
		<th><?php echo __('Backdrop'); ?></th>
		<th><?php echo __('Dobi'); ?></th>
		<th><?php echo __('Piala Uitm'); ?></th>
		<th><?php echo __('Piala Antarabangsa'); ?></th>
		<th><?php echo __('Piala Iringan'); ?></th>
		<th><?php echo __('Uitm 1'); ?></th>
		<th><?php echo __('Uitm 2'); ?></th>
		<th><?php echo __('Uitm 3'); ?></th>
		<th><?php echo __('Antarabangsa 1'); ?></th>
		<th><?php echo __('Antarabangsa 2'); ?></th>
		<th><?php echo __('Antarabangsa 3'); ?></th>
		<th><?php echo __('Kumpulan Uitm 1'); ?></th>
		<th><?php echo __('Kumpulan Uitm 2'); ?></th>
		<th><?php echo __('Kumpulan Uitm 3'); ?></th>
		<th><?php echo __('Kumpulan Ipta 1'); ?></th>
		<th><?php echo __('Kumpulan Ipta 2'); ?></th>
		<th><?php echo __('Kumpulan Ipta 3'); ?></th>
		<th><?php echo __('Kumpulan Antarabangsa 1'); ?></th>
		<th><?php echo __('Kumpulan Antarabangsa 2'); ?></th>
		<th><?php echo __('Kumpulan Antarabangsa 3'); ?></th>
		<th><?php echo __('Sukan Piala Pusingan'); ?></th>
		<th><?php echo __('Sukan Piala Iringan'); ?></th>
		<th><?php echo __('Sukan Piala Iringan 1'); ?></th>
		<th><?php echo __('Sukan Piala Iringan 2'); ?></th>
		<th><?php echo __('Sukan Piala Iringan 3'); ?></th>
		<th><?php echo __('Khas 1'); ?></th>
		<th><?php echo __('Khas 2'); ?></th>
		<th><?php echo __('Khas 3'); ?></th>
		<th><?php echo __('Khas 4'); ?></th>
		<th><?php echo __('Khas 5'); ?></th>
		<th><?php echo __('Khas 6'); ?></th>
		<th><?php echo __('Khas 7'); ?></th>
		<th><?php echo __('Khas 7a'); ?></th>
		<th><?php echo __('Khas 7b'); ?></th>
		<th><?php echo __('Khas 7c'); ?></th>
		<th><?php echo __('Attachment'); ?></th>
		<th><?php echo __('Attachment Dir'); ?></th>
		<th><?php echo __('Attachment Type'); ?></th>
		<th><?php echo __('Attachment Size'); ?></th>
		<th><?php echo __('Sah Permohonan'); ?></th>
		<th><?php echo __('Sah Mpp Nama'); ?></th>
		<th><?php echo __('Sah Mpp Tarikh'); ?></th>
		<th><?php echo __('Sah Pp Nama'); ?></th>
		<th><?php echo __('Sah Pp Tarikh'); ?></th>
		<th><?php echo __('Sah Penasihat Nama'); ?></th>
		<th><?php echo __('Sah Penasihat Tarikh'); ?></th>
		<th><?php echo __('Status'); ?></th>
		<th><?php echo __('Lulus Nama'); ?></th>
		<th><?php echo __('Lulus Tarikh'); ?></th>
		<th><?php echo __('Nota'); ?></th>
		<th class="actions"></th>
	</tr>
	<thead>
	<tbody>
	<?php foreach ($persatuan['Permohonan'] as $permohonan): ?>
		<tr>
			<td><?php echo $permohonan['id']; ?></td>
			<td><?php echo $permohonan['no_daftar']; ?></td>
			<td><?php echo $permohonan['tarikh_terima']; ?></td>
			<td><?php echo $permohonan['persatuan_id']; ?></td>
			<td><?php echo $permohonan['nama_aktiviti']; ?></td>
			<td><?php echo $permohonan['peringkat_aktiviti']; ?></td>
			<td><?php echo $permohonan['kategori_aktiviti']; ?></td>
			<td><?php echo $permohonan['anjuran']; ?></td>
			<td><?php echo $permohonan['tarikh_aktiviti']; ?></td>
			<td><?php echo $permohonan['tempat_aktiviti']; ?></td>
			<td><?php echo $permohonan['bilangan_peserta']; ?></td>
			<td><?php echo $permohonan['anggaran_kos']; ?></td>
			<td><?php echo $permohonan['h_a_1']; ?></td>
			<td><?php echo $permohonan['h_a_2']; ?></td>
			<td><?php echo $permohonan['h_a_3']; ?></td>
			<td><?php echo $permohonan['h_a_4']; ?></td>
			<td><?php echo $permohonan['h_a_5']; ?></td>
			<td><?php echo $permohonan['a01']; ?></td>
			<td><?php echo $permohonan['a02']; ?></td>
			<td><?php echo $permohonan['a03']; ?></td>
			<td><?php echo $permohonan['a04']; ?></td>
			<td><?php echo $permohonan['a05']; ?></td>
			<td><?php echo $permohonan['ketua_projek']; ?></td>
			<td><?php echo $permohonan['jawatan']; ?></td>
			<td><?php echo $permohonan['tele_pelajar']; ?></td>
			<td><?php echo $permohonan['email_pelajar']; ?></td>
			<td><?php echo $permohonan['nama_penasihat_persatuan']; ?></td>
			<td><?php echo $permohonan['tel_penasihat']; ?></td>
			<td><?php echo $permohonan['pegawai_pengiring_nama']; ?></td>
			<td><?php echo $permohonan['pegawai_pengiring_tel']; ?></td>
			<td><?php echo $permohonan['bil_lelaki']; ?></td>
			<td><?php echo $permohonan['bil_perempuan']; ?></td>
			<td><?php echo $permohonan['sumber_1']; ?></td>
			<td><?php echo $permohonan['sumber_2']; ?></td>
			<td><?php echo $permohonan['sumber_3']; ?></td>
			<td><?php echo $permohonan['sumber_4']; ?></td>
			<td><?php echo $permohonan['minum_pagi']; ?></td>
			<td><?php echo $permohonan['makan_tengahari']; ?></td>
			<td><?php echo $permohonan['makan_malam']; ?></td>
			<td><?php echo $permohonan['makan_vip']; ?></td>
			<td><?php echo $permohonan['atlet']; ?></td>
			<td><?php echo $permohonan['program_pakej']; ?></td>
			<td><?php echo $permohonan['yuran _penginapan']; ?></td>
			<td><?php echo $permohonan['kain_rentang']; ?></td>
			<td><?php echo $permohonan['laporan']; ?></td>
			<td><?php echo $permohonan['honorarium_1']; ?></td>
			<td><?php echo $permohonan['honorarium_2']; ?></td>
			<td><?php echo $permohonan['honorarium_3']; ?></td>
			<td><?php echo $permohonan['honorarium_4']; ?></td>
			<td><?php echo $permohonan['honorarium_5']; ?></td>
			<td><?php echo $permohonan['honorarium_forum']; ?></td>
			<td><?php echo $permohonan['fasilitator_staff']; ?></td>
			<td><?php echo $permohonan['fasilitator_pelajar']; ?></td>
			<td><?php echo $permohonan['pengadil']; ?></td>
			<td><?php echo $permohonan['pengadil_professional']; ?></td>
			<td><?php echo $permohonan['wang_saku_antarabangsa']; ?></td>
			<td><?php echo $permohonan['artis']; ?></td>
			<td><?php echo $permohonan['cenderamata_menteri']; ?></td>
			<td><?php echo $permohonan['cenderamata_luar']; ?></td>
			<td><?php echo $permohonan['yuran_penyertaan']; ?></td>
			<td><?php echo $permohonan['percetakan']; ?></td>
			<td><?php echo $permohonan['peralatan']; ?></td>
			<td><?php echo $permohonan['backdrop']; ?></td>
			<td><?php echo $permohonan['dobi']; ?></td>
			<td><?php echo $permohonan['piala_uitm']; ?></td>
			<td><?php echo $permohonan['piala_antarabangsa']; ?></td>
			<td><?php echo $permohonan['piala_iringan']; ?></td>
			<td><?php echo $permohonan['uitm_1']; ?></td>
			<td><?php echo $permohonan['uitm_2']; ?></td>
			<td><?php echo $permohonan['uitm_3']; ?></td>
			<td><?php echo $permohonan['antarabangsa_1']; ?></td>
			<td><?php echo $permohonan['antarabangsa_2']; ?></td>
			<td><?php echo $permohonan['antarabangsa_3']; ?></td>
			<td><?php echo $permohonan['kumpulan_uitm_1']; ?></td>
			<td><?php echo $permohonan['kumpulan_uitm_2']; ?></td>
			<td><?php echo $permohonan['kumpulan_uitm_3']; ?></td>
			<td><?php echo $permohonan['kumpulan_ipta_1']; ?></td>
			<td><?php echo $permohonan['kumpulan_ipta_2']; ?></td>
			<td><?php echo $permohonan['kumpulan_ipta_3']; ?></td>
			<td><?php echo $permohonan['kumpulan_antarabangsa_1']; ?></td>
			<td><?php echo $permohonan['kumpulan_antarabangsa_2']; ?></td>
			<td><?php echo $permohonan['kumpulan_antarabangsa_3']; ?></td>
			<td><?php echo $permohonan['sukan_piala_pusingan']; ?></td>
			<td><?php echo $permohonan['sukan_piala_iringan']; ?></td>
			<td><?php echo $permohonan['sukan_piala_iringan_1']; ?></td>
			<td><?php echo $permohonan['sukan_piala_iringan_2']; ?></td>
			<td><?php echo $permohonan['sukan_piala_iringan_3']; ?></td>
			<td><?php echo $permohonan['khas_1']; ?></td>
			<td><?php echo $permohonan['khas_2']; ?></td>
			<td><?php echo $permohonan['khas_3']; ?></td>
			<td><?php echo $permohonan['khas_4']; ?></td>
			<td><?php echo $permohonan['khas_5']; ?></td>
			<td><?php echo $permohonan['khas_6']; ?></td>
			<td><?php echo $permohonan['khas_7']; ?></td>
			<td><?php echo $permohonan['khas_7a']; ?></td>
			<td><?php echo $permohonan['khas_7b']; ?></td>
			<td><?php echo $permohonan['khas_7c']; ?></td>
			<td><?php echo $permohonan['attachment']; ?></td>
			<td><?php echo $permohonan['attachment_dir']; ?></td>
			<td><?php echo $permohonan['attachment_type']; ?></td>
			<td><?php echo $permohonan['attachment_size']; ?></td>
			<td><?php echo $permohonan['sah_permohonan']; ?></td>
			<td><?php echo $permohonan['sah_mpp_nama']; ?></td>
			<td><?php echo $permohonan['sah_mpp_tarikh']; ?></td>
			<td><?php echo $permohonan['sah_pp_nama']; ?></td>
			<td><?php echo $permohonan['sah_pp_tarikh']; ?></td>
			<td><?php echo $permohonan['sah_penasihat_nama']; ?></td>
			<td><?php echo $permohonan['sah_penasihat_tarikh']; ?></td>
			<td><?php echo $permohonan['status']; ?></td>
			<td><?php echo $permohonan['lulus_nama']; ?></td>
			<td><?php echo $permohonan['lulus_tarikh']; ?></td>
			<td><?php echo $permohonan['nota']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('<i class="fa fa-folder-open-o" aria-hidden="true"></i>'), array('controller' => 'permohonans', 'action' => 'view', $permohonan['id']), array('class'=>'btn btn-success btn-xs', 'escape' => false)); ?>
				<?php echo $this->Html->link(__('<i class="fa fa-pencil-square-o" aria-hidden="true"></i>'), array('controller' => 'permohonans', 'action' => 'edit', $permohonan['id']), array('class'=>'btn btn-warning btn-xs', 'escape' => false)); ?>
				<?php echo $this->Form->postLink(__('<i class="fa fa-trash-o" aria-hidden="true"></i>'), array('controller' => 'permohonans', 'action' => 'delete', $permohonan['id']), array('class'=>'btn btn-danger btn-xs', 'escape' => false), __('Are you sure you want to delete # %s?', $permohonan['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</tbody>
	</table>
<?php endif; ?>

	<div class="actions">
		<?php echo $this->Html->link(__('<i class="fa fa-plus" aria-hidden="true"></i>&nbsp;&nbsp;New Permohonan'), array('controller' => 'permohonans', 'action' => 'add'), array('escape' => false, 'class' => 'btn btn-default')); ?> 
	</div>
	</div><!-- end col md 12 -->
</div>
