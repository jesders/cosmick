let mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/assets/js/app.js', 'public_html/wp-content/themes/cosmick/assets/js')
	.sass('resources/assets/scss/app.scss', 'public_html/wp-content/themes/cosmick/assets/css')
	.browserSync({
		proxy: 'localhost:8098',
		files: [
			'public_html/wp-content/themes/**/*',
			'resources/assets/**/*'
		]
});
