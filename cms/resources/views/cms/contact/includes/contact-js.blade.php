<script type="text/javascript">
    $(document).ready(function() {
    
    var table = $('#datatable').DataTable({
        processing: true,
        serverSide: true,
        ajax: "{{ route('contact.datatable') }}",
        "columns": [{
                "data": "id",
                "defaultContent": ""
            },
            {
                "data": "name",
                "defaultContent": ""
            },
            {
                "data": "email",
                "defaultContent": ""
            },
            {
                "data": "phone",
                "defaultContent": ""
            },

            {
                "data": "comment",
                "defaultContent": ""
            },
            // @if(auth()->user()->can('contacts-edit') || auth()->user()->can('contacts-delete'))
            {
                "data": "id",
                "defaultContent": ""
            },
            // @endif

            
        ],
        "columnDefs": [{
                "targets": 'no-sort',
                "orderable": false,
            },
            {
                "targets": 0,
                "render": function(data, type, row, meta) {
                    return meta.row + 1;
                },
            },
            {
                "targets": 5,
                "render": function(data, type, row, meta) {

                    

                    return `<div class="text-center">
                          <a href="javascript:void(0);" class="delete" data-toggle="tooltip" data-placement="top" title="Delete" data-id="`+ row.id + `">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x-circle text-danger">
                            <circle cx="12" cy="12" r="10"></circle>
                            <line x1="15" y1="9" x2="9" y2="15"></line><line x1="9" y1="9" x2="15" y2="15"></line></svg>
                          </a>
                          </div>`;
                },
            },
        ],
        "drawCallback": function(settings) {
        $('.delete').click(function () {
          var deleteId = $(this).data('id');
          var $this = $(this);

          swal({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#4fa7f3',
            cancelButtonColor: '#d57171',
            confirmButtonText: 'Yes, delete it!'
          }).then(function (result) {
            if (result.value) {
            axios
              .post('{{route("contact.destroy")}}', {
                _method: 'delete',
                _token: '{{csrf_token()}}',
                deleteId: deleteId,
              })
              .then(function (response) {

                swal(
                  'Deleted!',
                  'Contact has been deleted.',
                  'success'
                )

                table.draw();
              })
              .catch(function (error) {
                console.log(error);
                swal(
                  'Failed!',
                  error.response.data.error,
                  'error'
                )
              });
            }
          })
        });
      },
        //scrollX:true,
    });
    
    });
    
    </script>