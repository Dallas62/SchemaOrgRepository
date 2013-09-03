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

namespace SchemaRepository\Bundle\MedicalRiskEstimatorBundle\Model;

use SchemaRepository\Bundle\MedicalRiskEstimatorBundle\Model\MedicalRiskEstimatorInterface;
use SchemaRepository\Bundle\MedicalEntityBundle\Model\AbstractMedicalEntity;

/**
 * Model of Medical Risk Estimator
 * 
 * @author SchemaGenerator <dallas62@free.fr>
 * @package SchemaRepository\Bundle\MedicalRiskEstimatorBundle\Model
 */
abstract class AbstractMedicalRiskEstimator extends AbstractMedicalEntity implements MedicalRiskEstimatorInterface
{

    /**
     * The condition, complication, or symptom whose risk is being estimated.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var mixed
     */
    protected $estimatesRiskOf;

    /**
     * A modifiable or non-modifiable risk factor included in the
     * calculation, e.g. age, coexisting condition.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var mixed
     */
    protected $includedRiskFactor;

    /**
     * Getter of Estimates Risk of
     * 
     * The condition, complication, or symptom whose risk is being estimated.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return mixed
     */
    public function getEstimatesRiskOf()
    {
        return $this->estimatesRiskOf;
    }

    /**
     * Setter of Estimates Risk of
     * 
     * The condition, complication, or symptom whose risk is being estimated.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param mixed $value Value of estimatesRiskOf
     */
    public function setEstimatesRiskOf($value)
    {
        $this->estimatesRiskOf = $value;
    }

    /**
     * Getter of Included Risk Factor
     * 
     * A modifiable or non-modifiable risk factor included in the
     * calculation, e.g. age, coexisting condition.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return mixed
     */
    public function getIncludedRiskFactor()
    {
        return $this->includedRiskFactor;
    }

    /**
     * Setter of Included Risk Factor
     * 
     * A modifiable or non-modifiable risk factor included in the
     * calculation, e.g. age, coexisting condition.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param mixed $value Value of includedRiskFactor
     */
    public function setIncludedRiskFactor($value)
    {
        $this->includedRiskFactor = $value;
    }
}
