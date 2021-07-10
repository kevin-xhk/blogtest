<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Blogpost;

class BlogController extends Controller
{
    public function users() {
        $context['users'] = User::all();

        return view('users', $context);
    }

    public function user($id) {
        $context['user'] = User::find($id);

        return view('user', $context);
    }

    public function addblogpost(Request $request) {
        $user = auth()->user();
        $blogpost = new Blogpost();
        $blogpost->title = $request->get('title');
        $blogpost->content = $request->get('content');
        $blogpost->user_id = $user->id;
        $blogpost->save();

        return redirect('users');
    }
}
