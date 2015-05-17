var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Less
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function(mix) {
    mix
    	.sass('app.scss')
    	.scripts([
			'bower/jquery/dist/jquery.js',
			'bower/foundation/js/foundation.js',
			'js/app.js'
		], 'public/js/main.js', 'resources/assets');
});

// NOTE: Run gulp --production for minifying assets
