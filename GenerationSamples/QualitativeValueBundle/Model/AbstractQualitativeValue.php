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

namespace SchemaRepository\Bundle\QualitativeValueBundle\Model;

use SchemaRepository\Bundle\QualitativeValueBundle\Model\QualitativeValueInterface;
use SchemaRepository\Bundle\EnumerationBundle\Model\AbstractEnumeration;

/**
 * Model of Qualitative Value
 * 
 * @author SchemaGenerator <dallas62@free.fr>
 * @package SchemaRepository\Bundle\QualitativeValueBundle\Model
 */
abstract class AbstractQualitativeValue extends AbstractEnumeration implements QualitativeValueInterface
{

    /**
     * This ordering relation for qualitative values indicates that the
     * subject is equal to the object.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var mixed
     */
    protected $equal;

    /**
     * This ordering relation for qualitative values indicates that the
     * subject is greater than the object.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var mixed
     */
    protected $greater;

    /**
     * This ordering relation for qualitative values indicates that the
     * subject is greater than or equal to the object.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var mixed
     */
    protected $greaterOrEqual;

    /**
     * This ordering relation for qualitative values indicates that the
     * subject is lesser than the object.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var mixed
     */
    protected $lesser;

    /**
     * This ordering relation for qualitative values indicates that the
     * subject is lesser than or equal to the object.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var mixed
     */
    protected $lesserOrEqual;

    /**
     * This ordering relation for qualitative values indicates that the
     * subject is not equal to the object.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var mixed
     */
    protected $nonEqual;

    /**
     * A pointer to a secondary value that provides additional information on
     * the original value, e.g. a reference temperature.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var mixed
     */
    protected $valueReference;

    /**
     * Getter of Equal
     * 
     * This ordering relation for qualitative values indicates that the
     * subject is equal to the object.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return mixed
     */
    public function getEqual()
    {
        return $this->equal;
    }

    /**
     * Setter of Equal
     * 
     * This ordering relation for qualitative values indicates that the
     * subject is equal to the object.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param mixed $value Value of equal
     */
    public function setEqual($value)
    {
        $this->equal = $value;
    }

    /**
     * Getter of Greater
     * 
     * This ordering relation for qualitative values indicates that the
     * subject is greater than the object.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return mixed
     */
    public function getGreater()
    {
        return $this->greater;
    }

    /**
     * Setter of Greater
     * 
     * This ordering relation for qualitative values indicates that the
     * subject is greater than the object.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param mixed $value Value of greater
     */
    public function setGreater($value)
    {
        $this->greater = $value;
    }

    /**
     * Getter of Greater or Equal
     * 
     * This ordering relation for qualitative values indicates that the
     * subject is greater than or equal to the object.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return mixed
     */
    public function getGreaterOrEqual()
    {
        return $this->greaterOrEqual;
    }

    /**
     * Setter of Greater or Equal
     * 
     * This ordering relation for qualitative values indicates that the
     * subject is greater than or equal to the object.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param mixed $value Value of greaterOrEqual
     */
    public function setGreaterOrEqual($value)
    {
        $this->greaterOrEqual = $value;
    }

    /**
     * Getter of Lesser
     * 
     * This ordering relation for qualitative values indicates that the
     * subject is lesser than the object.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return mixed
     */
    public function getLesser()
    {
        return $this->lesser;
    }

    /**
     * Setter of Lesser
     * 
     * This ordering relation for qualitative values indicates that the
     * subject is lesser than the object.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param mixed $value Value of lesser
     */
    public function setLesser($value)
    {
        $this->lesser = $value;
    }

    /**
     * Getter of Lesser or Equal
     * 
     * This ordering relation for qualitative values indicates that the
     * subject is lesser than or equal to the object.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return mixed
     */
    public function getLesserOrEqual()
    {
        return $this->lesserOrEqual;
    }

    /**
     * Setter of Lesser or Equal
     * 
     * This ordering relation for qualitative values indicates that the
     * subject is lesser than or equal to the object.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param mixed $value Value of lesserOrEqual
     */
    public function setLesserOrEqual($value)
    {
        $this->lesserOrEqual = $value;
    }

    /**
     * Getter of Non Equal
     * 
     * This ordering relation for qualitative values indicates that the
     * subject is not equal to the object.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return mixed
     */
    public function getNonEqual()
    {
        return $this->nonEqual;
    }

    /**
     * Setter of Non Equal
     * 
     * This ordering relation for qualitative values indicates that the
     * subject is not equal to the object.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param mixed $value Value of nonEqual
     */
    public function setNonEqual($value)
    {
        $this->nonEqual = $value;
    }

    /**
     * Getter of Value Reference
     * 
     * A pointer to a secondary value that provides additional information on
     * the original value, e.g. a reference temperature.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return mixed
     */
    public function getValueReference()
    {
        return $this->valueReference;
    }

    /**
     * Setter of Value Reference
     * 
     * A pointer to a secondary value that provides additional information on
     * the original value, e.g. a reference temperature.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param mixed $value Value of valueReference
     */
    public function setValueReference($value)
    {
        $this->valueReference = $value;
    }
}
