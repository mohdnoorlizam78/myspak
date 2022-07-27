<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
<script src="{{asset('AdminLTE-3.1.0//plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('AdminLTE-3.1.0/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- DataTables  & Plugins -->
<script src="{{asset('AdminLTE-3.1.0/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('AdminLTE-3.1.0/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{asset('AdminLTE-3.1.0/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('AdminLTE-3.1.0/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
<script src="{{asset('AdminLTE-3.1.0/plugins/datatables-buttons/js/dataTables.buttons.min.js')}}"></script>
<script src="{{asset('AdminLTE-3.1.0/plugins/datatables-buttons/js/buttons.bootstrap4.min.js')}}"></script>
<script src="{{asset('AdminLTE-3.1.0/plugins/jszip/jszip.min.js')}}"></script>
<script src="{{asset('AdminLTE-3.1.0/plugins/pdfmake/pdfmake.min.js')}}"></script>
<script src="{{asset('AdminLTE-3.1.0/plugins/pdfmake/vfs_fonts.js')}}"></script>
<script src="{{asset('AdminLTE-3.1.0/plugins/datatables-buttons/js/buttons.html5.min.js')}}"></script>
<script src="{{asset('AdminLTE-3.1.0/plugins/datatables-buttons/js/buttons.print.min.js')}}"></script>
<script src="{{asset('AdminLTE-3.1.0/plugins/datatables-buttons/js/buttons.colVis.min.js')}}"></script>
<!-- Select2 -->
<script src="{{asset('AdminLTE-3.1.0/plugins/select2/js/select2.full.min.js')}}"></script>
<!-- Bootstrap4 Duallistbox -->
<script src="{{asset('AdminLTE-3.1.0/plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js')}}"></script>
<!-- InputMask -->
<script src="{{asset('AdminLTE-3.1.0/plugins/moment/moment.min.js')}}"></script>
<script src="{{asset('AdminLTE-3.1.0/plugins/inputmask/jquery.inputmask.min.js')}}"></script>
<!-- date-range-picker -->
<script src="{{asset('AdminLTE-3.1.0/plugins/daterangepicker/daterangepicker.js')}}"></script>
<!-- bootstrap color picker -->
<script src="{{asset('AdminLTE-3.1.0/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js')}}"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{asset('AdminLTE-3.1.0/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}}"></script>
<!-- Bootstrap Switch -->
<script src="{{asset('AdminLTE-3.1.0/plugins/bootstrap-switch/js/bootstrap-switch.min.js')}}"></script>
<!-- BS-Stepper -->
<script src="{{asset('AdminLTE-3.1.0/plugins/bs-stepper/js/bs-stepper.min.js')}}"></script>
<!-- dropzonejs -->
<script src="{{asset('AdminLTE-3.1.0/plugins/dropzone/min/dropzone.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('AdminLTE-3.1.0/dist/js/adminlte.min.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset('AdminLTE-3.1.0/dist/js/demo.js')}}"></script>
<!-- Page specific script -->


<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/js/bootstrap-datetimepicker.min.js"></script> -->

<script>
  $(function () {
    //Initialize Select2 Elements
    $('.select2').select2()

    //Initialize Select2 Elements
    $('.select2bs4').select2({
      theme: 'bootstrap4'
    })

    //Datemask dd/mm/yyyy
    $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
    //Datemask2 mm/dd/yyyy
    $('#datemask2').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' })
    //Money Euro
    $('[data-mask]').inputmask()

    //Date picker dari
    $('#reservationdate1').datetimepicker({
        // format: 'LT'
        autoclose: true,
      format: 'YYYY-MM-DD'
    });
    //Date picker hingga
    $('#reservationdate2').datetimepicker({
        // format: 'L'
        autoclose: true,
      format: 'YYYY-MM-DD'
    });

    //Date and time mula
    $('#reservationdatetime3').datetimepicker({ icons: { time: 'far fa-clock' } });

    //Date and time tamat
    $('#reservationdatetime4').datetimepicker({ icons: { time: 'far fa-clock' } });


    //Date range picker
    $('#reservation').daterangepicker()
    //Date range picker with time picker
    $('#reservationtime').daterangepicker({
      timePicker: true,
      timePickerIncrement: 30,
      locale: {
        format: 'MM/DD/YYYY hh:mm A'
      }
    })

    //time picker
    $('#datetimepicker3').datetimepicker({
          format: 'LT'
      });
 //Date picker kerja
 $('#datetimepicker4').datetimepicker({
        // format: 'L'
        autoclose: true,
      format: 'YYYY-MM-DD'
    });

    $('#datetimepicker5').datetimepicker({
        // format: 'L'
        autoclose: true,
      format: 'YYYY-MM-DD'
    });
    $('#datetimepicker6').datetimepicker({
        // format: 'L'
        autoclose: true,
      format: 'YYYY-MM-DD'
    });

    //Date range as a button
    $('#daterange-btn').daterangepicker(
      {
        ranges   : {
          'Today'       : [moment(), moment()],
          'Yesterday'   : [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
          'Last 7 Days' : [moment().subtract(6, 'days'), moment()],
          'Last 30 Days': [moment().subtract(29, 'days'), moment()],
          'This Month'  : [moment().startOf('month'), moment().endOf('month')],
          'Last Month'  : [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
        },
        startDate: moment().subtract(29, 'days'),
        endDate  : moment()
      },
      function (start, end) {
        $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
      }
    )

    //Timepicker
    $('#timepicker').datetimepicker({
      format: 'LT'
    })

    //Bootstrap Duallistbox
    $('.duallistbox').bootstrapDualListbox()

    //Colorpicker
    $('.my-colorpicker1').colorpicker()
    //color picker with addon
    $('.my-colorpicker2').colorpicker()

    $('.my-colorpicker2').on('colorpickerChange', function(event) {
      $('.my-colorpicker2 .fa-square').css('color', event.color.toString());
    })

    $("input[data-bootstrap-switch]").each(function(){
      $(this).bootstrapSwitch('state', $(this).prop('checked'));
    })

    $(document).ready( function () {
        // $('.sidebar').click(function(e){
        //   $('.preloader').fadeIn();
        // })

        var flash = "{{ Session::has('sukses') }}";
        if(flash){
            var pesan = "{{ Session::get('sukses') }}"
            swal("Sukses", pesan, "success");
        }
 
        var gagal = "{{ Session::has('gagal') }}";
        if(gagal){
            var pesan = "{{ Session::get('gagal') }}"
            swal("Error", pesan, "error");
        }

        $('body').on('click','.menu-sidebar',function(e){
          $('.preloader').fadeIn();
        })

        $('.myTable').DataTable();
        

        $('body').on('click','.btn-refresh',function(e){
          e.preventDefault();
          $('.preloader').fadeIn();
          location.reload();
        })

        // btn hapus di klik
        $('body').on('click','.btn-hapus',function(e){
            e.preventDefault();
            var url = $(this).attr('href');
            $('#modal-hapus').find('form').attr('action',url);
            $('#modal-hapus').modal();
        });
    });

  })
  
</script>

<script>
  $(function () {

    $("#example1").DataTable({
      //"pageLength": 20,
     
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "language": {
                        search: '<i class="fa fa-filter" aria-hidden="true"></i>',
                        searchPlaceholder: 'Cari rekod',
                    "paginate" : {
                        "first" : "Pertama",
                        "previous" : "Sebelum",
                        "next" : "Seterusnya",
                        "last" : "Akhir"
                    },
                    "lengthMenu": "Paparan _MENU_ rekod per laman",
                    "zeroRecords": "Tiada data",
                    "info": "Laman _PAGE_ dari _PAGES_",
                    "infoEmpty": "Tiada rekod dijumpai",
                    "infoFiltered": "(dijumpai dari _MAX_ jumlah rekod)"
                },
        
        //dom: 'Bfrtip',
        "lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]],
        "buttons": [
        { extend: 'copy', text: 'Salin' },
        "csv", 
        "excel", 
        //"pdf", 
        {
                extend: 'pdf',
                orientation: 'landscape',
                pageSize: 'LEGAL',
                exportOptions: {
                    columns: [ 1, 2, 3 ]
                }
            },
        { extend: 'print', text: 'Cetak' }, 
        { extend: 'colvis', text: 'Lajur' }
        ]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    
    // $('#example2').DataTable({
    //   "paging": true,
    //   "lengthChange": false,
    //   "searching": false,
    //   "ordering": true,
    //   "info": true,
    //   "autoWidth": false,
    //   "responsive": true,
    //   "language": {
                      
    //                 "paginate" : {
    //                     "first" : "Pertama",
    //                     "previous" : "Sebelum",
    //                     "next" : "Seterusnya",
    //                     "last" : "Akhir"
    //                 },
    //                 "lengthMenu": "Paparan _MENU_ rekod per laman",
    //                 "zeroRecords": "Tiada data",
    //                 "info": "Laman _PAGE_ dari _PAGES_",
    //                 "infoEmpty": "Tiada rekod dijumpai",
    //                 "infoFiltered": "(dijumpai dari _MAX_ jumlah rekod)"
    //             }
    // });



  });


</script>
<script>
 $(document).ready(function() {
    $('#example').DataTable( {
        "lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]],
        dom: 'lBfrtip',
        buttons: [
                //'pageLength',
                { extend: 'copy', text: 'Salin' },
                'csv', 
                {
                extend: 'excel',
                title: 'Laporan aduan kerosakan aset tak alih',
                exportOptions: {
                    //columns: [1,2,3,4,5,6,7,8,9,10],
                    columns: ':visible',
                    modifier: { search: 'applied' }
                }
            },

                { 
                  extend: 'print', 
                  text: 'Cetak',
                  customize: function(win)
            {
 
                var last = null;
                var current = null;
                var bod = [];
 
                var css = '@page { size: landscape; }',
                    head = win.document.head || win.document.getElementsByTagName('head')[0],
                    style = win.document.createElement('style');
 
                style.type = 'text/css';
                style.media = 'print';
 
                if (style.styleSheet)
                {
                  style.styleSheet.cssText = css;
                }
                else
                {
                  style.appendChild(win.document.createTextNode(css));
                }
 
                head.appendChild(style);
         },
                  columns: ':visible',
                  title: 'Laporan aduan kerosakan aset tak alih'
                   },
                {
                extend: 'pdf',
                orientation: 'landscape',
                pageSize: 'LEGAL',
                title: 'Laporan aduan kerosakan aset tak alih',
                exportOptions: {
                    //columns: [1,2,3,4,5,6,7,8,9,10],
                    columns: ':visible',
                    modifier: { search: 'applied' }
                }
            },
                { extend: 'colvis', text: 'Lajur' },
                
              ],
              
        "language": {
                        search: '<i class="fa fa-filter" aria-hidden="true"></i>',
                        searchPlaceholder: 'Cari rekod',
                    "paginate" : {
                        "first" : "Pertama",
                        "previous" : "Sebelum",
                        "next" : "Seterusnya",
                        "last" : "Akhir"
                    },
                    "lengthMenu": "Paparan _MENU_ rekod per laman",   
                                 
                    "zeroRecords": "Tiada data",
                    "info": "Laman _PAGE_ dari _PAGES_",
                    "infoEmpty": "Tiada rekod dijumpai",
                    "infoFiltered": "(dijumpai dari _MAX_ jumlah rekod)"
                },
          
    } );
} );
</script>

<script>
  $(function () {

    $("#table2").DataTable({
      "pageLength": 20,
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "language": {
                        search: '<i class="fa fa-filter" aria-hidden="true"></i>',
                        searchPlaceholder: 'Cari rekod',
                    "paginate" : {
                        "first" : "Pertama",
                        "previous" : "Sebelum",
                        "next" : "Seterusnya",
                        "last" : "Akhir"
                    },
                    "lengthMenu": "Paparan _MENU_ rekod per laman",
                    "zeroRecords": "Tiada data",
                    "info": "Laman _PAGE_ dari _PAGES_",
                    "infoEmpty": "Tiada rekod dijumpai",
                    "infoFiltered": "(dijumpai dari _MAX_ jumlah rekod)"
                },
      "buttons": [
        { extend: 'copy', text: 'Salin' },
        "csv", 
        "excel", 
        //"pdf", 
        {
                extend: 'pdf',
                orientation: 'landscape',
                pageSize: 'LEGAL',
                title: 'Senarai rekod aduan kerosakan aset tak alih.',
                exportOptions: {
                    columns: [ 1,2,3,4,5,6,7 ]
                }
            },
        { extend: 'print', text: 'Cetak' }, 
        { extend: 'colvis', text: 'Lajur' }]
    }).buttons().container().appendTo('#table2_wrapper .col-md-6:eq(0)');
    

    
    $('#table3').DataTable({
      "language": {
                        search: '<i class="fa fa-filter" aria-hidden="true"></i>',
                        searchPlaceholder: 'Cari rekod',
                    "paginate" : {
                        "first" : "Pertama",
                        "previous" : "Sebelum",
                        "next" : "Seterusnya",
                        "last" : "Akhir"
                    },
                    "lengthMenu": "Paparan _MENU_ rekod per laman",
                    "zeroRecords": "Tiada data",
                    "info": "Laman _PAGE_ dari _PAGES_",
                    "infoEmpty": "Tiada rekod dijumpai",
                    "infoFiltered": "(dijumpai dari _MAX_ jumlah rekod)"
                },
    });
    
  });


</script>


<script type="text/javascript">

    $('.timepicker').datetimepicker({

        format: 'HH:mm:ss'

    }); 

</script> 
