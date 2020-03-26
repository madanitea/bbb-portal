<?php
    session_start();
  if(empty($_SESSION['username'])){
    header("location:/login.php");
  }else{
    require "config.php";
    $select = mysqli_query($connection,"SELECT *, date(waktu_record) AS tanggal, time(waktu_record) AS jam  FROM data_record ORDER BY id desc");
    $bam = mysqli_query($connection, "SELECT * FROM data_record ORDER BY id desc");
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Record Data Management</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/Footer-Dark.css">
    <link rel="stylesheet" href="assets/css/Highlight-Clean.css">
    <link rel="stylesheet" href="assets/css/Map-Clean.css">
    <link rel="stylesheet" href="assets/css/Navigation-with-Button.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <div class="container">
        <nav class="navbar navbar-light navbar-expand-md navigation-clean-button">
            <div class="container text-right">
                <div class="navbar-brand">Selamat datang Admin</div>
                <a href="logout.php" class="nav-link btn btn-sm btn-warning">Logout</a> 
            </div>
        </nav>
    </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-xl-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Tambah Record ViCon</h5>
                            <form method="POST" action="tambah_record.php">
                                <div class="row">
                                    <div class="col-md-3 col-xl-3">
                                        <input type="text" name="nama_record" class="form-control" placeholder="Nama Record">
                                    </div>
                                    <div class="col-md-3 col-xl-2">
                                        <input type="date" name="tanggal" class="form-control" placeholder="Tanggal">
                                    </div>
                                    <div class="col-md-3 col-xl-2">
                                        <input type="time" name="jam" class="form-control" placeholder="Jam">
                                    </div>
                                    <div class="col-md-4 col-xl-3">
                                        <input type="text" name="url" class="form-control" placeholder="URL">
                                    </div>
                                    <div class="col-md-1 col-xl-1">
                                        <button class="btn btn-dark">+ Tambah</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <div>
        <div class="container mt-3">
            <div class="row">
                <div class="col-md-12 col-xl-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-title">
                                <h5 class="">Data Record</h5> <div class="float-right badge badge-sm badge-primary">Ditemukan <?php 
                                    $row = mysqli_num_rows($bam);
                                    echo $row;
                                ?> data</div>

                            </div>
                            <div class="card-title">
                                <p>Cari data ? <b>Ctrl+f</b></p>
                            </div>
                            <div class="table-responsive">
                                <table class="table table-borderless table-striped table-hover">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Record</th>
                                            <th>Waktu</th>
                                            <th>URL</th>
                                        </tr>
                                    </thead>
                                    <?php
                                        $no=1;
                                        while ($data = mysqli_fetch_array($select, MYSQLI_ASSOC)) { ?>
                                        <tr>
                                            <td><?php echo $no;?></td>
                                            <td><?php echo $data['nama_record']; ?></td>
                                            <td><?php echo $data['waktu_record']; ?></td>
                                            <td><?php echo $data['url']; ?></td>
                                            <td>
                                                <a href="delete.php?apa=record&id=<?php echo $data['id']; ?>" class="btn btn-danger btn-sm"><i class="fa fa-lg fa-trash"></i> Delete</a>
                                                <button type="button" class="btn btn-sm btn-success" data-toggle="modal" data-target="#update<?php echo $data['id']; ?>">Update</button>
                                            </td>
                                        </tr><div class="modal fade" id="update<?php echo $data['id']; ?>" role="dialog">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"><i class="ti-pencil-alt"></i> Update Data Record <?php echo $data['nama_record']; ?></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="update.php" method="POST">
                    <input type="hidden" name="id" value="<?php echo $data['id']; ?>">
                <div class="form-group">
                    Nama Record :
                    <input type="text" name="nama_record" value="<?php echo $data['nama_record']; ?>" class="form-control">
                </div>
                <div class="form-group">
                    Tanggal Record :
                    <input type="date" name="tanggal" value="<?php echo $data['tanggal']; ?>" class="form-control">
                </div>
                <div class="form-group">
                    Jam Record :
                    <input type="time" name="jam" value="<?php echo $data['jam']; ?>" class="form-control">
                </div>
                <div class="form-group">
                    URL :
                    <input type="text" name="url" value="<?php echo $data['url']; ?>" class="form-control">
                </div>
            </div>
            <div class="modal-footer">
                <button id="action" type="button" class="btn btn-sm btn-secondary" data-dismiss="modal">Batal</button>
                <input type="hidden" name="apa" value="record">
                <button id="action" type="submit" class="btn btn-sm btn-success">update</button>
                </form>
            </div>
          </div>
        </div>
      </div>

                                            <?php
                                        $no++; }
                                    ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="highlight-clean">
    </div>
    <div class="map-clean"></div>
    <div></div>

    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    
</body>

</html>

<?php }; ?>