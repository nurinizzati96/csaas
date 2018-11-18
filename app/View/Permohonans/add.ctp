
<?php
		echo $this->Html->css('select2');
		echo $this->Html->script('select2');
	?>
	
<div class="permohonans form">

	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Permohonan'); ?></h1>
			</div>
		</div>
	</div>



	<div class="row">

		<div class="col-md-12">
		
<div class="panel panel-default">
  <div class="panel-heading"><?php echo __('Permohonan'); ?></div>
  <div class="panel-body">
			<?php echo $this->Form->create('Permohonan', array('role' => 'form'));?>
			
<div class="row">
  <div class="col-md-4">
<div class="form-group">
	<?php echo $this->Form->input('no_daftar', array('class' => 'form-control'));?>
</div>
  </div>
  
  <div class="col-md-8">
<div class="form-group">
	<?php echo $this->Form->input('nama_aktiviti', array('class' => 'form-control'));?>
</div>
  </div>
  </div>


  <div class="row">
  <div class="col-md-12">
<div class="form-group">
					<?php echo $this->Form->input('peringkat_aktiviti', array('class' => 'form-control', 'label' => 'Pilih Peringkat Aktiviti', 'empty'=> 'Sila Pilih Peringkat Aktiviti', 'options' => array ('universiti' => 'Universiti', 'kolej' => 'Kolej', 'kampus' => 'Kampus', 'fakulti' => 'Fakulti', 'persatuan/kelab' => 'Persatuan/Kelab'),));?>
				</div>
				
				
				
  
</div>	
</div>
<div class="row">
<div class="col-md-6">
<div class="form-group">
	<?php echo $this->Form->input('tarikh_aktiviti', array('class' => 'form-control', 'placeholder' => 'Tarikh Aktiviti Mula', 'type'=>'Date','value'=>date ('Y-m-d'), 'empty'=>'empty','label'=> 'Tarikh Aktiviti Mula'));?>
</div>
  </div>

<div class="col-md-6">
<div class="form-group">
	<?php echo $this->Form->input('tarikh_aktiviti', array('class' => 'form-control', 'placeholder' => 'Tarikh Aktiviti Tamat', 'type'=>'Date','value'=>date ('Y-m-d'), 'empty'=>'empty', 'label'=>'Tarikh Aktiviti Tamat'));?>
</div>
  </div>
 </div>
<div class="form-group">
					<?php echo $this->Form->input('kategori_aktiviti', array('class' => 'form-control', 'empty' => 'Sila Pilih Kategori Aktiviti', 'options' => array ('akademik/ilmiah' => 'Akademik/Ilmiah', 'kerohanian' => 'Kerohanian', 'khidmat masyarakat/sosial' => 'Khidmat Masyarakat/Sosial', 'kreatif/inovasi' => 'Kreatif/Inovasi', 'kebudayaan dan warisan' => 'Kebudayaan dan Warisan', 'keusahawanan' => 'Keusahawanan'),));?>
				</div>
			




<div class="row">		
<div class="col-md-12">
<div class="form-group">
					<?php echo $this->Form->input('anjuran', array('class' => 'form-control'));?>
				</div>
<div class="form-group">
					<?php echo $this->Form->input('tempat_aktiviti', array('class' => 'form-control', 'placeholder' => 'Tempat Aktiviti'));?>
				</div>				
<div class="form-group">
					<?php echo $this->Form->input('bilangan_peserta', array('class' => 'form-control', 'placeholder' => 'Bilangan Peserta'));?>
				</div>
				</div>
<div class="col-md-12">				
<div class="form-group">
					<?php echo $this->Form->input('anggaran_kos', array('class' => 'form-control'));?>
				</div>
				</div>
	
<div class="col-md-6">				
<div class="form-group">
					<?php echo $this->Form->input('h_a_1', array('class' => 'form-control', 'label' => 'Hasil Aktiviti 1'));?>
				</div>
				</div>
				
				
 <div class="col-md-6">
