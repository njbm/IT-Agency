@extends('Backend.layouts.layouts')
@section('main_contain')
    <!-- ########## START: MAIN PANEL ########## -->
    <div class="br-mainpanel">

      <div class="br-pagebody">
        <div class="br-section-wrapper">
          <h6 class="br-section-label text-center">All Teacher</h6>
          <p class="br-section-text"></p>

          <div class="table-wrapper">
            <table id="datatable1" class="table display responsive nowrap">
              <thead>
                <tr>
                  <th class="wd-15p">Id</th>
                  <th class="wd-15p">Name</th>
                  <th class="wd-15p">Email</th>
                  <th class="wd-20p">Role</th>
                  <th class="wd-15p">action</th>
                </tr>
              </thead>
              <tbody>
                @php
                    $i = 1;
                @endphp
                @if (count($users) > 0)
                  @foreach ($users as $user)
                    <tr>
                        <td>{{ $i++ }}</td>
                        <td>{{$user->name}}</td>
                        <td>{{$user->email}}</td>
                        <td>
                            @if($user->type == 2)
                            Teacher
                            @endif
                        </td>
                        <td>
                            <a class="btn text-info" href="{{ route('admin.edit_user', $user->id) }}"><i class="icon ion-compose tx-28"></i></a>
                            <button class="btn text-danger bg-white" value="{{$user->id}}" id="userdelete"><i class="icon ion-trash-a tx-28"></i></button>
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

    @include('Backend.pages.UserRole.Delete_User');

@endsection
