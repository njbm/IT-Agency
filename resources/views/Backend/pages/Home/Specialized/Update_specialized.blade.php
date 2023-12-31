@section('title')
    Admin - Edit Specialized
@endsection

@extends('Backend.layouts.layouts')

@section('main_contain')

    <!-- ########## START: MAIN PANEL ########## -->
<div class="br-mainpanel">
    <div class="br-pageheader">
      <nav class="breadcrumb pd-0 mg-0 tx-12">
        <a class="breadcrumb-item" href="{{route('admin.dashboard')}}">Home</a>
        <a class="breadcrumb-item" href="{{route('admin.all_specialized')}}"> <i class="icon ion-reply text-22"></i> All specialized</a>
      </nav>
    </div><!-- br-pageheader -->

    <div class="br-pagebody">
      <div class="br-section-wrapper">
        <h6 class="br-section-label text-center mb-4">Update Specialized</h6>

        <!----- Start Add Category Form input ------->
        <div class="col-xl-7 mx-auto">
            <div class="form-layout form-layout-4 pt-3 py-5">

                <form action="{{ route('admin.update_specialized', $specialized->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row ">
                        <label class="col-sm-3 form-control-label">Current Image</label>
                        <div class="col-sm-9 mg-t-10 mg-sm-t-0">
                            <img src="{{asset('backend/home/Specialized/'. $specialized->icon)}}" alt="" width="60px" height="40px" srcset="">
                        </div>
                    </div><!-- row -->

                    <div class="row mt-4">
                        <label class="col-sm-3 form-control-label">Specialized Logo: <span class="tx-danger">*</span></label>
                        <div class="col-sm-9 mg-t-10 mg-sm-t-0">
                            <input type="hidden" name="icon" value="{{$specialized->icon}}" class="form-control">
                            <input type="file" name="Specialized_new_icon" class="form-control">
                        </div>
                    </div><!-- row -->
                    <div class="row mt-4">
                        <label class="col-sm-3 form-control-label">Category Name: <span class="tx-danger">*</span></label>
                        <div class="col-sm-9 mg-t-10 mg-sm-t-0">
                        <input type="text" name="title" class="form-control" value="{{ $specialized->title}}" required>
                        </div>
                    </div><!-- row -->
                    <div class="row mt-4">
                        <label class="col-sm-3 form-control-label">Specialized Link: <span class="tx-danger">*</span></label>
                        <div class="col-sm-9 mg-t-10 mg-sm-t-0">
                        <input type="text" name="link" class="form-control" value="{{ $specialized->link}}" required>
                        </div>
                    </div><!-- row -->
                    <div class="row mt-4">
                      <label class="col-sm-3 form-control-label">Status: <span class="tx-danger">*</span></label>
                      <div class="col-sm-9 mg-t-10 mg-sm-t-0">
                        <select class="form-control select2" name="status">
                          <option @if($specialized->specialized_status == 1) @selected(true) @endif value="1">Active</option>
                          <option @if($specialized->specialized_status == 0) @selected(true) @endif value="0">Inactive</option>
                      </select>
                      </div>
                    </div><!-- row -->

                    <div class="row mt-4 ">
                      <div class="col-sm-12 mg-t-10 mg-sm-t-0 text-right">
                        <a href="{{route('admin.all_specialized')}}" type="button" class="btn btn-secondary text-white mr-2" >Close</a>
                        <button type="submit" class="btn btn-info">Update changes</button>
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
