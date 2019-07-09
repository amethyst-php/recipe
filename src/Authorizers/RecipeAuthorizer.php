<?php

namespace Amethyst\Authorizers;

use Railken\Lem\Authorizer;
use Railken\Lem\Tokens;

class RecipeAuthorizer extends Authorizer
{
    /**
     * List of all permissions.
     *
     * @var array
     */
    protected $permissions = [
        Tokens::PERMISSION_CREATE => 'recipe.create',
        Tokens::PERMISSION_UPDATE => 'recipe.update',
        Tokens::PERMISSION_SHOW   => 'recipe.show',
        Tokens::PERMISSION_REMOVE => 'recipe.remove',
    ];
}
