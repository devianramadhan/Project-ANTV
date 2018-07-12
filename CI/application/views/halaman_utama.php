<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="https://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>PT. INTERMEDIA CAPITAL TBK.</title>

<!--slider-->
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link href="<?=base_url()?>masterslider/style/masterslider.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="<?=base_url()?>masterslider/skins/metro/style.css" />
<script src="<?=base_url()?>inc/jquery-1.11.2.min.js" type="text/javascript"></script>
<script src="<?=base_url()?>masterslider/masterslider.js" type="text/javascript"></script>

<!--header-->
<link rel="shortcut icon" href="<?=base_url()?>favicon.ico" type="image/x-icon">
<link rel="stylesheet" href="<?=base_url()?>inc/mdia.css">
<link rel="stylesheet" type="text/css" href="<?=base_url()?>inc/popupmenu.css" />
<script type="text/javascript" src="<?=base_url()?>http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
<script type="text/javascript" src="<?=base_url()?>inc/popupmenu.js"></script>

<!--FIGURE -->
<link rel="stylesheet" href="inc/figurecaptions.css" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/gsap/latest/TweenMax.min.js"></script>
<script src="inc/figurecaptions.js"></script>

<script>

$(function(){ // on DOM load
 $('#1').addCaption({
  fx: 'dualpanels',
  caption: 'PESBUKERS'
 })
 
 $('#2').addCaption({
  fx: 'dualpanels',
  caption: 'CARI JODOH LAGI'
 })
 
  $('#3').addCaption({
  fx: 'dualpanels',
  caption: 'JODOH WASIAT BAPAK'
 })
  $('#4').addCaption({
  fx: 'dualpanels',
  caption: 'NAKUSHA'
 })
   $('#5').addCaption({
  fx: 'dualpanels',
  caption: 'SELAMAT PAGI NUSANTARA'
 })
   $('#6').addCaption({
  fx: 'dualpanels',
  caption: 'SWARAGINI'
 })
   $('#7').addCaption({
  fx: 'dualpanels',
  caption: 'Semarang, 9 Mei 2018'
 })
   $('#8').addCaption({
  fx: 'dualpanels',
  caption: 'Jakarta, 27 Oktober 2017'
 })
   $('#9').addCaption({
  fx: 'dualpanels',
  caption: 'Riau, 2 Desember 2016'
 })
})

</script>

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
          <a href="../EN/index.php"><button class="button button3">EN</button></a>
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
            <li><a href="<?=base_url()?>index.php/Home/fakta">Lembar Fakta Perusahaan</a></li>
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
                <li><a href="Tata Kelola Perusahaan/Anggaran-Dasar-IMC.pdf">Anggaran Dasar</a></li>
        <li><a href="Tata Kelola Perusahaan/Pedoman-Kerja-BoC_MDIA_2017_Final-5april.pdf">Pedoman Kerja Dewan Komisaris</a></li>
                <li><a href="Tata Kelola Perusahaan/2017/Pedoman_Kerja_DIREKSI_2017.pdf">Pedoman Kerja Direksi</a></li>
                <li><a href="Tata Kelola Perusahaan/Kode_Etik(code_of_conduct)_IMC_2017.pdf">Kode Etik</a></li>
        <li><a href="Tata Kelola Perusahaan/Piagam-Komite-Audit-IMC.pdf">Piagam Komite Audit</a></li>
        <li><a href="Tata Kelola Perusahaan/Pedoman-Komite-Nominasi-Remunerasi_IMC.pdf">Pedoman Komite Nominasi dan Remunerasi</a></li>
                <li><a href="Tata Kelola Perusahaan/Piagam-Audit-Internal-IMC.pdf">Piagam Unit Audit Internal</a></li>
                <li><a href="Tata Kelola Perusahaan/WBS_ IMC.pdf">Piagam WBS</a></li>
        <li><a href="Tata Kelola Perusahaan/2017/KEBIJAKAN_PEMEGANG_SAHAM_2017.pdf">Kebijakan Komunikasi Pemegang Saham</a></li>
                </ul>
            </li>
            </ul>
      </div> <!--end navigasi-->
  </div>
            
</div> <!--end wrapper-->

