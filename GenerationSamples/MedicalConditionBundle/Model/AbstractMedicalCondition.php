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

namespace SchemaRepository\Bundle\MedicalConditionBundle\Model;

use SchemaRepository\Bundle\MedicalConditionBundle\Model\MedicalConditionInterface;
use SchemaRepository\Bundle\MedicalEntityBundle\Model\AbstractMedicalEntity;

/**
 * Model of Medical Condition
 * 
 * @author SchemaGenerator <dallas62@free.fr>
 * @package SchemaRepository\Bundle\MedicalConditionBundle\Model
 */
abstract class AbstractMedicalCondition extends AbstractMedicalEntity implements MedicalConditionInterface
{

    /**
     * The anatomy of the underlying organ system or structures associated
     * with this entity.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var mixed
     */
    protected $associatedAnatomy;

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
     * One of a set of differential diagnoses for the condition.
     * Specifically, a closely-related or competing diagnosis typically
     * considered later in the cognitive process whereby this medical
     * condition is distinguished from others most likely responsible for a
     * similar collection of signs and symptoms to reach the most
     * parsimonious diagnosis or diagnoses in a patient.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var mixed
     */
    protected $differentialDiagnosis;

    /**
     * The characteristics of associated patients, such as age, gender, race
     * etc.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var string
     */
    protected $epidemiology;

    /**
     * The likely outcome in either the short term or long term of the
     * medical condition.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var string
     */
    protected $expectedPrognosis;

    /**
     * The expected progression of the condition if it is not treated and
     * allowed to progress naturally.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var string
     */
    protected $naturalProgression;

    /**
     * Changes in the normal mechanical, physical, and biochemical functions
     * that are associated with this activity or condition.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var string
     */
    protected $pathophysiology;

    /**
     * A possible unexpected and unfavorable evolution of a medical
     * condition. Complications may include worsening of the signs or
     * symptoms of the disease, extension of the condition to other organ
     * systems, etc.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var string
     */
    protected $possibleComplication;

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
     * A preventative therapy used to prevent an initial occurrence of the
     * medical condition, such as vaccination.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var mixed
     */
    protected $primaryPrevention;

    /**
     * A modifiable or non-modifiable factor that increases the risk of a
     * patient contracting this condition, e.g. age,  coexisting condition.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var mixed
     */
    protected $riskFactor;

    /**
     * A preventative therapy used to prevent reoccurrence of the medical
     * condition after an initial episode of the condition.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var mixed
     */
    protected $secondaryPrevention;

    /**
     * A sign or symptom of this condition. Signs are objective or physically
     * observable manifestations of the medical condition while symptoms are
     * the subjective experienceof the medical condition.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var mixed
     */
    protected $signOrSymptom;

    /**
     * The stage of the condition, if applicable.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var mixed
     */
    protected $stage;

    /**
     * A more specific type of the condition, where applicable, for example
     * 'Type 1 Diabetes', 'Type 2 Diabetes', or 'Gestational Diabetes' for
     * Diabetes.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var string
     */
    protected $subtype;

    /**
     * A medical test typically performed given this condition.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var mixed
     */
    protected $typicalTest;

    /**
     * Getter of Associated Anatomy
     * 
     * The anatomy of the underlying organ system or structures associated
     * with this entity.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return mixed
     */
    public function getAssociatedAnatomy()
    {
        return $this->associatedAnatomy;
    }

    /**
     * Setter of Associated Anatomy
     * 
     * The anatomy of the underlying organ system or structures associated
     * with this entity.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param mixed $value Value of associatedAnatomy
     */
    public function setAssociatedAnatomy($value)
    {
        $this->associatedAnatomy = $value;
    }

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
     * Getter of Differential Diagnosis
     * 
     * One of a set of differential diagnoses for the condition.
     * Specifically, a closely-related or competing diagnosis typically
     * considered later in the cognitive process whereby this medical
     * condition is distinguished from others most likely responsible for a
     * similar collection of signs and symptoms to reach the most
     * parsimonious diagnosis or diagnoses in a patient.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return mixed
     */
    public function getDifferentialDiagnosis()
    {
        return $this->differentialDiagnosis;
    }

    /**
     * Setter of Differential Diagnosis
     * 
     * One of a set of differential diagnoses for the condition.
     * Specifically, a closely-related or competing diagnosis typically
     * considered later in the cognitive process whereby this medical
     * condition is distinguished from others most likely responsible for a
     * similar collection of signs and symptoms to reach the most
     * parsimonious diagnosis or diagnoses in a patient.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param mixed $value Value of differentialDiagnosis
     */
    public function setDifferentialDiagnosis($value)
    {
        $this->differentialDiagnosis = $value;
    }

    /**
     * Getter of Epidemiology
     * 
     * The characteristics of associated patients, such as age, gender, race
     * etc.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return string
     */
    public function getEpidemiology()
    {
        return $this->epidemiology;
    }

    /**
     * Setter of Epidemiology
     * 
     * The characteristics of associated patients, such as age, gender, race
     * etc.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param string $value Value of epidemiology
     */
    public function setEpidemiology($value)
    {
        $this->epidemiology = $value;
    }

    /**
     * Getter of Expected Prognosis
     * 
     * The likely outcome in either the short term or long term of the
     * medical condition.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return string
     */
    public function getExpectedPrognosis()
    {
        return $this->expectedPrognosis;
    }

    /**
     * Setter of Expected Prognosis
     * 
     * The likely outcome in either the short term or long term of the
     * medical condition.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param string $value Value of expectedPrognosis
     */
    public function setExpectedPrognosis($value)
    {
        $this->expectedPrognosis = $value;
    }

