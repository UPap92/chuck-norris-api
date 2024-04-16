<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<div id="form">
    <h1>U piccion d l' API d Chuck Norris</h1>

    <label for="jokes"><b>Scegli TRMN</b></label><br>
    <select name="jokes" id="jokes">
        <option value="food">Food</option>
        <option value="animal">Animal</option>
        <option value="career">Career</option>
        <option value="celebrity">Celebrity</option>
        <option value="dev">Dev</option>
        <option value="explicit">Explicit</option>
        <option value="fashion">Fashion</option>
        <option value="history">History</option>
        <option value="money">Money</option>
        <option value="movie">Movie</option>
        <option value="music">Music</option>
        <option value="political">Political</option>
        <option value="religion">Religion</option>
        <option value="science">Science</option>
        <option value="sport">Sport</option>
        <option value="travel">Travel</option>
    </select><br>

    <button type="button" class="apiButton"><b>VAE U FRAE</b></button><br><br>
    <div id="result"></div>
</div>

<script>
    document.querySelector(".apiButton").addEventListener("click", function(event){
        event.preventDefault();
        var category = document.getElementById("jokes").value;
        if (!category) {
            alert("Seleziona una Categoria");
            return;
        }

        fetch("https://api.chucknorris.io/jokes/random?category=" + encodeURIComponent(category))
            .then(function(resp){
                return resp.json();
            })
            .then(function(data){
                document.querySelector("#result").innerHTML = data.value;
            })
            .catch(function(error) {
                console.error('There was a problem with the fetch operation:', error);
            });
    });
</script>

</body>
</html>