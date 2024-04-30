<?php

use App\Http\Kernel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\AdminMiddleware;
use App\Http\Controllers\User\HomeController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\User\AboutController;
use App\Http\Controllers\User\contactController;
use App\Http\Controllers\Admin\AboutUsController;
use App\Http\Controllers\Admin\ContentController;
use App\Http\Controllers\Admin\GalleryController;
use App\Http\Controllers\Admin\NewPageController;
use App\Http\Controllers\Admin\EditHomeController;
use App\Http\Controllers\Admin\MainHomeController;
use App\Http\Controllers\User\Laws\LawsController;
use App\Http\Controllers\User\News\NewsController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\User\Fauna\ParkController;
use App\Http\Controllers\User\News\News2Controller;
use App\Http\Controllers\User\News\News3Controller;
use App\Http\Controllers\User\News\News4Controller;
use App\Http\Controllers\User\News\News5Controller;
use App\Http\Controllers\User\Fauna\BirdsController;
use App\Http\Controllers\User\Fauna\FaunaController;
use App\Http\Controllers\User\Flora\FloraController;
use App\Http\Controllers\Admin\Story\StoryController;
use App\Http\Controllers\User\Fauna\Birds2Controller;
use App\Http\Controllers\User\Flora\Flora2Controller;
use App\Http\Controllers\User\Flora\Flora3Controller;
use App\Http\Controllers\User\Flora\Flora4Controller;
use App\Http\Controllers\User\Flora\Flora5Controller;
use App\Http\Controllers\User\RegistrationController;
use App\Http\Controllers\Admin\AdminContactController;
use App\Http\Controllers\User\Change\ChangeController;
use App\Http\Controllers\User\Fauna\MammalsController;
use App\Http\Controllers\User\Laws\Laws1995Controller;
use App\Http\Controllers\User\Laws\Laws2001Controller;
use App\Http\Controllers\User\Laws\Laws2009Controller;
use App\Http\Controllers\User\Laws\Laws2010Controller;
use App\Http\Controllers\User\Laws\Laws2011Controller;
use App\Http\Controllers\User\Laws\Laws2015Controller;
use App\Http\Controllers\User\Laws\Laws2016Controller;
use App\Http\Controllers\User\Laws\Laws2017Controller;
use App\Http\Controllers\User\Laws\Laws2018Controller;
use App\Http\Controllers\User\Laws\Laws2019Controller;
use App\Http\Controllers\User\Laws\Laws2020Controller;
use App\Http\Controllers\User\People\PeopleController;
use App\Http\Controllers\User\Change\Change2Controller;
use App\Http\Controllers\User\Climate\AutumnController;
use App\Http\Controllers\User\Climate\SpringController;
use App\Http\Controllers\User\Climate\SummerController;
use App\Http\Controllers\User\Climate\WinterController;
use App\Http\Controllers\User\Fauna\Mammals2Controller;
use App\Http\Controllers\User\People\People2Controller;
use App\Http\Controllers\User\Climate\ClimateController;
use App\Http\Controllers\User\Kingdom\KingdomController;
use App\Http\Controllers\User\Fauna\Butterfly2Controller;
use App\Http\Controllers\User\Kingdom\Kingdom2Controller;
use App\Http\Controllers\Admin\News\NewsAndEventsController;
use App\Http\Controllers\Admin\News\Gallery1Controller;
use App\Http\Controllers\Admin\News\Gallery2Controller;
use App\Http\Controllers\Admin\News\Gallery3Controller;
use App\Http\Controllers\Admin\News\Gallery4Controller;
use App\Http\Controllers\Admin\Story\Fauna\FaunaPageController;
use App\Http\Controllers\Admin\Story\Flora\FloraHomeController;
use App\Http\Controllers\Admin\Story\Flora\FloraPageController;
use App\Http\Controllers\Admin\Story\Fauna\Page2\Page2Controller;
use App\Http\Controllers\Admin\Story\Fauna\Page3\Page3Controller;
use App\Http\Controllers\Admin\Story\Fauna\Page4\Page4Controller;
use App\Http\Controllers\Admin\Story\Fauna\Page5\Page5Controller;
use App\Http\Controllers\Admin\Story\Fauna\Page6\Page6Controller;
use App\Http\Controllers\Admin\Story\Fauna\Page7\Page7Controller;
use App\Http\Controllers\Admin\Story\Kingdom\AdminKingdomController;
use App\Http\Controllers\Admin\Story\Flora\Page2\FloraPage2Controller;
use App\Http\Controllers\Admin\Story\Flora\Page3\FloraPage3Controller;
use App\Http\Controllers\Admin\Story\Flora\Page4\FloraPage4Controller;
use App\Http\Controllers\Admin\Story\Flora\Page5\FloraPage5Controller;
use App\Http\Controllers\Admin\Story\Fauna\FaunaHome\FaunaHomeController;
use App\Http\Controllers\Admin\Story\Fauna\Page3\FaunaPage3Gallery1Controller;
use App\Http\Controllers\Admin\Story\Fauna\Page3\FaunaPage3Gallery2Controller;
use App\Http\Controllers\Admin\Story\Fauna\Page3\FaunaPage3Gallery3Controller;
use App\Http\Controllers\Admin\Story\Fauna\Page3\FaunaPage3Gallery4Controller;
use App\Http\Controllers\Admin\Story\Fauna\Page3\FaunaPage3Gallery5Controller;
use App\Http\Controllers\Admin\Story\Fauna\Page3\FaunaPage3Gallery6Controller;
use App\Http\Controllers\Admin\Story\Fauna\Page5\FaunaPage5Gallery1Controller;
use App\Http\Controllers\Admin\Story\Fauna\Page5\FaunaPage5Gallery2Controller;
use App\Http\Controllers\Admin\Story\Fauna\Page5\FaunaPage5Gallery3Controller;
use App\Http\Controllers\Admin\Story\Fauna\Page5\FaunaPage5Gallery4Controller;
use App\Http\Controllers\Admin\Story\Fauna\Page5\FaunaPage5Gallery5Controller;
use App\Http\Controllers\Admin\Story\Fauna\Page5\FaunaPage5Gallery6Controller;
use App\Http\Controllers\Admin\Story\Fauna\Page5\FaunaPage5Gallery7Controller;
use App\Http\Controllers\Admin\Story\Fauna\Page5\FaunaPage5Gallery8Controller;
use App\Http\Controllers\Admin\Story\Fauna\Page5\FaunaPage5Gallery9Controller;
use App\Http\Controllers\Admin\Story\Fauna\Page6\FaunaPage6Gallery1Controller;
use App\Http\Controllers\Admin\Story\Fauna\Page6\FaunaPage6Gallery2Controller;
use App\Http\Controllers\Admin\Story\Fauna\Page6\FaunaPage6Gallery3Controller;
use App\Http\Controllers\Admin\Story\Fauna\Page6\FaunaPage6Gallery4Controller;
use App\Http\Controllers\Admin\Story\Fauna\Page6\FaunaPage6Gallery5Controller;
use App\Http\Controllers\Admin\Story\Fauna\Page6\FaunaPage6Gallery6Controller;
use App\Http\Controllers\Admin\Story\Fauna\Page6\FaunaPage6Gallery7Controller;
use App\Http\Controllers\Admin\Story\Fauna\Page6\FaunaPage6Gallery8Controller;
use App\Http\Controllers\Admin\Story\Fauna\Page6\FaunaPage6Gallery9Controller;
use App\Http\Controllers\Admin\Story\Fauna\Page7\FaunaPage7Gallery1Controller;
use App\Http\Controllers\Admin\Story\Fauna\Page7\FaunaPage7Gallery2Controller;
use App\Http\Controllers\Admin\Story\Fauna\Page7\FaunaPage7Gallery3Controller;
use App\Http\Controllers\Admin\Story\Fauna\Page7\FaunaPage7Gallery4Controller;
use App\Http\Controllers\Admin\Story\Fauna\Page7\FaunaPage7Gallery5Controller;
use App\Http\Controllers\Admin\Story\Fauna\Page7\FaunaPage7Gallery6Controller;
use App\Http\Controllers\Admin\Story\Fauna\Page7\FaunaPage7Gallery7Controller;
use App\Http\Controllers\Admin\Story\Fauna\Page7\FaunaPage7Gallery8Controller;
use App\Http\Controllers\Admin\Story\Fauna\Page7\FaunaPage7Gallery9Controller;
use App\Http\Controllers\Admin\Story\Flora\Page2\FloraPage2Gallery1Controller;
use App\Http\Controllers\Admin\Story\Flora\Page2\FloraPage2Gallery2Controller;
use App\Http\Controllers\Admin\Story\Flora\Page2\FloraPage2Gallery3Controller;
use App\Http\Controllers\Admin\Story\Flora\Page2\FloraPage2Gallery4Controller;
use App\Http\Controllers\Admin\Story\Flora\Page2\FloraPage2Gallery5Controller;
use App\Http\Controllers\Admin\Story\Flora\Page2\FloraPage2Gallery6Controller;
use App\Http\Controllers\Admin\Story\Flora\Page2\FloraPage2Gallery7Controller;
use App\Http\Controllers\Admin\Story\Flora\Page2\FloraPage2Gallery8Controller;
use App\Http\Controllers\Admin\Story\Flora\Page2\FloraPage2Gallery9Controller;
use App\Http\Controllers\Admin\Story\Flora\Page3\FloraPage3Gallery1Controller;
use App\Http\Controllers\Admin\Story\Flora\Page3\FloraPage3Gallery2Controller;
use App\Http\Controllers\Admin\Story\Flora\Page3\FloraPage3Gallery3Controller;
use App\Http\Controllers\Admin\Story\Flora\Page3\FloraPage3Gallery4Controller;
use App\Http\Controllers\Admin\Story\Flora\Page3\FloraPage3Gallery5Controller;
use App\Http\Controllers\Admin\Story\Flora\Page3\FloraPage3Gallery6Controller;
use App\Http\Controllers\Admin\Story\Flora\Page3\FloraPage3Gallery7Controller;
use App\Http\Controllers\Admin\Story\Flora\Page3\FloraPage3Gallery8Controller;
use App\Http\Controllers\Admin\Story\Flora\Page3\FloraPage3Gallery9Controller;
use App\Http\Controllers\Admin\Story\Flora\Page4\FloraPage4Gallery1Controller;
use App\Http\Controllers\Admin\Story\Flora\Page4\FloraPage4Gallery2Controller;
use App\Http\Controllers\Admin\Story\Flora\Page4\FloraPage4Gallery3Controller;
use App\Http\Controllers\Admin\Story\Flora\Page4\FloraPage4Gallery4Controller;
use App\Http\Controllers\Admin\Story\Flora\Page4\FloraPage4Gallery5Controller;
use App\Http\Controllers\Admin\Story\Flora\Page4\FloraPage4Gallery6Controller;
use App\Http\Controllers\Admin\Story\Flora\Page4\FloraPage4Gallery7Controller;
use App\Http\Controllers\Admin\Story\Flora\Page4\FloraPage4Gallery8Controller;
use App\Http\Controllers\Admin\Story\Flora\Page5\FloraPage5Gallery1Controller;
use App\Http\Controllers\Admin\Story\Flora\Page5\FloraPage5Gallery2Controller;
use App\Http\Controllers\Admin\Story\Flora\Page5\FloraPage5Gallery3Controller;
use App\Http\Controllers\Admin\Story\Flora\Page5\FloraPage5Gallery4Controller;
use App\Http\Controllers\Admin\Story\Flora\Page5\FloraPage5Gallery5Controller;
use App\Http\Controllers\Admin\Story\Flora\Page5\FloraPage5Gallery6Controller;
use App\Http\Controllers\Admin\Story\Flora\Page5\FloraPage5Gallery7Controller;
use App\Http\Controllers\Admin\Story\Flora\Page5\FloraPage5Gallery8Controller;
use App\Http\Controllers\Admin\Story\Kingdom\Gallery\KingdomGalleryController;
use App\Http\Controllers\Admin\Story\Fauna\Page5\FaunaPage5Gallery10Controller;
use App\Http\Controllers\Admin\Story\Fauna\Page5\FaunaPage5Gallery11Controller;
use App\Http\Controllers\Admin\Story\Fauna\Page7\FaunaPage7Gallery10Controller;
use App\Http\Controllers\Admin\Story\Flora\Page2\FloraPage2Gallery10Controller;
use App\Http\Controllers\Admin\Story\Flora\Page3\FloraPage3Gallery10Controller;
use App\Http\Controllers\Admin\Story\Kingdom\KingdomHome\KingdomHomeController;
use App\Http\Controllers\Admin\Story\Kingdom\Gallery\Galleries\GalleriesController;
use App\Http\Controllers\Admin\Story\Kingdom\Gallery\Galleries\Galleries1Controller;
use App\Http\Controllers\Admin\Story\Kingdom\Gallery\Galleries\Galleries2Controller;
use App\Http\Controllers\Admin\Story\Kingdom\Gallery\Galleries\Galleries3Controller;
use App\Http\Controllers\Admin\Story\Kingdom\Gallery\Galleries\Galleries4Controller;
use App\Http\Controllers\Admin\Story\Kingdom\Gallery\Galleries\Galleries5Controller;
use App\Http\Controllers\Admin\Story\Kingdom\Gallery\Galleries\Galleries6Controller;
use App\Http\Controllers\Admin\Story\Kingdom\Gallery\Galleries\Galleries7Controller;
use App\Http\Controllers\Admin\Story\Kingdom\Gallery\Galleries\Galleries8Controller;
use App\Http\Controllers\Admin\Story\Kingdom\Gallery\Galleries\Galleries9Controller;



