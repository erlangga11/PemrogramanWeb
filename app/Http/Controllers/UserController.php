<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\User;
use PDF;
use Illuminate\Support\Facades\Gate;
class UserController extends Controller
{
    public function __invoke($id){
        $user = \App\User::find($id);
        $user = json_decode(json_encode($users));
        return view('user', ['users'=>$users], ['id'=>$id]);
    }
    public function index(){
        $users = User::all();
        return view('user',['users' => $users]);
    }

    public function edit($id){
    $users = user::find($id);
    return view('edituser',['users'=>$users]);
    }

    public function update($id, Request $request){
    $user = User::find($id);
    $user->name = $request->name;
    $user->email = $request->email;
    if($user->profil_pict && file_exists(storage_path('public/' . $user->profil_pict)))
    { \Storage::delete('public/'.$user->profil_pict);}
    $image_name = $request->file('image')->store('images', 'public');
    $user->profil_pict = $image_name;
    $user->save();
    return redirect('/user');
    }

    public function delete($id){
    $user = user::find($id);
    $user->delete();
    return redirect('/user');
    }

    public function cetak_pdf(){
        $user = User::all();
        $pdf = PDF::loadview('user_pdf',['user'=>$user]);
        return $pdf->stream();
       }   
}