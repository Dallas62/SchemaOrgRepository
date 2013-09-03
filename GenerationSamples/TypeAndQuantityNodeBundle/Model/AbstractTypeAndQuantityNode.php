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

namespace SchemaRepository\Bundle\TypeAndQuantityNodeBundle\Model;

use SchemaRepository\Bundle\TypeAndQuantityNodeBundle\Model\TypeAndQuantityNodeInterface;
use SchemaRepository\Bundle\StructuredValueBundle\Model\AbstractStructuredValue;

/**
 * Model of Type And Quantity Node
 * 
 * @author SchemaGenerator <dallas62@free.fr>
 * @package SchemaRepository\Bundle\TypeAndQuantityNodeBundle\Model
 */
abstract class AbstractTypeAndQuantityNode extends AbstractStructuredValue implements TypeAndQuantityNodeInterface
{

    /**
     * The quantity of the goods included in the offer.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var integer|long|float|decimal
     */
    protected $amountOfThisGood;

    /**
     * The business function (e.g. sell, lease, repair, dispose) of the offer
     * or component of a bundle (TypeAndQuantityNode). The default is
     * http://purl.org/goodrelations/v1#Sell.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var mixed
     */
    protected $businessFunction;

    /**
     * The product that this structured value is referring to.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var mixed
     */
    protected $typeOfGood;

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
     * Getter of Amount of This Good
     * 
     * The quantity of the goods included in the offer.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return integer|long|float|decimal
     */
    public function getAmountOfThisGood()
    {
        return $this->amountOfThisGood;
    }

    /**
     * Setter of Amount of This Good
     * 
     * The quantity of the goods included in the offer.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param integer|long|float|decimal $value Value of amountOfThisGood
     */
    public function setAmountOfThisGood($value)
    {
        $this->amountOfThisGood = $value;
    }

    /**
     * Getter of Business Function
     * 
     * The business function (e.g. sell, lease, repair, dispose) of the offer
     * or component of a bundle (TypeAndQuantityNode). The default is
     * http://purl.org/goodrelations/v1#Sell.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return mixed
     */
    public function getBusinessFunction()
    {
        return $this->businessFunction;
    }

    /**
     * Setter of Business Function
     * 
     * The business function (e.g. sell, lease, repair, dispose) of the offer
     * or component of a bundle (TypeAndQuantityNode). The default is
     * http://purl.org/goodrelations/v1#Sell.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param mixed $value Value of businessFunction
     */
    public function setBusinessFunction($value)
    {
        $this->businessFunction = $value;
    }

    /**
     * Getter of Type of Good
     * 
     * The product that this structured value is referring to.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return mixed
     */
    public function getTypeOfGood()
    {
        return $this->typeOfGood;
    }

    /**
     * Setter of Type of Good
     * 
     * The product that this structured value is referring to.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param mixed $value Value of typeOfGood
     */
    public function setTypeOfGood($value)
    {
        $this->typeOfGood = $value;
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
}
