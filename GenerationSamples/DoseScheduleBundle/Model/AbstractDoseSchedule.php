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

namespace SchemaRepository\Bundle\DoseScheduleBundle\Model;

use SchemaRepository\Bundle\DoseScheduleBundle\Model\DoseScheduleInterface;
use SchemaRepository\Bundle\MedicalIntangibleBundle\Model\AbstractMedicalIntangible;

/**
 * Model of Dose Schedule
 * 
 * @author SchemaGenerator <dallas62@free.fr>
 * @package SchemaRepository\Bundle\DoseScheduleBundle\Model
 */
abstract class AbstractDoseSchedule extends AbstractMedicalIntangible implements DoseScheduleInterface
{

    /**
     * The unit of the dose, e.g. 'mg'.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var string
     */
    protected $doseUnit;

    /**
     * The value of the dose, e.g. 500.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var integer|long|float|decimal
     */
    protected $doseValue;

    /**
     * How often the dose is taken, e.g. 'daily'.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var string
     */
    protected $frequency;

    /**
     * Characteristics of the population for which this is intended, or which
     * typically uses it, e.g. 'adults'.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var string
     */
    protected $targetPopulation;

    /**
     * Getter of Dose Unit
     * 
     * The unit of the dose, e.g. 'mg'.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return string
     */
    public function getDoseUnit()
    {
        return $this->doseUnit;
    }

    /**
     * Setter of Dose Unit
     * 
     * The unit of the dose, e.g. 'mg'.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param string $value Value of doseUnit
     */
    public function setDoseUnit($value)
    {
        $this->doseUnit = $value;
    }

    /**
     * Getter of Dose Value
     * 
     * The value of the dose, e.g. 500.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return integer|long|float|decimal
     */
    public function getDoseValue()
    {
        return $this->doseValue;
    }

    /**
     * Setter of Dose Value
     * 
     * The value of the dose, e.g. 500.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param integer|long|float|decimal $value Value of doseValue
     */
    public function setDoseValue($value)
    {
        $this->doseValue = $value;
    }

    /**
     * Getter of Frequency
     * 
     * How often the dose is taken, e.g. 'daily'.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return string
     */
    public function getFrequency()
    {
        return $this->frequency;
    }

    /**
     * Setter of Frequency
     * 
     * How often the dose is taken, e.g. 'daily'.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param string $value Value of frequency
     */
    public function setFrequency($value)
    {
        $this->frequency = $value;
    }

    /**
     * Getter of Target Population
     * 
     * Characteristics of the population for which this is intended, or which
     * typically uses it, e.g. 'adults'.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return string
     */
    public function getTargetPopulation()
    {
        return $this->targetPopulation;
    }

    /**
     * Setter of Target Population
     * 
     * Characteristics of the population for which this is intended, or which
     * typically uses it, e.g. 'adults'.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param string $value Value of targetPopulation
     */
    public function setTargetPopulation($value)
    {
        $this->targetPopulation = $value;
    }
}
