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

use SchemaRepository\Bundle\CreativeWorkBundle\Model\CreativeWorkInterface;

/**
 * Interface of Recipe Model
 * 
 * @author SchemaGenerator <dallas62@free.fr>
 * @package SchemaRepository\Bundle\RecipeBundle\Model
 */
interface RecipeInterface extends CreativeWorkInterface
{

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
    public function getCookTime();

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
    public function getCookingMethod();

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
    public function getIngredients();

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
    public function getNutrition();

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
    public function getPrepTime();

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
    public function getRecipeCategory();

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
    public function getRecipeCuisine();

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
    public function getRecipeInstructions();

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
    public function getRecipeYield();

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
    public function getTotalTime();
}
