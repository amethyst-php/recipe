<?php

return [
    'table'      => 'amethyst_recipes',
    'comment'    => 'Recipe',
    'model'      => Amethyst\Models\Recipe::class,
    'schema'     => Amethyst\Schemas\RecipeSchema::class,
    'repository' => Amethyst\Repositories\RecipeRepository::class,
    'serializer' => Amethyst\Serializers\RecipeSerializer::class,
    'validator'  => Amethyst\Validators\RecipeValidator::class,
    'authorizer' => Amethyst\Authorizers\RecipeAuthorizer::class,
    'faker'      => Amethyst\Fakers\RecipeFaker::class,
    'manager'    => Amethyst\Managers\RecipeManager::class,
];
