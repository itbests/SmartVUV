<?php

namespace App\Http\Controllers\App;

use App\Http\Controllers\Controller;
use App\Models\Menu;
use App\Models\Dashboard;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $infoMenu = [];
        $menu = new Menu;
        $infoMenu = $menu->getInfoMenu('home');

        $data_Dashboard = [];
        $dashboard = new Dashboard();
        $data_Dashboard = $dashboard->getDataDashboard();

        return view('app.index', ['data_dashboard' => $data_Dashboard, 'infoMenu' => $infoMenu]);
    }

    public function dashboard(){

        $infoMenu = [];
        $menu = new Menu;
        $infoMenu = $menu->getInfoMenu('home');

        $data_Dashboard = [];
        $dashboard = new Dashboard();
        $data_Dashboard = $dashboard->getDataDashboard();

        return view('app.dashboard', ['data_dashboard' => $data_Dashboard, 'infoMenu' => $infoMenu]);
    }

    public function LoginOtherBrowser(){
        return view('app.LoginOtherBrowser');
    }

    public function LogoutByLoginOtherBrowser(Request $request){
        $request->session()->flush();
        return view('/welcome')->with(Auth::Logout());
    }
}
