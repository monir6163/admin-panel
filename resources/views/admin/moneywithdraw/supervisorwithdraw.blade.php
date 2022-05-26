@extends('layouts.admin')

@section('admin_content')
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">MoneyWithdraw List</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
<!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
           <div class="card">
              <div class="card-header">
                <h3 class="card-title">All Supervisor Moneywithdraw List</h3>
              </div>
              <!-- /.card-header -->
               <div class="card-body">
                <table id="example1" class="table table-bordered table-striped table-sm">
                  <thead>
                  <tr>
                    <th>Req.Id</th>
                    <th>Name</th>
                    <th>UserId</th>
                    <th>Net Bl</th>
                    <th>Req.Bl</th>
                    <th>Receive By</th>
                    <th>Account No</th>
                    <th>TnxID</th>
                    <th>Date/Time</th>
                    <th>Approve|Reject</th>
                  </tr>
                  </thead>
                  <tbody>
                    <tr class="odd">
                      <td class="dtr-control sorting_1" tabindex="0">01</td>
                      <td>Babul</td>
                      <td>131216</td>
                      <td>5000</td>
                      <td>3000</td>
                      <td>Bkash</td>
                      <td>01747706163</td>
                      <td>
                          <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter TnxID">
                      </td>
                      <td>26-05-22</td>
                      <td>
                        <a href="" class="btn btn-info btn-sm">
                            <i class="fas fa-check"></i>
                        </a>
                        <a href="" class="btn btn-danger btn-sm">
                          <i class="fas fa-trash"></i>
                        </a>
                      </td>
                    </tr>
                </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
          </div>
        </div>
      </div>
</section>
  </div>
@endsection


