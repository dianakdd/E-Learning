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



</head>

<body>
<section id="home">
<nav class="navbar">
    <img style="margin-top: -10px; width:5%;" src="logo.png"/>
			<a style=" margin-top: -10px; margin-right: 580px;" class="navbar-brand">Selamat Datang Dosen PENS</a>
                 <form id="contact-form" class="contact-form mt-6" method="post" action="https://jthemes.net/themes/html/bolby/demo/form/contact.php">
                    <ul class="navbar-nav mr-auto">
			             <div class="row">
							<div class="column col-md-6">
								<!-- Name input -->
								<div class="form-group">
									<input style=" margin-top: 20px; margin-right: 70px; height: 40px; width: 300px;" type="text" class="form-control"  placeholder="Search...">
								</div>
							</div>
                </ul>
            </form>
			<a style="margin-top: -10px; margin-right: 50px; " href="logout.php" class="icon-logout"></i></a>
			<img style="width:3%; margin-right: 30px; margin-top: -10px; " src="photo2.png"/>
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
            <h3 class="mb-3 mt-0">&nbsp;&nbsp;&nbsp;Diana Kusuma</h3>
        </div>

        <!-- main menu -->
        <nav>
		<ul class="vertical-menu scrollspy">
			<li class="active"><a href="home_dosen.php"><i class="icon-home"></i>&ensp;Home</a></li>
			<li><a href="jadwal2.php"><i class="icon-grid"></i>&ensp;Jadwal Kuliah</a></li>
			<li><a href="tabelnilai.php"><i class="icon-layers"></i>&ensp;Nilai Mahasiswa</a></li>
			<li><a style=" color: #FF4C60; text-shadow: 3px 3px 6px #b8b9be, -3px -3px 6px #fff;" href="upload2.php"><i class="icon-note"></i>&ensp;Upload Soal</a></li>
            <li><a href="logout.php"><i class="icon-logout"></i>&ensp;Keluar</a></li>
		</ul>
	</nav>
        <!-- site footer -->
    </header>

    <!-- main layout -->
    <main class="content">
        <!-- section contact -->
        <section>

            <div class="container">

                <!-- section title -->
                <h2 class="section-title wow fadeInUp">Upload Soal</h2>

                    <div class="col-md-8">
                        <!-- Contact Form -->
                        <form id="contact-form" class="contact-form mt-6" method="post" action="proses_upload2.php" enctype="multipart/form-data">

                            <div class="messages"></div>

                            <div class="row">
                                <div class="column col-md-6">
                                    <!-- Name input -->
                                    <div class="form-group">
                                        <input name="dosen" type="text" class="form-control" placeholder="Dosen: " >
                                    </div>
                                </div>
                                <div class="column col-md-6">
                                    <div class="form-group">
                                        <select name="matkul" type="text" class="form-control">
                                            <option value="">Mata Kuliah: </option>
                                            <option value="ui/ux">UI/UX</option>
                                            <option value="webdev">Web Development</option>
                                            <option value="photo">Photography</option>
                                            <option value="so">Sistem Operasi</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="column col-md-6">
                                    <!-- Email input -->
                                    <div class="form-group">
                                         <input name="deadline" type="date" class="form-control" placeholder="" >
                                    </div>
                                </div>
                                <div class="column col-md-6">
                                    <!-- Email input -->
                                    <div class="form-group">
                                        <select name="tugas" type="text" class="form-control">
                                            <option value="">Tugas ke: </option>
                                            <option value="01">Tugas ke: 01</option>
                                            <option value="02">Tugas ke: 02</option>
                                            <option value="03">Tugas ke: 03</option>
                                            <option value="04">Tugas ke: 04</option>
                                        </select>
                                    </div>
                                </div>

                        
                                <div class="column col-md-6">
                                    <div class="form-group">
                                        <div class="form-control position-relative parent-custom-file-input">
                                            <input type="file" class="custom-file-input-self" id="file-input" name="inputfile" required="required" data-error="Subject is required.">
                                            <span class="custom-file-input-text">Select some files</span>
                                        </div>
                                    </div>
                                </div>

                                <div class="column col-md-12">
                                    <!-- Message textarea -->
                                    <div class="form-group">
                                        <textarea name="inputcatatan" id="InputMessage" class="form-control" rows="5" placeholder="Message" required="required" data-error="Message is required."></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                            </div>

                            <button type="submit" name="submit" id="submit" value="Submit" class="btn btn-default">Submit</button>
                            <!-- Send Button -->
                            <div class="spacer" data-height="70"></div>
                        </form>
                        <!-- Contact Form end -->
                    </div>

                </div>

            </div>

        </section>

        <div class="spacer" data-height="96"></div>

    </main>

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
    <script>
        let fileInput = document.querySelector("#file-input");
        fileInput.onchange = (e) => {
            let target = e.target;
            let fileName = target.files[0].name;
            let customFileLabel = target.parentNode.querySelector(".custom-file-input-text");
            customFileLabel.innerHTML = fileName;
            target.parentNode.style.opacity = '1';
        }
    </script>
</body>

</html>