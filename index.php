<?php
function callback($buffer)
{
    // заменить все яблоки апельсинами
    return ($buffer);
}

ob_start("callback");
?>
<!doctype html>
<html lang="ru" id="html">
<head>
    <meta charset="utf-8">
    <link rel="icon" type="image/png" href="favicon.ico">
    <title>Аренда авто</title>
    <meta name="description" content="Аренда авто">
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="main">
    <header class="top-info">
        <a title="Title" class="logo" href="#"><img alt="alternate" src="./img/logo.png"></a>
        <h1 class="common title"><span class="desktop">Аренда авто</span></h1>
        <p class="slogan">Автомобиль который<br> вас не подведет</p>
        <p class="address">Свободная улица, 16<br> г. Белгород</p>
        <ul class="top phones">
            <li class="phone"><a title="Title" class="call" href="tel:+79066000009">+7 (906) 600-00-09</a></li>
            <li class="phone"><a title="Title" class="call" href="tel:+79290006665">+7 (929) 000-66-65</a></li>
            <li class="work time">Без выходных с <strong>8:00</strong> до <strong>20:00</strong></li>
        </ul>
        <a title="Title" class="to order make" href="#">Заказать звонок</a>
    </header>
    <div class="rent">
        <h2 class="sub title">Аренда автомобилей в<br> Белгороде</h2>
        <h3 class="per day">От <strong>800</strong> руб/день и <strong>скидки</strong> от недели аренды</h3>
        <p>
            <a title="Title" class="make choice" href="#">Выбрать автомобиль</a>
        <p class="image"></p>
        <img alt="alternate" class="arrow" src="./img/arrow.svg">
        <ul class="nets">
            <li class="name">Наши контакты:</li>
            <li><a title="Title" href="#"><img alt="alternate" class="connect" src="./img/instagram-sketched.png"></a>
            </li>
            <li><a title="Title" href="#"><img alt="alternate" class="connect" src="./img/whatsapp.png"></a></li>
            <li><a title="Title" href="#"><img alt="alternate" class="connect"
                                               src="./img/iconfinder_vkontakte_386743.png"></a></li>
        </ul>
    </div>
    <div class="back">
        <ul class="features">
            <li class="advantages">
                <ul class="compact">
                    <li class="digits">500 +</li>
                    <li class="description">Успешно заключенных договоров</li>
                </ul>
            </li>
            <li class="advantages">
                <ul class="compact">
                    <li class="digits">3 +</li>
                    <li class="description">года успешной деятельности</li>
                </ul>
            </li>
            <li class="advantages">
                <ul class="compact">
                    <li class="digits">10</li>
                    <li class="description">Авто с повышенным комфортом</li>
                </ul>
            </li>
        </ul>
    </div>
    <div class="choice zone">
        <h2 class="choice title">Выберите автомобиль</h2>
        <h3 class="variant">Выберете вариацию <strong>КПП</strong></h3>
        <ul class="what">
            <li class="kind mechanic active">Механическая</li>
            <li class="kind automate not-active">Автоматическая</li>
        </ul>
        <div class="techno mech show">
            <div class="car">
                <div class="data">
                    <h3 class="info read">Mazda 6</h3>
                    <ol class="info">
                        <li class="text read">Залог:</li>
                        <li class="mean read">10 тыс руб</li>
                    </ol>
                    <ol class="info">
                        <li class="text read">Вариация КПП:</li>
                        <li class="mean read">Автоматическая</li>
                    </ol>
                    <ol class="info">
                        <li class="text read">Кузов/привод:</li>
                        <li class="mean read">Седан/передний</li>
                    </ol>
                    <ol class="info">
                        <li class="text read">Топливо/расход:</li>
                        <li class="mean read">(АИ-95) 8л/100км</li>
                    </ol>
                    <ol class="info">
                        <li class="text read">Доп. опции:</li>
                        <li class="mean read">Кондиционер</li>
                    </ol>
                    <div class="info order">
                        <p class="changing"><a title="Title" class="read" href="#">Выбрать автомобиль</a></p>
                        <div class="add">
                            <p class="read">Стоимость:</p>
                            <p class="read price"><strong>1300</strong> руб/день</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="car">
                <div class="data">
                    <h3 class="info read">Chevrolet Lacetti</h3>
                    <ol class="info">
                        <li class="text read">Залог:</li>
                        <li class="mean read">10 тыс руб</li>
                    </ol>
                    <ol class="info">
                        <li class="text read">Вариация КПП:</li>
                        <li class="mean read">Автоматическая</li>
                    </ol>
                    <ol class="info">
                        <li class="text read">Кузов/привод:</li>
                        <li class="mean read">Седан/передний</li>
                    </ol>
                    <ol class="info">
                        <li class="text read">Топливо/расход:</li>
                        <li class="mean read">(АИ-95) 8л/100км</li>
                    </ol>
                    <ol class="info">
                        <li class="text read">Доп. опции:</li>
                        <li class="mean read">Кондиционер</li>
                    </ol>
                    <div class="info order">
                        <p class="changing"><a title="Title" class="read" href="#">Выбрать автомобиль</a></p>
                        <div class="add">
                            <p class="read">Стоимость:</p>
                            <p class="read price"><strong>1200</strong> руб/день</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="car">
                <div class="data">
                    <h3 class="info read">Chevrolet Aveo</h3>
                    <ol class="info">
                        <li class="text read">Залог:</li>
                        <li class="mean read">10 тыс руб</li>
                    </ol>
                    <ol class="info">
                        <li class="text read">Вариация КПП:</li>
                        <li class="mean read">Автоматическая</li>
                    </ol>
                    <ol class="info">
                        <li class="text read">Кузов/привод:</li>
                        <li class="mean read">Седан/передний</li>
                    </ol>
                    <ol class="info">
                        <li class="text read">Топливо/расход:</li>
                        <li class="mean read">(АИ-95) 8л/100км</li>
                    </ol>
                    <ol class="info">
                        <li class="text read">Доп. опции:</li>
                        <li class="mean read">Кондиционер</li>
                    </ol>
                    <div class="info order">
                        <p class="changing"><a title="Title" class="read" href="#">Выбрать автомобиль</a></p>
                        <div class="add">
                            <p class="read">Стоимость:</p>
                            <p class="read price"><strong>1400</strong> руб/день</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="techno auto hide">
            <div class="car">
                <div class="data">
                    <h3 class="info read">ВАЗ kalina</h3>
                    <ol class="info">
                        <li class="text read">Залог:</li>
                        <li class="mean read">5 тыс руб</li>
                    </ol>
                    <ol class="info">
                        <li class="text read">Вариация КПП:</li>
                        <li class="mean read">Механика</li>
                    </ol>
                    <ol class="info">
                        <li class="text read">Кузов/привод:</li>
                        <li class="mean read">Хетчбэк 5 дв/передний</li>
                    </ol>
                    <ol class="info">
                        <li class="text read">Топливо/расход:</li>
                        <li class="mean read">(АИ-95) 8л/100км</li>
                    </ol>
                    <ol class="info">
                        <li class="text read">Доп. опции:</li>
                        <li class="mean read">-</li>
                    </ol>
                    <div class="info order">
                        <p class="changing"><a title="Title" class="read" href="">Выбрать автомобиль</a></p>
                        <div class="add">
                            <p class="read">Стоимость:</p>
                            <p class="read price"><strong>900</strong> руб/день</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="car">
                <div class="data">
                    <h3 class="info read">ВАЗ 2112</h3>
                    <ol class="info">
                        <li class="text read">Залог:</li>
                        <li class="mean read">5 тыс руб</li>
                    </ol>
                    <ol class="info">
                        <li class="text read">Вариация КПП:</li>
                        <li class="mean read">Механика</li>
                    </ol>
                    <ol class="info">
                        <li class="text read">Кузов/привод:</li>
                        <li class="mean read">Хетчбэк 5 дв/передний</li>
                    </ol>
                    <ol class="info">
                        <li class="text read">Топливо/расход:</li>
                        <li class="mean read">(АИ-95) 8л/100км</li>
                    </ol>
                    <ol class="info">
                        <li class="text read">Доп. опции:</li>
                        <li class="mean read">-</li>
                    </ol>
                    <div class="info order">
                        <p class="changing"><a title="Title" class="read" href="">Выбрать автомобиль</a></p>
                        <div class="add">
                            <p class="read">Стоимость:</p>
                            <p class="read price"><strong>800</strong> руб/день</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="conditions">
        <h2 class="t">Условия</h2>
        <h3 class="d">Выполнив их вы точно сможете<br> арендовать любой автомобиль</h3>
        <div class="condition">
            <div class="cond details">
                <ul class="view">
                    <li class="images"><img alt="alternate" src="./img/work.png"></li>
                    <li class="text"><strong>3</strong> года стажа владения автомобилем</li>
                </ul>
            </div>
            <div class="cond details">
                <ul class="view">
                    <li class="images"><img alt="alternate" src="./img/debt.png"></li>
                    <li class="text"><strong>Отсутсвие</strong><br> судебных задолженностей</li>
                </ul>
            </div>
            <div class="cond details">
                <ul class="view">
                    <li class="images"><img alt="alternate" src="./img/personal-information.png"></li>
                    <li class="text"><strong>Наличие</strong> паспорта и водительского удостоверения</li>
                </ul>
            </div>
            <div class="cond details">
                <ul class="view">
                    <li class="images"><img alt="alternate" src="./img/security.png"></li>
                    <li class="text"><strong>Залог</strong> от 5000 руб и выше в зависимости от автомобиля</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="free">
        <h2 class="cons">Бесплатная консультация</h2>
        <form class="call-back" method="post" id="ajax_form" action="#">
            <h3 class="tf">Введите свои данные</h3>
            <p class="massage">мы перезвоним в течении <strong>5</strong><br> минут и проконсультируем вас</p>
            <input class="call-name" type="text" name="name" placeholder="Дмитрий">
            <input class="call-phone mask" type="tel" name="phonenumber" placeholder="+7 (906) 600-00-09"
                   pattern="[7-9]{1}[0-9]{9}"
                   title="Phone number with 7-9 and remaing 9 digit with 0-9">
            <input class="send-number" type="submit" value="Заказать звонок">
            <div class="agreed">
                <input class="agree" type="checkbox">
                <p class="agreement">Нажимая на кнопку вы соглашаетесь с политикой конфиденциальности.</p>
            </div>
            <div id="result_form"></div>
        </form>
        <p class="our">Наши клиенты отмечают факт, <strong>вежливого</strong> общения. Свяжитесь и проверьте сами.</p>
    </div>
    <div class="advantage">
        <h2 class="t">Преимущества</h2>
        <div class="condition">
            <div class="cond details">
                <ul class="view">
                    <li class="images"><img alt="alternate" src="./img/gear.svg"></li>
                    <li class="text">Все автомобили с <strong>ТО</strong> и гарантией, <strong>ОСАГО</strong></li>
                </ul>
            </div>
            <div class="cond details">
                <ul class="view">
                    <li class="images"><img alt="alternate" src="./img/car-insurance.svg"></li>
                    <li class="text">Автомобили с <br>повышенным<br> <strong>комфортом</strong></li>
                </ul>
            </div>
            <div class="cond details">
                <ul class="view">
                    <li class="images"><img alt="alternate" src="./img/license.svg"></li>
                    <li class="text"><strong>Быстрое</strong> оформление договора по паспорту и водительскому
                        удостоверению
                    </li>
                </ul>
            </div>
            <div class="cond details">
                <ul class="view">
                    <li class="images"><img alt="alternate" src="./img/sale.svg"></li>
                    <li class="text"><strong>Скидки</strong> от 10% при аренде автомобиля на срок более недели</li>
                </ul>
            </div>
            <div class="cond details">
                <ul class="view">
                    <li class="images"><img alt="alternate" src="./img/tablet.svg"></li>
                    <li class="text">Оформление<br> аренды авто<br> <strong>онлайн</strong></li>
                </ul>
            </div>
            <div class="cond details">
                <ul class="view">
                    <li class="images"><img alt="alternate" src="./img/online-payment.svg"></li>
                    <li class="text">Оплата наличным, безналичным<br> платежом,<br> перевод на карту</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="emotions">
        <h2 class="t">Отзывы</h2>
        <div class="slider show">
            <p class="port"></p>
            <h3 class="tt">Екатерина Воронцова</h3>
            <p class="te">Брала автомобиль Mazda 6 на три дня - и не прогадала. Машина обслужина и ухожена. Цена
                устроила. Оформили аренду быстро через интернет, на все про все ушло минут 15</p>
            <div class="buttons">
                <a title="Title" class="make choice" href="#">Аудио-отзыв</a>
                <a title="Title" class="make choice" href="#">Видео-отзыв</a>
            </div>
        </div>
        <div class="slider">
            <p class="port"></p>
            <h3 class="tt">Александр</h3>
            <p class="te">Хорошие ребята, общительные, вежливые, всегда готовы помочь, подсказать. Автомобиль оказался
                без
                проблем, в общем всем доволен. Желаю удачи и хороших клиентов. Рекомендую (ЯНАО).</p>
            <div class="buttons">
                <a title="Title" class="make choice" href="">Аудио-отзыв</a>
                <a title="Title" class="make choice" href="">Видео-отзыв</a>
            </div>
        </div>
        <div class="slider">
            <p class="port"></p>
            <h3 class="tt">Станислав </h3>
            <p class="te">Условия проката, оперативность, техническое состояние автомобилей на уровне. Спасибо!</p>
            <div class="buttons">
                <a title="Title" class="make choice" href="">Аудио-отзыв</a>
                <a title="Title" class="make choice" href="">Видео-отзыв</a>
            </div>
        </div>
        <div class="slider">
            <p class="port"></p>
            <h3 class="tt">Роман Ивашов</h3>
            <p class="te">Хорошие автомобили и хозяин, и отношение к клиентам. Рекомендую.</p>
            <div class="buttons">
                <a title="Title" class="make choice" href="">Аудио-отзыв</a>
                <a title="Title" class="make choice" href="">Видео-отзыв</a>
            </div>
        </div>
        <div class="slider">
            <p class="port"></p>
            <h3 class="tt">Алексей</h3>
            <p class="te">Машина в хорошем техническом состоянии, свозила на “дальняк” без эксцессов.</p>
            <div class="buttons">
                <a title="Title" class="make choice" href="">Аудио-отзыв</a>
                <a title="Title" class="make choice" href="">Видео-отзыв</a>
            </div>
        </div>
        <p class="counter">
            <span class="emotion-number active">1</span>
            <span class="emotion-number">2</span>
            <span class="emotion-number">3</span>
            <span class="emotion-number">4</span>
            <span class="emotion-number">5</span>
        </p>
        <a title="Title" class="back-go" href="#"></a>
        <a title="Title" class="forward-go" href="#"></a>
    </div>
    <div class="rent-auto">
        <h3 class="t">Как арендовать авто</h3>
        <h4>Заявка онлайн или звонок</h4>
        <p><strong>Заполняете</strong> форму, выбрав необходимую услугу и ждете звонка оператора или звоните сами
            операту. <strong>Не забывайте,</strong>
            что звонок оператора можно заказать для консультации</p>
        <h4>Звонок оператора для подтверждения</h4>
        <p>После подачи заявления вам <strong>перезванивает</strong> оператор для подтверждения заявки и уточнения
            условий аренды.</p>
        <h4>Заполнение документов и оплата</h4>
        <p><strong>Заполняете</strong> документы, подтверждающие сделку и оплачиваете необходимую сумму.</p>
        <h4>Передача автомобиля арендатору</h4>
        <p>Вам передают ключи от автомобиля с самим автомобилем и <strong>начинается срок владения</strong>.</p>
    </div>
    <div class="faq">
        <h3 class="t">Частые вопросы</h3>
        <div class="flexing">
            <div class="slide"><input class="agree" type="checkbox">
                <h4>Какова политика относительно чистоты автомобиля?</h4>
                <p>Лимит суточного пробега - это километраж, который Вы можете проехать на арендованном авто за одни
                    сутки. Он составляет 200 километров.. А если суммарный пробег превысит 200 километров, то превышение
                    лимита вам будет необходимо оплатить по цене 1руб/1км.</p>
            </div>
            <div class="slide"><input class="agree" type="checkbox">
                <h4>Что такое лимит пробега? </h4>
                <p>Лимит суточного пробега - это километраж, который Вы можете проехать на арендованном авто за одни
                    сутки. Он составляет 200 километров.. А если суммарный пробег превысит 200 километров, то превышение
                    лимита вам будет необходимо оплатить по цене 1руб/1км.</p>
            </div>
            <div class="slide"><input class="agree" type="checkbox">
                <h4>Какова политика относительно бензина?</h4>
                <p>Лимит суточного пробега - это километраж, который Вы можете проехать на арендованном авто за одни
                    сутки. Он составляет 200 километров.. А если суммарный пробег превысит 200 километров, то превышение
                    лимита вам будет необходимо оплатить по цене 1руб/1км.</p>
            </div>
            <div class="slide"><input class="agree" type="checkbox">
                <h4>Смогу ли я получить автомобиль, если я задержусь и прибуду в офис после закрытия?</h4>
                <p>Лимит суточного пробега - это километраж, который Вы можете проехать на арендованном авто за одни
                    сутки. Он составляет 200 километров.. А если суммарный пробег превысит 200 километров, то превышение
                    лимита вам будет необходимо оплатить по цене 1руб/1км.</p>
            </div>
            <div class="slide"><input class="agree" type="checkbox">
                <h4>Что такое лимит пробега? </h4>
                <p>Лимит суточного пробега - это километраж, который Вы можете проехать на арендованном авто за одни
                    сутки. Он составляет 200 километров.. А если суммарный пробег превысит 200 километров, то превышение
                    лимита вам будет необходимо оплатить по цене 1руб/1км.</p>
            </div>
            <div class="slide"><input class="agree" type="checkbox">
                <h4>Что включает в себя цена проката?</h4>
                <p>Лимит суточного пробега - это километраж, который Вы можете проехать на арендованном авто за одни
                    сутки. Он составляет 200 километров.. А если суммарный пробег превысит 200 километров, то превышение
                    лимита вам будет необходимо оплатить по цене 1руб/1км.</p>
            </div>
            <div class="slide"><input class="agree" type="checkbox">
                <h4>Могу ли я выезжать за пределы Белгородской области?</h4>
                <p>Лимит суточного пробега - это километраж, который Вы можете проехать на арендованном авто за одни
                    сутки. Он составляет 200 километров.. А если суммарный пробег превысит 200 километров, то превышение
                    лимита вам будет необходимо оплатить по цене 1руб/1км.</p>
            </div>
            <div class="slide"><input class="agree" type="checkbox">
                <h4>Что делать если у меня не получается вернуть автомобиль в срок?</h4>
                <p>Лимит суточного пробега - это километраж, который Вы можете проехать на арендованном авто за одни
                    сутки. Он составляет 200 километров.. А если суммарный пробег превысит 200 километров, то превышение
                    лимита вам будет необходимо оплатить по цене 1руб/1км.</p>
            </div>
        </div>
    </div>
    <p class="more q">
        <a title="Title" class="kind mechanic questions" href="#">Больше вопросв</a>
    </p>
    <div class="contact">
        <form class="call-back">
            <h3 class="tf">Остались вопросы?</h3>
            <p class="massage">Задайте их нам!</p>
            <input class="call-name" type="text" placeholder="Введите ваше имя">
            <input class="call-phone mask" type="tel" placeholder="+7 (906) 600-00-09">
            <input class="send-number" type="submit" value="Заказать звонок">
            <div class="agreed">
                <input class="agree" type="checkbox">
                <p class="agreement">Нажимая на кнопку вы соглашаетесь с политикой конфиденциальности.</p>
            </div>
        </form>
        <img alt="alternate" class="map" src="./img/map.webp">
    </div>
