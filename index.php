<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Лабораторна робота 3.3 Виконав: Кирсенко Гліб з ІН-304</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.0/font/bootstrap-icons.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>

    <!-- Навбар -->
    <nav class="navbar navbar-expand-lg bg-dark border-bottom border-body" data-bs-theme="dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="img/Logo.svg" alt="TechnoShop" width="30" height="24">TechnoShop
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav me-auto">
                    <button id="orderButton" class="btn btn-dark-orange btn-lg" type="button">
                        <i class="bi bi-telephone"></i>
                        Зробити замовлення
                    </button>
                </div>
            </div>
        </div>
    </nav>

    <!-- Форма для заявки на консультацію -->
    <div id="consultationForm" class="d-none bg-light p-3">
        <div class="d-flex justify-content-between mb-3">
            <h2>Заявка на консультацію</h2>
            <button id="closeButton" class="btn btn-dark-orange btn-lg" type="button">
                Закрити
            </button>
        </div>
        <form id="consultationFormElement">
            <div class="mb-3">
                <label for="first_name" class="form-label">Ім'я</label>
                <input type="text" class="form-control" id="first_name" required>
            </div>
            <div class="mb-3">
                <label for="last_name" class="form-label">Прізвище</label>
                <input type="text" class="form-control" id="last_name" required>
            </div>
            <div class="mb-3">
                <label for="phone_number" class="form-label">Номер телефону</label>
                <input type="tel" class="form-control" id="phone_number" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Пошта</label>
                <input type="email" class="form-control" id="email" required>
            </div>
            <button type="submit" class="btn btn-primary" style="background-color: #FF5733; border: none;">Відправити</button>
        </form>
    </div>

    <!-- Повідомлення про успіх -->
    <div id="successMessage" class="alert alert-success d-none mt-3" role="alert" style="border: none;margin: 0;">
        <h4 class="alert-heading">Ваші дані збережено!</h4>
        <p>Очікуйте на дзвінок!</p>
        <button id="closeSuccessButton" class="btn btn-dark-orange btn-lg" type="button">Дякую!</button>
    </div>

    <style>
        .btn-dark-orange {
            background-color: #FF5733;
            color: white;
            border: none;
        }
    </style>

    <!-- JavaScript для відкриття та закриття форми та відправки даних -->
    <script>
        document.getElementById('orderButton').addEventListener('click', function() {
            document.getElementById('consultationForm').classList.remove('d-none');
        });

        document.getElementById('closeButton').addEventListener('click', function() {
            document.getElementById('consultationForm').classList.add('d-none');
        });

        document.getElementById('closeSuccessButton').addEventListener('click', function() {
            document.getElementById('successMessage').classList.add('d-none');
        });

        document.getElementById('consultationFormElement').addEventListener('submit', function(event) {
            event.preventDefault();
            // Показати повідомлення про успіх
            document.getElementById('successMessage').classList.remove('d-none');
            // Сховати форму
            document.getElementById('consultationForm').classList.add('d-none');
            // Скинути форму
            document.getElementById('consultationFormElement').reset();
        });
    </script>

  <!-- Карусель -->
         <div id="carouselExampleCaptions" class="carousel slide">
           <div class="carousel-indicators">
             <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
             <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
             <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
           </div>
           <div class="carousel-inner">
             <div class="carousel-item active">
               <img src="img/1.jpg" class="d-block w-100" alt="...">
               <div class="carousel-caption d-none d-md-block">
                 <h5>Найкраща якість комп'ютерів</h5>
                 <p>Всю роботу виконують професійні інженери із максимальною швидкістю та із фірмових комплектуючих.</p>
               </div>
             </div>
             <div class="carousel-item">
               <img src="img/2.webp" class="d-block w-100" alt="...">
               <div class="carousel-caption d-none d-md-block">
                 <h5>Гарний дизайн</h5>
                 <p>Дизайнерський підхід до кожного клієнта.</p>
               </div>
             </div>
             <div class="carousel-item">
               <img src="img/3.jpg" class="d-block w-100" alt="...">
               <div class="carousel-caption d-none d-md-block">
                 <h5>Потужність</h5>
                 <p>Тільки найкращі комплектуючі які прокачують твій ПК на новий рівень.</p>
               </div>
             </div>
           </div>
           <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
             <span class="carousel-control-prev-icon" aria-hidden="true"></span>
             <span class="visually-hidden">Previous</span>
           </button>
           <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
             <span class="carousel-control-next-icon" aria-hidden="true"></span>
             <span class="visually-hidden">Next</span>
           </button>
         </div>

