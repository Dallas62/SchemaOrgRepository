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

namespace SchemaRepository\Bundle\QuantitativeValueBundle\Model;

use SchemaRepository\Bundle\QuantitativeValueBundle\Model\QuantitativeValueInterface;
use SchemaRepository\Bundle\StructuredValueBundle\Model\AbstractStructuredValue;

/**
 * Model of Quantitative Value
 * 
 * @author SchemaGenerator <dallas62@free.fr>
 * @package SchemaRepository\Bundle\QuantitativeValueBundle\Model
 */
abstract class AbstractQuantitativeValue extends AbstractStructuredValue implements QuantitativeValueInterface
{

    /**
     * The upper of the product characteristic.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var integer|long|float|decimal
     */
    protected $maxValue;

    /**
     * The lower value of the product characteristic.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var integer|long|float|decimal
     */
    protected $minValue;

    /**
     * The unit of measurement given using the UN/CEFACT Common Code (3
     * characters).
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var string
     */
    protected $unitCode;

    /**
     * The value of the product characteristic.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var integer|long|float|decimal
     */
    protected $value;

    /**
     * A pointer to a secondary value that provides additional information on
     * the original value, e.g. a reference temperature.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var mixed
     */
    protected $valueReference;

    /**
     * Getter of Max Value
     * 
     * The upper of the product characteristic.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return integer|long|float|decimal
     */
    public function getMaxValue()
    {
        return $this->maxValue;
    }

    /**
     * Setter of Max Value
     * 
     * The upper of the product characteristic.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param integer|long|float|decimal $value Value of maxValue
     */
    public function setMaxValue($value)
    {
        $this->maxValue = $value;
    }

    /**
     * Getter of Min Value
     * 
     * The lower value of the product characteristic.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return integer|long|float|decimal
     */
    public function getMinValue()
    {
        return $this->minValue;
    }

    /**
     * Setter of Min Value
     * 
     * The lower value of the product characteristic.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param integer|long|float|decimal $value Value of minValue
     */
    public function setMinValue($value)
    {
        $this->minValue = $value;
    }

    /**
     * Getter of Unit Code
     * 
     * The unit of measurement given using the UN/CEFACT Common Code (3
     * characters).
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return string
     */
    public function getUnitCode()
    {
        return $this->unitCode;
    }

    /**
     * Setter of Unit Code
     * 
     * The unit of measurement given using the UN/CEFACT Common Code (3
     * characters).
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param string $value Value of unitCode
     */
    public function setUnitCode($value)
    {
        $this->unitCode = $value;
    }

    /**
     * Getter of Value
     * 
     * The value of the product characteristic.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return integer|long|float|decimal
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Setter of Value
     * 
     * The value of the product characteristic.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param integer|long|float|decimal $value Value of value
     */
    public function setValue($value)
    {
        $this->value = $value;
    }

    /**
     * Getter of Value Reference
     * 
     * A pointer to a secondary value that provides additional information on
     * the original value, e.g. a reference temperature.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return mixed
     */
    public function getValueReference()
    {
        return $this->valueReference;
    }

    /**
     * Setter of Value Reference
     * 
     * A pointer to a secondary value that provides additional information on
     * the original value, e.g. a reference temperature.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param mixed $value Value of valueReference
     */
    public function setValueReference($value)
    {
        $this->valueReference = $value;
    }
}
