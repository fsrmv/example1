<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Главная страница</title>

    <style>
      .links {
        color: #ffffff;
      }

      .icons {
        width: 70px;
      }

      .icons_p {
        padding: 5px 10px 5px 10px;
      }

      .cards {
        border: 2px solid white;
        text-align: left;
        padding: 10px;
        border-radius: 6px;
      }

      .price {
        font-size: 17px;
      }

      body {
        background: url(media/cover1.jpg) center center no-repeat;
        background-attachment: fixed;
        color: white;
        text-align: center;
        -moz-background-size: 100%;
        -webkit-background-size: 100%;
        -o-background-size: 100%;
        background-size: 100%
      }

      ::-webkit-scrollbar {
        width: 0;
      }

    </style>
  </head>
  <body>
    
    <div class="container" name="header">
      <div class="row">
        <header class="d-flex justify-content-between py-3">
          <a href="#" style="text-decoration: none; font-size: 25px;" class="link">Logo</a>
          <ul class="nav nav-pills">
            <li class="nav-item"><a href="#" class="nav-link links">Главная</a></li>
            <li class="nav-item"><a href="#" class="nav-link links">О нас</a></li>
            <li class="nav-item"><a href="#" class="nav-link links">Отзывы</a></li>
            <li class="nav-item"><a href="#" class="nav-link links">Контакты</a></li>
          </ul>
          <div>
            <button class="btn btn-outline-light" onclick="notFound()">Вход</button>
            <button class="btn btn-light" onclick="notFound()">Регистрация</button>
          </div>
        </header><hr style="color: white;">
      </div>
    </div>

    <div class="container">
      <div class="row">
        <div class="col-6" style="min-height: 500px;">
          <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="media/cover.jpg" class="d-block w-100">
              </div>
              <div class="carousel-item">
                <img src="media/cover2.jpg" class="d-block w-100">
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
        </div>
        <div class="col-6">
          <h1 style="margin-top: 180px;">Какой то текст</h1>
          <p>какой то текст поменьше</p>
          <button class="btn btn-light" id="base">Какая то кнопка</button>
      </div>
      </div><hr>
    </div>

    <div class="container">
      <div class="row">
          <h2>Кто мы?</h2>
      </div>
      <div class="container">
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus tempora cupiditate reiciendis praesentium quo? Perferendis quisquam nobis quam molestiae? Voluptatum quibusdam eum perspiciatis, quos dolore voluptatibus odit eius voluptas inventore. Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab quisquam sapiente neque consequuntur suscipit? Ipsa dicta omnis blanditiis libero provident est voluptatibus molestias quo, distinctio in, commodi ducimus veritatis dolorum.</p>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda, exercitationem, omnis odio aliquam et esse repudiandae beatae quo facere tempora incidunt pariatur error quae maiores perferendis. Repellat ipsum mollitia quisquam.</p>
          <img src="media/cover3.jpg" style="width: 70%;">
      </div>
    </div><br><hr><br>

    <div class="container">
      <div class="row">
        <h2>Почему мы - ваш лучший вариант?</h2>
      </div><br>
      <div class="row d-flex justify-content-evenly">
        <div class="col-3 icons_p">
          <img src="media/icon1.png" class="icons"><hr>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam consectetur iusto nemo dicta, dolorum. Veniam consectetur iusto nemo dicta, dolorum</p>
        </div>
        <div class="col-3 icons_p">
          <img src="media/icon2.png" class="icons"><hr>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam consectetur iusto nemo dicta, dolorum. Veniam consectetur iusto nemo dicta, dolorum</p>
        </div>
        <div class="col-3 icons_p">
          <img src="media/icon3.png" class="icons"><hr>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam consectetur iusto nemo dicta, dolorum. Veniam consectetur iusto nemo dicta, dolorum</p>
        </div>
      </div><br><br>

      <div class="row d-flex justify-content-evenly">
        <div class="col-3 icons_p">
          <img src="media/icon4.png" class="icons"><hr>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam consectetur iusto nemo dicta, dolorum. Veniam consectetur iusto nemo dicta, dolorum</p>
        </div>
        <div class="col-3 icons_p">
          <img src="media/icon5.png" class="icons"><hr>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam consectetur iusto nemo dicta, dolorum. Veniam consectetur iusto nemo dicta, dolorum</p>
        </div>
        <div class="col-3 icons_p">
          <img src="media/icon6.png" class="icons"><hr>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam consectetur iusto nemo dicta, dolorum. Veniam consectetur iusto nemo dicta, dolorum</p>
        </div>
      </div>
    </div><br><hr><br>

    <div class="container">
      <div class="row">
        <h2>Наши услуги</h2>
      </div><br>
      <div class="row d-flex justify-content-evenly">
        <div class="col-3 cards">
          <h3>Заголовок</h3>
          <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ducimus quidem dolorum quae earum, excepturi exercitationem consectetur fuga cupiditate laudantium ratione consequatur delectus accusantium inventore distinctio quia! Saepe eius molestiae recusandae.</p>
          <p class="price">Цена: от 15 000 ₽</p>
          <button class="btn btn-outline-light">Заказать</button>
        </div>
        <div class="col-3 cards">
          <h3>Заголовок</h3>
          <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ducimus quidem dolorum quae earum, excepturi exercitationem consectetur fuga cupiditate laudantium ratione consequatur delectus accusantium inventore distinctio quia! Saepe eius molestiae recusandae.</p>
          <p class="price">Цена: от 50 000 ₽</p>
          <button class="btn btn-outline-light">Заказать</button>
        </div>
        <div class="col-3 cards">
          <h3>Заголовок</h3>
          <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ducimus quidem dolorum quae earum, excepturi exercitationem consectetur fuga cupiditate laudantium ratione consequatur delectus accusantium inventore distinctio quia! Saepe eius molestiae recusandae.</p>
          <p class="price">Цена: от 800 ₽</p>
          <button class="btn btn-outline-light">Заказать</button>
        </div>
      </div><br>

      <div class="row d-flex justify-content-evenly">
        <div class="col-3 cards">
          <h3>Заголовок</h3>
          <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ducimus quidem dolorum quae earum, excepturi exercitationem consectetur fuga cupiditate laudantium ratione consequatur delectus accusantium inventore distinctio quia! Saepe eius molestiae recusandae.</p>
          <p class="price">Цена: от 40 000 ₽</p>
          <button class="btn btn-outline-light">Заказать</button>
        </div>
        <div class="col-3 cards">
          <h3>Заголовок</h3>
          <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ducimus quidem dolorum quae earum, excepturi exercitationem consectetur fuga cupiditate laudantium ratione consequatur delectus accusantium inventore distinctio quia! Saepe eius molestiae recusandae.</p>
          <p class="price">Цена: от 25 000 ₽</p>
          <button class="btn btn-outline-light">Заказать</button>
        </div>
        <div class="col-3 cards">
          <h3>Заголовок</h3>
          <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ducimus quidem dolorum quae earum, excepturi exercitationem consectetur fuga cupiditate laudantium ratione consequatur delectus accusantium inventore distinctio quia! Saepe eius molestiae recusandae.</p>
          <p class="price">Цена: от 5 000 ₽</p>
          <button class="btn btn-outline-light">Заказать</button>
        </div>
      </div>
    </div><br><hr>

    <div class="container">
      <div class="row">
        <h2>Остались вопросы? Свяжитесь с нами!</h2>
      </div><br>
      <div class="row">
        <div class="col-6" style="text-align: left;">

          <ul style="font-size: 19px;">
            <li>Адрес: ул. Того то, дом 76, офис 54</li>
            <li>email@email.email</li>
            <li>8-800-555-35-35</li>
          </ul><br><br>

          <input type="text" placeholder="Имя" class="form-control"><br>
          <input type="text" placeholder="Телефон" class="form-control"><br>
          <input type="checkbox" id="checkbox"><label for="checkbow">Я согласен на обработку моих персональных данных</label>
          <br><br><button class="btn btn-light">Оставить заявку</button>
        </div>
        <div class="col-6"><div style="position:relative;overflow:hidden;"><a href="https://yandex.ru/maps/org/gostiny_dvor/1365621138/?utm_medium=mapframe&utm_source=maps" style="color:#eee;font-size:12px;position:absolute;top:0px;">Гостиный двор</a><a href="https://yandex.ru/maps/172/ufa/category/shopping_mall/184108083/?utm_medium=mapframe&utm_source=maps" style="color:#eee;font-size:12px;position:absolute;top:14px;">Торговый центр в Уфе</a><iframe src="https://yandex.ru/map-widget/v1/-/CCU5eEvbTB" width="560" height="400" frameborder="1" allowfullscreen="true" style="position:relative;"></iframe></div></div>
      </div>
    </div><br><hr>

    <div class="container">
        <div class="row">
          <p class="price">Какая то компания, 2022</p>
        </div>
    </div><br>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="media/main.js"></script>
  </body>
</html>