<!--
Michael Horn
1/16/2018
HTML for the home page of the dating website
-->
<!DOCTYPE html>
<html>
    <head>
        <meta charset = 'utf-8'>
        <link rel="stylesheet" href="./styles/styles.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous"></script>
        <title>Dating site</title>
    </head>

    <body>

    <div class ="container-fluid">
        <div class="row">
            <div class="col-sm-6" id ="col1">
                <h1 id = "heading">My Dating Website</h1>
                <p id = "p1">Welcome to the web's most successful dating website. At <b>My Dating Website</b> you'll met another like minded individuals. We have the highest
                success rate of couples on the web. User's are matched by interest and location. Find out why so many others have found love on our site!</p>
                <h3 id = "heading2">Hear what our users are saying about us.</h3>

                <p id = "p2"><i>"I met the love of my life after only a month!" - Andrea</i></p>
                <p id = "p3"><i>"It was so easy to set up and profile and start meeting people. I didn't realize how many others were looking for love in my area." -John Smith</i></p>
                <p id = "p4"><i>"Just try it! You'll never be the same!" - Sarah</i></p>
                <a href="personal"><button id = "btn" type = "button" class = "btn btn-primary" name = "create">Create my profile!</button></a>
            </div>
            <div class="col-sm-6" id = "col2">
                <img  src="./images/date_image.jpg" class = "rounded" alt = "dating-img">
            </div>
        </div>
    </div>
    </body>
</html>