<?php
include '../koneksi.php';
if (isset($_POST['submit'])) {
    $nilai = $_POST['nilai'];
    $id = $_POST['id'];
    $update = mysqli_query($conn, "UPDATE tugas SET nilai=$nilai WHERE id=$id");
    if ($update) {
        header('location:tabelnilai.php');
    }
}
?>
<!DOCTYPE html>
<html lang="en-US">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>E-Learning</title>
    <meta name="description" content="Bolby - Portfolio/CV/Resume HTML Template">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="../Css/logo_pens.png">

    <!-- STYLESHEETS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" media="all">
    <link rel="stylesheet" href="css/all.min.css" type="text/css" media="all">
    <link rel="stylesheet" href="css/simple-line-icons.css" type="text/css" media="all">
    <link rel="stylesheet" href="css/animate.css" type="text/css" media="all">
    <link rel="stylesheet" href="css/style.css" type="text/css" media="all">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>



</head>

<body>
    <section style="padding-top: 23px; padding-bottom: 23px;"id="home">
        <nav class="navbar">
            <img style="margin-top: -10px; width:5%;" src="logo.png" />
            <a style=" margin-top: -10px; margin-right: 950px;" class="navbar-brand">Selamat Datang Dosen PENS</a>
            <form id="contact-form" class="contact-form mt-6" method="post" action="https://jthemes.net/themes/html/bolby/demo/form/contact.php">
                <ul class="navbar-nav mr-auto">
                    <div class="row">
                        <div class="column col-md-6">
                            <!-- Name input -->
                           
                        </div>
                </ul>
            </form>
            <a style="margin-top: -10px; margin-right: 50px; " href="logout.php" class="icon-logout"></i></a>
            <img style="width:3%; margin-right: 30px; margin-top: -10px; " src="photo2.png" />
        </nav>
    </section>
    <hr style="margin-top: -20px;">

    <!-- desktop header -->
    <header class="desktop-header-1 light d-flex align-items-start flex-column">

        <!-- logo image -->
        <div class="site-logo">
            <a href="index-light.html">
                <img style="margin-left: 15%;" src="photo2.png" />
            </a>
            <p></p>
            <h3 style="font-size: 24px;" class="mb-3 mt-0">&nbsp;&nbsp;&nbsp;Diana Kusuma</h3>
        </div>

        <!-- main menu -->
        <nav>
            <ul class="vertical-menu scrollspy">
                <li class="active"><a href="home_dosen.php"><i class="icon-home"></i>&ensp;Home</a></li>
                <li><a href="jadwal2.php"><i class="icon-grid"></i>&ensp;Jadwal Kuliah</a></li>
                <li><a style=" color: #FF4C60; text-shadow: 3px 3px 6px #b8b9be, -3px -3px 6px #fff;" href="tabelnilai.php"><i class="icon-layers"></i>&ensp;Nilai Mahasiswa</a></li>
                <li><a href="upload2.php"><i class="icon-note"></i>&ensp;Upload Soal</a></li>
                <li><a href="logout.php"><i class="icon-logout"></i>&ensp;Keluar</a></li>
            </ul>
        </nav>
        <!-- site footer -->
    </header>
    <div class="container-xl">
        <div class="table-responsive">
            <div class="table-wrapper">
                <div class="table-title">
                    <div class="row">
                        <div class="col-sm-6">
                            <h2>Data Nilai <b>Mahasiswa</b></h2>
                        </div>
                        <div class="col-sm-6">
                            <a href="#addEmployeeModal" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Add New Employee</span></a>
                            <a href="#deleteEmployeeModal" class="btn btn-danger" data-toggle="modal"><i class="material-icons">&#xE15C;</i> <span>Delete</span></a>
                        </div>
                    </div>
                </div>
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>
                                <span class="custom-cekbox">
                                    <input type="checkbox" id="selectAll">
                                    <label for="selectAll"></label>
                                </span>
                            </th>
                            <th>Nama</th>
                            <th>Mata Kuliah</th>
                            <th>Nama Tugas</th>
                            <th>File Tugas</th>
                            <th>Nilai</th>
                            <th>Catatan</th>
                            <th>action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php

                        $data = mysqli_query($conn, "SELECT * FROM tugas");
                        foreach ($data as $value) {
                        ?>
                            <tr>
                                <td>
                                    <span class="custom-checkbox">
                                        <input type="checkbox" id="checkbox1" name="options[]" value="1">
                                        <label for="checkbox1"></label>
                                    </span>
                                </td>
                                <td><?php echo $value['nama'] ?></td>
                                <td><?php echo $value['mata_kuliah'] ?></td>
                                <td><?php echo $value['nama_tugas'] ?></td>
                                <td><a href="download.php?filename=<?php echo $value['file_tugas'] ?>"><?php echo $value['file_tugas'] ?></a></td>
                                <td><?php echo $value['nilai'] ?></td>
                                <td><?php echo $value['catatan'] ?></td>

                                <td>
                                    <a href="" data-target="#editEmployeeModal<?php echo $value['id'] ?>" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
                                    <div id="editEmployeeModal<?php echo $value['id'] ?>" class="modal fade">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <form action="" method="POST">
                                                    <input type="hidden" value="<?php echo $value['id'] ?>" name="id">
                                                    <div class="modal-header">
                                                        <h4 class="modal-title">Edit Mahasiswa</h4>
                                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="form-group">
                                                            <label>Nama</label>
                                                            <input value="<?php echo $value['nama'] ?>" type="text" class="form-control" disabled>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Mata Kuliah</label>
                                                            <input value="<?php echo $value['mata_kuliah'] ?>" type="email" class="form-control" disabled>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Nama Tugas</label>
                                                            <input value="<?php echo $value['nama_tugas'] ?>" class="form-control" disabled>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Nilai</label>
                                                            <input name="nilai" type="text" class="form-control" required>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                                                        <input name="submit" type="submit" class="btn btn-info" value="Save">
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <a href="" data-target="#deleteEmployeeModal<?php echo $value['id']?>" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
                                    <div id="deleteEmployeeModal<?php echo $value['id']?>" class="modal fade">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <form action="delete_tugas.php" method="POST">
                                                    <input type="hidden" name="id" value="<?php echo $value['id']?>">
                                                    <div class="modal-header">
                                                        <h4 class="modal-title">Delete Data</h4>
                                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <p>Apakah anda yakin untuk menghapus file ini?</p>
                                                        <p class="text-warning"><small>File tersebut tidak bisa kembali</small></p>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                                                        <input type="submit" class="btn btn-danger" value="Delete">
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Go to top button -->
    <a href="javascript:" id="return-to-top"><i class="fas fa-arrow-up"></i></a>

    <!-- SCRIPTS -->
    <script src="js/jquery-1.12.3.min.js"></script>
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/isotope.pkgd.min.js"></script>
    <script src="js/infinite-scroll.min.js"></script>


    <script src="js/validator.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/morphext.min.js"></script>
    <script src="js/custom.js"></script>
</body>

<style>
    body {
        color: #5E5C7F;
        background-color: #e0e5ec;
        font-family: 'Varela Round', sans-serif;
        font-size: 15px;
    }

    .table-responsive {
        margin: 30px 0;
        margin-left: 150px;
        margin-top: 70px;
    }

    .table-wrapper {
        color: #5E5C7F;
        background-color: #e0e5ec;
        padding: 20px 25px;
        border-radius: 3px;
        min-width: 1000px;
        box-shadow: 0 1px 1px rgba(0, 0, 0, .05);
    }

    .table-title {
        padding-bottom: 15px;
        color: #5E5C7F;
        background-color: #e0e5ec;
        padding: 16px 30px;
        min-width: 100%;
        margin: -20px -25px 10px;
        border-radius: 3px 3px 0 0;
    }

    .table-title h2 {
        margin: 5px 0 0;
        font-size: 24px;
    }

    .table-title .btn-group {
        float: right;
    }

    .table-title .btn {
        color: #fff;
        float: right;
        font-size: 13px;
        border: none;
        min-width: 50px;
        border-radius: 2px;
        border: none;
        outline: none !important;
        margin-left: 10px;
    }

    .table-title .btn i {
        float: left;
        font-size: 21px;
        margin-right: 5px;
    }

    .table-title .btn span {
        float: left;
        margin-top: 2px;
    }

    table.table tr th,
    table.table tr td {
        color: #5E5C7F;
        background-color: #e0e5ec;
        padding: 12px 15px;
        vertical-align: middle;
    }

    table.table tr th:first-child {
        width: 60px;
    }

    table.table tr th:last-child {
        width: 100px;
    }

    table.table-striped tbody tr:nth-of-type(odd) {
        background-color: #fcfcfc;
    }

    table.table-striped.table-hover tbody tr:hover {
        background: #f5f5f5;
    }

    table.table th i {
        font-size: 13px;
        margin: 0 5px;
        cursor: pointer;
    }

    table.table td:last-child i {
        opacity: 0.9;
        font-size: 22px;
        margin: 0 5px;
    }

    table.table td a {
        font-weight: bold;
        color: #566787;
        display: inline-block;
        text-decoration: none;
        outline: none !important;
    }

    table.table td a:hover {
        color: #2196F3;
    }

    table.table td a.edit {
        color: #FFC107;
    }

    table.table td a.delete {
        color: #F44336;
    }

    table.table td i {
        font-size: 19px;
    }

    table.table .avatar {
        border-radius: 50%;
        vertical-align: middle;
        margin-right: 10px;
    }

    .pagination {
        float: right;
        margin: 0 0 5px;
    }

    .pagination li a {
        border: none;
        font-size: 13px;
        min-width: 30px;
        min-height: 30px;
        color: #999;
        margin: 0 2px;
        line-height: 30px;
        border-radius: 2px !important;
        text-align: center;
        padding: 0 6px;
    }

    .pagination li a:hover {
        color: #666;
    }

    .pagination li.active a,
    .pagination li.active a.page-link {
        background: #03A9F4;
    }

    .pagination li.active a:hover {
        background: #0397d6;
    }

    .pagination li.disabled i {
        color: #ccc;
    }

    .pagination li i {
        font-size: 16px;
        padding-top: 6px
    }

    .hint-text {
        float: left;
        margin-top: 10px;
        font-size: 13px;
    }

    /* Custom checkbox */
    .custom-checkbox {
        position: relative;
    }

    .custom-checkbox input[type="checkbox"] {
        opacity: 0;
        position: absolute;
        margin: 5px 0 0 3px;
        z-index: 9;
    }

    .custom-checkbox label:before {
        width: 18px;
        height: 18px;
    }

    .custom-checkbox label:before {
        content: '';
        margin-right: 10px;
        display: inline-block;
        vertical-align: text-top;
        background: white;
        border: 1px solid #bbb;
        border-radius: 2px;
        box-sizing: border-box;
        z-index: 2;
    }

    .custom-checkbox input[type="checkbox"]:checked+label:after {
        content: '';
        position: absolute;
        left: 6px;
        top: 3px;
        width: 6px;
        height: 11px;
        border: solid #000;
        border-width: 0 3px 3px 0;
        transform: inherit;
        z-index: 3;
        transform: rotateZ(45deg);
    }

    .custom-checkbox input[type="checkbox"]:checked+label:before {
        border-color: #03A9F4;
        background: #03A9F4;
    }

    .custom-checkbox input[type="checkbox"]:checked+label:after {
        border-color: #fff;
    }

    .custom-checkbox input[type="checkbox"]:disabled+label:before {
        color: #b8b8b8;
        cursor: auto;
        box-shadow: none;
        background: #ddd;
    }

    /* Modal styles */
    .modal .modal-dialog {
        max-width: 400px;
    }

    .modal .modal-header,
    .modal .modal-body,
    .modal .modal-footer {
        padding: 20px 30px;
    }

    .modal .modal-content {
        border-radius: 3px;
        font-size: 14px;
    }

    .modal .modal-footer {
        background: #ecf0f1;
        border-radius: 0 0 3px 3px;
    }

    .modal .modal-title {
        display: inline-block;
    }

    .modal .form-control {
        border-radius: 2px;
        box-shadow: none;
        border-color: #dddddd;
    }

    .modal textarea.form-control {
        resize: vertical;
    }

    .modal .btn {
        border-radius: 2px;
        min-width: 100px;
    }

    .modal form label {
        font-weight: normal;
    }
</style>
<script>
    $(document).ready(function() {
        // Activate tooltip
        $('[data-toggle="tooltip"]').tooltip();

        // Select/Deselect checkboxes
        var checkbox = $('table tbody input[type="checkbox"]');
        $("#selectAll").click(function() {
            if (this.checked) {
                checkbox.each(function() {
                    this.checked = true;
                });
            } else {
                checkbox.each(function() {
                    this.checked = false;
                });
            }
        });
        checkbox.click(function() {
            if (!this.checked) {
                $("#selectAll").prop("checked", false);
            }
        });
    });
</script>

</html>