Auth::routes();
Route::get('/', [HomeController::class, 'index']);



Route::get('/the-newsE', [NewsController::class, 'index']);
Route::get('/the-newsE2', [News2Controller::class, 'index']);
Route::get('/the-newsE3', [News3Controller::class, 'index']);
Route::get('/the-newsE4', [News4Controller::class, 'index']);
Route::get('/the-newsE5', [News5Controller::class, 'index']);

Route::get('/contact', [contactController::class, 'index']);


Route::get('/about', [AboutController::class, 'index']);


Route::get('/the-kingdom2', [Kingdom2Controller::class, 'index']);


Route::get('/the-flora2', [Flora2Controller::class, 'index']);

Route::get('/the-flora3', [Flora3Controller::class, 'index']);

Route::get('/the-flora4', [Flora4Controller::class, 'index']);


Route::get('/the-flora5', [Flora5Controller::class, 'index']);

Route::get('/laws/1995', [Laws1995Controller::class, 'index']);

Route::get('/laws/2001', [Laws2001Controller::class, 'index']);

Route::get('/laws/2009', [Laws2009Controller::class, 'index']);
Route::get('/laws/2010', [Laws2010Controller::class, 'index']);
Route::get('/laws/2011', [Laws2011Controller::class, 'index']);
Route::get('/laws/2015', [Laws2015Controller::class, 'index']);
Route::get('/laws/2016', [Laws2016Controller::class, 'index']);
Route::get('/laws/2017', [Laws2017Controller::class, 'index']);
Route::get('/laws/2018', [Laws2018Controller::class, 'index']);
Route::get('/laws/2019', [Laws2019Controller::class, 'index']);
Route::get('/laws/2020', [Laws2020Controller::class, 'index']);
Route::get('/the-kingdom', [KingdomController::class, 'index']);
Route::get('/the-flora', [FloraController::class, 'index']);
Route::get('/the-fauna', [FaunaController::class, 'index']);
Route::get('/the-mammals', [MammalsController::class, 'index']);
Route::get('/the-mammals2', [Mammals2Controller::class, 'index']);
Route::get('/the-birds', [BirdsController::class, 'index']);
Route::get('/the-birds2', [Birds2Controller::class, 'index']);
Route::get('/the-butterfly2', [Butterfly2Controller::class, 'index']);
Route::get('/the-park', [ParkController::class, 'index']);
Route::get('/the-climate', [ClimateController::class, 'index']);
Route::get('/the-summer', [SummerController::class, 'index']);
Route::get('/the-winter', [WinterController::class, 'index']);
Route::get('/the-spring', [SpringController::class, 'index']);
Route::get('/the-autumn', [AutumnController::class, 'index']);
Route::get('/the-change', [ChangeController::class, 'index']);
Route::get('/the-change2', [Change2Controller::class, 'index']);
Route::get('/the-laws', [LawsController::class, 'index']);
Route::get('/the-people', [PeopleController::class, 'index']);
Route::get('/the-people2', [People2Controller::class, 'index']);
Route::get('/register', [RegistrationController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegistrationController::class, 'register']);


