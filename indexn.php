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
                <a class="navbar-brand">PUPUK SRIWIDJAJA</a>
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
                            <a href="indexn.php"><i class="fa fa-dashboard fa-fw"></i> HOME</a>
                        </li>
                       
                        <li>
                            <a href="export.php"><i class="fa fa-file-excel-o "></i> Export Seluruh Data</a>
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
                    <h1 class="page-header">Daftar Data Pegawai</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                   <nav class="navbar navbar-light bg-light justify-content-between">
                      <a class="navbar-brand"></a>
                      <form class="form-inline" action="indexn.php" method="get">
                        <input class="form-control mr-sm-2" type="search" placeholder="Cari" aria-label="Search" name="cari">
                        <button class="btn btn-primary my-2 my-sm-0" type="submit">Cari</button>
                         <button name="exp" class="btn btn-primary my-2 my-sm-0" type="hidden submit"
                        formaction="export.php" value="<?php
                        if(isset($_GET["cari"])&& !empty($_GET["cari"]))
                            echo $_GET['cari'];
                        else
                            echo "";
                        ?>">Export</button>
                      </form>

                     
                    </nav>
                     
                    <?php 
                    if(isset($_GET['cari'])){
                        $cari = $_GET['cari'];
                        echo "<b>Hasil pencarian : ".$cari."</b>";
                    }
                    ?>
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTabl">
                                <thead>
                                    <tr>
                                        <th rowspan="2"><center>No. Badge</center></th>
                                        <th rowspan="2"><center>Nama</center></th>
                                        <th rowspan="2"><center>Kode Rumah</center></th>
                                        <th rowspan="2"><center>Unit Kerja</center></th>
                                        <th rowspan="2"><center>Jabatan</center></th>
                                        <th rowspan="2"><center>Kelompok RD</center></th>
                                        <th rowspan="2"><center>Status Hunian</center></th>
                                        <th rowspan="2"><center>Alamat</center></th>
                                        
                                        
                                    </tr>
                                    
                                </thead>
                                    <?php 
                                        if(isset($_GET['cari'])){
                                            $cari = $_GET['cari'];
                                            $data = mysql_query("select * from datapegawai where No_Badge like '%".$cari."%' OR Nama like '%".$cari."%' OR Alamat like '%".$cari."%'");        
                                        }else{
                                            $data = mysql_query("select * from datapegawai");       
                                        }
                                        $No_Badge = 1;
                                        while($d = mysql_fetch_array($data)){
                                        ?>
                                        <tr>
                                            <td><?php echo $d['No_Badge']; ?></td>
                                            <td><?php echo $d['Nama']; ?></td>
                                            <td><?php echo $d['kode_rumah']; ?></td>
                                            <td><?php echo $d['unit_kerja']; ?></td>
                                            <td><?php echo $d['jabatan']; ?></td>
                                            <td><?php echo $d['kelompok']; ?></td>
                                            <td><?php echo $d['status']; ?></td>
                                            <td><?php echo $d['Alamat']; ?></td>
                                            
                                            
                                           
                                        </tr>
                                        <?php } ?>
                                </table>  
                        </div>
                    </div>
                </div>
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
