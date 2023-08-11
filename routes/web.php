<?php

use App\Events\ChatEvent;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use App\Events\SendMessage;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Controllers\PharmacyController;
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

Route::get('/w', function () {
    
    return view('/welcome');
});
Route::get('/home', [HomeController::class,'redirect']);
Route::get('/', [HomeController::class,'indexs']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('welcome');
Route::get('/add_doctor_view', [AdminController::class,'addview']);

Route::post('/upload_doctor', [AdminController::class,'upload']);
Route::post('/appoinment', [HomeController::class,'appoinment']);
Route::get('/myprofile', [HomeController::class,'profile']);

Route::get('/myappointment', [HomeController::class,'myappointment']);
Route::get('/getappointment', [HomeController::class,'getappointment']);
Route::get('/cansel_appoint/{id}', [HomeController::class,'cansel_appoint']);
Route::get('/showappointment', [AdminController::class,'showappointment']);
Route::get('/approved/{id}', [AdminController::class,'approved']);
Route::get('/canceled/{id}', [AdminController::class,'canceled']);
Route::get('/showdoctors', [AdminController::class,'showdoctors']);
Route::get('/deletedoctor/{id}', [AdminController::class,'deletedoctor']);
Route::get('/updatedoctor/{id}', [AdminController::class,'updatedoctor']);
Route::post('/editedoctor/{id}', [AdminController::class,'editedoctor']);
Route::get('/emailview/{id}', [AdminController::class,'emailview']);
Route::post('/sendemail/{id}', [AdminController::class,'sendemail']);

Route::get('/AddNews', [AdminController::class,'AddNews']);
Route::post('/Add_news', [AdminController::class,'Addn']);

Route::get('/show', [DoctorController::class,'showdata']);
Route::get('/showdata', [DoctorController::class,'show']);

Route::get('/aboutt', function () {
    return view('doctor.about');
});
Route::get('/send-email', [MailController::class,'sendEmail']);
Route::get('/homes', [DoctorController::class,'showadd']);
Route::get('/Checked/{id}', [DoctorController::class,'Checked']);


Route::get('/count', [DoctorController::class,'count']);
/*
Route::get('/chat', [HomeController::class,'chat'])->name('chat');
Route::get('/messages', [HomeController::class,'messages'])->name('messages');
Route::post('/messages', [HomeController::class,'messageStore'])->name('messageStore');*/

Route::get('/chat', function () {
    return view('chat');
});
Route::post('/send_message', function (Request $request) {
    event(
        new SendMessage(
            $request->input('username'),
            $request->input('message')
        ));
        return true;
});
Route::get('/Tests', [MailController::class,'Tests']);
Route::get('/addmedicine/{id}', [DoctorController::class,'addmedicine']);
Route::get('/canceled/{id}', [DoctorController::class,'canceled']);
//Route::post('/addmedicine/{id}', [DoctorController::class,'addmedicine']);
Route::get('/addmedicieneuser', [DoctorController::class,'addmedicieneuser']);
Route::post('/add', [DoctorController::class,'add']);

Route::get('/bill', [PharmacyController::class,'bill']);
Route::get('/addmedicine', [PharmacyController::class,'addmedicine']);
Route::post('/uploaditem', [PharmacyController::class,'uploaditem']);
Route::get('/bill_P/{id}', [PharmacyController::class,'bill_P']);



Route::get('/cartss/{id}', [PharmacyController::class,'cartss']);


Route::delete('/removeItem/{id}', [PharmacyController::class, 'removeFromCart'])->name('remove-from-cart');
Route::patch('/updateQuantity/{id}', [PharmacyController::class, 'updateQuantity'])->name('update-quantity');




Route::post('/addcart/{id}', [PharmacyController::class,'addcart']);
Route::get('add-to-cart/{id}', 'PharmacyController@addToCart');
Route::patch('update-cart', 'PharmacyController@update');
Route::delete('remove-from-cart', 'PharmacyController@remove');

Route::get('/invoice/{id}', [PharmacyController::class,'invoice']);
Route::get('/invoice0/{id}', [PharmacyController::class,'invoice0']);

Route::get('generate-pdf','PdfgenrateController@generatePDF');
Route::get('/search', [PharmacyController::class,'search']);

Route::post('/send', function (Request $request) {
    
       $request->validate([
            'name'=>'required',
            'message'=>'required'
        ]);
        $message =[
            'name' => $request->name,
            'message' => $request->message,

        ];
        ChatEvent::dispatch($message);
});

Route::post('pay', [PaymentController::class, 'pay'])->name('payment');
Route::get('success', [PaymentController::class, 'success']);
Route::get('error', [PaymentController::class, 'error']);

Route::get('/pharmacies', [HomeController::class,'pharmacies']);
Route::get('/doctors', [HomeController::class,'viewdoctors']);

Route::get('/Contact', [HomeController::class,'Contact']);
Route::get('/about', [HomeController::class,'about']);
Route::get('/news', [HomeController::class,'news']);
Route::get('/apointhome', [HomeController::class,'apointhome']);
// Route::get('/myprofile', [HomeController::class,'myprofile']);
// Route::get('/users/{id}', 'DoctorController@show')->name('profile');
Route::get('/user/profile/{id}', 'DoctorController@profile')->name('user.profile');


// Route::post('/user/upload-photo', 'UserController@uploadPhoto')->name('user.uploadPhoto');
// Route::post('/user/upload-photo', [ProfileController::class, 'uploadPhoto'])->name('user.uploadPhoto');




Route::post('/user/upload-photo', 'AdminController@uploadPhoto')->name('user.uploadPhoto');

Route::post('/upload/image', [ProfileController::class, 'uploadImage'])->name('upload.image');
// routes/web.php

// Route::post('/user/upload', [ProfileController::class, 'upload'])->name('user.upload');





Route::post('/user/{id}/upload', 'ProfileController@upload')->name('user.upload');





