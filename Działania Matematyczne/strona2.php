<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <meta author="Dawid Polowczyk">
    <title>S2</title>
</head>
<body>
    <div class="container">
        <div class="baner">
            <a href="index.html"><img src="baner.jpg"></a>
        </div>
        <div class="menu">
            <p>Menu</p>
            <p>- <a href="strona1.html">proste działania</a></p>
            <p>- <a href="strona2.php">potęgowanie</a></p>
        </div>
        <div class="tresc">
            <p>Treść strony</p>
            <h1>POTĘGOWANIE</h1>
            <p><i>Podaj podstawę potęgi:</i> <input type="number" id="liczba1">
            <p><i>Podaj dodatnie, całkowity wykładnik potęgi:</i> <input type="number" id="liczba2">
            <br><br><input type="button" value="POTĘGOWANIE" id="button">
            <p id=akapit></p>
            <script>
                var przycisk=document.getElementById("button");
                przycisk.onclick=function(){
                    var wynik=1;
                    var podstawa=document.getElementById("liczba1").value;
                    var wykladnik=document.getElementById("liczba2").value;
                    if(podstawa=="" || wykladnik==""){
                        akapit.innerHTML="Wpisz podstawę i wykładnik potęgi";
                    }
                    else{
                        podstawa=parseInt(podstawa);
                        wykladnik=parseInt(wykladnik);
                        if(wykladnik==0){
                            akapit.innerHTML="dla wykładnika równego 0, przy dowolnej wartości podstawy potęgi wynik wynosi 1."
                        }
                        else{
                            akapit.innerHTML="podstawa potęgi: "+podstawa+", wykładnik: "+wykladnik+", wynik potęgowania wynosi "+Math.pow(podstawa,wykladnik);
                        }
                    }
                }

            </script>
        </div>
    </div>
</body>
</html>