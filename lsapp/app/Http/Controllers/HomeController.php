<?php
// namespace App\Models;
namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Post;
use DB;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // $posts = DB::select('SELECT * FROM posts');
        // $posts = Post::all();
        $user_id = auth()->user()->id;
        $user = User::find($user_id);
        return view('home')->with('posts',$user->posts);
    }
}
