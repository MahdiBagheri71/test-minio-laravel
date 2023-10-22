<?php

namespace App\Http\Controllers;

use App\Models\User;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class TestController extends Controller
{
    public function index()
    {

        $user = User::where('email', 'admin@admin.com')->firstOr(function () {
            return User::create([
                'name' => 'admin',
                'email' => 'admin@admin.com',
                'password' => bcrypt('admin'),
            ]);
        });

        if(!$user->getMedia('avatar')->first()) {
            $user->addMediaFromUrl('https://www.clipartmax.com/png/middle/319-3191274_male-avatar-admin-profile.png')
                ->toMediaCollection('avatar');
        }

        $user->getMedia('avatar')->each(function (Media $media){
            echo "<img src=\"{$media->getTemporaryUrl(now()->addMinutes(5))}\">";
        });


        dd($user,);

    }
}
