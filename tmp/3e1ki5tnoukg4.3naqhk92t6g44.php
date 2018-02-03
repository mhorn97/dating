<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./styles/personal.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous"></script>
    <title>Personal Information</title>
</head>
<body>
    <nav class = "navbar bg-light navbar-light">
        <div class="navbar-nav">
            <a class="nav-item nav-link" href="home.html">My Dating Website</a>
        </div>
    </nav>
    <div class="container" id="maindiv">
    <h1 id="head">Personal Information</h1>
    <form method="post" action="./profile">
    <div class = "row">
        <div class="col-sm-9">
        <div class="form-group">
            <label for="fname">First Name</label>
            <input type = "text" class="form-control" name = "fname" id="fname">
        </div>

        <div class="form-group">
            <label for="lname">Last Name</label>
            <input type="text" class="form-control" name = "lname" id="lname">
        </div>

        <div class="form-group">
            <label class="form-control-label" for="age">Age</label>
            <input type="text" class="form-control" name = "age" id="age">
        </div>

        <div class="form-group">
            <label class="form-control-label" for="genders">Gender</label>
            <div id = genders>
                <input type = "radio" name = "gender" value="Male" id="male">Male
                <input type = "radio" name = "gender" value="Female" id="female">Female
            </div>
        </div>

        <div class="form-group">
            <label class="form-control-label" for="phone">Phone Number</label>
            <input type = "text" class="form-control" name = "phone" id="phone">
        </div>
        </div>

        <hr>

        <div class="col-sm-3">
            <p><strong>Note:</strong> All information entered is protected by our <a href="#">privacy policy</a>. Profile information can only be viewed by others with your permission.</p>
            <input class="btn btn-primary" type="submit" name="submit" id="submit" value="Next>">
        </div>
    </div>
    </form>
    </div>
</body>
</html>