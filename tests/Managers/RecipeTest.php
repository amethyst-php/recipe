<?php

namespace Railken\Amethyst\Tests\Managers;

use Railken\Amethyst\Fakers\RecipeFaker;
use Railken\Amethyst\Managers\RecipeManager;
use Railken\Amethyst\Tests\BaseTest;
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
