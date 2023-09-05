@section('title')
Admin - All Hospital
@endsection

@extends('Backend.layouts.layouts')

@section('main_contain')

    <!-- ########## START: MAIN PANEL ########## -->
    <div class="br-mainpanel">

        <div class="br-pagebody">
          <div class="br-section-wrapper">
            <h6 class="br-section-label text-center"> All Hospital</h6>
            <div class="mb-3 d-flex justify-content-end">
                <!-- Button trigger modal -->
                <a href="" class="btn btn-info tx-11 tx-uppercase pd-y-12 pd-x-25 tx-mont tx-medium" data-toggle="modal" data-target="#AddHospital"> <i class="fa fa-plus ml-0 mr-1"></i>Add New </a>
            </div>
            @if(count($errors) > 0)
                @foreach($errors->all() as $error)
                    <div class="alert alert-danger">{{ $error }}</div>
                @endforeach
            @endif
            <div class="table-wrapper">
              <table id="datatable1" class="table display responsive nowrap">
                <thead>
                  <tr>
                    <th class="wd-5p">Id</th>
                    <th class="wd-5p">Country</th>
                    <th class="wd-5p">Divison</th>
                    <th class="wd-5p">Distric</th>
                    <th class="wd-5p">Sub Distric</th>
                    <th class="wd-10p">Name</th>
                    <th class="wd-10p">Photo</th>
                    <th class="wd-10p">Contact</th>
                    <th class="wd-10p">Address</th>
                    <th class="wd-5p">Status</th>
                    <th class="wd-5p">Action</th>
                  </tr>
                </thead>
                <tbody>
                {{-- @php
                    $i = 1;
                @endphp
                  @if (count($doctors) > 0)
                    @foreach ($doctors as $doctor)
                      <tr>
                          <td>{{ $i++ }}</td>
                          <td>

                            @foreach ($departments as $department)

                                @if ($doctor->department_id == $department->id)

                                    {{$department->department_name}}

                                @endif

                           @endforeach

                          </td>
                          <td>{{ $doctor->doc_name }}</td>
                          <td>

                            <img src="{{asset('backend/services/doctor/'. $doctor->doc_image)}}" alt="doctor-image" width="60px" height="40px">

                          </td>

                          <td>{{ $doctor->doc_speciality }}</td>
                          <td>{{ $doctor->doc_cardiology_degree }}</td>
                          <td>{{ $doctor->doc_experience }}</td>
                          <td>{{ $doctor->doc_board_certificate }}</td>
                          <td>{!! $doctor->doc_education !!}</td>
                          <td>{!! $doctor->doc_con_treated !!}</td>
                          <td>{!! $doctor->doc_pro_membership !!}</td>
                          <td>

                            @if ($doctor->doc_status == 1)
                                Active
                              @else
                                Inactive
                            @endif

                          </td>
                          <td>
                            <a class="btn text-info" href="{{ route('admin.edit_doctor', $doctor->id) }}"><i class="icon ion-compose tx-28"></i></a>
                            <button class="btn text-danger bg-white" value="{{$doctor->id}}" id="DoctorDelete"><i class="icon ion-trash-a tx-28"></i></button>
                          </td>
                      </tr>
                    @endforeach
                  @endif --}}

                  <td> </td>

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

    <!--_-- ########### Start Add Category MODAL ############---->

    <div id="AddHospital" class="modal fade effect-scale">
    <div class="modal-dialog modal-lg modal-dialog-top" role="document">
        <div class="modal-content tx-size-sm">
        <div class="modal-header pd-x-20">
            <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">Add New Hospital</h6>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <!----- Start Add Category Form ------->
        <form action="{{ route('admin.add_hospital') }}" method="post" enctype="multipart/form-data">

        @csrf

        <div class="modal-body pd-20">

            <!----- Start Add Doctor Form input ------->
            <div class="col-xl-12">
                <div class="form-layout form-layout-4">

                    <div class="row">
                        <label class="col-sm-3 form-control-label">Country: <span class="tx-danger">*</span></label>
                        <div class="col-sm-9 mg-t-10 mg-sm-t-0">
                            <select class="form-control custom-select" name="country_id" required>

                                <option value=" ">select country </option>

                                {{-- @foreach ($departments as $department)

                                   <option value="{{$department->id}}">{{$department->department_name}}</option>

                                @endforeach --}}

                            </select>
                        </div>
                    </div><!-- row -->
                    <div class="row mt-3">
                        <label class="col-sm-3 form-control-label">Divison: <span class="tx-danger">*</span></label>
                        <div class="col-sm-9 mg-t-10 mg-sm-t-0">
                            <select class="form-control custom-select" name="country_id" required>

                                <option value=" ">select divison </option>

                                {{-- @foreach ($departments as $department)

                                   <option value="{{$department->id}}">{{$department->department_name}}</option>

                                @endforeach --}}

                            </select>
                        </div>
                    </div><!-- row -->
                    <div class="row mt-3">
                        <label class="col-sm-3 form-control-label">Distric: <span class="tx-danger">*</span></label>
                        <div class="col-sm-9 mg-t-10 mg-sm-t-0">
                            <select class="form-control custom-select" name="country_id" required>

                                <option value=" ">select distric </option>

                                {{-- @foreach ($departments as $department)

                                   <option value="{{$department->id}}">{{$department->department_name}}</option>

                                @endforeach --}}

                            </select>
                        </div>
                    </div><!-- row -->

                    <div class="row mt-3">
                        <label class="col-sm-3 form-control-label">Sub Distric: <span class="tx-danger">*</span></label>
                        <div class="col-sm-9 mg-t-10 mg-sm-t-0">
                            <select class="form-control custom-select" name="country_id" required>

                                <option value=" ">select sub-distric </option>

                                {{-- @foreach ($departments as $department)

                                   <option value="{{$department->id}}">{{$department->department_name}}</option>

                                @endforeach --}}

                            </select>
                        </div>
                    </div><!-- row -->

                    <div class="row mt-3">
                        <label class="col-sm-3 form-control-label">Hospital Name: <span class="tx-danger">*</span></label>
                        <div class="col-sm-9 mg-t-10 mg-sm-t-0">
                        <input type="text" name="hos_name" class="form-control" placeholder="Enter Hospital Name">
                        </div>
                    </div><!-- row -->

                    <div class="row mt-3">
                        <label class="col-sm-3 form-control-label">Hospital Photo: <span class="tx-danger">*</span></label>
                        <div class="col-sm-9 mg-t-10 mg-sm-t-0">
                            <input type="file" name="hos_image" class="form-control">
                        </div>
                    </div><!-- row -->

                    <div class="row mt-3">
                        <label class="col-sm-3 form-control-label">Contract Number: <span class="tx-danger">*</span></label>
                        <div class="col-sm-9 mg-t-10 mg-sm-t-0">
                        <input type="text" name="hos_number" class="form-control" placeholder="Enter Hospital Contract">
                        </div>
                    </div><!-- row -->


                    <div class="row mt-3">
                        <label class="col-sm-3 form-control-label"> Address : <span class="tx-danger">*</span></label>
                        <div class="col-sm-9 mg-t-10 mg-sm-t-0">
                            <textarea name="hos_address" class="form-control" cols="30" rows="5" placeholder="Enter Hospital Address"></textarea>
                        </div>
                    </div><!-- row -->
                    {{-- <div class="row mt-3">
                        <label class="col-sm-3 form-control-label">Experience: </label>
                        <div class="col-sm-9 mg-t-10 mg-sm-t-0">
                            <input type="text" name="doc_experience" class="form-control" placeholder="Enter Experience " />
                        </div>
                    </div><!-- row --> --}}


                </div><!-- form-layout -->
            </div><!-- col-6 -->
            <!----- Start Add Doctor Form input ------->

        </div><!-- modal-body -->

        <div class="modal-footer">
            <button type="submit" class="btn btn-info tx-size-xs">Save changes</button>
            <button type="button" class="btn btn-secondary tx-size-xs" data-dismiss="modal">Close</button>
        </div>

        </form>
        <!----- End Add Category Form ------->
        </div>
    </div><!-- modal-dialog -->
    </div><!-- modal -->

    <!--_-- ########### End Add Category MODAL ############---->


    <!--_-- ########### Start Delete Category MODAL ############---->

    <div id="DeleteDoctor" class="modal fade">
        <div class="modal-dialog modal-dialog-top" role="document">
          <div class="modal-content tx-size-sm">
            <div class="modal-body tx-center pd-y-20 pd-x-20">
                <form action="{{ route('admin.delete_doctor') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <i class="icon icon ion-ios-close-outline tx-60 tx-danger lh-1 mg-t-20 d-inline-block"></i>
                    <h4 class="tx-danger  tx-semibold mg-b-20 mt-2">Are you sure! you want to delete this?</h4>
                    <input type="hidden" name="doctor_id" id="doctor_id">
                    <button type="submit" class="btn btn-danger mr-2 text-white tx-11 tx-uppercase pd-y-12 pd-x-25 tx-mont tx-medium mg-b-20">
                        yes
                    </button>
                    <button type="button" class="btn btn-success tx-11 tx-uppercase pd-y-12 pd-x-25 tx-mont tx-medium mg-b-20" data-dismiss="modal" aria-label="Close">
                        No
                    </button>
                </form>
            </div><!-- modal-body -->
          </div><!-- modal-content -->
        </div><!-- modal-dialog -->
      </div><!-- modal -->

    <!--_-- ########### End Delete Category MODAL ############---->




@endsection
