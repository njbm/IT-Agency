@extends('Backend.layouts.layouts')
@section('title')
    CRM Communication
@endsection
@section('main_contain')

    <!-- ########## START: MAIN PANEL ########## -->
    <div class="br-mainpanel">
        <div class="br-pagebody">
            <div class="br-section-wrapper">
                <h6 class="br-section-label text-center"> User Information </h6>
                <div class="mb-3 d-flex justify-content-end">
                    <!-- Button trigger modal -->
                    <a href="{{route('admin.crm_manage_offer')}}" class="btn btn-info tx-11 tx-uppercase pd-y-12 pd-x-25 tx-mont tx-medium" ><i class="fa fa-history ml-0 mr-1"></i>Mail History</a>
                </div>
                <div class="table-wrapper">
                    <table id="datatable1" class="table display responsive nowrap">
                        <thead>
                        <tr>
                            <th class="active">
                                <input type="checkbox" class="select-all checkbox" name="select-all" /> Select All
                            </th>
                            <th scope="wd-25p">SN</th>
                            <th scope="wd-25p">User Name</th>
                            <th scope="wd-25p">Address</th>
                            <th scope="wd-25p">Email</th>
                            <th scope="wd-25p">Phone</th>
                            <th scope="wd-25p">Sallery</th>
                            <th class="text-center" scope="wd-25p">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @php
                            $i = 1;
                        @endphp
{{--                         @if (count($users) > 0)--}}
{{--                         @foreach ($users as $user)--}}
                        <tr>
                            <td class="active">
                                <input type="checkbox" class="select-item checkbox" name="select-item" value="1000" />
                            </td>
                            <td>{{ $i++ }}</td>
                            <td>Niaz Ahmed Nayeem</td>
                            <td>Mohammadpur</td>
                            <td>niaz@gmail.com</td>
                            <td>01966509310</td>
                            <td>30000</td>
                            <td>
                                <a href="" class="btn text-info" data-toggle="modal" data-target="#SendMail">
                                    <i class="icon ion-android-mail tx-28"></i>
                                </a>
                                <a class="btn text-info" href="tel:+8801966509310">
                                    <i class="icon ion-android-call tx-28"></i>
                                </a>
                                <a href="" class="btn text-info" data-toggle="modal" data-target="#ViewDetail">
                                    <i class="icon ion-eye tx-28"></i>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td class="active">
                                <input type="checkbox" class="select-item checkbox" name="select-item" value="1001" />
                            </td>
                            <td>{{ $i++ }}</td>
                            <td>Rifat</td>
                            <td>Mirpur-10</td>
                            <td>rifat@gmail.com</td>
                            <td>01960000000</td>
                            <td>40000</td>
                            <td>
                                <a href="" class="btn text-info" data-toggle="modal" data-target="#SendMail">
                                    <i class="icon ion-android-mail tx-28"></i>
                                </a>
                                <a class="btn text-info" href="tel:+8801966509310">
                                    <i class="icon ion-android-call tx-28"></i>
                                </a>
                                <a href="" class="btn text-info" data-toggle="modal" data-target="#ViewDetail">
                                    <i class="icon ion-eye tx-28"></i>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td class="active">
                                <input type="checkbox" class="select-item checkbox" name="select-item" value="1002" />
                            </td>
                            <td>{{ $i++ }}</td>
                            <td>Praggo</td>
                            <td>Dhanmondi</td>
                            <td>praggo@gmail.com</td>
                            <td>01855555555</td>
                            <td>50000</td>
                            <td>
                                <a href="" class="btn text-info" data-toggle="modal" data-target="#SendMail">
                                    <i class="icon ion-android-mail tx-28"></i>
                                </a>
                                <a class="btn text-info" href="tel:+8801966509310">
                                    <i class="icon ion-android-call tx-28"></i>
                                </a>
                                <a href="" class="btn text-info" data-toggle="modal" data-target="#ViewDetail">
                                    <i class="icon ion-eye tx-28"></i>
                                </a>
                            </td>
                        </tr>