<div class="form-group">
	<?php echo $this->Form->input('a01', array('class' => 'form-control','label'=>'Objekif Aktiviti 1','empty' => 'Pilih Kemahiran Insaniah', 'options' => array ('kemahiran berkomunikasi (k1)' => 'Kemahiran Berkomunikasi (K1)', 'pemikiran kritis dan kemahiran menyelesaikan masalah (k2)' => 'Pemikiran Kritis dan Kemahiran Menyelesaikan Masalah (K2)','kemahiran kerja berpasukan (k3)' => 'Kemahiran Kerja Berpasukan (K3)','pembelajaran berterusan dan pengurusan maklumat (k4)' => 'Pembelajaran Berterusan dan Pengurusan Maklumat (K4)','kemahiran keusahawanan (k5)' => 'Kemahiran Keusahawanan (K5)','etika dan moral profesional (k6)' => 'Etika dan Moral Profesional (K6)','kemahiran kepimpinan (k7)' => 'Kemahiran Kepimpinan (K7)'),));?>
</div>
  </div>
  </div>
  <div class="row">
  <div class="col-md-6">				
<div class="form-group">
					<?php echo $this->Form->input('h_a_2', array('class' => 'form-control', 'label' => 'Hasil Aktiviti 2'));?>
				</div>
				</div>
				
 <div class="col-md-6">
<div class="form-group">
	<?php echo $this->Form->input('a02', array('class' => 'form-control','label'=>'Objekif Aktiviti 2','empty' => 'Pilih Kemahiran Insaniah', 'options' => array ('kemahiran berkomunikasi (k1)' => 'Kemahiran Berkomunikasi (K1)', 'pemikiran kritis dan kemahiran menyelesaikan masalah (k2)' => 'Pemikiran Kritis dan Kemahiran Menyelesaikan Masalah (K2)','kemahiran kerja berpasukan (k3)' => 'Kemahiran Kerja Berpasukan (K3)','pembelajaran berterusan dan pengurusan maklumat (k4)' => 'Pembelajaran Berterusan dan Pengurusan Maklumat (K4)','kemahiran keusahawanan (k5)' => 'Kemahiran Keusahawanan (K5)','etika dan moral profesional (k6)' => 'Etika dan Moral Profesional (K6)','kemahiran kepimpinan (k7)' => 'Kemahiran Kepimpinan (K7)'),));?>
</div>
  </div>
  </div>
  <div class="row">
  <div class="col-md-6">				
<div class="form-group">
					<?php echo $this->Form->input('h_a_3', array('class' => 'form-control', 'label' => 'Hasil Aktiviti 3'));?>
				</div>
				</div>
				
 <div class="col-md-6">
<div class="form-group">
	<?php echo $this->Form->input('a03', array('class' => 'form-control','label'=>'Objekif Aktiviti 3', 'empty' => 'Pilih Kemahiran Insaniah', 'options' => array ('kemahiran berkomunikasi (k1)' => 'Kemahiran Berkomunikasi (K1)', 'pemikiran kritis dan kemahiran menyelesaikan masalah (k2)' => 'Pemikiran Kritis dan Kemahiran Menyelesaikan Masalah (K2)','kemahiran kerja berpasukan (k3)' => 'Kemahiran Kerja Berpasukan (K3)','pembelajaran berterusan dan pengurusan maklumat (k4)' => 'Pembelajaran Berterusan dan Pengurusan Maklumat (K4)','kemahiran keusahawanan (k5)' => 'Kemahiran Keusahawanan (K5)','etika dan moral profesional (k6)' => 'Etika dan Moral Profesional (K6)','kemahiran kepimpinan (k7)' => 'Kemahiran Kepimpinan (K7)'),));?>
</div>
  </div>
  </div>
  <div class="row">
  <div class="col-md-6">				
<div class="form-group">
					<?php echo $this->Form->input('h_a_4', array('class' => 'form-control', 'label' => 'Hasil Aktiviti 4'));?>
				</div>
				</div>
				
 <div class="col-md-6">
