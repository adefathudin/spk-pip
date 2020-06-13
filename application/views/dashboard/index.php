
<div class="row">
    <div class="col-md-4 col-sm-3 col-xs-6">
        <div class="dashboard-div-wrapper bk-clr-one">
            <i  class="fa fa-users" ></i> DATA SISWA AKTIF
            <hr>
            <h5><?php print_r($total_siswa_aktif); ?></h5>
        </div>
    </div>
    <div class="col-md-4 col-sm-3 col-xs-6">
        <div class="dashboard-div-wrapper bk-clr-two">
            <i  class="fa fa-book" ></i> PENERIMA PIP
            <hr>
            <h5><?php print_r($total_siswa_kip->total); ?></h5>
        </div>
    </div>
    <div class="col-md-4 col-sm-3 col-xs-6">
        <div class="dashboard-div-wrapper bk-clr-three">
            <i  class="fa fa-user-clock" ></i> TIDAK MASUK KRITERIA
            <hr>
            <h5><?php print_r($total_non_kriteria->total); ?></h5>
        </div>
    </div>
</div>

<?php if (!empty($data_siswa_final)){ ?>

<div class="table-responsive">
    <table class="table table-striped table-bordered table-hover" id="dataTable6">
        <thead>
            <tr>
                <th>NISN</th>
                <th>Nama Siswa</th>
                <th>Kelas</th>
                <th>JK</th>
                <th>TTL</th>
                <th>Nama Orang Tua/Wali</th>
                <th>Alamat</th>
                <th>Score</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($data_siswa_final as $siswa) {
                echo "<tr>
                        <td><a href='#' data-toggle='modal' data-nisn='$siswa->nisn' data-target='#detailSiswaModal' class='btnDetailSiswa'>$siswa->nisn</a></td>
                        <td>$siswa->nama_siswa</td>
                        <td>$siswa->rombel_saat_ini</td>
                        <td>$siswa->jk</td>
                        <td>$siswa->tempat_lahir, $siswa->tanggal_lahir</td>
                        <td>$siswa->nama_ayah</td>
                        <td>$siswa->alamat</td>
                        <td>$siswa->total_3</td>                                
                      </tr>";
            }
            ?>
        </tbody>
    </table>
</div>

<?php } ?>

</div>
</div>
<!-- CONTENT-WRAPPER SECTION END-->

<div class="modal fade" id="detailSiswaModal" tabindex="-1" role="dialog" aria-labelledby="btnDetailSiswaModal" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
          <h5 class="modal-title">Detail Siswa</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <table class="table table-striped detailSiswa">

          </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<script>
        $(".btnDetailSiswa").on("click", function(){
        
        var nisn = $(this).attr('data-nisn');
        
        $('.detailSiswaModal').show();   
        
        $.ajax({
            type: 'GET',
            url: '<?php echo base_url() ?>siswa/get_detail_siswa',
            dataType: 'json',
            data: {nisn:nisn}
            }).then(function (data) {
                if (data.status) {
                    
                    var i = '';
                    var html = '';
                    
                    for (i = 0; i < data.detail_siswa.length; i++) {
                   
                        html +=  
                                '<tr><td>NISN</td><td>:</td><td>'+data.detail_siswa[i].nisn+'</td></tr>' +
                                '<tr><td>Nama Siswa</td><td>:</td><td>'+data.detail_siswa[i].nama_siswa+'</td></tr>' +
                                '<tr><td>TTL</td><td>:</td><td>'+data.detail_siswa[i].tempat_lahir+', '+data.detail_siswa[i].tanggal_lahir+'</td></tr>' +
                                '<tr><td>Jenis Kelamin</td><td>:</td><td>'+data.detail_siswa[i].jk+'</td></tr>' +
                                '<tr><td>Alamat</td><td>:</td><td>'+data.detail_siswa[i].alamat+'</td></tr>' +
                                '<tr><td>Kelas</td><td>:</td><td>'+data.detail_siswa[i].rombel_saat_ini+'</td></tr>' +
                                '<tr><td>Agama</td><td>:</td><td>'+data.detail_siswa[i].agama+'</td></tr>' +
                                '<tr><td>Nama Orang Tua / Wali</td><td>:</td><td>'+data.detail_siswa[i].nama_ayah+'</td></tr>' +
                                '<tr><td>Pekerjaan Orang Tua</td><td>:</td><td>'+data.detail_siswa[i].pekerjaan_ayah+'</td></tr>' +
                                '<tr><td>Penghasilan Orang Tua</td><td>:</td><td>'+data.detail_siswa[i].penghasilan_orang_tua+'</td></tr>' +
                                '<tr><td>Jumlah Saudara Kandung</td><td>:</td><td>'+data.detail_siswa[i].jumlah_saudara_kandung+'</td></tr>'+
                                '<tr><td>KIP</td><td>:</td><td>'+data.detail_siswa[i].penerima_kip+' '+data.detail_siswa[i].nomor_kip+'</td></tr>' +
                                '<tr><td>KPS</td><td>:</td><td>'+data.detail_siswa[i].penerima_kps+' '+data.detail_siswa[i].no_kps+'</td></tr>' ;
                                
                    }
                   }
                  $('.detailSiswa').html(html);
            });
    });
    
</script>