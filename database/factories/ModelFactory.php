<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

use App\Src\Contactus;
use App\Src\Gallery;
use App\Src\Image;
use App\Src\Category;
use App\Src\Newsletter;
use App\Src\Page;
use App\Src\Post;
use App\Src\Section;
use App\Src\Slider;
use App\Src\User;

$factory->define(App\Src\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'email' => $faker->safeEmail,
        'password' => $password ?: $password = bcrypt('pass'),
        'remember_token' => str_random(10),
        'first_name' => $faker->name,
        'last_name' => $faker->name,
        'avatar' => $faker->imageUrl('300', '300'),
        'mobile' => $faker->phoneNumber,
        'description_ar' => $faker->paragraph(1),
        'description_en' => $faker->paragraph(1),
        'video_link' => $faker->sentence(5),
        'other_link' => $faker->sentence(5),
        'pdf' => $faker->imageUrl(),
        'type' => $faker->randomElement(['NPL', 'IHB','WHATEVER']),
        'gender' => $faker->randomElement(['male', 'female']),
        'active' => $faker->numberBetween(0, 1),
        'membership_id' => $faker->numberBetween(999,99999),
        'subscribed' => $faker->randomElement(['free', 'paid']),
    ];
});


$factory->define(Gallery::class, function (Faker\Generator $faker) {
    return [
        'active' => '1',
        'galleryable_type' => $faker->randomElement(['App\Src\Post', 'App\Src\User', 'App\Src\Page']),
        'galleryable_id' => $faker->numberBetween(1, 30),
        'description_ar' => $faker->paragraph(2),
        'description_en' => $faker->paragraph(2),
    ];
});

$factory->define(Image::class, function (Faker\Generator $faker) {
    return [
        'gallery_id' => Gallery::all()->random()->id,
        'caption_ar' => $faker->sentence(1),
        'caption_en' => $faker->sentence(1),
        'image_url' => $faker->imageUrl(),
    ];
});

$factory->define(Post::class, function (Faker\Generator $faker) {
    return [
        'title_ar' => $faker->name,
        'title_en' => $faker->name,
        'body_ar' => $faker->paragraph(3),
        'body_en' => $faker->paragraph(3),
        'user_id' => '1',
        'image' => $faker->imageUrl()
    ];
});

$factory->define(Category::class, function (Faker\Generator $faker) {
//    'parent_id' => ($i <= 5) ? 0 : Category::doesntHave('parent')->pluck('id')->shuffle()->first(),
    for ($i = 0; $i <= 5; $i++) {
        Category::create(
            [
                'name_ar' => $faker->name,
                'name_en' => $faker->name,
                'parent_id' => 0,
                'menu' => $faker->numberBetween(0, 1)
            ]
        );
    }
    return [
        'name_ar' => $faker->name,
        'name_en' => $faker->name,
        'parent_id' => Category::doesntHave('parent')->pluck('id')->shuffle()->first(),
        'menu' => $faker->numberBetween(0, 1)
    ];
});


$factory->define(Page::class, function (Faker\Generator $faker) {
    return [
        'title_ar' => $faker->sentence(1),
        'title_en' => $faker->sentence(1),
        'category_id' => Category::doesntHave('parent')->pluck('id')->shuffle()->first(),
        'order' => $faker->numberBetween(1, 10),
        'image' => $faker->imageUrl(),
    ];
});


$factory->define(Slider::class, function (Faker\Generator $faker) {
    return [
        'caption_ar' => $faker->sentence(1),
        'caption_en' => $faker->sentence(1),
        'url' => $faker->imageUrl('1900','500'),
        'type' => $faker->randomElement(['image', 'video']),
    ];
});

$factory->define(Newsletter::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->email,
        'active' => $faker->numberBetween(0, 1),
    ];
});


$factory->define(Section::class, function (Faker\Generator $faker) {
    return [
        'header_ar' => $faker->title,
        'header_en' => $faker->title,
        'content_ar' => $faker->paragraph(2),
        'content_en' => $faker->paragraph(2),
        'image' => $faker->imageUrl(),
        'page_id' => Page::doesntHave('sections')->pluck('id')->shuffle()->first(),
    ];
});

$factory->define(Contactus::class, function (Faker\Generator $faker) {
    return [
        'company_name_ar' => $faker->company,
        'company_name_en' => $faker->company,
        'facebook_url' => $faker->url,
        'twitter_url' => $faker->url,
        'instagram_url' => $faker->url,
        'youtube_channel' => $faker->url,
        'phone' => $faker->phoneNumber,
        'mobile' => $faker->phoneNumber,
        'email' => $faker->email,
        'address_ar' => $faker->address,
        'address_en' => $faker->address,
        'latitude' => $faker->latitude,
        'longitude' => $faker->longitude,
        'logo' => $faker->imageUrl(),
    ];
});

