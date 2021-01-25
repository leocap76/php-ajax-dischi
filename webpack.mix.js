// webpack.mix.js

let mix = require('laravel-mix');

// mix.js('src/app.js', 'dist').setPublicPath('dist');
mix
  .sass('src/style.scss', 'css')

  .js('src/app.js', 'js').vue({ version: 2 });
