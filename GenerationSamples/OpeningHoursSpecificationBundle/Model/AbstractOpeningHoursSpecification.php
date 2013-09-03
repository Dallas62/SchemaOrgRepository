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

namespace SchemaRepository\Bundle\OpeningHoursSpecificationBundle\Model;

use SchemaRepository\Bundle\OpeningHoursSpecificationBundle\Model\OpeningHoursSpecificationInterface;
use SchemaRepository\Bundle\StructuredValueBundle\Model\AbstractStructuredValue;

/**
 * Model of Opening Hours Specification
 * 
 * @author SchemaGenerator <dallas62@free.fr>
 * @package SchemaRepository\Bundle\OpeningHoursSpecificationBundle\Model
 */
abstract class AbstractOpeningHoursSpecification extends AbstractStructuredValue implements OpeningHoursSpecificationInterface
{

    /**
     * The closing hour of the place or service on the given day(s) of the
     * week.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var \DateTime
     */
    protected $closes;

    /**
     * The day of the week for which these opening hours are valid.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var mixed
     */
    protected $dayOfWeek;

    /**
     * The opening hour of the place or service on the given day(s) of the
     * week.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var \DateTime
     */
    protected $opens;

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
     * Getter of Closes
     * 
     * The closing hour of the place or service on the given day(s) of the
     * week.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return \DateTime
     */
    public function getCloses()
    {
        return $this->closes;
    }

    /**
     * Setter of Closes
     * 
     * The closing hour of the place or service on the given day(s) of the
     * week.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param \DateTime $value Value of closes
     */
    public function setCloses($value)
    {
        $this->closes = $value;
    }

    /**
     * Getter of Day of Week
     * 
     * The day of the week for which these opening hours are valid.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return mixed
     */
    public function getDayOfWeek()
    {
        return $this->dayOfWeek;
    }

    /**
     * Setter of Day of Week
     * 
     * The day of the week for which these opening hours are valid.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param mixed $value Value of dayOfWeek
     */
    public function setDayOfWeek($value)
    {
        $this->dayOfWeek = $value;
    }

    /**
     * Getter of Opens
     * 
     * The opening hour of the place or service on the given day(s) of the
     * week.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return \DateTime
     */
    public function getOpens()
    {
        return $this->opens;
    }

    /**
     * Setter of Opens
     * 
     * The opening hour of the place or service on the given day(s) of the
     * week.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param \DateTime $value Value of opens
     */
    public function setOpens($value)
    {
        $this->opens = $value;
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
}
