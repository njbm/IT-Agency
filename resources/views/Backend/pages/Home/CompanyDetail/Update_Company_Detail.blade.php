@section('title')
    Admin - Edit Slider Item
@endsection

@extends('Backend.layouts.layouts')

@section('main_contain')

    <!-- ########## START: MAIN PANEL ########## -->
    <div class="br-mainpanel">
        <div class="br-pageheader">
          <nav class="breadcrumb pd-0 mg-0 tx-12">
            <a class="breadcrumb-item" href="{{route('admin.dashboard')}}">Home</a>
            <a class="breadcrumb-item" href="{{route('admin.all_company_detail')}}"> <i class="icon ion-reply text-22"></i> All Company Detail</a>
          </nav>
        </div><!-- br-pageheader -->

        <div class="br-pagebody">
          <div class="br-section-wrapper">
            <h6 class="br-section-label text-center mb-4">Edit Company Detail item</h6>

            <!----- Start Add Category Form input ------->
            <div class="col-xl-7 mx-auto">
                <div class="form-layout form-layout-4 pt-3 py-5">

                    <form action="{{ route('admin.update_company_detail', $company_detailse->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row mt-4">
                          <label class="col-sm-3 form-control-label"> Title: <span class="tx-danger">*</span></label>
                          <div class="col-sm-9 mg-t-10 mg-sm-t-0">
                          <input type="text" name="title" value="{{ $company_detailse->title }}" class="form-control" required/>
                          </div>
                       </div><!-- row -->

                       <div class="row mt-4">
                        <label class="col-sm-3 form-control-label"> Number: <span class="tx-danger">*</span></label>
                        <div class="col-sm-9 mg-t-10 mg-sm-t-0">
                        <input type="text" name="number" value="{{ $company_detailse->number }}" class="form-control" required/>
                        </div>
                     </div><!-- row -->
                        
                        <div class="row mt-4">
                            <label class="col-sm-3 form-control-label">Current Logo</label>
                            <div class="col-sm-9 mg-t-10 mg-sm-t-0">
                                <img src="{{asset('backend/home/company/logo/'.$company_detailse->logo)}}" alt="" width="60px" height="40px" srcset="">
                            </div>
                        </div><!-- row -->

                        <div class="row mt-4">
                            <label class="col-sm-3 form-control-label">Logo: <span class="tx-danger">*</span></label>
                            <div class="col-sm-9 mg-t-10 mg-sm-t-0">
                                <input type="hidden" name="logo" value="{{$company_detailse->logo}}" class="form-control">
                                <input type="file" name="new_logo" class="form-control">
                            </div>
                        </div><!-- row -->

                        <div class="row mt-4 ">
                          <div class="col-sm-12 mg-t-10 mg-sm-t-0 text-right">
                            <a href="{{route('admin.all_company_detail')}}" type="button" class="btn btn-secondary text-white mr-2" >Close</a>
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
