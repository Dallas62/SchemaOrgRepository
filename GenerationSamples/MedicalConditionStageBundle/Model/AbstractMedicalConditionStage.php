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

namespace SchemaRepository\Bundle\MedicalConditionStageBundle\Model;

use SchemaRepository\Bundle\MedicalConditionStageBundle\Model\MedicalConditionStageInterface;
use SchemaRepository\Bundle\MedicalIntangibleBundle\Model\AbstractMedicalIntangible;

/**
 * Model of Medical Condition Stage
 * 
 * @author SchemaGenerator <dallas62@free.fr>
 * @package SchemaRepository\Bundle\MedicalConditionStageBundle\Model
 */
abstract class AbstractMedicalConditionStage extends AbstractMedicalIntangible implements MedicalConditionStageInterface
{

    /**
     * The stage represented as a number, e.g. 3.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var integer|long|float|decimal
     */
    protected $stageAsNumber;

    /**
     * The substage, e.g. 'a' for Stage IIIa.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var string
     */
    protected $subStageSuffix;

    /**
     * Getter of Stage As Number
     * 
     * The stage represented as a number, e.g. 3.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return integer|long|float|decimal
     */
    public function getStageAsNumber()
    {
        return $this->stageAsNumber;
    }

    /**
     * Setter of Stage As Number
     * 
     * The stage represented as a number, e.g. 3.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param integer|long|float|decimal $value Value of stageAsNumber
     */
    public function setStageAsNumber($value)
    {
        $this->stageAsNumber = $value;
    }

    /**
     * Getter of Sub Stage Suffix
     * 
     * The substage, e.g. 'a' for Stage IIIa.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return string
     */
    public function getSubStageSuffix()
    {
        return $this->subStageSuffix;
    }

    /**
     * Setter of Sub Stage Suffix
     * 
     * The substage, e.g. 'a' for Stage IIIa.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param string $value Value of subStageSuffix
     */
    public function setSubStageSuffix($value)
    {
        $this->subStageSuffix = $value;
    }
}