<div class="row">

    <div class="col-md-12">        
        <div class="row form-group">
            <form id="uploadRefund" action="<?php echo base_url('siswa/upload_post') ?>" method="POST" enctype="multipart/form-data">
                <div class="col-md-10">
                    <input type="file" class="form-control" name="cms" accept=".xls,.xlsx" required>
                </div>
                <div class="col-md-2">
                    <button class="btn btn-primary form-control">upload file <i class="fa fa-send"></i></button>
                </div>
            </form>
        </div>
        <hr>
        <div class="table-responsive">
            <table class="table table-striped table-bordered table-hover" id="dataTable">
                <thead>
                    <tr>
                        <th>NISN</th>
                        <th>Nama Siswa</th>
                        <th>JK</th>
                        <th>TTL</th>
                        <th>NIK</th>
                        <th>Agama</th>
                        <th>Kelas</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($data_siswa as $siswa){
                        if ($siswa->nisn == ''){
                            $red = "class='bg-danger'";
                            $siswa->nisn = "DATA BELUM LENGKAP";
                        } else {                            
                            $red = "";
                        }
                        echo "<tr>
                                <td $red>$siswa->nisn</td>                                    
                                <td $red>$siswa->nama_siswa</td>
                                <td $red>$siswa->jk</td>
                                <td $red>$siswa->tempat_lahir, $siswa->tanggal_lahir</td>
                                <td $red>$siswa->nik</td>
                                <td $red>$siswa->agama</td>
                                <td $red>$siswa->rombel_saat_ini</td>
                              </tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>

</div>
</div>
</div>
<!-- CONTENT-WRAPPER SECTION END-->
