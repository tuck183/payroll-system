@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header d-flex justify-content-between">
                <h3>Payroll List</h3>
                <div>
                <a class="btn btn-success mr-1" href="{{ route('payrolls.create') }}" role="button"><span>Create New Payroll</span></a>
                <a class="btn btn-primary" href="{{ route('home') }}" role="button"><span>Back to dashboard</span></a>
                </div>
            </div>
            <div class="card-body">
                <table class="table table-bordered table-striped" id="myTable">
                    <thead>
                        <tr>
                            <th><center>ID</center></th>
                            <th><center>Employee Name</center></th>
                            <th><center>Payroll Created</center></th>
                            <th><center>Payroll Updated</center></th>
                            <th><center>Action</center></th>
                        </tr>
                    </thead>
                        <tbody>
                        </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script type="text/javascript">
        $(document).ready( function () {
            $('#myTable').DataTable({
                processing: true,
                serverSide: true,
                ajax: "{{ route('payrolls.index') }}",
                columns: [
                    {data: 'id', name: 'id'},
                    {data: 'employees_id', name: 'employees_id'},
                    {data: 'created_at', name: 'created_at'},
                    {data: 'updated_at', name: 'updated_at'},
                    {data: 'action', name: 'action', orderable: false, searchable: false},
                ]
            });
        });
    </script>
@endsection