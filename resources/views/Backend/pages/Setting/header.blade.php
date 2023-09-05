@extends('Backend.layouts.layouts')

@section('main_contain')
    <div class="br-mainpanel">

        <div class="br-pagebody">
            <div class="br-section-wrapper">
                <h6 class="br-section-label">Header Setting</h6>
                {{--  <p class="br-section-text">A form with a label on top of each form control.</p>  --}}
                <form action="{{route('header.add')}}" method="post" enctype="multipart/form-data">
                    @csrf
                <div class="form-layout form-layout-1">
                    <div class="row mg-b-25">

                        <div class="col-lg-4">
                            <div class="form-group">
                                <label class="form-control-label">Fav Icon : <span class="tx-danger">*</span></label>
                                <input class="form-control" type="file" name="favicon" value=""
                                    placeholder="Chose Fav Icon">
                            </div>
                        </div><!-- col-4 -->

                        <div class="col-lg-4">
                            <div class="form-group">
                                <label class="form-control-label">Site Logo: <span class="tx-danger">*</span></label>
                                <input class="form-control" type="file" name="logo" value=""
                                    placeholder="Enter your site logo">
                            </div>
                        </div><!-- col-4 -->

                        <div class="col-lg-4">
                            <div class="form-group">
                                <label class="form-control-label">Heading Title: <span class="tx-danger">*</span></label>
                                <input class="form-control" type="text" name="title" value="{{$header->header_title}}"
                                    placeholder="Name of the Heading Title">
                            </div>
                        </div><!-- col-4 -->

                        <div class="col-lg-4">
                            <div class="form-group">
                                <label class="form-control-label">Heading Color: <span class="tx-danger">*</span></label>
                                <input class="form-control" type="color" name="color" value="{{$header->header_color}}"
                                    placeholder="Enter your site heading color">
                            </div>
                        </div><!-- col-4 -->

                        <div class="col-lg-8">
                            <div class="form-group mg-b-10-force">
                                <label class="form-control-label">Heading Description: <span
                                        class="tx-danger">*</span></label>
                                <textarea id="description" name="description" rows="2" cols="74">{{$header->header_description}}</textarea>
                            </div>
                        </div><!-- col-8 -->


                        <div class="form-layout-footer">
                            <button type="submit" class="btn btn-info">Submit Form</button>
                            <button class="btn btn-secondary">Cancel</button>
                        </div><!-- form-layout-footer -->
                    </div><!-- form-layout -->


                </form>
            </div><!-- br-mainpanel -->
@endsection
