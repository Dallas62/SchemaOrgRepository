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

namespace SchemaRepository\Bundle\PeopleAudienceBundle\Model;

use SchemaRepository\Bundle\PeopleAudienceBundle\Model\PeopleAudienceInterface;
use SchemaRepository\Bundle\AudienceBundle\Model\AbstractAudience;

/**
 * Model of People Audience
 * 
 * @author SchemaGenerator <dallas62@free.fr>
 * @package SchemaRepository\Bundle\PeopleAudienceBundle\Model
 */
abstract class AbstractPeopleAudience extends AbstractAudience implements PeopleAudienceInterface
{

    /**
     * Expectations for health conditions of target audience
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var mixed
     */
    protected $healthCondition;

    /**
     * The gender of the person or audience.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var string
     */
    protected $suggestedGender;

    /**
     * Maximal age recommended for viewing content
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var integer|long|float|decimal
     */
    protected $suggestedMaxAge;

    /**
     * Minimal age recommended for viewing content
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var integer|long|float|decimal
     */
    protected $suggestedMinAge;

    /**
     * Getter of Health Condition
     * 
     * Expectations for health conditions of target audience
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return mixed
     */
    public function getHealthCondition()
    {
        return $this->healthCondition;
    }

    /**
     * Setter of Health Condition
     * 
     * Expectations for health conditions of target audience
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param mixed $value Value of healthCondition
     */
    public function setHealthCondition($value)
    {
        $this->healthCondition = $value;
    }

    /**
     * Getter of Suggested Gender
     * 
     * The gender of the person or audience.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return string
     */
    public function getSuggestedGender()
    {
        return $this->suggestedGender;
    }

    /**
     * Setter of Suggested Gender
     * 
     * The gender of the person or audience.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param string $value Value of suggestedGender
     */
    public function setSuggestedGender($value)
    {
        $this->suggestedGender = $value;
    }

    /**
     * Getter of Suggested Max Age
     * 
     * Maximal age recommended for viewing content
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return integer|long|float|decimal
     */
    public function getSuggestedMaxAge()
    {
        return $this->suggestedMaxAge;
    }

    /**
     * Setter of Suggested Max Age
     * 
     * Maximal age recommended for viewing content
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param integer|long|float|decimal $value Value of suggestedMaxAge
     */
    public function setSuggestedMaxAge($value)
    {
        $this->suggestedMaxAge = $value;
    }

    /**
     * Getter of Suggested Min Age
     * 
     * Minimal age recommended for viewing content
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return integer|long|float|decimal
     */
    public function getSuggestedMinAge()
    {
        return $this->suggestedMinAge;
    }

    /**
     * Setter of Suggested Min Age
     * 
     * Minimal age recommended for viewing content
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param integer|long|float|decimal $value Value of suggestedMinAge
     */
    public function setSuggestedMinAge($value)
    {
        $this->suggestedMinAge = $value;
    }
}
