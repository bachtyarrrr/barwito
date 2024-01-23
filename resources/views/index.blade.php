@extends('layout.main')

@push('after-script')
<script>
    var table = $('example1').DataTables({
        ajax: "",
        columns:[],
        
    });
</script>
@endpush

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Official Travel</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Official Travel</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Data Travels</h3>
                    <button type="button" class="btn btn-primary float-sm-right" data-toggle="modal"
                        data-target="#modal">Tambah Data</button>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Rendering engine</th>
                                <th>Browser</th>
                                <th>Platform(s)</th>
                                <th>Engine version</th>
                                <th>CSS grade</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Trident</td>
                                <td>Internet
                                    Explorer 4.0
                                </td>
                                <td>Win 95+</td>
                                <td> 4</td>
                                <td>X</td>
                            </tr>
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>Rendering engine</th>
                                <th>Browser</th>
                                <th>Platform(s)</th>
                                <th>Engine version</th>
                                <th>CSS grade</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.row (main row) -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<div class="modal fade" id="modal">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Form Official Travel</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="card card-default">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Travel Type <code>*</code></label>
                                    <select class="form-control select2" placeholder="Select Travel Type..."
                                        style="width: 100%;">
                                        <option>Perjalanan Dinas</option>
                                        <option>Mutasi Career</option>
                                    </select>
                                </div>
                                <!-- /.form-group -->
                                <div class="form-group">
                                    <label>Request By <code>*</code></label>
                                    <input type="text" class="form-control" placeholder="Nurmansyah Putra Bachtyar"
                                        disabled>
                                </div>
                                <div class="form-group">
                                    <label>Reason to Travel <code>*</code></label>
                                    <textarea class="form-control" rows="3" placeholder="Enter ..."></textarea>
                                </div>
                                <!-- /.form-group -->
                            </div>
                            <!-- /.col -->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Letter Date</label>
                                    <input type="date" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label>Start & End Date:</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <i class="far fa-calendar-alt"></i>
                                            </span>
                                        </div>
                                        {{-- <input type="text" class="form-control float-right" id="#reservation"> --}}
                                        <input type="text" class="form-control float-right" id="rangedate" />
                                    </div>
                                    <!-- /.input group -->
                                </div>
                                <div class="form-group">
                                    <label>Aproval Status <code>*</code></label>
                                    <input type="text" class="form-control" placeholder="New" disabled>
                                </div>
                                <div class="form-group">
                                    <label>With Cash Advance <code>*</code></label>
                                    <input class="form-check-input mx-3" type="checkbox">
                                    <label class="form-check-label"><i>Note: Jika pengajuan maksimal H-3 maka
                                            With
                                            Cash
                                            Advance dicentang.</i></label>
                                </div>
                            </div>
                            <!-- /.col -->
                        </div>
                        <!-- /.row -->

                        <div class="card mt-5">
                            <div class="card-header">
                                <h3 class="card-title">Cash Advance</h3>
                                <button type="button" class="btn btn-primary float-sm-right" data-toggle="modal"
                                    data-target="#modal">Add Cash Advance</button>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>Category</th>
                                            <th>Start & End Date</th>
                                            <th>Region Destination</th>
                                            <th>Quantity</th>
                                            <th>Budget</th>
                                            <th>Total</th>
                                            <th>Notes</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td><select class="form-control select2" placeholder="Select Travel Type..."
                                                    style="width: 100%;">
                                                    <option>Perjalanan Dinas</option>
                                                    <option>Mutasi Career</option>
                                                </select>
                                            </td>
                                            <td><input type="text" class="form-control float-right" id="rangedate" />
                                            </td>
                                            <td><input type="text" class="form-control float-right" id="rangedate" />
                                            </td>
                                            <td><input type="text" class="form-control" disabled />
                                            </td>
                                            <td><input type="text" class="form-control" disabled />
                                            </td>
                                            <td><input type="text" class="form-control" disabled />
                                            </td>
                                            <td><input type="text" class="form-control" />
                                            </td>
                                            <td><a href=""><i class="fa fa-trash"></i></a>
                                            </td>

                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.card-body -->
                </div>
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
@endsection