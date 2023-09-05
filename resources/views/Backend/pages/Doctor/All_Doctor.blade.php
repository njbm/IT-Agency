@section('title')
Admin - all Doctor
@endsection

@extends('Backend.layouts.layouts')

@section('main_contain')

    <!-- ########## START: MAIN PANEL ########## -->
    <div class="br-mainpanel">

        <div class="br-pagebody">
          <div class="br-section-wrapper">
            <h6 class="br-section-label text-center"> Doctor</h6>
            <div class="mb-3 d-flex justify-content-end">
                <!-- Button trigger modal -->
                <a href="" class="btn btn-info tx-11 tx-uppercase pd-y-12 pd-x-25 tx-mont tx-medium" data-toggle="modal" data-target="#homeAddDoctor"> <i class="fa fa-plus ml-0 mr-1"></i>Add New </a>
            </div>

            <div class="table-wrapper">
              <table id="datatable1" class="table display responsive nowrap">
                <thead>
                  <tr>
                    <th class="wd-25p">Id</th>
                    <th class="wd-25p">Doctor Name</th>
                    <th class="wd-25p">Status</th>
                    <th class="wd-25p">Action</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($doctors as $doctor)
                    <tr>
                        <td class="wd-25p">{{$doctor->id}}</td>
                        <td class="wd-25p">{{$doctor->name}}</td>
                        <td class="wd-25p">Active</td>
                        <td class="wd-25p">
                            <a class="btn text-info" href="{{ route('admin.edit_doctor',$doctor->id) }}"><i class="icon ion-compose tx-28"></i></a>

                            {{-- <button type="button" id='deleteBtn'  class="btn text-danger bg-white" data-id="{{$doctor->id}}" ><i class="icon ion-trash-a tx-28"></i></button> --}}
                            <button class="btn text-danger bg-white" value="{{$doctor->id}}" data-toggle="modal" data-target="#homeDeleteDoctor" data-doctorid="{{$doctor->id}}"><i class="icon ion-trash-a tx-28"></i></button>
                        </td>
                      </tr>
                    @endforeach

                </tbody>
              </table>
            </div><!-- table-wrapper -->


          </div><!-- br-section-wrapper -->
        </div><!-- br-pagebody -->
        <footer class="br-footer">
          <div class="footer-left">
            <div class="mg-b-2">Copyright &copy; <?php echo date('Y');?> NavieaSoft. All Rights Reserved.</div>
            <div>Attentively and carefully made by NavieaSoft.</div>
          </div>
        </footer>
    </div><!-- br-mainpanel -->
    <!-- ########## END: MAIN PANEL ########## -->

    <!--_-- ########### Start Add Doctor MODAL ############---->

    <div id="homeAddDoctor" class="modal fade effect-scale">
    <div class="modal-dialog modal-lg modal-dialog-top" role="document">
        <div class="modal-content tx-size-sm">
        <div class="modal-header pd-x-20">
            <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">Add Doctor</h6>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <!----- Start Add Doctor Form ------->
        <form id="addDoctorForm" method="post" action="{{ route('doctor.save') }}">
        @csrf

        <div class="modal-body pd-20">

            <!----- Start Add Doctor Form input ------->
            <div class="col-xl-12">
                <div class="form-layout form-layout-4">
                    <div class="row">


                        <label class="col-sm-3 form-control-label">Doctor Name: <span class="tx-danger">*</span></label>
                        <div class="col-sm-9 mg-t-10 mg-sm-t-0">
                        <input type="text" name="doctor_name" class="form-control" placeholder="Enter Doctor Name" required>
                        </div>
                    </div><!-- row -->
                </div><!-- form-layout -->
            </div><!-- col-6 -->
            <!----- Start Add Doctor Form input ------->

        </div><!-- modal-body -->

        <div class="modal-footer">
            <button type="submit" id="addDoctorBtn" class="btn btn-info tx-size-xs">Save changes</button>
            <button type="button" class="btn btn-secondary tx-size-xs" data-dismiss="modal">Close</button>
        </div>

        </form>
        <!----- End Add Doctor Form ------->
        </div>
    </div><!-- modal-dialog -->
    </div><!-- modal -->

    <!--_-- ########### End Add Doctor MODAL ############---->


    <!--_-- ########### Start Delete Doctor MODAL ############---->

    <div id="homeDeleteDoctor" class="modal fade">
        <div class="modal-dialog modal-dialog-top" role="document">
            <div class="modal-content tx-size-sm">
                <div class="modal-body tx-center pd-y-20 pd-x-20">
                    <form id="deleteDoctorForm" method="post" action="{{ route('doctor.delete') }}">
                        @csrf
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <i class="icon icon ion-ios-close-outline tx-60 tx-danger lh-1 mg-t-20 d-inline-block"></i>
                        <h4 class="tx-danger  tx-semibold mg-b-20 mt-2">Are you sure you want to delete this?</h4>
                        <input type="hidden" name="doctor_id" id="deleteDoctorId">
                        <button type="submit" class="btn btn-danger mr-2 text-white tx-11 tx-uppercase pd-y-12 pd-x-25 tx-mont tx-medium mg-b-20">Yes</button>
                        <button type="button" class="btn btn-success tx-11 tx-uppercase pd-y-12 pd-x-25 tx-mont tx-medium mg-b-20" data-dismiss="modal" aria-label="Close">No</button>
                    </form>
                </div><!-- modal-body -->
            </div><!-- modal-content -->
        </div><!-- modal-dialog -->
    </div><!-- modal -->





@endsection
@section('script')
<script >
    @if (session('success'))
        alert(session('session'))
    @else
        alert('data not delete')
    @endif

    $(document).ready(function(){
        $('#homeDeleteDoctor').on('show.bs.modal', function(event) {
        var button = $(event.relatedTarget);
        var doctorId = button.data('doctorid');
        var modal = $(this);
        modal.find('#deleteDoctorId').val(doctorId);
    });
    });
    // @if (session('error'))
    //     Toastify({
    //         text: "{{ session('error') }}",
    //         duration: 3000,
    //         close: true,
    //         gravity: "top",
    //         position: "right",
    //         backgroundColor: "linear-gradient(to right, #F96060, #FCA2A2)",
    //         stopOnFocus: true,
    //     }).showToast();
    // @else if (session('success'))
    //     Toastify({
    //         text: "{{session('success')}}",
    //         duration: 3000,
    //         close: true,
    //         gravity: "top",
    //         position: "right",
    //         backgroundColor: "linear-gradient(to right, #00FF7F, #00FFD4)",
    //         stopOnFocus: true,
    //     }).showToast();
    // @endif
</script>
@endsection

