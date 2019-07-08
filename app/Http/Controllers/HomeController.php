<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
    	$user = Auth::user();

    	$todos = $user->todos()->get();
        return view('pages.todo', compact('todos'));
    }

    public function store(Request $request)
    {
		/**
		 * @var User $user
		 */
		$user = Auth::user();

		$user->todos()->create([
			'title' => $request->title,
			'description' => $request->description,
			'dueto' => $request->dueto
		]);
        return response()->json([


            'status' => 'success',
			'todo' => $request->all()
        ]);
    }
}
