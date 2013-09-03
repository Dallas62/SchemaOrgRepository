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

namespace SchemaRepository\Bundle\PropertyBundle\Model;

use SchemaRepository\Bundle\PropertyBundle\Model\PropertyInterface;
use SchemaRepository\Bundle\ThingBundle\Model\AbstractThing;

/**
 * Model of Property
 * 
 * @author SchemaGenerator <dallas62@free.fr>
 * @package SchemaRepository\Bundle\PropertyBundle\Model
 */
abstract class AbstractProperty extends AbstractThing implements PropertyInterface
{

    /**
     * Relates a property to a class that is (one of) the type(s) the
     * property is expected to be used on.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var mixed
     */
    protected $domainIncludes;

    /**
     * Relates a property to a class that constitutes (one of) the expected
     * type(s) for values of the property.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var mixed
     */
    protected $rangeIncludes;

    /**
     * Getter of Domain Includes
     * 
     * Relates a property to a class that is (one of) the type(s) the
     * property is expected to be used on.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return mixed
     */
    public function getDomainIncludes()
    {
        return $this->domainIncludes;
    }

    /**
     * Setter of Domain Includes
     * 
     * Relates a property to a class that is (one of) the type(s) the
     * property is expected to be used on.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param mixed $value Value of domainIncludes
     */
    public function setDomainIncludes($value)
    {
        $this->domainIncludes = $value;
    }

    /**
     * Getter of Range Includes
     * 
     * Relates a property to a class that constitutes (one of) the expected
     * type(s) for values of the property.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return mixed
     */
    public function getRangeIncludes()
    {
        return $this->rangeIncludes;
    }

    /**
     * Setter of Range Includes
     * 
     * Relates a property to a class that constitutes (one of) the expected
     * type(s) for values of the property.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param mixed $value Value of rangeIncludes
     */
    public function setRangeIncludes($value)
    {
        $this->rangeIncludes = $value;
    }
}
