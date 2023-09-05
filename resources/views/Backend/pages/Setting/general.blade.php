@extends('Backend.layouts.layouts')

@section('main_contain')
<div class="br-mainpanel">

    <div class="br-pagebody">
        <div class="br-section-wrapper">
          <h6 class="br-section-label">General Setting</h6>

          <form action="{{route('general.add')}}" method="post">
            @csrf
          <div class="form-layout form-layout-1">
            <div class="row mg-b-25">
              <div class="col-lg-4">

                <div class="form-group">
                  <label class="form-control-label">Name Site : <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="name" value="{{$general->name}}" placeholder="Name of the Site">
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">Welcome Text: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="welcome_text" value="{{$general->welcome_text}}" placeholder="Name of the Text">
                </div>

              </div><!-- col-4 -->
              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">Email Admin: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="email" value="{{$general->email}}" placeholder="Enter email address">
                </div>
              </div><!-- col-4 -->

              <div class="col-lg-4">
                <div class="form-group mg-b-10-force">
                  <label class="form-control-label">Address: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="address" value="{{$general->address}}" placeholder="Enter address">
                </div>
              </div><!-- col-8 -->
              <div class="col-lg-4">
                <div class="form-group mg-b-10-force">
                  <label class="form-control-label">Country: <span class="tx-danger">*</span></label>
                  <select name="country" class="form-control select2" data-placeholder="Choose country">
                    @if ($general->country)

                    <option value="{{$general->country}}" selected>{{$general->country}}"</option>
                    <option value="USA">United States of America</option>
                    <option value="UK">United Kingdom</option>
                    <option value="UK">Bangladesh</option>
                    <option value="China">China</option>
                    <option value="Japan">Japan</option>
                    @else

                    @endif

                  </select>
                </div>
              </div><!-- col-4 -->
            </div><!-- row -->

            <div class="form-layout-footer">
              <button class="btn btn-info">Submit Form</button>
              <button class="btn btn-secondary">Cancel</button>
            </div><!-- form-layout-footer -->
          </div><!-- form-layout -->
          </form>


</div><!-- br-mainpanel -->

@endsection
