let app = new Vue({
    el: '#root',
    data: {
        phpListMovie : [],
    },
    mounted() {
        axios.get('./db.php').then((response) =>{
            this.phpListMovie = response.data;
        });
    },
    methods: {
        mostraMenu () {
            let menu = document.querySelector('.menu_filter');
            if (menu.style.display === "none") {
              menu.style.display = "block";
            } else {
              menu.style.display = "none";
            }
        },
        filtraRock (){
            axios.get('./db.php').then((response) =>{
                this.phpListMovie = response.data.filter((album)=>{
                    return album.genre == 'Rock';
                })
            });
        },
        filtraJazz (){
            axios.get('./db.php').then((response) =>{
                this.phpListMovie = response.data.filter((album)=>{
                    return album.genre == 'Jazz';
                })
            });
        },
        filtraPop (){
            axios.get('./db.php').then((response) =>{
                this.phpListMovie = response.data.filter((album)=>{
                    return album.genre == 'Pop';
                })
            });
        },
        filtraMetal (){
            axios.get('./db.php').then((response) =>{
                this.phpListMovie = response.data.filter((album)=>{
                    return album.genre == 'Metal';
                })
            });
        },
        

     
        
    },
    
});