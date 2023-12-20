<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,400;0,500;1,500&display=swap" rel="stylesheet">

    <title>Главная</title>
</head>
<body>
    <x-header/>
    <main class="edit__booking center">

        <p class="admin__control_title">Просмотр заявок</p>


        <div class="edit__booking_container">

            <div class="edit__booking_items">


                <div class="edit__booking_item">
                    @foreach($applications as $item)
                        <form action="" method="POST" class="edit__booking_form">
                            <p class="edit__booking_form_text">Заявка № {{$item->id}}</p>
                            <p class="edit__booking_form_text">Статус заявки: <span class="edit__booking_form_text_ad review">{{$item->status->title}}</span></p>
                            <p class="edit__booking_form_text">Номер телефона: <span class="edit__booking_form_text_ad">{{$item->telephone}}</span></p>
                            <p class="edit__booking_form_text">Имя оформителя: <span class="edit__booking_form_text_ad">{{$item->name}}</span></p>
                            <p class="edit__booking_form_text">Фамилия: <span class="edit__booking_form_text_ad">{{$item->surname}}</span></p>

                            <div class="edit__booking_buttons">
                                <a class="edit__booking_buttons_button accept_button" href="/admin/{{ $item->id }}/confirm ">
                                   Принять
                                </a>
                                <a class="edit__booking_buttons_button reject_button" href="/admin/{{ $item->id }}/deny">
                                    Отклонить
                                 </a>
                            </div>
                        </form>
                    @endforeach
                </div>
            </div>
        </div>

        <h2 style="display: flex; flex-direction:column; text-align: center; margin-bottom:10px;">Редактировать курс</h2>
<div style="display: flex;
flex-direction: column;
gap: 20px; margin-top: 20px;">
    @foreach ($courses as $coursesItem )


    <div class="course-box">
            <div>Код курса: {{$coursesItem->id}}</div>
            <div>Название курса:  {{$coursesItem->name_course}} </div>
            <div>Описание курса: {{$coursesItem->description}}  </div>
            <div>Продолжительность курса: {{$coursesItem->duration}}  </div>
            <div>Цена курса:  {{$coursesItem->cost}} </div>
            <div>
            <a class="lk__form_button" href="/admin/{{$coursesItem->id}}/edit">Редактировать</a>
        </div>

</div>
    @endforeach
</div>
<h2 style="display: flex; flex-direction:column; text-align: center; margin-bottom:10px;">Создать курс</h2>
            <form method="POST" action="/course_create" class="lk__form">
                @csrf
                <div class="lk__item">
                    <label class="lk__item_label" for="title">Название курса</label>
                    <input type="text" class="lki__item_input" id="name_course" name="name_course" value="" required>
                </div>
                <div class="lk__item">
                    <label class="lk__item_label" for="title">Описание</label>
                    <input type="text" class="lki__item_input" id="description" name="description" required>
                </div>
                <div class="lk__item">
                    <label class="lk__item_label" for="title">Длительность</label>
                    <input type="text" class="lki__item_input" id="duration" name="duration" required>
                </div>
                <div class="lk__item">
                    <label class="lk__item_label" for="title">Цена</label>
                    <input type="text" class="lki__item_input" id="cost" name="cost" required>
                </div>

                <button type="submit" class="lk__form_button">Создать</button>
            </form>

            {{-- <h2 style="text-align: center" class="admin__control_title">Редактирование курса</h2> --}}

            {{-- <form class="edit__form" method="GET">

            </form> --}}
            {{-- /admin/update --}}
            {{-- {{route('c.update', ['id' => $courses->id ])}} --}}
            {{-- <form action="" method="POST" class="lk__form">
                @csrf
                @method('PATCH')

                <div class="lk__item">
                    <label for="title" class="lk__item_label">Название</label>
                    <input type="text" name="name" class="lki__item_input" value="">
                </div>

                <div class="lk__item">
                    <label for="" class="lk__item_label">Описание</label>
                    <input type="text" name="description" class="lki__item_input" value="">
                </div>

                <div class="lk__item">
                    <label for="" class="lk__item_label">Продолжительность</label>
                    <input type="text" name="duration" class="lki__item_input" value="">
                </div>

                <div class="lk__item">
                    <label for="" class="lk__item_label">Цена</label>
                    <input type="text" name="cost" class="lki__item_input" value="">
                </div>

                <button class="lk__form_button">Редактировать курс</button>

            </form>
            <button class="lk__form_button">Удалить</button> --}}

    </main>
</body>
</html>
