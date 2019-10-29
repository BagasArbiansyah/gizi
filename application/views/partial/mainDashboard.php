<body class="layout-3">
      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
<div class="section-header">
            <h5><?php echo $title; ?></h5>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
              <div class="breadcrumb-item"><a href="#">Layout</a></div>
              <div class="breadcrumb-item">Top Navigation</div>
            </div>
          </div>

          <div class="section-body">
            <div class="card">
              <div class="card-header">
              </div>
              <div class="card-body">
                  <p>
                      <?php 
                      if($page=="viewDokter"){
                          $this->load->view('dokter/viewDokter');
                      }elseif ($page=="add") {
                          $this->load->view('dokter/add');
                      }elseif ($page=="edit") {
                          $this->load->view('dokter/edit');
                      }elseif ($page=="index") {
                          $this->load->view('makanan/index');
                      }elseif ($page=="addmakanan") {
                          $this->load->view('makanan/addmakanan');
                      }elseif ($page=="editmakanan") {
                          $this->load->view('makanan/editmakanan');
                      }elseif ($page=="indexx") {
                          $this->load->view('pegawai/indexx');
                      }elseif ($page=="addpegawai") {
                          $this->load->view('pegawai/addpegawai');
                      }elseif ($page=="editpegawai") {
                          $this->load->view('pegawai/editpegawai');
                      }
                      ?>
                  </p>
              </div>
