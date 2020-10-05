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
                    <th class="th-sm">First Name
                    </th>
                    <th class="th-sm">Last Name
                    </th>
                    <th class="th-sm">Email
                    </th>
                    <th class="th-sm">Is Active
                    </th>
                    <th class="th-sm">Phone's Number
                    </th>
                    <th class="th-sm">Created At
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
            ajax: '{{ route('UserDatatables.data') }}',
            columns: [
                { data: 'id', name: 'id' },
                { data: 'first_name', name: 'first_name' },
                { data: 'last_name', name: 'last_name' },
                { data: 'email', name: 'email' },
                { data: 'active', name: 'active' },
                { data: 'phone', name: 'phone' },
                { data: 'created_at', name: 'created_at' },
            ]
        });
    $('.dataTables_length').addClass('bs-select');
</script>

@endsection