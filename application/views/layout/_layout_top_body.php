
    <!-- HEADER END-->
    <div class="navbar navbar-inverse set-radius-zero">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

            </div>
            <h3><?= APP_TITLE ?></h3>
        </div>
    </div>
    <!-- LOGO HEADER END-->
    <section class="menu-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="navbar-collapse collapse ">
                        <ul id="menu-top" class="nav navbar-nav navbar-right">
                            <li><a href="<?= base_url()?>dashboard">Dashboard</a></li>
                            <li><a href="<?= base_url()?>kriteria">Kriteria</a></li>
                            <li><a href="<?= base_url()?>siswa">Data Siswa</a></li>
                            <li><a href="<?= base_url()?>nilai_spk">Nilai SPK</a></li>
                            
                            <li><a href='#' data-toggle='modal' data-target='#logoutModal'><i class="fa fa-lock"></i> Logout</a></li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </section>
    
    
    <!-- MENU SECTION END-->
    <div class="content-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h4 class="page-head-line"><?= $title ?></h4>

                </div>

            </div>