//Admin

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/login', function () {
    return view('auth.login');
});

//dashboard
Route::prefix('admin')->middleware(['auth', 'isAdmin'])->group(function () {
    Route::get('dashboard', [DashboardController::class, 'index']);
    Route::get('dashboard', [UserController::class, 'dashboard'])->name('admin.dashboard');

    //content
    Route::get('content', [ContentController::class, 'index']);
    //main home
    Route::get('edit_home', [MainHomeController::class, 'index']);


    //create new page
    Route::get('/edit_home', [NewPageController::class, 'index'])->name('edit_home');
    Route::post('/edit_home', [NewPageController::class, 'store']);
    Route::delete('/edit_home/{page_title_id}', [NewPageController::class, 'destroy'])->name('admin.edit_home.home_create');



    //edit_home
    Route::get('edit_home/home_create', [EditHomeController::class, 'home_create']);
    Route::post('edit_home_page', [EditHomeController::class, 'store']);

    //edit_about_us
    Route::get('about_us/about_create', [AboutUsController::class, 'about_create']);
    Route::post('about_us', [AboutUsController::class, 'store']);

    //News and events
    Route::get('news_and_events/news_and_events', [NewsAndEventsController::class, 'news_and_events_create']);
    Route::post('news_and_events', [NewsAndEventsController::class, 'store']);

    //News and events gallary
    Route::get('news_and_events/gallery/gallery', [GalleryController::class, 'index']);
    Route::post('news_and_events/gallery', [GalleryController::class, 'store']);
    Route::delete("news_and_events/gallery/gallery/{gallery_id}", [GalleryController::class, 'destroy']);

    //News and events gallery1
    Route::get('news_and_events/gallery/galleries/gallery1', [Gallery1Controller::class, 'gallery1_create']);
    Route::post('news_and_events/gallery/galleries/gallery1', [Gallery1Controller::class, 'store']);
    //News and events gallery2
    Route::get('news_and_events/gallery/galleries/gallery2', [Gallery2Controller::class, 'gallery2_create']);
    Route::post('news_and_events/gallery/galleries/gallery2', [Gallery2Controller::class, 'store']);
    //News and events gallery3
    Route::get('news_and_events/gallery/galleries/gallery3', [Gallery3Controller::class, 'gallery3_create']);
    Route::post('news_and_events/gallery/galleries/gallery3', [Gallery3Controller::class, 'store']);
    // News and events gallery4
    Route::get('news_and_events/gallery/galleries/gallery4', [Gallery4Controller::class, 'gallery4_create']);
    Route::post('news_and_events/gallery/galleries/gallery4', [Gallery4Controller::class, 'store']);

    //Contact
    Route::get('contact/contact', [AdminContactController::class, 'contact_create']);
    Route::post('contact', [AdminContactController::class, 'store']);

    //stories
    Route::get('story/stories', [StoryController::class, 'index'])->name('story.stories');
    Route::post('story', [StoryController::class, 'store']);
    Route::delete('/story/stories/{stories_id}', [StoryController::class, 'destroy'])->name('story.destroy');

    //stories kingdom
    Route::get('story/kingdom/kingdom', [AdminKingdomController::class, 'index'])->name('admin.story.kingdom.kingdom');
    Route::post('story/kingdom', [AdminKingdomController::class, 'store']);
    Route::delete('/story/kingdom/kingdom{stories_id}', [KingdomController::class, 'destroy'])->name('story.kingdom.destroy');

    //stories kingdom Gallery
    Route::get('story/kingdom/gallery/gallery', [KingdomGalleryController::class, 'index'])->name('story.kingdom.gallery.gallery');
    Route::post('story/kingdom/gallery', [KingdomGalleryController::class, 'store']);
    Route::delete('/story/kingdom/gallery/gallery{kingdom_gallery_id}', [KingdomGalleryController::class, 'destroy'])->name('story.kingdom.gallery.destroy');

    //stories kingdom Home Page
    Route::get('story/kingdom/kingdom_home/kingdom_home', [KingdomHomeController::class, 'kingdom_home_create']);
    Route::post('story/kingdom/kingdom_home', [KingdomHomeController::class, 'store']);
});
//kingdom Galleries
Route::prefix('admin/story/kingdom/gallery')->middleware(['auth', 'isAdmin'])->group(function () {
    Route::get('galleries/gallery1/galleries0', [Galleries1Controller::class, 'galleries0_create']);
    Route::post('galleries/gallery1', [Galleries1Controller::class, 'store']);

    Route::get('galleries/gallery2/galleries1', [Galleries2Controller::class, 'galleries1_create']);
    Route::post('galleries/gallery2', [Galleries2Controller::class, 'store']);

    Route::get('galleries/gallery3/galleries2', [Galleries3Controller::class, 'galleries2_create']);
    Route::post('galleries/gallery3', [Galleries3Controller::class, 'store']);

    Route::get('galleries/gallery4/galleries3', [Galleries4Controller::class, 'galleries3_create']);
    Route::post('galleries/gallery4', [Galleries4Controller::class, 'store']);

    Route::get('galleries/gallery5/galleries4', [Galleries5Controller::class, 'galleries4_create']);
    Route::post('galleries/gallery5', [Galleries5Controller::class, 'store']);

    Route::get('galleries/gallery6/galleries5', [Galleries6Controller::class, 'galleries5_create']);
    Route::post('galleries/gallery6', [Galleries6Controller::class, 'store']);

    Route::get('galleries/gallery7/galleries6', [Galleries7Controller::class, 'galleries6_create']);
    Route::post('galleries/gallery7', [Galleries7Controller::class, 'store']);

    Route::get('galleries/gallery8/galleries7', [Galleries8Controller::class, 'galleries7_create']);
    Route::post('galleries/gallery8', [Galleries8Controller::class, 'store']);

    Route::get('galleries/gallery9/galleries8', [Galleries9Controller::class, 'galleries8_create']);
    Route::post('galleries/gallery9', [Galleries9Controller::class, 'store']);

});