</div>
<footer>
    <div class="top-info">
        <a title="Title" class="logo" href="#"><img alt="alternate" src="./img/logo.png"></a>
        <h1 class="common title">Аренда авто</h1>
        <p class="slogan">Автомобиль который<br> вас не подведет</p>
        <ul class="nets">
            <li class="name">Наши контакты:</li>
            <li class="icon"><a title="Title" href="#"><img alt="alternate" class="connect"
                                                            src="./img/instagram-sketched.png"></a></li>
            <li class="icon"><a title="Title" href="#"><img alt="alternate" class="connect"
                                                            src="./img/whatsapp.png"></a></li>
            <li class="icon"><a title="Title" href="#"><img alt="alternate" class="connect"
                                                            src="./img/iconfinder_vkontakte_386743.png"></a></li>
        </ul>
        <p class="confident"><a title="Title" href="#">Политика конфиденциальности</a></p>
        <ul class="top phones">
            <li class="phone"><a title="Title" class="call" href="tel:+79066000009">+7 (906) 600-00-09</a></li>
            <li class="phone"><a title="Title" class="call" href="tel:+79290006665">+7 (929) 000-66-65</a></li>
            <li class="work time">Без выходных с 8:00 до 20:00</li>
        </ul>
    </div>
</footer>


<script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/3.1.60/inputmask/jquery.inputmask.js"></script>
<script>window.jQuery || document.write('<script src="js/libs/jquery-1.7.1.min.js"><\/script>')</script>
<script src="js/script.js"></script>
</body>
</html>
<?php ob_end_flush(); ?>