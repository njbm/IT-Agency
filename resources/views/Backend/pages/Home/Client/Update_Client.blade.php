@section('title')
    Admin - Edit Client
@endsection

@extends('Backend.layouts.layouts')

@section('main_contain')

    <!-- ########## START: MAIN PANEL ########## -->
    <div class="br-mainpanel">
        <div class="br-pageheader">
          <nav class="breadcrumb pd-0 mg-0 tx-12">
            <a class="breadcrumb-item" href="{{route('admin.dashboard')}}">Home</a>
            <a class="breadcrumb-item" href="{{route('admin.all_client')}}"> <i class="icon ion-reply text-22"></i> All Client</a>
          </nav>
        </div><!-- br-pageheader -->

        <div class="br-pagebody">
          <div class="br-section-wrapper">
            <h6 class="br-section-label text-center mb-4">Update Client</h6>

            <!----- Start Add Category Form input ------->
            <div class="col-xl-7 mx-auto">
                <div class="form-layout form-layout-4 pt-3 py-5">

                    <form action="{{ route('admin.update_client', $client->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row ">
                            <label class="col-sm-3 form-control-label">Current Image</label>
                            <div class="col-sm-9 mg-t-10 mg-sm-t-0">
                                <img src="{{asset('backend/home/client/'. $client->client_logo)}}" alt="" width="60px" height="40px" srcset="">
                            </div>
                        </div><!-- row -->

                        <div class="row mt-4">
                            <label class="col-sm-3 form-control-label">Client Logo: <span class="tx-danger">*</span></label>
                            <div class="col-sm-9 mg-t-10 mg-sm-t-0">
                                <input type="hidden" name="client_logo" value="{{$client->client_logo}}" class="form-control">
                                <input type="file" name="client_new_logo" class="form-control">
                            </div>
                        </div><!-- row -->
                        <div class="row mt-4">
                            <label class="col-sm-3 form-control-label">Client Name: <span class="tx-danger">*</span></label>
                            <div class="col-sm-9 mg-t-10 mg-sm-t-0">
                            <input type="text" name="client_name" class="form-control" value="{{ $client->client_name}}" required>
                            </div>
                        </div><!-- row -->
                        <div class="row mt-4">
                          <label class="col-sm-3 form-control-label">Status: <span class="tx-danger">*</span></label>
                          <div class="col-sm-9 mg-t-10 mg-sm-t-0">
                            <select class="form-control select2" name="client_status">
                              <option @if($client->client_status == 1) @selected(true) @endif value="1">Active</option>
                              <option @if($client->client_status == 0) @selected(true) @endif value="0">Inactive</option>
                          </select>
                          </div>
                        </div><!-- row -->

                        <div class="row mt-4 ">
                          <div class="col-sm-12 mg-t-10 mg-sm-t-0 text-right">
                            <a href="{{route('admin.all_client')}}" type="button" class="btn btn-secondary text-white mr-2" >Close</a>
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
