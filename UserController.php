<?php

// Question 1:


// Answer: Here's is the code that retrieves the 'name' input field value from the request and stores it in a variable called $name in the store method of the UserController:


namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function store(Request $request)
    {
        $name = $request->input('name');

    }
}

//=======================================================================================================



// Question 2:


//Answer: 

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function store(Request $request)
    {
        $userAgent = $request->header('User-Agent');


    }
}


//=======================================================================================================


// Question 3:


// Answer: 

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function yourApiEndpoint(Request $request)
    {

        $page = $request->query('page', null);


    }
}

//=======================================================================================================

// Question 4:

// Answer: 

$response = [
    'message' => 'Success',
    'data' => [
        'name' => 'John Doe',
        'age' => 25
    ]
];

return response()->json($response);


//=======================================================================================================


// Question 5:


// Answer: 


namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function handleFileUpload(Request $request)
    {
        if ($request->hasFile('avatar')) {
            $file = $request->file('avatar');
            $fileName = $file->getClientOriginalName();
            $file->storeAs('public/uploads', $fileName);
        
        
         return response()->json(['message' => 'File uploaded successfully']);
        }

        return response()->json(['message' => 'No file uploaded'], 400);
    }
}



//=======================================================================================================


// Question 6:


// Answer: 

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function yourControllerMethod(Request $request)
    {
        $rememberToken = $request->cookie('remember_token', null);

    }
}



//=======================================================================================================

// Question 7:


// Answer: 

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('/submit', function (Request $request) {

    $email = $request->input('email');

    return response()->json([
        'success' => true,
        'message' => 'Form submitted successfully.'
    ]);
});



//  ===========  Thanks  =================
