//stories Flora Page

Route::prefix('admin/story')->middleware(['auth', 'isAdmin'])->group(function () {
    Route::get('flora/flora_page', [FloraPageController::class, 'index'])->name('story.flora.flora_page');
    Route::post('flora', [FloraPageController::class, 'store']);
    Route::delete('flora/flora_page{flora_page_id}', [FloraPageController::class, 'destroy'])->name('story.flora.destroy');

    //flora home page
    Route::get('flora/flora_home/flora_home', [FloraHomeController::class, 'flora_home_create']);
    Route::post('flora/flora_home', [FloraHomeController::class, 'store']);

    //flora page 2
    Route::get('flora/flora_page2/flora_page2', [FloraPage2Controller::class, 'index'])->name('story.flora.flora_page2.flora_page2');
    Route::post('flora/flora_page2', [FloraPage2Controller::class, 'store']);
    Route::delete('flora/flora_page2/{flora_page2_gallery_id}', [FloraPage2Controller::class, 'destroy'])->name('admin.story.flora.flora_page2.destroy');

    //flora page 3
    Route::get('flora/flora_page3/flora_page3', [FloraPage3Controller::class, 'index'])->name('story.flora.flora_page3.flora_page3');
    Route::post('flora/flora_page3', [FloraPage3Controller::class, 'store']);
    Route::delete('flora/flora_page3/{flora_page3_id}', [FloraPage3Controller::class, 'destroy'])->name('admin.story.flora.flora_page3.destroy');

    //flora page 4
    Route::get('flora/flora_page4/flora_page4', [FloraPage4Controller::class, 'index'])->name('story.flora.flora_page4.flora_page4');
    Route::post('flora/flora_page4', [FloraPage4Controller::class, 'store']);
    Route::delete('/flora/flora_page4/{flora_page4_id}', [FloraPage4Controller::class, 'destroy'])->name('admin.story.flora.flora_page4.destroy');

    //flora page 5
    Route::get('flora/flora_page5/flora_page5', [FloraPage5Controller::class, 'index'])->name('story.flora.flora_page5.flora_page5');
    Route::post('flora/flora_page5', [FloraPage5Controller::class, 'store']);
    Route::delete('flora/flora_page5/{flora_page5_id}', [FloraPage5Controller::class, 'destroy'])->name('admin.story.flora.flora_page5.destroy');

});

