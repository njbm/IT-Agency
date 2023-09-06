<?php
/**** Backend Home Controller ****/
use App\Http\Controllers\Backend\BackendController;
use App\Http\Controllers\Backend\Home\CategoryController;
use App\Http\Controllers\Backend\Home\SubCategoryController;
use App\Http\Controllers\Backend\Home\ChildCategoryController;
use App\Http\Controllers\Backend\Home\BlogController;
use App\Http\Controllers\Backend\Home\BannerController;
use App\Http\Controllers\Backend\Home\SliderController;
use App\Http\Controllers\Backend\Home\PartnerController;
use App\Http\Controllers\Backend\Home\BrandController;
use App\Http\Controllers\Backend\Home\ClientController;
use App\Http\Controllers\Backend\Home\ClientReviewController;
use App\Http\Controllers\Backend\Home\AdvertisementController;
use App\Http\Controllers\Backend\Specialized\SpecializedController;
use App\Http\Controllers\Backend\TeamMember\TeamMemberController;
use App\Http\Controllers\Backend\Technology\TechnologyController;

use App\Http\Controllers\Backend\Home\ComapnyDetailController;
use App\Http\Controllers\Backend\Home\LangingPageController;


// Service Manage
use App\Http\Controllers\Backend\Services\ServiceCategoryController;
use App\Http\Controllers\Backend\Services\ServiceSubCategoryController;

use App\Http\Controllers\Backend\Department\departmentController as DepartmentDepartmentController;


// Course Student List
use App\Http\Controllers\Backend\CourseStudent\StudentCourseController;

// User Role Management

use App\Http\Controllers\Backend\User_Role\UserRoleController;

// Student Communication Message
use App\Http\Controllers\Backend\Crm\Crm_Communication\CrmCommunicationController;

// Student Course Review
use App\Http\Controllers\Backend\Reviews\ReviewsController;

// Student Course Review
use App\Http\Controllers\Backend\Subscription\SubscriptionController;

/**** Backend Services Controller Route ****/
// use App\Http\Controllers\Backend\Doctor\DoctorController;
// use App\Http\Controllers\Backend\Doctor\DoctorAppoinmentController;
// use App\Http\Controllers\Backend\HospitalController;
// use App\Http\Controllers\Backend\NurseController;
use App\Http\Controllers\Backend\Setting\Contract\contractController;
use App\Http\Controllers\Backend\Setting\Footer\footerController;
use App\Http\Controllers\Backend\Setting\General\generalController;
use App\Http\Controllers\Backend\SitesettingController;
// use App\Http\Controllers\Backend\UserRoleController;
use Illuminate\Support\Facades\Route;

//site setting route
use App\Http\Controllers\Backend\Setting\Header\headerController;
use App\Http\Controllers\Backend\Setting\Limit\limitController;


//############################## Start Home Route ####################################

