@section('title')
    Admin - Edit Slider Item
@endsection

@extends('Backend.layouts.layouts')

@section('main_contain')

    <!-- ########## START: MAIN PANEL ########## -->
    <div class="br-mainpanel">
        <div class="br-pageheader">
          <nav class="breadcrumb pd-0 mg-0 tx-12">
            <a class="breadcrumb-item" href="{{route('admin.dashboard')}}">Home</a>
            <a class="breadcrumb-item" href="{{route('admin.all_slider')}}"> <i class="icon ion-reply text-22"></i> All Slider</a>
          </nav>
        </div><!-- br-pageheader -->

        <div class="br-pagebody">
          <div class="br-section-wrapper">
            <h6 class="br-section-label text-center mb-4">Edit Laning Page</h6>

            <!----- Start Add Category Form input ------->
            <div class="col-xl-10 mx-auto">
                <div class="form-layout form-layout-4 pt-3 py-5">

                    <form action="{{ route('admin.update_langing_page',$langing_page->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <!-- slider section -->
                        <div class="row mt-4">
                          <label class="col-sm-3 form-control-label">Slider_Top_Title:<span class="tx-danger">*</span></label>
                          <div class="col-sm-9 mg-t-10 mg-sm-t-0">
                          <input type="text" name="slider_top_title" value="{{ $langing_page->slider_top_title }}" class="form-control" required/>
                          </div>
                       </div><!-- row -->

                       <div class="row mt-4">
                          <label class="col-sm-3 form-control-label">Slider_Sort_Title:<span class="tx-danger">*</span></label>
                          <div class="col-sm-9 mg-t-10 mg-sm-t-0">
                          <input type="text" name="slider_sort_title" value="{{ $langing_page->slider_sort_title }}" class="form-control" required/>
                          </div>
                       </div><!-- row -->

                        <div class="row mt-4">
                        <label class="col-sm-3 form-control-label"> slider_description: <span class="tx-danger">*</span></label>
                        <div class="col-sm-9 mg-t-10 mg-sm-t-0">
                            <textarea id="summernote" name="slider_description">{{ $langing_page->slider_description }}</textarea>
                        </div>
                        </div><!-- row -->

                        <!-- section 1 -->
                        <div class="row mt-4">
                          <label class="col-sm-3 form-control-label">First_Section_title: <span class="tx-danger">*</span></label>
                          <div class="col-sm-9 mg-t-10 mg-sm-t-0">
                          <input type="text" name="s1_title1" value="{{ $langing_page->s1_title1 }}" class="form-control" required/>
                          </div>
                       </div><!-- row -->

                        <div class="row mt-4">
                          <label class="col-sm-3 form-control-label">First_Section_Text: <span class="tx-danger">*</span></label>
                          <div class="col-sm-9 mg-t-10 mg-sm-t-0">
                          <input type="text" name="s1_text1" value="{{ $langing_page->s1_text1 }}" class="form-control" required/>
                          </div>
                       </div><!-- row -->

                       <!-- section 2 -->
                        <div class="row mt-4">
                          <label class="col-sm-3 form-control-label">Two_Section_Title: <span class="tx-danger">*</span></label>
                          <div class="col-sm-9 mg-t-10 mg-sm-t-0">
                          <input type="text" name="s2_title1" value="{{ $langing_page->s2_title1 }}" class="form-control" required/>
                          </div>
                       </div><!-- row -->

                        <div class="row mt-4">
                          <label class="col-sm-3 form-control-label">Two_Section_Text: <span class="tx-danger">*</span></label>
                          <div class="col-sm-9 mg-t-10 mg-sm-t-0">
                          <input type="text" name="s2_text1" value="{{ $langing_page->s2_text1 }}" class="form-control" required/>
                          </div>
                       </div><!-- row -->

                       <div class="row mt-4">
                            <label class="col-sm-3 form-control-label">Current Image</label>
                            <div class="col-sm-9 mg-t-10 mg-sm-t-0">
                                <img src="{{asset('backend/home/langingpage/image/'. $langing_page->s2_back_img)}}" alt="" width="60px" height="40px" srcset="">
                            </div>
                        </div><!-- row -->

                        <div class="row mt-4">
                            <label class="col-sm-3 form-control-label"> Two_Sections_Image: <span class="tx-danger">*</span></label>
                            <div class="col-sm-9 mg-t-10 mg-sm-t-0">
                                <input type="hidden" name="s2_back_img" value="{{$langing_page->s2_back_img}}" class="form-control">
                                <input type="file" name="s2_back_img_new" class="form-control">
                            </div>
                        </div><!-- row -->

                      <!-- three section -->

                        <div class="row mt-4">
                          <label class="col-sm-3 form-control-label">Three_Sections_title: <span class="tx-danger">*</span></label>
                          <div class="col-sm-9 mg-t-10 mg-sm-t-0">
                          <input type="text" name="s3_title1" value="{{ $langing_page->s3_title1 }}" class="form-control" required/>
                          </div>
                       </div><!-- row -->

                       <div class="row mt-4">
                          <label class="col-sm-3 form-control-label">Three_Sections_Text: <span class="tx-danger">*</span></label>
                          <div class="col-sm-9 mg-t-10 mg-sm-t-0">
                          <input type="text" name="s3_text1" value="{{ $langing_page->s3_text1 }}" class="form-control" required/>
                          </div>
                       </div><!-- row -->

                       <div class="row mt-4">
                          <label class="col-sm-3 form-control-label">Three_Sections_Right_Text: <span class="tx-danger">*</span></label>
                          <div class="col-sm-9 mg-t-10 mg-sm-t-0">
                          <input type="text" name="s3_text2" value="{{ $langing_page->s3_text2 }}" class="form-control" required/>
                          </div>
                       </div><!-- row -->

                       <div class="row mt-4">
                          <label class="col-sm-3 form-control-label">Three_Sections_Description: <span class="tx-danger">*</span></label>
                          <div class="col-sm-9 mg-t-10 mg-sm-t-0">
                          <input type="text" name="s3_description1" value="{{ $langing_page->s3_description1 }}" class="form-control" required/>
                          </div>
                       </div><!-- row -->

                       <!-- Section Four -->
                       <div class="row mt-4">
                          <label class="col-sm-3 form-control-label">Four_Section_title1: <span class="tx-danger">*</span></label>
                          <div class="col-sm-9 mg-t-10 mg-sm-t-0">
                          <input type="text" name="s4_title1" value="{{ $langing_page->s4_title1 }}" class="form-control" required/>
                          </div>
                       </div><!-- row -->

                       <div class="row mt-4">
                          <label class="col-sm-3 form-control-label">Four_Section_Text: <span class="tx-danger">*</span></label>
                          <div class="col-sm-9 mg-t-10 mg-sm-t-0">
                          <input type="text" name="s4_text1" value="{{ $langing_page->s4_text1 }}" class="form-control" required/>
                          </div>
                       </div><!-- row -->

                        <div class="row mt-4">
                            <label class="col-sm-3 form-control-label">Current Image</label>
                            <div class="col-sm-9 mg-t-10 mg-sm-t-0">
                                <img src="{{asset('backend/home/langingpage/image/'. $langing_page->s4_back_img1)}}" alt="" width="60px" height="40px" srcset="">
                            </div>
                        </div><!-- row -->

                        <div class="row mt-4">
                            <label class="col-sm-3 form-control-label">Four_Section_Image: <span class="tx-danger">*</span></label>
                            <div class="col-sm-9 mg-t-10 mg-sm-t-0">
                                <input type="hidden" name="s4_back_img1" value="{{$langing_page->s4_back_img1}}" class="form-control">
                                <input type="file" name="s4_back_img1_new" class="form-control">
                            </div>
                        </div><!-- row -->

                        <!-- Five -->
                       <div class="row mt-4">
                          <label class="col-sm-3 form-control-label">Five_Section_Title: <span class="tx-danger">*</span></label>
                          <div class="col-sm-9 mg-t-10 mg-sm-t-0">
                          <input type="text" name="s5_title1" value="{{ $langing_page->s5_title1 }}" class="form-control" required/>
                          </div>
                       </div><!-- row -->

                       <div class="row mt-4">
                          <label class="col-sm-3 form-control-label">Five_Section_Text: <span class="tx-danger">*</span></label>
                          <div class="col-sm-9 mg-t-10 mg-sm-t-0">
                          <input type="text" name="s5_title2" value="{{ $langing_page->s5_title2 }}" class="form-control" required/>
                          </div>
                       </div><!-- row -->

                       <div class="row mt-4">
                          <label class="col-sm-3 form-control-label">Five_Section_Right_Text: <span class="tx-danger">*</span></label>
                          <div class="col-sm-9 mg-t-10 mg-sm-t-0">
                          <input type="text" name="s5_title_r" value="{{ $langing_page->s5_title_r }}" class="form-control" required/>
                          </div>
                       </div><!-- row -->

                       <!-- six section -->
                       <div class="row mt-4">
                          <label class="col-sm-3 form-control-label">Six_Section_Title: <span class="tx-danger">*</span></label>
                          <div class="col-sm-9 mg-t-10 mg-sm-t-0">
                          <input type="text" name="s6_title1" value="{{ $langing_page->s6_title1 }}" class="form-control" required/>
                          </div>
                       </div><!-- row -->

                       <div class="row mt-4">
                          <label class="col-sm-3 form-control-label">Six_Section_Text: <span class="tx-danger">*</span></label>
                          <div class="col-sm-9 mg-t-10 mg-sm-t-0">
                          <input type="text" name="s6_text1" value="{{ $langing_page->s6_text1 }}" class="form-control" required/>
                          </div>
                       </div><!-- row -->

                        <div class="row mt-4">
                            <label class="col-sm-3 form-control-label">Current Image</label>
                            <div class="col-sm-9 mg-t-10 mg-sm-t-0">
                                <img src="{{asset('backend/home/langingpage/image/'.$langing_page->s6_back_img1)}}" alt="" width="60px" height="40px" srcset="">
                            </div>
                        </div><!-- row -->

                        <div class="row mt-4">
                            <label class="col-sm-3 form-control-label">Six_Section_image: <span class="tx-danger">*</span></label>
                            <div class="col-sm-9 mg-t-10 mg-sm-t-0">
                                <input type="hidden" name="s6_back_img1" value="{{$langing_page->s6_back_img1}}" class="form-control">
                                <input type="file" name="s6_back_img1_new" class="form-control">
                            </div>
                        </div><!-- row -->

                       <!-- sevend -->

                       <div class="row mt-4">
                          <label class="col-sm-3 form-control-label">Sevend_Section_Title: <span class="tx-danger">*</span></label>
                          <div class="col-sm-9 mg-t-10 mg-sm-t-0">
                          <input type="text" name="s7_title1" value="{{ $langing_page->s7_title1 }}" class="form-control" required/>
                          </div>
                       </div><!-- row -->

                       <div class="row mt-4">
                          <label class="col-sm-3 form-control-label">Sevend_Section_Text: <span class="tx-danger">*</span></label>
                          <div class="col-sm-9 mg-t-10 mg-sm-t-0">
                          <input type="text" name="s7_text1" value="{{ $langing_page->s7_text1 }}" class="form-control" required/>
                          </div>
                       </div><!-- row -->

                       <!-- eight section -->
                       <div class="row mt-4">
                          <label class="col-sm-3 form-control-label">Eight_Section_Title: <span class="tx-danger">*</span></label>
                          <div class="col-sm-9 mg-t-10 mg-sm-t-0">
                          <input type="text" name="s8_title1" value="{{ $langing_page->s8_title1 }}" class="form-control" required/>
                          </div>
                       </div><!-- row -->

                       <div class="row mt-4">
                          <label class="col-sm-3 form-control-label">Eight_Section_Text: <span class="tx-danger">*</span></label>
                          <div class="col-sm-9 mg-t-10 mg-sm-t-0">
                          <input type="text" name="s8_text1" value="{{ $langing_page->s8_text1 }}" class="form-control" required/>
                          </div>
                       </div><!-- row -->

                         <!-- nine section -->
                       <div class="row mt-4">
                          <label class="col-sm-3 form-control-label">Nine_Section_Title1: <span class="tx-danger">*</span></label>
                          <div class="col-sm-9 mg-t-10 mg-sm-t-0">
                          <input type="text" name="s9_title1" value="{{ $langing_page->s9_title1 }}" class="form-control" required/>
                          </div>
                       </div><!-- row -->

                        <div class="row mt-4">
                            <label class="col-sm-3 form-control-label">Current Image</label>
                            <div class="col-sm-9 mg-t-10 mg-sm-t-0">
                                <img src="{{asset('backend/home/langingpage/image/'. $langing_page->s9_back_img1)}}" alt="" width="60px" height="40px" srcset="">
                            </div>
                        </div><!-- row -->

                        <div class="row mt-4">
                            <label class="col-sm-3 form-control-label">Nine_Section_Image: <span class="tx-danger">*</span></label>
                            <div class="col-sm-9 mg-t-10 mg-sm-t-0">
                                <input type="hidden" name="s9_back_img1" value="{{$langing_page->s9_back_img1}}" class="form-control">
                                <input type="file" name="s9_back_img1_new" class="form-control">
                            </div>
                        </div><!-- row -->

                         <!-- Ten_Section -->
                       <div class="row mt-4">
                          <label class="col-sm-3 form-control-label">Ten_Section_Title: <span class="tx-danger">*</span></label>
                          <div class="col-sm-9 mg-t-10 mg-sm-t-0">
                          <input type="text" name="s10_title1" value="{{ $langing_page->s10_title1 }}" class="form-control" required/>
                          </div>
                       </div><!-- row -->

                       <div class="row mt-4">
                          <label class="col-sm-3 form-control-label">Ten_Section_Text: <span class="tx-danger">*</span></label>
                          <div class="col-sm-9 mg-t-10 mg-sm-t-0">
                          <input type="text" name="s10_text1" value="{{ $langing_page->s10_text1 }}" class="form-control" required/>
                          </div>
                       </div><!-- row -->

                       <div class="row mt-4">
                          <label class="col-sm-3 form-control-label">Ten_Section_Right_Title: <span class="tx-danger">*</span></label>
                          <div class="col-sm-9 mg-t-10 mg-sm-t-0">
                          <input type="text" name="s10_r_title1" value="{{ $langing_page->s10_r_title1 }}" class="form-control" required/>
                          </div>
                       </div><!-- row -->

                        <div class="row mt-4">
                            <label class="col-sm-3 form-control-label">Current_QR_Code</label>
                            <div class="col-sm-9 mg-t-10 mg-sm-t-0">
                                <img src="{{asset('backend/home/langingpage/image/'. $langing_page->s10_r_sceen)}}" alt="" width="60px" height="40px" srcset="">
                            </div>
                        </div><!-- row -->

                        <div class="row mt-4">
                            <label class="col-sm-3 form-control-label">Ten_Section_QR_Code: <span class="tx-danger">*</span></label>
                            <div class="col-sm-9 mg-t-10 mg-sm-t-0">
                                <input type="hidden" name="s10_r_sceen" value="{{$langing_page->s10_r_sceen}}" class="form-control">
                                <input type="file" name="s10_r_sceen_new" class="form-control">
                            </div>
                        </div><!-- row -->

                       <div class="row mt-4">
                          <label class="col-sm-3 form-control-label">Ten_Section_Right_Text1: <span class="tx-danger">*</span></label>
                          <div class="col-sm-9 mg-t-10 mg-sm-t-0">
                          <input type="text" name="s10_r_text1" value="{{ $langing_page->s10_r_text1 }}" class="form-control" required/>
                          </div>
                       </div><!-- row -->

                       <div class="row mt-4">
                          <label class="col-sm-3 form-control-label">Ten_Section_Right_Text2: <span class="tx-danger">*</span></label>
                          <div class="col-sm-9 mg-t-10 mg-sm-t-0">
                          <input type="text" name="s10_r_text2" value="{{ $langing_page->s10_r_text2 }}" class="form-control" required/>
                          </div>
                       </div><!-- row -->


                        <div class="row mt-4 ">
                          <div class="col-sm-12 mg-t-10 mg-sm-t-0 text-right">
                            <a href="{{route('admin.all_slider')}}" type="button" class="btn btn-secondary text-white mr-2" >Close</a>
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
