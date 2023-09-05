@section('title')
Admin - all Technology
@endsection

@extends('Backend.layouts.layouts')

@section('main_contain')

    <!-- ########## START: MAIN PANEL ########## -->
<div class="br-mainpanel">
    {{-- <div class="br-pageheader">
      <nav class="breadcrumb pd-0 mg-0 tx-12">
        <a class="breadcrumb-item" href="{{route('admin.dashboard')}}">dashboard</a>
        <a class="breadcrumb-item" href="{{route('admin.all_category')}}">All Category</a>
      </nav>
    </div><!-- br-pageheader --> --}}

    <div class="br-pagebody">
      <div class="br-section-wrapper">
        <h6 class="br-section-label text-center"> All technology</h6>
        <div class="mb-3 d-flex justify-content-end">
            <!-- Button trigger modal -->
            <a href="" class="btn btn-info tx-11 tx-uppercase pd-y-12 pd-x-25 tx-mont tx-medium" data-toggle="modal" data-target="#homeAddtechnology"> <i class="fa fa-plus ml-0 mr-1"></i>Add New </a>
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
                <th class="wd-15p">Id</th>
                <th class="wd-25p">Category Name</th>
                <th class="wd-25p">Technology logo</th>
                <th class="wd-25p">Technology Link</th>
                <th class="wd-20p">Status</th>
                <th class="wd-15p">Action</th>
              </tr>
            </thead>
            <tbody>
            @php
                $i = 1;
            @endphp
              @if (count($technology) > 0)
                @foreach ($technology as $technology)
                  <tr>
                      <td>{{ $i++ }}</td>
                      <td>{{ $technology->name }}</td>
                      
                      <td>

                        <img src="{{asset('backend/home/Technology/'. $technology->logo)}}" alt="" width="60px" height="40px" srcset="">

                      </td>
                      <td>{{ $technology->link }}</td>
                      <td>

                        @if ($technology->status == 1)
                            Active
                          @else
                            Inactive
                        @endif

                      </td>
                      <td>
                        <a class="btn text-info" href="{{ route('admin.edit_technology', $technology->id) }}"><i class="icon ion-compose tx-28"></i></a>
                        <button class="btn text-danger bg-white"  id="homeTechnologyDelete" value="{{$technology->id}}"><i class="icon ion-trash-a tx-28"></i></button>
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

    <div id="homeAddtechnology" class="modal fade effect-scale">
    <div class="modal-dialog modal-lg modal-dialog-top" role="document">
        <div class="modal-content tx-size-sm">
        <div class="modal-header pd-x-20">
            <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">Add technology</h6>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <!----- Start Add Category Form ------->
        <form action="{{ route('admin.add_technology') }}" method="post" enctype="multipart/form-data">
        @csrf

        <div class="modal-body pd-20">

            <!----- Start Add Category Form input ------->
            <div class="col-xl-12">
                <div class="form-layout form-layout-4">
                    <div class="row">
                        <label class="col-sm-3 form-control-label">Category Name: </label>
                        <div class="col-sm-9 mg-t-10 mg-sm-t-0">
                        <input type="text" name="name" class="form-control" placeholder="Enter technology Name">
                        </div>
                    </div><!-- row -->
                    <div class="row">
                        <label class="col-sm-3 form-control-label">Technology Link: </label>
                        <div class="col-sm-9 mg-t-10 mg-sm-t-0">
                        <input type="text" name="link" class="form-control" placeholder="Enter technology Link">
                        </div>
                    </div><!-- row -->
                    <div class="row mt-3">
                        <label class="col-sm-3 form-control-label">Technology Logo: <span class="tx-danger">*</span></label>
                        <div class="col-sm-9 mg-t-10 mg-sm-t-0">
                            <input type="file" name="logo" class="form-control">
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

     <div id="homeDeleteTechnology" class="modal fade">
      <div class="modal-dialog modal-dialog-top" role="document">
        <div class="modal-content tx-size-sm">
          <div class="modal-body tx-center pd-y-20 pd-x-20">
              <form action="{{ route('admin.delete_technology') }}" method="post" enctype="multipart/form-data">
                  @csrf
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                  </button>
                  <i class="icon icon ion-ios-close-outline tx-60 tx-danger lh-1 mg-t-20 d-inline-block"></i>
                  <h4 class="tx-danger  tx-semibold mg-b-20 mt-2">Are you sure! you want to delete this?</h4>
                  <input type="hidden" name="technology_id" id="technology_id">
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