{{--                         @endforeach--}}
{{--                         @endif--}}
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

    <!---- ########### Start Mail MODAL ############---->

    <div id="SendMail" class="modal fade effect-scale">
        <div class="modal-dialog modal-lg modal-dialog-top" role="document">
            <div class="modal-content tx-size-sm">
                <div class="modal-header pd-x-20">
                    <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">Sand Mail Form</h6>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <!----- Start Mail Form ------->
                <form action="{{route('admin.crm_create_offer')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body pd-20">
                        <!----- Start Mail Form input ------->
                        <div class="col-xl-12">
                            <div class="form-layout form-layout-4">
                                <!-- row -->
                                <div class="row mb-2">
                                    <label class="col-sm-3 form-control-label">Mail Subject: <span class="tx-danger">*</span>
                                    </label>
                                    <div class="col-sm-9 mg-t-10 mg-sm-t-0">
                                        <input type="text" name="mail_subject" class="form-control" placeholder="Enter Mail Subject" required>
                                    </div>
                                </div>
                                <!-- row -->
                                <div class="row mb-2">
                                    <label class="col-sm-3 form-control-label">Mail Description: <span class="tx-danger">*</span>
                                    </label>
                                    <div class="col-sm-9 mg-t-10 mg-sm-t-0">
                                        <textarea class="form-control" rows="5" name="mail_description" placeholder="Enter Mail Description"></textarea>
{{--                                        id="summernote"--}}
                                    </div>
                                </div>
                                <!-- row -->
                            </div>
                            <!-- form-layout -->
                        </div>
                        <!-- col-6 -->
                    </div>
                    <!-- modal-body -->
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-info tx-size-xs">Send Mail</button>
                        <button type="button" class="btn btn-secondary tx-size-xs" data-dismiss="modal">Close</button>
                    </div>
                </form>
                <!----- End Mail Form ------->
            </div>
        </div>
        <!-- modal-dialog -->
    </div>
    <!-- modal -->
    <!--_-- ########### End Mail MODAL ############---->



    <!--_-- ########### Start Detail MODAL ############---->
    <div id="ViewDetail" class="modal fade effect-scale">
        <div class="modal-dialog modal-lg modal-dialog-top" role="document">
            <div class="modal-content tx-size-sm">
                <div class="modal-header pd-x-20">
                    <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">User Details</h6>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body pd-20">
                    <div class="col-xl-12">
                        <div class="form-layout form-layout-4">
                            <div class="row mb-2">
                                <label class="col-sm-3">Name: </label>
                                <div class="col-sm-9 mg-t-10 mg-sm-t-0">
                                    <p>Niaz Ahmed NAyeem</p>
                                </div>
                            </div>
                            <!-- row -->
                            <div class="row mb-2">
                                <label class="col-sm-3">Address: </label>
                                <div class="col-sm-9 mg-t-10 mg-sm-t-0">
                                    <p>Mohammadpur Dhaka-1207</p>
                                </div>
                            </div>
                            <!-- row -->
                            <div class="row mb-2">
                                <label class="col-sm-3">Email: </label>
                                <div class="col-sm-9 mg-t-10 mg-sm-t-0">
                                    <p>niaz@gmail.com</p>
                                </div>
                            </div>
                            <!-- row -->
                            <div class="row mb-2">
                                <label class="col-sm-3">Phone: </label>
                                <div class="col-sm-9 mg-t-10 mg-sm-t-0">
                                    <p>01966509310</p>
                                </div>
                            </div>
                            <!-- row -->
                            <div class="row mb-2">
                                <label class="col-sm-3">Salary: </label>
                                <div class="col-sm-9 mg-t-10 mg-sm-t-0">
                                    <p>30000</p>
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

@endsection

<script src="//cdn.bootcss.com/jquery/2.2.1/jquery.min.js"></script>
<script src="//cdn.bootcss.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script>
    $(function(){

        //button select all or cancel
        $("#select-all").click(function () {
            var all = $("input.select-all")[0];
            all.checked = !all.checked
            var checked = all.checked;
            $("input.select-item").each(function (index,item) {
                item.checked = checked;
            });
        });

        //button select invert
        $("#select-invert").click(function () {
            $("input.select-item").each(function (index,item) {
                item.checked = !item.checked;
            });
            checkSelected();
        });

        //button get selected info
        $("#selected").click(function () {
            var items=[];
            $("input.select-item:checked:checked").each(function (index,item) {
                items[index] = item.value;
            });
            if (items.length < 1) {
                alert("no selected items!!!");
            }else {
                var values = items.join(',');
                console.log(values);
                var html = $("<div></div>");
                html.html("selected:"+values);
                html.appendTo("body");
            }
        });

        //column checkbox select all or cancel
        $("input.select-all").click(function () {
            var checked = this.checked;
            $("input.select-item").each(function (index,item) {
                item.checked = checked;
            });
        });

        //check selected items
        $("input.select-item").click(function () {
            var checked = this.checked;
            console.log(checked);
            checkSelected();
        });

        //check is all selected
        function checkSelected() {
            var all = $("input.select-all")[0];
            var total = $("input.select-item").length;
            var len = $("input.select-item:checked:checked").length;
            console.log("total:"+total);
            console.log("len:"+len);
            all.checked = len===total;
        }
    });
</script>
