<?php 
/* Stampare a schermo una decina di dischi musicali (vedi screenshot).
Utilizzare:
Html, Sass, JS, VueJS, PHP
Prima Milestone:
Stampiamo i dischi solo con l’utilizzo di PHP, che stampa direttamente i dischi in pagina: al caricamento della pagina ci saranno tutti i dischi.
Seconda Milestone:
Attraverso l’utilizzo di AJAX: al caricamento della pagina ajax chiederà attraverso una chiamata i dischi a php e li stamperà attraverso VueJS.
Bonus:
Attraverso un’altra chiamata ajax, filtrare gli album per artista
Lo screenshot si trova nelle slide. */
$db = [
    [ 
        "poster" => "https://www.onstageweb.com/wp-content/uploads/2018/09/bon-jovi-new-jersey.jpg",
        "title" => "New Jersey",
        "author" => "Bon Jovi",
        "genre" => "Rock",
        "year" => "1988"
    ],
    [ 
        "poster" => "https://img.discogs.com/vknPDdrqRbT92pNRX0W4I5N91jg=/fit-in/300x300/filters:strip_icc():format(jpeg):mode_rgb():quality(40)/discogs-images/R-1246953-1448927086-6590.jpeg.jpg",
        "title" => "Live at Wembley 86",
        "author" => "Queen",
        "genre" => "Pop",
        "year" => "1992"
    ],
    [ 
        "poster" => "https://images-na.ssl-images-amazon.com/images/I/41JD3CW65HL.jpg",
        "title" => "Ten's Summoner's Tales",
        "author" => "Sting",
        "genre" => "Pop",
        "year" => "1993"
    ],
    [ 
        "poster" => "https://cdn2.jazztimes.com/2018/05/SteveGadd-800x723.jpg",
        "title" => "Steve Gadd Band",
        "author" => "Steve Gadd Band",
        "genre" => "Jazz",
        "year" => "2018"
    ],
    [ 
        "poster" => "https://images-na.ssl-images-amazon.com/images/I/810nSIQOLiL._SY355_.jpg",
        "title" => "Brave new World",
        "author" => "Iron Maiden",
        "genre" => "Metal",
        "year" => "2000"
    ],
    [ 
        "poster" => "https://upload.wikimedia.org/wikipedia/en/9/97/Eric_Clapton_OMCOMR.jpg",
        "title" => "One more car, one more raider",
        "author" => "Eric Clapton",
        "genre" => "Rock",
        "year" => "2002"
    ],
    [ 
        "poster" => "https://images-na.ssl-images-amazon.com/images/I/51rggtPgmRL.jpg",
        "title" => "Made in Japan",
        "author" => "Deep Purple",
        "genre" => "Rock",
        "year" => "1972"
    ],
    [ 
        "poster" => "https://images-na.ssl-images-amazon.com/images/I/81r3FVfNG3L._SY355_.jpg",
        "title" => "And Justice for All",
        "author" => "Metallica",
        "genre" => "Metal",
        "year" => "1988"
    ],
    [ 
        "poster" => "https://img.discogs.com/KOBsqQwKiNKH-q927oHMyVdDzSo=/fit-in/596x596/filters:strip_icc():format(jpeg):mode_rgb():quality(90)/discogs-images/R-6406665-1418464475-6120.jpeg.jpg",
        "title" => "Hard Wired",
        "author" => "Dave Weckl",
        "genre" => "Jazz",
        "year" => "1994"
    ],
    [ 
        "poster" => "https://m.media-amazon.com/images/I/71K9CbNZPsL._SS500_.jpg",
        "title" => "Bad",
        "author" => "Michael Jacjson",
        "genre" => "Pop",
        "year" => "1987"
    ],
];
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./dist/css/style.css">
</head>
<body>
    <header>
        <nav class="container">
            <div class="icon">
                <img src="./dist/img/logo.png" alt="">
            </div>
        </nav>
    </header>
    <main>
        <div class="container d-flex d-wrap just_cont_sp_bt">
            <?php foreach ($db as $value) { ;?> 
                <div class="card d-flex fl_dir_col align_c">
                    <div class="img_card ">
                        <img src="<?php echo $value['poster']?>" alt="">
                    </div>
                    <div class="description_card">
                        <h4><?php echo $value['title']?></h4>
                        <h5><?php echo $value['author']?></h5>
                        <h6><?php echo $value['year']?></h6>
                    </div>
                </div>
            <?php }?>
        </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="./dist/js/main.js"></script>
</body>
</html>