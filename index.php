<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dischi</title>
    <!-- vue -->
    <script src="https://cdn.jsdelivr.net/npm/vue"></script>
    <!-- axios -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.20.0/axios.min.js"></script>
    <!-- my JS -->
    <script src="script.js"></script>
    <!-- my css -->
    <link rel="stylesheet" href="style.css">

  
</head>
<body>

    <div id="app">

        <div class="container">
            <!-- parte navigazione / filtri -->
            <nav id="filters">
                <!-- filtra per genere -->
                <div>
                    <label for="genre-choice">Filtra per genere</label>
                    <div>
                        <select class="fa fab" name="genres" id="genres-select">
                            <option class="fa fab" value="">Scegli il genere</option>
                            <option class="fa fab">pino</option>
                        </select> 
                    </div>  
                </div>
            </nav>
            
            <!-- visualizzazione dischi -->
            <main>
                <ul>
                    <li v-for="album in albums">
                        <div>
                            <h3>{{album['title']}}</h3>
                            <img :src="album['poster']" alt="" width="100px" height="100px">
                            <h4>{{album['author']}}</h4>
                            <div class="small-text">{{album['genre']}}</div>
                            <div class="small-text">{{album['year']}}</div>
                        </div>
                    </li>
                </ul>
                
            </main>
            
        </div>

    </div>
    
</body>
</html>