<?php

namespace App\Providers;

use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Event;
use JeroenNoten\LaravelAdminLte\Events\BuildingMenu;
use App\Utilities\Sessiontools;
use App\Models\Menu;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */

    public $strOptionType1 = [];

    protected $listen = [
        Registered::class => [
            SendEmailVerificationNotification::class,
        ],
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        Event::listen(BuildingMenu::class, function (BuildingMenu $event) {

            $menuProcess = Menu::getDataMenu();
            $this->getDataMenu($event, $menuProcess);
        });
    }

    private function getDataMenu($event, Array $menu) {
        foreach($menu as $menuItem) {
            if($menuItem['menu_dad_id'] == -99){
                $event->menu->addAfter('main_navigation', [
                    'key' => $menuItem['id'],
                    'text' => $menuItem['display_name'],
                    'url' => $menuItem['link_command'],
                    'icon' => $menuItem['image_icon']
                ]);

                if($menuItem['submenu'] != []) {
                    $this->getDataMenu($event, $menuItem['submenu']);
                }
            } else {
                $event->menu->addIn($menuItem['menu_dad_id'], [
                        'key' => $menuItem['id'],
                        'text' => $menuItem['display_name'],
                        'url' => $menuItem['link_command'],
                        'icon' => $menuItem['image_icon']
                    ]
                );

                if($menuItem['submenu'] != []) {
                    $this->getDataMenu($event, $menuItem['submenu']);
                }
            }
        }
    }

}