Route::prefix('admin/home')->group(function(){



    //Category Route
    Route::get('/all-category',[CategoryController::class, 'all_category'])->name('admin.all_category');
    Route::post('/add-category',[CategoryController::class, 'add_category'])->name('admin.add_category');
    Route::get('/edit-category/{id}',[CategoryController::class, 'edit_category'])->name('admin.edit_category');
    Route::post('/update-category/{id}',[CategoryController::class, 'update_category'])->name('admin.update_category');
    Route::post('/delete-category',[CategoryController::class, 'delete_category'])->name('admin.delete_category');
   


    //Sub Category
    Route::get('/all-subcategory',[SubCategoryController::class, 'all_subcategory'])->name('admin.all_subcategory');
    Route::post('/add-subcategory',[SubCategoryController::class, 'add_subcategory'])->name('admin.add_subcategory');
    Route::get('/edit-subcategory/{id}',[SubCategoryController::class, 'edit_subcategory'])->name('admin.edit_subcategory');
    Route::post('/update-subcategory/{id}',[SubCategoryController::class, 'update_subcategory'])->name('admin.update_subcategory');
    Route::post('/delete-subcategory',[SubCategoryController::class, 'delete_subcategory'])->name('admin.delete_subcategory');
    


    //Child Category 
    Route::get('/all-child-category',[ChildCategoryController::class, 'all_child_category'])->name('admin.all_child_category');
    Route::post('/add-child-category',[ChildCategoryController::class, 'add_child_category'])->name('admin.add_child_category');
    Route::get('/edit-child-category/{id}',[ChildCategoryController::class, 'edit_child_category'])->name('admin.edit_child_category');
    Route::post('/update-child-category/{id}',[ChildCategoryController::class, 'update_child_category'])->name('admin.update_child_category');
    Route::post('/delete-child-category',[ChildCategoryController::class, 'delete_child_category'])->name('admin.delete_child_category');
    


    //Blog Route
    Route::get('/all-blog',[BlogController::class, 'all_blog'])->name('admin.all_blog');
    Route::post('/add-blog',[BlogController::class, 'add_blog'])->name('admin.add_blog');
    Route::get('/edit-blog/{id}',[BlogController::class, 'edit_blog'])->name('admin.edit_blog');
    Route::post('/update-blog/{id}',[BlogController::class, 'update_blog'])->name('admin.update_blog');
    Route::post('/delete-blog',[BlogController::class, 'delete_blog'])->name('admin.delete_blog');
    Route::get('/blog-subcategory/{id}',[BlogController::class, 'getSubCategory']);
    Route::get('/blog-child-category/{id}',[BlogController::class, 'getChildCategory']);
    


    //Partner Route 
    Route::get('/all-banner',[BannerController::class, 'all_banner'])->name('admin.all_banner');
    Route::post('/add-banner',[BannerController::class, 'add_banner'])->name('admin.add_banner');
    Route::get('/edit-banner/{id}',[BannerController::class, 'edit_banner'])->name('admin.edit_banner');
    Route::post('/update-banner/{id}',[BannerController::class, 'update_banner'])->name('admin.update_banner');
    Route::post('/delete-banner',[BannerController::class, 'delete_banner'])->name('admin.delete_banner');
   


    //Slider Route
    Route::get('/all-slider',[SliderController::class, 'all_slider'])->name('admin.all_slider');
    Route::post('/add-slider',[SliderController::class, 'add_slider'])->name('admin.add_slider');
    Route::get('/edit-slider/{id}',[SliderController::class, 'edit_slider'])->name('admin.edit_slider');
    Route::post('/update-slider/{id}',[SliderController::class, 'update_slider'])->name('admin.update_slider');
    Route::post('/delete-slider',[SliderController::class, 'delete_slider'])->name('admin.delete_slider');
   

    //Partner Route 
    Route::get('/all-partner',[PartnerController::class, 'all_partner'])->name('admin.all_partner');
    Route::post('/add-partner',[PartnerController::class, 'add_partner'])->name('admin.add_partner');
    Route::get('/edit-partner/{id}',[PartnerController::class, 'edit_partner'])->name('admin.edit_partner');
    Route::post('/update-partner/{id}',[PartnerController::class, 'update_partner'])->name('admin.update_partner');
    Route::post('/delete-partner',[PartnerController::class, 'delete_partner'])->name('admin.delete_partner');
    

    //Brand Route
    Route::get('/all-brand',[BrandController::class, 'all_brand'])->name('admin.all_brand');
    Route::post('/add-brand',[BrandController::class, 'add_brand'])->name('admin.add_brand');
    Route::get('/edit-brand/{id}',[BrandController::class, 'edit_brand'])->name('admin.edit_brand');
    Route::post('/update-brand/{id}',[BrandController::class, 'update_brand'])->name('admin.update_brand');
    Route::post('/delete-brand',[BrandController::class, 'delete_brand'])->name('admin.delete_brand');
   

    //Client Route 
    Route::get('/all-client',[ClientController::class, 'all_client'])->name('admin.all_client');
    Route::post('/add-client',[ClientController::class, 'add_client'])->name('admin.add_client');
    Route::get('/edit-client/{id}',[ClientController::class, 'edit_client'])->name('admin.edit_client');
    Route::post('/update-client/{id}',[ClientController::class, 'update_client'])->name('admin.update_client');
    Route::post('/delete-client',[ClientController::class, 'delete_client'])->name('admin.delete_client');
    

    //Client Review Route
    Route::get('/all-client-review',[ClientReviewController::class, 'all_client_review'])->name('admin.all_client_review');
    Route::post('/add-client-review',[ClientReviewController::class, 'add_client_review'])->name('admin.add_client_review');
    Route::get('/edit-client-review/{id}',[ClientReviewController::class, 'edit_client_review'])->name('admin.edit_client_review');
    Route::post('/update-client-review/{id}',[ClientReviewController::class, 'update_client_review'])->name('admin.update_client_review');
    Route::post('/delete-client-review',[ClientReviewController::class, 'delete_client_review'])->name('admin.delete_client_review');
   

    //Client Review 
    Route::get('/all-ad',[AdvertisementController::class, 'all_ad'])->name('admin.all_ad');
    Route::post('/add-ad',[AdvertisementController::class, 'add_ad'])->name('admin.add_ad');
    Route::get('/edit-ad/{id}',[AdvertisementController::class, 'edit_ad'])->name('admin.edit_ad');
    Route::post('/update-ad/{id}',[AdvertisementController::class, 'update_ad'])->name('admin.update_ad');
    Route::post('/delete-ad',[AdvertisementController::class, 'delete_ad'])->name('admin.delete_ad');
 
    //Technology Route 
    Route::get('/all-technology',[TechnologyController::class, 'all_technology'])->name('admin.all_technology');
    Route::post('/add-technology',[TechnologyController::class, 'add_technology'])->name('admin.add_technology');
    Route::get('/edit-technology/{id}',[TechnologyController::class, 'edit_technology'])->name('admin.edit_technology');
    Route::post('/update-technology/{id}',[TechnologyController::class, 'update_technology'])->name('admin.update_technology');
    Route::post('/delete-technology',[TechnologyController::class, 'delete_technology'])->name('admin.delete_technology');
    
    //Specialized Route 
    Route::get('/all-specialized',[SpecializedController::class, 'all_specialized'])->name('admin.all_specialized');
    Route::post('/add-specialized',[SpecializedController::class, 'add_specialized'])->name('admin.add_specialized');
    Route::get('/edit-specialized/{id}',[SpecializedController::class, 'edit_specialized'])->name('admin.edit_specialized');
    Route::post('/update-specialized/{id}',[SpecializedController::class, 'update_specialized'])->name('admin.update_specialized');
    Route::post('/delete-specialized',[SpecializedController::class, 'delete_specialized'])->name('admin.delete_specialized');
    
    //TeamMember Route 
    Route::get('/all-team_member',[TeamMemberController::class, 'all_team_member'])->name('admin.all_team_member');
    Route::post('/add-team_member',[TeamMemberController::class, 'add_team_member'])->name('admin.add_team_member');
    Route::get('/edit-team_member/{id}',[TeamMemberController::class, 'edit_team_member'])->name('admin.edit_team_member');
    Route::post('/update-team_member/{id}',[TeamMemberController::class, 'update_team_member'])->name('update_team_member.update_specialized');
    Route::post('/delete-team_member',[TeamMemberController::class, 'delete_team_member'])->name('admin.delete_team_member');
    
     //Langing Page Route
     Route::get('/all-langing_page',[LangingPageController::class, 'all_langing_page'])->name('admin.all_langing_page');
     Route::post('/add-langing_page',[LangingPageController::class, 'add_langing_page'])->name('admin.add_langing_page');
     Route::get('/edit-langing_page/{id}',[LangingPageController::class, 'edit_langing_page'])->name('admin.edit_langing_page');
     Route::post('/update-langing_page/{id}',[LangingPageController::class, 'update_langing_page'])->name('admin.update_langing_page');
 
 
    //Company Detail Route
     Route::get('/all-company-detail',[ComapnyDetailController::class, 'all_company_detail'])->name('admin.all_company_detail');
     Route::post('/add-company-detail',[ComapnyDetailController::class, 'add_company_detail'])->name('admin.add_company_detail');
     Route::get('/edit-company-detail/{id}',[ComapnyDetailController::class, 'edit_company_detail'])->name('admin.edit_company_detail');
     Route::post('/update-company-detail/{id}',[ComapnyDetailController::class, 'update_company_detail'])->name('admin.update_company_detail');
     Route::post('/delete-company-detail',[ComapnyDetailController::class, 'delete_company_detail'])->name('admin.
     delete_company_detail');

}); //home route goruo ends

//############################## End Home Route ####################################

//############################## Start Service  Route ####################################
Route::prefix('services')->group(function () {
    // service category-------------
    Route::get('/all-category',[ServiceCategoryController::class, 'all_Service_category'])->name('service.all_service_category');
    Route::post('/add-category',[ServiceCategoryController::class, 'add_Service_category'])->name('service.add_category');
    Route::get('/edit-category/{id}',[ServiceCategoryController::class, 'edit_Service_category'])->name('service.edit_category');
    Route::post('/update-category/{id}',[ServiceCategoryController::class, 'update_Service_category'])->name('service.update_category');
    Route::post('/delete-category',[ServiceCategoryController::class, 'delete_Service_category'])->name('service.delete_category');



    // service subcategory-------------
    Route::get('/all-subcategory',[ServiceSubCategoryController::class, 'all_Service_subcategory'])->name('service.all_service_subcategory');
    Route::post('/add-subcategory',[ServiceSubCategoryController::class, 'add_Service_subcategory'])->name('service.add_subcategory');
    Route::get('/edit-subcategory/{id}',[ServiceSubCategoryController::class, 'edit_Service_subcategory'])->name('service.edit_subcategory');
    Route::post('/update-subcategory/{id}',[ServiceSubCategoryController::class, 'update_Service_subcategory'])->name('service.update_subcategory');
    Route::post('/delete-subcategory',[ServiceSubCategoryController::class, 'delete_Service_subcategory'])->name('service.delete_subcategory');

});
//############################## End Service Route ####################################



 // CRM route group start here
 Route::prefix('crm')->group(function(){
    Route::prefix('crm_communication')->group(function(){
        Route::get('/communication', [CrmCommunicationController::class, 'home'])->name('admin.crm_communication');
        Route::post('/communication/create-offer', [CrmCommunicationController::class, 'createOffer'])->name('admin.crm_create_offer');
        Route::get('/communication/manage-offer', [CrmCommunicationController::class, 'manageOffer'])->name('admin.crm_manage_offer');
        Route::get('/communication/delete-offer/{id}', [CrmCommunicationController::class, 'deleteOffer'])->name('admin.crm_delete_offer');

    });
});
// CRM route group end here


//############################## Start Course Student Route ####################################

Route::prefix('studentcourse')->group(function () {
    //studentcourse Route
    Route::get('/home',[StudentCourseController::class,'home'])->name('admin.studentcourse.home');
    Route::post('/home/add',[StudentCourseController::class,'add_studentcourse'])->name('admin.add_studentcourse');
    Route::get('/changestatuspaid/{id}',[StudentCourseController::class,'statuspaid'])->name('admin.studentcourse.changestatuspaid');
    Route::get('/changestatusunpaid/{id}',[StudentCourseController::class,'statusunpaid'])->name('admin.studentcourse.changestatusunpaid');
    //update Route
    Route::get('/show/{id}',[StudentCourseController::class,'show_studentcourse'])->name('admin.show_studentcourse');
    //Delete Route
    Route::get('/delete/{id}',[StudentCourseController::class,'delete_studentcourse'])->name('admin.studentcourse.delete');
});
//############################## End Course Route ####################################


//############################## Start Course Reviews Route ####################################

Route::prefix('reviews')->group(function () {
    //studentcourse Route
    Route::get('/home',[ReviewsController::class,'home'])->name('admin.reviews.home');
   
});
//############################## End Course Reviews Route ####################################


//############################## Start Course Student Route ####################################

Route::prefix('subscription')->group(function () {
     //Subscription Route
     Route::get('/all-subscription',[SubscriptionController::class, 'all_subscription'])->name('admin.all_subscription');
     Route::post('/add-subscription',[SubscriptionController::class, 'add_subscription'])->name('admin.add_subscription');
     Route::get('/edit-subscription/{id}',[SubscriptionController::class, 'edit_subscription'])->name('admin.edit_subscription');
     Route::post('/update-subscription/{id}',[SubscriptionController::class, 'update_subscription'])->name('admin.update_subscription');
     Route::post('/delete-subscription',[SubscriptionController::class, 'delete_subscription'])->name('admin.delete_subscription');
     Route::get('/subscription-subcategory/{id}',[SubscriptionController::class, 'getSubCategory']);
     Route::get('/subscription-child-category/{id}',[SubscriptionController::class, 'getChildCategory']);
});
//############################## End Course Route ####################################



//role Management
Route::prefix('admin/role')->group(function(){
    Route::get('/superadmin', [UserRoleController::class, 'SuperAdmin'])->name('admin.SuperAdmin');
    Route::get('/Allteachers', [UserRoleController::class, 'Allteachers'])->name('admin.AllSeller');
    Route::get('/Allstudents', [UserRoleController::class, 'Allstudents'])->name('admin.AllAccountant');
    Route::get('/all-hr-manager', [UserRoleController::class, 'AllHrManager'])->name('admin.AllHrManager');
    // Route::get('/all-user', [UserRoleController::class, 'AllUser'])->name('admin.AllUser');
    Route::post('/add-user', [UserRoleController::class, 'add_user'])->name('admin.add_user');
    Route::get('/edit-user/{id}', [UserRoleController::class, 'edit_user'])->name('admin.edit_user');
    Route::post('/update-user/{id}', [UserRoleController::class, 'update_user'])->name('admin.update_user');
    Route::post('/delete-user', [UserRoleController::class, 'delete_user'])->name('admin.delete_user');
});



Route::middleware(['auth','adminCheck:2'])->group(function () {
    Route::get('/editor/dashboard', [BackendController::class, 'editor'])->name('editor');
});

Route::middleware(['auth','adminCheck:3'])->group(function () {
    Route::get('/author/dashboard', [BackendController::class, 'author'])->name('author');
});

Route::middleware(['auth','adminCheck:4'])->group(function () {
    Route::get('/contributor/dashboard', [BackendController::class, 'contributor'])->name('contributor');
});

Route::prefix('admin')->group(function () {
    

}); // Admin route group ends






Route::middleware('auth', 'adminCheck:1')->group(function(){

    /****** Admin Dashboard Route*******/

    Route::get('/admin/dashboard', [BackendController::class, 'admin'])->name('admin.dashboard');

    /******########################## Start  Admin Home Route  ################################*******/


    /******################## End Admin Services Route  #######3#############*******/

    Route::get('/admin/All-User', [UserRoleController::class, 'AllUser'])->name('admin.AllUser');

    //----- Site Settings-----/

    //General
    Route::get('/header',[headerController::class,'header'])->name('header');
    Route::post('/header/add',[headerController::class,'updateHeader'])->name('header.add');
    //footer
    Route::get('/footer',[footerController::class,'footer'])->name('footer');
    Route::post('/footer/add',[footerController::class,'updateFooter'])->name('footer.add');
    //General
    Route::get('/general',[generalController::class,'home'])->name('general');
    Route::post('/general/add',[generalController::class,'general_add'])->name('general.add');
    // limit
    Route::get('/limit',[limitController::class,'home'])->name('limit');
    Route::post('/limit/add',[limitController::class,'limit_add'])->name('limit.add');
    // About of our company
    Route::get('/pages',[SitesettingController::class,'pages'])->name('pages');
    // pages
    Route::get('/social',[SitesettingController::class,'social'])->name('social');
    // pages
    Route::get('/contract',[contractController::class,'home'])->name('contract');
    Route::post('/contract/add',[contractController::class,'contract_add'])->name('contract.add');

});


Route::get('/another',function(){
    return 'this is another route';
});



require __DIR__.'/auth.php';