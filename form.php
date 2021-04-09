<? php
    session_start ();
    $ firstname = $ _POST [ 'имя' ];
    $ lastname = $ _POST [ 'фамилия' ];
    $ login = $ _POST [ 'логин' ];
    $ пароль = $ _POST [ 'пароль' ];
    $ array = [];
    if ( preg_match ( "/ ^ [а-яА-Яa-zA-Z] + $ / u" , $ firstname )) {
        $ a = 1 ;
    } else {
        $ a = [];
        $ array [] = 'Имя не должно содержать цифр' ;
    }
    if ( preg_match ( "/ ^ [а-яА-Яa-zA-Z] + $ / u" , $ lastname )) {
        $ b = 1 ;
    } else {
        $ b = [];
        $ array [] = 'Фамилия не должна содержать цифр' ;
    }
    if ( strlen ( $ login )> 3 ) {
        $ c = 1 ;
    } else {
        $ c = [];
        $ array [] = 'Логин должен быть больше 3 символов' ;
    }
    if ( strlen ( $ password )> 4 ) {
        $ d = 1 ;
    } else {
        $ d = [];
        $ array [] = 'Пароль должен быть больше 4 символов' ;
    }
    if ( empty ( $ firstname ) || empty ( $ lastname ) || empty ( $ login ) || empty ( $ password )) {
        $ array = [];
    }
    if (! empty ( $ a ) &&! empty ( $ b ) &&! empty ( $ c ) &&! empty ( $ d )) {
        $ _SESSION [ 'message' ] = "
                        Вы успешно прошли валидацию <br> 
                        Ваше имя: $ firstname <br> 
                        Ваша фамилия: $ lastname <br>
                        Ваш логин: $ логин <br>
                        Ваш пароль: $ пароль " ;
    } else {
        $ _SESSION [ 'сообщение' ] = implode ( '<br>' , $ array );
    }
    $ array = [];
    $ _POST = [];
