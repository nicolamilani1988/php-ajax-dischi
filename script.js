function init(){
    new Vue({
        el: '#app',
        data: {
            albums: '',
            genres: [],
            chosenGenre:'',
        },
        methods:{
            showGenre: function(){
                axios.get('data.php', {
                    params: {
                        'genre' : this.chosenGenre,
                    }
                })
                .then(data =>{
                    this.albums = data['data'];
                })
            }
        },
        mounted(){
            axios.get('data.php')
                 .then(data =>{
                     this.albums = data['data'];
                     this.albums.forEach(elem => {
                         if(!this.genres.includes(elem['genre'])){
                             this.genres.push(elem['genre']);
                         }
                     });
                 })
                 .catch(error => {
                     console.log(error);
                 })
        },
    })
}

document.addEventListener('DOMContentLoaded',init);