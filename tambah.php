<!DOCTYPE html>
<html lang="en">

<head>


    <title>PUPUK SRIWIDJAJA</title>

    <!-- Bootstrap Core CSS -->
    <link href="vendor/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="vendor/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="vendor/sb-admin-2.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="vendor/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css">

    <?php 
        include 'config.php';
    ?>

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="indexm.html">PUPUK SRIWIDJAJA</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">        
                <li>
                    <a href="logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                </li>
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                            
                        <li>
                            <a href="indexm.php"><i class="fa fa-dashboard fa-fw"></i> HOME</a>
                        </li>
                        <li>
                            <a href="tambah.php"><i class="fa fa-edit fa-fw"></i> Tambah Data</a>
                        </li>
                        <li>
                            <a href="export.php"><i class="fa fa-file-excel-o"></i> Export</a>
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-body"> 
                            <h3>Tambah Data Pegawai</h3>
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default"> 
                        <div class="panel-body">
                            <form action="prosestambah.php" method="post">
                            <table border="0">
             <tr> 
                <p>No_Badge :</p>
                <input type="text" name="No_Badge">
            </tr>               
            <tr> 
                <p>Nama :</p>
                <input type="text" name="Nama">
            </tr>
            <tr> 
                <p>Kode Rumah :</p>
                <input type="text" name="kode_rumah">
            </tr>
            <tr> 
                <p>Unit Kerja :</p>
                <input type="text" name="unit_kerja">
            </tr>
            <tr> 
                <p>Jabatan :</p>
                <input type="text" name="jabatan">
            </tr>
            <tr> 
                <p>Kelompok RD :</p>
                <input type="text" name="kelompok">
            </tr>
            <tr> 
                <p>Status Hunian :</p>
                <input type="text" name="status">
            </tr>
             <tr> 
                <p>Alamat :</p>
                <input type="text" name="Alamat">
            </tr>
            
            
            <br><br>
                        
                                <button type="submit" class="btn btn-primary" name="Submit" value="tambah" href="indexm.php" >Submit</button>  
                                </table>
                        </form>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
             </div>
    
    
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
        </div>
</div>


    <script src="vendor/js/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="vendor/js/metisMenu.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="vendor/js/raphael.min.js"></script>
    <script src="vendor/js/morris.min.js"></script>
    <script src="vendor/js/morris-data.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="vendor/js/sb-admin-2.js"></script>


</body>

</html>
