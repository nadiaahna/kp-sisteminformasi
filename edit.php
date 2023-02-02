<!DOCTYPE html>
<html lang="en">

<head>


    <title>Pupuk Sriwidjaja</title>

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

    <?php
    if(isset($_POST['update']) || false)
    {   
        $No_Badge =$_POST['No_Badge'];
        $Nama=$_POST['Nama'];
        $kode_rumah=$_POST['kode_rumah'];
        $unit_kerja=$_POST['unit_kerja'];
        $jabatan=$_POST['jabatan'];
        $kelompok=$_POST['kelompok'];
        $status=$_POST['status'];
        $Alamat=$_POST['Alamat'];

       
        
        // update user data
        $result = mysql_query("UPDATE datapegawai SET No_Badge='$No_Badge', Nama='$Nama', kode_rumah='$kode_rumah', unit_kerja='$unit_kerja', jabatan='$jabatan', kelompok='$kelompok', status='$status', Alamat='$Alamat' WHERE No_Badge=$No_Badge");
        
        // Redirect to homepage to display updated user in list
        header("Location: indexm.php");
    }
    // Display selected user data based on id
    // Getting id from url
    $No_Badge = $_GET['No_Badge'];
    // Fetech user data based on id
    $result = mysql_query("select * from datapegawai where No_Badge=$No_Badge");  
     
    while($user = mysql_fetch_array($result))
    {
        $No_Badge = $user['No_Badge'];
        $Nama = $user['Nama'];
        $kode_rumah = $user['kode_rumah'];
        $unit_kerja = $user['unit_kerja'];
        $jabatan = $user['jabatan'];
        $kelompok = $user['kelompok'];
        $status = $user['status'];
        $Alamat = $user['Alamat'];
        
    }
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
                            <a href="export.php"><i class="fa fa-file-excel-o "></i> Export</a>
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
                        <h3>Edit Data Pegawai Pusri</h3>
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-body">
                              <form name="update" method="post">
        <table border="0">
            <tr> 
                <p>No_Badge :</p>
                <input type="text" name="No_Badge" value="<?=$No_Badge?>">
            </tr>
             <tr> 
                <p>Nama :</p>
                <input type="text" name="Nama" value="<?=$Nama?>">
            </tr>
             <tr> 
                <p>Kode Rumah :</p>
                <input type="text" name="kode_rumah" value="<?=$kode_rumah?>">
            </tr>
             <tr> 
                <p>Unit Kerja :</p>
                <input type="text" name="unit_kerja" value="<?=$unit_kerja?>">
            </tr>
             <tr> 
                <p>Jabatan :</p>
                <input type="text" name="jabatan" value="<?=$jabatan?>">
            </tr>
             <tr> 
                <p>Kelompok RD :</p>
                <input type="text" name="kelompok" value="<?=$kelompok?>">
            </tr>
             <tr> 
                <p>Status Hunian :</p>
                <input type="text" name="status" value="<?=$status?>">
            </tr>
            <tr> 
                <p>Alamat :</p>
                <input type="text" name="Alamat" value="<?=$Alamat?>">
            </tr>
            
            <tr>
            <br><br>
                <td><input type="submit" class="btn btn-primary" name="update" value="Update"></td>
                <td><input type="hidden" name="No_Badge" value=<?php echo $No_Badge;?>></td>
                
            </tr>
        </table>
    </form>
        </div>
                        </div>
                            <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
        </div>
        <!-- /#page-wrapper -->
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