<div class="form-group">
	<?php echo $this->Form->input('a04', array('class' => 'form-control','label'=>'Objekif Aktiviti 4', 'empty' => 'Pilih Kemahiran Insaniah', 'options' => array ('kemahiran berkomunikasi (k1)' => 'Kemahiran Berkomunikasi (K1)', 'pemikiran kritis dan kemahiran menyelesaikan masalah (k2)' => 'Pemikiran Kritis dan Kemahiran Menyelesaikan Masalah (K2)','kemahiran kerja berpasukan (k3)' => 'Kemahiran Kerja Berpasukan (K3)','pembelajaran berterusan dan pengurusan maklumat (k4)' => 'Pembelajaran Berterusan dan Pengurusan Maklumat (K4)','kemahiran keusahawanan (k5)' => 'Kemahiran Keusahawanan (K5)','etika dan moral profesional (k6)' => 'Etika dan Moral Profesional (K6)','kemahiran kepimpinan (k7)' => 'Kemahiran Kepimpinan (K7)'),));?>
</div>
  </div>
  </div>
  <div class="row">
  <div class="col-md-6">				
<div class="form-group">
					<?php echo $this->Form->input('h_a_5', array('class' => 'form-control', 'label' => 'Hasil Aktiviti 5'));?>
				</div>
				</div>
				
 <div class="col-md-6">
<div class="form-group">
	<?php echo $this->Form->input('a05', array('class' => 'form-control','label'=>'Objekif Aktiviti 5', 'empty' => 'Pilih Kemahiran Insaniah', 'options' => array ('kemahiran berkomunikasi (k1)' => 'Kemahiran Berkomunikasi (K1)', 'pemikiran kritis dan kemahiran menyelesaikan masalah (k2)' => 'Pemikiran Kritis dan Kemahiran Menyelesaikan Masalah (K2)','kemahiran kerja berpasukan (k3)' => 'Kemahiran Kerja Berpasukan (K3)','pembelajaran berterusan dan pengurusan maklumat (k4)' => 'Pembelajaran Berterusan dan Pengurusan Maklumat (K4)','kemahiran keusahawanan (k5)' => 'Kemahiran Keusahawanan (K5)','etika dan moral profesional (k6)' => 'Etika dan Moral Profesional (K6)','kemahiran kepimpinan (k7)' => 'Kemahiran Kepimpinan (K7)'),));?>
</div>
  </div>
  </div>
  
 <div class="row">
<div class="col-md-12">
<div class="form-group">
					<?php echo $this->Form->input('ketua_projek', array('class' => 'form-control'));?>
				</div> 
</div>				
<div class="col-md-4"> 
<div class="form-group">
					<?php echo $this->Form->input('jawatan', array('class' => 'form-control'));?>
				</div>
				</div>

<div class="col-md-4">				
<div class="form-group">
					<?php echo $this->Form->input('email_pelajar', array('class' => 'form-control', 'placeholder' => 'Email Pelajar', 'label' => 'Email Pelajar'));?>
					</div>
					</div>

<div class="col-md-4">
<div class="form-group">
					<?php echo $this->Form->input('tel_pelajar', array('class' => 'form-control'));?>
				</div>
</div>
		

<div class="col-md-8">
<div class="form-group">
					<?php echo $this->Form->input('nama_penasihat_persatuan', array('class' => 'form-control'));?>
				</div>
				</div>
				
<div class="col-md-4">				
<div class="form-group">
					<?php echo $this->Form->input('tel_penasihat', array('class' => 'form-control'));?>
				</div>				
				</div>
				
<div class="col-md-6">					
<div class="form-group">
					<?php echo $this->Form->input('bil_lelaki', array('class' => 'form-control', 'placeholder' => 'Bil Lelaki'));?>
				</div>
				</div>	
<div class="col-md-6">	
<div class="form-group">
					<?php echo $this->Form->input('bil_perempuan', array('class' => 'form-control', 'placeholder' => 'Bil Perempuan'));?>
				</div>
				</div>
	
