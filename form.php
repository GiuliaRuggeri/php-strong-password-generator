<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css">
    <title>Password generator</title>
</head>

<body class="bg-primary">

    <h1 class="fw-bold text-center">Strong password generator</h1>
    <h4 class="text-center text-white fw-bold">Genera una password sicura</h4>

    <div class="container bg-white p-3 mt-3">


        <form action="password.php">

            <div class="mb-3 d-flex">
                <h5>Lunghezza password:</h5>
                <label for="exampleInputPassword1" class="form-label"></label>
                <input type="number" class="form-control w-25 ms-3" name="length" id="exampleInputPassword1" min="0">
            </div>

            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1" name="letters">
                <label class="form-check-label" for="defaultCheck1">
                    Lettere
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="defaultCheck2" name="numbers">
                <label class="form-check-label" for="defaultCheck2">
                    Numeri
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="defaultCheck2" name="symbols">
                <label class="form-check-label" for="defaultCheck2">
                    Simboli
                </label>
            </div>
            <div class="mt-3">
                <h5>Consenti ripetizioni di uno o più caratteri:</h5>
                <div class="form-check">

                    <input class="form-check-input" type="radio" id="flexRadioDefault1" name="repeat" value="true">
                    <label class="form-check-label" for="flexRadioDefault1">
                        Sì
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" id="flexRadioDefault2" name="repeat" value="false" checked>
                    <label class="form-check-label" for="flexRadioDefault2">
                        No
                    </label>
                </div>
            </div>

            <div class="mt-3">
                <button type="submit" class="btn btn-primary">Invia</button>
                <button class="btn btn-secondary">Annulla</button>

            </div>

        </form>




    </div>


</body>

</html>