let mix = require('laravel-mix');
var tailwindcss = require('tailwindcss');
mix.js('resources/assets/js/app.js', 'public/js')
   .postCss('resources/assets/css/main.css', 'public/css', [
        tailwindcss('tailwind.js'),
   ]);
