<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Наш автопарк</title>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/reset.css">
    <link rel="apple-touch-icon" sizes="180x180" href="/img/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/img/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/img/favicon-16x16.png">
    <link rel="manifest" href="/img/site.webmanifest">
    <link rel="mask-icon" href="/img/safari-pinned-tab.svg" color="#5bbad5">
    <link rel="shortcut icon" href="/img/favicon.ico">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="msapplication-config" content="/img/browserconfig.xml">
    <meta name="theme-color" content="#ffffff">
</head>
<body>

    <section class="avto" id="автопарк">
            <div class="wrapper-full" id="list">
                <form>
                    <script type="text/javascript"></script>
                    <input type="text" placeholder="Search..." id="text-to-find" value="">
                    <input type="button" onclick="javascript: FindOnPage('text-to-find'); return false;" value="Search">
                </form> 
                <h2 class="avto__title" id="elastic">
                    НАШ АВТОПАРК
                </h2>
                <h3 class="avto__subtitle1" id="li">
                    КамАЗ-65222
                </h3>
                <div class="avto__card">
                    <figure class="avto__card">
                        <img src="./img/%D0%9A%D0%B0%D0%BC%D0%90%D0%97-65222-6010-53.jpg" alt="КамАЗ-65222-6010-53" class="avto__img">
                        <div class="avto__text"  id="li">
                            <?php
                            $f = fopen("avto_1.txt", "r");
                            echo fgets($f);
                            fclose($f);
                            ?>
                        </div>    
                    </figure>
                </div>
                
                <h3 class="avto__subtitle1"  id="li">
                    DAF XF 105
                </h3>
                <div class="avto__card">
                    <figure class="avto__card">
                        <img src="./img/fura-20-tonn.jpg" alt="DAF XF 105" class="avto__img">
                        <div class="avto__text"  id="li">
                            <?php
                            $f = fopen("avto_2.txt", "r");
                            echo fgets($f);
                            fclose($f);
                            ?>
                        </div>    
                    </figure>
                </div>
                
                              <h3 class="avto__subtitle1"  id="li">
                    Газель NEXT
                </h3>
                <div class="avto__card">
                    <figure class="avto__card">
                        <img src="./img/OQAAAgLt9-A-960.jpg" alt="DAF XF 105" class="avto__img">
                        <div class="avto__text"  id="li">
                            <?php
                            $f = fopen("avto_3.txt", "r");
                            echo fgets($f);
                            fclose($f);
                            ?>
                        </div>    
                    </figure>
                </div>
                <button onclick="document.location='./index.php'" type="button" name="go__back" class="button__back">
                    НАЗАД
                </button>
                <h4 class="spusk">  </h4>
            </div>
        </section>
        <script type="text/javascript" src="script.js"></script>
</body>
</html>