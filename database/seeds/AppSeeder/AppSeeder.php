<?php
namespace database\seeds\AppSeeder;

use Illuminate\Database\Seeder;
use DB;

class AppSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::insert('INSERT INTO "peoples" ("name", "text", "position", "image") VALUES ("?","?","?","?")',
       	[
       		'name' => 'Tom Rensed',
       		'position' => 'Chief Executive Officer',
       		'image' => 'team_pic1.jpg',
       		'text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'
       	],
       	[
       		'name' => 'Kathren Mory',
       		'position' => 'Vice President',
       		'image' => 'team_pic2.jpg',
       		'text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'
       	],
       	[
       		'name' => 'Lancer Jack',
       		'position' => 'Senior Manager',
       		'image' => 'team_pic3.jpg',
       		'text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'
       	]
       ) ;
       DB::insert('INSERT INTO "portfolios" ("name", "image", "filter") VALUES ("?","?","?")',
       	[
       		'name' => 'Finance App',
       		'image' => 'portfolio_pic2.jpg',
       		'filter' => 'GPS'
       	],
       	[
       		'name' => 'Concept',
       		'image' => 'portfolio_pic3.jpg',
       		'filter' => 'design'
       	],
       	[
       		'name' => 'Shopping',
       		'image' => 'portfolio_pic4.jpg',
       		'filter' => 'android'
       	],
       	[
       		'name' => 'Managment',
       		'image' => 'portfolio_pic5.jpg',
       		'filter' => 'design'
       	],
       	[
       		'name' => 'IPhone',
       		'image' => 'portfolio_pic6.jpg',
       		'filter' => 'web'
       	],
       	[
       		'name' => 'Nexus Phone',
       		'image' => 'portfolio_pic7.jpg',
       		'filter' => 'web'
       	],
       	[
       		'name' => 'Android',
       		'image' => 'portfolio_pic8.jpg',
       		'filter' => 'android'
       	]
       );
       DB::insert('INSERT INTO "services" ("name", "text", "icon") VALUES ("?","?","?")',
       	[
       		'name' => 'Android',
       		'text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
       		'icon' => 'fa-android'
       	],
       	[
       		'name' => 'Apple IOS',
       		'text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
       		'icon' => 'fa-apple'
       	],
       	[
       		'name' => 'Design',
       		'text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
       		'icon' => 'fa-dropbox'
       	],
       	[
       		'name' => 'Concept',
       		'text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
       		'icon' => 'fa-html5'
       	],
       	[
       		'name' => 'User Research',
       		'text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
       		'icon' => 'fa-slack'
       	],
       	[
       		'name' => 'User Experience',
       		'text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
       		'icon' => 'fa-users'
       	]

       );
      DB::insert('INSERT INTO "pages" ("name", "alias", "text", "images") VALUES ("?","?","?","?")',
       	[
       		'name' => 'home',
       		'alias' => 'home',
       		'text' => '<h2>We create<strong>awesome</strong> web templates</h2><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>',
       		'images' => 'main_device_image.png'
       	],
       	[
       		'name' => 'about us',
       		'alias' => 'aboutUs',
       		'text' => '<h3>>Lorem ipsum dolor sit amet, consectetur adipiscing elit</h3><br><p>>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p><br><p>>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>',
       		'images' => 'about-img.jpg'
       	]
       );
    }
}
