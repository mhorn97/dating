<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous"></script>
    <title>Interests</title>
</head>
<body>
    <h1>My Dating Website</h1>
    <h1>Interests</h1>
    <form method="post" action="./results">
        <h3>In-door Interests</h3>
        <input type="checkbox" name="indoor[]" value = "tv">tv
        <input type="checkbox" name="indoor[]" value = "movies">movies
        <input type="checkbox" name="indoor[]" value = "cooking">cooking
        <input type="checkbox" name="indoor[]" value = "board games">board games
        <input type="checkbox" name="indoor[]" value = "puzzles">puzzles
        <input type="checkbox" name="indoor[]" value = "reading">reading
        <input type="checkbox" name="indoor[]" value = "cards">playing cards
        <input type="checkbox" name="indoor[]" value = "video games">video games

        <h3>Out-door interests</h3>
        <input type="checkbox" name="outdoor[]" value = "hiking">hiking
        <input type="checkbox" name="outdoor[]" value = "biking">biking
        <input type="checkbox" name="outdoor[]" value = "swimming">swimming
        <input type="checkbox" name="outdoor[]" value = "collecting">collecting
        <input type="checkbox" name="outdoor[]" value = "walking">walking
        <input type="checkbox" name="outdoor[]" value = "climbing">climbing
        <input type="submit" name="submit">
    </form>
</body>
</html>