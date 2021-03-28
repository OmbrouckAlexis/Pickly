<?php

namespace App\Http\Controllers;

namespace App\Http\Controllers;
use App\Models\Song;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class FirstController extends Controller
{
    public function index(){
		$songs = Song::All();
		return view("firstcontroller.index", ['songs' => $songs]);
	}
	
	public function user($id){
		$user = User::findorfail($id);
		return view("firstcontroller.user", ["user" => $user]);
	}

	public function changeLike($id) {
        Auth::user()->ILikeThem()->toggle($id);
        return back();//->with('toastr', ["status"=>"success", "message" => "Modification du suivi"]);
    }

	public function img($id) {
		$img = Song::findorfail($id);
        return view("firstcontroller.img", ["img" => $img]);
    }

	public function like($id) {
		$img = Song::findorfail($id);
		$iduser = Auth::user();
		$img->ILike()->toggle($iduser);
		$img->votes = $img->ILike()->count();
		$img->save();
        return back();
	}

	public function suivre($id) {
		$user = User::findorfail($id);
		Auth::user()->ILikeThem()->toggle($id);
		return back();
	}

	public function search($search) {
		$users = User::whereRaw("name LIKE CONCAT(?, '%')", [$search])->orderBy('id', 'desc')->get();
		$songs = Song::whereRaw("title LIKE CONCAT('%', ?, '%')", [$search])->orderBy('votes', 'desc')->get();
        return view("firstcontroller.search", ["search" => $search , "users" => $users , "songs" => $songs]);
    }
}
?>