<script type="text/javascript">
  function confirm_modal(delete_url) {
    $('#modal_delete').modal('show', {
      backdrop: 'static'
    });
    document.getElementById('delete_link').setAttribute('href', delete_url);
  }
  window.setTimeout(function() {
    $(".alert").fadeTo(500, 0).slideUp(500, function() {
      $(this).remove();
    });
  }, 10000);
  $('.custom-file-input').on('change', function() {
    let fileName = $(this).val().split('\\').pop();
    $(this).next('.custom-file-label').addClass("selected").html(fileName);
  });
  $(document).ready(function() {
    $('#table_id').DataTable({
      // script untuk membuat export data 
      scrollCollapse: true,
      autoWidth: false,
      responsive: true,
      columnDefs: [{
        "targets": [0],
        "visible": false,
        "searchable": false,
      }],
      "lengthMenu": [
        [10, 25, 50, -1],
        [10, 25, 50, "All"]
      ],
      "language": {
        "info": "_START_-_END_ of _TOTAL_ entries",
        searchPlaceholder: "Search",
        paginate: {
          next: '<i class="ion-chevron-right"></i>',
          previous: '<i class="ion-chevron-left"></i>'
        }
      },
      dom: 'Bfrtip',
      buttons: [{
          extend: 'copyHtml5',
          exportOptions: {
            columns: [0, ':visible']
          }
        },
        {
          extend: 'excelHtml5',
          exportOptions: {
            columns: ':visible'
          }
        },
        {
          extend: 'pdfHtml5',
          exportOptions: {
            columns: ':visible'
          }
        },
        'colvis'
      ]
    })
  });
  $(document).ready(function() {
    $('#table_id_1').DataTable({
      // script untuk membuat export data 
      scrollCollapse: true,
      autoWidth: false,
      responsive: true,
      columnDefs: [{
        targets: "datatable-nosort",
        orderable: false,
      }],
      "lengthMenu": [
        [10, 25, 50, -1],
        [10, 25, 50, "All"]
      ],
      "language": {
        "info": "_START_-_END_ of _TOTAL_ entries",
        searchPlaceholder: "Search",
        paginate: {
          next: '<i class="ion-chevron-right"></i>',
          previous: '<i class="ion-chevron-left"></i>'
        }
      },
      dom: 'Bfrtip',
      buttons: [{
          extend: 'copyHtml5',
          exportOptions: {
            columns: [0, ':visible']
          }
        },
        {
          extend: 'excelHtml5',
          exportOptions: {
            columns: ':visible'
          }
        },
        {
          extend: 'pdfHtml5',
          exportOptions: {
            columns: ':visible'
          }
        },
        'colvis'
      ]
    })
  });
  $(document).ready(function() {
    $('#table_id_2').DataTable({
      // script untuk membuat export data 
      scrollCollapse: true,
      autoWidth: false,
      responsive: true,
      columnDefs: [{
        targets: "datatable-nosort",
        orderable: false,
      }],
      "lengthMenu": [
        [10, 25, 50, -1],
        [10, 25, 50, "All"]
      ],
      "language": {
        "info": "_START_-_END_ of _TOTAL_ entries",
        searchPlaceholder: "Search",
        paginate: {
          next: '<i class="ion-chevron-right"></i>',
          previous: '<i class="ion-chevron-left"></i>'
        }
      },
      dom: 'Bfrtip',
      buttons: [{
          extend: 'copyHtml5',
          exportOptions: {
            columns: [0, ':visible']
          }
        },
        {
          extend: 'excelHtml5',
          exportOptions: {
            columns: ':visible'
          }
        },
        {
          extend: 'pdfHtml5',
          exportOptions: {
            columns: ':visible'
          }
        },
        'colvis'
      ]
    })
  });
  $('.custom-file-input').on('change', function() {
    let fileName = $(this).val().split('\\').pop();
    $(this).next('.custom-file-label').addClass("selected").html(fileName);
  });
  $(document).ready(function() {
    $('#table_id_3').DataTable({
      // script untuk membuat export data 
      scrollCollapse: true,
      autoWidth: false,
      responsive: true,
      columnDefs: [{
        targets: "datatable-nosort",
        orderable: false,
      }],
      "lengthMenu": [
        [10, 25, 50, -1],
        [10, 25, 50, "All"]
      ],
      "language": {
        "info": "_START_-_END_ of _TOTAL_ entries",
        searchPlaceholder: "Search",
        paginate: {
          next: '<i class="ion-chevron-right"></i>',
          previous: '<i class="ion-chevron-left"></i>'
        }
      },
      dom: 'Bfrtip',
      buttons: [{
          extend: 'copyHtml5',
          exportOptions: {
            columns: [0, ':visible']
          }
        },
        {
          extend: 'excelHtml5',
          exportOptions: {
            columns: ':visible'
          }
        },
        {
          extend: 'pdfHtml5',
          exportOptions: {
            columns: ':visible'
          }
        },
        'colvis'
      ]
    })
  });
  $('.custom-file-input').on('change', function() {
    let fileName = $(this).val().split('\\').pop();
    $(this).next('.custom-file-label').addClass("selected").html(fileName);
  });
</script>