@section('title')
    Admin - SubCategory Update
@endsection

@extends('Backend.layouts.layouts')

@section('main_contain')

    <!-- ########## START: MAIN PANEL ########## -->
    <div class="br-mainpanel">
        <div class="br-pageheader">
            <nav class="breadcrumb pd-0 mg-0 tx-12">
              <a class="breadcrumb-item" href="{{route('admin.dashboard')}}">Home</a>
              <a class="breadcrumb-item" href="{{route('service.all_service_subcategory')}}"> <i class="icon ion-reply text-22"></i> All Sub Category</a>
            </nav>
        </div><!-- br-pageheader -->

        <div class="br-pagebody">
          <div class="br-section-wrapper">
            <h6 class="br-section-label text-center mb-4">Update Sub Category</h6>
            @if(count($errors) > 0)
                @foreach($errors->all() as $error)
                    <div class="alert alert-danger">{{ $error }}</div>
                @endforeach
            @endif
            <!----- Start Add Category Form input ------->
            <div class="col-xl-7 mx-auto">
                <div class="form-layout form-layout-4 py-5">

                    <form action="{{ route('service.update_subcategory', $sub_category->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row mb-4 mt-4">
                            <label class="col-sm-3 form-control-label">Category: <span class="tx-danger">*</span></label>
                            <div class="col-sm-9 mg-t-10 mg-sm-t-0">

                                <select class="form-control select2" name="cat_id">

                                    @foreach ($category as $cat)

                                        @if ( $cat->id == $sub_category->cat_id )
                                            <option selected value="{{$cat->id}}">{{$cat->cat_name}}</option>
                                          @else
                                            <option value="{{$cat->id}}">{{$cat->cat_name}}</option>
                                        @endif


                                    @endforeach

                                </select>
                            </div>
                        </div><!-- row -->

                        <div class="row mb-4">
                            <label class="col-sm-3 form-control-label">Sub Category Name: <span class="tx-danger">*</span></label>
                            <div class="col-sm-9 mg-t-10 mg-sm-t-0">
                            <input type="text" name="sub_cat_name" value="{{$sub_category->sub_cat_name}}" class="form-control" placeholder="Enter Sub Category Name">
                            </div>
                        </div>
                        <!-- row -->
                        <div class="row mb-4">
                        <label class="col-sm-3 form-control-label">Sub Category Title: <span class="tx-danger">*</span></label>
                        <div class="col-sm-9 mg-t-10 mg-sm-t-0">
                        <input type="text" name="sub_cat_title"  value="{{$sub_category->sub_cat_title}}" class="form-control" placeholder="Enter Sub Category Title" required>
                        </div>
                    </div><!-- row -->

                        <div class="row mt-4">
                            <label class="col-sm-3 form-control-label">Sub Category Image : </label>
                            <div class="col-sm-9 mg-t-10 mg-sm-t-0 float-right">
                            <input type="hidden" name="sub_cat_image" value="{{$sub_category->sub_cat_image}}" class="form-control">
                                <input type="file" name="sub_cat_image_new"  class="form-control">
                            </div>
                        </div><!-- row -->


                        <div class="row mt-4">
                          <label class="col-sm-3 form-control-label">Status: <span class="tx-danger">*</span></label>
                          <div class="col-sm-9 mg-t-10 mg-sm-t-0">
                            <select class="form-control select2" name="sub_cat_status">
                              <option @if ($sub_category->sub_cat_status == 1) @selected(true) @endif value="1">Active</option>
                              <option @if ($sub_category->sub_cat_status == 0) @selected(true) @endif value="0">Inactive</option>
                          </select>
                          </div>
                        </div><!-- row -->

                        <div class="row mt-4 ">

                          <div class="col-sm-12 mg-t-10 mg-sm-t-0 text-right">
                            <a href="{{route('service.update_subcategory',$sub_category->id)}}" type="button" class="btn btn-secondary text-white mr-2" >Close</a>
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