<!-- Заголовок Комлектуючі -->
<div class="container-fluid bg-white text-dark py-3">
  <h1 class="text-center">Комлектуючі</h1>
</div>

<!-- Картки -->
<div class="row row-cols-1 row-cols-md-3 g-4">
    <div class="col">
        <div class="card">
            <img src="img/4.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Відеокарти</h5>
                <p class="card-text">Nvidia, Asus, AMD</p>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card">
            <img src="img/5.webp" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Процессори</h5>
                <p class="card-text">AMD, Intel, Nvidia</p>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card">
            <img src="img/6.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Материнські плати</h5>
                <p class="card-text">Asus, Gigabyte, MSI</p>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card">
            <img src="img/7.webp" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Оперативна пам'ять</h5>
                <p class="card-text">Corsair, G.Skill, Samsung, Kingston</p>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card">
            <img src="img/8.webp" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Система охолодження</h5>
                <p class="card-text">Asus, G.Skill, Cooler Master</p>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card">
            <img src="img/9.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Корпуси</h5>
                <p class="card-text">Asus, MSI, NZXT, Thermaltake</p>
            </div>
        </div>
    </div>
</div>

<!-- Виведення з БД -->
<div class="row row-cols-1 row-cols-md-3 g-4 mt-3">
    <?php
    // Підключення до бази даних
    include("form/con_bd.php");

    // Вибірка перших трьох рядків з таблиці components
    $result = mysqli_query($link, "SELECT * FROM components LIMIT 3");

    // Перевірка наявності результату вибірки
    if ($result) {
        // Цикл для виведення карточок для кожного рядка результату
        while ($row = mysqli_fetch_array($result)) {
            echo '<div class="col">';
            echo '<div class="card">';
            echo '<img src="' . $row["image_path"] . '" class="card-img-top" alt="..." style="height: 200px; object-fit: cover;">'; // Задати фіксовану висоту та стилізувати об'єкт
            echo '<div class="card-body">';
            echo '<h5 class="card-title">' . $row["Name"] . '</h5>';
            echo '<p class="card-text">' . $row["Manufacturer"] . '</p>';
            echo '</div>';
            echo '</div>';
            echo '</div>';
        }
    }
    ?>
</div>

<!-- Футер -->
<div class="container">
    <footer class="d-flex justify-content-center row row-cols-1 row-cols-sm-2 row-cols-md-5 py-5 my-5 border-top">
        <div class="col mb-3">
            <a href="/" class="d-flex align-items-center mb-3 link-body-emphasis text-decoration-none">
                <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
            </a>
            <p class="text-body-secondary">© 2024</p>
        </div>

        <div class="col mb-3">
            <h5>Контактні дані</h5>
            <ul class="nav flex-column">
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">+38(632)846-71-97</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">+38(69)112-98-32</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">+38(69)479-01-53</a></li>
            </ul>
        </div>

        <div class="col mb-3">
            <h5>Наші послуги</h5>
            <ul class="nav flex-column">
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Готові макети ПК</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">ПК на замовлення</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Підбір комплектуючих</a></li>
            </ul>
        </div>

        <div class="col mb-3">
            <h5>Цікаві статті</h5>
            <ul class="nav flex-column">
                <li class="nav-item mb-2"><a href="https://nvidianews.nvidia.com/" class="nav-link p-0 text-body-secondary">Nvidia</a></li>
                <li class="nav-item mb-2"><a href="https://www.amd.com/en/newsroom.html" class="nav-link p-0 text-body-secondary">AMD</a></li>
                <li class="nav-item mb-2"><a href="https://ir.corsair.com/news-releases/" class="nav-link p-0 text-body-secondary">Corsair</a></li>
            </ul>
        </div>
    </footer>
</div>

<script src="js/jquery-3.7.1.min.js"></script>
<script src="js/zapyt.js"></script>

</body>
</html>