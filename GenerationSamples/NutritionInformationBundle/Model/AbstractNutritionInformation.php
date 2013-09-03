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

namespace SchemaRepository\Bundle\NutritionInformationBundle\Model;

use SchemaRepository\Bundle\NutritionInformationBundle\Model\NutritionInformationInterface;
use SchemaRepository\Bundle\StructuredValueBundle\Model\AbstractStructuredValue;

/**
 * Model of Nutrition Information
 * 
 * @author SchemaGenerator <dallas62@free.fr>
 * @package SchemaRepository\Bundle\NutritionInformationBundle\Model
 */
abstract class AbstractNutritionInformation extends AbstractStructuredValue implements NutritionInformationInterface
{

    /**
     * The number of calories
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var mixed
     */
    protected $calories;

    /**
     * The number of grams of carbohydrates.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var mixed
     */
    protected $carbohydrateContent;

    /**
     * The number of milligrams of cholesterol.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var mixed
     */
    protected $cholesterolContent;

    /**
     * The number of grams of fat.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var mixed
     */
    protected $fatContent;

    /**
     * The number of grams of fiber.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var mixed
     */
    protected $fiberContent;

    /**
     * The number of grams of protein.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var mixed
     */
    protected $proteinContent;

    /**
     * The number of grams of saturated fat.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var mixed
     */
    protected $saturatedFatContent;

    /**
     * The serving size, in terms of the number of volume or mass
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var string
     */
    protected $servingSize;

    /**
     * The number of milligrams of sodium.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var mixed
     */
    protected $sodiumContent;

    /**
     * The number of grams of sugar.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var mixed
     */
    protected $sugarContent;

    /**
     * The number of grams of trans fat.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var mixed
     */
    protected $transFatContent;

    /**
     * The number of grams of unsaturated fat.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var mixed
     */
    protected $unsaturatedFatContent;

    /**
     * Getter of Calories
     * 
     * The number of calories
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return mixed
     */
    public function getCalories()
    {
        return $this->calories;
    }

    /**
     * Setter of Calories
     * 
     * The number of calories
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param mixed $value Value of calories
     */
    public function setCalories($value)
    {
        $this->calories = $value;
    }

    /**
     * Getter of Carbohydrate Content
     * 
     * The number of grams of carbohydrates.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return mixed
     */
    public function getCarbohydrateContent()
    {
        return $this->carbohydrateContent;
    }

    /**
     * Setter of Carbohydrate Content
     * 
     * The number of grams of carbohydrates.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param mixed $value Value of carbohydrateContent
     */
    public function setCarbohydrateContent($value)
    {
        $this->carbohydrateContent = $value;
    }

    /**
     * Getter of Cholesterol Content
     * 
     * The number of milligrams of cholesterol.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return mixed
     */
    public function getCholesterolContent()
    {
        return $this->cholesterolContent;
    }

    /**
     * Setter of Cholesterol Content
     * 
     * The number of milligrams of cholesterol.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param mixed $value Value of cholesterolContent
     */
    public function setCholesterolContent($value)
    {
        $this->cholesterolContent = $value;
    }

    /**
     * Getter of Fat Content
     * 
     * The number of grams of fat.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return mixed
     */
    public function getFatContent()
    {
        return $this->fatContent;
    }

    /**
     * Setter of Fat Content
     * 
     * The number of grams of fat.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param mixed $value Value of fatContent
     */
    public function setFatContent($value)
    {
        $this->fatContent = $value;
    }

    /**
     * Getter of Fiber Content
     * 
     * The number of grams of fiber.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return mixed
     */
    public function getFiberContent()
    {
        return $this->fiberContent;
    }

    /**
     * Setter of Fiber Content
     * 
     * The number of grams of fiber.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param mixed $value Value of fiberContent
     */
    public function setFiberContent($value)
    {
        $this->fiberContent = $value;
    }

    /**
     * Getter of Protein Content
     * 
     * The number of grams of protein.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return mixed
     */
    public function getProteinContent()
    {
        return $this->proteinContent;
    }

    /**
     * Setter of Protein Content
     * 
     * The number of grams of protein.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param mixed $value Value of proteinContent
     */
    public function setProteinContent($value)
    {
        $this->proteinContent = $value;
    }

    /**
     * Getter of Saturated Fat Content
     * 
     * The number of grams of saturated fat.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return mixed
     */
    public function getSaturatedFatContent()
    {
        return $this->saturatedFatContent;
    }

    /**
     * Setter of Saturated Fat Content
     * 
     * The number of grams of saturated fat.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param mixed $value Value of saturatedFatContent
     */
    public function setSaturatedFatContent($value)
    {
        $this->saturatedFatContent = $value;
    }

    /**
     * Getter of Serving Size
     * 
     * The serving size, in terms of the number of volume or mass
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return string
     */
    public function getServingSize()
    {
        return $this->servingSize;
    }

    /**
     * Setter of Serving Size
     * 
     * The serving size, in terms of the number of volume or mass
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param string $value Value of servingSize
     */
    public function setServingSize($value)
    {
        $this->servingSize = $value;
    }

    /**
     * Getter of Sodium Content
     * 
     * The number of milligrams of sodium.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return mixed
     */
    public function getSodiumContent()
    {
        return $this->sodiumContent;
    }

    /**
     * Setter of Sodium Content
     * 
     * The number of milligrams of sodium.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param mixed $value Value of sodiumContent
     */
    public function setSodiumContent($value)
    {
        $this->sodiumContent = $value;
    }

    /**
     * Getter of Sugar Content
     * 
     * The number of grams of sugar.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return mixed
     */
    public function getSugarContent()
    {
        return $this->sugarContent;
    }

    /**
     * Setter of Sugar Content
     * 
     * The number of grams of sugar.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param mixed $value Value of sugarContent
     */
    public function setSugarContent($value)
    {
        $this->sugarContent = $value;
    }

    /**
     * Getter of Trans Fat Content
     * 
     * The number of grams of trans fat.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return mixed
     */
    public function getTransFatContent()
    {
        return $this->transFatContent;
    }

    /**
     * Setter of Trans Fat Content
     * 
     * The number of grams of trans fat.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param mixed $value Value of transFatContent
     */
    public function setTransFatContent($value)
    {
        $this->transFatContent = $value;
    }

    /**
     * Getter of Unsaturated Fat Content
     * 
     * The number of grams of unsaturated fat.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return mixed
     */
    public function getUnsaturatedFatContent()
    {
        return $this->unsaturatedFatContent;
    }

    /**
     * Setter of Unsaturated Fat Content
     * 
     * The number of grams of unsaturated fat.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param mixed $value Value of unsaturatedFatContent
     */
    public function setUnsaturatedFatContent($value)
    {
        $this->unsaturatedFatContent = $value;
    }
}
