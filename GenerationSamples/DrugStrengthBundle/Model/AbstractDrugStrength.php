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

namespace SchemaRepository\Bundle\DrugStrengthBundle\Model;

use SchemaRepository\Bundle\DrugStrengthBundle\Model\DrugStrengthInterface;
use SchemaRepository\Bundle\MedicalIntangibleBundle\Model\AbstractMedicalIntangible;

/**
 * Model of Drug Strength
 * 
 * @author SchemaGenerator <dallas62@free.fr>
 * @package SchemaRepository\Bundle\DrugStrengthBundle\Model
 */
abstract class AbstractDrugStrength extends AbstractMedicalIntangible implements DrugStrengthInterface
{

    /**
     * An active ingredient, typically chemical compounds and/or biologic
     * substances.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var string
     */
    protected $activeIngredient;

    /**
     * The location in which the strength is available.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var mixed
     */
    protected $availableIn;

    /**
     * The units of an active ingredient's strength, e.g. mg.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var string
     */
    protected $strengthUnit;

    /**
     * The value of an active ingredient's strength, e.g. 325.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var integer|long|float|decimal
     */
    protected $strengthValue;

    /**
     * Getter of Active Ingredient
     * 
     * An active ingredient, typically chemical compounds and/or biologic
     * substances.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return string
     */
    public function getActiveIngredient()
    {
        return $this->activeIngredient;
    }

    /**
     * Setter of Active Ingredient
     * 
     * An active ingredient, typically chemical compounds and/or biologic
     * substances.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param string $value Value of activeIngredient
     */
    public function setActiveIngredient($value)
    {
        $this->activeIngredient = $value;
    }

    /**
     * Getter of Available in
     * 
     * The location in which the strength is available.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return mixed
     */
    public function getAvailableIn()
    {
        return $this->availableIn;
    }

    /**
     * Setter of Available in
     * 
     * The location in which the strength is available.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param mixed $value Value of availableIn
     */
    public function setAvailableIn($value)
    {
        $this->availableIn = $value;
    }

    /**
     * Getter of Strength Unit
     * 
     * The units of an active ingredient's strength, e.g. mg.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return string
     */
    public function getStrengthUnit()
    {
        return $this->strengthUnit;
    }

    /**
     * Setter of Strength Unit
     * 
     * The units of an active ingredient's strength, e.g. mg.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param string $value Value of strengthUnit
     */
    public function setStrengthUnit($value)
    {
        $this->strengthUnit = $value;
    }

    /**
     * Getter of Strength Value
     * 
     * The value of an active ingredient's strength, e.g. 325.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return integer|long|float|decimal
     */
    public function getStrengthValue()
    {
        return $this->strengthValue;
    }

    /**
     * Setter of Strength Value
     * 
     * The value of an active ingredient's strength, e.g. 325.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param integer|long|float|decimal $value Value of strengthValue
     */
    public function setStrengthValue($value)
    {
        $this->strengthValue = $value;
    }
}
