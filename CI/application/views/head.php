
<link rel="shortcut icon" href="<?=base_url()?>favicon.ico" type="image/x-icon">

<link rel="stylesheet" href="<?php echo base_url('inc/mdia.css') ?>">
<link rel="stylesheet" type="text/css" href="<?=base_url()?>inc/popupmenu.css" />
<script type="text/javascript" src="<?=base_url()?>http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
<script type="<?=base_url()?>text/javascript" src="inc/popupmenu.js"></script>
<style>
.button {
    background-color: #4CAF50; /* Green */
    border: none;
    color: white;
    padding: 3px 3px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 10px;
    margin: 4px 3px 0px 0px;
    -webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
    cursor: pointer;
	float:right;
}
.button3 {
    background-color: white; 
    color: black; 
    border: 1px solid #cc0000;
}
.button3:hover {
    background-color: #cc0000;
    color: white;
}
.button3.kiri {
    margin-right: 0px !important;
}

.button2 {
    background-color: #cc0000; 
    color: white; 
    border: 1px solid #cc0000;
}

.button2.kiri {
    margin-right: 0px !important;
}


</style>    

</head>

<body>
<div id="wrapper">
	<div id="header">
		
		<div id="share">
			<a href="<?=base_url()?>EN/index.php"><button class="button button3">EN</button></a>
            <a href="#"><button class="button button2 kiri">ID</button></a>
		</div>
	</div>
    <div id="top-menu">
		<div id="navigasi">
        
			<a href="<?=base_url()?>index.php/Home/index">Halaman Utama</a>
			<a href="#" data-popupmenu="popmenu1">Tentang Kami</a>
			<a href="#" data-popupmenu="popmenu2">Hubungan Investor</a>
			<a href="#" data-popupmenu="popmenu3">Tata Kelola Perusahaan</a>
			<a href="<?=base_url()?>index.php/Home/tanggung">Tanggung Jawab Sosial</a>
            <a href="<?=base_url()?>index.php/Home/kontak">Kontak</a>
            <a href="http://www.an.tv/career">Karir</a>

            <!--HTML for popup Menu 1-->
            <ul id="popmenu1" class="jqpopupmenu">
            	<li><a href="<?=base_url()?>index.php/Home/profil">Profil Perusahaan</a></li>
                <li><a href="#">Manajemen</a>
                    <ul>
					<li><a href="<?=base_url()?>index.php/Home/dirut">Sambutan Direktur Utama</a></li>
                    <li><a href="<?=base_url()?>index.php/Home/dekom">Dewan Komisaris</a></li>
                    <li><a href="<?=base_url()?>index.php/Home/direk">Direksi</a></li>
                    </ul>
                </li>
           		 
                <li><a href="<?=base_url()?>index.php/Home/organisasi">Struktur Organisasi Perusahaan</a></li>
                <li><a href="<?=base_url()?>index.php/Home/group">Struktur Grup Perusahaan</a></li>
                <li><a href="<?=base_url()?>index.php/Home/bisnis">Bisnis</a></li>
                <li><a href="<?=base_url()?>index.php/Home/penghargaan">Penghargaan dan Sertifikasi</a></li>
                <li><a href="<?=base_url()?>index.php/Home/profesi">Lembaga Profesi dan Penunjang Pasar Modal</a></li>
            </ul>
            
            <!--HTML for popup Menu 2-->
            <ul id="popmenu2" class="jqpopupmenu">
            <<li><a href="<?=base_url()?>index.php/Home/fakta">Lembar Fakta Perusahaan</a></li>
          <li><a href="<?=base_url()?>index.php/Home/tahunan">Laporan Tahunan</a></li>
                    <li><a href="#">Informasi Keuangan</a>
                         	<ul style="padding-left:20px;">
                               <li><a href="Hubungan Investor/Financial-Highlights-MDIA-2016-website.pdf">Ikhtisar Keuangan MDIA<i class="caret"></i></a></li>
                                <li><a href="<?=base_url()?>index.php/Home/info_uang">Laporan Keuangan</a></li>
                             </ul>
                                   
                    </li>
						<li><a href="<?=base_url()?>index.php/Home/pers">Presentasi dan Siaran Pers</a></li>
            <li><a href="<?=base_url()?>index.php/Home/prospek">Prospektus</a></li>
            <li><a href="<?=base_url()?>index.php/Home/pem_sah">Struktur Pemegang Saham</a></li>
            <li><a href="<?=base_url()?>index.php/Home/info_sah">Informasi Saham</a></li>
            <li><a href="<?=base_url()?>index.php/Home/dividen">Dividen</a></li>                        
            <li><a href="<?=base_url()?>index.php/Home/rups">RUPS</a></li>
            <li><a href="<?=base_url()?>index.php/Home/pappub">Paparan Publik</a></li>
            </ul>
            
            <!--HTML for popup Menu 3-->
            <ul id="popmenu3" class="jqpopupmenu">
            
            <li><a href="#">Perangkat Tata Kelola</a>
                <ul>
				<li><a href="<?=base_url()?>index.php/Home/audit">Komite Audit</a></li>
                <li><a href="<?=base_url()?>index.php/Home/nomrem">Komite Nominasi dan Remunerasi</a></li>
                <li><a href="<?=base_url()?>index.php/Home/mresiko">Komite Manajemen Resiko</a></li>
                <li><a href="<?=base_url()?>index.php/Home/sekretaris">Sekretaris Perusahaan</a></li>
                <li><a href="<?=base_url()?>index.php/Home/auditinternal">Unit Audit Internal</a></li>      
                </ul>
            </li>
            <li><a href="#">Dokumen Tata Kelola</a>
                <ul>
                <li><a href="<?=base_url()?>Tata Kelola Perusahaan/Anggaran-Dasar-IMC">Anggaran Dasar</a></li>
				<li><a href="<?=base_url()?>Tata Kelola Perusahaan/Pedoman-Kerja-BoC_MDIA_2017_Final-5april.pdf">Pedoman Kerja Dewan Komisaris</a></li>
                <li><a href="<?=base_url()?>Tata Kelola Perusahaan/2017/Pedoman_Kerja_DIREKSI_2017.pdf">Pedoman Kerja Direksi</a></li>
                <li><a href="<?=base_url()?>Tata Kelola Perusahaan/Kode_Etik(code_of_conduct)_IMC_2017.pdf">Kode Etik</a></li>
				<li><a href="<?=base_url()?>Tata Kelola Perusahaan/Piagam-Komite-Audit-IMC.pdf">Piagam Komite Audit</a></li>
				<li><a href="<?=base_url()?>Tata Kelola Perusahaan/Pedoman-Komite-Nominasi-Remunerasi_IMC.pdf">Pedoman Komite Nominasi dan Remunerasi</a></li>
                <li><a href="<?=base_url()?>Tata Kelola Perusahaan/Piagam-Audit-Internal-IMC.pdf">Piagam Unit Audit Internal</a></li>
                <li><a href="<?=base_url()?>Tata Kelola Perusahaan/WBS_ IMC.pdf">Piagam WBS</a></li>
				<li><a href="<?=base_url()?>Tata Kelola Perusahaan/2017/KEBIJAKAN_PEMEGANG_SAHAM_2017.pdf">Kebijakan Komunikasi Pemegang Saham</a></li>
                </ul>
            </li>
            </ul>
    	</div> <!--end navigasi-->
	</div> <!-- end top menu-->
    
</div> <!--end wrapper-->  