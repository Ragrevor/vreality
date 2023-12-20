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
    <div class="auth__intro center">
        <section class="">
            <div class="heading__title h1-text">Админ-панель</div>
            <div class="admin__links">
                <a class="blue-btn admin__link" href="/gamesEdit">Редактирование игр</a>
                <a class="blue-btn admin__link" href="">Просмотр заявок</a>
            </div>

        </section>

        <section>
            <div class="heading__title h1-text">Добавление игры</div>
            <form method="POST" class="style__forms" action="/game_create" enctype="multipart/form-data">
                @csrf
                <div class="form__inputs_inputs">
                    <input placeholder="Название" type="text" class="form__inputs_input" name="title">
                </div>
                <div class="form__inputs_inputs">
                    <input placeholder="Название" type="file" id="photo" class="form__inputs_input" name="photo">
                </div>
                <button class="blue-btn">Добавить</button>
            </form>
        </section>

        <section>
            <div class="heading__title h1-text">Редактировать игру</div>

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
    </div>
    <x-footer />
</body>

</html>
