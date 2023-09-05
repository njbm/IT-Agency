@section('title')
Admin - User Page
@endsection

@extends('Backend.layouts.layouts')

@section('main_contain')

    <!-- ########## START: MAIN PANEL ########## -->
    <div class="br-mainpanel">

        <div class="br-pagebody">
          <div class="br-section-wrapper">
            <h6 class="br-section-label text-center">Manage User</h6>
            <div class="mb-3 d-flex justify-content-end">
                <!-- Button trigger modal -->
                <a href="" class="btn btn-info tx-11 tx-uppercase pd-y-12 pd-x-25 tx-mont tx-medium" data-toggle="modal" data-target="#AddUser"> <i class="fa fa-plus ml-0 mr-1"></i>Add User </a>
            </div>

            <div class="table-wrapper">
              <table id="datatable1" class="table display responsive nowrap">
                <thead>
                  <tr>
                    <th class="wd-25p">Id</th>
                    <th class="wd-25p">Name</th>
                    <th class="wd-25p">Email</th>
                    <th class="wd-25p">Phone</th>
                    <th class="wd-25p">Role</th>
                    <th class="wd-25p">Action</th>
                  </tr>
                </thead>
                <tbody>
                    @php
                        $i = 1;
                    @endphp
                  @if (count($user) > 0)
                    @foreach ($user as $user)
                      <tr>
                          <td>{{ $i++ }}</td>
                          <td>{{ $user->user_name }}</td>
                          <td>{{ $user->user_email }}</td>
                          <td>{{ $user->user_phone }}</td>
                          <td>{{ $user->user_role }}</td>

                          <td>
                            <a class="btn text-info" href="{{ route('admin.edit_AccUserManagement', $user->id) }}"><i class="icon ion-compose tx-28"></i></a>
                            <button class="btn text-danger bg-white"  data-toggle="modal" data-target="#deleteModal{{ $user->id }}"><i class="icon ion-trash-a tx-28"></i></button>
                          </td>
                      </tr>
                      <!--_-- ########### Start Delete user MODAL ############---->

    <div id="deleteModal{{$user->id}}" class="modal fade">
        <div class="modal-dialog modal-dialog-top" role="document">
          <div class="modal-content tx-size-sm">
            <div class="modal-body tx-center pd-y-20 pd-x-20">
                <form >
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <i class="icon icon ion-ios-close-outline tx-60 tx-danger lh-1 mg-t-20 d-inline-block"></i>
                    <h4 class="tx-danger  tx-semibold mg-b-20 mt-2">Are you sure! you want to delete this?</h4>

                    <a href="{{ route('admin.AccUserManagement.delete', $user->id) }}" type="submit" class="btn btn-danger mr-2 text-white tx-11 tx-uppercase pd-y-12 pd-x-25 tx-mont tx-medium mg-b-20">
                        yes
                    </a>
                    <button type="button" class="btn btn-success tx-11 tx-uppercase pd-y-12 pd-x-25 tx-mont tx-medium mg-b-20" data-dismiss="modal" aria-label="Close">
                        No
                    </button>
                </form>
            </div><!-- modal-body -->
          </div><!-- modal-content -->
        </div><!-- modal-dialog -->
      </div><!-- modal -->

    <!--_-- ########### End Delete user MODAL ############---->

                    @endforeach
                  @endif

                </tbody>
              </table>
            </div><!-- table-wrapper -->


          </div><!-- br-section-wrapper -->
        </div><!-- br-pagebody -->
        <footer class="br-footer">
          <div class="footer-left">
            <div class="mg-b-2">Copyright &copy; <?php echo date('Y');?> NavieaSoft. All Rights Reserved.</div>
            <div>Attentively and carefully made by NavieaSoft.</div>
          </div>
        </footer>
    </div><!-- br-mainpanel -->
    <!-- ########## END: MAIN PANEL ########## -->

    <!--_-- ########### Start Add user MODAL ############---->

    <div id="AddUser" class="modal fade effect-scale">
    <div class="modal-dialog modal-lg modal-dialog-top" role="document">
        <div class="modal-content tx-size-sm">
        <div class="modal-header pd-x-20">
            <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">Add User</h6>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <!----- Start Add user Form ------->
        <form action="{{route('admin.AccUserManagement.add')}}"  method="post">
        @csrf

        <div class="modal-body pd-20">

            <!----- Start Add user Form input ------->
            <div class="col-xl-12">
                <div class="form-layout form-layout-4">
                  <div class="row mb-2">
                    <label class="col-sm-3 form-control-label">User Role: <span class="tx-danger">*</span></label>
                    <div class="col-sm-9 mg-t-10 mg-sm-t-0">
                      <select name="user_role" class="form-control" required>
                        <option selected>Select User Role</option>
                        <option value="Admin">Admin</option>
                        <option value="HR">HR</option>
                        <option value="Employee">Employee</option>
                    </select>
                    </div>
                  </div><!-- row -->
                    <div class="row mb-2">
                        <label class="col-sm-3 form-control-label">User Name: <span class="tx-danger">*</span></label>
                        <div class="col-sm-9 mg-t-10 mg-sm-t-0">
                        <input type="text" name="user_name" class="form-control" placeholder="Enter User Name" required>
                        </div>
                    </div><!-- row -->
                    <div class="row mb-2">
                      <label class="col-sm-3 form-control-label">Email: <span class="tx-danger">*</span></label>
                      <div class="col-sm-9 mg-t-10 mg-sm-t-0">
                      <input type="email" name="user_email" class="form-control" placeholder="Enter Email" required>
                      </div>
                  </div><!-- row -->
                    <div class="row mb-2">
                      <label class="col-sm-3 form-control-label">Phone: <span class="tx-danger">*</span></label>
                      <div class="col-sm-9 mg-t-10 mg-sm-t-0">
                      <input type="text" name="user_phone" class="form-control" placeholder="Enter Phone" required>
                      </div>
                  </div><!-- row -->
                  <div class="row mb-2">
                    <label class="col-sm-3 form-control-label">Password: <span class="tx-danger">*</span></label>
                    <div class="col-sm-9 mg-t-10 mg-sm-t-0">
                    <input type="password" name="user_password" class="form-control" placeholder="Enter Password" required>
                    </div>
                </div><!-- row -->
                <div class="row">
                  <label class="col-sm-3 form-control-label">Confirm Password: <span class="tx-danger">*</span></label>
                  <div class="col-sm-9 mg-t-10 mg-sm-t-0">
                  <input type="password" name="user_confirm_password" class="form-control" placeholder="Re-Type Password" required>
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

    <!--_-- ########### End Add user MODAL ############---->






@endsection
