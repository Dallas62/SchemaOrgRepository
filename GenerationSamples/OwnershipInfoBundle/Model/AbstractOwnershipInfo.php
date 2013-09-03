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

namespace SchemaRepository\Bundle\OwnershipInfoBundle\Model;

use SchemaRepository\Bundle\OwnershipInfoBundle\Model\OwnershipInfoInterface;
use SchemaRepository\Bundle\StructuredValueBundle\Model\AbstractStructuredValue;

/**
 * Model of Ownership Info
 * 
 * @author SchemaGenerator <dallas62@free.fr>
 * @package SchemaRepository\Bundle\OwnershipInfoBundle\Model
 */
abstract class AbstractOwnershipInfo extends AbstractStructuredValue implements OwnershipInfoInterface
{

    /**
     * The organization or person from which the product was acquired.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var mixed
     */
    protected $acquiredFrom;

    /**
     * The date and time of obtaining the product.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var \DateTime
     */
    protected $ownedFrom;

    /**
     * The date and time of giving up ownership on the product.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var \DateTime
     */
    protected $ownedThrough;

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
     * Getter of Acquired From
     * 
     * The organization or person from which the product was acquired.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return mixed
     */
    public function getAcquiredFrom()
    {
        return $this->acquiredFrom;
    }

    /**
     * Setter of Acquired From
     * 
     * The organization or person from which the product was acquired.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param mixed $value Value of acquiredFrom
     */
    public function setAcquiredFrom($value)
    {
        $this->acquiredFrom = $value;
    }

    /**
     * Getter of Owned From
     * 
     * The date and time of obtaining the product.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return \DateTime
     */
    public function getOwnedFrom()
    {
        return $this->ownedFrom;
    }

    /**
     * Setter of Owned From
     * 
     * The date and time of obtaining the product.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param \DateTime $value Value of ownedFrom
     */
    public function setOwnedFrom($value)
    {
        $this->ownedFrom = $value;
    }

    /**
     * Getter of Owned Through
     * 
     * The date and time of giving up ownership on the product.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return \DateTime
     */
    public function getOwnedThrough()
    {
        return $this->ownedThrough;
    }

    /**
     * Setter of Owned Through
     * 
     * The date and time of giving up ownership on the product.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param \DateTime $value Value of ownedThrough
     */
    public function setOwnedThrough($value)
    {
        $this->ownedThrough = $value;
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
}
