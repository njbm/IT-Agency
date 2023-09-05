
@php
$route = Route::currentRouteName()
@endphp
<div class="br-logo"><a href="{{ route('admin.dashboard') }}">H <i>Management</i></a></div>
<div class="br-sideleft sideleft-scrollbar">
  <label class="sidebar-label pd-x-10 mg-t-20 op-3">Navigation</label>
  <ul class="br-sideleft-menu">
    <li class="br-menu-item">
      <a href="" class="br-menu-link">
        <i class="menu-item-icon fa fa-tasks tx-24"></i>
        <span class="menu-item-label">Dashboard</span>
      </a><!-- br-menu-link -->
    </li><!-- br-menu-item -->
    <li class="br-menu-item">
      <a href="#" class="br-menu-link with-sub {{($prefix=='admin/home')?'show-sub':''}}">
      <i class="menu-item-icon ion-ios-home-outline tx-24"></i>
      <span class="menu-item-label">Home
      </span>
      </a><!-- br-menu-link -->
      <ul class="br-menu-sub">
      <li class="sub-item"><a href="{{ route('admin.all_category') }}" class="sub-link {{ ($route == 'admin.all_category' || $route == 'admin.add_category' || $route == 'admin.edit_category' || $route == 'admin.update_category')? 'active':'' }}">Category</a></li>
      <li class="sub-item"><a href="{{ route('admin.all_subcategory') }}" class="sub-link {{ ($route == 'admin.all_subcategory' || $route == 'admin.add_subcategory' || $route == 'admin.edit_subcategory' || $route == 'admin.update_subcategory')? 'active':'' }}">Subcategory</a></li>
      <li class="sub-item"><a href="{{ route('admin.all_child_category') }}" class="sub-link {{ ($route == 'admin.all_child_category' || $route == 'admin.add_child_category' || $route == 'admin.edit_child_category' || $route == 'admin.update_child_category')? 'active':'' }}">Child Category </a></li>

      <li class="sub-item"><a href="{{ route('admin.all_blog') }}" class="sub-link {{ ($route == 'admin.all_blog' || $route == 'admin.add_blog' || $route == 'admin.edit_blog' || $route == 'admin.update_blog')? 'active':'' }}">Blog </a></li>
      
      <li class="sub-item"><a href="{{ route('admin.all_banner') }}" class="sub-link {{ ($route == 'admin.all_banner' || $route == 'admin.add_banner' || $route == 'admin.edit_banner' || $route == 'admin.update_banner')? 'active':'' }}"> Banner </a></li>

      <li class="sub-item"><a href="{{ route('admin.all_slider') }}" class="sub-link {{ ($route == 'admin.all_slider' || $route == 'admin.add_slider' || $route == 'admin.edit_slider' || $route == 'admin.update_slider')? 'active':'' }}"> Slider </a></li>
      <li class="sub-item"><a href="{{ route('admin.all_partner') }}" class="sub-link {{ ($route == 'admin.all_partner' || $route == 'admin.add_partner' || $route == 'admin.edit_partner' || $route == 'admin.update_partner')? 'active':'' }}"> Partner </a></li>
      <li class="sub-item"><a href="{{ route('admin.all_brand') }}" class="sub-link {{ ($route == 'admin.all_brand' || $route == 'admin.add_brand' || $route == 'admin.edit_brand' || $route == 'admin.update_brand')? 'active':'' }}">Brand</a></li>
      <li class="sub-item"><a href="{{ route('admin.all_client') }}" class="sub-link {{ ($route == 'admin.all_client' || $route == 'admin.add_client' || $route == 'admin.edit_client' || $route == 'admin.update_client')? 'active':'' }}">Client </a></li>
      <li class="sub-item"><a href="{{ route('admin.all_client_review') }}" class="sub-link {{ ($route == 'admin.all_client_review' || $route == 'admin.add_client_review' || $route == 'admin.edit_client_review' || $route == 'admin.update_client_review')? 'active':'' }}"> Client Review </a></li>
      <li class="sub-item"><a href="{{ route('admin.all_ad') }}" class="sub-link {{ ($route == 'admin.all_ad' || $route == 'admin.add_ad' || $route == 'admin.edit_ad' || $route == 'admin.update_ad')? 'active':'' }}">Advertisement</a></li>
      <li class="sub-item"><a href="{{ route('admin.all_technology') }}" class="sub-link {{ ($route == 'admin.all_technology' || $route == 'admin.add_technology' || $route == 'admin.edit_technology' || $route == 'admin.update_technology')? 'active':'' }}">Technology</a></li>
      <li class="sub-item"><a href="{{ route('admin.all_specialized') }}" class="sub-link {{ ($route == 'admin.all_specialized' || $route == 'admin.add_specialized' || $route == 'admin.edit_specialized' || $route == 'admin.update_specialized')? 'active':'' }}">Specialized</a></li>
      <li class="sub-item"><a href="{{ route('admin.all_team_member') }}" class="sub-link {{ ($route == 'admin.all_team_member' || $route == 'admin.add_team_member' || $route == 'admin.edit_team_member' || $route == 'admin.update_team_member')? 'active':'' }}">Team Member</a></li>
      </ul>

 

    
    <li class="br-menu-item">
      <a class="br-menu-link" href="{{route('admin.crm_communication')}}" class="sub-link {{($route == 'admin.crm_create_offer' || $route == 'admin.crm_manage_offer' || $route == 'admin.crm_delete_offer') ? 'active':''}}">
        <i class="menu-item-icon icon ion-chatbox-working tx-24"></i>
        <span class="menu-item-label">Communication</span>
      </a><!-- br-menu-link -->
    </li><!-- br-menu-item -->


    <li class="br-menu-item">
      <a class="br-menu-link" href="{{ route('admin.all_subscription') }}" class="sub-link {{ ($route == 'admin.all_subscription' || $route == 'admin.add_subscription' || $route == 'admin.edit_subscription' || $route == 'admin.update_subscription')? 'active':''}}">
        <i class="fa fa-credit-card tx-20" aria-hidden="true"></i>
        <span class="menu-item-label">Subscription</span>
      </a><!-- br-menu-link -->
    </li><!-- br-menu-item -->


    <li class="br-menu-item">
      <a href="#" class="br-menu-link with-sub {{($prefix=='admin/user')?'show-sub':''}}">
        <i class="menu-item-icon icon ion-person-stalker tx-20"></i>
        <span class="menu-item-label">User Management</span>
      </a><!-- br-menu-link -->
      <ul class="br-menu-sub">
        <li class="sub-item"><a href="{{route('admin.SuperAdmin')}}" class="sub-link {{ ($route == 'admin.SuperAdmin')? 'active':'' }}">Super Admin</a> </li>
        {{-- <li class="sub-item"><a href="{{route('admin.AllSeller')}}" class="sub-link {{ ($route == 'admin.AllSeller')? 'active':'' }}">All Teacher</a> </li> --}}
        <li class="sub-item"><a href="{{route('admin.AllUser')}}" class="sub-link {{ ($route == 'admin.AllUser' || $route == 'admin.edit_user')? 'active':'' }}">All User</a>
        </li>
      </ul>
    </li><!-- br-menu-item --> 
   

    <li class="br-menu-item">
        <a href="#" class="br-menu-link with-sub">
          <i class="menu-item-icon icon ion-ios-gear-outline tx-24"></i>
          <span class="menu-item-label">Site Settings</span>
        </a><!-- br-menu-link -->
        <ul class="br-menu-sub">
          <li class="sub-item"><a href="{{ url ('header') }}" class="sub-link {{ ($route == 'header')? 'active':'' }}">Header</a></li>
          <li class="sub-item"><a href="{{ url ('footer') }}" class="sub-link {{ ($route == 'footer')? 'active':'' }}">Footer</a></li>
          <li class="sub-item"><a href="{{ url ('general') }}" class="sub-link {{ ($route == 'general')? 'active':'' }}">General</a></li>
          <li class="sub-item"><a href="{{ url('limit') }}" class="sub-link {{ ($route == 'limit')? 'active':'' }}">Limit</a></li>
          <li class="sub-item"><a href="{{ url('pages') }}" class="sub-link {{ ($route == 'pages')? 'active':'' }}">About of our company</a></li>
          <li class="sub-item"><a href="{{ url('social') }}" class="sub-link {{ ($route == 'social')? 'active':'' }}">Social Media</a></li>
          <li class="sub-item"><a href="{{ url('contract') }}" class="sub-link {{ ($route == 'contract')? 'active':'' }}">Contract</a></li>
        </ul>
    </li><!-- br-menu-item -->

  </ul><!-- br-sideleft-menu -->

  <label class="sidebar-label pd-x-10 mg-t-25 mg-b-20 tx-info">Information Summary</label>

  <div class="info-list">
    <div class="info-list-item">
      <div>
        <p class="info-list-label">Memory Usage</p>
        <h5 class="info-list-amount">32.3%</h5>
      </div>
      <span class="peity-bar" data-peity='{ "fill": ["#336490"], "height": 35, "width": 60 }'>8,6,5,9,8,4,9,3,5,9</span>
    </div><!-- info-list-item -->

    <div class="info-list-item">
      <div>
        <p class="info-list-label">CPU Usage</p>
        <h5 class="info-list-amount">140.05</h5>
      </div>
      <span class="peity-bar" data-peity='{ "fill": ["#1C7973"], "height": 35, "width": 60 }'>4,3,5,7,12,10,4,5,11,7</span>
    </div><!-- info-list-item -->

    <div class="info-list-item">
      <div>
        <p class="info-list-label">Disk Usage</p>
        <h5 class="info-list-amount">82.02%</h5>
      </div>
      <span class="peity-bar" data-peity='{ "fill": ["#8E4246"], "height": 35, "width": 60 }'>1,2,1,3,2,10,4,12,7</span>
    </div><!-- info-list-item -->

    <div class="info-list-item">
      <div>
        <p class="info-list-label">Daily Traffic</p>
        <h5 class="info-list-amount">62,201</h5>
      </div>
      <span class="peity-bar" data-peity='{ "fill": ["#9C7846"], "height": 35, "width": 60 }'>3,12,7,9,2,3,4,5,2</span>
    </div><!-- info-list-item -->
  </div><!-- info-list -->

  <br>
</div><!-- br-sideleft -->
