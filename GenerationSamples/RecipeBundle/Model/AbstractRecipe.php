<?php

/**
 * The MIT License (MIT)
 * 
 * Copyright (c) 2013 Tacyniak Boris <boris.tacyniak@free.fr>
 * 
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 * 
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 * 
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 */

namespace SchemaRepository\Bundle\RecipeBundle\Model;

use SchemaRepository\Bundle\RecipeBundle\Model\RecipeInterface;
use SchemaRepository\Bundle\CreativeWorkBundle\Model\AbstractCreativeWork;

/**
 * Model of Recipe
 * 
 * @author SchemaGenerator <dallas62@free.fr>
 * @package SchemaRepository\Bundle\RecipeBundle\Model
 */
abstract class AbstractRecipe extends AbstractCreativeWork implements RecipeInterface
{

    /**
     * The time it takes to actually cook the dish, in ISO 8601 duration
     * format.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var mixed
     */
    protected $cookTime;

    /**
     * The method of cooking, such as Frying, Steaming, ...
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var string
     */
    protected $cookingMethod;

    /**
     * An ingredient used in the recipe.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var string
     */
    protected $ingredients;

    /**
     * Nutrition information about the recipe.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var mixed
     */
    protected $nutrition;

    /**
     * The length of time it takes to prepare the recipe, in ISO 8601
     * duration format.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var mixed
     */
    protected $prepTime;

    /**
     * The category of the recipe—for example, appetizer, entree, etc.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var string
     */
    protected $recipeCategory;

    /**
     * The cuisine of the recipe (for example, French or Ethopian).
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var string
     */
    protected $recipeCuisine;

    /**
     * The steps to make the dish.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var string
     */
    protected $recipeInstructions;

    /**
     * The quantity produced by the recipe (for example, number of people
     * served, number of servings, etc).
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var string
     */
    protected $recipeYield;

    /**
     * The total time it takes to prepare and cook the recipe, in ISO 8601
     * duration format.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var mixed
     */
    protected $totalTime;

    /**
     * Getter of Cook Time
     * 
     * The time it takes to actually cook the dish, in ISO 8601 duration
     * format.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return mixed
     */
    public function getCookTime()
    {
        return $this->cookTime;
    }

    /**
     * Setter of Cook Time
     * 
     * The time it takes to actually cook the dish, in ISO 8601 duration
     * format.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param mixed $value Value of cookTime
     */
    public function setCookTime($value)
    {
        $this->cookTime = $value;
    }

    /**
     * Getter of Cooking Method
     * 
     * The method of cooking, such as Frying, Steaming, ...
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return string
     */
    public function getCookingMethod()
    {
        return $this->cookingMethod;
    }

    /**
     * Setter of Cooking Method
     * 
     * The method of cooking, such as Frying, Steaming, ...
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param string $value Value of cookingMethod
     */
    public function setCookingMethod($value)
    {
        $this->cookingMethod = $value;
    }

    /**
     * Getter of Ingredients
     * 
     * An ingredient used in the recipe.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return string
     */
    public function getIngredients()
    {
        return $this->ingredients;
    }

    /**
     * Setter of Ingredients
     * 
     * An ingredient used in the recipe.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param string $value Value of ingredients
     */
    public function setIngredients($value)
    {
        $this->ingredients = $value;
    }

    /**
     * Getter of Nutrition
     * 
     * Nutrition information about the recipe.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return mixed
     */
    public function getNutrition()
    {
        return $this->nutrition;
    }

    /**
     * Setter of Nutrition
     * 
     * Nutrition information about the recipe.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param mixed $value Value of nutrition
     */
    public function setNutrition($value)
    {
        $this->nutrition = $value;
    }

    /**
     * Getter of Prep Time
     * 
     * The length of time it takes to prepare the recipe, in ISO 8601
     * duration format.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return mixed
     */
    public function getPrepTime()
    {
        return $this->prepTime;
    }

    /**
     * Setter of Prep Time
     * 
     * The length of time it takes to prepare the recipe, in ISO 8601
     * duration format.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param mixed $value Value of prepTime
     */
    public function setPrepTime($value)
    {
        $this->prepTime = $value;
    }

    /**
     * Getter of Recipe Category
     * 
     * The category of the recipe—for example, appetizer, entree, etc.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return string
     */
    public function getRecipeCategory()
    {
        return $this->recipeCategory;
    }

    /**
     * Setter of Recipe Category
     * 
     * The category of the recipe—for example, appetizer, entree, etc.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param string $value Value of recipeCategory
     */
    public function setRecipeCategory($value)
    {
        $this->recipeCategory = $value;
    }

    /**
     * Getter of Recipe Cuisine
     * 
     * The cuisine of the recipe (for example, French or Ethopian).
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return string
     */
    public function getRecipeCuisine()
    {
        return $this->recipeCuisine;
    }

    /**
     * Setter of Recipe Cuisine
     * 
     * The cuisine of the recipe (for example, French or Ethopian).
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param string $value Value of recipeCuisine
     */
    public function setRecipeCuisine($value)
    {
        $this->recipeCuisine = $value;
    }

    /**
     * Getter of Recipe Instructions
     * 
     * The steps to make the dish.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return string
     */
    public function getRecipeInstructions()
    {
        return $this->recipeInstructions;
    }

    /**
     * Setter of Recipe Instructions
     * 
     * The steps to make the dish.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param string $value Value of recipeInstructions
     */
    public function setRecipeInstructions($value)
    {
        $this->recipeInstructions = $value;
    }

    /**
     * Getter of Recipe Yield
     * 
     * The quantity produced by the recipe (for example, number of people
     * served, number of servings, etc).
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return string
     */
    public function getRecipeYield()
    {
        return $this->recipeYield;
    }

    /**
     * Setter of Recipe Yield
     * 
     * The quantity produced by the recipe (for example, number of people
     * served, number of servings, etc).
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param string $value Value of recipeYield
     */
    public function setRecipeYield($value)
    {
        $this->recipeYield = $value;
    }

    /**
     * Getter of Total Time
     * 
     * The total time it takes to prepare and cook the recipe, in ISO 8601
     * duration format.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return mixed
     */
    public function getTotalTime()
    {
        return $this->totalTime;
    }

    /**
     * Setter of Total Time
     * 
     * The total time it takes to prepare and cook the recipe, in ISO 8601
     * duration format.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param mixed $value Value of totalTime
     */
    public function setTotalTime($value)
    {
        $this->totalTime = $value;
    }
}
