@extends('Backend.layouts.layouts')
@section('title')
    Mail Offers
@endsection
@section('main_contain')
    <!-- ########## START: MAIN PANEL ########## -->
    <div class="br-mainpanel">
        <div class="br-pagebody">
            <div class="br-section-wrapper">
                <h6 class="br-section-label text-center"> Manage All Offer Mail </h6>
                <div class="text-right">
                    <a href="{{route('admin.crm_communication')}}" class="btn btn-sm btn-info "><i class="fa fa-angle-left"></i></a>
                </div>
                <br>
                <div class="table-wrapper">
                    <table id="datatable1" class="table display responsive nowrap">
                        <thead>
                        <tr>
                            <th scope="wd-25p">SN</th>
                            <th scope="wd-25p">Mail Subject</th>
                            <th scope="wd-25p">Create Date</th>
                            <th scope="wd-25p">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @php
                            $i = 1;
                        @endphp
                        @if (count($offers) > 0)
                        @foreach ($offers as $offer)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$offer->mail_subject}}</td>
                            <td>{{$offer->created_at}}</td>
                            <td>
                                <button class="btn text-info bg-white"  data-toggle="modal" data-target="#detailsModal{{$offer->id }}"><i class="icon ion-eye tx-28"></i></button>
                                <button class="btn text-danger bg-white"  data-toggle="modal" data-target="#deleteModal{{$offer->id }}"><i class="icon ion-trash-a tx-28"></i></button>
                            </td>
                        </tr>

                        <!--_-- ########### Start Delete Size MODAL ############---->

                        <div id="deleteModal{{$offer->id}}" class="modal fade">
                            <div class="modal-dialog modal-dialog-top" role="document">
                                <div class="modal-content tx-size-sm">
                                    <div class="modal-body tx-center pd-y-20 pd-x-20">
                                        <form >
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                            <i class="icon icon ion-ios-close-outline tx-60 tx-danger lh-1 mg-t-20 d-inline-block"></i>
                                            <h4 class="tx-danger  tx-semibold mg-b-20 mt-2">Are you sure! you want to delete this?</h4>

                                            <a href="{{ route('admin.crm_delete_offer', $offer->id) }}" type="submit" class="btn btn-danger mr-2 text-white tx-11 tx-uppercase pd-y-12 pd-x-25 tx-mont tx-medium mg-b-20">
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

                        <!--_-- ########### End Delete Size MODAL ############---->


                        <!--_-- ########### Start Detail MODAL ############---->
                        <div id="detailsModal{{$offer->id }}" class="modal fade effect-scale">
                            <div class="modal-dialog modal-lg modal-dialog-top" role="document">
                                <div class="modal-content tx-size-sm">
                                    <div class="modal-header pd-x-20">
                                        <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">Mail Details</h6>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body pd-20">
                                        <div class="col-xl-12">
                                            <div class="form-layout form-layout-4">
                                                <div class="row mb-2">
                                                    <label class="col-sm-3">Mail Subject: </label>
                                                    <div class="col-sm-9 mg-t-10 mg-sm-t-0">
                                                        <p>{{$offer->mail_subject}}</p>
                                                    </div>
                                                </div>
                                                <!-- row -->
                                                <div class="row mb-2">
                                                    <label class="col-sm-3">Mail Description: </label>
                                                    <div class="col-sm-9 mg-t-10 mg-sm-t-0">
                                                        <p class="text-justify">{{$offer->mail_description}}</p>
                                                    </div>
                                                </div>
                                                <!-- row -->
                                            </div>
                                        </div>
                                        <!-- col-6 -->
                                    </div>
                                    <!-- modal-body -->
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary tx-size-xs" data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                            <!-- modal-dialog -->
                        </div>
                        <!-- modal -->
                        <!--_-- ########### End Detail MODAL ############---->
                        @endforeach
                        @endif
                        </tbody>
                    </table>
                </div>
                <!-- table-wrapper -->
            </div>
            <!-- br-section-wrapper -->
        </div>
        <!-- br-pagebody -->
        <footer class="br-footer">
            <div class="footer-left">
                <div class="mg-b-2">Copyright &copy; <?php echo date('Y');?> NavieaSoft. All Rights Reserved. </div>
                <div>Attentively and carefully made by NavieaSoft.</div>
            </div>
        </footer>
    </div>
    <!-- br-mainpanel -->

@endsection
