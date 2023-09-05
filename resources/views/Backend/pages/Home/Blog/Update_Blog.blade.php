
@section('title')
    Admin - Edit Blog
@endsection

@extends('Backend.layouts.layouts')

@section('main_contain')

    <!-- ########## START: MAIN PANEL ########## -->
    <div class="br-mainpanel">

        <div class="br-pagebody">
          <div class="br-section-wrapper">
            <h6 class="br-section-label text-center mb-4 mt-0">Update Blog</h6>
            @if(count($errors) > 0)
                @foreach($errors->all() as $error)
                    <div class="alert alert-danger">{{ $error }}</div>
                @endforeach
            @endif
            <!----- Start Add Category Form input ------->
            <div class="col-xl-7 mx-auto">
                <div class="form-layout form-layout-4 pt-3 py-5">

                    <form action="{{ route('admin.update_blog', $blog->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <label class="col-sm-3 form-control-label">Category: <span class="tx-danger">*</span></label>
                            <div class="col-sm-9 mg-t-10 mg-sm-t-0">
                                <select id="cat_id" class="form-control" name="blog_cat_id" required>

                                    <option value="">Select Category</option>

                                    @foreach ($category as $cat)

                                        <option  @if($cat->id == $blog->blog_cat_id) selected @endif value="{{$cat->id}}">{{$cat->cat_name}}</option>

                                    @endforeach

                                </select>
                            </div>
                        </div><!-- row -->

                        <div class="row mg-t-20">
                            <label class="col-sm-3 form-control-label">Sub Category: <span class="tx-danger">*</span></label>
                            <div class="col-sm-9 mg-t-10 mg-sm-t-0">
                                <select id="sub_cat_id" class="form-control" name="blog_sub_cat_id" required>

                                    <option value="">Select Sub Category</option>

                                    @foreach ($sub_cate as $sub_cat)

                                        <option  @if($sub_cat->id == $blog->blog_sub_cat_id) selected @endif  value="{{$sub_cat->id}}">{{ $sub_cat->sub_cat_name }}</option>

                                    @endforeach

                                 </select>
                            </div>
                        </div>

                        <div class="row mg-t-20">
                            <label class="col-sm-3 form-control-label">Child Category: <span class="tx-danger">*</span></label>
                            <div class="col-sm-9 mg-t-10 mg-sm-t-0">
                                <select id="child_cat_id" class="form-control" name="blog_child_cat_id" required>

                                    <option value="">Select Child Category</option>

                                    @foreach ($child_cate as $child_cat)

                                        <option @if( $child_cat->id == $blog->blog_child_cat_id) selected @endif value="{{$child_cat->id}}">{{ $child_cat->child_cat_name }}</option>

                                    @endforeach

                                </select>
                            </div>
                        </div>

                        <div class="row mg-t-20">
                            <label class="col-sm-3 form-control-label">Title: <span class="tx-danger">*</span></label>
                            <div class="col-sm-9 mg-t-10 mg-sm-t-0">
                            <input type="text" name="blog_title"  value="{{$blog->blog_title}}" class="form-control" placeholder="Enter blog title" required/>
                            </div>
                        </div>

                        <div class="row mg-t-20">
                            <label class="col-sm-3 form-control-label">Current Blog Image</label>
                            <div class="col-sm-9 mg-t-10 mg-sm-t-0">
                                <img src="{{asset('backend/home/blog/'. $blog->blog_image)}}" alt="" width="60px" height="40px" srcset="">
                            </div>
                        </div><!-- row -->

                        <div class="row mg-t-20">
                            <label class="col-sm-3 form-control-label">Blog Image: </label>
                            <div class="col-sm-9 mg-t-10 mg-sm-t-0">
                                <input type="hidden" name="blog_image" value="{{$blog->blog_image}}" class="form-control">
                                <input type="file" name="blog_new_image" class="form-control">
                            </div>
                        </div><!-- row -->

                        <div class="row mg-t-20">
                            <label class="col-sm-3 form-control-label">Writer: <span class="tx-danger">*</span></label>
                            <div class="col-sm-9 mg-t-10 mg-sm-t-0">
                            <input type="text" name="blog_writer" value="{{$blog->blog_writer}}" class="form-control" placeholder="Enter blog writer" required/>
                            </div>
                        </div>

                        <div class="row mg-t-20">
                            <label class="col-sm-3 form-control-label">Blog Content: <span class="tx-danger">*</span></label>
                            <div class="col-sm-9 mg-t-10 mg-sm-t-0">
                                <textarea id="summernote" name="blog_desc" required>{{$blog->blog_desc}}</textarea>
                            </div>
                        </div>

                        <div class="row mt-4">
                          <label class="col-sm-3 form-control-label">Status: <span class="tx-danger">*</span></label>
                          <div class="col-sm-9 mg-t-10 mg-sm-t-0">
                            <select class="form-control select2" name="blog_status">
                              <option @if($blog->blog_status == 1) @selected(true) @endif value="1">Active</option>
                              <option @if($blog->blog_status == 0) @selected(true) @endif value="0">Inactive</option>
                          </select>
                          </div>
                        </div><!-- row -->

                        <div class="row mt-4 ">
                          <div class="col-sm-12 mg-t-10 mg-sm-t-0 text-right">
                            <a href="{{route('admin.all_blog')}}" type="button" class="btn btn-secondary text-white mr-2" >Close</a>
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
