<?php

use Illuminate\Support\Facades\Route;

Route::get('/cpu-stress', function () {
    // Tăng CPU bằng cách tính toán một vòng lặp lớn
    $result = 0;
    for ($i = 0; $i < 1000000000; $i++) {
        $result += sqrt($i); // Tính căn bậc hai liên tục để tiêu tốn CPU
    }
    logger('IP: ' . gethostbyname(gethostname()));
    return view('welcome');
});


Route::get('/test', function () {
    logger('Test IP: ' . gethostbyname(gethostname()));
    return view('welcome');
});
