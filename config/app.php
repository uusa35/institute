<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Application Name
    |--------------------------------------------------------------------------
    |
    | This value is the name of your application. This value is used when the
    | framework needs to place the application's name in a notification or
    | any other location as required by the application or its packages.
    */

    'name' => 'International Consulting Training Institute',

    /*
    |--------------------------------------------------------------------------
    | Application Environment
    |--------------------------------------------------------------------------
    |
    | This value determines the "environment" your application is currently
    | running in. This may determine how you prefer to configure various
    | services your application utilizes. Set this in your ".env" file.
    |
    */

    'env' => env('APP_ENV', 'production'),

    /*
    |--------------------------------------------------------------------------
    | Application Debug Mode
    |--------------------------------------------------------------------------
    |
    | When your application is in debug mode, detailed error messages with
    | stack traces will be shown on every error that occurs within your
    | application. If disabled, a simple generic error page is shown.
    |
    */

    'debug' => env('APP_DEBUG', false),

    /*
    |--------------------------------------------------------------------------
    | Application URL
    |--------------------------------------------------------------------------
    |
    | This URL is used by the console to properly generate URLs when using
    | the Artisan command line tool. You should set this to the root of
    | your application so that it is used when running Artisan tasks.
    |
    */

    'url' => env('APP_URL', 'http://ibh-ibnlp.com'),

    /*
    |--------------------------------------------------------------------------
    | Application Timezone
    |--------------------------------------------------------------------------
    |
    | Here you may specify the default timezone for your application, which
    | will be used by the PHP date and date-time functions. We have gone
    | ahead and set this to a sensible default for you out of the box.
    |
    */

    'timezone' => 'UTC',

    /*
    |--------------------------------------------------------------------------
    | Application Locale Configuration
    |--------------------------------------------------------------------------
    |
    | The application locale determines the default locale that will be used
    | by the translation service provider. You are free to set this value
    | to any of the locales which will be supported by the application.
    |
    */

    'locale' => 'ar',

    /*
    |--------------------------------------------------------------------------
    | Application Fallback Locale
    |--------------------------------------------------------------------------
    |
    | The fallback locale determines the locale to use when the current one
    | is not available. You may change the value to correspond to any of
    | the language folders that are provided through your application.
    |
    */

    'fallback_locale' => 'en',

    /*
    |--------------------------------------------------------------------------
    | Encryption Key
    |--------------------------------------------------------------------------
    |
    | This key is used by the Illuminate encrypter service and should be set
    | to a random, 32 character string, otherwise these encrypted strings
    | will not be safe. Please do this before deploying an application!
    |
    */

    'key' => env('APP_KEY'),

    'cipher' => 'AES-256-CBC',

    /*
    |--------------------------------------------------------------------------
    | Logging Configuration
    |--------------------------------------------------------------------------
    |
    | Here you may configure the log settings for your application. Out of
    | the box, Laravel uses the Monolog PHP logging library. This gives
    | you a variety of powerful log handlers / formatters to utilize.
    |
    | Available Settings: "single", "daily", "syslog", "errorlog"
    |
    */

    'log' => env('APP_LOG', 'single'),

    'log_level' => env('APP_LOG_LEVEL', 'debug'),

    /*
    |--------------------------------------------------------------------------
    | Autoloaded Service Providers
    |--------------------------------------------------------------------------
    |
    | The service providers listed here will be automatically loaded on the
    | request to your application. Feel free to add your own services to
    | this array to grant expanded functionality to your applications.
    |
    */

    'providers' => [

        /*
         * Laravel Framework Service Providers...
         */
        Illuminate\Auth\AuthServiceProvider::class,
        Illuminate\Broadcasting\BroadcastServiceProvider::class,
        Illuminate\Bus\BusServiceProvider::class,
        Illuminate\Cache\CacheServiceProvider::class,
        Illuminate\Foundation\Providers\ConsoleSupportServiceProvider::class,
        Illuminate\Cookie\CookieServiceProvider::class,
        Illuminate\Database\DatabaseServiceProvider::class,
        Illuminate\Encryption\EncryptionServiceProvider::class,
        Illuminate\Filesystem\FilesystemServiceProvider::class,
        Illuminate\Foundation\Providers\FoundationServiceProvider::class,
        Illuminate\Hashing\HashServiceProvider::class,
        Illuminate\Mail\MailServiceProvider::class,
        Illuminate\Notifications\NotificationServiceProvider::class,
        Illuminate\Pagination\PaginationServiceProvider::class,
        Illuminate\Pipeline\PipelineServiceProvider::class,
        Illuminate\Queue\QueueServiceProvider::class,
        Illuminate\Redis\RedisServiceProvider::class,
        Illuminate\Auth\Passwords\PasswordResetServiceProvider::class,
        Illuminate\Session\SessionServiceProvider::class,
        Illuminate\Translation\TranslationServiceProvider::class,
        Illuminate\Validation\ValidationServiceProvider::class,
        Illuminate\View\ViewServiceProvider::class,

        /*
         * Package Service Providers...
         */

        //

        /*
         * Application Service Providers...
         */
        App\Providers\AppServiceProvider::class,
        App\Providers\AuthServiceProvider::class,
        // App\Providers\BroadcastServiceProvider::class,
        App\Providers\EventServiceProvider::class,
        App\Providers\RouteServiceProvider::class,
        App\Providers\ComposerServiceProvider::class,
        // debugger
        Barryvdh\Debugbar\ServiceProvider::class,
        // ide helper for debugging
        Barryvdh\LaravelIdeHelper\IdeHelperServiceProvider::class,
        // collecative HTML , Form
        Collective\Html\HtmlServiceProvider::class,
        // translation
        /*
         * php artisan import first
         * php artisan find (will be saved in the db but still will not appear unless public
         * public from the package view
         * */
        Barryvdh\TranslationManager\ManagerServiceProvider::class,
        Intervention\Image\ImageServiceProvider::class,
        // mailchaimp newsletter
        Spatie\Newsletter\NewsletterServiceProvider::class,


    ],

    /*
    |--------------------------------------------------------------------------
    | Class Aliases
    |--------------------------------------------------------------------------
    |
    | This array of class aliases will be registered when this application
    | is started. However, feel free to register as many as you wish as
    | the aliases are "lazy" loaded so they don't hinder performance.
    |
    */

    'aliases' => [

        'App' => Illuminate\Support\Facades\App::class,
        'Artisan' => Illuminate\Support\Facades\Artisan::class,
        'Auth' => Illuminate\Support\Facades\Auth::class,
        'Blade' => Illuminate\Support\Facades\Blade::class,
        'Cache' => Illuminate\Support\Facades\Cache::class,
        'Config' => Illuminate\Support\Facades\Config::class,
        'Cookie' => Illuminate\Support\Facades\Cookie::class,
        'Crypt' => Illuminate\Support\Facades\Crypt::class,
        'DB' => Illuminate\Support\Facades\DB::class,
        'Eloquent' => Illuminate\Database\Eloquent\Model::class,
        'Event' => Illuminate\Support\Facades\Event::class,
        'File' => Illuminate\Support\Facades\File::class,
        'Gate' => Illuminate\Support\Facades\Gate::class,
        'Hash' => Illuminate\Support\Facades\Hash::class,
        'Lang' => Illuminate\Support\Facades\Lang::class,
        'Log' => Illuminate\Support\Facades\Log::class,
        'Mail' => Illuminate\Support\Facades\Mail::class,
        'Notification' => Illuminate\Support\Facades\Notification::class,
        'Password' => Illuminate\Support\Facades\Password::class,
        'Queue' => Illuminate\Support\Facades\Queue::class,
        'Redirect' => Illuminate\Support\Facades\Redirect::class,
        'Redis' => Illuminate\Support\Facades\Redis::class,
        'Request' => Illuminate\Support\Facades\Request::class,
        'Response' => Illuminate\Support\Facades\Response::class,
        'Route' => Illuminate\Support\Facades\Route::class,
        'Schema' => Illuminate\Support\Facades\Schema::class,
        'Session' => Illuminate\Support\Facades\Session::class,
        'Storage' => Illuminate\Support\Facades\Storage::class,
        'URL' => Illuminate\Support\Facades\URL::class,
        'Validator' => Illuminate\Support\Facades\Validator::class,
        'View' => Illuminate\Support\Facades\View::class,
        'Form' => Collective\Html\FormFacade::class,
        'Html' => Collective\Html\HtmlFacade::class,
        'Image' => Intervention\Image\Facades\Image::class,
        'Newsletter' => Spatie\Newsletter\NewsletterFacade::class,
    ],

    'countriesList' => [
        "Afghanistan" => "Afghanistan",
        "Albani" => "Albania",
        "Algeria" => "Algeria",
        "American Samoa" => "American Samoa",
        "Andorra" => "Andorra",
        "Angola" => "Angola",
        "Anguilla" => "Anguilla",
        "Antarctica" => "Antarctica",
        "Antigua and Barbuda" => "Antigua and Barbuda",
        "Argentina" => "Argentina",
        "Armenia" => "Armenia",
        "Aruba" => "Aruba",
        "Australia" => "Australia",
        "Austria" => "Austria",
        "Azerbaijan" => "Azerbaijan",
        "Bahamas" => "Bahamas",
        "Bahrain" => "Bahrain",
        "Bangladesh" => "Bangladesh",
        "Barbados" => "Barbados",
        "Belarus" => "Belarus",
        "Belgium" => "Belgium",
        "Belize" => "Belize",
        "Benin" => "Benin",
        "Bermuda" => "Bermuda",
        "Bhutan" => "Bhutan",
        "Bolivia" => "Bolivia",
        "Bosnia and Herzegowina" => "Bosnia and Herzegowina",
        "Botswana" => "Botswana",
        "Bouvet Island" => "Bouvet Island",
        "Brazil" => "Brazil",
        "British Indian Ocean Territory" => "British Indian Ocean Territory",
        "Brunei Darussalam" => "Brunei Darussalam",
        "Bulgaria" => "Bulgaria",
        "Burkina Faso" => "Burkina Faso",
        "Burundi" => "Burundi",
        "Cambodia" => "Cambodia",
        "Cameroon" => "Cameroon",
        "Canada" => "Canada",
        "Cape Verde" => "Cape Verde",
        "Cayman Islands" => "Cayman Islands",
        "Central African Republic" => "Central African Republic",
        "Chad" => "Chad",
        "Chile" => "Chile",
        "China" => "China",
        "Christmas Island" => "Christmas Island",
        "Cocos (Keeling) Islands" => "Cocos (Keeling) Islands",
        "Colombia" => "Colombia",
        "Comoros" => "Comoros",
        "Congo" => "Congo",
        "Congo, the Democratic Republic of the" => "Congo, the Democratic Republic of the",
        "Cook Islands" => "Cook Islands",
        "Costa Rica" => "Costa Rica",
        "Cote d'Ivoire" => "Cote d'Ivoire",
        "Croatia (Hrvatska)" => "Croatia (Hrvatska)",
        "Cuba" => "Cuba",
        "Cyprus" => "Cyprus",
        "Czech Republic" => "Czech Republic",
        "Denmark" => "Denmark",
        "Djibouti" => "Djibouti",
        "Dominica" => "Dominica",
        "Dominican Republic" => "Dominican Republic",
        "East Timor" => "East Timor",
        "Ecuador" => "Ecuador",
        "Egypt" => "Egypt",
        "El Salvador" => "El Salvador",
        "Equatorial Guinea" => "Equatorial Guinea",
        "Eritrea" => "Eritrea",
        "Estonia" => "Estonia",
        "Ethiopia" => "Ethiopia",
        "Falkland Islands (Malvinas)" => "Falkland Islands (Malvinas)",
        "Faroe Islands" => "Faroe Islands",
        "Fiji" => "Fiji",
        "Finland" => "Finland",
        "France" => "France",
        "France Metropolitan" => "France Metropolitan",
        "French Guiana" => "French Guiana",
        "French Polynesia" => "French Polynesia",
        "French Southern Territories" => "French Southern Territories",
        "Gabon" => "Gabon",
        "Gambia" => "Gambia",
        "Georgia" => "Georgia",
        "Germany" => "Germany",
        "Ghana" => "Ghana",
        "Gibraltar" => "Gibraltar",
        "Greece" => "Greece",
        "Greenland" => "Greenland",
        "Grenada" => "Grenada",
        "Guadeloupe" => "Guadeloupe",
        "Guam" => "Guam",
        "Guatemala" => "Guatemala",
        "Guinea" => "Guinea",
        "Guinea-Bissau" => "Guinea-Bissau",
        "Guyana" => "Guyana",
        "Haiti" => "Haiti",
        "Heard and Mc Donald Islands" => "Heard and Mc Donald Islands",
        "Holy See (Vatican City State)" => "Holy See (Vatican City State)",
        "Honduras" => "Honduras",
        "Hong Kong" => "Hong Kong",
        "Hungary" => "Hungary",
        "Iceland" => "Iceland",
        "India" => "India",
        "Indonesia" => "Indonesia",
        "Iran (Islamic Republic of)" => "Iran (Islamic Republic of)",
        "Iraq" => "Iraq",
        "Ireland" => "Ireland",
        "Israel" => "Israel",
        "Italy" => "Italy",
        "Jamaica" => "Jamaica",
        "Japan" => "Japan",
        "Jordan" => "Jordan",
        "Kazakhstan" => "Kazakhstan",
        "Kenya" => "Kenya",
        "Kiribati" => "Kiribati",
        "Korea, Democratic People's Republic of" => "Korea, Democratic People's Republic of",
        "Korea, Republic of" => "Korea, Republic of",
        "Kuwait" => "Kuwait",
        "Kyrgyzstan" => "Kyrgyzstan",
        "Lao, People's Democratic Republic" => "Lao, People's Democratic Republic",
        "Latvia" => "Latvia",
        "Lebanon" => "Lebanon",
        "Lesotho" => "Lesotho",
        "Liberia" => "Liberia",
        "Libyan Arab Jamahiriya" => "Libyan Arab Jamahiriya",
        "Liechtenstein" => "Liechtenstein",
        "Lithuania" => "Lithuania",
        "Luxembourg" => "Luxembourg",
        "Macau" => "Macau",
        "Macedonia, The Former Yugoslav Republic of" => "Macedonia, The Former Yugoslav Republic of",
        "Madagascar" => "Madagascar",
        "Malawi" => "Malawi",
        "Malaysia" => "Malaysia",
        "Maldives" => "Maldives",
        "Mali" => "Mali",
        "Malta" => "Malta",
        "Marshall Islands" => "Marshall Islands",
        "Martinique" => "Martinique",
        "Mauritania" => "Mauritania",
        "Mauritius" => "Mauritius",
        "Mayotte" => "Mayotte",
        "Mexico" => "Mexico",
        "Micronesia, Federated States of" => "Micronesia, Federated States of",
        "Moldova, Republic of" => "Moldova, Republic of",
        "Monaco" => "Monaco",
        "Mongolia" => "Mongolia",
        "Montserrat" => "Montserrat",
        "Morocco" => "Morocco",
        "Mozambique" => "Mozambique",
        "Myanmar" => "Myanmar",
        "Namibia" => "Namibia",
        "Nauru" => "Nauru",
        "Nepal" => "Nepal",
        "Netherlands" => "Netherlands",
        "Netherlands Antilles" => "Netherlands Antilles",
        "New Caledonia" => "New Caledonia",
        "New Zealand" => "New Zealand",
        "Nicaragua" => "Nicaragua",
        "Niger" => "Niger",
        "Nigeria" => "Nigeria",
        "Niue" => "Niue",
        "Norfolk Island" => "Norfolk Island",
        "Northern Mariana Islands" => "Northern Mariana Islands",
        "Norway" => "Norway",
        "Oman" => "Oman",
        "Pakistan" => "Pakistan",
        "Palau" => "Palau",
        "Panama" => "Panama",
        "Papua New Guinea" => "Papua New Guinea",
        "Paraguay" => "Paraguay",
        "Peru" => "Peru",
        "Philippines" => "Philippines",
        "Pitcairn" => "Pitcairn",
        "Poland" => "Poland",
        "Portugal" => "Portugal",
        "Puerto Rico" => "Puerto Rico",
        "Qatar" => "Qatar",
        "Reunion" => "Reunion",
        "Romania" => "Romania",
        "Russian Federation" => "Russian Federation",
        "Rwanda" => "Rwanda",
        "Saint Kitts and Nevis" => "Saint Kitts and Nevis",
        "Saint Lucia" => "Saint Lucia",
        "Saint Vincent and the Grenadines" => "Saint Vincent and the Grenadines",
        "Samoa" => "Samoa",
        "San Marino" => "San Marino",
        "Sao Tome and Principe" => "Sao Tome and Principe",
        "Saudi Arabia" => "Saudi Arabia",
        "Senegal" => "Senegal",
        "Seychelles" => "Seychelles",
        "Sierra Leone" => "Sierra Leone",
        "Singapore" => "Singapore",
        "Slovakia (Slovak Republic)" => "Slovakia (Slovak Republic)",
        "Slovenia" => "Slovenia",
        "Solomon Islands" => "Solomon Islands",
        "Somalia" => "Somalia",
        "South Africa" => "South Africa",
        "South Georgia and the South Sandwich Islands" => "South Georgia and the South Sandwich Islands",
        "Spain" => "Spain",
        "Sri Lanka" => "Sri Lanka",
        "St. Helena" => "St. Helena",
        "St. Pierre and Miquelon" => "St. Pierre and Miquelon",
        "Sudan" => "Sudan",
        "Suriname" => "Suriname",
        "Svalbard and Jan Mayen Islands" => "Svalbard and Jan Mayen Islands",
        "Swaziland" => "Swaziland",
        "Sweden" => "Sweden",
        "Switzerland" => "Switzerland",
        "Syrian Arab Republic" => "Syrian Arab Republic",
        "Taiwan, Province of China" => "Taiwan, Province of China",
        "Tajikistan" => "Tajikistan",
        "Tanzania, United Republic of" => "Tanzania, United Republic of",
        "Thailand" => "Thailand",
        "Togo" => "Togo",
        "Tokelau" => "Tokelau",
        "Tonga" => "Tonga",
        "Trinidad and Tobago" => "Trinidad and Tobago",
        "Tunisia" => "Tunisia",
        "Turkey" => "Turkey",
        "Turkmenistan" => "Turkmenistan",
        "Turks and Caicos Islands" => "Turks and Caicos Islands",
        "Tuvalu" => "Tuvalu",
        "Uganda" => "Uganda",
        "Ukraine" => "Ukraine",
        "United Arab Emirates" => "United Arab Emirates",
        "United Kingdom" => "United Kingdom",
        "United States" => "United States",
        "United States Minor Outlying Islands" => "United States Minor Outlying Islands",
        "Uruguay" => "Uruguay",
        "Uzbekistan" => "Uzbekistan",
        "Vanuatu" => "Vanuatu",
        "Venezuela" => "Venezuela",
        "Vietnam" => "Vietnam",
        "Virgin Islands (British)" => "Virgin Islands (British)",
        "Virgin Islands (U.S.)" => "Virgin Islands (U.S.)",
        "Wallis and Futuna Islands" => "Wallis and Futuna Islands",
        "Western Sahara" => "Western Sahara",
        "Yemen" => "Yemen",
        "Yugoslavia" => "Yugoslavia",
        "Zambia" => "Zambia",
        "Zimbabwe" => "Zimbabwe"
    ]
];
