<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {


 public function __construct(){
    parent::__construct();
    $this->load->library('template');
  }

public function index()
	{
		//$data['konten']="";
		$this->load->view('halaman_utama');
	}
public function penghargaan()
{
	$this->load->view('penghargaan');
}

public function kontak()
{
	$this->load->view('kontak');
}

public function profil()
{
	$this->load->view('profil_perusahaan');
}

public function organisasi()
{
	$this->load->view('struktur-organisasi');
}

public function group()
{
	$this->load->view('struktur-group');
}

public function bisnis()
{
	$this->load->view('bisnis');
}

public function profesi()
{
	$this->load->view('lembaga_profesi');
}

public function fakta()
{
	$this->load->view('Corporate_Fact_Sheet');
}

public function tahunan()
{
	$this->load->view('laporan_tahunan');
}

public function pers()
{
	$this->load->view('presentasi_press_release');
}

public function prospek()
{
	$this->load->view('prospektus');
}

public function pem_sah()
{
	$this->load->view('struktur_pemegang_saham');
}

public function info_sah()
{
	$this->load->view('informasi_saham');
}

public function dividen()
{
	$this->load->view('dividen');
}

public function rups()
{
	$this->load->view('rups');
}

public function pappub()
{
	$this->load->view('paparanpublik');
}

public function tanggung()
{
	$this->load->view('galeri2');
}

public function dirut()
{
	$this->load->view('sambutan_direktur_utama');
}

public function dekom()
{
	$this->load->view('dewan_komisaris');
}

public function direk()
{
	$this->load->view('dewan_direksi');
}

public function info_uang()
{
	$this->load->view('informasi_keuangan');
}

public function audit()
{
	$this->load->view('komite_audit');
}

public function nomrem()
{
	$this->load->view('komite_nominasi_remunerasi');
}

public function mresiko()
{
	$this->load->view('komite_manajemen_resiko');
}

public function sekretaris()
{
	$this->load->view('sekretaris_perusahaan');
}

public function auditinternal()
{
	$this->load->view('unit_audit_internal');
}

}
