@extends('Backend.layouts.layouts')

@section('main_contain')
<div class="br-mainpanel">

    <div class="br-pagebody">
        <div class="br-section-wrapper">
          <h6 class="br-section-label">Limit Setting</h6>
          {{--  <p class="br-section-text">A form with a label on top of each form control.</p>  --}}
        <form action="{{route('limit.add')}}" method="post" enctype="multipart/form-data">
        @csrf
          <div class="form-layout form-layout-1">
            <div class="row mg-b-25">
              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">Number of row : <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="row" value="{{$limits->number_of_rows}}" placeholder="Number of row">
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">Minimum Ammount: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="min_amount" value="{{$limits->min_amount}}" placeholder="Minimum Ammount">
                </div>

              </div><!-- col-8 -->
              <div class="col-lg-4">
                <div class="form-group mg-b-10-force">
                  <label class="form-control-label">File Size Allow: <span class="tx-danger">*</span></label>
                  <select name="file_size_allow" class="form-control select2" data-placeholder="File Size Allow">

                    <option value="{{$limits->file_size_allow}}">{{$limits->file_size_allow}}</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="4">4</option>
                    <option value="8">8</option>
                    <option value="12">12</option>
                  </select>
                </div>
              </div><!-- col-4 -->

            <div class="col-lg-4">
              <div class="form-group mg-b-10-force">
                <label class="form-control-label">Number of Product Show: <span class="tx-danger">*</span></label>
                <select name="number_of_product_show" class="form-control select2" data-placeholder="File Size Allow">

                  <option value="{{$limits->number_of_product_show}}">{{$limits->number_of_product_show}}</option>
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="4">4</option>
                  <option value="8">8</option>
                  <option value="12">12</option>
                </select>
              </div>
            </div><!-- col-4 -->
        </div><!-- col-8 -->


            <div class="form-layout-footer">
              <button class="btn btn-info">Submit Form</button>
              <button class="btn btn-secondary">Cancel</button>
            </div><!-- form-layout-footer -->
          </div><!-- form-layout -->
        </form>


</div><!-- br-mainpanel -->

@endsection
