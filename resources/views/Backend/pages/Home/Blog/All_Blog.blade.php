@section('title')
Admin - All Blog
@endsection

@extends('Backend.layouts.layouts')

@section('main_contain')

    <!-- ########## START: MAIN PANEL ########## -->
    <div class="br-mainpanel">
        <div class="br-pagebody">
          <div class="br-section-wrapper">
            <h6 class="br-section-label text-center">All Blog</h6>
            <div class="mb-3 d-flex justify-content-end">
                <!-- Button trigger modal -->
                <a href="" class="btn btn-info tx-11 tx-uppercase pd-y-12 pd-x-25 tx-mont tx-medium" data-toggle="modal" data-target="#homeAddblog"> <i class="fa fa-plus ml-0 mr-1"></i>Add New </a>
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
                    <th class="wd-10p">Category</th>
                    <th class="wd-10p">Sub Category</th>
                    <th class="wd-10p">Child Category</th>
                    <th class="wd-10p">Title</th>
                    <th class="wd-10p">Image</th>
                    <th class="wd-10p">writer</th>
                    <th class="wd-10p">date</th>
                    <th class="wd-15p">Content</th>
                    <th class="wd-10p">Action</th>
                  </tr>
                </thead>
                <tbody>
                  @php
                    $i = 1;
                  @endphp
                  @if (count($blogs) > 0)
                    @foreach ($blogs as $blog)
                      <tr>
                          <td>{{$i++}}</td>
                          <td>

                            @foreach ($category as $cat)

                                @if ($cat->id == $blog->blog_cat_id)

                                    {{ $cat->cat_name }}

                                @endif

                            @endforeach

                          </td>
                          <td>

                            @foreach ($sub_cate as $sub_cat)

                                @if ($sub_cat->id == $blog->blog_sub_cat_id)

                                    {{ $sub_cat->sub_cat_name }}

                                @endif

                            @endforeach

                          </td>
                          <td>

                            @foreach ($child_cate as $child_cat)

                                @if ($child_cat->id == $blog->blog_child_cat_id)

                                    {{ $child_cat->child_cat_name }}

                                @endif

                            @endforeach

                          </td>
                          <td>{{$blog->blog_title}}</td>
                          <td>
                            <img src="{{asset('backend/home/blog/'. $blog->blog_image)}}" alt="" width="60px" height="40px" srcset="">
                          </td>
                          <td>{{$blog->blog_writer}}</td>
                          <td>{{ $blog->created_at->format('Y-m-d') }}</td>
                          <td>{!! $blog->blog_desc !!}</td>
                          <td>
                            <a class="btn text-info" href="{{ route('admin.edit_blog', $blog->id) }}"><i class="icon ion-compose tx-28"></i></a>
                            <button class="btn text-danger bg-white" value="{{$blog->id}}" id="homeBlogDelete"><i class="icon ion-trash-a tx-28"></i></button>
                          </td>
                      </tr>
                    @endforeach
                  @endif

                </tbody>
              </table>
            </div><!-- table-wrapper -->


          </div><!-- br-section-wrapper -->
        </div><!-- br-pagebody -->
        
    </div><!-- br-mainpanel -->
    <!-- ########## END: MAIN PANEL ########## -->

    <!-- Start Add Blog Bootstrap MODAL -->

    <div id="homeAddblog" class="modal fade effect-scale">
        <div class="modal-dialog modal-lg modal-dialog-top" role="document">
            <div class="modal-content tx-size-sm">
            <div class="modal-header pd-x-20">
                <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">Add Blog</h6>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <!----- Start Add blog Form ------->
            <form action="{{ route('admin.add_blog') }} " method="post" enctype="multipart/form-data">
            @csrf
            <div class="modal-body pd-20">

                <!----- Start Add blog Form input ------->
                <div class="col-xl-12">
                    <div class="form-layout form-layout-4">
                        <div class="row">
                            <label class="col-sm-3 form-control-label">Category: <span class="tx-danger">*</span></label>
                            <div class="col-sm-9 mg-t-10 mg-sm-t-0">
                                <select id="cat_id" class="form-control" name="blog_cat_id" required>
                                    <option value="">Select Category</option>
                                    @foreach ($category as $cat)
                                       <option value="{{$cat->id}}">{{$cat->cat_name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div><!-- row -->

                        <div class="row mg-t-20">
                            <label class="col-sm-3 form-control-label">Sub Category: <span class="tx-danger">*</span></label>
                            <div class="col-sm-9 mg-t-10 mg-sm-t-0">
                                <select id="sub_cat_id" class="form-control" name="blog_sub_cat_id" required>

                                    <option value="1">Select Sub Category</option>

                                 </select>
                            </div>
                        </div>

                        <div class="row mg-t-20">
                            <label class="col-sm-3 form-control-label">Child Category: <span class="tx-danger">*</span></label>
                            <div class="col-sm-9 mg-t-10 mg-sm-t-0">
                                <select id="child_cat_id" class="form-control" name="blog_child_cat_id" required>

                                    <option value="1">Select Child Category</option>

                                </select>
                            </div>
                        </div>

                        <div class="row mg-t-20">
                            <label class="col-sm-3 form-control-label">Title: <span class="tx-danger">*</span></label>
                            <div class="col-sm-9 mg-t-10 mg-sm-t-0">
                            <input type="text" name="blog_title" class="form-control" placeholder="Enter blog title" required/>
                            </div>
                        </div>

                        <div class="row mg-t-20">
                            <label class="col-sm-3 form-control-label">Image: <span class="tx-danger">*</span></label>
                            <div class="col-sm-9 mg-t-10 mg-sm-t-0">
                                <input type="file" name="blog_image" class="form-control"/>
                            </div>
                        </div>

                        <div class="row mg-t-20">
                            <label class="col-sm-3 form-control-label">Writer: <span class="tx-danger">*</span></label>
                            <div class="col-sm-9 mg-t-10 mg-sm-t-0">
                            <input type="text" name="blog_writer" class="form-control" placeholder="Enter blog writer" required/>
                            </div>
                        </div>

                        <div class="row mg-t-20">
                            <label class="col-sm-3 form-control-label">Blog Content: <span class="tx-danger">*</span></label>
                            <div class="col-sm-9 mg-t-10 mg-sm-t-0">
                                <textarea id="summernote" name="blog_desc" required></textarea>
                            </div>
                        </div>

                    </div><!-- form-layout -->
                </div><!-- col-6 -->
                <!----- Start Add blog Form input ------->

            </div><!-- modal-body -->
            <div class="modal-footer">
                <button type="submit" class="btn btn-info tx-size-xs">Save changes</button>
                <button type="button" class="btn btn-secondary tx-size-xs" data-dismiss="modal">Close</button>
            </div>
            </form>
            <!----- End Add Blg Form ------->
            </div>
        </div><!-- modal-dialog -->
    </div><!-- modal -->

    <!-- End Add Blog Bootstrap MODAL -->


    <!--_-- ########### Start Delete partner MODAL ############---->

    <div id="homeDeleteBlog" class="modal fade">
        <div class="modal-dialog modal-dialog-top" role="document">
            <div class="modal-content tx-size-sm">
            <div class="modal-body tx-center pd-y-20 pd-x-20">
                <form action="{{ route('admin.delete_blog') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <i class="icon icon ion-ios-close-outline tx-60 tx-danger lh-1 mg-t-20 d-inline-block"></i>
                    <h4 class="tx-danger  tx-semibold mg-b-20 mt-2">Are you sure! you want to delete this?</h4>
                    <input type="hidden" name="blog_id" id="blog_id">
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

    <!--_-- ########### End Delete partner MODAL ############---->

@endsection
