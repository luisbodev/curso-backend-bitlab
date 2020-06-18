<?php
    require_once 'artist.php';
    require_once 'author.php';
    require_once 'cast.php';
    require_once 'episode.php';
    require_once 'movie.php';
    require_once 'news.php';
    require_once 'publication.php';
    require_once 'reviews.php';
    require_once 'serie.php';
    require_once 'visitor.php';

    $artist=new Artist();
    $author = new Author();
    $cast = new Cast();
    $episode = new Episode();
    $movie = new Movie();
    $news = new News();
    $publication = new Publication();
    $review = new Review();
    $serie = new Serie();
    $visitor = new Visitor();

    $publication->type='news';
    $publication->author=$author->name;
    
    
    
    if($publication->type=='review'){
        
        $review->title='Review to new movie from PIXAR';
        $review->summary="Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid accusamus obcaecati perferendis";

        $review->category='episode';

        $review->printReview();

        if($review->category=="movie"){
            
            $movie->printMovie();
            $cast->printCast();
        }
        if($review->category=='episode'){
            $episode->serieName=$serie->serieName;
            $episode->printEpisode();
            $cast->printCast();
        }
    }
    else{
        $news->category='movie';

        $news->printNews();
        echo '<br>';
        switch($news->category){
            case 'artist':
                $artist->printArtist();
            break;
            case 'episode':
                $episode->serieName=$serie->serieName;
                $episode->printEpisode();
                $cast->printCast();
            break;
            case 'movie':
                $movie->printMovie();
                $cast->printCast();
            break;
            case 'serie':
                $serie->printSerie();
            break;
        }
    }
    echo '<br>';

    $publication->printPublication();
    echo '<br>';

    $visitor->signIn('Ignacio','ignacio@gmail.com');
    echo '<br>';
    $visitor->comment('¡Que genial articulo!');
    echo '<br>';
    $visitor->rate('5');
    echo '<br>';
    echo '<br>';
    echo '<br>';

    $author->visitor=$visitor;
    $author->bannerAcount();

    echo "<br>Cuenta con nombr $visitor->name, Estado:".$visitor->status;
    
    $day=(new DateTime())->format('m-d');

    if($artist->birthday==$day){
        $artist->birthdayArtist();
    }