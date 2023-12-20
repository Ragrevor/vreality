<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,400;0,500;1,500&display=swap" rel="stylesheet">
    <title>Главная</title>
</head>
<body>
    <x-header/>

</div>


            <h2 style="text-align: center" class="admin__control_title">Редактирование курса</h2>

            <form class="edit__form" method="GET">

            </form>
            {{-- /admin/update --}}
            {{-- {{route('c.update', ['id' => $courses->id ])}} --}}
            <form action="{{route ('update.r', ['id' => $courseFind->id])}}" method="POST" class="lk__form">
                @csrf
                @method('PATCH')

                <div class="lk__item">
                    <label for="title" class="lk__item_label">Название</label>
                    <input type="text" name="name_course" class="lki__item_input" value="{{$courseFind -> name_course}}">
                </div>

                <div class="lk__item">
                    <label for="" class="lk__item_label">Описание</label>
                    <input type="text" name="description" class="lki__item_input" value="{{$courseFind -> description}}">
                </div>

                <div class="lk__item">
                    <label for="" class="lk__item_label">Продолжительность</label>
                    <input type="text" name="duration" class="lki__item_input" value="{{$courseFind -> duration}}">
                </div>

                <div class="lk__item">
                    <label for="" class="lk__item_label">Цена</label>
                    <input type="text" name="cost" class="lki__item_input" value="{{$courseFind -> cost}}">
                </div>

                <button type="submit" class="lk__form_button">Редактировать курс</button>

            </form>
            <form class="lk__form" method="POST" action="{{route('Delete.r', ['id'=> $courseFind->id]) }}"> @csrf @method('DELETE')
            <button type="submit" class="lk__form_button">Удалить</button>
        </form>
    </main>
</body>
</html>
