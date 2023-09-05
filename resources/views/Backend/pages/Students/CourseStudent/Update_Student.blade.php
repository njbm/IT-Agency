@section('title')
    Admin - Student Course Edit
@endsection

@extends('Backend.layouts.layouts')

@section('main_contain')

    <!-- ########## START: MAIN PANEL ########## -->
    <div class="br-mainpanel">
        <div class="br-pageheader">
          <nav class="breadcrumb pd-0 mg-0 tx-12">
            <a class="breadcrumb-item" href="{{route('admin.dashboard')}}">Home</a>
            <a class="breadcrumb-item" href="{{route('admin.student.home')}}"> <i class="icon ion-reply text-22"></i> All Student </a>
          </nav>
        </div><!-- br-pageheader -->

        <div class="br-pagebody">
          <div class="br-section-wrapper">
            <h6 class="br-section-label text-center mb-4">Update Student</h6>

            <!----- Start Add Category Form input ------->
            <div class="col-xl-11 mx-auto">
                <div class="form-layout form-layout-4 py-5">

                    <form action="{{ route('admin.update_student') }}" method="post" enctype="multipart/form-data">
                        @csrf
                    
                        <div class="row mb-2">
                            <label class="col-sm-3 form-control-label">Student Name: <span class="tx-danger">*</span></label>
                            <div class="col-sm-9 mg-t-10 mg-sm-t-0">
                            <input type="text" name="student name" class="form-control" value="{{ $student->student_name }}" required>
                            </div>
                        </div><!-- row -->

                        <div class="row mb-2">
                            <label class="col-sm-3 form-control-label">Email: <span class="tx-danger">*</span></label>
                            <div class="col-sm-9 mg-t-10 mg-sm-t-0">
                                <input type="email" name="email" class="form-control" value="{{ $student->email}}" required>
                            </div>
                        </div><!-- row -->

                        <div class="row mb-2">
                            <label class="col-sm-3 form-control-label">Phone Number: <span class="tx-danger">*</span></label>
                            <div class="col-sm-9 mg-t-10 mg-sm-t-0">
                                <input type="text" name="phone_number" class="form-control" value="{{ $student->phone_number}}" required>
                            </div>
                        </div><!-- row -->

                        <div class="row mb-2">
                            <label class="col-sm-3 form-control-label">Date OF Birth: <span class="tx-danger">*</span></label>
                            <div class="col-sm-9 mg-t-10 mg-sm-t-0">
                                <input type="text" name="date_of_birth" class="form-control" value="{{ $student->date_of_birth}}" required>
                            </div>
                        </div><!-- row -->
                        <div class="row mb-2">
                            <label class="col-sm-3 form-control-label">Country: <span class="tx-danger">*</span></label>
                            <div class="col-sm-9 mg-t-10 mg-sm-t-0">
                                <input type="text" name="country" class="form-control" value="{{ $student->country}}" required>
                            </div>
                        </div><!-- row -->
                        <div class="row mb-2">
                            <label class="col-sm-3 form-control-label">City: <span class="tx-danger">*</span></label>
                            <div class="col-sm-9 mg-t-10 mg-sm-t-0">
                                <input type="text" name="city" class="form-control" value="{{ $student->city}}" required>
                            </div>
                        </div><!-- row -->
                        <div class="row mb-2">
                            <label class="col-sm-3 form-control-label">Post Code: <span class="tx-danger">*</span></label>
                            <div class="col-sm-9 mg-t-10 mg-sm-t-0">
                                <input type="text" name="post_code" class="form-control" value="{{ $student->post_code}}" required>
                            </div>
                        </div><!-- row -->
                        <div class="row mb-2">
                            <label class="col-sm-3 form-control-label">Nid Number: <span class="tx-danger">*</span></label>
                            <div class="col-sm-9 mg-t-10 mg-sm-t-0">
                                <input type="text" name="nid_number" class="form-control" value="{{ $student->nid_number}}" required>
                            </div>
                        </div><!-- row -->
                        <div class="row mb-2">
                            <label class="col-sm-3 form-control-label">Qualification: <span class="tx-danger">*</span></label>
                            <div class="col-sm-9 mg-t-10 mg-sm-t-0">
                                <input type="text" name="qualification" class="form-control" value="{{ $student->qualification}}" required>
                            </div>
                        </div><!-- row -->
                        <div class="row mb-2">
                            <label class="col-sm-3 form-control-label">Address: <span class="tx-danger">*</span></label>
                            <div class="col-sm-9 mg-t-10 mg-sm-t-0">
                                <input type="text" name="address" class="form-control" value="{{ $student->address}}" required>
                            </div>
                        </div><!-- row -->
                        <div class="row mb-2">
                            <label class="col-sm-3 form-control-label">Course Price: <span class="tx-danger">*</span></label>
                            <div class="col-sm-9 mg-t-10 mg-sm-t-0">
                                <input type="text" name="course_price" class="form-control" value="{{ $student->course_price}}" required>
                            </div>
                        </div><!-- row -->
                        <div class="row mb-2">
                            <label class="col-sm-3 form-control-label">Join Date: <span class="tx-danger">*</span></label>
                            <div class="col-sm-9 mg-t-10 mg-sm-t-0">
                                <input type="date" name="join_date" class="form-control" value="{{ $student->join_date}}" required>
                            </div>
                        </div><!-- row -->

                        <div class="row mb-2">
                            <label class="col-sm-3 form-control-label">Gender: <span class="tx-danger">*</span></label>
                            <div class="col-sm-9 mg-t-10 mg-sm-t-0">
                                <div class="radio form-check-inline icheck-primary">
                                    <input id="male" class="mr-1 checked" type="radio" name="gender" value="Male" {{($student->gender == 'Male')?'checked':''}} />
                                    <label for="male"> Male</label>
                                </div>
                                <div class="radio form-check-inline icheck-primary">
                                    <input id="female" class="mr-1" type="radio" name="gender" value="Female" {{($student->gender == 'Female')?'checked':''}} />
                                    <label for="female">Female</label>
                                </div>
                            </div>
                        </div><!-- row -->
                        <div class="row">
                            <label class="col-sm-3 form-control-label">Student Image: <span class="tx-danger">*</span></label>
                            <div class="col-sm-9 mg-t-10 mg-sm-t-0">
                                <input class="form-control" type="file" name="student_image" placeholder="Enter Student Image">
                                <input class="form-control" type="hidden" name="old_student_image" value="{{$student->student_image}}">
                                <br>
                                <img style="height:70px; width:60px;" src="{{ url('backend/Student_Image/',$student->student_image)}}" alt="">
                            </div>
                        </div><!-- row -->
                        
    
                      <input style="display:none;" type="hidden" id="desg_id" value="{{$student->designation_id}}">


                        <div class="row mt-4">
                          <div class="col-sm-12 mg-t-10 mg-sm-t-0 text-right">
                            <a href="{{route('admin.student.home')}}" type="button" class="btn btn-secondary text-white mr-2" >Close</a>
                            <button type="submit" class="btn btn-info ">Update Student</button>
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

    $(document).ready(function(){ 
      let id =  $('#edit_deptID2').val()
      let dest_id =  $('#desg_id').val()
      
        let url = "/admin/hr_department/payment_range/designation_data/" + id
         axios.get(url)
            .then(res => {
              $('#edit_desigID2').empty();
              
                 let html = '';
                 html += '<option value="">------ Select Designation ------</option>'
                 res.data.forEach(element => {
                  const selected = element.id == dest_id ? "selected" : "not";
                     html += "<option value=" + element.id + " "+selected+" >" + element.name + "</option>"
                 });
                 
                  $('#edit_desigID2').append(html);
            });
    })
    
    </script>





@endsection
