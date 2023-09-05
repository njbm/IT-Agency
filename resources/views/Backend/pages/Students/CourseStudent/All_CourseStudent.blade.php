@section('title')
Admin - Student Course List
@endsection

@extends('Backend.layouts.layouts')

@section('main_contain')

    <!-- ########## START: MAIN PANEL ########## -->
    <div class="br-mainpanel">

        <div class="br-pagebody">
          <div class="br-section-wrapper">
            <h6 class="br-section-label text-center"> Student Course List </h6>
            <div class="mb-3 d-flex justify-content-end">
                <!-- Button trigger modal -->
                <button class="btn btn-info tx-11 tx-uppercase pd-y-12 pd-x-25 tx-mont tx-medium" data-toggle="modal" data-target="#addModal"> <i class="fa fa-plus ml-0 mr-1"></i>Add New Student Course </button>
            </div>

            <div class="table-wrapper">
              <table id="datatable1" class="table display responsive nowrap">
                <thead>
                  <tr>
                    <th scope="wd-25p">SN</th>
                    <th scope="wd-25p">Student Name</th>
                    <th scope="wd-25p">Student Image</th>
                    <th scope="wd-25p">Email</th>
                    <th scope="wd-25p">Phone</th>
                    <th scope="wd-25p">Date Of Birth</th>
                    <th scope="wd-25p">Country</th>
                    <th scope="wd-25p">City</th>
                    <th scope="wd-25p">Post Code</th>
                    <th scope="wd-25p">Nid Number</th>
                    <th scope="wd-25p">Qualification</th>
                    <th scope="wd-25p">Address</th>
                    <th scope="wd-25p">Gender</th>
                    <th scope="wd-25p">Course Name</th>
                    <th scope="wd-25p">Course Quantity</th>
                    <th scope="wd-25p">Course Price</th>
                    <th scope="wd-25p">Status</th>
                    <th scope="wd-25p">Action</th>
                  </tr>
                </thead>
                <tbody>
                    @php
                    $i = 1;
                @endphp
              @if (count($students) > 0)
                @foreach ($students as $students)
                      <tr>
                          <td>{{ $i++ }}</td>
                          <td>{{ $students->student_name }}</td>
                          <td><img style="height:70px; width:60px;" src="{{ url('backend/Student_Image/',$students->student_image)}}" alt=""></td>
                          <td>{{ $students->email }}</td>
                          <td>{{ $students->phone_number }}</td>
                          <td>{{ $students->date_of_birth }}</td>
                          <td>{{ $students->country }}</td>
                          <td>{{ $students->city }}</td>
                          <td>{{ $students->post_code }}</td>
                          <td>{{ $students->nid_number }}</td>
                          <td>{{ $students->qualification }}</td>
                          <td>{{ $students->address }}</td>
                          <td>{{ $students->gender }}</td>
                          <td>{{ $students->course_name }}</td>
                          <td>{{ $students->course_quantity }}</td>
                          <td>BDT {{ $students->course_price }}/-</td>


                          <td>
                            <a class="btn text-info" href="{{ route('admin.edit_student', $students->id) }}"><i class="icon ion-compose tx-28"></i></a>
                            <button class="btn text-danger bg-white"  data-toggle="modal" data-target="#deleteModal{{ $students->id }}"><i class="icon ion-trash-a tx-28"></i></button>
                          </td>
                      </tr>
                      <!--_-- ########### Start Delete Employee MODAL ############---->

    <div id="deleteModal{{$students->id}}" class="modal fade">
        <div class="modal-dialog modal-dialog-top" role="document">
          <div class="modal-content tx-size-sm">
            <div class="modal-body tx-center pd-y-20 pd-x-20">
                <form >
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <i class="icon icon ion-ios-close-outline tx-60 tx-danger lh-1 mg-t-20 d-inline-block"></i>
                    <h4 class="tx-danger  tx-semibold mg-b-20 mt-2">Are you sure! you want to delete this?</h4>

                    <a href="{{ route('admin.student.delete', $students->id) }}" type="submit" class="btn btn-danger mr-2 text-white tx-11 tx-uppercase pd-y-12 pd-x-25 tx-mont tx-medium mg-b-20">
                        yes
                    </a>
                    <button type="button" class="btn btn-success tx-11 tx-uppercase pd-y-12 pd-x-25 tx-mont tx-medium mg-b-20" data-dismiss="modal" aria-label="Close">
                        No
                    </button>
                </form>
            </div><!-- modal-body -->
          </div><!-- modal-content -->
        </div><!-- modal-dialog -->
      </div><!-- modal -->

    <!--_-- ########### End Delete Employee MODAL ############---->

                    @endforeach
                  @endif

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

    <!--_-- ########### Start Add Employee MODAL ############---->

    <div id="addModal" class="modal fade effect-scale">
    <div class="modal-dialog modal-lg modal-dialog-top" role="document">
        <div class="modal-content tx-size-sm">
        <div class="modal-header pd-x-20">
            <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">Add Student Course</h6>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <!----- Start Add Employee Form ------->
        <form action="{{route('admin.add_studentcourse')}}"  method="post" enctype="multipart/form-data">
        @csrf

        <div class="modal-body pd-20">

            <!----- Start Add Employee Form input ------->
            <div class="col-xl-12">
                <div class="form-layout form-layout-4">
                    <div class="row mb-2">
                        <label class="col-sm-3 form-control-label">Student Name: <span class="tx-danger">*</span></label>
                        <div class="col-sm-9 mg-t-10 mg-sm-t-0">
                        <input type="text" name="student_name" class="form-control" placeholder="Enter Student Name" value="" required>
                        </div>
                    </div><!-- row -->
                    
                    <div class="row mb-2">
                        <label class="col-sm-3 form-control-label">Student Image: <span class="tx-danger">*</span></label>
                        <div class="col-sm-9 mg-t-10 mg-sm-t-0">
                            <input class="form-control" type="file" name="employee_image" placeholder="Enter Employee Image">
                        </div>
                    </div><!-- row -->

                    <div class="row mb-2">
                        <label class="col-sm-3 form-control-label">Email: <span class="tx-danger">*</span></label>
                        <div class="col-sm-9 mg-t-10 mg-sm-t-0">
                            <input type="email" name="email" class="form-control"  placeholder="Enter Email" required>
                        </div>
                    </div><!-- row -->
                    <div class="row mb-2">
                        <label class="col-sm-3 form-control-label">Phone Number: <span class="tx-danger">*</span></label>
                        <div class="col-sm-9 mg-t-10 mg-sm-t-0">
                            <input type="number" name="phone_number" class="form-control" placeholder="Enter Phone Number" required>
                        </div>
                    </div><!-- row -->
                    <div class="row mb-2">
                        <label class="col-sm-3 form-control-label">Date Of Birth: <span class="tx-danger">*</span></label>
                        <div class="col-sm-9 mg-t-10 mg-sm-t-0">
                            <input type="date" name="date_of_birth" class="form-control" value="" required>
                        </div>
                    </div><!-- row -->
                    <div class="row mb-2">
                        <label class="col-sm-3 form-control-label">Country: <span class="tx-danger">*</span></label>
                        <div class="col-sm-9 mg-t-10 mg-sm-t-0">
                            <input type="text" name="country" class="form-control" placeholder="Enter Country Name" required>
                        </div>
                    </div><!-- row -->
                    <div class="row mb-2">
                        <label class="col-sm-3 form-control-label">City: <span class="tx-danger">*</span></label>
                        <div class="col-sm-9 mg-t-10 mg-sm-t-0">
                            <input type="text" name="city" class="form-control" placeholder="Enter City Name" required>
                        </div>
                    </div><!-- row -->
                    <div class="row mb-2">
                        <label class="col-sm-3 form-control-label">Post Code: <span class="tx-danger">*</span></label>
                        <div class="col-sm-9 mg-t-10 mg-sm-t-0">
                            <input type="number" name="post_code" class="form-control" placeholder="Enter Post Code" required>
                        </div>
                    </div><!-- row -->
                    <div class="row mb-2">
                        <label class="col-sm-3 form-control-label">Qualification: <span class="tx-danger">*</span></label>
                        <div class="col-sm-9 mg-t-10 mg-sm-t-0">
                            <input type="text" name="qualification" class="form-control" placeholder="Enter Employee Qualification" required>
                        </div>
                    </div><!-- row -->
                    <div class="row mb-2">
                        <label class="col-sm-3 form-control-label">Address: <span class="tx-danger">*</span></label>
                        <div class="col-sm-9 mg-t-10 mg-sm-t-0">
                            <input type="text" name="address" class="form-control" placeholder="Enter Address" required>
                        </div>
                    </div><!-- row -->

                    <div class="row mb-2">
                        <label class="col-sm-3 form-control-label">Nid Number: <span class="tx-danger">*</span></label>
                        <div class="col-sm-9 mg-t-10 mg-sm-t-0">
                            <input type="number" name="nid_number" class="form-control" placeholder="Enter nid Number" required>
                        </div>
                    </div><!-- row -->

                    <div class="row mb-2">
                        <label class="col-sm-3 form-control-label">Gender: <span class="tx-danger">*</span></label>
                        <div class="col-sm-9 mg-t-10 mg-sm-t-0">
                            <div class="radio form-check-inline icheck-primary">
                                <input id="male" class="mr-1 checked" type="radio" name="gander" value="Male" checked />
                                <label for="male"> Male</label>
                            </div>
                            <div class="radio form-check-inline icheck-primary">
                                <input id="female" class="mr-1" type="radio" name="gander" value="Female" />
                                <label for="female">Female</label>
                            </div>
                        </div>
                    </div><!-- row -->

                    <div class="row mb-2">
                        <label class="col-sm-3 form-control-label">Course Name: <span class="tx-danger">*</span></label>
                        <div class="col-sm-9 mg-t-10 mg-sm-t-0">
                            <input type="text" name="course_name" class="form-control"  placeholder="Enter Course Name" required>
                        </div>
                    </div><!-- row -->

                    <div class="row mb-2">
                        <label class="col-sm-3 form-control-label">Course Quantity: <span class="tx-danger">*</span></label>
                        <div class="col-sm-9 mg-t-10 mg-sm-t-0">
                            <input type="text" name="course_quantity" class="form-control"  placeholder="Enter Course Quantity" required>
                        </div>
                    </div><!-- row -->

                    <div class="row mb-2">
                        <label class="col-sm-3 form-control-label">Course Price: <span class="tx-danger">*</span></label>
                        <div class="col-sm-9 mg-t-10 mg-sm-t-0">
                            <input type="number" name="course_price" class="form-control"  placeholder="Enter Course Price" required>
                        </div>
                    </div><!-- row -->

                    

                </div><!-- form-layout -->
            </div><!-- col-6 -->
            <!----- Start Add Employee Form input ------->

        </div><!-- modal-body -->

        <div class="modal-footer">
            <button type="submit" class="btn btn-info tx-size-xs">Save changes</button>
            <button type="button" class="btn btn-secondary tx-size-xs" data-dismiss="modal">Close</button>
        </div>

        </form>
        <!----- End Add Employee Form ------->
        </div>
    </div><!-- modal-dialog -->
    </div><!-- modal -->

    <!--_-- ########### End Add Employee MODAL ############---->


    {{-- Designation Dynamic --}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.3.4/axios.min.js"></script>
    <script>

    
        $('body').on("change",'#edit_deptID2',function(){
            let id = $(this).val()
            
            let url = "/admin/hr_department/payment_range/designation_data/" + id
             axios.get(url)
                .then(res => {
                  $('#edit_desigID2').empty();
                 
                     let html = '';
                     html += '<option value="">------ Select Designation ------</option>'
                     res.data.forEach(element => {
                        console.log('hello')
                         html += "<option value=" + element.id + ">" + element.name + "</option>"
                     });
                     
                      $('#edit_desigID2').append(html);
                });
        })
    
    </script>



@endsection