<div id="wrapper">
<div id="header" style="width: 1195px; height: 1625px">
        <div id="banner_web">
            <div class="ms-gallery-template" id="ms-gallery">
        <!--1-->
                <div class="master-slider ms-fullheight ms-skin-metro" id="masterslider">
                  <div class="ms-slide">
                  <img src="masterslider/blank.gif" data-src="slider3/banner_mdia_home.jpg" alt=""/> 
                  <div class="ms-info">
                  </div>
                </div>
        <!--2--> 
                <div class="ms-slide">
                  <img src="masterslider/blank.gif" data-src="slider3/new2.jpg" alt=""/> 
                  <div class="ms-info">
                  </div>
                </div>
        <!--3-->
                <div class="ms-slide">
                  <img src="masterslider/blank.gif" data-src="slider3/new6.jpg" alt=""/> 
                  <div class="ms-info">
                  </div>
                </div>
        <!--4-->
                <div class="ms-slide">
                  <img src="masterslider/blank.gif" data-src="slider3/new3.jpg" alt=""/> 
                  <div class="ms-info">
                  </div>
                </div>
        
        <!--6-->
                <div class="ms-slide">
                  <img src="masterslider/blank.gif" data-src="slider3/new5.jpg" alt=""/> 
                  <div class="ms-info">
                  </div>
                </div>
                
        <!--7-->
                <div class="ms-slide">
                  <img src="masterslider/blank.gif" data-src="slider3/new1.jpg" alt=""/> 
                  <div class="ms-info">
                  </div>
                </div>
                
                </div>
            </div>
        
        </div> 

     
    <!--content-->
  <div id="content">	
    <div align="center">
      <div style="width:600px;padding-top:20px; padding-bottom: 20px;"><h1  class="tag">PT INTERMEDIA CAPITAL Tbk.</h1></div>
      <p>&quot;Mendukung pengembangan karakter bangsa Indonesia dengan spirit kreativitas dan <br />
      inovasi dengan menyajikan program-program televisi yang menarik dan berkualitas kepada anggota keluarga Indonesia&quot;</p>
    </div>

    <div align="center">
      <div style="width:300px;padding-top:20px; padding-bottom: 20px; "><h1  class="tag">Program Kami</h1></div>
        <img id="1" src="program/pesbukers.jpg" width="395" height="151" alt="Pesbukers" />
        <img id="2" src="program/CJL.jpg" width="395" height="151" alt="Cari Jodoh Lagi" />
        <img id="3" src="program/jwb.jpg" width="395" height="151" alt="Jodoh Wasiat Bapak" />
        <img id="4" src="program/Nakusha.jpg" width="395" height="151" alt="Nakusha" />
        <img id="5" src="program/SPN.jpg" width="395" height="151" alt="Selamat Pagi Nusantara" />
        <img id="6" src="program/swaragini.jpg" width="395" height="151" alt="Swaragini" />
    </div>
    <div align="center">
      <div style="width:500px;padding-top:20px;padding-bottom: 20px; "><h1  class="tag">Penghargaan & Sertifikasi</h1></div>
        <div style="width: 1195px;">
          <img id="7" src="penghargaan/piala-kpid-sulsel-2017.jpg" width="395" height="450" alt="kpid2">
          <img id="8" src="penghargaan/Panasonic-2017-Menyingkap-Tabir.JPG" width="395" height="450" alt="panasonic">
          <img id="9" src="penghargaan/piala-KPID-Riau-2016.jpg" width="395" height="450" alt="kpid">
        </div>
      <p><a style="text-align: center; font-size: 16px;" href="<?=base_url()?>index.php/Home/penghargaan">Lihat Selengkapnya</a></p>
    </div>
  </div>
   <!--end-->
</div>
</div>

    <div id="footer">
        <div id="footer-dom">
            <p class="copy">COPYRIGHT &COPY; <?PHP ECHO DATE('Y'); ?> PT. CAKRAWALA ANDALAS TELEVISI</p>
        </div>
    </div>

		<script>
            var slider = new MasterSlider();
            slider.setup('masterslider' , {
                    width:1200,    // slider standard width
                    height:477,   // slider standard height
                    space:0,
                    autoplay:true,
                    loop:true
                });
            // adds Arrows navigation control to the slider.
            slider.control('arrows');
            slider.control('bullets' , {autohide:false, align:'bottom', margin:10});
        </script>
</div>
</body>
</html>
