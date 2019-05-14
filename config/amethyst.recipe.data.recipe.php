<?php

return [
    'table'      => 'amethyst_recipes',
    'comment'    => 'Recipe',
    'model'      => Railken\Amethyst\Models\Recipe::class,
    'schema'     => Railken\Amethyst\Schemas\RecipeSchema::class,
    'repository' => Railken\Amethyst\Repositories\RecipeRepository::class,
    'serializer' => Railken\Amethyst\Serializers\RecipeSerializer::class,
    'validator'  => Railken\Amethyst\Validators\RecipeValidator::class,
    'authorizer' => Railken\Amethyst\Authorizers\RecipeAuthorizer::class,
    'faker'      => Railken\Amethyst\Fakers\RecipeFaker::class,
    'manager'    => Railken\Amethyst\Managers\RecipeManager::class,
];
