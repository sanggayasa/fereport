<div class="body">
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Tables</h1>
        <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the <a target="_blank" href="https://datatables.net">official DataTables documentation</a>.</p>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <a href="{{ url('fereport/create') }}">
                        <button type="button" class="btn btn-outline-primary">+ CREATE DATA</button>
                    </a>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Office</th>
                                <th>Age</th>
                                <th>Start date</th>
                                <th>Salary</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Name</th>
                                <th>Office</th>
                                <th>Age</th>
                                <th>Start date</th>
                                <th>Salary</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach($office as $data)
                            <tr>
                                <td>{{ $data->id_office}}</td>
                                <td>{{ $data->office}}</td>
                                <td><img src="{{ url('foto/'. $data->office) }}"> </td>
                                <td>61</td>
                                <td>
                                    <a href="" class="btn btn-sm btn-success">detail</a>
                                    <a href="" class="btn btn-sm btn-warning">edit</a>
                                    <a href="" class="btn btn-sm btn-danger">delete</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->

</div>
<!-- End of Main Content -->