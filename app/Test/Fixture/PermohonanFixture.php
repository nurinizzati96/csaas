<?php
/**
 * Permohonan Fixture
 */
class PermohonanFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'no_daftar' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 50, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'tarikh_terima' => array('type' => 'date', 'null' => false, 'default' => null),
		'persatuan_id' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 10, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'nama_aktiviti' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'peringkat_aktiviti' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'kategori_aktiviti' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'anjuran' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'tarikh_aktiviti' => array('type' => 'date', 'null' => false, 'default' => null),
		'tempat_aktiviti' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'bilangan_peserta' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'anggaran_kos' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'h_a_1' => array('type' => 'text', 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'h_a_2' => array('type' => 'text', 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'h_a_3' => array('type' => 'text', 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'h_a_4' => array('type' => 'text', 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'h_a_5' => array('type' => 'text', 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'a01' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'a02' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'a03' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'a04' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'a05' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'ketua_projek' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'jawatan' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'tele_pelajar' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'email_pelajar' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'nama_penasihat_persatuan' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'tel_penasihat' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'pegawai_pengiring_nama' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'pegawai_pengiring_tel' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'bil_lelaki' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'bil_perempuan' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'sumber_1' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'sumber_2' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'sumber_3' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'sumber_4' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'minum_pagi' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'makan_tengahari' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'makan_malam' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'makan_vip' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'atlet' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'program_pakej' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'yuran _penginapan' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 255, 'unsigned' => false),
		'kain_rentang' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'laporan' => array('type' => 'text', 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'honorarium_1' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 255, 'unsigned' => false),
		'honorarium_2' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 255, 'unsigned' => false),
		'honorarium_3' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 255, 'unsigned' => false),
		'honorarium_4' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 255, 'unsigned' => false),
		'honorarium_5' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 255, 'unsigned' => false),
		'honorarium_forum' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 255, 'unsigned' => false),
		'fasilitator_staff' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'fasilitator_pelajar' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'pengadil' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'pengadil_professional' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'wang_saku_antarabangsa' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 255, 'unsigned' => false),
		'artis' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'cenderamata_menteri' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'cenderamata_luar' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'yuran_penyertaan' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 255, 'unsigned' => false),
		'percetakan' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'peralatan' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'backdrop' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'dobi' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'piala_uitm' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'piala_antarabangsa' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'piala_iringan' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'uitm_1' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'uitm_2' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'uitm_3' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'antarabangsa_1' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'antarabangsa_2' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'antarabangsa_3' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'kumpulan_uitm_1' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'kumpulan_uitm_2' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'kumpulan_uitm_3' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'kumpulan_ipta_1' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'kumpulan_ipta_2' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'kumpulan_ipta_3' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'kumpulan_antarabangsa_1' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'kumpulan_antarabangsa_2' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'kumpulan_antarabangsa_3' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'sukan_piala_pusingan' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'sukan_piala_iringan' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'sukan_piala_iringan_1' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'sukan_piala_iringan_2' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'sukan_piala_iringan_3' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'khas_1' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'khas_2' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'khas_3' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'khas_4' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'khas_5' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'khas_6' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'khas_7' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'khas_7a' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'khas_7b' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'khas_7c' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'attachment' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'attachment_dir' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'attachment_type' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'attachment_size' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'sah_permohonan' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'sah_mpp_nama' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'sah_mpp_tarikh' => array('type' => 'date', 'null' => false, 'default' => null),
		'sah_pp_nama' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'sah_pp_tarikh' => array('type' => 'date', 'null' => false, 'default' => null),
		'sah_penasihat_nama' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'sah_penasihat_tarikh' => array('type' => 'date', 'null' => false, 'default' => null),
		'status' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'lulus_nama' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'lulus_tarikh' => array('type' => 'date', 'null' => false, 'default' => null),
		'nota' => array('type' => 'text', 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'no_daftar' => 'Lorem ipsum dolor sit amet',
			'tarikh_terima' => '2017-10-10',
			'persatuan_id' => 'Lorem ip',
			'nama_aktiviti' => 'Lorem ipsum dolor sit amet',
			'peringkat_aktiviti' => 'Lorem ipsum dolor sit amet',
			'kategori_aktiviti' => 'Lorem ipsum dolor sit amet',
			'anjuran' => 'Lorem ipsum dolor sit amet',
			'tarikh_aktiviti' => '2017-10-10',
			'tempat_aktiviti' => 'Lorem ipsum dolor sit amet',
			'bilangan_peserta' => 1,
			'anggaran_kos' => 'Lorem ipsum dolor sit amet',
			'h_a_1' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'h_a_2' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'h_a_3' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'h_a_4' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'h_a_5' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'a01' => 'Lorem ipsum dolor sit amet',
			'a02' => 'Lorem ipsum dolor sit amet',
			'a03' => 'Lorem ipsum dolor sit amet',
			'a04' => 'Lorem ipsum dolor sit amet',
			'a05' => 'Lorem ipsum dolor sit amet',
			'ketua_projek' => 1,
			'jawatan' => 1,
			'tele_pelajar' => 1,
			'email_pelajar' => 1,
			'nama_penasihat_persatuan' => 1,
			'tel_penasihat' => 1,
			'pegawai_pengiring_nama' => 1,
			'pegawai_pengiring_tel' => 1,
			'bil_lelaki' => 1,
			'bil_perempuan' => 1,
			'sumber_1' => 1,
			'sumber_2' => 1,
			'sumber_3' => 1,
			'sumber_4' => 1,
			'minum_pagi' => 'Lorem ipsum dolor sit amet',
			'makan_tengahari' => 'Lorem ipsum dolor sit amet',
			'makan_malam' => 'Lorem ipsum dolor sit amet',
			'makan_vip' => 'Lorem ipsum dolor sit amet',
			'atlet' => 'Lorem ipsum dolor sit amet',
			'program_pakej' => 'Lorem ipsum dolor sit amet',
			'yuran _penginapan' => 1,
			'kain_rentang' => 'Lorem ipsum dolor sit amet',
			'laporan' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'honorarium_1' => 1,
			'honorarium_2' => 1,
			'honorarium_3' => 1,
			'honorarium_4' => 1,
			'honorarium_5' => 1,
			'honorarium_forum' => 1,
			'fasilitator_staff' => 'Lorem ipsum dolor sit amet',
			'fasilitator_pelajar' => 'Lorem ipsum dolor sit amet',
			'pengadil' => 'Lorem ipsum dolor sit amet',
			'pengadil_professional' => 'Lorem ipsum dolor sit amet',
			'wang_saku_antarabangsa' => 1,
			'artis' => 'Lorem ipsum dolor sit amet',
			'cenderamata_menteri' => 'Lorem ipsum dolor sit amet',
			'cenderamata_luar' => 'Lorem ipsum dolor sit amet',
			'yuran_penyertaan' => 1,
			'percetakan' => 'Lorem ipsum dolor sit amet',
			'peralatan' => 'Lorem ipsum dolor sit amet',
			'backdrop' => 'Lorem ipsum dolor sit amet',
			'dobi' => 'Lorem ipsum dolor sit amet',
			'piala_uitm' => 'Lorem ipsum dolor sit amet',
			'piala_antarabangsa' => 'Lorem ipsum dolor sit amet',
			'piala_iringan' => 'Lorem ipsum dolor sit amet',
			'uitm_1' => 'Lorem ipsum dolor sit amet',
			'uitm_2' => 'Lorem ipsum dolor sit amet',
			'uitm_3' => 'Lorem ipsum dolor sit amet',
			'antarabangsa_1' => 'Lorem ipsum dolor sit amet',
			'antarabangsa_2' => 'Lorem ipsum dolor sit amet',
			'antarabangsa_3' => 'Lorem ipsum dolor sit amet',
			'kumpulan_uitm_1' => 'Lorem ipsum dolor sit amet',
			'kumpulan_uitm_2' => 'Lorem ipsum dolor sit amet',
			'kumpulan_uitm_3' => 'Lorem ipsum dolor sit amet',
			'kumpulan_ipta_1' => 'Lorem ipsum dolor sit amet',
			'kumpulan_ipta_2' => 'Lorem ipsum dolor sit amet',
			'kumpulan_ipta_3' => 'Lorem ipsum dolor sit amet',
			'kumpulan_antarabangsa_1' => 'Lorem ipsum dolor sit amet',
			'kumpulan_antarabangsa_2' => 'Lorem ipsum dolor sit amet',
			'kumpulan_antarabangsa_3' => 'Lorem ipsum dolor sit amet',
			'sukan_piala_pusingan' => 'Lorem ipsum dolor sit amet',
			'sukan_piala_iringan' => 'Lorem ipsum dolor sit amet',
			'sukan_piala_iringan_1' => 'Lorem ipsum dolor sit amet',
			'sukan_piala_iringan_2' => 'Lorem ipsum dolor sit amet',
			'sukan_piala_iringan_3' => 'Lorem ipsum dolor sit amet',
			'khas_1' => 'Lorem ipsum dolor sit amet',
			'khas_2' => 'Lorem ipsum dolor sit amet',
			'khas_3' => 'Lorem ipsum dolor sit amet',
			'khas_4' => 'Lorem ipsum dolor sit amet',
			'khas_5' => 'Lorem ipsum dolor sit amet',
			'khas_6' => 'Lorem ipsum dolor sit amet',
			'khas_7' => 'Lorem ipsum dolor sit amet',
			'khas_7a' => 'Lorem ipsum dolor sit amet',
			'khas_7b' => 'Lorem ipsum dolor sit amet',
			'khas_7c' => 'Lorem ipsum dolor sit amet',
			'attachment' => 'Lorem ipsum dolor sit amet',
			'attachment_dir' => 'Lorem ipsum dolor sit amet',
			'attachment_type' => 'Lorem ipsum dolor sit amet',
			'attachment_size' => 'Lorem ipsum dolor sit amet',
			'sah_permohonan' => 'Lorem ipsum dolor sit amet',
			'sah_mpp_nama' => 'Lorem ipsum dolor sit amet',
			'sah_mpp_tarikh' => '2017-10-10',
			'sah_pp_nama' => 'Lorem ipsum dolor sit amet',
			'sah_pp_tarikh' => '2017-10-10',
			'sah_penasihat_nama' => 'Lorem ipsum dolor sit amet',
			'sah_penasihat_tarikh' => '2017-10-10',
			'status' => 'Lorem ipsum dolor sit amet',
			'lulus_nama' => 'Lorem ipsum dolor sit amet',
			'lulus_tarikh' => '2017-10-10',
			'nota' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.'
		),
	);

}