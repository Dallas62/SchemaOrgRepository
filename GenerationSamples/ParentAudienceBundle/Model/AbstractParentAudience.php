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

namespace SchemaRepository\Bundle\ParentAudienceBundle\Model;

use SchemaRepository\Bundle\ParentAudienceBundle\Model\ParentAudienceInterface;
use SchemaRepository\Bundle\PeopleAudienceBundle\Model\AbstractPeopleAudience;

/**
 * Model of Parent Audience
 * 
 * @author SchemaGenerator <dallas62@free.fr>
 * @package SchemaRepository\Bundle\ParentAudienceBundle\Model
 */
abstract class AbstractParentAudience extends AbstractPeopleAudience implements ParentAudienceInterface
{

    /**
     * Maximal age of the child
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var integer|long|float|decimal
     */
    protected $childMaxAge;

    /**
     * Minimal age of the child
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var integer|long|float|decimal
     */
    protected $childMinAge;

    /**
     * Getter of Child Max Age
     * 
     * Maximal age of the child
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return integer|long|float|decimal
     */
    public function getChildMaxAge()
    {
        return $this->childMaxAge;
    }

    /**
     * Setter of Child Max Age
     * 
     * Maximal age of the child
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param integer|long|float|decimal $value Value of childMaxAge
     */
    public function setChildMaxAge($value)
    {
        $this->childMaxAge = $value;
    }

    /**
     * Getter of Child Min Age
     * 
     * Minimal age of the child
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return integer|long|float|decimal
     */
    public function getChildMinAge()
    {
        return $this->childMinAge;
    }

    /**
     * Setter of Child Min Age
     * 
     * Minimal age of the child
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param integer|long|float|decimal $value Value of childMinAge
     */
    public function setChildMinAge($value)
    {
        $this->childMinAge = $value;
    }
}
