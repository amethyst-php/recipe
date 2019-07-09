<?php

namespace Amethyst\Tests\Managers;

use Amethyst\Fakers\RecipeFaker;
use Amethyst\Managers\RecipeManager;
use Amethyst\Tests\BaseTest;
use Railken\Lem\Support\Testing\TestableBaseTrait;

class RecipeTest extends BaseTest
{
    use TestableBaseTrait;

    /**
     * Manager class.
     *
     * @var string
     */
    protected $manager = RecipeManager::class;

    /**
     * Faker class.
     *
     * @var string
     */
    protected $faker = RecipeFaker::class;
}
