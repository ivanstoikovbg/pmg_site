const mix = require('laravel-mix');
require('laravel-mix-tailwind');

mix.js('resources/js/app.js', 'public/js')
   .vue()
   .postCss('resources/css/app.css', 'public/css', [
       require('postcss-import'),
       require('tailwindcss'),
       require('autoprefixer'),
   ])
   .copy('resources/images', 'public/images', false)
   .version();

if (mix.inProduction()) {
    mix.version();
} else {
    mix.sourceMaps();
}
