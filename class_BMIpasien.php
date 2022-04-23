
<!--
`body` tag options:

  Apply one or more of the following classes to to the body tag
  to get the desired effect

  * sidebar-collapse
  * sidebar-mini
-->

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index3.html" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="class_BMIpasien.php" class="nav-link">Kalkulator Sehat</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Tugas Projek 1</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Jakiati Rifqoh Assalwa K</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>


  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
 
      

   <h2>Kalkulator BMI</h2>
     

   <div class="content">
     <div class="container-fluid">
     <div class='container'>
                <form class='form-horizontal p-5' action="halamanBMI.php" method="POST">
                    <div class='text-center'>
                    </div>
                    <!-------->
                    <div class="form-group row ">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Nama</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputEmail3" name='nama_lengkap' placeholder="nama">
                        </div>
                    </div>
                    <!----> 
                    <div class="form-group row">
                        <label for="inputPassword3" class="col-sm-2 col-form-label">Berat Badan</label>
                        <div class="col-sm-10">
                        <input type="number" class="form-control" id="inputPassword3" name='berat_' placeholder="berat">
                        </div>
                    </div>
                    <!----> 
                    <div class="form-group row">
                        <label for="inputPassword3" class="col-sm-2 col-form-label">Tinggi Badan</label>
                        <div class="col-sm-10">
                        <input type="number" class="form-control" id="inputPassword3" name='tinggi_' placeholder="tinggi">
                        </div>
                    </div>
                    <!----->
                    <div class="form-group row">
                        <label for="inputPassword3" class="col-sm-2 col-form-label">Umur</label>
                        <div class="col-sm-10">
                        <input type="number" class="form-control" id="inputPassword3" name='umur_' placeholder="umur">
                        </div>
                    </div>
                    <!---->
                    <div class="row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                    <div class="col-sm-4">
                        <div class="form-check">
                        <input class="form-check-input" type="radio" name="jenis_kelamin" id="perempuan" value="perempuan" checked>
                        <label class="form-check-label" for="perempuan">
                            Perempuan
                        </label>
                        </div>
                        <div class="form-check">
                        <input class="form-check-input" type="radio" name="jenis_kelamin" id="laki-laki" value="laki-laki">
                        <label class="form-check-label" for="laki-laki">
                            Laki-Laki 
                        </label>
                        </div>
                    </div>
                    </div>
                    <br>
                    <!---->
                    <div class="text-center">
                <input class="btn" type="submit" style="color:white; background-color:green;" value="Submit" name="proses"/>
            </div>

                </form>

    </div>

 </div>
 </div>
  </div>

    <!-- /.content-header -->

    <!-- Main content -->
   
  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->


</div> -->
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE -->
<script src="dist/js/adminlte.js"></script>

<!-- OPTIONAL SCRIPTS -->
<script src="plugins/chart.js/Chart.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard3.js"></script>






    
    
