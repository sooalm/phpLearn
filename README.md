# phpLearn
Сначала создадим БД с именем usersTable в phpMyAdmin (  в моем случае сервер развернут на Open Server) 

 ![image](https://user-images.githubusercontent.com/56484358/206900387-8b282d02-6777-43b2-a7ce-12bfc6b0d418.png)

Далее выберем ее в левой панели и нажмем кнопку импорт и выберем файл usersTable.sql

 ![image](https://user-images.githubusercontent.com/56484358/206900395-209c1f9b-dd11-4bc7-a0f8-91117cde5213.png)

Открываем наш проект 

 ![image](https://user-images.githubusercontent.com/56484358/206900399-2f143c3a-f6aa-4866-975d-41a2f97c5c68.png)

Вносим данные в форму

 ![image](https://user-images.githubusercontent.com/56484358/206900407-d40a9477-c87c-4bbd-a1f3-8a9d6d3e0512.png)

Нажимаем на кнопку отправить и наблюдаем результат (данные что были последними отправлены на сервер и в почту админа)

 ![image](https://user-images.githubusercontent.com/56484358/206900414-5bdd221b-39b2-40b3-96a0-df5d3e6b1818.png)

Мы также можем перемещаться по страницам, данные на страничке “Мои данные” хранятся в сессии и никуда не исчезнут пока мы снова не отправим форму
(пока не разобрался как с помощью js или ajax сносить сессию)

Фотография пользователя сохраняется в папку userImages , в БД хранится только название фото.

Так выглядит таблица в админер: 

![image](https://user-images.githubusercontent.com/56484358/206900429-b0336c2a-1949-4fab-8aa3-3be50ba3a764.png)

