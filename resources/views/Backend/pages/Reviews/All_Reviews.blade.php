@extends('Backend.layouts.layouts')
@section('main_contain')
    <!-- ########## START: MAIN PANEL ########## -->
    <div class="br-mainpanel">

      <div class="br-pagebody">
        <div class="br-section-wrapper">
          <h6 class="br-section-label mb-3 text-center">All Students Course Review List</h6>

          <div class="table-wrapper">
            <table id="datatable1" class="table display responsive nowrap">
              <thead>
                <tr>
                  <th class="wd-15p">Id</th>
                  <th class="wd-15p">Name</th>
                  <th class="wd-15p">Email</th>
                  <th class="wd-20p">Course Name</th>
                  <th class="wd-20p">Rating</th>
                </tr>
              </thead>
              <tbody>

                <tr>
                    <th scope="row">1</th>
                    <td>Kowser</td>
                    <td>kowser@gmail.com</td>
                    <td>WEB DEVELOPMENT</td>
                    <td>4.5</td>
                  </tr>
                  <tr>
                    <th scope="row">2</th>
                    <td>Rakib</td>
                    <td>rakib@gmail.com</td>
                    <td>APP DEVELOPMENT</td>
                    <td>3.5</td>
                  </tr>

                  <tr>
                    <th scope="row">3</th>
                    <td>Opi</td>
                    <td>opi@gmail.com</td>
                    <td>Cyber Security</td>
                    <td>4.7</td>
                  </tr>

                 

              </tbody>
            </table>
          </div><!-- table-wrapper -->


        </div><!-- br-section-wrapper -->
      </div><!-- br-pagebody -->
    
    </div><!-- br-mainpanel -->
    <!-- ########## END: MAIN PANEL ########## -->



    <!---- Delete User Model  ---->

    @include('Backend.pages.UserRole.Delete_User')

@endsection
