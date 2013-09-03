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

namespace SchemaRepository\Bundle\PostalAddressBundle\Model;

use SchemaRepository\Bundle\PostalAddressBundle\Model\PostalAddressInterface;
use SchemaRepository\Bundle\ContactPointBundle\Model\AbstractContactPoint;

/**
 * Model of Postal Address
 * 
 * @author SchemaGenerator <dallas62@free.fr>
 * @package SchemaRepository\Bundle\PostalAddressBundle\Model
 */
abstract class AbstractPostalAddress extends AbstractContactPoint implements PostalAddressInterface
{

    /**
     * The country. For example, USA. You can also provide the two-letter ISO
     * 3166-1 alpha-2 country code.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var mixed
     */
    protected $addressCountry;

    /**
     * The locality. For example, Mountain View.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var string
     */
    protected $addressLocality;

    /**
     * The region. For example, CA.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var string
     */
    protected $addressRegion;

    /**
     * The post offce box number for PO box addresses.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var string
     */
    protected $postOfficeBoxNumber;

    /**
     * The postal code. For example, 94043.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var string
     */
    protected $postalCode;

    /**
     * The street address. For example, 1600 Amphitheatre Pkwy.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var string
     */
    protected $streetAddress;

    /**
     * Getter of Address Country
     * 
     * The country. For example, USA. You can also provide the two-letter ISO
     * 3166-1 alpha-2 country code.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return mixed
     */
    public function getAddressCountry()
    {
        return $this->addressCountry;
    }

    /**
     * Setter of Address Country
     * 
     * The country. For example, USA. You can also provide the two-letter ISO
     * 3166-1 alpha-2 country code.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param mixed $value Value of addressCountry
     */
    public function setAddressCountry($value)
    {
        $this->addressCountry = $value;
    }

    /**
     * Getter of Address Locality
     * 
     * The locality. For example, Mountain View.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return string
     */
    public function getAddressLocality()
    {
        return $this->addressLocality;
    }

    /**
     * Setter of Address Locality
     * 
     * The locality. For example, Mountain View.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param string $value Value of addressLocality
     */
    public function setAddressLocality($value)
    {
        $this->addressLocality = $value;
    }

    /**
     * Getter of Address Region
     * 
     * The region. For example, CA.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return string
     */
    public function getAddressRegion()
    {
        return $this->addressRegion;
    }

    /**
     * Setter of Address Region
     * 
     * The region. For example, CA.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param string $value Value of addressRegion
     */
    public function setAddressRegion($value)
    {
        $this->addressRegion = $value;
    }

    /**
     * Getter of Post Office Box Number
     * 
     * The post offce box number for PO box addresses.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return string
     */
    public function getPostOfficeBoxNumber()
    {
        return $this->postOfficeBoxNumber;
    }

    /**
     * Setter of Post Office Box Number
     * 
     * The post offce box number for PO box addresses.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param string $value Value of postOfficeBoxNumber
     */
    public function setPostOfficeBoxNumber($value)
    {
        $this->postOfficeBoxNumber = $value;
    }

    /**
     * Getter of Postal Code
     * 
     * The postal code. For example, 94043.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return string
     */
    public function getPostalCode()
    {
        return $this->postalCode;
    }

    /**
     * Setter of Postal Code
     * 
     * The postal code. For example, 94043.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param string $value Value of postalCode
     */
    public function setPostalCode($value)
    {
        $this->postalCode = $value;
    }

    /**
     * Getter of Street Address
     * 
     * The street address. For example, 1600 Amphitheatre Pkwy.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return string
     */
    public function getStreetAddress()
    {
        return $this->streetAddress;
    }

    /**
     * Setter of Street Address
     * 
     * The street address. For example, 1600 Amphitheatre Pkwy.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param string $value Value of streetAddress
     */
    public function setStreetAddress($value)
    {
        $this->streetAddress = $value;
    }
}
