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

namespace SchemaRepository\Bundle\MedicalSignOrSymptomBundle\Model;

use SchemaRepository\Bundle\MedicalSignOrSymptomBundle\Model\MedicalSignOrSymptomInterface;
use SchemaRepository\Bundle\MedicalEntityBundle\Model\AbstractMedicalEntity;

/**
 * Model of Medical Sign or Symptom
 * 
 * @author SchemaGenerator <dallas62@free.fr>
 * @package SchemaRepository\Bundle\MedicalSignOrSymptomBundle\Model
 */
abstract class AbstractMedicalSignOrSymptom extends AbstractMedicalEntity implements MedicalSignOrSymptomInterface
{

    /**
     * An underlying cause. More specifically, one of the causative agent(s)
     * that are most directly responsible for the pathophysiologic process
     * that eventually results in the occurrence.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var mixed
     */
    protected $cause;

    /**
     * A possible treatment to address this condition, sign or symptom.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var mixed
     */
    protected $possibleTreatment;

    /**
     * Getter of Cause
     * 
     * An underlying cause. More specifically, one of the causative agent(s)
     * that are most directly responsible for the pathophysiologic process
     * that eventually results in the occurrence.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return mixed
     */
    public function getCause()
    {
        return $this->cause;
    }

    /**
     * Setter of Cause
     * 
     * An underlying cause. More specifically, one of the causative agent(s)
     * that are most directly responsible for the pathophysiologic process
     * that eventually results in the occurrence.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param mixed $value Value of cause
     */
    public function setCause($value)
    {
        $this->cause = $value;
    }

    /**
     * Getter of Possible Treatment
     * 
     * A possible treatment to address this condition, sign or symptom.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return mixed
     */
    public function getPossibleTreatment()
    {
        return $this->possibleTreatment;
    }

    /**
     * Setter of Possible Treatment
     * 
     * A possible treatment to address this condition, sign or symptom.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param mixed $value Value of possibleTreatment
     */
    public function setPossibleTreatment($value)
    {
        $this->possibleTreatment = $value;
    }
}
