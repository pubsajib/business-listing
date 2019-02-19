<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\User;

class PagesController extends Controller {
    public function __construct() {
        $this->middleware('auth')->except('dashboard');
    }
    public function index() {
        $user_id = auth()->user()->id;
        $user = User::find($user_id);
        return view('dashboard')->with('listings', $user->listings);
    }
	public function home() {
		return view('home');
	}
	public function dashboard() {
        $user = User::find(auth()->user()->id);
        $listings = $user->listings;
        return view('dashboard', compact('listings'));
	}
}
