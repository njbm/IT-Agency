@section('title')
Admin - All Subscription
@endsection

@extends('Backend.layouts.layouts')

@section('main_contain')

    <!-- ########## START: MAIN PANEL ########## -->
    <div class="br-mainpanel">
        <div class="br-pagebody">
          <div class="br-section-wrapper">
            <h6 class="br-section-label text-center">All Subscription</h6>
            <div class="mb-3 d-flex justify-content-end">
                <!-- Button trigger modal -->
                <a href="" class="btn btn-info tx-11 tx-uppercase pd-y-12 pd-x-25 tx-mont tx-medium" data-toggle="modal" data-target="#Addsubscription"> <i class="fa fa-plus ml-0 mr-1"></i>Add New </a>
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
                    <th class="wd-10p">Title</th>
                    <th class="wd-10p">Description</th>
                    <th class="wd-10p">Current Price</th>
                    <th class="wd-15p">Old Price</th>
                    <th class="wd-15p">Subscription Type</th>
                    <th class="wd-10p">Action</th>
                  </tr>
                </thead>
                <tbody>
                  @php
                    $i = 1;
                  @endphp
                  @if (count($subscriptions) > 0)
                    @foreach ($subscriptions as $subscription)
                      <tr>
                          <td>{{$i++}}</td>
                         
                          <td>{{$subscription->subs_title}}</td>
                          <td>{{$subscription->subs_desc}}</td>
                          <td>{!! $subscription->current_price !!}</td>
                          <td>{!! $subscription->old_price !!}</td>
                          <td>{!! $subscription->subs_type !!}</td>
                          <td>
                            <a class="btn text-info" href="{{ route('admin.edit_subscription', $subscription->id) }}"><i class="icon ion-compose tx-28"></i></a>
                            <button class="btn text-danger bg-white" value="{{$subscription->id}}" id="SubscriptionDelete"><i class="icon ion-trash-a tx-28"></i></button>
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

    <!-- Start Add Subscription Bootstrap MODAL -->

    <div id="Addsubscription" class="modal fade effect-scale">
        <div class="modal-dialog modal-lg modal-dialog-top" role="document">
            <div class="modal-content tx-size-sm">
            <div class="modal-header pd-x-20">
                <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">Add Subscription</h6>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <!----- Start Add Subscription Form ------->
            <form action="{{ route('admin.add_subscription') }} " method="post" enctype="multipart/form-data">
            @csrf
            <div class="modal-body pd-20">

                <!----- Start Add Subscription Form input ------->
                <div class="col-xl-12">
                    <div class="form-layout form-layout-4">

                        <div class="row mg-t-20">
                            <label class="col-sm-3 form-control-label">Title: <span class="tx-danger">*</span></label>
                            <div class="col-sm-9 mg-t-10 mg-sm-t-0">
                            <input type="text" name="subs_title" class="form-control" placeholder="Enter subscription title" required/>
                            </div>
                        </div>

                        <div class="row mg-t-20">
                            <label class="col-sm-3 form-control-label">Description: <span class="tx-danger">*</span></label>
                            <div class="col-sm-9 mg-t-10 mg-sm-t-0">
                                <textarea id="summernote" name="subs_desc" required></textarea>
                            </div>
                        </div>

                        <div class="row mg-t-20">
                            <label class="col-sm-3 form-control-label">Current Price: <span class="tx-danger">*</span></label>
                            <div class="col-sm-9 mg-t-10 mg-sm-t-0">
                            <input type="text" name="current_price" class="form-control" placeholder="Enter Current Price" required/>
                            </div>
                        </div>

                        <div class="row mg-t-20">
                            <label class="col-sm-3 form-control-label">Old Price: <span class="tx-danger">*</span></label>
                            <div class="col-sm-9 mg-t-10 mg-sm-t-0">
                            <input type="text" name="old_price" class="form-control" placeholder="Enter Old Price" required/>
                            </div>
                        </div>

                        <div class="row mg-t-20">
                            <label class="col-sm-3 form-control-label">Subscription Type: <span class="tx-danger">*</span></label>
                            <div class="col-sm-9 mg-t-10 mg-sm-t-0">
                            <input type="text" name="subs_type" class="form-control" placeholder="Enter Subscription Type" required/>
                            </div>
                        </div>


                    </div><!-- form-layout -->
                </div><!-- col-6 -->
                <!----- Start Add Subscription Form input ------->

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

    <!-- End Add Subscription Bootstrap MODAL -->


    <!--_-- ########### Start Delete partner MODAL ############---->

    <div id="DeleteSubscription" class="modal fade">
        <div class="modal-dialog modal-dialog-top" role="document">
            <div class="modal-content tx-size-sm">
            <div class="modal-body tx-center pd-y-20 pd-x-20">
                <form action="{{ route('admin.delete_subscription') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <i class="icon icon ion-ios-close-outline tx-60 tx-danger lh-1 mg-t-20 d-inline-block"></i>
                    <h4 class="tx-danger  tx-semibold mg-b-20 mt-2">Are you sure! you want to delete this?</h4>
                    <input type="hidden" name="subscription_id" id="subscription_id">
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
