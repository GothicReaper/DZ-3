<? php
    session_start ();
    $ firstname = $ _POST [ 'Name' ];
    $ lastname = $ _POST [ 'Surname' ];
    $ login = $ _POST [ 'Login' ];
    $ пароль = $ _POST [ 'Password' ];
    $ array = [];
    if ( preg_match ( "/ ^ [а-яА-Яa-zA-Z] + $ / u" , $ firstname )) {
        $ a = 1 ;
    } else {
        $ a = [];
        $ array [] = 'The name must not contain numbers' ;
    }
    if ( preg_match ( "/ ^ [а-яА-Яa-zA-Z] + $ / u" , $ lastname )) {
        $ b = 1 ;
    } else {
        $ b = [];
        $ array [] = 'Last name must not contain numbers' ;
    }
    if ( strlen ( $ login )> 4 ) {
        $ c = 1 ;
    } else {
        $ c = [];
        $ array [] = 'Login must be more than 4 characters' ;
    }
    if ( strlen ( $ password )> 5 ) {
        $ d = 1 ;
    } else {
        $ d = [];
        $ array [] = 'Password must be more than 5 characters' ;
    }
    if ( empty ( $ firstname ) || empty ( $ lastname ) || empty ( $ login ) || empty ( $ password )) {
        $ array = [];
    }
    if (! empty ( $ a ) &&! empty ( $ b ) &&! empty ( $ c ) &&! empty ( $ d )) {
        $ _SESSION [ 'message' ] = "
                        You have successfully passed the validation <br> 
                        Your Name: $ firstname <br> 
                        Your Surname: $ lastname <br>
                        Your Login: $ логин <br>
                        Your Password: $ пароль " ;
    } else {
        $ _SESSION [ 'massange' ] = implode ( '<br>' , $ array );
    }
    $ array = [];
    $ _POST = [];
