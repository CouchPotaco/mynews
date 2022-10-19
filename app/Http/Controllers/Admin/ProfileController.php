<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Profile;

class ProfileController extends Controller
{
    //ここから追記
    public function add()
    {
        return view('admin.profile.create');
    }

    // public function create()
    // {
    //     return redirect('admin/profile/create');
    // }
    
    public function create(Request $request)
    {
        // Validationを行う
        $this->validate($request, Profile::$rules);

        $news = new Profile;
        $form = $request->all();
        
        // フォームから送信されてきた_tokenを削除する
        unset($form['_token']);
        
        // データベースに保存する
        $news->fill($form);
        $news->save();
        
        // admin/profile/createにリダイレクトする
        return redirect('admin/profile/create');
    } 

    public function edit(Request $request)
    {
        // profile Modelからデータを取得する
        $profile = Profile::find($request->id);
        if (empty($profile)) {
            abort(404);
        }
        return view('admin.profile.edit', ['profile_form' => $profile]);
    }

    public function update(Request $request)
    {
        // Validationをかける
        $this->validate($request, Profile::$rules);
        // Profile Modelからデータを取得する
        $profile = Profile::find($request->id);
        // 送信されてきたフォームデータを格納する
        $profile_form = $request->all();
        unset($profile_form['_token']);

        // 該当するデータを上書きして保存する
        $profile->fill($profile_form)->save();  
        
        //return redirect('admin/profile/edit');
        return redirect()->back();
    }
    
    public function delete(Request $request)
    {
        // 該当するNews Modelを取得
        $profile = Profile::find($request->id);

        // 削除する
        $profile->delete();

        return redirect('admin/profile/');
    }      
}
