<!DOCTYPE html>
<html lang="ru_RU">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
  <link rel="icon" href="img/favicon.ico" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/index/style.css">
  <script src="jquery/jquery.js" defer="defer"></script>
  <script src="bxSlider/bxSlider.js" defer="defer"></script>
  <title>ЗАО "Марийское"</title>
</head>
<body>
  <div id="preloader">
    <img src="img/logo.svg" alt="logo" id="pre-logo">
    <img src="img/preloader.png" alt="preloader" id="preloader-img">
    <!-- <h3>Пожалуйста, подождите, страница загружается!</h3> -->
  </div>
  <div class="slider-dots"></div>
  <header id="header">
    <div class="header-slider">
      <div class="slide" item="0" id="slide1" style="background-image: url('img/slide1-bg.jpg')">
        <div class="container header-content">
          <h1 class="main-heading">Экологически чистая курочка для питания всей семьи</h1>
          <div class="catalog-open-block">
            <p class="main-p">
              Курица содержит витамины группы А, В и Е, важнейшие аминокислоты и белок. 
              наша курочка особенно полезна, так как не содержит гормонов роста и ее качество 
              контролируется на всех этах производства.</p>
              <a href="catalog.php">
                <button class="catalog-open-btn">
                  Смотреть каталог
                </button>
              </a>
          </div>
        </div>
      </div>
      <div class="slide" item="1" id="slide2" style="background-image: url('img/slide2-bg.jpg')">
        <div class="container header-content">
          <h1 class="main-heading">
            Самая сочная, нежная и хрустящая курочка-гриль 
            в нашем гриль-баре!
          </h1>
          <div class="catalog-open-block">
            <p class="main-p">
              В нашем гриль-баре можно попробовать вкуснейшие блюда на гриле из курицы, 
              приготовленные по фирменным семейным рецептам.  Все сочное, яркое по вкусу 
              и приготовлено из отлично промариннованого мяса!
            </p>
            <button class="catalog-open-btn" id="shopsAnchor">
              Адрес гриль-бара
            </button>
          </div>
        </div>
      </div>
      <div class="slide" item="2" id="slide3" style="background-image: url('img/slide3-bg.jpg')">
        <div class="container header-content">
          <h1 class="main-heading">Натуральная, вкусная и полезная молочная продукция ЗАО “Марийское”</h1>
          <div class="catalog-open-block">
            <p class="main-p">
              Мы производим большой ассортимент полезных молочных продуктов, богатых витаминами 
              и питательными веществами, необходимыми для организма  и нормального функционирования 
              всех жизненно важных систем.
            </p>
            <a href="catalog.php">
              <button class="catalog-open-btn">
                Смотреть каталог
              </button>
            </a>
          </div>
        </div>
      </div>
      <div class="slide" item="3" id="slide4" style="background-image: url('img/slide4-bg.jpg')">
        <div class="container header-content">
          <h1 class="main-heading">Идеальный куриный шницель “Де-Воляй” на ужин за 15 минут!</h1>
          <div class="catalog-open-block">
            <p class="main-p">
              Для приготовления полезного и вкусного ужина не нужно тратить много времени - мы предлагаем 
              полуфабрикаты из мяса курицы, которые помогут сделать полноценный обед или ужин, когда на готовку 
              совершенно нет времени. 
            </p>
            <a href="catalog.php">
              <button class="catalog-open-btn">
                Смотреть каталог
              </button>
            </a>
          </div>
        </div>
      </div>
      <div class="slide" item="4" id="slide5" style="background-image: url('img/slide5-bg.jpg')">
        <div class="container header-content">
          <h1 class="main-heading">
            Идеальные куриные фрикадельки на ужин 
            за 15 минут!
          </h1>
          <div class="catalog-open-block">
            <p class="main-p">
              Для приготовления полезного и вкусного ужина не нужно тратить много времени - мы предлагаем 
              полуфабрикаты из мяса курицы, которые помогут сделать полноценный обед или ужин, когда на готовку совершенно 
              нет времени. 
            </p>
            <a href="catalog.php">
              <button class="catalog-open-btn">
                Смотреть каталог
              </button>
            </a>
          </div>
        </div>
      </div>
    </div>
  </header>
  <div class="product-features" id="product-features">
    <div class="container">
      <div>
        <h2 class="block-heading">Продукция ЗАО “Марийское”</h2>
        <h3 class="sub-block-heading">Преимущества нашей продукции</h3>
      </div>
      <div class="features-block">
        <div class="product-feature">
          <img src="img/hypoallergic.svg" alt="hypoallergic">
          <h4>Гипоаллергенно</h4>
          <p>Наша продукция не содержит гормонов роста, поэтому не вызывает реакции иммунитета</p>
        </div>
        <div class="product-feature">
          <img src="img/vitamins.svg" alt="vitamins">
          <h4>Витамины</h4>
          <p>Мясо курицы, яйца и творог содержат всю необходимую суточную норму витаминов и аминокислот</p>
        </div>
        <div class="product-feature">
          <img src="img/muscles.svg" alt="muscles">
          <h4>Источник белка</h4>
          <p>Мясо курицы засчет высокого содержания белка является очень питательным продуктом</p>
        </div>
      </div>
    </div>
  </div>
  <div class="we-recommend">
    <div class="container">
      <div class="we-recommend-headings">
        <div>
          <h2>Мы рекомендуем</h2>
        </div>
        <a href="catalog.php">
          <button class="we-recommend-btn" id="we-recommend-desktop-btn">Вся продукция</button>
        </a>
      </div>
      <div class="product-slider">
        <div class="product">
          <img src="img/chicken-legs.jpg" alt="chicken legs" class="product-img">
          <div>
            <h3>Окорочек</h3>
            <h4>0.8 кг - 180 ккал / 750кДж</h4>
          </div>
        </div>
        <div class="product">
          <img src="img/fried-pork.jpg" alt="fried pork" class="product-img">
          <div>
            <h3>Шницель “Де-Воляй”</h3>
            <h4>0.8 кг - 230 ккал / </h4>
          </div>
        </div>
        <div class="product">
          <img src="img/chicken-wings.jpg" alt="chicken wings" class="product-img">
          <div>
            <h3>Крылья куриные</h3>
            <h4>0.8 кг - 230 ккал / </h4>
          </div>
        </div>
        <button class="we-recommend-btn" id="we-recommend-mobile-btn">Вся продукция</button>
      </div>
    </div>
  </div>
  <div class="grill-bar" id="grill-bar">
    <div class="container">
      <div class="grill-bar-headings">
        <div>
          <h2>Гриль-бар ЗАО "Марийское"</h2>
        </div>
        <p>Вкуснейшая хрустящая курочка-гриль по семейному фирменному рецепту 
          в нашем гриль-баре в г.Йошкар-Ола
        </p>
      </div>
      <div class="dishes">
        <div class="dish">
          <img src="img/fried-chicken.jpeg" alt="chicken">
          <h3>Ароматная курочка-гриль</h3>
        </div>
        <div class="dish">
          <img src="img/fried-wings.jpeg" alt="wings">
          <h3>Зажаристые крылышки</h3>
        </div>
        <div class="dish">
          <img src="img/fried-legs.jpeg" alt="legs">
          <h3>Ножки-гриль в кисло-сладкой глазури</h3>
        </div>
      </div>
      <button destid="shops" id="grill-bar-anchor">Адрес гриль-бара</button>
    </div>
  </div>
  <div class="production" id="production">
    <div class="container">
      <div class="production-heading">
        <h2>Наше производство</h2>
      </div>
      <div class="production-features">
        <div class="production-feature">
          <div class="container">
            <img src="img/cereals.svg" alt="cereals">
            <h3>Зерно собственного производства</h3>
            <p>Мы кормим наших животных только экологически чистыми кормами 
              собственного производства без добавления гормональных препаратов и 
              стимуляторов роста. Общая площадь сельхозугодий ЗАО “Марийское”, где мы 
              выращиваем зерно и корм составляет 12 223 га, из них пашня – 10 793 га.
            </p>
          </div>
        </div>
        <div class="production-feature">
          <div class="container">
            <img src="img/temperature.svg" alt="temperature control">
            <h3>Охлаждение продукции для гарантии свежести</h3>
            <p>Охлаждение происходит в специальном холодильнике, который позволяет 
              сохранять свежесть продукта, но не влияет на вкусовые качества
            </p>
          </div>
        </div>
        <div class="production-feature">
          <div class="container">
            <img src="img/iso.svg" alt="iso mark">
            <h3>Контроль качества производства на всех этапах</h3>
            <p>Мы контролируем безопасность и качества производства на всех этапах, чтобы на Ваш 
              стол попадали самые лучшие продукты - от выращивания кормов до доставки готовой 
              продукции в наши фирменные магазины “Птица”.<br>Контроль осуществляется в соответствии с ISO_____
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="reviews">
    <div class="container">
      <div class="reviews-headings">
        <h2>Отзывы</h2>
        <button id="makeReview">Оставить отзыв</button>
      </div>
      <div class="reviews-block">
        <?php 
          while ($row = mysqli_fetch_assoc($args['reviews']))
          {
            echo "<div class='review'>
                    <div class='person-info'>
                      <img src='img/avatar.svg' alt='avatar'>
                      <h3>{$row['name']}</h3>
                      <h4>{$row['review_date']}</h4>
                    </div>
                    <hr>
                    <div class='review-content'>
                      <img src='img/quotes.svg' alt='quotes'>
                      <p>
                        {$row['review_content']}
                      </p>
                    </div>
                  </div>";
          }
        ?>
      </div>
    </div>
  </div>
  <div class="shops" id="shops">
    <div class="container">
      <div class="shops-heading">
        <h2>Адреса фирменных магазинов</h2>
      </div>
      <div class="map-block" id="map">
        <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A9f8eafb211c3139a29bd37ba7051c48e961e33a102fa45ad8819c3d750fb705b&amp;width=100%25&amp;height=600&amp;lang=ru_RU&amp;scroll=false"></script>
      </div>
    </div>
  </div>
  <div class="keep-in-touch">
    <div class="container">
      <button id="send-mail">
        Написать письмо
          <img src="img/letter-symbol.png" alt="letter">
      </button>
      <p>Свяжитесь с нами, если у вас возникли вопросы по работе сайта, 
        качеству товара или сотрудничеству
      </p>
      <a href="tel:88362000000">8-8362-000-000</a>
    </div>
  </div>
  <footer>
    <div class="container">
      <img src="img/logo.svg" alt="logo" class="logo">
      <div class="footer-links-block">
        <a href="catalog.php">Каталог продукции</a>
        <h3 destid="shops" id="footer-anchor-1">Гриль-бар</h3>
        <h3>Для бизнес-партнеров</h3>
      </div>
      <div class="footer-links-block">
        <h3>Раскрытие информации</h3>
        <h3 id="footer-modal-btn">Контакты</h3>
        <h3 destid="shops" id="footer-anchor-2">Адреса магазинов</h3>
      </div>
      <div class="awards">
        <h3>Наши награды:</h3>
        <div class="award-block">
          <img src="img/best-100-footer.png" alt="best 100 items">
        </div>
      </div>
    </div>
  </footer>
  <div id="modal-reviews" style="visibility: hidden;">
    <button id="modal-reviews-close"></button>
    <div class="container">
      <h2>Оставить отзыв</h2>
      <form action="" id="review-form">
        <div class="input-block">
          <h3>Имя</h3>
          <input type="text" class="small-input" name="name">
        </div>
        <div class="input-block">
          <h3>Email</h3>
          <input type="text" class="small-input" name="email">
        </div>
        <div class="input-block">
          <h3>Телефон</h3>
          <input type="text" class="small-input" name="mobile">
        </div>
        <div class="message-block">
          <h3>Напишите Ваш отзыв</h3>
          <div>
            <textarea class="big-input" name="review-content"></textarea>
          </div>
        </div>
        <div class="submit-block">
          <input type="submit" class="submit-btn" value="Отправить сообщение">
          <p>
            Нажимая кнопку “Отправить сообщение”, Вы подтверждаете согласие 
            на обработку персональных данных
          </p>
        </div>
      </form>
    </div>
  </div>
  <div id="modal-mail" style="visibility: hidden;">
    <button id="modal-mail-close"></button>
    <div class="container">
      <h2>Напишите нам</h2>
      <form action="" id="mail-form">
        <div class="input-block">
          <h3>Имя и фамилия</h3>
          <input type="text" class="small-input" name="name">
        </div>
        <div class="input-block">
          <h3>Email</h3>
          <input type="text" class="small-input" name="email">
        </div>
        <div class="input-block">
          <h3>Телефон</h3>
          <input type="text" class="small-input" name="mobile">
        </div>
        <div class="message-block">
          <h3>Сопроводительное письмо</h3>
          <div>
            <textarea class="big-input" name="mail-content"></textarea>
          </div>
        </div>
        <div class="submit-block">
          <input type="submit" class="submit-btn" value="Отправить сообщение">
          <p>
            Нажимая кнопку “Отправить сообщение”, Вы подтверждаете согласие 
            на обработку персональных данных
          </p>
        </div>
      </form>
    </div>
  </div>
  <div id="modal-menu" style="visibility: hidden;">
    <button id="modal-menu-close"></button>
    <div class="modal-menu-left">
      <img src="img/logo.svg" alt="logo" class="logo">
      <div>
        <h3 class="modal-menu-left-text">Горячая линия:</h3>
        <h3 class="modal-menu-numbers">8 (8362) 000 - 000</h3>
      </div>
      <div>
        <h3 class="modal-menu-left-text">Приемная:</h3>
        <h3 class="modal-menu-numbers">8 (8362) 000 - 000</h3>
      </div>
      <h4>email@email.ru</h4>
      <img src="img/small-insta-logo.png" alt="instagram" class="small-insta-logo">
    </div> 
    <div class="modal-menu-right">
      <div class="modal-menu-right-block">
        <img src="img/chicken.svg" alt="chicken">
        <div class="modal-menu-content">
          <h3 class="modal-menu-right-links">Мясо птицы</h3>
          <h3 class="modal-menu-right-links">Колбасные изделия</h3>
          <h3 class="modal-menu-right-links">Молочная продукция</h3>
          <h3 class="modal-menu-right-links">Полуфабрикаты</h3>
          <h3 class="modal-menu-right-links">Сыры</h3>
        </div>
      </div>
      <div class="modal-menu-right-block">
        <img src="img/others-label.svg" alt="others label">
        <div class="modal-menu-content">
          <h3 class="modal-menu-right-links">Раскрытие информации</h3>
          <h3 class="modal-menu-right-links">Соглашение о конфиденциальности</h3>
          <h3 class="modal-menu-right-links">Для бизнес-партнеров</h3>
          <h3 class="modal-menu-right-links">Наши награды</h3>
        </div>
      </div>
    </div>
  </div>
  <div id="shadow" id="shadow" style="visibility: hidden;"></div>
  <img src="img/logo.svg" alt="logo" id="mobile-logo">
  <div id="nav-block">
    <nav id="header-nav">
      <div class="container">
        <a destid="header" id="logoLink"></a>
        <div class="links-hover" style="margin-left: 0"><a destid="product-features" class="nav-links">продукция</a></div>
        <div class="links-hover"><a destid="shops" class="nav-links">магазины</a></div>
        <div class="links-hover"><a destid="production" class="nav-links">производство</a></div>
        <div class="links-hover"><a destid="grill-bar" class="nav-links">гриль-бар</a></div>
        <button class="insta-btn">
          <img src="img/insta-button.png" alt="Instagram">
        </button>
        <button class="modal-btn" id="modal-btn">
          <img src="img/header-modal-btn.png" alt="Open the menu">
        </button>
      </div>
    </nav>
  </div>
   <script src="js/index/script.js" defer="defer"></script>
   <script src="js/index/saveReview.js" defer></script>
   <script src="js/common/mail.js" defer></script>
</body>
</html>