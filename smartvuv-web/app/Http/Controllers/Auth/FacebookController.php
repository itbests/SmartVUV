<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use Exception;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\App\UserProfileController;
use App\Utilities\Devtools;
use App\Utilities\Sessiontools;

class FacebookController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function redirectToFacebook()
    {
        return Socialite::driver('facebook')->redirect();
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function handleFacebookCallback()
    {
        try {

            $user = Socialite::driver('facebook')->user();

            $finduser = User::where('social_id', $user->id)->first();

            if($finduser){

                Auth::login($finduser);

                Sessiontools::sessionRegister();

                return redirect()->intended('app');

            }else{
                Devtools::beginTransaction();
                $newUser = User::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'social_id'=> $user->id,
                    'profile_photo_path'=> $user->avatar,
                    'password' => encrypt('123456dummy')
                ]);

                $newUserProfile = new UserProfileController;
                $newUserProfile->defaultProfile($newUser->id);

                Auth::login($newUser);
                Devtools::commit();

                Sessiontools::sessionRegister();

                return redirect()->intended('app');
            }

        } catch (Exception $e) {
            Devtools::rollback();
            dd($e->getMessage());
        }
    }
}
