<?php

return [
    'enabled'    => true,
    'controller' => Railken\Amethyst\Http\Controllers\Admin\RecipesController::class,
    'router'     => [
        'as'     => 'recipe.',
        'prefix' => '/recipes',
    ],
];
