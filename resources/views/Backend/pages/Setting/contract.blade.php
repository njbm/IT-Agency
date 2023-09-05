@extends('Backend.layouts.layouts')

@section('main_contain')
<div class="br-mainpanel">

    <div class="br-pagebody">
        <div class="br-section-wrapper">
          <h6 class="br-section-label">Contract Setting</h6>
          <div class="form-layout form-layout-1">
            <form action="{{route('contract.add')}}" method="post" enctype="multipart/form-data">
                @csrf
            <div class="row mg-b-25">

            <div class="col-lg-4">
              <div class="form-group">
                <label class="form-control-label">Email Adress 1: <span class="tx-danger">*</span></label>
                <input class="form-control" type="text" name="email1" value="{{$contract->email1 }}"  placeholder="Enter email address 1">
              </div>

            </div><!-- col-4 -->
            <div class="col-lg-4">
              <div class="form-group">
                <label class="form-control-label">Email Adress 2: <span class="tx-danger">*</span></label>
                <input class="form-control" type="text" name="email2" value="{{$contract->email2 }}" placeholder="Enter email address 2">
              </div>
            </div><!-- col-4 -->


              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">Address 1: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="address1" value="{{$contract->address1 }}" placeholder="Enter company address 1">
                </div>
              </div><!-- col-4 -->

              <div class="col-lg-4">
                <div class="form-group mg-b-10-force">
                  <label class="form-control-label">Address 2: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="address2" value="{{$contract->address2  }}" placeholder="Enter company address 2">
                </div>
            </div><!-- col-4 -->

            <div class="col-lg-4">
              <div class="form-group mg-b-10-force">
                <label class="form-control-label">Contract Number 1: <span class="tx-danger">*</span></label>
                <input class="form-control" type="number" name="contract1" value="{{$contract->contract1   }}" placeholder="Enter contract Number 1">
              </div>
            </div><!-- col-4 -->

            <div class="col-lg-4">
              <div class="form-group mg-b-10-force">
                <label class="form-control-label">Contract Number 2: <span class="tx-danger">*</span></label>
                <input class="form-control" type="number" name="contract2"  value="{{$contract->contract2 }}" placeholder="Enter contract Number 2">
              </div>

            </div><!-- row -->

            <div class="form-layout-footer">
              <button class="btn btn-info">Submit Form</button>
              <button class="btn btn-secondary">Cancel</button>
            </div><!-- form-layout-footer -->
          </div><!-- form-layout -->
        </form>



</div><!-- br-mainpanel -->

@endsection
