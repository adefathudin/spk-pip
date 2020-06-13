<div class="row">
    
    <div class="col-md-6">
        <hr />
        <div class="table-responsive">
            <table class="table table-striped table-bordered table-hover">
                <thead>
                    <tr>
                        <th colspan="5" class="text-center">KRITERIA TANGGUNGAN ORANG TUA (C1)</th>
                    </tr>
                    <tr>
                        <th>No.</th>
                        <th>PILIHAN</th>
                        <th>FUZZY</th>
                        <th>BOBOT</th>
                        <th>ACTION</th>
                    </tr>
                </thead>
                <tbody>
                     <?php                    
                    $no = 1;
                    foreach ($bobot_c1 as $c1){
                        echo "<tr>
                                <td>".$no++."</td>  
                                <td>$c1->kriteria anak</td>                                    
                                <td>$c1->fuzzy</td>
                                <td>$c1->bobot</td>
                                <td><a href='#' data-toggle='modal' data-target='#detailBobot' class='btn btn-light btnDetailBobot' data-id='$c1->id_bobot'><i class='fa fa-edit'></i></a></td>
                              </tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div> 
    
    
    <div class="col-md-6">
        <hr />
        <div class="table-responsive">
            <table class="table table-striped table-bordered table-hover">
                <thead>
                    <tr>
                        <th colspan="5" class="text-center">KRITERIA PENGHASILAN ORANG TUA (C2)</th>
                    </tr>
                    <tr>
                        <th>No.</th>
                        <th>PILIHAN</th>
                        <th>FUZZY</th>
                        <th>BOBOT</th>
                        <th>ACTION</th>
                    </tr>
                </thead>
                <tbody>
                    <?php                    
                    $no = 1;
                    foreach ($bobot_c2 as $c2){
                        echo "<tr>
                                <td>".$no++."</td>  
                                <td>$c2->kriteria</td>                                    
                                <td>$c2->fuzzy</td>
                                <td>$c2->bobot</td>
                                <td><a href='#' data-toggle='modal' data-target='#detailBobot' class='btn btn-light btnDetailBobot' data-id='$c2->id_bobot'><i class='fa fa-edit'></i></a></td>
                              </tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div> 
    
    
    <div class="col-md-6">
        <hr />
        <div class="table-responsive">
            <table class="table table-striped table-bordered table-hover">
                <thead>
                    <tr>
                        <th colspan="5" class="text-center">KRITERIA PEKERJAAN ORANG TUA (C3)</th>
                    </tr>
                    <tr>
                        <th>No.</th>
                        <th>PILIHAN</th>
                        <th>FUZZY</th>
                        <th>BOBOT</th>
                        <th>ACTION</th>
                    </tr>
                </thead>
                <tbody>
                    <?php                    
                    $no = 1;
                    foreach ($bobot_c3 as $c3){
                        echo "<tr>
                                <td>".$no++."</td>  
                                <td>$c3->kriteria</td>                                    
                                <td>$c3->fuzzy</td>
                                <td>$c3->bobot</td>
                                <td><a href='#' data-toggle='modal' data-target='#detailBobot' class='btn btn-light btnDetailBobot' data-id='$c3->id_bobot'><i class='fa fa-edit'></i></a></td>
                              </tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div> 
    
    
    <div class="col-md-6">
        <hr />
        <div class="table-responsive">
            <table class="table table-striped table-bordered table-hover">
                <thead>
                    <tr>
                        <th colspan="5" class="text-center">KRITERIA KEADAAN KELUARGA (C4)</th>
                    </tr>
                    <tr>
                        <th>No.</th>
                        <th>PILIHAN</th>
                        <th>FUZZY</th>
                        <th>BOBOT</th>
                        <th>ACTION</th>
                    </tr>
                </thead>
                <tbody>
                    <?php                    
                    $no = 1;
                    foreach ($bobot_c4 as $c4){
                        echo "<tr>
                                <td>".$no++."</td>  
                                <td>$c4->kriteria</td>                                    
                                <td>$c4->fuzzy</td>
                                <td>$c4->bobot</td>
                                <td><a href='#' data-toggle='modal' data-target='#detailBobot' class='btn btn-light btnDetailBobot' data-id='$c4->id_bobot'><i class='fa fa-edit'></i></a></td>
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

<div class="modal fade" id="detailBobot" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form class="form-group" method="POST" action="<?= base_url() ?>kriteria/edit_bobot">
                <div class="modal-header bg-info">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Kriteria
                    </h5>
                </div>
                <div class="modal-body">
                    <div class="form-group row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Kategori</label>
                        <div class="col-sm-10">
                            <input type="text" readonly class="form-control kategori" name="">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">ID Kriteria</label>
                        <div class="col-sm-10">
                            <input type="text" readonly class="form-control id_kriteria" name="id_kriteria">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Pilihan</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control kriteria" name="kriteria">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Fuzzy</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control fuzzy" name="fuzzy">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputPassword" class="col-sm-2 col-form-label">Bobot</label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control bobot" name="bobot" id="inputPassword" placeholder="">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-primary" type="submit"><i class="fa fa-save"></i> Save</button>
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>

       $(document).on('click', '.btnDetailBobot', function(){

       var id_bobot = $(this).attr('data-id');
       $.ajax({
           type: 'GET',
           url: '<?= base_url() ?>kriteria/detail_bobot',
           dataType: 'json',
           data: {id_bobot: id_bobot}
       }).then(function (data) {

           if (data.status) {
               var i = '';
               for (i=0;i < data.item.length; i++){

                $('.kategori').val(data.item[i].kategori);
                $('.id_kriteria').val(data.item[i].id_bobot);
                $('.kriteria').val(data.item[i].kriteria);
                $('.fuzzy').val(data.item[i].fuzzy);
                $('.bobot').val(data.item[i].bobot);

           }
       }else {


           }
       })
       });      
    </script>