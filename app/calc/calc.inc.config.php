<?php

$config = array(
'URL' => 'calc/',
#'URL' => 'https://infoshell.ru/wp-content/themes/mark_up/calc/',
);

$calc = array(
    'platform' => array(
        'name' => 'Выберите платформу',
        'fields' => array(
            'apple' => array(
                'name' => 'Мобильная платформа iOS',
                'icn' => 'apple',
            ),
            'android' => array(
                'name' => 'Мобильная платформа Android',
                'icn' => 'android',
            ),
            'web' => array(
                'name' => 'Веб-сайт',
                'icn' => 'laptop',
            ),
        )
    ),
	'device' => array(
        'name' => 'Выберите устройство',
        'fields' => array(
            'mobile' => array(
                'name' => 'Смартфон',
                'icn' => 'mobile',
            ),
            'tablet' => array(
                'name' => 'Планшет',
                'icn' => 'tablet',
            ),
            'watch' => array(
                'name' => 'Часы',
                'icn' => 'watch',
            ),
            'tv' => array(
                'name' => 'Телевизор',
                'icn' => 'tv',
            ),
        )
    ),
	'level' => array(
        'name' => 'Сложность приложения',
        'fields' => array(
            'S7' => array(
                'name' => 'До 7 экранов',
                'image' => 'S',
                'type' => 'radio',
            ),
            'M15' => array(
                'name' => 'До 15 экранов',
                'image' => 'M',
                'type' => 'radio',
            ),
            'L25' => array(
                'name' => 'До 25 экранов',
                'image' => 'L',
                'type' => 'radio',
            ),
        )
    ),
	'design' => array(
        'name' => 'Дизайн',
        'fields' => array(
            'native' => array(
                'name' => 'Нативные элементы',
                'icn' => 'layout1',
                'type' => 'radio',
            ),
            'middle' => array(
                'name' => 'Свой дизайн, несложные элементы',
                'icn' => 'layout2',
                'type' => 'radio',
            ),
            'top' => array(
                'name' => 'Кастомный крутой дизайн',
                'icn' => 'layout3',
                'type' => 'radio',
            ),
        )
    ),
	'rotate' => array(
        'name' => 'Ориентация',
        'fields' => array(
            'book' => array(
                'name' => 'Книжная',
                'image' => '<svg xmlns="http://www.w3.org/2000/svg" width="34" height="34" viewBox="0 0 34 34"><rect class="svg-stroke" width="23" height="30" x="5.5" y="1.5" fill="none" fill-rule="evenodd" stroke="#ffffff" stroke-width="3" rx="2"/></svg>',
                'type' => 'radio',
            ),
            'album' => array(
                'name' => 'Альбомная',
                'image' => '<svg xmlns="http://www.w3.org/2000/svg" width="34" height="34" viewBox="0 0 34 34"><rect class="svg-stroke" width="23" height="30" x="6" y="3" fill="none" fill-rule="evenodd" stroke="#ffffff" stroke-width="3" rx="2" transform="rotate(90 17.5 18)"/></svg>',
                'type' => 'radio',
            ),
            'book_album' => array(
                'name' => 'книжная и альбомная',
                'image' => '<svg xmlns="http://www.w3.org/2000/svg" width="34" height="34" viewBox="0 0 34 34"><g class="svg-stroke" fill="none" fill-rule="evenodd" stroke="#ffffff" stroke-width="3"><rect width="19" height="23" x="1.5" y="1.5" rx="2"/><rect width="17" height="24" x="12" y="12" rx="2" transform="rotate(90 20.5 24)"/></g></svg>',
                'type' => 'radio',
            ),
        )
    ),
	'auth' => array(
        'name' => 'Авторизация',
        'fields' => array(
            'email' => array(
                'name' => 'Email',
                'icn' => 'at',
            ),
            'tel' => array(
                'name' => 'Телефон',
                'icn' => 'tel',
            ),
            'social' => array(
                'name' => 'Соц.сети',
                'icn' => 'people',
            ),
        )
    ),
	'content' => array(
        'name' => 'Наполнение',
        'fields' => array(
            'news' => array(
                'name' => 'Лента новостей',
                'icn' => 'news',
            ),
            'profile' => array(
                'name' => 'Профиль пользователя',
                'icn' => 'profile',
            ),
            'search' => array(
                'name' => 'Поиск, фильтрация',
                'image' => '<svg xmlns="http://www.w3.org/2000/svg" width="34" height="34" viewBox="0 0 34 34"><g fill="none" fill-rule="nonzero"><path class="svg-fill" fill="#ffffff" d="M17.21 23.855v3.442a2 2 0 0 1-2 2h-1.376a2 2 0 0 1-2-2V21.75L1.115 9h13.157A12.45 12.45 0 0 0 13 14.5a12.47 12.47 0 0 0 4.21 9.355zM18.714 4c-1.24.803-2.33 1.82-3.216 3H2.025a1.5 1.5 0 0 1 0-3h16.69z"/><path class="svg-stroke" stroke="#ffffff" stroke-width="4" d="M31.559 22.798l-3.392-3.633 1.204-1.361a6.5 6.5 0 1 0-2.541 1.767l1.259-.484 3.467 3.714.003-.003z"/></g></svg>',
            ),
            'catalog' => array(
                'name' => 'Каталоги, категории',
                'icn' => 'catalog',
            ),
            'upload' => array(
                'name' => 'Загрузка фото, аудио, видео',
                'image' => '<svg xmlns="http://www.w3.org/2000/svg" width="34" height="34" viewBox="0 0 34 34"><g fill="none" fill-rule="evenodd"><path class="svg-fill" fill="#ffffff" fill-rule="nonzero" d="M10 10.875c-1.326 0-2.4 1.092-2.4 2.438S8.674 15.75 10 15.75c1.325 0 2.4-1.091 2.4-2.438 0-1.345-1.075-2.437-2.4-2.437zm6.4-2.438h-1.92a.713.713 0 0 1-.632-.462l-.496-1.513A.714.714 0 0 0 12.72 6H7.28a.713.713 0 0 0-.632.462l-.496 1.513a.714.714 0 0 1-.632.463H3.6c-.88 0-1.6.73-1.6 1.624v7.313C2 18.269 2.72 19 3.6 19h12.8c.88 0 1.6-.731 1.6-1.625v-7.313c0-.893-.72-1.624-1.6-1.624zM10 17.376c-2.21 0-4-1.819-4-4.063C6 11.07 7.79 9.25 10 9.25c2.209 0 4 1.819 4 4.063 0 2.243-1.791 4.062-4 4.062zm5.84-6.176a.564.564 0 0 1-.56-.569c0-.314.25-.569.56-.569.31 0 .56.255.56.57 0 .313-.25.568-.56.568z"/><g class="svg-fill" fill="#ffffff"><path fill-rule="nonzero" d="M30.63 14.121v-1.784a1 1 0 0 0-1.128-.992l-7.812 1.013a1 1 0 0 0-.871.992V15H19V9.062c0-.893-.72-1.624-1.6-1.624h-1.073c.193-.307.462-.56.78-.736A3.204 3.204 0 0 1 16 4.286c0-1.776 1.427-3.215 3.188-3.215 1.76 0 3.187 1.44 3.187 3.215 0 .827-.318 1.573-.827 2.143h1.948a3.75 3.75 0 0 1-1.121-2.679c0-2.071 1.665-3.75 3.719-3.75s3.718 1.679 3.718 3.75c0 1.364-.729 2.546-1.809 3.202.454.394.747.97.747 1.62l3.188-2.143c.587 0 1.062.479 1.062 1.071v6.429C33 14.52 32.525 15 31.937 15l-1.307-.879zM19.188 6.43c1.173 0 2.125-.96 2.125-2.143a2.134 2.134 0 0 0-2.125-2.143c-1.174 0-2.125.96-2.125 2.143 0 1.183.951 2.143 2.125 2.143zm6.906.005c1.47 0 2.662-1.201 2.662-2.684s-1.192-2.684-2.662-2.684-2.662 1.201-2.662 2.684c0 1.482 1.191 2.684 2.662 2.684zM16.84 10.2a.564.564 0 0 1-.56-.569c0-.314.25-.569.56-.569.31 0 .56.255.56.57 0 .313-.25.568-.56.568z"/><path d="M29.88 12.089a.347.347 0 0 0-.277-.086l-7.73 1.022a.356.356 0 0 0-.305.354v8.593a2.747 2.747 0 0 0-1.933-.775C18.182 21.197 17 22.275 17 23.6S18.182 26 19.635 26c1.453 0 2.635-1.077 2.635-2.401v-7.3l7.027-.929v4.295a2.708 2.708 0 0 0-1.907-.767c-1.44 0-2.61 1.078-2.61 2.402s1.171 2.4 2.61 2.4c1.439 0 2.61-1.076 2.61-2.4v-8.942a.36.36 0 0 0-.12-.269zM11.952 27.236a.454.454 0 0 0-.453-.3h-3.5v-4.432A.483.483 0 0 0 7.5 22H4.5a.484.484 0 0 0-.5.504v4.432H.5c-.208 0-.359.1-.452.3a.51.51 0 0 0 .078.552l5.546 6.055a.51.51 0 0 0 .734 0l5.468-6.055a.51.51 0 0 0 .078-.552z"/></g></g></svg>',
            ),
            'editfoto' => array(
                'name' => 'Редактирование фото, видео',
                'image' => '<svg xmlns="http://www.w3.org/2000/svg" width="34" height="34" viewBox="0 0 34 34"><g fill="none" fill-rule="evenodd"><g class="svg-fill" fill="#ffffff"><path d="M1.212 10.354v-3.74l5.402-5.401h3.74l-9.142 9.141zm0 5.454v-3.74L12.068 1.213h3.74L1.211 15.808zm15.15-2.528v3.082h-3.083l3.082-3.082zm0-5.454v3.74l-4.796 4.796h-3.74l8.535-8.536zm0-5.453v3.74L6.111 16.362h-3.74l13.99-13.99zM1.211 4.9V2.425c.67-.001 1.211-.543 1.212-1.212H4.9L1.212 4.9zM1.212 0H0v1.213h1.212zM33.328 32.723h-.606v1.212h1.212v-1.213h-.604zM32.722 0v1.213h1.212V0z"/><path d="M24.027 9.696l-.03 2.472-2.667-2.714c-.007-.01-.008-.02-.014-.03a.597.597 0 0 1-.043-.063.6.6 0 0 1-.031-.093c-.005-.016-.013-.03-.016-.047a.601.601 0 0 1-.01-.203c.001-.016.007-.03.01-.046a.597.597 0 0 1 .083-.207c.008-.012.012-.026.021-.038l2.666-2.545.03 2.302h8.696v-6.06a1.213 1.213 0 0 1-1.212-1.211H17.573v15.755a.606.606 0 0 1-.606.606H1.212V31.51c.67 0 1.211.543 1.212 1.212H9.09v-6.696H6.429l2.903-2.696c.01-.007.02-.008.03-.014a.596.596 0 0 1 .063-.044.596.596 0 0 1 .093-.031c.016-.005.03-.012.047-.016a.6.6 0 0 1 .203-.01c.016.002.03.007.046.01a.596.596 0 0 1 .207.084c.013.008.026.012.038.02L13 26.028h-2.698v6.696H31.51c0-.67.543-1.211 1.212-1.212V9.696h-8.695zM.606 32.723H0v1.212h1.212v-1.213H.61z"/></g></g></svg>',
            ),
            'calendar' => array(
                'name' => 'Календарь, выбор дат',
                'image' => '<svg xmlns="http://www.w3.org/2000/svg" width="34" height="34" viewBox="0 0 34 34"><g fill="none" fill-rule="evenodd"><path class="svg-fill" fill="#ffffff" d="M12.429 24.367h4v3.967h-4zM12.429 14.167h4v3.967h-4z"/><path class="svg-stroke" stroke="#ffffff" d="M12.929 19.767h3v2.967h-3z"/><path class="svg-fill" fill="#ffffff" d="M7.286 19.267h4v3.967h-4zM7.286 14.167h4v3.967h-4zM7.286 24.367h4v3.967h-4zM22.714 14.167h4v3.967h-4z"/><path class="svg-fill" fill="#ffffff" fill-rule="nonzero" d="M32.429 2.267h-4v-1.7A.569.569 0 0 0 27.857 0h-4a.569.569 0 0 0-.571.567v1.7H10.714v-1.7A.569.569 0 0 0 10.143 0h-4a.569.569 0 0 0-.572.567v1.7h-4A.569.569 0 0 0 1 2.833v30.6c0 .314.255.567.571.567H32.43a.569.569 0 0 0 .571-.567v-30.6a.569.569 0 0 0-.571-.566zm-4.572 15.866v11.334H6.143V13.033h21.714v5.1zm4-9.633H2.143V3.4H5.57v1.7c0 .313.256.567.572.567h4a.569.569 0 0 0 .571-.567V3.4h12.572v1.7c0 .313.255.567.571.567h4a.569.569 0 0 0 .572-.567V3.4h3.428v5.1z"/><path class="svg-stroke" stroke="#ffffff" d="M23.214 19.767h3v2.967h-3z"/><path class="svg-fill" fill="#ffffff" d="M22.714 24.367h4v3.967h-4zM17.571 24.367h4v3.967h-4z"/><path class="svg-stroke" stroke="#ffffff" d="M18.071 19.767h3v2.967h-3z"/><path  class="svg-fill"fill="#ffffff" d="M17.571 14.167h4v3.967h-4z"/></g></svg>',
            ),
            'map' => array(
                'name' => 'Карты, геолокация',
                'image' => '<svg xmlns="http://www.w3.org/2000/svg" width="34" height="34" viewBox="0 0 34 34"><g fill="none" fill-rule="evenodd"><path class="svg-fill" fill="#ffffff" fill-rule="nonzero" d="M21.479 14.452l.091-.303.016-.053c.35-1.179-1.03-2.173-2.003-1.445l-.533.398-1.506-.869 16.269-9.393c.121.383.187.79.187 1.213v12.37l-4.6 2.656-7.921-4.574zm-3.336 11.073l2.447-8.122 5.81 3.355-8.257 4.767zM13.32 28.31l-9.806 5.662A4 4 0 0 1 0 30v-7.69l14.544-8.398 1.89 1.092-5.157 3.855-5.746 4.296c-.968.724-.403 2.308.826 2.315l5.345.03.392.004 1.227 2.805zm1.33 2.697c.653.548 1.735.35 2.01-.561l.218-.726 12.522-7.23L34 25.146V30a4 4 0 0 1-4 4H9.464l5.187-2.994zM34 21.68l-1.6-.923 1.6-.924v1.847zM15.624 0H30c.669 0 1.3.164 1.854.455l-7.721 4.457L15.624 0zm-6 0l11.509 6.644L0 18.845V4a4 4 0 0 1 4-4h5.624zm3.656 23.508l-.981.008-4.206.058 4.586-3.45 6.632-4.985-.012.037-4.111 12.83-1.908-4.498z"/></g></svg>',
            ),
        )
    ),
	'society' => array(
        'name' => 'Социальное взаимодействие',
        'fields' => array(
            'chat' => array(
                'name' => 'Сообщения,чаты',
                'icn' => 'sms',
            ),
            'comment' => array(
                'name' => 'Комментарии, форум',
                'icn' => 'message',
            ),
            'push' => array(
                'name' => 'Push-уведомления',
                'image' => '<svg xmlns="http://www.w3.org/2000/svg" width="34" height="34" viewBox="0 0 34 34"><g fill="none" fill-rule="evenodd" transform="translate(0 2)"><path class="svg-stroke" stroke="#ffffff" stroke-width="2" d="M21.138 3.49h-18.1c-.949 0-1.717.77-1.717 1.717v24.076c0 .948.768 1.717 1.717 1.717h24.075c.949 0 1.717-.769 1.717-1.717v-18.8a6.631 6.631 0 0 1-.924.064h-.141c-2.394.002-3.486-.259-4.798-1.593-1.377-1.4-1.835-2.937-1.835-5.18 0-.095.002-.19.006-.283z"/><circle class="svg-stroke" cx="26.906" cy="4.774" r="5.774" stroke="#ffffff" stroke-linecap="round" stroke-width="2"/><circle class="svg-fill" cx="26.906" cy="4.774" r="2.774" fill="#ffffff"/></g></svg>',
            ),
            'sms' => array(
                'name' => 'SMS',
                'icn' => 'talk',
            ),
            'email' => array(
                'name' => 'Email рассылка',
                'icn' => 'letter',
            ),
            'social' => array(
                'name' => 'Поделиться в соц сетях',
                'image' => '<svg xmlns="http://www.w3.org/2000/svg" width="34" height="34" viewBox="0 0 34 34"><g fill="none" fill-rule="evenodd"><path class="svg-fill" fill="#ffffff" d="M25.273 21.186c-1.263 0-2.45.459-3.343 1.291-.248.231-.46.485-.645.753l-8.169-4.622a4.118 4.118 0 0 0 .339-1.627c0-.575-.123-1.124-.338-1.628l8.17-4.587c.84 1.229 2.31 2.048 3.986 2.048 2.606 0 4.727-1.977 4.727-4.407C30 5.977 27.88 4 25.273 4s-4.728 1.977-4.728 4.407c0 .553.115 1.081.316 1.57L12.68 14.57c-.845-1.2-2.3-1.996-3.953-1.996C6.121 12.574 4 14.55 4 16.98c0 2.43 2.12 4.406 4.727 4.406 1.652 0 3.107-.795 3.952-1.995l8.18 4.628a4.139 4.139 0 0 0-.314 1.573c0 1.177.492 2.284 1.385 3.116.893.833 2.08 1.291 3.343 1.291 1.262 0 2.45-.458 3.342-1.29.893-.833 1.385-1.94 1.385-3.117s-.492-2.284-1.385-3.116c-.893-.832-2.08-1.29-3.342-1.29z"/><path class="svg-stroke" fill-rule="nonzero" stroke="#ffffff" stroke-width="2" d="M24.751 25.94L9.418 17l13.209-7.453"/></g></svg>',
            ),
        )
    ),
	'payment' => array(
        'name' => 'Оплата и прием платежей',
        'fields' => array(
            'cart' => array(
                'name' => 'Корзина покупок',
                'icn' => 'cart',
            ),
            'shop' => array(
                'name' => 'Встроенные покупки',
                'icn' => 'bag',
            ),
            'map' => array(
                'name' => 'Покупки по карте',
                'icn' => 'paycard',
            ),
            'subscribe' => array(
                'name' => 'По подписке',
                'icn' => 'rss',
            ),
        )
    ),
	'extra' => array(
        'name' => 'Дополнительно',
        'fields' => array(
            'vr' => array(
                'name' => 'VR',
                'icn' => 'vr',
            ),
            'ar' => array(
                'name' => 'AR',
                'icn' => 'ar',
            ),
            'touch' => array(
                'name' => 'Touch ID',
                'image' => '<svg xmlns="http://www.w3.org/2000/svg" width="34" height="34" viewBox="0 0 34 34"><g class="svg-stroke" fill="none" fill-rule="evenodd" stroke="#fff" stroke-linecap="round" stroke-width="3"><path d="M31.122 14.83C29.494 6.202 21.632.62 13.562 2.358m-2.829 1.34c-6.816 2.647-9.399 9.825-7.922 17.655m28.607-3.896a17.112 17.112 0 0 0-.288-2.628M2.82 21.352c.043.229.09.455.142.68M17.99 30.909c.698-.97 1.311-1.997 1.83-3.067m1.04-2.581a19.727 19.727 0 0 0 .53-10.23c-.431-2.055-2.537-3.384-4.699-2.97m-2.51 1.58a3.629 3.629 0 0 0-.615 2.888 12.497 12.497 0 0 1-.735 7.603m-1.524 2.649a13.543 13.543 0 0 1-1.884 2.056M4.889 26.752c1.966-1.652 3.086-4.272 2.82-7.02m-.268-3.697c.387-4.26 3.388-7.934 7.606-8.823 2.474-.522 4.916.01 6.904 1.298m2.236 2.008a10.11 10.11 0 0 1 2.085 4.492c.478 2.479.626 4.947.475 7.354m-.266 2.498a28.826 28.826 0 0 1-1.432 5.608"/></g></svg>',
            ),
            'giro' => array(
                'name' => 'Гироскоп',
                'image' => '<svg xmlns="http://www.w3.org/2000/svg" width="34" height="34" viewBox="0 0 34 34"><g fill="none" fill-rule="nonzero" transform="translate(4 4)"><circle class="svg-stroke" cx="13" cy="13" r="12" stroke="#ffffff" stroke-width="2"/><ellipse class="svg-stroke" cx="13.354" cy="12.646" stroke="#ffffff" stroke-width="2" rx="3" ry="8.5" transform="rotate(45 13.354 12.646)"/><ellipse class="svg-stroke" cx="13" cy="13" stroke="#ffffff" stroke-width="2" rx="4" ry="8" transform="rotate(136 13 13)"/><circle class="svg-fill" cx="13" cy="13" r="1" fill="#ffffff"/><path class="svg-fill" fill="#ffffff" d="M23.414 3l.707.708-1.414 1.414L22 4.415zM4.121 22l.707.708-1.414 1.414-.707-.707z"/><circle class="svg-fill" cx="2" cy="25" r="2" fill="#ffffff"/><circle class="svg-fill" cx="25" cy="2" r="2" fill="#ffffff"/></g></svg>',
            ),
            'camera' => array(
                'name' => 'Камера/фото',
                'icn' => 'video',
            ),
            'smartwatch' => array(
                'name' => 'Данные с умных часов',
                'icn' => 'smartwatch',
            ),
            'qr' => array(
                'name' => 'QR-код',
                'icn' => 'qrcode',
            ),
            'cloud' => array(
                'name' => 'Синхронизация с облачными сервисами',
                'icn' => 'cloud',
            ),
            'integration' => array(
                'name' => 'Доп интеграции с другими сервисами',
                'icn' => 'integration',
            ),
            'security' => array(
                'name' => 'Безопасность: шифрование сетевых данных',
                'icn' => 'security',
            ),
        )
    ),
	'admin' => array(
        'name' => 'Администрирование',
        'fields' => array(
            'payment' => array(
                'name' => 'Администрирование платежей',
                'icn' => 'invoice',
            ),
            'analityc' => array(
                'name' => 'Аналитика использования приложения',
                'icn' => 'analytic',
            ),
            'content' => array(
                'name' => 'Управление контентом',
                'icn' => 'manage',
            ),
            'users' => array(
                'name' => 'Администрирование пользователей',
                'icn' => 'users',
            ),
            'moderation' => array(
                'name' => 'Модерация',
                'icn' => 'moderate',
            ),
            'feedback' => array(
                'name' => 'Обработка обратной связи',
                'icn' => 'feedback',
            ),
            'crash' => array(
                'name' => 'Статистика крашей',
                'icn' => 'statistic',
            ),
        )
    ),
	/*'send' => array(
        'name' => 'Отправить',
        'fields' => array(
            '_name_' => array(
                'name' => '',
                'icn' => '',
            ),
        )
    ),*/
);

?>