// Flora Page2 galleries
Route::prefix('admin/story/flora/flora_page2')->middleware(['auth', 'isAdmin'])->group(function () {
    //gallery 1
    Route::get('gallery1/gallery1', [FloraPage2Gallery1Controller::class, 'flora_page2_gallery1_create']);
    Route::post('gallery1', [FloraPage2Gallery1Controller::class, 'store']);
    //gallery 2
    Route::get('gallery2/gallery2', [FloraPage2Gallery2Controller::class, 'flora_page2_gallery2_create']);
    Route::post('gallery2', [FloraPage2Gallery2Controller::class, 'store']);
    //gallery 3
    Route::get('gallery3/gallery3', [FloraPage2Gallery3Controller::class, 'flora_page2_gallery3_create']);
    Route::post('gallery3', [FloraPage2Gallery3Controller::class, 'store']);
    //gallery 4
    Route::get('gallery4/gallery4', [FloraPage2Gallery4Controller::class, 'flora_page2_gallery4_create']);
    Route::post('gallery4', [FloraPage2Gallery4Controller::class, 'store']);
    //gallery 5
    Route::get('gallery5/gallery5', [FloraPage2Gallery5Controller::class, 'flora_page2_gallery5_create']);
    Route::post('gallery5', [FloraPage2Gallery5Controller::class, 'store']);
    //gallery 6
    Route::get('gallery6/gallery6', [FloraPage2Gallery6Controller::class, 'flora_page2_gallery6_create']);
    Route::post('gallery6', [FloraPage2Gallery6Controller::class, 'store']);
    //gallery 7
    Route::get('gallery7/gallery7', [FloraPage2Gallery7Controller::class, 'flora_page2_gallery7_create']);
    Route::post('gallery7', [FloraPage2Gallery7Controller::class, 'store']);
    //gallery 8
    Route::get('gallery8/gallery8', [FloraPage2Gallery8Controller::class, 'flora_page2_gallery8_create']);
    Route::post('gallery8', [FloraPage2Gallery8Controller::class, 'store']);
    //gallery 9
    Route::get('gallery9/gallery9', [FloraPage2Gallery9Controller::class, 'flora_page2_gallery9_create']);
    Route::post('gallery9', [FloraPage2Gallery9Controller::class, 'store']);
    //gallery 10
    Route::get('gallery10/gallery10', [FloraPage2Gallery10Controller::class, 'flora_page2_gallery10_create']);
    Route::post('gallery10', [FloraPage2Gallery10Controller::class, 'store']);



});
// Flora Page3 galleries

Route::prefix('admin/story/flora/flora_page3')->middleware(['auth', 'isAdmin'])->group(function () {
    //gallery 1
    Route::get('gallery1/gallery1', [FloraPage3Gallery1Controller::class, 'flora_page3_gallery1_create']);
    Route::post('gallery1', [FloraPage3Gallery1Controller::class, 'store']);
    //gallery 2
    Route::get('gallery2/gallery2', [FloraPage3Gallery2Controller::class, 'flora_page3_gallery2_create']);
    Route::post('gallery2', [FloraPage3Gallery2Controller::class, 'store']);
    //gallery 3
    Route::get('gallery3/gallery3', [FloraPage3Gallery3Controller::class, 'flora_page3_gallery3_create']);
    Route::post('gallery3', [FloraPage3Gallery3Controller::class, 'store']);
    //gallery 4
    Route::get('gallery4/gallery4', [FloraPage3Gallery4Controller::class, 'flora_page3_gallery4_create']);
    Route::post('gallery4', [FloraPage3Gallery4Controller::class, 'store']);
    //gallery 5
    Route::get('gallery5/gallery5', [FloraPage3Gallery5Controller::class, 'flora_page3_gallery5_create']);
    Route::post('gallery5', [FloraPage3Gallery5Controller::class, 'store']);
    //gallery 6
    Route::get('gallery6/gallery6', [FloraPage3Gallery6Controller::class, 'flora_page3_gallery6_create']);
    Route::post('gallery6', [FloraPage3Gallery6Controller::class, 'store']);
    //gallery 7
    Route::get('gallery7/gallery7', [FloraPage3Gallery7Controller::class, 'flora_page3_gallery7_create']);
    Route::post('gallery7', [FloraPage3Gallery7Controller::class, 'store']);
    //gallery 8
    Route::get('gallery8/gallery8', [FloraPage3Gallery8Controller::class, 'flora_page3_gallery8_create']);
    Route::post('gallery8', [FloraPage3Gallery8Controller::class, 'store']);
    //gallery 9
    Route::get('gallery9/gallery9', [FloraPage3Gallery9Controller::class, 'flora_page3_gallery9_create']);
    Route::post('gallery9', [FloraPage3Gallery9Controller::class, 'store']);
    //gallery 10
    Route::get('gallery10/gallery10', [FloraPage3Gallery10Controller::class, 'flora_page3_gallery10_create']);
    Route::post('gallery10', [FloraPage3Gallery10Controller::class, 'store']);
});
// Flora Page4 galleries

