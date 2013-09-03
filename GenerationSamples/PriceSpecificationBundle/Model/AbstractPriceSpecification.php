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

namespace SchemaRepository\Bundle\PriceSpecificationBundle\Model;

use SchemaRepository\Bundle\PriceSpecificationBundle\Model\PriceSpecificationInterface;
use SchemaRepository\Bundle\StructuredValueBundle\Model\AbstractStructuredValue;

/**
 * Model of Price Specification
 * 
 * @author SchemaGenerator <dallas62@free.fr>
 * @package SchemaRepository\Bundle\PriceSpecificationBundle\Model
 */
abstract class AbstractPriceSpecification extends AbstractStructuredValue implements PriceSpecificationInterface
{

    /**
     * The interval and unit of measurement of ordering quantities for which
     * the offer or price specification is valid. This allows e.g. specifying
     * that a certain freight charge is valid only for a certain quantity.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var mixed
     */
    protected $eligibleQuantity;

    /**
     * The transaction volume, in a monetary unit, for which the offer or
     * price specification is valid, e.g. for indicating a minimal purchasing
     * volume, to express free shipping above a certain order volume, or to
     * limit the acceptance of credit cards to purchases to a certain minimal
     * amount.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var mixed
     */
    protected $eligibleTransactionVolume;

    /**
     * The highest price if the price is a range.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var integer|long|float|decimal
     */
    protected $maxPrice;

    /**
     * The lowest price if the price is a range.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var integer|long|float|decimal
     */
    protected $minPrice;

    /**
     * The offer price of a product, or of a price component when attached to
     * PriceSpecification and its subtypes.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var string|integer|long|float|decimal
     */
    protected $price;

    /**
     * The currency (in 3-letter ISO 4217 format) of the offer price or a
     * price component, when attached to PriceSpecification and its subtypes.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var string
     */
    protected $priceCurrency;

    /**
     * The beginning of the validity of offer, price specification, or
     * opening hours data.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var \DateTime
     */
    protected $validFrom;

    /**
     * The end of the validity of offer, price specification, or opening
     * hours data.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var \DateTime
     */
    protected $validThrough;

    /**
     * Specifies whether the applicable value-added tax (VAT) is included in
     * the price specification or not.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var bool
     */
    protected $valueAddedTaxIncluded;

    /**
     * Getter of Eligible Quantity
     * 
     * The interval and unit of measurement of ordering quantities for which
     * the offer or price specification is valid. This allows e.g. specifying
     * that a certain freight charge is valid only for a certain quantity.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return mixed
     */
    public function getEligibleQuantity()
    {
        return $this->eligibleQuantity;
    }

    /**
     * Setter of Eligible Quantity
     * 
     * The interval and unit of measurement of ordering quantities for which
     * the offer or price specification is valid. This allows e.g. specifying
     * that a certain freight charge is valid only for a certain quantity.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param mixed $value Value of eligibleQuantity
     */
    public function setEligibleQuantity($value)
    {
        $this->eligibleQuantity = $value;
    }

    /**
     * Getter of Eligible Transaction Volume
     * 
     * The transaction volume, in a monetary unit, for which the offer or
     * price specification is valid, e.g. for indicating a minimal purchasing
     * volume, to express free shipping above a certain order volume, or to
     * limit the acceptance of credit cards to purchases to a certain minimal
     * amount.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return mixed
     */
    public function getEligibleTransactionVolume()
    {
        return $this->eligibleTransactionVolume;
    }

    /**
     * Setter of Eligible Transaction Volume
     * 
     * The transaction volume, in a monetary unit, for which the offer or
     * price specification is valid, e.g. for indicating a minimal purchasing
     * volume, to express free shipping above a certain order volume, or to
     * limit the acceptance of credit cards to purchases to a certain minimal
     * amount.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param mixed $value Value of eligibleTransactionVolume
     */
    public function setEligibleTransactionVolume($value)
    {
        $this->eligibleTransactionVolume = $value;
    }

    /**
     * Getter of Max Price
     * 
     * The highest price if the price is a range.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return integer|long|float|decimal
     */
    public function getMaxPrice()
    {
        return $this->maxPrice;
    }

    /**
     * Setter of Max Price
     * 
     * The highest price if the price is a range.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param integer|long|float|decimal $value Value of maxPrice
     */
    public function setMaxPrice($value)
    {
        $this->maxPrice = $value;
    }

    /**
     * Getter of Min Price
     * 
     * The lowest price if the price is a range.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return integer|long|float|decimal
     */
    public function getMinPrice()
    {
        return $this->minPrice;
    }

    /**
     * Setter of Min Price
     * 
     * The lowest price if the price is a range.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param integer|long|float|decimal $value Value of minPrice
     */
    public function setMinPrice($value)
    {
        $this->minPrice = $value;
    }

    /**
     * Getter of Price
     * 
     * The offer price of a product, or of a price component when attached to
     * PriceSpecification and its subtypes.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return string|integer|long|float|decimal
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Setter of Price
     * 
     * The offer price of a product, or of a price component when attached to
     * PriceSpecification and its subtypes.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param string|integer|long|float|decimal $value Value of price
     */
    public function setPrice($value)
    {
        $this->price = $value;
    }

    /**
     * Getter of Price Currency
     * 
     * The currency (in 3-letter ISO 4217 format) of the offer price or a
     * price component, when attached to PriceSpecification and its subtypes.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return string
     */
    public function getPriceCurrency()
    {
        return $this->priceCurrency;
    }

    /**
     * Setter of Price Currency
     * 
     * The currency (in 3-letter ISO 4217 format) of the offer price or a
     * price component, when attached to PriceSpecification and its subtypes.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param string $value Value of priceCurrency
     */
    public function setPriceCurrency($value)
    {
        $this->priceCurrency = $value;
    }

    /**
     * Getter of Valid From
     * 
     * The beginning of the validity of offer, price specification, or
     * opening hours data.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return \DateTime
     */
    public function getValidFrom()
    {
        return $this->validFrom;
    }

    /**
     * Setter of Valid From
     * 
     * The beginning of the validity of offer, price specification, or
     * opening hours data.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param \DateTime $value Value of validFrom
     */
    public function setValidFrom($value)
    {
        $this->validFrom = $value;
    }

    /**
     * Getter of Valid Through
     * 
     * The end of the validity of offer, price specification, or opening
     * hours data.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return \DateTime
     */
    public function getValidThrough()
    {
        return $this->validThrough;
    }

    /**
     * Setter of Valid Through
     * 
     * The end of the validity of offer, price specification, or opening
     * hours data.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param \DateTime $value Value of validThrough
     */
    public function setValidThrough($value)
    {
        $this->validThrough = $value;
    }

    /**
     * Getter of Value Added Tax Included
     * 
     * Specifies whether the applicable value-added tax (VAT) is included in
     * the price specification or not.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return bool
     */
    public function getValueAddedTaxIncluded()
    {
        return $this->valueAddedTaxIncluded;
    }

    /**
     * Setter of Value Added Tax Included
     * 
     * Specifies whether the applicable value-added tax (VAT) is included in
     * the price specification or not.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param bool $value Value of valueAddedTaxIncluded
     */
    public function setValueAddedTaxIncluded($value)
    {
        $this->valueAddedTaxIncluded = $value;
    }
}
