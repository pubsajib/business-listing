<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Listing;

class ListingsController extends Controller{

    public function __construct(){
        $this->middleware('auth', ['except' => ['index', 'show']]);
    }
    public function index() {
        $listings = Listing::orderBy('created_at', 'desc')->get();
        return view('listings.index')->with('listings', $listings);
    }
    public function create() {
        return view('listings.create');
    }
    public function store(Request $request) {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'email'
        ]);

        // Create listing
        $listing = new Listing;
        $listing->name = $request->input('name');
        $listing->website = $request->input('website');
        $listing->email = $request->input('email');
        $listing->phone = $request->input('phone');
        $listing->address = $request->input('address');
        $listing->bio = $request->input('bio');
        $listing->user_id = auth()->user()->id;

        $listing->save();
        flash('Listing Added')->success()->important();
        return redirect('/dashboard')->with('success', 'Listing Added');
    }
    public function show($id) {
        $listing = Listing::find($id);
        return view('listings.show')->with('listing', $listing);
    }
    public function edit($id)
    {
        $listing = Listing::find($id);
        return view('listings.edit', compact('listing'));
    }
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'email'
        ]);

        // Create listing
        $listing = Listing::find($id);
        $listing->name = $request->input('name');
        $listing->website = $request->input('website');
        $listing->email = $request->input('email');
        $listing->phone = $request->input('phone');
        $listing->address = $request->input('address');
        $listing->bio = $request->input('bio');
        $listing->user_id = auth()->user()->id;

        $listing->save();
        flash('Listing Updated')->success()->important();
        return redirect('/dashboard');
    }
    public function destroy($id)
    {
        $listing = Listing::find($id);
        $listing->delete();
        flash('Listing Removed')->success()->important();
        return redirect('/dashboard');
    }
}
