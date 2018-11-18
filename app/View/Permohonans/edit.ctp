<div class="permohonans form">

	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Edit Permohonan'); ?></h1>
			</div>
		</div>
	</div>



	<div class="row">

		<div class="col-md-8">
<div class="panel panel-default">
  <div class="panel-heading"><?php echo __('Edit Permohonan'); ?></div>
  <div class="panel-body">
			<?php echo $this->Form->create('Permohonan', array('role' => 'form')); ?>

				<div class="form-group">
					<?php echo $this->Form->input('id', array('class' => 'form-control', 'placeholder' => 'Id'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('no_daftar', array('class' => 'form-control', 'placeholder' => 'No Daftar'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('persatuan_id', array('class' => 'form-control', 'placeholder' => 'Persatuan Id'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('nama_aktiviti', array('class' => 'form-control', 'placeholder' => 'Nama Aktiviti'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('peringkat_aktiviti', array('class' => 'form-control', 'label' => 'Pilih Peringkat Aktiviti', 'empty'=> 'Sila Pilih Peringkat Aktiviti', 'options' => array ('universiti' => 'Universiti', 'kolej' => 'Kolej', 'kampus' => 'Kampus', 'fakulti' => 'Fakulti', 'persatuan/kelab' => 'Persatuan/Kelab'),));?>
				</div>
				<div class="form-group">
				<?php echo $this->Form->input('tarikh_aktiviti', array('class' => 'form-control', 'placeholder' => 'Tarikh Aktiviti Mula', 'type'=>'Date','value'=>date ('Y-m-d'), 'empty'=>'empty','label'=> 'Tarikh Aktiviti Mula'));?>
				</div>
				<div class="form-group">
				<?php echo $this->Form->input('tarikh_aktiviti', array('class' => 'form-control', 'placeholder' => 'Tarikh Aktiviti Tamat', 'type'=>'Date','value'=>date ('Y-m-d'), 'empty'=>'empty', 'label'=>'Tarikh Aktiviti Tamat'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('kategori_aktiviti', array('class' => 'form-control', 'empty' => 'Sila Pilih Kategori Aktiviti', 'options' => array ('akademik/ilmiah' => 'Akademik/Ilmiah', 'kerohanian' => 'Kerohanian', 'khidmat masyarakat/sosial' => 'Khidmat Masyarakat/Sosial', 'kreatif/inovasi' => 'Kreatif/Inovasi', 'kebudayaan dan warisan' => 'Kebudayaan dan Warisan', 'keusahawanan' => 'Keusahawanan'),));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('anjuran', array('class' => 'form-control', 'placeholder' => 'Anjuran'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('tarikh_aktiviti', array('class' => 'form-control', 'placeholder' => 'Tarikh Aktiviti'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('tempat_aktiviti', array('class' => 'form-control', 'placeholder' => 'Tempat Aktiviti'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('bilangan_peserta', array('class' => 'form-control', 'placeholder' => 'Bilangan Peserta'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('anggaran_kos', array('class' => 'form-control', 'placeholder' => 'Anggaran Kos'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('h_a_1', array('class' => 'form-control','label'=>'Hasil Aktiviti 1', 'placeholder' => 'H A 1'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('h_a_2', array('class' => 'form-control','label'=>'Hasil Aktiviti 2', 'placeholder' => 'H A 2'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('h_a_3', array('class' => 'form-control','label'=>'Hasil Aktiviti 3', 'placeholder' => 'H A 3'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('h_a_4', array('class' => 'form-control','label'=>'Hasil Aktiviti 4', 'placeholder' => 'H A 4'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('h_a_5', array('class' => 'form-control','label'=>'Hasil Aktiviti 5', 'placeholder' => 'H A 5'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('a01', array('class' => 'form-control','label'=>'Objektif Aktiviti 1', 'placeholder' => 'A01'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('a02', array('class' => 'form-control','label'=>'Objektif Aktiviti 2', 'placeholder' => 'A02'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('a03', array('class' => 'form-control','label'=>'Objektif Aktiviti 3', 'placeholder' => 'A03'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('a04', array('class' => 'form-control','label'=>'Objektif Aktiviti 4', 'placeholder' => 'A04'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('a05', array('class' => 'form-control','label'=>'Objektif Aktiviti 5', 'placeholder' => 'A05'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('ketua_projek', array('class' => 'form-control', 'placeholder' => 'Ketua Projek'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('jawatan', array('class' => 'form-control', 'placeholder' => 'Jawatan'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('tel_pelajar', array('class' => 'form-control', 'placeholder' => 'Tel Pelajar'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('email_pelajar', array('class' => 'form-control', 'placeholder' => 'Email Pelajar'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('nama_penasihat_persatuan', array('class' => 'form-control', 'placeholder' => 'Nama Penasihat Persatuan'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('tel_penasihat', array('class' => 'form-control', 'placeholder' => 'Tel Penasihat'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('bil_lelaki', array('class' => 'form-control', 'placeholder' => 'Bil Lelaki'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('bil_perempuan', array('class' => 'form-control', 'placeholder' => 'Bil Perempuan'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('sumber_4', array('class' => 'form-control','label'=>'Sumber Kewangan'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('minum_pagi', array('class' => 'form-control', 'placeholder' => 'Minum Pagi'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('makan_tengahari', array('class' => 'form-control', 'placeholder' => 'Makan Tengahari'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('makan_malam', array('class' => 'form-control', 'placeholder' => 'Makan Malam'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('makan_vip', array('class' => 'form-control', 'placeholder' => 'Makan Vip'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('jumlah_peserta', array('class' => 'form-control'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('bilangan_hari', array('class' => 'form-control'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('bilangan_vip', array('class' => 'form-control'));?>
				</div>	
				<div class="form-group">
				    <?php echo $this->Form->input('kos_keseluruhan_2', array('class' => 'form-control'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('kain_rentang', array('class' => 'form-control', 'placeholder' => 'Kain Rentang'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('laporan', array('class' => 'form-control', 'placeholder' => 'Laporan'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('kos_keseluruhan_3', array('class' => 'form-control'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('fasilitator_staff', array('class' => 'form-control', 'placeholder' => 'Fasilitator Staff'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('fasilitator_pelajar', array('class' => 'form-control', 'placeholder' => 'Fasilitator Pelajar'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('pengadil', array('class' => 'form-control', 'placeholder' => 'Pengadil'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('pengadil_professional', array('class' => 'form-control', 'placeholder' => 'Pengadil Professional'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('wang_saku_antarabangsa', array('class' => 'form-control', 'placeholder' => 'Wang Saku Antarabangsa'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('artis', array('class' => 'form-control', 'placeholder' => 'Artis'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('kos_keseluruhan_4', array('class' => 'form-control'));?>
				</div> 
				<div class="form-group">
					<?php echo $this->Form->input('peringkat', array('class' => 'form-control','empty' => 'Pilih Peringkat', 'options' => array ('dalam negeri' => 'Dalam Negeri','luar negeri' => 'Luar Negeri'),));?>
				</div>				
				<div class="form-group">
					<?php echo $this->Form->input('nota', array('class' => 'form-control', 'placeholder' => 'Nota', 'class'=>'ckeditor'));?>
				</div>					
				<div class="form-group">
					<?php echo $this->Form->input('kos_keseluruhan_5', array('class' => 'form-control'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('pilihan', array('class' => 'form-control','empty' => 'Pilihan Hadiah', 'options' => array ('individu' => 'Individu','berkumpulan' => 'Berkumpulan'),));?>
				</div> 				
				<div class="form-group">
					<?php echo $this->Form->input('peringkat_2', array('class' => 'form-control','empty' => 'Peringkat 2', 'options' => array ('UiTM' => 'UiTM','kampus' => 'Kampus','fakulti' => 'Fakulti', 'kolej' => 'Kolej', 'setaraf' => 'Setaraf', 'ipta'=> 'IPTA', 'negeri' => 'Negeri', 'kebangsaan' => 'Kebangsaan', 'antarabangsa' => 'Antarabangsa'),));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('tempat_pertama', array('class' => 'form-control','empty' => 'Pilihan Hadiah', 'options' => array ('rm 100' => 'RM 100','rm 150' => 'RM 150', 'rm 200' => 'RM 200', 'rm 500' => 'RM 500', 'rm 1000' => 'RM 1000'),));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('tempat_kedua', array('class' => 'form-control','empty' => 'Pilihan Hadiah', 'options' => array ('rm 75' => 'RM 75','rm 100' => 'RM 100', 'rm 150' => 'RM 150', 'rm 400' => 'RM 400', 'rm 750' => 'RM 750'),));?>
				</div> 				
				<div class="form-group">
					<?php echo $this->Form->input('tempat_ketiga', array('class' => 'form-control','empty' => 'Pilihan Hadiah', 'options' => array ('rm 50' => 'RM 50','rm 70' => 'RM 70', 'rm 100' => 'RM 100', 'rm 300' => 'RM 300', 'rm 500' => 'RM 500'),));?>
				</div> 				
				<div class="form-group">
					<?php echo $this->Form->input('pilihan_2', array('class' => 'form-control','empty' => 'Pilihan Peringkat', 'options' => array ('fakulti' => 'Fakulti','kolej' => 'Kolej', 'program' => 'Program', 'persatuan' => 'Persatuan', 'kelab' => 'Kelab'),));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('johan', array('class' => 'form-control'));?>
				</div>			
				<div class="form-group">
					<?php echo $this->Form->input('naib_johan', array('class' => 'form-control'));?>
				</div>				
				<div class="form-group">
					<?php echo $this->Form->input('ketiga', array('class' => 'form-control'));?>
				</div>				
				<div class="form-group">
					<?php echo $this->Form->input('hadiah_khas_kepimpinan_terbaik', array('class' => 'form-control'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('pengurusan_terbaik', array('class' => 'form-control'));?>
				</div>				
				<div class="form-group">
					<?php echo $this->Form->input('kos_keseluruhan_6', array('class' => 'form-control'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('yuran_penyertaan', array('class' => 'form-control', 'placeholder' => 'Yuran Penyertaan'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('attachment', array('class' => 'form-control','label'=>'Lampiran Kertas Kerja', 'placeholder' => 'Attachment','type'=>'file'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('nota', array('class' => 'form-control', 'placeholder' => 'Nota', 'class'=>'ckeditor'));?> 
				</div>

  </div>
</div>

		</div><!-- end col md 8 -->
		<div class="col-md-4">
		
<div class="panel panel-default">
  <div class="panel-heading">Actions</div>
  <div class="panel-body">
  <div class="btn-group btn-group-justified" role="group" aria-label="...">
    <div class="btn-group" role="group">
					<?php echo $this->Form->button(__('<i class="fa fa-check" aria-hidden="true"></i>&nbsp;&nbsp;Submit'), array('class' => 'btn btn-success btn-block')); ?>
</div>
  <div class="btn-group" role="group">
					<?php echo $this->Html->link(__('<i class="fa fa-times" aria-hidden="true"></i>&nbsp;&nbsp;Cancel'), array('action' => 'index'), array('class' => 'btn btn-warning btn-block', 'escape' => false)); ?>
			<?php echo $this->Form->end() ?>

</div>
	</div>
  </div>
</div>		
		
		
			<div class="actions">
				<div class="panel panel-default">
					<div class="panel-heading">Quick Access</div>
						<div class="panel-body">

																<?php echo $this->Form->postLink(__('<i class="fa fa-trash-o" aria-hidden="true"></i>&nbsp;&nbsp;Delete'), array('action' => 'delete', $this->Form->value('Permohonan.id')), array('class'=>'btn btn-danger btn-block', 'escape' => false), __('Are you sure you want to delete # %s?', $this->Form->value('Permohonan.id'))); ?>																<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;List Permohonans'), array('action' => 'index'), array('class'=>'btn btn-warning btn-block', 'escape' => false)); ?>									<?php echo $this->Html->link(__('<i class="fa fa-list" aria-hidden="true"></i>&nbsp;&nbsp;List Persatuans'), array('controller' => 'persatuans', 'action' => 'index'), array('class'=>'btn btn-warning btn-block', 'escape' => false)); ?> 
		<?php echo $this->Html->link(__('<i class="fa fa-plus" aria-hidden="true"></i>&nbsp;&nbsp;New Persatuan'), array('controller' => 'persatuans', 'action' => 'add'), array('class'=>'btn btn-primary btn-block', 'escape' => false)); ?> 
						</div>
					</div>
				</div>			
		</div><!-- end col md 4-->
	</div><!-- end row -->
</div>
