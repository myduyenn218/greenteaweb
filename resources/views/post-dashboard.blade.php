@extends('layouts.admin')

@section('title', 'Create Project')
<!-- DataTables.net  -->
<link rel="stylesheet" type="text/css" href="../../css/addons/datatables.min.css">
<link rel="stylesheet" href="../../css/addons/datatables-select.min.css">
@section('style')

<style>
    .white-skin .navbar {
        background-color: #3f51b5;
    }
</style>
@endsection


@section('content')

<!-- Main layout -->
<main>
    <div class="container">
        <h2 class='mb-3'>Basic example</h2>
        <table id="dtBasicExample" class="table" width="100%">
            <thead>
                <tr>

                    <th class="th-sm">ID
                    </th>
                    <th class="th-sm">Title
                    </th>
                    <th class="th-sm">Content
                    </th>
                    <th class="th-sm">Type
                    </th>
                    <th class="th-sm">Is Active
                    </th>
                    <th class="th-sm">Created At
                    </th>
                    <th class="th-sm">Updated At
                    </th>
                    <th class="th-sm">Edit
                    </th>
                </tr>
            </thead>
        </table>
    </div>
</main>
<!-- Main layout -->
<!-- Custom scripts -->

@endsection

@section('script')
<script type="text/javascript" src="../../js/addons/datatables.min.js"></script>
<!-- DataTables Select  -->
<script type="text/javascript" src="../../js/addons/datatables-select.min.js"></script>
{{-- <script src=https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js></script> --}}

<script>
    $('#dtBasicExample').DataTable({
            processing: true,
            serverSide: true,
            ajax: '{{ route('PostDatatables.data') }}',
            columns: [
                { data: 'id', name: 'id' },
                { data: 'title', name: 'title' },
                { data: 'content', name: 'content' },
                { data: 'type', name: 'type' },
                { data: 'is_active', name: 'is_active' },
                { data: 'created_at', name: 'created_at' },
                { data: 'updated_at', name: 'updated_at' },
            ],  "columnDefs": [
            {
                // The `data` parameter refers to the data for the cell.
                // The `rows`argument is an object representing all the data for the current row.
                "render": function ( data, type, row ) {
                    return "<i class='fas fa-2x mb-4 fa-pencil-alt teal-text'>";
                },
                "targets": 7  // -1 is the last column, 0 the first, 1 the second, etc.
            }
        ]

        });
    $('.dataTables_length').addClass('bs-select');
</script>

@endsection
