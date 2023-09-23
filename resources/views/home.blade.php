<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8" />
    <link rel="icon" type="image/svg+xml" href="/vite.svg" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Inizio a muovere i primi passi con questo fantastico framework che è Laravel">
    <title>Primi passi con Laravel</title>

    <!-- Framework Bootstrap css  -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

    <!-- Font Awesome CDN  -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

</head>

<body>

    <main>

        <div class="container mt-5">

            <div class="text-center mt-4">
                <h1 class="mt-5">Hello Laravel</h1>
                <h2 class="mt-5">Ti diamo il benvenuto</h2>
            </div>

            @foreach ($datiUtente as $el)

                <ol class="list-group list-group-numbered mt-5">
                    <li>{{$el}}</li>
                </ol>

            @endforeach

        </div>

    </main>

    <script src="./script.js"></script>
</body>


</html>
