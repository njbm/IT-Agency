
@section('title')
    Admin - Edit Subscription
@endsection

@extends('Backend.layouts.layouts')

@section('main_contain')

    <!-- ########## START: MAIN PANEL ########## -->
    <div class="br-mainpanel">

        <div class="br-pagebody">
          <div class="br-section-wrapper">
            <h6 class="br-section-label text-center mb-4 mt-0">Update Subscription</h6>
            @if(count($errors) > 0)
                @foreach($errors->all() as $error)
                    <div class="alert alert-danger">{{ $error }}</div>
                @endforeach
            @endif
            <!----- Start Add Category Form input ------->
            <div class="col-xl-7 mx-auto">
                <div class="form-layout form-layout-4 pt-3 py-5">

                    <form action="{{ route('admin.update_subscription', $subscriptions->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        

                        <div class="row mg-t-20">
                            <label class="col-sm-3 form-control-label">Title: <span class="tx-danger">*</span></label>
                            <div class="col-sm-9 mg-t-10 mg-sm-t-0">
                            <input type="text" name="subs_title"  value="{{$subscriptions->subs_title}}" class="form-control" placeholder="Enter Subscription title" required/>
                            </div>
                        </div>

                        <div class="row mg-t-20">
                            <label class="col-sm-3 form-control-label">Description: <span class="tx-danger">*</span></label>
                            <div class="col-sm-9 mg-t-10 mg-sm-t-0">
                                <textarea id="summernote" name="subs_desc" required>{{$subscriptions->subs_desc}}</textarea>
                            </div>
                        </div>

                        <div class="row mg-t-20">
                            <label class="col-sm-3 form-control-label">Current Price: <span class="tx-danger">*</span></label>
                            <div class="col-sm-9 mg-t-10 mg-sm-t-0">
                            <input type="text" name="current_price"  value="{{$subscriptions->current_price}}" class="form-control" placeholder="Enter Current Price" required/>
                            </div>
                        </div>

                        <div class="row mg-t-20">
                            <label class="col-sm-3 form-control-label">Old Price: <span class="tx-danger">*</span></label>
                            <div class="col-sm-9 mg-t-10 mg-sm-t-0">
                            <input type="text" name="old_price"  value="{{$subscriptions->old_price}}" class="form-control" placeholder="Enter Old Price" required/>
                            </div>
                        </div>

                        <div class="row mg-t-20">
                            <label class="col-sm-3 form-control-label">Subscription Type: <span class="tx-danger">*</span></label>
                            <div class="col-sm-9 mg-t-10 mg-sm-t-0">
                            <input type="text" name="subs_type"  value="{{$subscriptions->subs_type}}" class="form-control" placeholder="Enter Subscription Type" required/>
                            </div>
                        </div>

                        <div class="row mt-4">
                          <label class="col-sm-3 form-control-label">Status: <span class="tx-danger">*</span></label>
                          <div class="col-sm-9 mg-t-10 mg-sm-t-0">
                            <select class="form-control select2" name="subs_status">
                              <option @if($subscriptions->subs_status == 1) @selected(true) @endif value="1">Active</option>
                              <option @if($subscriptions->subs_status == 0) @selected(true) @endif value="0">Inactive</option>
                          </select>
                          </div>
                        </div><!-- row -->

                        <div class="row mt-4 ">
                          <div class="col-sm-12 mg-t-10 mg-sm-t-0 text-right">
                            <a href="{{route('admin.all_subscription')}}" type="button" class="btn btn-secondary text-white mr-2" >Close</a>
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
