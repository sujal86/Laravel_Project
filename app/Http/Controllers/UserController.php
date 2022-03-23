<?php 
    namespace App\Http\Controllers;

    use App\User;
    use Illuminate\Support\Facades\DB;
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Storage;
    use session;

    class UserController extends Controller 
    {
        public function uploadAvatar(Request $request) 
        {
           if ($request->hasFile('image')) {
                User::uploadAvatar($request->image);
                return redirect()->back()->with('message', 'Image uploaded');
           }
           
           return redirect()->back()->with('error', 'Image not uploaded');

            
        }

        public function index()
        { 
            # code...
        }

    }





?>