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

namespace SchemaRepository\Bundle\IndividualProductBundle\Model;

use SchemaRepository\Bundle\IndividualProductBundle\Model\IndividualProductInterface;
use SchemaRepository\Bundle\ProductBundle\Model\AbstractProduct;

/**
 * Model of Individual Product
 * 
 * @author SchemaGenerator <dallas62@free.fr>
 * @package SchemaRepository\Bundle\IndividualProductBundle\Model
 */
abstract class AbstractIndividualProduct extends AbstractProduct implements IndividualProductInterface
{

    /**
     * The serial number or any alphanumeric identifier of a particular
     * product. When attached to an offer, it is a shortcut for the serial
     * number of the product included in the offer.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var string
     */
    protected $serialNumber;

    /**
     * Getter of Serial Number
     * 
     * The serial number or any alphanumeric identifier of a particular
     * product. When attached to an offer, it is a shortcut for the serial
     * number of the product included in the offer.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return string
     */
    public function getSerialNumber()
    {
        return $this->serialNumber;
    }

    /**
     * Setter of Serial Number
     * 
     * The serial number or any alphanumeric identifier of a particular
     * product. When attached to an offer, it is a shortcut for the serial
     * number of the product included in the offer.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param string $value Value of serialNumber
     */
    public function setSerialNumber($value)
    {
        $this->serialNumber = $value;
    }
}
