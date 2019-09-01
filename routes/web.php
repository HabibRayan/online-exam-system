<?php

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

Route::get('/test/{year}', function ($year) {
//   dd(random_int(10, 100));
    if($year % 4 == 0) {
        if($year % 100 == 0) {
            if($year % 400 == 0) {
                dd('Leap Year');
            }
            else {
                dd('Not Leap Year');
            }
        }
        else {
            dd('Leap Year');
        }
    }
    else {
        dd('Not Leap Year');
    }


});
Route::get('/demo', function () {
   return Hash::make('11223344');
});

//Auth::routes();
//Route::get()

Route::get('/admin/login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('/admin/login', 'Auth\LoginController@login');

Route::post('/admin/logout', 'Auth\LoginController@logout');
Route::get('/admin/logout', 'Auth\LoginController@showLoginForm')->name('logout');

Route::get('/admin/register', 'Auth\LoginController@showRegistrationForm')->name('register');
Route::post('/admin/register', 'Auth\LoginController@register');

Route::get('/admin/home', 'Admin\AdminController@index')->name('home');
Route::get('/admin/home/see/more/{id}', 'Admin\AdminController@seeMore');

//category
Route::get('/admin/category', 'Admin\CategoryController@index')->name('category');
Route::get('/admin/category/add', 'Admin\CategoryController@categoryAdd');
Route::post('/admin/category/save', 'Admin\CategoryController@categorySave');
Route::get('/admin/category/edit/{id}', 'Admin\CategoryController@categoryEdit')->name('category.edit');
Route::patch('/admin/category/edit/{id}', 'Admin\CategoryController@categoryUpdate');
Route::get('/admin/category/delete/{id}', 'Admin\CategoryController@categoryDelete')->name('category.delete');

//Leson
Route::get('/admin/lesson', 'Admin\LessonController@index')->name('lesson');
Route::get('/admin/lesson/add', 'Admin\LessonController@lessonAdd');
Route::post('/admin/lesson/save', 'Admin\LessonController@lessonSave');
Route::get('/admin/lesson/edit/{id}', 'Admin\LessonController@lessonEdit')->name('lesson.edit');
Route::patch('/admin/lesson/edit/{id}', 'Admin\LessonController@lessonUpdate');
Route::get('/admin/lesson/delete/{id}', 'Admin\LessonController@lessonDelete')->name('lesson.delete');
Route::get('/admin/lesson/view/{lesson}', 'Admin\LessonController@lessonView');


//question
Route::get('/admin/lesson/question', 'Admin\QuestionController@index')->name('question');
Route::get('/admin/lesson/question/add', 'Admin\QuestionController@QuestionAdd')->name('question.add');
Route::post('/admin/question/save', 'Admin\QuestionController@QuestionSave');
Route::get('/admin/question/edit/{id}', 'Admin\QuestionController@QuestionEdit');
Route::get('/admin/question/view/{question}', 'Admin\QuestionController@QuestionView');






//Frontend

Route::get('/', 'Front\FrontController@index');

//register
Route::get('/register', 'Front\RegisterController@register');
Route::post('/register/store', 'Front\RegisterController@registerStore');

//login
Route::get('login', 'Front\LoginController@login');
Route::post('login', 'Front\LoginController@logs');
Route::post('login', 'Front\LoginController@logs');
Route::post('logout', 'Front\LoginController@logout')->name('user.logout');


Route::get('user', 'User\UserController@index')->name('user');
Route::get('user/see/more/{id}', 'User\UserController@seeMore');
Route::get('user/test/{lesson}', 'User\UserController@test');
Route::post('/user/test', 'User\UserController@lessonTest');
Route::get('/user/score', 'User\UserController@lessonTestScore')->name('test.score');
Route::get('/user/question/add/{id}', 'User\UserController@questionAdd');
Route::post('/user/question/store', 'User\UserController@questionStore');
Route::get('/user/question/store/success', 'User\UserController@questionStoreSuccesMessage');




//admin

