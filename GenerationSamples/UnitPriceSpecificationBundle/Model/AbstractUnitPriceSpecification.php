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

namespace SchemaRepository\Bundle\UnitPriceSpecificationBundle\Model;

use SchemaRepository\Bundle\UnitPriceSpecificationBundle\Model\UnitPriceSpecificationInterface;
use SchemaRepository\Bundle\PriceSpecificationBundle\Model\AbstractPriceSpecification;

/**
 * Model of Unit Price Specification
 * 
 * @author SchemaGenerator <dallas62@free.fr>
 * @package SchemaRepository\Bundle\UnitPriceSpecificationBundle\Model
 */
abstract class AbstractUnitPriceSpecification extends AbstractPriceSpecification implements UnitPriceSpecificationInterface
{

    /**
     * This property specifies the minimal quantity and rounding increment
     * that will be the basis for the billing. The unit of measurement is
     * specified by the unitCode property.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var integer|long|float|decimal
     */
    protected $billingIncrement;

    /**
     * A short text or acronym indicating multiple price specifications for
     * the same offer, e.g. SRP for the suggested retail price or INVOICE for
     * the invoice price, mostly used in the car industry.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var string
     */
    protected $priceType;

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
     * Getter of Billing Increment
     * 
     * This property specifies the minimal quantity and rounding increment
     * that will be the basis for the billing. The unit of measurement is
     * specified by the unitCode property.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return integer|long|float|decimal
     */
    public function getBillingIncrement()
    {
        return $this->billingIncrement;
    }

    /**
     * Setter of Billing Increment
     * 
     * This property specifies the minimal quantity and rounding increment
     * that will be the basis for the billing. The unit of measurement is
     * specified by the unitCode property.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param integer|long|float|decimal $value Value of billingIncrement
     */
    public function setBillingIncrement($value)
    {
        $this->billingIncrement = $value;
    }

    /**
     * Getter of Price Type
     * 
     * A short text or acronym indicating multiple price specifications for
     * the same offer, e.g. SRP for the suggested retail price or INVOICE for
     * the invoice price, mostly used in the car industry.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return string
     */
    public function getPriceType()
    {
        return $this->priceType;
    }

    /**
     * Setter of Price Type
     * 
     * A short text or acronym indicating multiple price specifications for
     * the same offer, e.g. SRP for the suggested retail price or INVOICE for
     * the invoice price, mostly used in the car industry.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param string $value Value of priceType
     */
    public function setPriceType($value)
    {
        $this->priceType = $value;
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
