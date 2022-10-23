<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profile;

class ProfileController extends Controller
{
    public function index(Request $request)
    {
        //$profileData = Profile::all()->sortByDesc('updated_at');
        $profileData = Profile::all();

        // if (count($posts) > 0) {
        //     $headline = $profile->shift();
        // } else {
        //     $headline = null;
        // }

        // profile/index.blade.php ファイルを渡している
        // \View テンプレートに profDataという変数を渡している
        return view('profile.index', ['profData' => $profileData,]);
    }
}
