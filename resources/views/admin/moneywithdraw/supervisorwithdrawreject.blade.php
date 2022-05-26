@extends('layouts.admin')

@section('admin_content')
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Reject List</h1>
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
                <h3 class="card-title">All Supervisor Reject List</h3>
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
                          Rejected
                      </td>
                      <td>26-05-22</td>
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
