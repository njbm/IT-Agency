@section('title')
Admin - all child category
@endsection

@extends('Backend.layouts.layouts')

@section('main_contain')

    <!-- ########## START: MAIN PANEL ########## -->
    <div class="br-mainpanel">

        <div class="br-pagebody">
          <div class="br-section-wrapper">
            <h6 class="br-section-label text-center">All Register ChildCategories</h6>
            <div class="mb-3 d-flex justify-content-end">
                <a href="" class="btn btn-info tx-11 tx-uppercase pd-y-12 pd-x-25 tx-mont tx-medium" data-toggle="modal" data-target="#homeAddChildcategory"> <i class="fa fa-plus ml-0 mr-1"></i>Add New </a>
            </div>

            <div class="table-wrapper">
              <table id="datatable1" class="table display responsive nowrap">
                <thead>
                  <tr>
                    <th class="wd-10p">Id</th>
                    <th class="wd-25p">Sub Category</th>
                    <th class="wd-25p">Child Category Name</th>
                    <th class="wd-15p">Status</th>
                    <th class="wd-25p">Action</th>
                  </tr>
                </thead>
                <tbody>
                  @if (count($child_category) > 0)
                    @foreach ($child_category as $child_cat)
                      <tr>
                          <td>1</td>
                          <td>{{$child_cat->sub_cat_name}}</td>
                          <td>{{$child_cat->child_cat_name}}</td>
                          <td>

                            @if ($child_cat->child_cat_status == 1)
                                Active
                              @else
                                Inactive
                            @endif

                          </td>

                          <td>
                            <a class="btn text-info" href="{{ route('admin.edit_child_category', $child_cat->id) }}"><i class="icon ion-compose tx-28"></i></a>
                            <button class="btn text-danger bg-white" value="{{$child_cat->id}}" id="homeChildCatdelete"><i class="icon ion-trash-a tx-28"></i></button>
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


    <!--############ Start Add child Category Model ########### --->

    <div id="homeAddChildcategory" class="modal fade effect-scale">
        <div class="modal-dialog modal-lg modal-dialog-top mt-4" role="document">
            <div class="modal-content tx-size-sm">
            <div class="modal-header pd-x-20">
                <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">Add SubCategory</h6>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <!----- Start Add Category Form ------->
            <form action="{{route('admin.add_child_category')}}" method="post">
            @csrf

            <div class="modal-body pd-20">

                <!----- Start Add Category Form input ------->
                <div class="col-xl-12">
                    <div class="form-layout form-layout-4">

                        <div class="row mb-4 mt-4">
                            <label class="col-sm-3 form-control-label">Sub Category: <span class="tx-danger">*</span></label>
                            <div class="col-sm-9 mg-t-10 mg-sm-t-0">

                                <select class="form-control custom-select" name="sub_cat_id" required>

                                    @foreach ($sub_category as $sub_cat)
                                       <option value="{{$sub_cat->id}}">{{$sub_cat->sub_cat_name}}</option>
                                    @endforeach

                                </select>
                            </div>
                        </div><!-- row -->

                        <div class="row mb-4">
                            <label class="col-sm-3 form-control-label"> child Category Name: <span class="tx-danger">*</span></label>
                            <div class="col-sm-9 mg-t-10 mg-sm-t-0">
                            <input type="text" name="child_cat_name" class="form-control" placeholder="Enter child Category Name" required>
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

    <!--############ end Add child Category Model ########### --->


    <!--_-- ########### Start Delete child Category MODAL ############---->

    <div id="homeDeleteChildCategory" class="modal fade">
        <div class="modal-dialog modal-dialog-top" role="document">
            <div class="modal-content tx-size-sm">
            <div class="modal-body tx-center pd-y-20 pd-x-20">
                <form action="{{ route('admin.delete_child_category') }}" method="post">
                    @csrf
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <i class="icon icon ion-ios-close-outline tx-60 tx-danger lh-1 mg-t-20 d-inline-block"></i>
                    <h4 class="tx-danger  tx-semibold mg-b-20 mt-2">Are you sure! you want to delete this?</h4>
                    <input type="hidden" name="child_category_id" id="child_category_id">
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

    <!--_-- ########### End Delete child Category MODAL ############---->

@endsection
