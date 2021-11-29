{{-- Laravel Vue --}}
{{-- index --}}
    @extends('layouts_cdaw.cdaw_film')
    @section('content')
    
    <div class="container">
        <div id="myCarousel" class="carousel slide" data-ride="carousel"> 
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <img class="first-slide" src="https://www.indesignskills.com/wp-content/uploads/2021/10/The-Best-Fonts-for-Movie-Poster-Design.png" alt="First slide">
                </div>
                <div class="item">
                    <img class="second-slide" src="https://elements-cover-images-0.imgix.net/ed5ccf2a-aad6-4bec-acc0-d44abbe2530a?auto=compress%2Cformat&fit=max&w=2038&s=45c959a45ccef4fd49b91f9032627330" alt="Second slide">
                </div>
                <div class="item">
                    <img class="third-slide" src="https://elements-preview-images-0.imgix.net/89481d51-a662-4a0c-9e48-f3a5c263d298?auto=compress%2Cformat&fit=max&w=2740&s=a4760d50bd968e0ea6ac28775aa57dc2" alt="Third slide">
                </div>
            </div>
            <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">
                    Previous
                </span>
            </a>
            <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">
                    Next
                </span>
            </a>
        </div>
    </div>
    <!--  -->
    <div class="container marketing">
        <!-- Liste 1 -->
        <div class="row" style="margin-bottom: 2%;">
            <a href="#" style="color: grey;">
                <h2>
                    Nouveau:
                </h2>
            </a>
        </div>
        <div class="row" style="margin-bottom: 3%;">
            <?php
                $recommand_id_media_range = range(1, 60);
                shuffle($recommand_id_media_range);
                for ($j = 1; $j <= 6; $j++) {
                    $i = $recommand_id_media_range[$j]; 
                    echo '<div class="col-md-2">';
                        echo '<p style="text-align: center;">';
                            $result_read = DB::select('select * from table_media where id = ?', [$i]);
                            echo '<img class="img-rounded" src="' . $result_read['0']->image . '" alt="Affiche1" width="140" height="210">';
                        echo '</p>';
                        
                        echo '<h4 style="text-align: center; height: 50px">';
                            $result_read = DB::select('select * from table_media where id = ?', [$i]);
                            echo $result_read['0']->title;
                        echo '</h4>';
                
                        echo '<p style="text-align: center; height: 30px">';
                            $result_read = DB::select('select * from table_media where id = ?', [$i]);
                            echo $result_read['0']->director;
                        echo '</p>';
                
                        echo '<p style="text-align: center;">';
                            echo '<a class="btn btn-default" href="film/' . $result_read['0']->imdb_id . '" role="button">';
                                echo 'View details';
                            echo '</a>';
                        echo '</p>';
                    echo '</div>';
                }
            ?>
        </div>
        <div class="row">
            <?php
                for ($j = 1; $j <= 6; $j++) {
                    $i = $recommand_id_media_range[$j + 6]; 
                    echo '<div class="col-md-2">';
                        echo '<p style="text-align: center;">';
                            $result_read = DB::select('select * from table_media where id = ?', [$i]);
                            echo '<img class="img-rounded" src="' . $result_read['0']->image . '" alt="Affiche1" width="140" height="210">';
                        echo '</p>';
                        
                        echo '<h4 style="text-align: center; height: 50px">';
                            $result_read = DB::select('select * from table_media where id = ?', [$i]);
                            echo $result_read['0']->title;
                        echo '</h4>';
                
                        echo '<p style="text-align: center; height: 30px">';
                            $result_read = DB::select('select * from table_media where id = ?', [$i]);
                            echo $result_read['0']->director;
                        echo '</p>';
                
                        echo '<p style="text-align: center;">';
                            echo '<a class="btn btn-default" href="pages/film1.html" role="button">';
                                echo 'View details';
                            echo '</a>';
                        echo '</p>';
                    echo '</div>';
                }
            ?>
        </div>
        <!-- Liste 2 -->
        <hr class="featurette-divider">
        <div class="row" style="margin-bottom: 2%;">
            <a href="#" style="color: grey;">
                <h2>
                    Listes de films qui pourraient vous intéresser:
                </h2>
            </a>
        </div>
        <div class="row">
            <?php
                for ($j = 1; $j <= 6; $j++) {
                    $i = $recommand_id_media_range[$j + 12]; 
                    echo '<div class="col-md-2">';
                        echo '<p style="text-align: center;">';
                            $result_read = DB::select('select * from table_media where id = ?', [$i]);
                            echo '<img class="img-rounded" src="' . $result_read['0']->image . '" alt="Affiche1" width="140" height="210">';
                        echo '</p>';
                        
                        echo '<h4 style="text-align: center; height: 50px">';
                            $result_read = DB::select('select * from table_media where id = ?', [$i]);
                            echo $result_read['0']->title;
                        echo '</h4>';
                
                        echo '<p style="text-align: center; height: 30px">';
                            $result_read = DB::select('select * from table_media where id = ?', [$i]);
                            echo $result_read['0']->director;
                        echo '</p>';
                
                        echo '<p style="text-align: center;">';
                            echo '<a class="btn btn-default" href="pages/film1.html" role="button">';
                                echo 'View details';
                            echo '</a>';
                        echo '</p>';
                    echo '</div>';
                }
            ?>
        </div>
        <hr class="featurette-divider">
        <!-- Recommande -->
        <!-- <hr class="featurette-divider">
        <div class="row featurette">
            <div class="col-md-7">
                <h2 class="featurette-heading">
                    Recommandé aujourd'hui. 
                    <span class="text-muted"></span>
                </h2>
                <p class="lead">
                    TODO
                </p>
            </div>
            <div class="col-md-5">
                <img class="featurette-image img-responsive center-block" alt="Affiche api">
            </div>
        </div>
        <hr class="featurette-divider"> -->
    </div>
    @endsection