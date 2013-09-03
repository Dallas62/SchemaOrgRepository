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

use SchemaRepository\Bundle\MedicalEntityBundle\Model\MedicalEntityInterface;

/**
 * Interface of Medical Condition Model
 * 
 * @author SchemaGenerator <dallas62@free.fr>
 * @package SchemaRepository\Bundle\MedicalConditionBundle\Model
 */
interface MedicalConditionInterface extends MedicalEntityInterface
{

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
    public function getAssociatedAnatomy();

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
    public function getCause();

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
    public function getDifferentialDiagnosis();

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
    public function getEpidemiology();

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
    public function getExpectedPrognosis();

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
    public function getNaturalProgression();

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
    public function getPathophysiology();

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
    public function getPossibleComplication();

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
    public function getPossibleTreatment();

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
    public function getPrimaryPrevention();

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
    public function getRiskFactor();

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
    public function getSecondaryPrevention();

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
    public function getSignOrSymptom();

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
    public function getStage();

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
    public function getSubtype();

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
    public function getTypicalTest();
}
