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

namespace SchemaRepository\Bundle\AggregateOfferBundle\Model;

use SchemaRepository\Bundle\AggregateOfferBundle\Model\AggregateOfferInterface;
use SchemaRepository\Bundle\OfferBundle\Model\AbstractOffer;

/**
 * Model of Aggregate Offer
 * 
 * @author SchemaGenerator <dallas62@free.fr>
 * @package SchemaRepository\Bundle\AggregateOfferBundle\Model
 */
abstract class AbstractAggregateOffer extends AbstractOffer implements AggregateOfferInterface
{

    /**
     * The highest price of all offers available.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var integer|long|float|decimal|string
     */
    protected $highPrice;

    /**
     * The lowest price of all offers available.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var integer|long|float|decimal|string
     */
    protected $lowPrice;

    /**
     * The number of offers for the product.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var integer|long
     */
    protected $offerCount;

    /**
     * Getter of High Price
     * 
     * The highest price of all offers available.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return integer|long|float|decimal|string
     */
    public function getHighPrice()
    {
        return $this->highPrice;
    }

    /**
     * Setter of High Price
     * 
     * The highest price of all offers available.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param integer|long|float|decimal|string $value Value of highPrice
     */
    public function setHighPrice($value)
    {
        $this->highPrice = $value;
    }

    /**
     * Getter of Low Price
     * 
     * The lowest price of all offers available.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return integer|long|float|decimal|string
     */
    public function getLowPrice()
    {
        return $this->lowPrice;
    }

    /**
     * Setter of Low Price
     * 
     * The lowest price of all offers available.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param integer|long|float|decimal|string $value Value of lowPrice
     */
    public function setLowPrice($value)
    {
        $this->lowPrice = $value;
    }

    /**
     * Getter of Offer Count
     * 
     * The number of offers for the product.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return integer|long
     */
    public function getOfferCount()
    {
        return $this->offerCount;
    }

    /**
     * Setter of Offer Count
     * 
     * The number of offers for the product.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param integer|long $value Value of offerCount
     */
    public function setOfferCount($value)
    {
        $this->offerCount = $value;
    }
}