Route::prefix('admin/story/flora/flora_page4')->middleware(['auth', 'isAdmin'])->group(function () {
    //gallery 1
    Route::get('gallery1/gallery1', [FloraPage4Gallery1Controller::class, 'flora_page4_gallery1_create']);
    Route::post('gallery1', [FloraPage4Gallery1Controller::class, 'store']);
    //gallery 2
    Route::get('gallery2/gallery2', [FloraPage4Gallery2Controller::class, 'flora_page4_gallery2_create']);
    Route::post('gallery2', [FloraPage4Gallery2Controller::class, 'store']);
    //gallery 3
    Route::get('gallery3/gallery3', [FloraPage4Gallery3Controller::class, 'flora_page4_gallery3_create']);
    Route::post('gallery3', [FloraPage4Gallery3Controller::class, 'store']);
    //gallery 4
    Route::get('gallery4/gallery4', [FloraPage4Gallery4Controller::class, 'flora_page4_gallery4_create']);
    Route::post('gallery4', [FloraPage4Gallery4Controller::class, 'store']);
    //gallery 5
    Route::get('gallery5/gallery5', [FloraPage4Gallery5Controller::class, 'flora_page4_gallery5_create']);
    Route::post('gallery5', [FloraPage4Gallery5Controller::class, 'store']);
    //gallery 6
    Route::get('gallery6/gallery6', [FloraPage4Gallery6Controller::class, 'flora_page4_gallery6_create']);
    Route::post('gallery6', [FloraPage4Gallery6Controller::class, 'store']);
    //gallery 7
    Route::get('gallery7/gallery7', [FloraPage4Gallery7Controller::class, 'flora_page4_gallery7_create']);
    Route::post('gallery7', [FloraPage4Gallery7Controller::class, 'store']);
    //gallery 8
    Route::get('gallery8/gallery8', [FloraPage4Gallery8Controller::class, 'flora_page4_gallery8_create']);
    Route::post('gallery8', [FloraPage4Gallery8Controller::class, 'store']);
});
// Flora Page5 galleries
Route::prefix('admin/story/flora/flora_page5')->middleware(['auth', 'isAdmin'])->group(function () {
    //gallery 1
    Route::get('gallery1/gallery1', [FloraPage5Gallery1Controller::class, 'flora_page5_gallery1_create']);
    Route::post('gallery1', [FloraPage5Gallery1Controller::class, 'store']);
    //gallery 2
    Route::get('gallery2/gallery2', [FloraPage5Gallery2Controller::class, 'flora_page5_gallery2_create']);
    Route::post('gallery2', [FloraPage5Gallery2Controller::class, 'store']);
    //gallery 3
    Route::get('gallery3/gallery3', [FloraPage5Gallery3Controller::class, 'flora_page5_gallery3_create']);
    Route::post('gallery3', [FloraPage5Gallery3Controller::class, 'store']);
    //gallery 4
    Route::get('gallery4/gallery4', [FloraPage5Gallery4Controller::class, 'flora_page5_gallery4_create']);
    Route::post('gallery4', [FloraPage5Gallery4Controller::class, 'store']);
    //gallery 5
    Route::get('gallery5/gallery5', [FloraPage5Gallery5Controller::class, 'flora_page5_gallery5_create']);
    Route::post('gallery5', [FloraPage5Gallery5Controller::class, 'store']);
    //gallery 6
    Route::get('gallery6/gallery6', [FloraPage5Gallery6Controller::class, 'flora_page5_gallery6_create']);
    Route::post('gallery6', [FloraPage5Gallery6Controller::class, 'store']);
    //gallery 7
    Route::get('gallery7/gallery7', [FloraPage5Gallery7Controller::class, 'flora_page5_gallery7_create']);
    Route::post('gallery7', [FloraPage5Gallery7Controller::class, 'store']);
    //gallery 8
    Route::get('gallery8/gallery8', [FloraPage5Gallery8Controller::class, 'flora_page5_gallery8_create']);
    Route::post('gallery8', [FloraPage5Gallery8Controller::class, 'store']);
});

