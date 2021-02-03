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
            menu.style.display = 'block';
            
        },
        
    },
    
});