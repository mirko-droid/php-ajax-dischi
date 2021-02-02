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
    
});