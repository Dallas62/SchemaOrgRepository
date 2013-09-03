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

namespace SchemaRepository\Bundle\ContactPointBundle\Model;

use SchemaRepository\Bundle\ContactPointBundle\Model\ContactPointInterface;
use SchemaRepository\Bundle\StructuredValueBundle\Model\AbstractStructuredValue;

/**
 * Model of Contact Point
 * 
 * @author SchemaGenerator <dallas62@free.fr>
 * @package SchemaRepository\Bundle\ContactPointBundle\Model
 */
abstract class AbstractContactPoint extends AbstractStructuredValue implements ContactPointInterface
{

    /**
     * A person or organization can have different contact points, for
     * different purposes. For example, a sales contact point, a PR contact
     * point and so on. This property is used to specify the kind of contact
     * point.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var string
     */
    protected $contactType;

    /**
     * Email address.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var string
     */
    protected $email;

    /**
     * The fax number.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var string
     */
    protected $faxNumber;

    /**
     * The telephone number.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var string
     */
    protected $telephone;

    /**
     * Getter of Contact Type
     * 
     * A person or organization can have different contact points, for
     * different purposes. For example, a sales contact point, a PR contact
     * point and so on. This property is used to specify the kind of contact
     * point.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return string
     */
    public function getContactType()
    {
        return $this->contactType;
    }

    /**
     * Setter of Contact Type
     * 
     * A person or organization can have different contact points, for
     * different purposes. For example, a sales contact point, a PR contact
     * point and so on. This property is used to specify the kind of contact
     * point.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param string $value Value of contactType
     */
    public function setContactType($value)
    {
        $this->contactType = $value;
    }

    /**
     * Getter of Email
     * 
     * Email address.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Setter of Email
     * 
     * Email address.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param string $value Value of email
     */
    public function setEmail($value)
    {
        $this->email = $value;
    }

    /**
     * Getter of Fax Number
     * 
     * The fax number.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return string
     */
    public function getFaxNumber()
    {
        return $this->faxNumber;
    }

    /**
     * Setter of Fax Number
     * 
     * The fax number.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param string $value Value of faxNumber
     */
    public function setFaxNumber($value)
    {
        $this->faxNumber = $value;
    }

    /**
     * Getter of Telephone
     * 
     * The telephone number.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return string
     */
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * Setter of Telephone
     * 
     * The telephone number.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param string $value Value of telephone
     */
    public function setTelephone($value)
    {
        $this->telephone = $value;
    }
}
