@section('title')
Admin - all category
@endsection

@extends('Backend.layouts.layouts')

@section('main_contain')

    <!-- ########## START: MAIN PANEL ########## -->
    <div class="br-mainpanel">

        <div class="br-pagebody">
          <div class="br-section-wrapper">
            <h6 class="br-section-label text-center"> Category</h6>
            <div class="mb-3 d-flex justify-content-end">
                <!-- Button trigger modal -->
                <a href="" class="btn btn-info tx-11 tx-uppercase pd-y-12 pd-x-25 tx-mont tx-medium" data-toggle="modal" data-target="#serviceAddcategory"> <i class="fa fa-plus ml-0 mr-1"></i>Add New </a>
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
                    <th class="wd-25p">Id</th>
                    <th class="wd-25p">Category Name</th>
                    <th class="wd-25p">Category Icon</th>
                    <th class="wd-25p">Category Image</th>
                    <th class="wd-25p">Status</th>
                    <th class="wd-25p">Action</th>
                  </tr>
                </thead>
                <tbody>
                    @php
                        $i = 1;
                    @endphp
                  @if (count($category) > 0)
                    @foreach ($category as $cat)
                      <tr>
                          <td>{{ $i++ }}</td>
                          <td>{{ $cat->cat_name }}</td>
                          <td>

                            <img src="{{asset('backend/services/images/'. $cat->icon)}}" alt="" width="60px" height="40px" srcset="">

                          </td>
                          <td>
                            <img src="{{asset('backend/services/images/'. $cat->image)}}" alt="" width="60px" height="40px" srcset="">

                          </td>

                          <td>

                            @if ($cat->status == 1)
                                Active
                              @else
                                Inactive
                            @endif

                          </td>
                          <td>
                            <a class="btn text-info" href="{{ route('service.edit_category', $cat->id) }}"><i class="icon ion-compose tx-28"></i></a>
                            <button class="btn text-danger bg-white" value="{{$cat->id}}" id="serviceCatdelete"><i class="icon ion-trash-a tx-28"></i></button>
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

    <!--_-- ########### Start Add Category MODAL ############---->

    <div id="serviceAddcategory" class="modal fade effect-scale">
    <div class="modal-dialog modal-lg modal-dialog-top" role="document">
        <div class="modal-content tx-size-sm">
        <div class="modal-header pd-x-20">
            <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">Add Category</h6>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        @if(count($errors) > 0)
                @foreach($errors->all() as $error)
                    <div class="alert alert-danger">{{ $error }}</div>
                @endforeach
            @endif
        <!----- Start Add Category Form ------->
        <form action="{{route('service.add_category') }}" method="post"  enctype="multipart/form-data">
        @csrf

        <div class="modal-body pd-20">

            <!----- Start Add Category Form input ------->
            <div class="col-xl-12">
                <div class="form-layout form-layout-4">
                    <div class="row">
                        <label class="col-sm-3 form-control-label">Category Name: <span class="tx-danger">*</span></label>
                        <div class="col-sm-9 mg-t-10 mg-sm-t-0">
                        <input type="text" name="cat_name" class="form-control" placeholder="Enter Category Name" required>
                        </div>
                    </div><!-- row -->

                    <div class="row mt-3">
                        <label class="col-sm-3 form-control-label">Category Icon: <span class="tx-danger">*</span></label>
                        <div class="col-sm-9 mg-t-10 mg-sm-t-0">
                            <input type="file" name="icon" class="form-control" required>
                        </div>
                    </div><!-- row -->

                    
                    <div class="row mt-3">
                        <label class="col-sm-3 form-control-label">Category Image: <span class="tx-danger">*</span></label>
                        <div class="col-sm-9 mg-t-10 mg-sm-t-0">
                            <input type="file" name="image" class="form-control" required>
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

    <!--_-- ########### End Add Category MODAL ############---->


    <!--_-- ########### Start Delete Category MODAL ############---->

    <div id="serviceDeleteCategory" class="modal fade">
        <div class="modal-dialog modal-dialog-top" role="document">
          <div class="modal-content tx-size-sm">
            <div class="modal-body tx-center pd-y-20 pd-x-20">
                <form action="{{ route('service.delete_category') }}" method="post">
                    @csrf
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <i class="icon icon ion-ios-close-outline tx-60 tx-danger lh-1 mg-t-20 d-inline-block"></i>
                    <h4 class="tx-danger  tx-semibold mg-b-20 mt-2">Are you sure! you want to delete this?</h4>
                    <input type="hidden" name="category_id" id="category_id">
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