//stories Fauna Page
Route::prefix('admin/story')->middleware(['auth', 'isAdmin'])->group(function () {
    Route::get('fauna/fauna_page', [FaunaPageController::class, 'index'])->name('story.fauna.fauna_page');
    Route::post('fauna', [FaunaPageController::class, 'store']);
    Route::delete('fauna/fauna_page{fauna_page_id}', [FaunaPageController::class, 'destroy'])->name('story.fauna.destroy');

    //fauna home page
    Route::get('fauna/fauna_home/fauna_home', [FaunaHomeController::class, 'fauna_home_create']);
    Route::post('fauna/fauna_home', [FaunaHomeController::class, 'store']);


    //fauna page 2
    Route::get('fauna/fauna_page2/fauna_page2', [Page2Controller::class, 'fauna_page2_create']);
    Route::post('fauna/fauna_page2', [Page2Controller::class, 'store']);

    //fauna page 3
    Route::get('fauna/fauna_page3/fauna_page3', [Page3Controller::class, 'index'])->name('story.fauna.fauna_page3.fauna_page3');
    Route::post('fauna/fauna_page3', [Page3Controller::class, 'store']);
    Route::delete('fauna/fauna_page3/{fauna_page3_id}', [Page3Controller::class, 'destroy'])->name('admin.story.fauna.fauna_page3.destroy');

    //fauna page 4
    Route::get('fauna/fauna_page4/fauna_page4', [Page4Controller::class, 'fauna_page4_create']);
    Route::post('fauna/fauna_page4', [Page4Controller::class, 'store']);

    //fauna page 5
    Route::get('fauna/fauna_page5/fauna_page5', [Page5Controller::class, 'index'])->name('story.fauna.fauna_page5.fauna_page5');
    Route::post('fauna/fauna_page5', [Page5Controller::class, 'store']);
    Route::delete('fauna/fauna_page5/{fauna_page5_id}', [Page5Controller::class, 'destroy'])->name('admin.story.fauna.fauna_page5.destroy');

    //fauna page 6
    Route::get('fauna/fauna_page6/fauna_page6', [Page6Controller::class, 'index'])->name('story.fauna.fauna_page6.fauna_page6');
    Route::post('fauna/fauna_page6', [Page6Controller::class, 'store']);
    Route::delete('fauna/fauna_page6/{fauna_page6_id}', [Page6Controller::class, 'destroy'])->name('admin.story.fauna.fauna_page6.destroy');

    //fauna page 7
    Route::get('fauna/fauna_page7/fauna_page7', [Page7Controller::class, 'index'])->name('story.fauna.fauna_page7.fauna_page7');
    Route::post('fauna/fauna_page7', [Page7Controller::class, 'store']);
    Route::delete('fauna/fauna_page7/{fauna_page7_id}', [Page7Controller::class, 'destroy'])->name('admin.story.fauna.fauna_page7.destroy');
});

// Fauna Page3 galleries
Route::prefix('admin/story/fauna/fauna_page3')->middleware(['auth', 'isAdmin'])->group(function () {
    //gallery 1
    Route::get('gallery1/gallery1', [FaunaPage3Gallery1Controller::class, 'fauna_page3_gallery1_create']);
    Route::post('gallery1', [FaunaPage3Gallery1Controller::class, 'store']);
    //gallery 2
    Route::get('gallery2/gallery2', [FaunaPage3Gallery2Controller::class, 'fauna_page3_gallery2_create']);
    Route::post('gallery2', [FaunaPage3Gallery2Controller::class, 'store']);
    //gallery 3
    Route::get('gallery3/gallery3', [FaunaPage3Gallery3Controller::class, 'fauna_page3_gallery3_create']);
    Route::post('gallery3', [FaunaPage3Gallery3Controller::class, 'store']);
    //gallery 4
    Route::get('gallery4/gallery4', [FaunaPage3Gallery4Controller::class, 'fauna_page3_gallery4_create']);
    Route::post('gallery4', [FaunaPage3Gallery4Controller::class, 'store']);
    //gallery 5
    Route::get('gallery5/gallery5', [FaunaPage3Gallery5Controller::class, 'fauna_page3_gallery5_create']);
    Route::post('gallery5', [FaunaPage3Gallery5Controller::class, 'store']);
    //gallery 6
    Route::get('gallery6/gallery6', [FaunaPage3Gallery6Controller::class, 'fauna_page3_gallery6_create']);
    Route::post('gallery6', [FaunaPage3Gallery6Controller::class, 'store']);
});
// Fauna Page5 galleries
Route::prefix('admin/story/fauna/fauna_page5')->middleware(['auth', 'isAdmin'])->group(function () {
    //gallery 1
    Route::get('gallery1/gallery1', [FaunaPage5Gallery1Controller::class, 'fauna_page5_gallery1_create']);
    Route::post('gallery1', [FaunaPage5Gallery1Controller::class, 'store']);
    //gallery 2
    Route::get('gallery2/gallery2', [FaunaPage5Gallery2Controller::class, 'fauna_page5_gallery2_create']);
    Route::post('gallery2', [FaunaPage5Gallery2Controller::class, 'store']);
    //gallery 3
    Route::get('gallery3/gallery3', [FaunaPage5Gallery3Controller::class, 'fauna_page5_gallery3_create']);
    Route::post('gallery3', [FaunaPage5Gallery3Controller::class, 'store']);
    //gallery 4
    Route::get('gallery4/gallery4', [FaunaPage5Gallery4Controller::class, 'fauna_page5_gallery4_create']);
    Route::post('gallery4', [FaunaPage5Gallery4Controller::class, 'store']);
    //gallery 5
    Route::get('gallery5/gallery5', [FaunaPage5Gallery5Controller::class, 'fauna_page5_gallery5_create']);
    Route::post('gallery5', [FaunaPage5Gallery5Controller::class, 'store']);
    //gallery 6
    Route::get('gallery6/gallery6', [FaunaPage5Gallery6Controller::class, 'fauna_page5_gallery6_create']);
    Route::post('gallery6', [FaunaPage5Gallery6Controller::class, 'store']);

    //gallery 7
    Route::get('gallery7/gallery7', [FaunaPage5Gallery7Controller::class, 'fauna_page5_gallery7_create']);
    Route::post('gallery7', [FaunaPage5Gallery7Controller::class, 'store']);
    //gallery 8
    Route::get('gallery8/gallery8', [FaunaPage5Gallery8Controller::class, 'fauna_page5_gallery8_create']);
    Route::post('gallery8', [FaunaPage5Gallery8Controller::class, 'store']);
    //gallery 9
    Route::get('gallery9/gallery9', [FaunaPage5Gallery9Controller::class, 'fauna_page5_gallery9_create']);
    Route::post('gallery9', [FaunaPage5Gallery9Controller::class, 'store']);
    //gallery 10
    Route::get('gallery10/gallery10', [FaunaPage5Gallery10Controller::class, 'fauna_page5_gallery10_create']);
    Route::post('gallery10', [FaunaPage5Gallery10Controller::class, 'store']);
    //gallery 11
    Route::get('gallery11/gallery11', [FaunaPage5Gallery11Controller::class, 'fauna_page5_gallery11_create']);
    Route::post('gallery11', [FaunaPage5Gallery11Controller::class, 'store']);
});

