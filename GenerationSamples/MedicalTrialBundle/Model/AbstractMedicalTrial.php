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

namespace SchemaRepository\Bundle\MedicalTrialBundle\Model;

use SchemaRepository\Bundle\MedicalTrialBundle\Model\MedicalTrialInterface;
use SchemaRepository\Bundle\MedicalStudyBundle\Model\AbstractMedicalStudy;

/**
 * Model of Medical Trial
 * 
 * @author SchemaGenerator <dallas62@free.fr>
 * @package SchemaRepository\Bundle\MedicalTrialBundle\Model
 */
abstract class AbstractMedicalTrial extends AbstractMedicalStudy implements MedicalTrialInterface
{

    /**
     * The phase of the trial.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var string
     */
    protected $phase;

    /**
     * Specifics about the trial design (enumerated).
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var mixed
     */
    protected $trialDesign;

    /**
     * Getter of Phase
     * 
     * The phase of the trial.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return string
     */
    public function getPhase()
    {
        return $this->phase;
    }

    /**
     * Setter of Phase
     * 
     * The phase of the trial.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param string $value Value of phase
     */
    public function setPhase($value)
    {
        $this->phase = $value;
    }

    /**
     * Getter of Trial Design
     * 
     * Specifics about the trial design (enumerated).
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return mixed
     */
    public function getTrialDesign()
    {
        return $this->trialDesign;
    }

    /**
     * Setter of Trial Design
     * 
     * Specifics about the trial design (enumerated).
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param mixed $value Value of trialDesign
     */
    public function setTrialDesign($value)
    {
        $this->trialDesign = $value;
    }
}
