
    <!-- FOOTER SECTION END-->
    <!-- JAVASCRIPT AT THE BOTTOM TO REDUCE THE LOADING TIME  -->
    <!-- CORE JQUERY SCRIPTS -->
    <!-- BOOTSTRAP SCRIPTS  -->
    <script src="assets/js/bootstrap.js"></script>
    
<script src="<?= base_url() ?>assets/vendors/datatables/jquery.dataTables.js" type="text/javascript"></script>

<script src="<?= base_url() ?>assets/vendors/datatables/dataTables.buttons.min.js"></script>

<script src="<?= base_url() ?>assets/vendors/datatables/buttons.print.min.js"></script>
<script src="<?= base_url() ?>assets/vendors/datatables/dataTables.bootstrap4.min.js"></script>


<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <a class="btn btn-primary" href="<?php echo base_url('auth/logout') ?>">Logout <i class="fas fa-fw fa-sign-out-alt"></i></a>
            </div>
        </div>
    </div>
</div>

<script>
    $('#dataTable').DataTable({
        sDom: "<'row'<'col-sm-3'l><'col-sm-5'B><'col-sm-4'f>r>t<'row'<'col-sm-6'i><'col-sm-6'p>>",
                buttons: {
                    buttons: [ 
                        {
                            extend: 'print',
                            text: '<i class="fa fa-print"></i>',
                            className:'btn btn-default btn-sm',
                            title: 'Data Produksi 2020-04',
                            exportOptions: {
                                columns:[0, 1, 2,3,4,5]
                            },
                            message: 'Dicetak pada tanggal 14/05/2020 12:59:50 melalui aplikasi BRISMA TSI Tools'
                        }
                    ]
                }
    });
    
     $('#dataTable1').DataTable({
        sDom: "<'row'<'col-sm-3'l><'col-sm-5'B><'col-sm-4'f>r>t<'row'<'col-sm-6'i><'col-sm-6'p>>",
                buttons: {
                    buttons: [ 
                        {
                            extend: 'print',
                            text: '<i class="fa fa-print"></i>',
                            className:'btn btn-default btn-sm',
                            title: 'Data Produksi 2020-04',
                            exportOptions: {
                                columns:[0, 1, 2,3,4,5]
                            },
                            message: 'Dicetak pada tanggal 14/05/2020 12:59:50 melalui aplikasi BRISMA TSI Tools'
                        }
                    ]
                }
    });
    
    $('#dataTable2').DataTable({
        sDom: "<'row'<'col-sm-3'l><'col-sm-5'B><'col-sm-4'f>r>t<'row'<'col-sm-6'i><'col-sm-6'p>>",
                buttons: {
                    buttons: [ 
                        {
                            extend: 'print',
                            text: '<i class="fa fa-print"></i>',
                            className:'btn btn-default btn-sm',
                            title: 'Data Produksi 2020-04',
                            exportOptions: {
                                columns:[0, 1, 2,3,4,5]
                            },
                            message: 'Dicetak pada tanggal 14/05/2020 12:59:50 melalui aplikasi BRISMA TSI Tools'
                        }
                    ]
                }
    });
    
    $('#dataTable3').DataTable({
        sDom: "<'row'<'col-sm-3'l><'col-sm-5'B><'col-sm-4'f>r>t<'row'<'col-sm-6'i><'col-sm-6'p>>",
                buttons: {
                    buttons: [ 
                        {
                            extend: 'print',
                            text: '<i class="fa fa-print"></i>',
                            className:'btn btn-default btn-sm',
                            title: 'Data Produksi 2020-04',
                            exportOptions: {
                                columns:[0, 1, 2,3,4,5]
                            },
                            message: 'Dicetak pada tanggal 14/05/2020 12:59:50 melalui aplikasi BRISMA TSI Tools'
                        }
                    ]
                }
    });
    
    $('#dataTable6').DataTable({
        sDom: "<'row'<'col-sm-3'l><'col-sm-5'B><'col-sm-4'f>r>t<'row'<'col-sm-6'i><'col-sm-6'p>>",
                buttons: {
                    buttons: [ 
                        {
                            extend: 'print',
                            text: '<i class="fa fa-print"></i>',
                            className:'btn btn-default btn-sm',
                            title: 'Data Produksi 2020-04',
                            exportOptions: {
                                columns:[0, 1, 2,3,4,5,6,7]
                            },
                            message: 'Dicetak pada tanggal 14/05/2020 12:59:50 melalui aplikasi BRISMA TSI Tools'
                        }
                    ]
                }
    });
    </script>

</body>
</html>