<div class="col-md-3">				
<div class="form-group">
					<?php echo $this->Form->input('sumber_4', array('class' => 'form-control', 'label'=>'Sumber kewangan', 'placeholder' => 'Jumlah Peruntukan dari TKK/HEP'));?>
				</div>
				</div>
				</div>
				
				
				
				
				
		
				
				
	<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">			
  <div class="panel panel-default">
    <div class="panel-heading" role="button" id="headingOne">
	<role="button" data-toggle="collapse" data-parent="#accordion" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
      <h4 class="panel-title">
          Elaun Makanan (Aktiviti Pelajar)
      </h4>
    </div>
    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
      <div class="panel-body">
<div class="row">	  
<div class="col-md-4">
<div class="form-group">
					<?php echo $this->Form->input('sarapan', array('class' => 'form-control'));?>
				</div>
				</div>
				
				
<div class="col-md-4">				
				
				<div class="form-group">
					<?php echo $this->Form->input('minum_pagi', array('class' => 'form-control'));?>
				</div>
				</div>
				
<div class="col-md-4">				

				<div class="form-group">
					<?php echo $this->Form->input('makan_tengahari', array('class' => 'form-control'));?>
				</div>
				</div>


				
				
<div class="col-md-4">				
<div class="form-group">
				
					<?php echo $this->Form->input('makan_malam', array('class' => 'form-control'));?>
				</div>
				</div>
<div class="col-md-4">				
<div class="form-group">
				
					<?php echo $this->Form->input('makan_vip', array('class' => 'form-control'));?>
				</div>	
                </div>	
<div class="col-md-3">				
<div class="form-group">
				
					<?php echo $this->Form->input('jumlah_peserta', array('class' => 'form-control'));?>
				</div>
				</div>
				
<div class="col-md-3">				
<div class="form-group">
				
					<?php echo $this->Form->input('bilangan_hari', array('class' => 'form-control'));?>
				</div>
				</div>
<div class="col-md-3">				
<div class="form-group">
				
					<?php echo $this->Form->input('bilangan_vip', array('class' => 'form-control'));?>
				</div>	
                </div>

<div class="col-md-3">				
<div class="form-group">
				
				    <?php echo $this->Form->input('kos_keseluruhan_2', array('class' => 'form-control'));?>
				</div>	
                </div>
				
 </div>
    </div>
  </div>
  </div>
				
  
  
 <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
  <div class="panel panel-default">
    <div class="panel-heading" role="button" id="headingTwo">
	        <role="button" data-toggle="collapse" data-parent="#accordion" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
      <h4 class="panel-title">
          Publisiti
      </h4>
    </div>
    <div id="collapseTwo" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingTwo">
      <div class="panel-body">
<div class="row">  
<div class="col-md-4">	
<div class="form-group">
					<?php echo $this->Form->input('kain_rentang', array('class' => 'form-control'));?>
				</div>
				</div>
<div class="col-md-4">					
<div class="form-group">
					<?php echo $this->Form->input('laporan', array('class' => 'form-control'));?>
				</div>
				</div>
<div class="col-md-4">	
<div class="form-group">
					<?php echo $this->Form->input('kos_keseluruhan_3', array('class' => 'form-control'));?>
				</div>
				</div>
		
</div>
    </div>
  </div>
  </div>
				
				
  
 <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
  <div class="panel panel-default">
    <div class="panel-heading" role="button" id="headingThree">
	<role="button" data-toggle="collapse" data-parent="#accordion" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
      <h4 class="panel-title">
          Bayaran Jemputan/Fasilitator/Pengadil
      </h4>
    </div>
    <div id="collapseThree" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingThree">
      <div class="panel-body">			
 
<div class="row"> 
<div class="col-md-3">	 
<div class="form-group">
					<?php echo $this->Form->input('fasilitator_staff', array('class' => 'form-control'));?>
				</div> 
				</div>
