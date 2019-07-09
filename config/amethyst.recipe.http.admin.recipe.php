<?php

return [
    'enabled'    => true,
    'controller' => Amethyst\Http\Controllers\Admin\RecipesController::class,
    'router'     => [
        'as'     => 'recipe.',
        'prefix' => '/recipes',
    ],
];
