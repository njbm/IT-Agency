@section('title')
    Admin - edit child Category
@endsection

@extends('Backend.layouts.layouts')

@section('main_contain')

    <!-- ########## START: MAIN PANEL ########## -->
    <div class="br-mainpanel">
        <div class="br-pageheader">
            <nav class="breadcrumb pd-0 mg-0 tx-12">
              <a class="breadcrumb-item" href="{{route('admin.dashboard')}}">Home</a>
              <a class="breadcrumb-item" href="{{route('admin.all_child_category')}}"> <i class="icon ion-reply text-22"></i> All Child Category</a>
            </nav>
        </div><!-- br-pageheader -->

        <div class="br-pagebody">
          <div class="br-section-wrapper">
            <h6 class="br-section-label text-center mb-4">Update Child Category</h6>

            <!----- Start Add Category Form input ------->
            <div class="col-xl-7 mx-auto">
                <div class="form-layout form-layout-4 py-5">

                    <form action="{{ route('admin.update_child_category', $child_category->id) }}" method="post">
                        @csrf
                        <div class="row mb-4 mt-4">
                            <label class="col-sm-3 form-control-label">Category: <span class="tx-danger">*</span></label>
                            <div class="col-sm-9 mg-t-10 mg-sm-t-0">

                                <select class="form-control select2" name="sub_cat_id">

                                    @foreach ($sub_category as $sub_cat)

                                        @if ( $sub_cat->id == $child_category->sub_cat_id )
                                            <option selected value="{{$sub_cat->id}}">{{$sub_cat->sub_cat_name}}</option>
                                          @else
                                            <option value="{{$sub_cat->id}}">{{$sub_cat->sub_cat_name}}</option>
                                        @endif

                                    @endforeach

                                </select>
                            </div>
                        </div><!-- row -->

                        <div class="row mb-4">
                            <label class="col-sm-3 form-control-label">Child Category Name: <span class="tx-danger">*</span></label>
                            <div class="col-sm-9 mg-t-10 mg-sm-t-0">
                            <input type="text" name="child_cat_name" value="{{$child_category->child_cat_name}}" class="form-control" placeholder="Enter Child Category Name" required>
                            </div>
                        </div><!-- row -->

                        <div class="row mt-4">
                          <label class="col-sm-3 form-control-label">Status: <span class="tx-danger">*</span></label>
                          <div class="col-sm-9 mg-t-10 mg-sm-t-0">
                            <select class="form-control select2" name="child_cat_status">
                              <option @if ($child_category->child_cat_status == 1) @selected(true) @endif value="1">Active</option>
                              <option @if ($child_category->child_cat_status == 0) @selected(true) @endif value="0">Inactive</option>
                          </select>
                          </div>
                        </div><!-- row -->

                        <div class="row mt-4 ">

                          <div class="col-sm-12 mg-t-10 mg-sm-t-0 text-right">
                            <a href="{{route('admin.all_child_category')}}" type="button" class="btn btn-secondary text-white mr-2" >Close</a>
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
