<!-- film -->
    @extends('layouts_cdaw.cdaw_film')
    @section('content')
    <div class="container">
        <div class="row" style="padding-bottom: 1%;">
            <h1>
                <?php
                $result_read = DB::select('select * from table_media where imdb_id = ?', [$imdb_id]);
                echo $result_read['0']->title . " (" . $result_read['0']->year . ")";
                ?>
            </h1>
        </div>

        <div class="row" style="padding-bottom: 2%;">
            <!-- <div class="col-md-1"></div> -->
            <div class="col-md-3">
                <?php
                    echo '<img class="img-rounded" src="' . $result_read['0']->image . '" alt="Affiche" width="90%">';
                ?>
            </div>
            <div class="col-md-6">
                <div class="row">
                    <h4>
                        <?php
                            echo "Director: " . $result_read['0']->director;
                        ?>
                    </h4>
                </div>
                <div class="row">
                    <h4>
                        <?php
                            echo "Writer(s): " . $result_read['0']->writer;
                        ?>
                    </h4>
                </div>
                <div class="row">
                    <h4>
                        <?php
                            echo "Stars: " . $result_read['0']->stars;
                        ?>
                    </h4>
                </div>
                <div class="row">
                    <h4>
                        <?php
                            echo "Country: " . $result_read['0']->country;
                        ?>
                    </h4>
                </div>
                <div class="row">
                    <h4>
                        <?php
                            echo "Type: " . $result_read['0']->type;
                        ?>
                    </h4>
                </div>
                <div class="row">
                    <h4>
                        <?php
                            echo "Duration: " . $result_read['0']->duration;
                        ?>
                    </h4>
                </div>
                <div class="row">
                    <h4>
                        <?php
                            echo "IMDB Rating: " . $result_read['0']->imdb_rating;
                        ?>
                    </h4>
                </div>
            </div>
            <div class="col-md-3">
                <div class="row">
                    <h4>
                        Introduction:
                    </h4>
                </div>
                <div class="row">
                    <h4>
                        <?php
                            echo $result_read['0']->introduction;
                        ?>
                    </h4>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-1">
                <button type="submit" style="width: 100%;">
                    Suivi
                </button>
            </div>
            <div class="col-md-1">
                <button type="submit" style="width: 100%;">
                    Like
                </button>
            </div>
            <div class="col-md-2">
                <button type="submit" style="width: 100%;">
                    Add to Watchlist
                </button>
            </div>
        </div>
        <hr style="padding-bottom: 1%;">

        <div class="row">
            <div class="col-md-6">
                <form role="form">
                    <div class="form-group">
                        <label form="name">
                            <h2>
                                Commentaire
                            </h2>
                        </label>
                        <textarea class="form-control" rows="5"></textarea>
                        <button type="submit" style="margin-top: 2%;">
                            confirmer
                        </button>
                    </div>
                </form>
            </div>
        </div>

        <?php
            $num_commentary = DB::table('table_commentary')->where('author', 'Fan')->count('id');
            echo $num_commentary;
            // $result_read = DB::select('select * from table_media where author=Fan');
            // dd($result_read);

            for ($i = 1; $i <= $num_commentary; $i++) {
                $result_read = DB::select('select * from table_commentary where id = ?', [$i]); 
                echo '<div id="user1">';
                    echo '<h4>' . $result_read['0']->author . '</h4>';
                    echo '<p id="user1content">' . $result_read['0']->content . '</p>';
                    echo '<button class="modify">Modify Comment</button>';
                    echo '<button class="remove">Remove Comment</button>';
                echo '</div>';
            }
        ?>
        <hr class="featurette-divider">
    </div>
    @endsection