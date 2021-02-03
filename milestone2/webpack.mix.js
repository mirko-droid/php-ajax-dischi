// webpack.mix.js
let mix = require('laravel-mix');
// aggiunta supporto vue per laravel
mix.js('src/main.js', 'js').vue({ version: 2 })
.sass('src/style.scss', 'css').setPublicPath('dist');