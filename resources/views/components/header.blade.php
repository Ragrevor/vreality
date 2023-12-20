<header class="header center">
    <div class="header__box">
        <div class="header__item_nav">
            <img src="../images/logo.svg" alt="">
        </div>
        <div class="header__item_nav">
            <div class="header__item_links"><a href="/">О клубе</a></div>
            <div class="header__item_links"><a href="/halls">Залы</a></div>
            <div class="header__item_links"><a href="/games">Игры</a></div>
            <div class="header__item_links"><a href="">Цены</a></div>
            <div class="header__item_links"><a href="">Контакты</a></div>
            <div class="header__item_links"><a href="">Сертификаты</a></div>
        </div>
        <div class="header__item_nav">
            @guest
                <div class="header__item_links"><a href="/auth">Войти</a></div>
                <div class="header__item_links"><a href="/reg">Регистрация</a></div>
            @endguest
            @auth
                <?php if (auth()->user()->role_id === 1) { ?>
                <div class="header__item_links"><a href="admin/">Админ Панель</a></div>
                <?php } ?>
                <div class="header__item_links"><a href="">Личный кабинет</a></div>
                <div class="header__item_links"><a href="/exit">Выход</a></div>
            @endauth
        </div>
    </div>
</header>
