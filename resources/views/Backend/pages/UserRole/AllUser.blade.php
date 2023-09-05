@extends('Backend.layouts.layouts')
@section('main_contain')
    <!-- ########## START: MAIN PANEL ########## -->
    <div class="br-mainpanel">

      <div class="br-pagebody">
        <div class="br-section-wrapper">
          <h6 class="br-section-label text-center">All Users</h6>
            <div class="mb-3 d-flex justify-content-end">
                <!-- Button trigger modal -->
                <a href="" class="btn btn-info tx-11 tx-uppercase pd-y-12 pd-x-25 tx-mont tx-medium" data-toggle="modal" data-target="#UserAdd"> <i class="fa fa-plus ml-0 mr-1"></i>Add New User</a>
            </div>
            @if(count($errors) > 0)
                @foreach($errors->all() as $error)
                    <div class="alert alert-danger">{{ $error }}</div>
                @endforeach
            @endif
          <div class="table-wrapper">
            <table id="datatable1" class="table display responsive nowrap">
              <thead>
                <tr>
                  <th class="wd-15p">Id</th>
                  <th class="wd-15p">Name</th>
                  <th class="wd-15p">Email</th>
                  <th class="wd-15p">Role</th>
                  <th class="wd-15p">action</th>
                </tr>
              </thead>
              <tbody>
                @php
                   $i = 1;
                @endphp
                @if (count($users) > 0)
                  @foreach ($users as $user)
                    <tr>
                        <td>{{$i++}}</td>
                        <td>{{$user->name}}</td>
                        <td>{{$user->email}}</td>
                        <td>
                            @if($user->type == 0)
                              Student
                            @elseif ($user->type == 1)
                              SuperAdmin
                            @elseif ($user->type == 2)
                              Teacher
                            @endif
                        </td>
                        <td>
                            <a class="btn text-info" href="{{ route('admin.edit_user', $user->id) }}"><i class="icon ion-compose tx-28"></i></a>
                            <button class="btn text-danger bg-white" value="{{$user->id}}" id="userdelete"><i class="icon ion-trash-a tx-28"></i></button>
                        </td>
                    </tr>
                  @endforeach
                @endif

              </tbody>
            </table>
          </div><!-- table-wrapper -->


        </div><!-- br-section-wrapper -->
      </div><!-- br-pagebody -->
        
    </div><!-- br-mainpanel -->
    <!-- ########## END: MAIN PANEL ########## -->


    <!--_-- ########### Start Add User MODAL ############---->

    <div id="UserAdd" class="modal fade effect-scale">
    <div class="modal-dialog modal-lg modal-dialog-top" role="document">
        <div class="modal-content tx-size-sm">
        <div class="modal-header pd-x-20">
            <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">Add New User</h6>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <!----- Start Add user Form ------->
        <form action="{{ route('admin.add_user') }}" method="post" enctype="multipart/form-data">
        @csrf

        <div class="modal-body pd-20">

            <!----- Start Add User Form input ------->
            <div class="col-xl-12">
                <div class="form-layout form-layout-4">
                  <div class="row">
                      <label class="col-sm-3 form-control-label">Name: <span class="tx-danger">*</span></label>
                      <div class="col-sm-9 mg-t-10 mg-sm-t-0">
                          <input type="text" name="name" class="form-control" placeholder="Enter First Name" required>
                      </div>
                  </div><!-- row -->
                  
                    <div class="row mt-3">
                        <label class="col-sm-3 form-control-label">User Email: <span class="tx-danger">*</span></label>
                        <div class="col-sm-9 mg-t-10 mg-sm-t-0">
                            <input type="email" name="email" class="form-control" placeholder="Enter Email" required>
                        </div>
                    </div><!-- row -->
                    <div class="row mt-3">
                        <label class="col-sm-3 form-control-label">User Password: <span class="tx-danger">*</span></label>
                        <div class="col-sm-9 mg-t-10 mg-sm-t-0">
                            <input type="password" name="password" class="form-control" placeholder="Enter Password" required>
                        </div>
                    </div><!-- row -->
                    <div class="row mt-4">
                        <label class="col-sm-3 form-control-label">Role: <span class="tx-danger">*</span></label>
                        <div class="col-sm-9 mg-t-10 mg-sm-t-0">
                        <select class="form-control" name="type" required>
                            <option selected value="0">Student</option>
                            <option value="2">Teacher</option>
                            <option value="1">SuperAdmin</option>
                        </select>
                        </div>
                    </div><!-- row -->
                </div><!-- form-layout -->
            </div><!-- col-6 -->
            <!----- Start Add user Form input ------->

        </div><!-- modal-body -->

        <div class="modal-footer">
            <button type="submit" class="btn btn-info tx-size-xs">Save changes</button>
            <button type="button" class="btn btn-secondary tx-size-xs" data-dismiss="modal">Close</button>
        </div>

        </form>
        <!----- End Add user Form ------->
        </div>
    </div><!-- modal-dialog -->
    </div><!-- modal -->

    <!--_-- ########### End Add User MODAL ############---->

    <!---- Delete User Model  ---->

    @include('Backend.pages.UserRole.Delete_User')

@endsection

