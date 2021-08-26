<?php

use Illuminate\Support\Facades\Route;

//frontend
use App\Http\Controllers\Frontend\SiteController;

use App\Http\Controllers\Backend\SettingController;
use App\Http\Controllers\Backend\User\UserController;
use App\Http\Controllers\Backend\User\RoleController;
use App\Http\Controllers\Backend\Post\PostController;
use App\Http\Controllers\Backend\HomeController;
use App\Http\Controllers\Backend\Slider\SliderController;
use App\Http\Controllers\Backend\Notice\NoticeController;
use App\Http\Controllers\Backend\Glance\GlanceController;
use App\Http\Controllers\Backend\Admission\AdmissionController;
use App\Http\Controllers\Backend\Event\EventPageController;
use App\Http\Controllers\Backend\Link\UsefulLinkController;
use App\Http\Controllers\Backend\Explore\ExploreController;
use App\Http\Controllers\Backend\Academic\AcademicController;
use App\Http\Controllers\Backend\Administration\AdministrationController;
use App\Http\Controllers\Backend\Contact\ContactController;
use App\Http\Controllers\Backend\Gallery\GalleryController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [SiteController::class, 'index'])->name('home');
Route::get('view-post/{id}', [SiteController::class, 'view_post'])->name('view-post');
Route::get('archive/{archive}', [SiteController::class, 'archive'])->name('archive');
Route::get('notice', [SiteController::class, 'notice'])->name('notice');
Route::get('view-notice/{id}', [SiteController::class, 'view_notice'])->name('view-notice');
Route::get('glance-page/{id}', [SiteController::class, 'glance_page'])->name('glance-page');
Route::get('admission-page/{id}', [SiteController::class, 'admission_page'])->name('admission-page');
Route::get('event-page/{id}', [SiteController::class, 'event_page'])->name('event-page');
Route::get('academic-page/{id}', [SiteController::class, 'academic_page'])->name('academic-page');
Route::get('administration-page/{id}', [SiteController::class, 'administration_page'])->name('administration-page');
Route::get('administration-page/{id}', [SiteController::class, 'administration_page'])->name('administration-page');
Route::get('calendar', [SiteController::class, 'calendar'])->name('calendar');
Route::get('contact-us', [SiteController::class, 'contact_us'])->name('contact-us');
Route::get('gallery', [SiteController::class, 'gallery'])->name('gallery');
Route::get('map-direction', [SiteController::class, 'map_direction'])->name('map-direction');

Route::middleware(['LoginCheck'])->group(function(){
    Route::get('/login', [HomeController::class, 'login'])->name('login');
    Route::post('save-login', [HomeController::class, 'save_login'])->name('save-login');
    Route::get('forget-password', [ForgetPasswordController::class, 'getEmail'])->name('forget-password');
    Route::post('post-forget-password-mail', [ForgetPasswordController::class, 'postEmail'])->name('post-forget-password-mail');
});

