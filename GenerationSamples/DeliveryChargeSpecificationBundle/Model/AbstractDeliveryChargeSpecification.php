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

namespace SchemaRepository\Bundle\DeliveryChargeSpecificationBundle\Model;

use SchemaRepository\Bundle\DeliveryChargeSpecificationBundle\Model\DeliveryChargeSpecificationInterface;
use SchemaRepository\Bundle\PriceSpecificationBundle\Model\AbstractPriceSpecification;

/**
 * Model of Delivery Charge Specification
 * 
 * @author SchemaGenerator <dallas62@free.fr>
 * @package SchemaRepository\Bundle\DeliveryChargeSpecificationBundle\Model
 */
abstract class AbstractDeliveryChargeSpecification extends AbstractPriceSpecification implements DeliveryChargeSpecificationInterface
{

    /**
     * The delivery method(s) to which the delivery charge or payment charge
     * specification applies.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var mixed
     */
    protected $appliesToDeliveryMethod;

    /**
     * The ISO 3166-1 (ISO 3166-1 alpha-2) or ISO 3166-2 code, or the
     * GeoShape for the geo-political region(s) for which the offer or
     * delivery charge specification is valid.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var mixed
     */
    protected $eligibleRegion;

    /**
     * Getter of Applies to Delivery Method
     * 
     * The delivery method(s) to which the delivery charge or payment charge
     * specification applies.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return mixed
     */
    public function getAppliesToDeliveryMethod()
    {
        return $this->appliesToDeliveryMethod;
    }

    /**
     * Setter of Applies to Delivery Method
     * 
     * The delivery method(s) to which the delivery charge or payment charge
     * specification applies.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param mixed $value Value of appliesToDeliveryMethod
     */
    public function setAppliesToDeliveryMethod($value)
    {
        $this->appliesToDeliveryMethod = $value;
    }

    /**
     * Getter of Eligible Region
     * 
     * The ISO 3166-1 (ISO 3166-1 alpha-2) or ISO 3166-2 code, or the
     * GeoShape for the geo-political region(s) for which the offer or
     * delivery charge specification is valid.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return mixed
     */
    public function getEligibleRegion()
    {
        return $this->eligibleRegion;
    }

    /**
     * Setter of Eligible Region
     * 
     * The ISO 3166-1 (ISO 3166-1 alpha-2) or ISO 3166-2 code, or the
     * GeoShape for the geo-political region(s) for which the offer or
     * delivery charge specification is valid.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param mixed $value Value of eligibleRegion
     */
    public function setEligibleRegion($value)
    {
        $this->eligibleRegion = $value;
    }
}
