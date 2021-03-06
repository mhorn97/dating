<!--
Michael Horn
2/2/2018
Page that allows the user to enter in a few different interests-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./styles/interests.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous"></script>
    <title>Interests</title>
</head>
<body>
    <nav class = "navbar bg-light navbar-light">
        <div class="navbar-nav">
            <a class="nav-item nav-link" href="/328/dating/">My Dating Website</a>
            <a class="nav-item nav-link" href="admin">Admin</a>
        </div>
    </nav>
    <div class="container" id="maindiv">
        <h1 id="head">Interests</h1>
            <form method="post" action="#">
                <div class="form-group">
                    <label class="form-control-group">In-door Activities</label>
                    <div class="row">
                        <div class="col-sm-3">
                        <input type="checkbox" name="indoor[]" value = "tv">tv
                        </div>
                        <div class="col-sm-3">
                        <input type="checkbox" name="indoor[]" value = "movies">movies
                        </div>
                        <div class="col-sm-3">
                        <input type="checkbox" name="indoor[]" value = "cooking">cooking
                        </div>
                        <div class="col-sm-3">
                        <input type="checkbox" name="indoor[]" value = "board games">board games
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-3">
                        <input type="checkbox" name="indoor[]" value = "puzzles">puzzles
                        </div>
                        <div class="col-sm-3">
                        <input type="checkbox" name="indoor[]" value = "reading">reading
                        </div>
                        <div class="col-sm-3">
                        <input type="checkbox" name="indoor[]" value = "cards">playing cards
                        </div>
                        <div class="col-sm-3">
                        <input type="checkbox" name="indoor[]" value = "video games">video games
                        </div>
                    </div>
                    <p><?= ($errors['indoor']) ?></p>
                </div>
                <hr>
                <div class="form-group">
                    <label class="form-control-group">Out-door interests</label>
                    <div class="row">
                        <div class="col-sm-3">
                        <input type="checkbox" name="outdoor[]" value = "hiking">hiking
                        </div>
                        <div class="col-sm-3">
                        <input type="checkbox" name="outdoor[]" value = "biking">biking
                        </div>
                        <div class="col-sm-3">
                        <input type="checkbox" name="outdoor[]" value = "swimming">swimming
                        </div>
                        <div class="col-sm-3">
                        <input type="checkbox" name="outdoor[]" value = "collecting">collecting
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-3">
                        <input type="checkbox" name="outdoor[]" value = "walking">walking
                        </div>
                        <div class="col-sm-3">
                        <input type="checkbox" name="outdoor[]" value = "climbing">climbing
                        </div>
                        <div class="col-sm-6">
                            <input class="btn btn-primary" type="submit" name="submit" id="submit" value="Next>">
                        </div>

                    </div>
                    <p><?= ($errors['outdoor']) ?></p>
                </div>
        </form>
    </div>
</body>
</html>