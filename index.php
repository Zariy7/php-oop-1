<?php 
    class Movie {
        public $title;
        public $releaseDate;
        public $genres = [];
        public $ageRestriction = '4+';

        function __construct ($title, $releaseDate, $genres){
            $this->title = $title;
            $this->releaseDate = $releaseDate;
            $this->genres = $genres;
        }

        public function setAgeRestriction(){
            foreach($this->genres as $genre){
                if($genre == 'Horror' || $genre == 'Thriller'){
                    $this->ageRestriction = '18+';
                }
            }
        }
    }

    $movie_1 = new Movie('The Wolf of Wall Street', 2013, ['Thriller', 'Comedy']);
    $movie_2 = new Movie('Penguins of Madagascar', 2014, ['Comedy', 'Adventure']);
    $movie_1->setAgeRestriction();
    $movie_2->setAgeRestriction();
?>
<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <div>
            <?php 
                echo 'Il film '.$movie_1->title.' è uscito nel '.$movie_1->releaseDate.'. Appartiene ai generi di '.$movie_1->genres[0].', '.$movie_1->genres[1].' ed è consigliato a un pubblico di età '.$movie_1->ageRestriction.'.';
                echo '<br><br><br>';
                echo 'Il film '.$movie_2->title.' è uscito nel '.$movie_2->releaseDate.'. Appartiene ai generi di '.$movie_2->genres[0].', '.$movie_2->genres[1].' ed è consigliato a un pubblico di età '.$movie_2->ageRestriction.'.';
            ?>
        </div>
    </body> 
</html>