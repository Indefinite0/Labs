<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=chrome">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Truck Logistic</title>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/reset.css">
    <link rel="apple-touch-icon" sizes="180x180" href="./img/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./img/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./img/favicon-16x16.png">
    <link rel="manifest" href="./img/site.webmanifest">
    <link rel="mask-icon" href="./img/safari-pinned-tab.svg" color="#5bbad5">
    <link rel="shortcut icon" href="./img/favicon.ico">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="msapplication-config" content="./img/browserconfig.xml">
    <meta name="theme-color" content="#ffffff">
</head>
    
<body>
    <header class ="header">
        <div class="wrapper">      
            <div class="header__wrapper">
                <div class="header__logo">
                    <a href="./index.html" class="header__logo-link"> 
                        <img src="./img/svg/TRUCK LOGISTIC.svg" alt="Truck Logistic" class="header__logo-pic">
                    </a>
                </div>
                <div class="header__logo">
                    <a class="header__slogan"> “Лучшая компания по грузоперевозкам из худших”
                    </a>
                    <a class="header__slogan" > 8-999-999-99-99
                    </a>
                </div>
                <nav class="header__nav">
                    <ul class="header__list">
                        <li class="header__item">
                            <a href="./services.php" class="header__link js-scroll">Услуги</a>
                        </li>
                        <li class="header__item">
                            <a href="./index.php" class="header__link js-scroll">Главная</a>
                        </li>
                        <li class="header__item">
                            <a href="./form.php" class="header__link js-scroll">Форма</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>
    <main class="main">
        <section class="intro">
            <div class="wrapper">
                <script type="text/javascript" src="jquery-3.6.0.min.js"></script>
                <script type="text/javascript" src="./ajax.js"></script>
                <script src="./js/main.js"></script>
                <h1 class="intro__title" id="up">
                    ЗАПОЛНЕНИЕ ЗАКАЗА
                </h1>
                <p class="intro__subtitle">
                    Просим отнестись ответственно к заполнению данной формы , иначе в суде вы ничего не сможете нам противопоставить
                </p>
  
                <form action="action.php" class="search-form">
                <div class="block">
                    <img class="img__form1" src="img/Rectangle%202.png">
                    <h2 class="form__title1">
                        Ваше Ф.И.О.
                    </h2>
                    <input id="name" type="text" class="form1" placeholder="Иванов Иван Иванович...">
                </div>
                <div class="block">
                    <img class="img__form" src="img/Rectangle%202.png">
                    <h2 class="form__title">
                        Ваш контактный номер.
                    </h2>
                    <input id="phone" type="text" class="form" placeholder="8-999-999-99-99">
                    <img class="img__form__car" src="img/Trucklogo.png">
                </div>
                <div class="block">
                    <img class="img__form" src="img/Rectangle%202.png">
                    <h2 class="form__title">
                        Вид груза (Требуется его описание).
                    </h2>
                    <input id="type" type ="text" class="form" placeholder="Кирпичи Красные глинянные">
                    <button type="submit" class="button" id="send_form" href=".form.html">
                        Отправить    
                    </button>    
                </div>
                </form>
                <a href="#up" class="button__up js-scroll">
                <img src="./img/Group%201.png" alt="НАВЕРХ">
                </a>
                <h3 class="end__title">В случае потери      груза не связывайтесь с нами 8-        999-999-99-99
                </h3>
                <h4 class="end__subtitle">
                    ГАРАНТИИ НА ЦЕЛОСТНОСТЬ ДОСТАВКИ НЕТ
                </h4>
                <script src="./js/main.js"></script>
            </div>
        </section>
    </main>
</body>
</html>                             