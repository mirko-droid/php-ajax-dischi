<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
    <link rel="stylesheet" href="./dist/css/style.css">
</head>
<body>
    <div id="root">
        <header>
            <nav class="container d-flex">
                <div class="icon_logo">
                    <img src="./dist/img/logo.png" alt="">
                </div>
                <div class="filter"> 
                    <a href="#" @click="mostraMenu()"> Scegli il genere <i class="fas fa-chevron-down"></i> </a>
                    
                    <ul class='menu_filter'>
                        <li @click="filtraRock()"><a href="#">Rock</a></li>
                        <li @click="filtraJazz()"><a href="#">Jazz</a></li>
                        <li @click="filtraPop()"><a href="#">Pop</a></li>
                        <li @click="filtraMetal()"><a href="#">Metal</a></li>
                        <li @click="filtraAll()"><a href="#">All</a></li>

                    </ul>
                </div>
            </nav>
        </header>
        <main>
            <div class="container d-flex d-wrap just_cont_sp_bt">
                <div v-for='(film, index) in phpListMovie' class="card d-flex fl_dir_col align_c">
                    <div class="img_card ">
                        <img :src="film.poster" alt="">
                    </div>
                    <div class="description_card">
                        <h5>{{film.title}}</h5>
                        <h6>{{film.author}}</h6>
                        <h6>{{film.year}}</h6>
                    </div>
                </div>
            </div>
        </main>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="./dist/js/main.js"></script>
</body>
</html>