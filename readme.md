# This boilerplate is  under development
##### I'm doing this for my own purpose, but feel free to use it.

### Todo:

- add roles with santigarcor/laratrust
- add users CRUD
- add middleware for the admin
- ~~configure appzcoder/crud-generator with semantic-ui~~ ✔
- add Request validation
- add mcamara/laravel-localization
- add translations en/fr
- add jenssegers/date
- add antonioribeiro/tracker
- add deployment files configuration


###  What's in it?

#### Front-end

- semantic-ui-sass
- dotenv-webpack
- browser-sync
- browser-sync-webpack-plugin

#### Back-end

- Laravel Authentication
- An Invitation based registration
- Snowfire/Beautymail
- barryvdh/laravel-ide-helper
- barryvdh/laravel-debugbar
- appzcoder/crud-generator

### Getting started

##### Laravel

    $ cp .env.example .env
    $ php artisan key:generate
    $ php artisan migrate
    $ php artisan serve

##### Webpack

    $ npm install
    $ npm run build
    $ npm run watch

##### CRUD-generator

    $ php artisan crud:generate Posts --fields_from_file="resources/crud-generator/models/posts.json" --view-path=admin --controller-namespace=Admin --route-group=admin --model-namespace="Models"

Then in `routes/web.php` rename and move|wrap the generated route

from

    Route::resource('admin/posts', 'Admin\\PostsController');

To

    Route::group(['prefix' => 'admin', 'namespace' => 'Admin', 'as' => 'admin.'], function () {

        // Others routes
        // [...]

        Route::resource('posts', 'PostsController');

    });

##### phpDocs for models

 $ php artisan ide-helper:models