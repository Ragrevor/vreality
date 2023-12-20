<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Vreality</title>
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <x-header />

    <section class="games__intro">
        <div class="heading__title h1-text">Игры</div>
        <div class="games__container center">

            @foreach ($games as $game)
            <div class="games__box center">
                <div class="games__item">
                    <div class="games__item_img">
                        <img src="../images/games/{{$game->photo}}" alt="">
                    </div>
                    <div class="games__item_title">
                        {{$game->title}}
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </section>
    <x-footer />
</body>

</html>
