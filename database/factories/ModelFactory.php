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

use App\Models\Album;
use App\Models\Contactus;
use App\Models\Gallery;
use App\Models\Image;
use App\Models\Category;
use App\Models\Newsletter;
use App\Models\Page;
use App\Models\Post;
use App\Models\Section;
use App\Models\Slider;
use App\Models\User;
use App\Review;
use Illuminate\Support\Facades\DB;

$factory->define(App\Models\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'email' => $faker->safeEmail,
        'password' => $password ?: $password = bcrypt('password'),
        'remember_token' => str_random(10),
        'first_name' => $faker->name,
        'last_name' => $faker->name,
        'avatar' => $faker->imageUrl('300', '300'),
        'country' => $faker->country,
        'mobile' => $faker->phoneNumber,
        'description_ar' => $faker->paragraph(1),
        'description_en' => $faker->paragraph(1),
        'video_link' => $faker->sentence(5),
        'other_link' => $faker->sentence(5),
        'pdf' => $faker->imageUrl(),
        'graduation_year' => $faker->year,
        'gender' => $faker->randomElement(['male', 'female']),
        'type' => $faker->randomElement(['trainer', 'assistant', 'master']),
        'ibnlp' => $faker->numberBetween(0,1),
        'ibh' => $faker->numberBetween(0,1),
        'active' => 1,
        'membership_id' => $faker->numberBetween(999, 99999).$faker->randomLetter,
        'subscribed' => $faker->numberBetween(0, 1),
        'featured' => $faker->numberBetween(0, 1),
    ];
});


$factory->define(Gallery::class, function (Faker\Generator $faker) {
    return [
        'galleryable_type' => $faker->randomElement(['App\Models\Post', 'App\Models\User', 'App\Models\Page', 'App\Models\Album']),
        'galleryable_id' => $faker->numberBetween(1, 30),
        'active' => '1',
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
        'cover' => 0,
    ];
});

$factory->define(Album::class, function (Faker\Generator $faker) {
    return [
        'active' => '1',
        'description_ar' => $faker->paragraph(2),
        'description_en' => $faker->paragraph(2),
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
                'name_ar' => $faker->word,
                'name_en' => $faker->word,
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
        'title_ar' => $faker->word(),
        'title_en' => $faker->word(),
        'category_id' => Category::doesntHave('parent')->pluck('id')->shuffle()->first(),
        'order' => $faker->numberBetween(1, 10),
        'image' => $faker->imageUrl(),
    ];
});


$factory->define(Slider::class, function (Faker\Generator $faker) {
    return [
        'caption_ar' => $faker->sentence(1),
        'caption_en' => $faker->sentence(1),
        'url' => $faker->url,
        'image' => $faker->imageUrl('1900', '500'),
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
        'image' => 'storage/uploads/images/tmp.png',
        'page_id' => (is_null(Page::doesntHave('sections'))) ?
            Page::doesntHave('sections')->pluck('id')->shuffle()->first()
            : $faker->numberBetween(1, 30),
        'type' => $faker->randomElement(['a','b','c'])
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


