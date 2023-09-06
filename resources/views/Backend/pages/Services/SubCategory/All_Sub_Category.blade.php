@section('title')
Admin - All Service subcategory
@endsection

@extends('Backend.layouts.layouts')

@section('main_contain')

    <!-- ########## START: MAIN PANEL ########## -->
    <div class="br-mainpanel">

        <div class="br-pagebody">
          <div class="br-section-wrapper">
            <h6 class="br-section-label text-center">All Service SubCategory</h6>

            <div class="mb-3 d-flex justify-content-end">
                <a href="" class="btn btn-info tx-11 tx-uppercase pd-y-12 pd-x-25 tx-mont tx-medium" data-toggle="modal" data-target="#serviceAddsubCategory"> <i class="fa fa-plus ml-0 mr-1"></i>Add New </a>
            </div>

            <div class="table-wrapper">
              <table id="datatable1" class="table display responsive nowrap">
                <thead>
                  <tr>
                    <th class="wd-15p">Id</th>
                    <th class="wd-25p">Category Name</th>
                    <th class="wd-25p">Sub Category Name</th>
                    <th class="wd-25p">Sub Category Title</th>
                    <th class="wd-25p">Sub Category Image</th>
                    <th class="wd-155p">status</th>
                    <th class="wd-20p">Action</th>
                  </tr>
                </thead>
                <tbody>
                  @php
                    $i = 1;
                  @endphp

                  @if (count($sub_cat) > 0)
                    @foreach ($sub_cat as $sub_cat)
                      <tr>
                          <td>{{$i++}}</td>
                          <td>{{$sub_cat->cat_name}}</td>
                          <td>{{$sub_cat->sub_cat_name}}</td>
                          <td>{{$sub_cat->sub_cat_title}}</td>
                          <td>
                            <img src="{{asset('backend/services/images/'. $sub_cat->sub_cat_image)}}" alt="" width="60px" height="40px" srcset="">
                          </td>
                          <td>
                            @if ($sub_cat->sub_cat_status == 1)
                                Active
                            @else
                                Inactive
                            @endif
                          </td>
                          <td>
                            <a class="btn text-info mr-2" href="{{ route('service.edit_subcategory', $sub_cat->id)}}"><i class="icon ion-compose tx-28"></i></a>
                            <button class="btn text-danger bg-white" value="{{$sub_cat->id}}" id="serviceSubCatdelete" ><i class="icon ion-trash-a tx-28"></i></button>
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


    <!--############ Start Add Sub Category Model ########### --->

    <div id="serviceAddsubCategory" class="modal fade effect-scale">
    <div class="modal-dialog modal-lg modal-dialog-top mt-4" role="document">
        <div class="modal-content tx-size-sm">
        <div class="modal-header pd-x-20">
            <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">Add SubCategory</h6>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <!----- Start Add Category Form ------->
        <form action="{{route('service.add_subcategory')}}" method="post" enctype="multipart/form-data">
        @csrf

        <div class="modal-body pd-20">

            <!----- Start Add Category Form input ------->
            <div class="col-xl-12">
                <div class="form-layout form-layout-4">

                    <div class="row mb-4 mt-4">
                        <label class="col-sm-3 form-control-label">Category: <span class="tx-danger">*</span></label>
                        <div class="col-sm-9 mg-t-10 mg-sm-t-0">

                            <select class="form-control custom-select" name="cat_id" required>

                                @foreach ($category as $cat)
                                   <option value="{{$cat->id}}">{{$cat->cat_name}}</option>
                                @endforeach

                            </select>
                        </div>
                    </div><!-- row -->

                    <div class="row mb-4">
                        <label class="col-sm-3 form-control-label">Sub Category Name: <span class="tx-danger">*</span></label>
                        <div class="col-sm-9 mg-t-10 mg-sm-t-0">
                        <input type="text" name="sub_cat_name" class="form-control" placeholder="Enter Sub Category Name" required>
                        </div>
                    </div><!-- row -->

                    <div class="row mb-4">
                        <label class="col-sm-3 form-control-label">Sub Category Title: <span class="tx-danger">*</span></label>
                        <div class="col-sm-9 mg-t-10 mg-sm-t-0">
                        <input type="text" name="sub_cat_title" class="form-control" placeholder="Enter Sub Category Title" required>
                        </div>
                    </div><!-- row -->

                    <div class="row mb-4">
                        <label class="col-sm-3 form-control-label">Sub Category Image: <span class="tx-danger">*</span></label>
                        <div class="col-sm-9 mg-t-10 mg-sm-t-0">
                            <input type="file" name="sub_cat_image" class="form-control" required>
                        </div>
                    </div><!-- row -->

                </div><!-- form-layout -->
            </div><!-- col-6 -->
            <!----- Start Add Category Form input ------->

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

    <!--############ Start Add Sub Category Model ########### --->

    <!--_-- ########### Start Delete Category MODAL ############---->

    <div id="serviceDeleteSubCategory" class="modal fade">
        <div class="modal-dialog modal-dialog-top" role="document">
          <div class="modal-content tx-size-sm">
            <div class="modal-body tx-center pd-y-20 pd-x-20">
                <form action="{{ route('service.delete_subcategory') }}" method="post">
                    @csrf
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <i class="icon icon ion-ios-close-outline tx-60 tx-danger lh-1 mg-t-20 d-inline-block"></i>
                    <h4 class="tx-danger  tx-semibold mg-b-20 mt-2">Are you sure! you want to delete this?</h4>
                    <input type="hidden" name="subcategory_id" id="subcategory_id">
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