<div class="col-md-3">				
<div class="form-group">
					<?php echo $this->Form->input('fasilitator_pelajar', array('class' => 'form-control'));?>
				</div>
				</div>
				
				
<div class="col-md-3">					
<div class="form-group">
					<?php echo $this->Form->input('pengadil', array('class' => 'form-control'));?>
				</div>
				</div>
<div class="col-md-3">
<div class="form-group">
					<?php echo $this->Form->input('pengadil_professional', array('class' => 'form-control'));?>
				</div>
				</div>
				</div>
				
<div class="row"> 				
 <div class="col-md-4"> 
 <div class="form-group">
					<?php echo $this->Form->input('wang_saku_antarabangsa', array('class' => 'form-control'));?>
				</div>
				</div>
 <div class="col-md-4"> 				
<div class="form-group">
					<?php echo $this->Form->input('artis', array('class' => 'form-control'));?>
				</div> 
				</div>
				
<div class="col-md-4"> 				
<div class="form-group">
					<?php echo $this->Form->input('kos_keseluruhan_4', array('class' => 'form-control'));?>
				</div> 
				</div>
				</div>
 
	   </div>
    </div>
  </div>
  
  <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
  <div class="panel panel-default">
    <div class="panel-heading" role="button" id="headingFour">
	<role="button" data-toggle="collapse" data-parent="#accordion" data-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
      <h4 class="panel-title">
          Yuran Penyertaan
      </h4>
    </div>
    <div id="collapseFour" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingFour">
      <div class="panel-body">
	  
<div class="row">
<div class="col-md-6"> 	 				
<div class="form-group">
					<?php echo $this->Form->input('peringkat', array('class' => 'form-control','empty' => 'Pilih Peringkat', 'options' => array ('dalam negeri' => 'Dalam Negeri','luar negeri' => 'Luar Negeri'),));?>
				</div>
				</div>
				
<div class="row">
<div class="col-md-6"> 					
<div class="form-group">
					<?php echo $this->Form->input('nota', array('class' => 'form-control', 'placeholder' => 'Nota', 'class'=>'ckeditor'));?>
				</div>				
				</div>
				</div>
				
				
<div class="col-md-6">	
<div class="form-group">
					<?php echo $this->Form->input('kos_keseluruhan_5', array('class' => 'form-control'));?>
				</div>
				</div>				
				</div>
				
				
				
				
				
<div class="row">				
<div class="col-md-6"> 	 				
<div class="form-group">
					<?php echo $this->Form->input('pilihan', array('class' => 'form-control','empty' => 'Pilihan Hadiah', 'options' => array ('individu' => 'Individu','berkumpulan' => 'Berkumpulan'),));?>
				</div>
				</div>
					
<div class="row">	
<div class="col-md-6"> 	 				
<div class="form-group">
					<?php echo $this->Form->input('peringkat_2', array('class' => 'form-control','empty' => 'Peringkat 2', 'options' => array ('UiTM' => 'UiTM','kampus' => 'Kampus','fakulti' => 'Fakulti', 'kolej' => 'Kolej', 'setaraf' => 'Setaraf', 'ipta'=> 'IPTA', 'negeri' => 'Negeri', 'kebangsaan' => 'Kebangsaan', 'antarabangsa' => 'Antarabangsa'),));?>
				</div>
				</div>
				</div>
				
				
		
<div class="col-md-4"> 	 				
<div class="form-group">
					<?php echo $this->Form->input('tempat_pertama', array('class' => 'form-control','empty' => 'Pilihan Hadiah', 'options' => array ('rm 100' => 'RM 100','rm 150' => 'RM 150', 'rm 200' => 'RM 200', 'rm 500' => 'RM 500', 'rm 1000' => 'RM 1000'),));?>
				</div>
				</div>
				

<div class="col-md-4"> 	 				
<div class="form-group">
					<?php echo $this->Form->input('tempat_kedua', array('class' => 'form-control','empty' => 'Pilihan Hadiah', 'options' => array ('rm 75' => 'RM 75','rm 100' => 'RM 100', 'rm 150' => 'RM 150', 'rm 400' => 'RM 400', 'rm 750' => 'RM 750'),));?>
				</div>
				</div>						
				
