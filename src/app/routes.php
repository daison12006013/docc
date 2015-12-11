<?php


// di()->get('dispatcher')->setActionSuffix('');
// Route::add(
//     "/documentations/fuck-this-shit-action/{depotID}/{depotCode}",
//     array(
//         'action'     => 'anyFuckThisShit',
//         'controller' => 'Homepage',
//     )
// );

$lara = Route::style('Laravel');

$lara->get('/documentations', [
    'as'   => 'showDoccIndex',
    'uses' => 'HomepageController@showIndex',
]);

$lara->controller(
    '/documentations',
    PhalconSlayer\Docc\App\Controllers\HomepageController::class
);
