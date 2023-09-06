@section('title')
Admin - all slider
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
            <h6 class="br-section-label text-center"> All Langing Page</h6>
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
                    <th class="wd-25p">Slider Top Title</th>
                    <th class="wd-25p">Slider Sort Title</th>
                    <th class="wd-25p">Two Section Image</th>
                    <th class="wd-25p">Action</th>
                  </tr>
                </thead>
                <tbody>
                @php
                    $i = 1;
                @endphp
                  @if (count($langing_pages) > 0)
                    @foreach ($langing_pages as $langing_page)
                      <tr>
                          <td>{{ $i++ }}</td>
                          <td>{{ $langing_page->slider_top_title }}</td>
                          <td>{{ $langing_page->slider_sort_title }}</td>
                          <td>

                            <img src="{{asset('backend/home/langingpage/image/'. $langing_page->s2_back_img)}}" alt="" width="60px" height="40px" srcset="">

                          </td>
                          <td>
                            <a class="btn text-info" href="{{ route('admin.edit_langing_page', $langing_page->id) }}"><i class="icon ion-compose tx-28"></i></a>
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






@endsection
