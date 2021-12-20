<?php
include '../config/koneksi.php';
if (!isset($_SESSION['admin']) or empty($_SESSION["admin"]))
{
    echo "<script>alert('Anda harus login');</script>";
    echo "<script>location='login.php';</script>";
    header('location:login.php');
    exit();
}       
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Admin</title>
  <!-- BOOTSTRAP STYLES-->
  <link href="assets/css/bootstrap.css" rel="stylesheet" />
  <!-- FONTAWESOME STYLES-->
  <link href="assets/css/font-awesome.css" rel="stylesheet" />
  <!-- CUSTOM STYLES-->
  <link href="assets/css/custom.css" rel="stylesheet" />

  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap.min.css">
  <!-- GOOGLE FONTS-->
  <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
  <link rel="stylesheet" href="assets/css/print.css" media="print">
</head>
<script>
    function printPage() {
        window.print();
    }
</script>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top hidden-print" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">Data Peralatan</a> 
            </div>
            <div style="color: white;padding: 15px 50px 5px 50px;float: right;font-size: 16px;">
                <a href="index.php?halaman=keluar" class="btn btn-danger square-btn-adjust">Keluar</a>
            </div>
        </nav>   
        <!-- /. NAV TOP  -->
        <nav class="navbar-default navbar-side hidden-print" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    <li class="text-center">
                        <img src="assets/img/find_user.png" class="user-image img-responsive"/>
                    </li>


                    <li><a href="index.php"><i class="fa fa-home"></i> Halaman Utama </a></li>
                    <li>
                        <a href="index.php?halaman=master"><i class="fa fa-sitemap"></i> Master <span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            
                            <li>
                                <a href="index.php?halaman=data_user">Data User</a>
                            </li>
                             <li>
                                <a href="index.php?halaman=data_peralatan">Data Peralatan</a>
                            </li>
                        </ul>
                    </li> 
                    <li><a href="index.php?halaman=keluar"><i class="fa fa-sign-out"></i> Keluar </a></li>
                   <!--  <li><a href="index.php?halaman=data_peralatan"></a> -->

                </ul>

            </div>
            
        </nav>  
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <?php
                if (isset($_GET['halaman']))
                {
                 
                if ($_GET['halaman']=="data_user")
                {
                    include 'data_user.php';
                }
                if ($_GET['halaman']=="data_peralatan")
                {
                    include 'data_peralatan.php';
                }
                elseif ($_GET['halaman']=="keluar")
                {
                    include 'logout.php';
                }
                elseif ($_GET['halaman']=="tambah_data_user") 
                {
                    include 'tambah_data_user.php';
                }
                elseif ($_GET['halaman']=="tambah_data_peralatan") 
                {
                    include 'tambah_data_peralatan.php';
                }
                elseif ($_GET["halaman"]=="ubah_user")
                {
                    include 'ubah_user.php';
                }
                elseif ($_GET["halaman"]=="ubah_data_peralatan")
                {
                    include 'ubah_data_peralatan.php';
                }
                elseif ($_GET["halaman"]=="hapus_user")
                {
                    include 'hapus_user.php';
                } 
                 elseif ($_GET["halaman"]=="hapus_data_peralatan")
                {
                    include 'hapus_data_peralatan.php';
                }
                
            }
            else
            {
                include 'halaman_utama.php';
            }
            ?>
        </div>
        <!-- /. PAGE INNER  -->
    </div>
    <!-- /. PAGE WRAPPER  -->
</div>
<!-- /. WRAPPER  -->
<!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
<!-- JQUERY SCRIPTS -->
<script src="assets/js/jquery-1.10.2.js"></script>
<!-- BOOTSTRAP SCRIPTS -->
<script src="assets/js/bootstrap.min.js"></script>
<!-- METISMENU SCRIPTS -->
<script src="assets/js/jquery.metisMenu.js"></script>
<!-- MORRIS CHART SCRIPTS -->
<!-- CUSTOM SCRIPTS -->
<script src="assets/js/custom.js"></script>
<script src="https://cdn.ckeditor.com/4.10.0/standard/ckeditor.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap.min.js"></script>
<script>
    $(document).ready(function() {
        $('#tabelku').DataTable();
    } );
</script>

</body>
</html>
