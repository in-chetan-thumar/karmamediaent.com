<?php
return [
    'EMAIL_OTP_LOGIN' => false,
    'MOBILE_OTP_LOGIN' => false,
    'USER_PASSWORD_LOGIN' => true,
    'APP_NAME' => env('APP_NAME', ''),
    //Emails
    'EMAIL'=>[
        'STAGING' => ['TO'=>['rabi.mohanty@quantuminfoway.com'],'CC'=>[]],
        'DEVELOPMENT'=>['TO'=>['rabi.mohanty@quantuminfoway.com'],'CC'=>[]],
    ],
    'PER_PAGE' => 10,
    'SUPER_ADMIN' => 'Super Admin',
    // FILE UPLOAD PATH
    'USER_DOC_PATH' => 'public' . DIRECTORY_SEPARATOR . "profile" . DIRECTORY_SEPARATOR,
    'USER_DOC_URL' => 'storage' . DIRECTORY_SEPARATOR . "profile" . DIRECTORY_SEPARATOR,
    'NEWS_DOC_PATH' => 'public' . DIRECTORY_SEPARATOR . "news" ,
    'NEWS_DOC_URL' => 'storage' . DIRECTORY_SEPARATOR . "news" ,
    'MOVIE_DOC_PATH' => 'public' . DIRECTORY_SEPARATOR . "movies" ,
    'MOVIE_DOC_URL' => 'storage' . DIRECTORY_SEPARATOR . "movies" ,
    // APP VERSION
    'APP_VERSION' => env('APP_VERSION', '1.0'),
    'LOGO_FILE_NAME' => 'logo-dark.png',
    'DEVELOPED_BY' => '',
    'USER_LOCKED_MINUTES' => 2,
    'MONTH' => [
        '1' => 'JAN',
        '2' => 'FEB',
        '3' => 'MAR',
        '4' => 'APR',
        '5' => 'MAY',
        '6' => 'JUN',
        '7' => 'JUL',
        '8' => 'AUG',
        '9' => 'SEP',
        '10' => 'OCT',
        '11' => 'NOV',
        '12' => 'DEC',
    ],
    'YEARS' => array_combine(array_reverse(range(date('Y') - 8, date('Y'))), array_reverse(range(date('Y') - 8, date('Y')))),

];
