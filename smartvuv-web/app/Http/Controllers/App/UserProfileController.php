<?php

namespace App\Http\Controllers\App;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\UserProfile;
use App\Utilities\Devtools;
use PHPUnit\Framework\Exception;

class UserProfileController extends Controller
{
    public function defaultProfile($user_id)
    {
        try
        {

            $newUserProfile = UserProfile::create([
                'user_id' => $user_id,
                'profile_id' => Devtools::getParameterValue('DEFAULT_PROFILE'),
                'register_date' => date('Y-m-d H:i:s'),
                'status_id' => Devtools::getParameterValue('ACTIVE_STATUS')
            ]);

            return $newUserProfile;
        }
        catch(Exception $e)
        {
            return $e->getMessage();
        }

    }
}
