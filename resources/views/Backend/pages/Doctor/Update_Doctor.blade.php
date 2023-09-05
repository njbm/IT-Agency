@section('title')
    Admin - Doctor Edit
@endsection

@extends('Backend.layouts.layouts')

@section('main_contain')

    <!-- ########## START: MAIN PANEL ########## -->
    <div class="br-mainpanel">
        <div class="br-pageheader">
          <nav class="breadcrumb pd-0 mg-0 tx-12">
            <a class="breadcrumb-item" href="{{route('admin.dashboard')}}">Home</a>
            <a class="breadcrumb-item" href="{{route('doctor.home')}}"> <i class="icon ion-reply text-22"></i> All Doctor</a>
          </nav>
        </div><!-- br-pageheader -->

        <div class="br-pagebody">
          <div class="br-section-wrapper">
            <h6 class="br-section-label text-center mb-4">Update Doctor</h6>

            <!----- Start Add Category Form input ------->
            <div class="col-xl-7 mx-auto">
                <div class="form-layout form-layout-4 py-5">

                    <form action="{{route('doctor.update_doctor')}}" method="post">
                        @csrf
                        <div class="row">
                            <label class="col-sm-3 form-control-label">Doctor Name: <span class="tx-danger">*</span></label>
                            <div class="col-sm-9 mg-t-10 mg-sm-t-0">

                            <input type="text" name="doctor_id" class="form-control d-none" value="{{ $doctor->id}}" required>

                            <input type="text" name="doctor_name" class="form-control" value="{{ $doctor->name}}" required>
                            </div>
                        </div><!-- row -->

                        {{-- <div class="row mt-4">
                          <label class="col-sm-3 form-control-label">Status: <span class="tx-danger">*</span></label>
                          <div class="col-sm-9 mg-t-10 mg-sm-t-0">
                            <select class="form-control select2" name="status">
                              <option @if($category->status == 1) @selected(true) @endif value="1">Active</option>
                              <option @if($category->status == 0) @selected(true) @endif value="0">Inactive</option>
                          </select>
                          </div>
                        </div><!-- row --> --}}

                        <div class="row mt-4">
                          <div class="col-sm-12 mg-t-10 mg-sm-t-0 text-right">
                            <a href="{{route('doctor.home')}}" type="button" class="btn btn-secondary text-white mr-2" >Close</a>
                            <button type="submit" class="btn btn-info ">Update changes</button>
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
@section('script')
<script>
    @if (session('error'))
        Toastify({
            text: "{{ session('error') }}",
            duration: 3000,
            close: true,
            gravity: "top",
            position: "right",
            backgroundColor: "linear-gradient(to right, #F96060, #FCA2A2)",
            stopOnFocus: true,
        }).showToast();
    @else if (session('success'))
        Toastify({
            text: "{{session('success')}}",
            duration: 3000,
            close: true,
            gravity: "top",
            position: "right",
            backgroundColor: "linear-gradient(to right, #00FF7F, #00FFD4)",
            stopOnFocus: true,
        }).showToast();
    @endif
</script>
@endsection
