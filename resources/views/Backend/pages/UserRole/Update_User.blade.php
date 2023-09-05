@section('title')
    Admin - Edit User
@endsection

@extends('Backend.layouts.layouts')

@section('main_contain')

    <!-- ########## START: MAIN PANEL ########## -->
    <div class="br-mainpanel">
        <div class="br-pagebody">
          <div class="br-section-wrapper">
            <h6 class="br-section-label text-center mb-4">Update User</h6>

            <!----- Start Add Category Form input ------->
            <div class="col-xl-7 mx-auto">
                <div class="form-layout form-layout-4 pt-3 py-5">

                    <form action="{{ route('admin.update_user', $user->id) }}" method="post">
                        @csrf
                        <div class="row ">
                            <label class="col-sm-3 form-control-label">User Name <span class="tx-danger">*</span></label>
                            <div class="col-sm-9 mg-t-10 mg-sm-t-0">
                                <input type="text" name="name" value="{{ $user->name}}" class="form-control">
                            </div>
                        </div><!-- row -->

                        <div class="row mt-4">
                            <label class="col-sm-3 form-control-label">User Email: <span class="tx-danger">*</span></label>
                            <div class="col-sm-9 mg-t-10 mg-sm-t-0">
                                <input type="email" name="email" value="{{ $user->email}}" class="form-control">
                            </div>
                        </div><!-- row -->

                        <input type="hidden" name="password" class="form-control" value="{{ $user->password}}">

                        <div class="row mt-4">
                          <label class="col-sm-3 form-control-label">User Role: <span class="tx-danger">*</span></label>
                          <div class="col-sm-9 mg-t-10 mg-sm-t-0">

                            <select class="form-control select2" name="type">
                              <option @if($user->type == 0) selected @endif value="0">User</option>
                              <option @if($user->type == 2) selected @endif value="2">Seller</option>
                              <option @if($user->type == 3) selected @endif value="3">Accountant</option>
                              <option @if($user->type == 4) selected @endif value="4">HR Manager</option>
                              <option @if($user->type == 1) selected @endif value="1">Super Admin</option>
                            </select>

                          </div>
                        </div><!-- row -->

                        <div class="row mt-4 ">
                          <div class="col-sm-12 mg-t-10 mg-sm-t-0 text-right">
                            <a href="{{route('admin.AllUser')}}" type="button" class="btn btn-secondary text-white mr-2" >Close</a>
                            <button type="submit" class="btn btn-info">Update</button>
                          </div>
                        </div>
                    </form>

                </div><!-- form-layout -->
            </div><!-- col-6 -->
            <!----- Start Add Category Form input ------->
          </div><!-- br-section-wrapper -->
        </div><!-- br-pagebody -->

    </div><!-- br-mainpanel -->
    <!-- ########## END: MAIN PANEL ########## -->


@endsection