// Fauna Page6 galleries
Route::prefix('admin/story/fauna/fauna_page6')->middleware(['auth', 'isAdmin'])->group(function () {
    //gallery 1
    Route::get('gallery1/gallery1', [FaunaPage6Gallery1Controller::class, 'fauna_page6_gallery1_create']);
    Route::post('gallery1', [FaunaPage6Gallery1Controller::class, 'store']);
    //gallery 2
    Route::get('gallery2/gallery2', [FaunaPage6Gallery2Controller::class, 'fauna_page6_gallery2_create']);
    Route::post('gallery2', [FaunaPage6Gallery2Controller::class, 'store']);
    //gallery 3
    Route::get('gallery3/gallery3', [FaunaPage6Gallery3Controller::class, 'fauna_page6_gallery3_create']);
    Route::post('gallery3', [FaunaPage6Gallery3Controller::class, 'store']);
    //gallery 4
    Route::get('gallery4/gallery4', [FaunaPage6Gallery4Controller::class, 'fauna_page6_gallery4_create']);
    Route::post('gallery4', [FaunaPage6Gallery4Controller::class, 'store']);
    //gallery 5
    Route::get('gallery5/gallery5', [FaunaPage6Gallery5Controller::class, 'fauna_page6_gallery5_create']);
    Route::post('gallery5', [FaunaPage6Gallery5Controller::class, 'store']);
    //gallery 6
    Route::get('gallery6/gallery6', [FaunaPage6Gallery6Controller::class, 'fauna_page6_gallery6_create']);
    Route::post('gallery6', [FaunaPage6Gallery6Controller::class, 'store']);

    //gallery 7
    Route::get('gallery7/gallery7', [FaunaPage6Gallery7Controller::class, 'fauna_page6_gallery7_create']);
    Route::post('gallery7', [FaunaPage6Gallery7Controller::class, 'store']);
    //gallery 8
    Route::get('gallery8/gallery8', [FaunaPage6Gallery8Controller::class, 'fauna_page6_gallery8_create']);
    Route::post('gallery8', [FaunaPage6Gallery8Controller::class, 'store']);
    //gallery 9
    Route::get('gallery9/gallery9', [FaunaPage6Gallery9Controller::class, 'fauna_page6_gallery9_create']);
    Route::post('gallery9', [FaunaPage6Gallery9Controller::class, 'store']);
});
// Fauna Page7 galleries
Route::prefix('admin/story/fauna/fauna_page7')->middleware(['auth', 'isAdmin'])->group(function () {
    //gallery 1
    Route::get('gallery1/gallery1', [FaunaPage7Gallery1Controller::class, 'fauna_page7_gallery1_create']);
    Route::post('gallery1', [FaunaPage7Gallery1Controller::class, 'store']);
    //gallery 2
    Route::get('gallery2/gallery2', [FaunaPage7Gallery2Controller::class, 'fauna_page7_gallery2_create']);
    Route::post('gallery2', [FaunaPage7Gallery2Controller::class, 'store']);
    //gallery 3
    Route::get('gallery3/gallery3', [FaunaPage7Gallery3Controller::class, 'fauna_page7_gallery3_create']);
    Route::post('gallery3', [FaunaPage7Gallery3Controller::class, 'store']);
    //gallery 4
    Route::get('gallery4/gallery4', [FaunaPage7Gallery4Controller::class, 'fauna_page7_gallery4_create']);
    Route::post('gallery4', [FaunaPage7Gallery4Controller::class, 'store']);
    //gallery 5
    Route::get('gallery5/gallery5', [FaunaPage7Gallery5Controller::class, 'fauna_page7_gallery5_create']);
    Route::post('gallery5', [FaunaPage7Gallery5Controller::class, 'store']);
    //gallery 6
    Route::get('gallery6/gallery6', [FaunaPage7Gallery6Controller::class, 'fauna_page7_gallery6_create']);
    Route::post('gallery6', [FaunaPage7Gallery6Controller::class, 'store']);

    //gallery 7
    Route::get('gallery7/gallery7', [FaunaPage7Gallery7Controller::class, 'fauna_page7_gallery7_create']);
    Route::post('gallery7', [FaunaPage7Gallery7Controller::class, 'store']);
    //gallery 8
    Route::get('gallery8/gallery8', [FaunaPage7Gallery8Controller::class, 'fauna_page7_gallery8_create']);
    Route::post('gallery8', [FaunaPage7Gallery8Controller::class, 'store']);
    //gallery 9
    Route::get('gallery9/gallery9', [FaunaPage7Gallery9Controller::class, 'fauna_page7_gallery9_create']);
    Route::post('gallery9', [FaunaPage7Gallery9Controller::class, 'store']);
    //gallery 10
    Route::get('gallery10/gallery10', [FaunaPage7Gallery10Controller::class, 'fauna_page7_gallery10_create']);
    Route::post('gallery10', [FaunaPage7Gallery10Controller::class, 'store']);
});