<div class="col-md-4"> 	 				
<div class="form-group">
					<?php echo $this->Form->input('tempat_ketiga', array('class' => 'form-control','empty' => 'Pilihan Hadiah', 'options' => array ('rm 50' => 'RM 50','rm 70' => 'RM 70', 'rm 100' => 'RM 100', 'rm 300' => 'RM 300', 'rm 500' => 'RM 500'),));?>
				</div>
				</div>						
				</div>
<div class="row">				
<div class="col-md-8"> 	 				
<div class="form-group">
					<?php echo $this->Form->input('pilihan_2', array('class' => 'form-control','empty' => 'Pilihan Peringkat', 'options' => array ('fakulti' => 'Fakulti','kolej' => 'Kolej', 'program' => 'Program', 'persatuan' => 'Persatuan', 'kelab' => 'Kelab'),));?>
				</div>
				</div>
				</div>
				
<div class="row">				
<div class="col-md-4"> 				
<div class="form-group">
					<?php echo $this->Form->input('johan', array('class' => 'form-control'));?>
				</div>
				</div>				
				
<div class="col-md-4"> 				
<div class="form-group">
					<?php echo $this->Form->input('naib_johan', array('class' => 'form-control'));?>
				</div>
				</div>				
				
<div class="col-md-4"> 				
<div class="form-group">
					<?php echo $this->Form->input('ketiga', array('class' => 'form-control'));?>
				</div>
				</div>				
				</div>
				
				
<div class="row">				
<div class="col-md-4"> 				
<div class="form-group">
					<?php echo $this->Form->input('hadiah_khas_kepimpinan_terbaik', array('class' => 'form-control'));?>
				</div>
				</div>				
				
<div class="col-md-4"> 				
<div class="form-group">
					<?php echo $this->Form->input('pengurusan_terbaik', array('class' => 'form-control'));?>
				</div>
				</div>				
				
<div class="col-md-4"> 				
<div class="form-group">
					<?php echo $this->Form->input('kos_keseluruhan_6', array('class' => 'form-control'));?>
				</div>
				</div>				
				</div>
				</div>
				</div>
				</div>
				





<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
  <div class="panel panel-default">
    <div class="panel-heading" role="button" id="headingFive">
	<role="button" data-toggle="collapse" data-parent="#accordion" data-target="#collapseFive" aria-expanded="true" aria-controls="collapseFive">
      <h4 class="panel-title">
          Lampiran Kertas Kerja
      </h4>
    </div>
    <div id="collapseFive" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingFive">
      <div class="panel-body">				
<div class="row">
<div class="col-md-3">				
<div class="form-group">
					<?php echo $this->Form->input('attachment', array('class' => 'form-control', 'label' => 'Sila Lampirkan Kertas Kerja', 'type' => 'file'));?>
				</div>
				</div>
				
				</div>
				</div>
				</div>
				</div>
				</div>
				</div>
				</div>
				</div>
				
				


				
				
				
				

			
				
				
				
				
				
				
				
				
				
				
				
				
				
<div class="pull-right">
  <div class="btn-group" role="group" aria-label="...">
    <div class="btn-group" role="group">
					<?php echo $this->Form->button(__('<i class="fa fa-check" aria-hidden="true"></i>&nbsp;&nbsp;Submit'), array('class' => 'btn btn-success')); ?>
</div>
  <div class="btn-group" role="group">
					<?php echo $this->Html->link(__('<i class="fa fa-times" aria-hidden="true"></i>&nbsp;&nbsp;Cancel'), array('action' => 'index'), array('class' => 'btn btn-warning', 'escape' => false)); ?>
			<?php echo $this->Form->end() ?>

</div>
	</div>
	</div>
  </div>
</div>

		</div><!-- end col md 8 -->
	
	</div><!-- end row -->
</div>
