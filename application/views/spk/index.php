<div class="row">

    <div class="col-md-12">        
        <button class="btn btn-primary form-control prosesData">Proses Data</button>
        <hr>
        <div class="progress-label progressData"><i class="fa fa-spin fa-spinner"></i> Starting proses...</div>    
        <div class="progressData" id="prg">
        </div>
        <hr>
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Perhitungan SPK</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Normalisasi 1</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="contact1-tab" data-toggle="tab" href="#contact1" role="tab" aria-controls="contact1" aria-selected="false">Normalisasi 2</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Perangkingan</a>
            </li>
        </ul>
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade active" id="home" role="tabpanel" aria-labelledby="home-tab">
                <hr>
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover" id="dataTable">
                        <thead>
                            <tr>
                                <th rowspan="2" class="text-center">NISN</th>
                                <th rowspan="2" class="text-center">Nama Siswa</th>
                                <th colspan="4" class="text-center">Data Siswa</th>                        
                                <th colspan="4" class="text-center">Rating Kecocokan</th>                        
                                <tr><th class="text-center">C1</th>
                                    <th class="text-center">C2</th>
                                    <th class="text-center">C3</th>
                                    <th class="text-center">C4</th>

                                    <th class="text-center">C1</th>
                                    <th class="text-center">C2</th>
                                    <th class="text-center">C3</th>
                                    <th class="text-center">C4</th>
                                </tr>                        
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($result_sementara as $result) {
                                echo "<tr>
                                <td>$result->nisn</td>                                    
                                <td>$result->nama_siswa</td>
                                <td>$result->desc_c1</td>
                                <td>$result->desc_c2</td>
                                <td>$result->desc_c3</td>
                                <td>$result->desc_c4</td>
                                    
                                <td>$result->c1</td>
                                <td>$result->c2</td>
                                <td>$result->c3</td>
                                <td>$result->c4</td>
                              </tr>";
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="tab-pane" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                <hr>
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover" width="100%" id="dataTable1">
                        <thead>
                            <tr>
                                <th rowspan="2" class="text-center">NISN</th>
                                <th rowspan="2" class="text-center">Nama Siswa</th>
                                <th colspan="4" class="text-center">Hasil Nilai Fuzzy</th>                        
                                <tr><th class="text-center">C1</th>
                                    <th class="text-center">C2</th>
                                    <th class="text-center">C3</th>
                                    <th class="text-center">C4</th>
                                </tr>                        
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($result_sementara as $result) {
                                echo "<tr>
                                <td>$result->nisn</td>                                    
                                <td>$result->nama_siswa</td>
                                <td>$result->c1_2</td>
                                <td>$result->c2_2</td>
                                <td>$result->c3_2</td>
                                <td>$result->c4_2</td>
                              </tr>";
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="tab-pane" id="contact1" role="tabpanel" aria-labelledby="contact1-tab">
                <hr>
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover" width="100%" id="dataTable2">
                        <thead>
                            <tr>
                                <th rowspan="2" class="text-center">NISN</th>
                                <th rowspan="2" class="text-center">Nama Siswa</th>
                                <th colspan="4" class="text-center">Hasil Nilai Fuzzy</th>                        
                                <tr><th class="text-center">C1</th>
                                    <th class="text-center">C2</th>
                                    <th class="text-center">C3</th>
                                    <th class="text-center">C4</th>
                                </tr>                        
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($result_sementara as $result) {
                                echo "<tr>
                                <td>$result->nisn</td>                                    
                                <td>$result->nama_siswa</td>
                                <td>$result->c1_3</td>
                                <td>$result->c2_3</td>
                                <td>$result->c3_3</td>
                                <td>$result->c4_3</td>
                              </tr>";
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                <hr>
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover" id="dataTable3">
                        <thead>
                            <tr>
                                <th class="text-center">NISN</th>
                                <th class="text-center">Nama Siswa</th>
                                <th class="text-center">Hasil Nilai</th>   
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($result_sementara as $result) {
                                echo "<tr>
                                <td>$result->nisn</td>                                    
                                <td>$result->nama_siswa</td>
                                <td>$result->total_3</td>
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
</div>
</div>
<!-- CONTENT-WRAPPER SECTION END-->


<script src="<?= base_url() ?>assets/vendors/jquery-ui/jquery-ui.min.js"></script>
    
<script>
    
    $('.progressData').hide();
    var progressTimer, progressbar = $('#prg'), progressLabel = $( ".progress-label" );
    
    $(".prosesData").on("click", function(){
        
        $(this).attr('disabled', 'disabled').text('Prosessing...');
        
        $('.progressData').show();   
      
        $.ajax({
            type: 'GET',
            url: '<?php echo base_url() ?>nilai_spk/proses_nilai',
            dataType: 'json'
            }).then(function (data) {
                if (data.status) {
                   progressTimer = setTimeout(progress, 2000);
                   progressbar.progressbar({
                    value: true,
                    change: function() {
                      progressLabel.text( "Current Progress: " + progressbar.progressbar( "value" ) + "%" );
                    },
                    complete: function(){
                        if(!alert('Data Berhasil Diproses!')){window.location.reload();}
                    }
                  });
                } else {
                    if(!alert('Data Gagal Diproses!')){window.location.reload();}
                }
            });
    });
    
    function progress() {
    
      var val = progressbar.progressbar( "value" ) || 0;
 
      progressbar.progressbar( "value", val + Math.floor( Math.random() * 3 ) );
 
      if ( val <= 99 ) {
        progressTimer = setTimeout( progress, 50 );
      }
    }
    
</script>