Route::middleware(['DashboardCheck'])->prefix('dashboard')->group(function(){
    Route::get('/', [HomeController::class, 'dashboard'])->name('dashboard');
    Route::get('logout', [HomeController::class, 'logout'])->name('logout');
    Route::get('setting', [SettingController::class, 'index'])->name('setting');
    Route::post('update-setting', [SettingController::class, 'update'])->name('update-setting');
    Route::get('dark_mode/{status}', [SettingController::class, 'darkMode'])->name('dark_mode');

    //UserController
    Route::get('add-user', [UserController::class, 'add_user'])->name('add-user');
    Route::post('save-user', [UserController::class, 'save_user'])->name('save-user');
    Route::get('manage-user', [UserController::class, 'manage_user'])->name('manage-user');
    Route::get('edit-user/{id}', [UserController::class, 'edit_user'])->name('edit-user');
    Route::post('update-user/{id}', [UserController::class, 'update_user'])->name('update-user');
    Route::get('inactive-user/{id}', [UserController::class, 'inactive_user'])->name('inactive-user');
    Route::get('active-user/{id}', [UserController::class, 'active_user'])->name('active-user');
    Route::get('delete-user/{id}', [UserController::class, 'delete_user'])->name('delete-user');
    Route::get('change-password', [UserController::class, 'change_password'])->name('change-password');
    Route::post('update-password', [UserController::class, 'update_password'])->name('update-password');
    Route::get('profile', [UserController::class, 'profile'])->name('profile');
    Route::post('update-profile', [UserController::class, 'update_profile'])->name('update-profile');

    Route::get('manage-user-role', [RoleController::class, 'index'])->name('manage-user-role');
    Route::get('add-user-role', [RoleController::class, 'add'])->name('add-user-role');
    Route::post('save-user-role', [RoleController::class, 'save'])->name('save-user-role');
    Route::get('edit-role/{id}', [RoleController::class, 'edit'])->name('edit-role');
    Route::post('update-user-role/{id}', [RoleController::class, 'update'])->name('update-user-role');
    Route::get('delete-role/{id}', [RoleController::class, 'delete'])->name('delete-role');
    Route::get('add-privilege-to-role/{id}', [RoleController::class, 'add_privilege'])->name('add-privilege-to-role');
    Route::post('save-privilege/{id}', [RoleController::class, 'save_privilege'])->name('save-privilege');

    //post route
    Route::get('manage-post', [PostController::class, 'manage'])->name('manage-post');
    Route::get('add-post', [PostController::class, 'add'])->name('add-post');
    Route::post('save-post', [PostController::class, 'save'])->name('save-post');
    Route::get('edit-post/{id}', [PostController::class, 'edit'])->name('edit-post');
    Route::post('update-post/{id}', [PostController::class, 'update'])->name('update-post');
    Route::get('delete-post/{id}', [PostController::class, 'delete'])->name('delete-post');
    //Slider route
    Route::get('manage-slider', [SliderController::class, 'manage'])->name('manage-slider');
    Route::get('add-slider', [SliderController::class, 'add'])->name('add-slider');
    Route::post('save-slider', [SliderController::class, 'save'])->name('save-slider');
    Route::get('edit-slider/{id}', [SliderController::class, 'edit'])->name('edit-slider');
    Route::post('update-slider/{id}', [SliderController::class, 'update'])->name('update-slider');
    Route::get('delete-slider/{id}', [SliderController::class, 'delete'])->name('delete-slider');
    //notice route
    Route::get('manage-notice', [NoticeController::class, 'manage'])->name('manage-notice');
    Route::get('add-notice', [NoticeController::class, 'add'])->name('add-notice');
    Route::post('save-notice', [NoticeController::class, 'save'])->name('save-notice');
    Route::get('edit-notice/{id}', [NoticeController::class, 'edit'])->name('edit-notice');
    Route::post('update-notice/{id}', [NoticeController::class, 'update'])->name('update-notice');
    Route::get('delete-notice/{id}', [NoticeController::class, 'delete'])->name('delete-notice');
    //GlanceController route
    Route::get('manage-glance-page', [GlanceController::class, 'manage'])->name('manage-glance-page');
    Route::get('add-glance-page', [GlanceController::class, 'add'])->name('add-glance-page');
    Route::post('save-glance-page', [GlanceController::class, 'save'])->name('save-glance-page');
    Route::get('edit-glance-page/{id}', [GlanceController::class, 'edit'])->name('edit-glance-page');
    Route::post('update-glance-page/{id}', [GlanceController::class, 'update'])->name('update-glance-page');
    Route::get('delete-glance-page/{id}', [GlanceController::class, 'delete'])->name('delete-glance-page');
    //GlanceController route
    Route::get('manage-admission-page', [AdmissionController::class, 'manage'])->name('manage-admission-page');
    Route::get('add-admission-page', [AdmissionController::class, 'add'])->name('add-admission-page');
    Route::post('save-admission-page', [AdmissionController::class, 'save'])->name('save-admission-page');
    Route::get('edit-admission-page/{id}', [AdmissionController::class, 'edit'])->name('edit-admission-page');
    Route::post('update-admission-page/{id}', [AdmissionController::class, 'update'])->name('update-admission-page');
    Route::get('delete-admission-page/{id}', [AdmissionController::class, 'delete'])->name('delete-admission-page');
    //Event route
    Route::get('manage-event-page', [EventPageController::class, 'manage'])->name('manage-event-page');
    Route::get('add-event-page', [EventPageController::class, 'add'])->name('add-event-page');
    Route::post('save-event-page', [EventPageController::class, 'save'])->name('save-event-page');
    Route::get('edit-event-page/{id}', [EventPageController::class, 'edit'])->name('edit-event-page');
    Route::post('update-event-page/{id}', [EventPageController::class, 'update'])->name('update-event-page');
    Route::get('delete-event-page/{id}', [EventPageController::class, 'delete'])->name('delete-event-page');
    //useful-link route
    Route::get('manage-useful-link', [UsefulLinkController::class, 'manage'])->name('manage-useful-link');
    Route::get('add-useful-link', [UsefulLinkController::class, 'add'])->name('add-useful-link');
    Route::post('save-useful-link', [UsefulLinkController::class, 'save'])->name('save-useful-link');
    Route::get('edit-useful-link/{id}', [UsefulLinkController::class, 'edit'])->name('edit-useful-link');
    Route::post('update-useful-link/{id}', [UsefulLinkController::class, 'update'])->name('update-useful-link');
    Route::get('delete-useful-link/{id}', [UsefulLinkController::class, 'delete'])->name('delete-useful-link');
    //useful-link route
    Route::get('manage-explore', [ExploreController::class, 'manage'])->name('manage-explore');
    Route::get('add-explore', [ExploreController::class, 'add'])->name('add-explore');
    Route::post('save-explore', [ExploreController::class, 'save'])->name('save-explore');
    Route::get('edit-explore/{id}', [ExploreController::class, 'edit'])->name('edit-explore');
    Route::post('update-explore/{id}', [ExploreController::class, 'update'])->name('update-explore');
    Route::get('delete-explore/{id}', [ExploreController::class, 'delete'])->name('delete-explore');
    
    //AcademicController route
    Route::get('manage-academic-page', [AcademicController::class, 'manage'])->name('manage-academic-page');
    Route::get('add-academic-page', [AcademicController::class, 'add'])->name('add-academic-page');
    Route::post('save-academic-page', [AcademicController::class, 'save'])->name('save-academic-page');
    Route::get('edit-academic-page/{id}', [AcademicController::class, 'edit'])->name('edit-academic-page');
    Route::post('update-academic-page/{id}', [AcademicController::class, 'update'])->name('update-academic-page');
    Route::get('delete-academic-page/{id}', [AcademicController::class, 'delete'])->name('delete-academic-page');
    
    //AcademicController route
    Route::get('manage-administration-page', [AdministrationController::class, 'manage'])->name('manage-administration-page');
    Route::get('add-administration-page', [AdministrationController::class, 'add'])->name('add-administration-page');
    Route::post('save-administration-page', [AdministrationController::class, 'save'])->name('save-administration-page');
    Route::get('edit-administration-page/{id}', [AdministrationController::class, 'edit'])->name('edit-administration-page');
    Route::post('update-administration-page/{id}', [AdministrationController::class, 'update'])->name('update-administration-page');
    Route::get('delete-administration-page/{id}', [AdministrationController::class, 'delete'])->name('delete-administration-page');

    //contact
    Route::get('contact', [ContactController::class, 'index'])->name('contact');
    Route::post('update-contact-page', [ContactController::class, 'update'])->name('update-contact-page');

    //Gallery route
    Route::get('manage-gallery', [GalleryController::class, 'manage'])->name('manage-gallery');
    Route::get('add-gallery', [GalleryController::class, 'add'])->name('add-gallery');
    Route::post('save-gallery', [GalleryController::class, 'save'])->name('save-gallery');
    Route::get('edit-gallery/{id}', [GalleryController::class, 'edit'])->name('edit-gallery');
    Route::post('update-gallery/{id}', [GalleryController::class, 'update'])->name('update-gallery');
    Route::get('delete-gallery/{id}', [GalleryController::class, 'delete'])->name('delete-gallery');
});