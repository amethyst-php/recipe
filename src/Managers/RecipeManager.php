<?php

namespace Amethyst\Managers;

use Amethyst\Common\ConfigurableManager;
use Railken\Lem\Manager;

/**
 * @method \Amethyst\Models\Recipe newEntity()
 * @method \Amethyst\Schemas\RecipeSchema getSchema()
 * @method \Amethyst\Repositories\RecipeRepository getRepository()
 * @method \Amethyst\Serializers\RecipeSerializer getSerializer()
 * @method \Amethyst\Validators\RecipeValidator getValidator()
 * @method \Amethyst\Authorizers\RecipeAuthorizer getAuthorizer()
 */
class RecipeManager extends Manager
{
    use ConfigurableManager;

    /**
     * @var string
     */
    protected $config = 'amethyst.recipe.data.recipe';
}
