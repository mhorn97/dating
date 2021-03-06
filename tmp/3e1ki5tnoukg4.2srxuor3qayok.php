<!--
Michael Horn
2/2/2018
Page that allows the user to enter information about themself-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./styles/profile.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous"></script>
    <title>Profile</title>
</head>
<body>
    <form method="post" action="#">
        <nav class = "navbar bg-light navbar-light">
            <div class="navbar-nav">
                <a class="nav-item nav-link" href="/328/dating/">My Dating Website</a>
                <a class="nav-item nav-link" href="admin">Admin</a>
            </div>
        </nav>
        <div class="container" id="maindiv">
            <h1 id="head">Profile</h1>
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type = "text" class="form-control" name = "email" id="email" value="<?= ($email) ?>">
                    </div>
                    <div class="form-group">
                        <label for="state">State</label>
                        <select name = "state" id="state" class="form-control">
                            <option value=""><--Select--></option>
                            <option value="Washington">Washington</option>
                            <option value="Texas">Texas</option>
                            <option value="California">California</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="form-group-control">Seeking</label>
                        <div id="seekings">
                            <input type = "radio" name = "seeking" value="Male"> Male
                            <input type = "radio" name="seeking" value="Female"> Female
                        </div>
                    </div>
                </div>
                <hr>
                <div class="col-sm-6">
                    <label for="bio">Biography</label>
                    <textarea class="form-control" rows="4" cols="50" name = "bio" id="bio"></textarea>
                    <input class="btn btn-primary" type = "submit" name = "submit" id="submit" value="Next>">
                </div>
            </div>
        </div>
    </form>
</body>
</html>