    /**
     * Getter of Natural Progression
     * 
     * The expected progression of the condition if it is not treated and
     * allowed to progress naturally.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return string
     */
    public function getNaturalProgression()
    {
        return $this->naturalProgression;
    }

    /**
     * Setter of Natural Progression
     * 
     * The expected progression of the condition if it is not treated and
     * allowed to progress naturally.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param string $value Value of naturalProgression
     */
    public function setNaturalProgression($value)
    {
        $this->naturalProgression = $value;
    }

    /**
     * Getter of Pathophysiology
     * 
     * Changes in the normal mechanical, physical, and biochemical functions
     * that are associated with this activity or condition.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return string
     */
    public function getPathophysiology()
    {
        return $this->pathophysiology;
    }

    /**
     * Setter of Pathophysiology
     * 
     * Changes in the normal mechanical, physical, and biochemical functions
     * that are associated with this activity or condition.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param string $value Value of pathophysiology
     */
    public function setPathophysiology($value)
    {
        $this->pathophysiology = $value;
    }

    /**
     * Getter of Possible Complication
     * 
     * A possible unexpected and unfavorable evolution of a medical
     * condition. Complications may include worsening of the signs or
     * symptoms of the disease, extension of the condition to other organ
     * systems, etc.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return string
     */
    public function getPossibleComplication()
    {
        return $this->possibleComplication;
    }

    /**
     * Setter of Possible Complication
     * 
     * A possible unexpected and unfavorable evolution of a medical
     * condition. Complications may include worsening of the signs or
     * symptoms of the disease, extension of the condition to other organ
     * systems, etc.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param string $value Value of possibleComplication
     */
    public function setPossibleComplication($value)
    {
        $this->possibleComplication = $value;
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

    /**
     * Getter of Primary Prevention
     * 
     * A preventative therapy used to prevent an initial occurrence of the
     * medical condition, such as vaccination.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return mixed
     */
    public function getPrimaryPrevention()
    {
        return $this->primaryPrevention;
    }

    /**
     * Setter of Primary Prevention
     * 
     * A preventative therapy used to prevent an initial occurrence of the
     * medical condition, such as vaccination.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param mixed $value Value of primaryPrevention
     */
    public function setPrimaryPrevention($value)
    {
        $this->primaryPrevention = $value;
    }

    /**
     * Getter of Risk Factor
     * 
     * A modifiable or non-modifiable factor that increases the risk of a
     * patient contracting this condition, e.g. age,  coexisting condition.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return mixed
     */
    public function getRiskFactor()
    {
        return $this->riskFactor;
    }

    /**
     * Setter of Risk Factor
     * 
     * A modifiable or non-modifiable factor that increases the risk of a
     * patient contracting this condition, e.g. age,  coexisting condition.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param mixed $value Value of riskFactor
     */
    public function setRiskFactor($value)
    {
        $this->riskFactor = $value;
    }

    /**
     * Getter of Secondary Prevention
     * 
     * A preventative therapy used to prevent reoccurrence of the medical
     * condition after an initial episode of the condition.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return mixed
     */
    public function getSecondaryPrevention()
    {
        return $this->secondaryPrevention;
    }

    /**
     * Setter of Secondary Prevention
     * 
     * A preventative therapy used to prevent reoccurrence of the medical
     * condition after an initial episode of the condition.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param mixed $value Value of secondaryPrevention
     */
    public function setSecondaryPrevention($value)
    {
        $this->secondaryPrevention = $value;
    }

    /**
     * Getter of Sign or Symptom
     * 
     * A sign or symptom of this condition. Signs are objective or physically
     * observable manifestations of the medical condition while symptoms are
     * the subjective experienceof the medical condition.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return mixed
     */
    public function getSignOrSymptom()
    {
        return $this->signOrSymptom;
    }

    /**
     * Setter of Sign or Symptom
     * 
     * A sign or symptom of this condition. Signs are objective or physically
     * observable manifestations of the medical condition while symptoms are
     * the subjective experienceof the medical condition.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param mixed $value Value of signOrSymptom
     */
    public function setSignOrSymptom($value)
    {
        $this->signOrSymptom = $value;
    }

    /**
     * Getter of Stage
     * 
     * The stage of the condition, if applicable.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return mixed
     */
    public function getStage()
    {
        return $this->stage;
    }

    /**
     * Setter of Stage
     * 
     * The stage of the condition, if applicable.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param mixed $value Value of stage
     */
    public function setStage($value)
    {
        $this->stage = $value;
    }

    /**
     * Getter of Subtype
     * 
     * A more specific type of the condition, where applicable, for example
     * 'Type 1 Diabetes', 'Type 2 Diabetes', or 'Gestational Diabetes' for
     * Diabetes.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return string
     */
    public function getSubtype()
    {
        return $this->subtype;
    }

    /**
     * Setter of Subtype
     * 
     * A more specific type of the condition, where applicable, for example
     * 'Type 1 Diabetes', 'Type 2 Diabetes', or 'Gestational Diabetes' for
     * Diabetes.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param string $value Value of subtype
     */
    public function setSubtype($value)
    {
        $this->subtype = $value;
    }

    /**
     * Getter of Typical Test
     * 
     * A medical test typically performed given this condition.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return mixed
     */
    public function getTypicalTest()
    {
        return $this->typicalTest;
    }

    /**
     * Setter of Typical Test
     * 
     * A medical test typically performed given this condition.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param mixed $value Value of typicalTest
     */
    public function setTypicalTest($value)
    {
        $this->typicalTest = $value;
    }
}
