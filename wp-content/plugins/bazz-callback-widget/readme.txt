=== Bazz CallBack widget ===
Contributors: glomberg
Donate link: https://www.paypal.me/bazzwidget
Tags: callback, call back, widget, leads
Requires at least: 3.0.1
Tested up to: 4.7
Stable tag: trunk
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

This plugin makes a simple widget for callback on your website.

== Description ==
Скоро: виджет станет адаптивным для любых устройств!

Any questions : bazz@bk.ru

The plugin is intended for easy creating a widget on your website.
The widget will be performing "call-back function". That is, you will be recieving client's phone which the client will have specified in the widget by your e-mail.

== Installation ==

Just install and activate the plugin, and the widget of a call-back Bazz CallBack will appear on your website.

== Frequently Asked Questions ==

= После обновления у меня слетели стили или перестали работать кнопки =

Почистите кеш браузера. Нажмите ctrl+F5 на странице вашего сайта.

= Не получаю письмо от виджета =

1. Проверьте, правильно ли вы указали email  в настройках плагина.
2. Если при нажатии на "Жду звонка" курсор принимает вид ожидания и ничего не происходит - значит ошибка в коде плагина. Ее можно найти в логах PHP и прислать автору на изучение.
3. Если при нажатии письмо отправляется (выводится текст-результат), но не приходи на почту - проверьте логи почтового сервера. Возможно письмо застряло из-за неправильной настройки почтового сервера или из-за заблокированной возможности отправки.
3.1 На некоротых хостингах почтовый сервер работает в ограниченном режиме либо специально фильтрует уведомления от WordPress. В таком случае вам может помочь настройка отправки сообщений через внешний SMTP сервер (например gmail). Проще всего настроить это с помощью соответствующего плагина (см. гугл).
4. И наконец, проверьте папку "Спам" вашей почты :-)

== Screenshots ==

1. The widget looks so same

== Changelog ==

= 3.2 - 09 March 2017 =
* Плагин отключен на мобильных устройствах.
* Внедрена версионность стилей - больше не будет проблем, требующих очистки кеша браузера.
* Увеличен z-index
* Fix minor issues

= 3.1 - 25 January 2017 =
* !После обновлния чистите кеш страницы (ctrl+F5)
* Fix minor issues

= 3.0 - 23 January 2017 =
* !После обновлния чистите кеш страницы (ctrl+F5)
* You can change color scheme
* You can change left/right side to the show
* Mail() function was changed to wp_mail()
* Fix translations
* Fix minor issues

= 2.3 - 20 January 2017 =
* Fix minor issues

= 2.2 - 23 December 2016 =
* Fix minor issues
* Добавлена поддержка ввода телефонных номеров стран СНГ


= 2.1 =
* Fix minor issues

= 2.0 =
* This is the major update.
* Plugin was localized:
	* added default EN language
	* added addition RU language

* Some options was deleted.


= 1.4 =
* Исправлена опечатка

= 1.3 =
* Исправлено несколько ошибок
	- исправлено подключение jQuery
	- исправлена логика отображения текста в рабочее/нерабочее время
* Изменено расположение от правого края (75рх)

= 1.2 =
* Внедрен ползунок для выбора режима работы

= 1.1 =
* Добавлена возможность:
* менять время работы (днем и ночью разные сообщения)
* менять расстояние от низа экрана до виджета
* поправлена кнопка закрыть для Safari

= 1.0 =
* Start version.