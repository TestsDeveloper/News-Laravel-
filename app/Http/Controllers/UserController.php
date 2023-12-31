<?php

namespace App\Http\Controllers;

use App\Http\Requests\PasswordValidation;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Contracts\Cache\Store;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\ProfileStoreRequest;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    //client home
    public function homePage() {
        return view("user.dashboard");
    }

    //admin profile page
    public function adminProfile() {
        return view('admin.myprofile.index');
    }

    // admin profile update
    public function profileUpdate(ProfileStoreRequest $request,$id,User $user){
         $this->oldDeleteImage($user,$id);


        $updateData =$this->profileData($request);

        if($request->hasFile('profile_photo_path')){
            $file =$request->profile_photo_path;
            $imageName = uniqid() ."_profile_image_". $file->getClientOriginalName();
            $storeImage = $file->storeAs('public/profileImage',$imageName);
            $updateData['profile_photo_path'] = $imageName;
        }

        $user->where('id',$id)->update($updateData);

        return back()->with('updateSuccess','You profile update successfully!');


    }


    private function oldDeleteImage($user,$id){
        $oldImage = $user->select('profile_photo_path')
                         ->where('id',$id)
                         ->first();


        if($oldImage['profile_photo_path'] != null){
            Storage::delete('public/profileImage/'. $oldImage['profile_photo_path']);
        }
    }

    public function passwordPage(){
        return view('admin.myprofile.password');
    }

    public function passwordChange(PasswordValidation $request,$id){
       $currentUser =User::where('id',$id)->first();

       $oldValuePassword = $currentUser->password;

       $hasPassword =Hash::make($request->newPassword);


       if(Hash::check($request->oldPassword,$oldValuePassword)){
            User::where('id',$id)->update([
                'password' => $hasPassword
            ]);

             return redirect()->route('admin#profile')->with('passwordSuccess','Your password changed successfully!');
       }else{
        return back()->with("wrong","Your old password is do not match our recorded***");
       }
    }

    public function adminList() {
        return view("admin.adminList.index");
    }

    public function userList() {
        return view("admin.user.index");
    }

    public function contactList() {
        return view("admin.content.index");
    }





    private function profileData($request){
        return [
            'name' => $request->name,
            'email' => $request->email,
            'profile_photo_path' =>$request->profile_photo_path,
            'phone' => $request->phone,
            'address' => $request->address,
        ];
    }
}
