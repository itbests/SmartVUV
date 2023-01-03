<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\App\MenuController;
use Illuminate\Support\Facades\Lang;
use Symfony\Component\HttpFoundation\Session\Session;

class Menu extends Model
{
    use HasFactory;

    protected $table = 'menu';
    public $timestamps = false;

    public static function getDataMenu()
    {
        $menuAll = [];
        $menuJson = session('menuUser');

        if ( is_null($menuJson) ) {
            $menu = new MenuController;
            $user = User::find(Auth::user()->id);
            $profile = $user->profile;

            foreach ($profile as $user_profile) {
                $data = $menu->optionsMenu($user_profile->attributes['profile_id'], -99);
                $line = $data[0];
                $item = [ array_merge($line, ['submenu' => $menu->getChildren($data, $line)]) ];
                $menuAll = array_merge($menuAll, $item);
            }

            $menuJson = json_encode($menuAll);
            session(['menuUser' => $menuJson]);
        } else {
            $menuAll = json_decode($menuJson, TRUE);
        }

        return $menuAll;
    }

    public static function getInfoMenu($link_command)
    {
        $link_command_home = 'home';

        if ( $link_command == $link_command_home ) {
            $data_menu['name_'] = Lang::get('dashboard.dashboard');
            $data_menu['display_name'] = Lang::get('dashboard.dashboard');
            $data_menu['tooltip'] = Lang::get('dashboard.tooltip');
            $data_menu['breadcrumb'] = Lang::get('dashboard.breadcrumb');
            $menu = $data_menu;
        }
        else {
            $data_menu = Menu::where('link_command', '=', $link_command)->get();
            $menu = $data_menu[0]->attributes;
        }
        return $menu;
    }
}
