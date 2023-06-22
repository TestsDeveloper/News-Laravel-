<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Contracts\Cache\Store;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\ProfileStoreRequest;

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

    public function adminList() {
        return view("admin.adminList.index");
    }

    public function userList() {
        return view("admin.user.index");
    }

    public function contactList() {
        return view("admin.content.index");
    }

    private function oldDeleteImage($user,$id){
        $oldImage = $user->select('profile_photo_path')
                         ->where('id',$id)
                         ->first();


        if($oldImage['profile_photo_path'] != null){
            Storage::delete('public/profileImage/'. $oldImage['profile_photo_path']);
        }
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
