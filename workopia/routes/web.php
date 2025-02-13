<?php

use Illuminate\Support\Facades\Route;
// use Illuminate\Http\Request;
// use Illuminate\Http\Response;
use App\Http\Controllers\JobController;
use App\Http\Controllers\HomeController;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/jobs', function () {
//     //return '<h1>Available Jobs!</h1>';
//     return view('jobs.index'); // looks for the index file in the jobs folder in the views folder
// })->name('jobs');

// Route::get('/jobs', function () {
//     return view('jobs.index', [
//         'title' => 'Available jobs!', // passes a variable called $title to the view
//     ]);
// })->name('jobs');

// Route::get('/jobs', function () {
//     $title = 'Available jobs:';
//     return view('jobs.index')->with('title', $title); // another way to pass a variable called $title to the view
// })->name('jobs');

// Route::get('/jobs', function () {
//     $title = 'Available jobs:';
//     $jobs = [
//         'Web Developer',
//         'Database Admin',
//         'Software Engineer',
//         'Systems Analyst',
//     ];
//     return view('jobs.index', compact('title', 'jobs')); // passing the variable $title and others to the view
// })->name('jobs');

// Route::get('/jobs', [JobController::class, 'index']);

// Route::get('/jobs/create', function () {
//     return view('jobs.create');
// })->name('jobs.create');

// Route::get('/jobs/create', [JobController::class, 'create']);

// Route::get('/jobs/{id}', [JobController::class, 'show']);

// Route::post('/jobs', [JobController::class, 'store']);

Route::get('/', [HomeController::class, 'index']);
//Route::get('/jobs/share', [JobController::class, 'share']);
Route::resource('jobs', JobController::class);



// Route::get('/posts/{id}', function (string $id) {
//     return 'Post: ' . $id;
// }); //->where('id', '[0-9]+');

// include ->where() to add limitations to the route e.g. id must be a number
// can also use ->whereNumber to limit to numbers only as well

// Global constraints can be added to AppServiceProvider in app/Providers/AppServiceProvider.php in the boot() method

// Route::get('/posts/{id}/comments/{commentId}', function (string $id, string $commentId) {
//     return 'Post: ' . $id . ' and Comment ' . $commentId;
// });

// Route::match(['get', 'post'], '/submit', function () {
//     return 'Submitted!';
// });


// Route::get('/test', function () {
//     $url = route('jobs');
//     return "<a href='$url'>Click here</a>";
// });

// // Sets content to json
// Route::get('/api/users', function () {
//     return [
//         'name' => 'John Doe',
//         'email' => 'john@gmail.com'
//     ];
// });

// Route::get('/test', function (Request $request) {
//     return [
//         'method' => $request->method(),
//         'url' => $request->url(),
//         'path' => $request->path(),
//         'fullUrl' => $request->fullUrl(),
//         'ip' => $request->ip(),
//         'userAgent' => $request->userAgent(),
//         'header' => $request->header(),
//     ];
// });

// Route::get('/users', function (Request $request) {
//     //return $request->query('name'); // returns the value of the query parameter 'name'
//     //return $request->only(['name', 'age']); // returns the values of the query parameters 'name' and 'age'
//     //return $request->all(); // returns all query parameters
//     // return $request->has('name'); // returns true if the query parameter 'name' exists
//     //return $request->input('name'); // returns the value of the query parameter 'name' in url or form data
//     //return $request->input('name', 'default value'); // returns the value of the query parameter 'name' or 'default value' if it doesn't exist
//     return $request->except('name'); // returns all query parameters except 'name'
// });

// Route::get('/test', function () {
//     //return response('hello world');
//     //return response('hello world', 200);
//     //return response('<h1>Hello World</h1>', 200)->header('Content-Type', 'text/plain');
//     //return response()->json(['name' => 'John Doe', 'age' => 30], 200);
//     return response()->json(['name' => 'John Doe'])->cookie('name', 'John Doe');
// });

// Route::get('/notfound', function () {
//     //return response('Page not found', 404); // returns a 404 status code
//     return new Response('Page not found', 404); // returns a 404 status code
// });

// Route::get('/download', function () {
//     return response()->download(public_path('faviconsss.ico'));
//     // public_path is a helper function that returns the path to the public directory
// });

// Route::get('/read-cookie', function (Request $request) {
//     $cookieValue = $request->cookie('name');
//     return response()->json(['cookie' => $cookieValue]);
// });
