// webpack.mix.js

let mix = require('laravel-mix');
//change dist nel nome della cartella che verrà creata in dist
mix.js('src/main.js', 'js').sass('src/style.scss', 'css').setPublicPath('dist');
//prima di dare npx mix creare src e file di collegamento come sopra e passare lo script dei comandi in upgrade(laravel mix) per modifica, crea .gitignore 