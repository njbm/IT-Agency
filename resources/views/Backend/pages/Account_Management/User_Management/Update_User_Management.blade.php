@section('title')
    Admin - Brand Edit
@endsection

@extends('Backend.layouts.layouts')

@section('main_contain')

    <!-- ########## START: MAIN PANEL ########## -->
    <div class="br-mainpanel">
        <div class="br-pageheader">
          <nav class="breadcrumb pd-0 mg-0 tx-12">
            <a class="breadcrumb-item" href="{{route('admin.dashboard')}}">Home</a>
            <a class="breadcrumb-item" href="{{route('admin.brand.home')}}"> <i class="icon ion-reply text-22"></i> All Category</a>
          </nav>
        </div><!-- br-pageheader -->

        <div class="br-pagebody">
          <div class="br-section-wrapper">
            <h6 class="br-section-label text-center mb-4">Update Brand</h6>

            <!----- Start Add Category Form input ------->
            <div class="col-xl-11 mx-auto">
                <div class="form-layout form-layout-4 py-5">

                    <form action="{{ route('admin.update_AccUserManagement') }}" method="post">
                        @csrf
                        <div class="row d-none">
                            <label class="col-sm-3 form-control-label">User id: <span class="tx-danger">*</span></label>
                            <div class="col-sm-9 mg-t-10 mg-sm-t-0">
                            <input type="text" name="user_id" class="form-control" value="{{ $user->id}}" required>
                            </div>
                        </div><!-- row -->
                        <div class="row mb-2">
                            <label class="col-sm-3 form-control-label">User Role: <span class="tx-danger">*</span></label>
                            <div class="col-sm-9 mg-t-10 mg-sm-t-0">
                              <select name="user_role" class="form-control" required>
                                <option selected>Select User Role</option>
                                <option value="Admin" {{($user->user_role == 'Admin')? 'selected':''}}>Admin</option>
                                <option value="HR" {{($user->user_role == 'HR')? 'selected':''}}>HR</option>
                                <option value="Employee" {{($user->user_role == 'Employee')? 'selected':''}}>Employee</option>
                            </select>
                            </div>
                        </div><!-- row -->
                        <div class="row mb-2">
                            <label class="col-sm-3 form-control-label">User Name: <span class="tx-danger">*</span></label>
                            <div class="col-sm-9 mg-t-10 mg-sm-t-0">
                            <input type="text" name="user_name" class="form-control" value="{{ $user->user_name}}" required>
                            </div>
                        </div><!-- row -->
                        <div class="row mb-2">
                          <label class="col-sm-3 form-control-label">User Email: <span class="tx-danger">*</span></label>
                          <div class="col-sm-9 mg-t-10 mg-sm-t-0">
                          <input type="text" name="user_email" class="form-control" value="{{ $user->user_email}}" required>
                          </div>
                      </div><!-- row -->
                      <div class="row mb-2">
                        <label class="col-sm-3 form-control-label">User Phone: <span class="tx-danger">*</span></label>
                        <div class="col-sm-9 mg-t-10 mg-sm-t-0">
                        <input type="text" name="user_phone" class="form-control" value="{{ $user->user_phone}}" required>
                        </div>
                    </div><!-- row -->


                        <div class="row mt-4">
                          <div class="col-sm-12 mg-t-10 mg-sm-t-0 text-right">
                            <a href="{{route('admin.AccUserManagement.home')}}" type="button" class="btn btn-secondary text-white mr-2" >Close</a>
                            <button type="submit" class="btn btn-info ">Update User Info</button>
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
