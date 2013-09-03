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

namespace SchemaRepository\Bundle\ExercisePlanBundle\Model;

use SchemaRepository\Bundle\ExercisePlanBundle\Model\ExercisePlanInterface;
use SchemaRepository\Bundle\CreativeWorkBundle\Model\AbstractCreativeWork;

/**
 * Model of Exercise Plan
 * 
 * @author SchemaGenerator <dallas62@free.fr>
 * @package SchemaRepository\Bundle\ExercisePlanBundle\Model
 */
abstract class AbstractExercisePlan extends AbstractCreativeWork implements ExercisePlanInterface
{

    /**
     * Length of time to engage in the activity.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var mixed
     */
    protected $activityDuration;

    /**
     * How often one should engage in the activity.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var string
     */
    protected $activityFrequency;

    /**
     * Any additional component of the exercise prescription that may need to
     * be articulated to the patient. This may include the order of
     * exercises, the number of repetitions of movement, quantitative
     * distance, progressions over time, etc.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var string
     */
    protected $additionalVariable;

    /**
     * A possible complication and/or side effect of this therapy. If it is
     * known that an adverse outcome is serious (resulting in death,
     * disability, or permanent damage; requiring hospitalization; or is
     * otherwise life-threatening or requires immediate medical attention),
     * tag it as a seriouseAdverseOutcome instead.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var mixed
     */
    protected $adverseOutcome;

    /**
     * Any alternate name for this medical entity.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var string
     */
    protected $alternateName;

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
     * A category for the item. Greater signs or slashes can be used to
     * informally indicate a category hierarchy.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var mixed
     */
    protected $category;

    /**
     * A medical code for the entity, taken from a controlled vocabulary or
     * ontology such as ICD-9, DiseasesDB, MeSH, SNOMED-CT, RxNorm, etc.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var mixed
     */
    protected $code;

    /**
     * A contraindication for this therapy.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var mixed
     */
    protected $contraindication;

    /**
     * A therapy that duplicates or overlaps this one.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var mixed
     */
    protected $duplicateTherapy;

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
     * Type(s) of exercise or activity, such as strength training,
     * flexibility training, aerobics, cardiac rehabilitation, etc.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var string
     */
    protected $exerciseType;

    /**
     * A medical guideline related to this entity.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var mixed
     */
    protected $guideline;

    /**
     * A factor that indicates use of this therapy for treatment and/or
     * prevention of a condition, symptom, etc. For therapies such as drugs,
     * indications can include both officially-approved indications as well
     * as off-label uses. These can be distinguished by using the
     * ApprovedIndication subtype of MedicalIndication.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var mixed
     */
    protected $indication;

    /**
     * Quantitative measure gauging the degree of force involved in the
     * exercise, for example, heartbeats per minute. May include the velocity
     * of the movement.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var string
     */
    protected $intensity;

    /**
     * The system of medicine that includes this MedicalEntity, for example
     * 'evidence-based', 'homeopathic', 'chiropractic', etc.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var mixed
     */
    protected $medicineSystem;

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
     * If applicable, the organization that officially recognizes this entity
     * as part of its endorsed system of medicine.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var mixed
     */
    protected $recognizingAuthority;

    /**
     * If applicable, a medical specialty in which this entity is relevant.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var mixed
     */
    protected $relevantSpecialty;

    /**
     * Number of times one should repeat the activity.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var integer|long|float|decimal
     */
    protected $repetitions;

    /**
     * How often one should break from the activity.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var string
     */
    protected $restPeriods;

    /**
     * A possible serious complication and/or serious side effect of this
     * therapy. Serious adverse outcomes include those that are
     * life-threatening; result in death, disability, or permanent damage;
     * require hospitalization or prolong existing hospitalization; cause
     * congenital anomalies or birth defects; or jeopardize the patient and
     * may require medical or surgical intervention to prevent one of the
     * outcomes in this definition.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var mixed
     */
    protected $seriousAdverseOutcome;

    /**
     * A medical study or trial related to this entity.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var mixed
     */
    protected $study;

    /**
     * Quantitative measure of the physiologic output of the exercise; also
     * referred to as energy expenditure.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var mixed
     */
    protected $workload;

    /**
     * Getter of Activity Duration
     * 
     * Length of time to engage in the activity.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return mixed
     */
    public function getActivityDuration()
    {
        return $this->activityDuration;
    }

    /**
     * Setter of Activity Duration
     * 
     * Length of time to engage in the activity.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param mixed $value Value of activityDuration
     */
    public function setActivityDuration($value)
    {
        $this->activityDuration = $value;
    }

    /**
     * Getter of Activity Frequency
     * 
     * How often one should engage in the activity.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return string
     */
    public function getActivityFrequency()
    {
        return $this->activityFrequency;
    }

    /**
     * Setter of Activity Frequency
     * 
     * How often one should engage in the activity.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param string $value Value of activityFrequency
     */
    public function setActivityFrequency($value)
    {
        $this->activityFrequency = $value;
    }

    /**
     * Getter of Additional Variable
     * 
     * Any additional component of the exercise prescription that may need to
     * be articulated to the patient. This may include the order of
     * exercises, the number of repetitions of movement, quantitative
     * distance, progressions over time, etc.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return string
     */
    public function getAdditionalVariable()
    {
        return $this->additionalVariable;
    }

    /**
     * Setter of Additional Variable
     * 
     * Any additional component of the exercise prescription that may need to
     * be articulated to the patient. This may include the order of
     * exercises, the number of repetitions of movement, quantitative
     * distance, progressions over time, etc.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param string $value Value of additionalVariable
     */
    public function setAdditionalVariable($value)
    {
        $this->additionalVariable = $value;
    }

    /**
     * Getter of Adverse Outcome
     * 
     * A possible complication and/or side effect of this therapy. If it is
     * known that an adverse outcome is serious (resulting in death,
     * disability, or permanent damage; requiring hospitalization; or is
     * otherwise life-threatening or requires immediate medical attention),
     * tag it as a seriouseAdverseOutcome instead.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return mixed
     */
    public function getAdverseOutcome()
    {
        return $this->adverseOutcome;
    }

    /**
     * Setter of Adverse Outcome
     * 
     * A possible complication and/or side effect of this therapy. If it is
     * known that an adverse outcome is serious (resulting in death,
     * disability, or permanent damage; requiring hospitalization; or is
     * otherwise life-threatening or requires immediate medical attention),
     * tag it as a seriouseAdverseOutcome instead.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param mixed $value Value of adverseOutcome
     */
    public function setAdverseOutcome($value)
    {
        $this->adverseOutcome = $value;
    }

    /**
     * Getter of Alternate Name
     * 
     * Any alternate name for this medical entity.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return string
     */
    public function getAlternateName()
    {
        return $this->alternateName;
    }

    /**
     * Setter of Alternate Name
     * 
     * Any alternate name for this medical entity.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param string $value Value of alternateName
     */
    public function setAlternateName($value)
    {
        $this->alternateName = $value;
    }

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
     * Getter of Category
     * 
     * A category for the item. Greater signs or slashes can be used to
     * informally indicate a category hierarchy.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return mixed
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Setter of Category
     * 
     * A category for the item. Greater signs or slashes can be used to
     * informally indicate a category hierarchy.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param mixed $value Value of category
     */
    public function setCategory($value)
    {
        $this->category = $value;
    }

    /**
     * Getter of Code
     * 
     * A medical code for the entity, taken from a controlled vocabulary or
     * ontology such as ICD-9, DiseasesDB, MeSH, SNOMED-CT, RxNorm, etc.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return mixed
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Setter of Code
     * 
     * A medical code for the entity, taken from a controlled vocabulary or
     * ontology such as ICD-9, DiseasesDB, MeSH, SNOMED-CT, RxNorm, etc.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param mixed $value Value of code
     */
    public function setCode($value)
    {
        $this->code = $value;
    }

    /**
     * Getter of Contraindication
     * 
     * A contraindication for this therapy.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return mixed
     */
    public function getContraindication()
    {
        return $this->contraindication;
    }

    /**
     * Setter of Contraindication
     * 
     * A contraindication for this therapy.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param mixed $value Value of contraindication
     */
    public function setContraindication($value)
    {
        $this->contraindication = $value;
    }

    /**
     * Getter of Duplicate Therapy
     * 
     * A therapy that duplicates or overlaps this one.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return mixed
     */
    public function getDuplicateTherapy()
    {
        return $this->duplicateTherapy;
    }

    /**
     * Setter of Duplicate Therapy
     * 
     * A therapy that duplicates or overlaps this one.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param mixed $value Value of duplicateTherapy
     */
    public function setDuplicateTherapy($value)
    {
        $this->duplicateTherapy = $value;
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
     * Getter of Exercise Type
     * 
     * Type(s) of exercise or activity, such as strength training,
     * flexibility training, aerobics, cardiac rehabilitation, etc.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return string
     */
    public function getExerciseType()
    {
        return $this->exerciseType;
    }

    /**
     * Setter of Exercise Type
     * 
     * Type(s) of exercise or activity, such as strength training,
     * flexibility training, aerobics, cardiac rehabilitation, etc.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param string $value Value of exerciseType
     */
    public function setExerciseType($value)
    {
        $this->exerciseType = $value;
    }

    /**
     * Getter of Guideline
     * 
     * A medical guideline related to this entity.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return mixed
     */
    public function getGuideline()
    {
        return $this->guideline;
    }

    /**
     * Setter of Guideline
     * 
     * A medical guideline related to this entity.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param mixed $value Value of guideline
     */
    public function setGuideline($value)
    {
        $this->guideline = $value;
    }

    /**
     * Getter of Indication
     * 
     * A factor that indicates use of this therapy for treatment and/or
     * prevention of a condition, symptom, etc. For therapies such as drugs,
     * indications can include both officially-approved indications as well
     * as off-label uses. These can be distinguished by using the
     * ApprovedIndication subtype of MedicalIndication.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return mixed
     */
    public function getIndication()
    {
        return $this->indication;
    }

    /**
     * Setter of Indication
     * 
     * A factor that indicates use of this therapy for treatment and/or
     * prevention of a condition, symptom, etc. For therapies such as drugs,
     * indications can include both officially-approved indications as well
     * as off-label uses. These can be distinguished by using the
     * ApprovedIndication subtype of MedicalIndication.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param mixed $value Value of indication
     */
    public function setIndication($value)
    {
        $this->indication = $value;
    }

    /**
     * Getter of Intensity
     * 
     * Quantitative measure gauging the degree of force involved in the
     * exercise, for example, heartbeats per minute. May include the velocity
     * of the movement.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return string
     */
    public function getIntensity()
    {
        return $this->intensity;
    }

    /**
     * Setter of Intensity
     * 
     * Quantitative measure gauging the degree of force involved in the
     * exercise, for example, heartbeats per minute. May include the velocity
     * of the movement.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param string $value Value of intensity
     */
    public function setIntensity($value)
    {
        $this->intensity = $value;
    }

    /**
     * Getter of Medicine System
     * 
     * The system of medicine that includes this MedicalEntity, for example
     * 'evidence-based', 'homeopathic', 'chiropractic', etc.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return mixed
     */
    public function getMedicineSystem()
    {
        return $this->medicineSystem;
    }

    /**
     * Setter of Medicine System
     * 
     * The system of medicine that includes this MedicalEntity, for example
     * 'evidence-based', 'homeopathic', 'chiropractic', etc.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param mixed $value Value of medicineSystem
     */
    public function setMedicineSystem($value)
    {
        $this->medicineSystem = $value;
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
     * Getter of Recognizing Authority
     * 
     * If applicable, the organization that officially recognizes this entity
     * as part of its endorsed system of medicine.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return mixed
     */
    public function getRecognizingAuthority()
    {
        return $this->recognizingAuthority;
    }

    /**
     * Setter of Recognizing Authority
     * 
     * If applicable, the organization that officially recognizes this entity
     * as part of its endorsed system of medicine.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param mixed $value Value of recognizingAuthority
     */
    public function setRecognizingAuthority($value)
    {
        $this->recognizingAuthority = $value;
    }

    /**
     * Getter of Relevant Specialty
     * 
     * If applicable, a medical specialty in which this entity is relevant.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return mixed
     */
    public function getRelevantSpecialty()
    {
        return $this->relevantSpecialty;
    }

    /**
     * Setter of Relevant Specialty
     * 
     * If applicable, a medical specialty in which this entity is relevant.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param mixed $value Value of relevantSpecialty
     */
    public function setRelevantSpecialty($value)
    {
        $this->relevantSpecialty = $value;
    }

    /**
     * Getter of Repetitions
     * 
     * Number of times one should repeat the activity.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return integer|long|float|decimal
     */
    public function getRepetitions()
    {
        return $this->repetitions;
    }

    /**
     * Setter of Repetitions
     * 
     * Number of times one should repeat the activity.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param integer|long|float|decimal $value Value of repetitions
     */
    public function setRepetitions($value)
    {
        $this->repetitions = $value;
    }

    /**
     * Getter of Rest Periods
     * 
     * How often one should break from the activity.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return string
     */
    public function getRestPeriods()
    {
        return $this->restPeriods;
    }

    /**
     * Setter of Rest Periods
     * 
     * How often one should break from the activity.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param string $value Value of restPeriods
     */
    public function setRestPeriods($value)
    {
        $this->restPeriods = $value;
    }

    /**
     * Getter of Serious Adverse Outcome
     * 
     * A possible serious complication and/or serious side effect of this
     * therapy. Serious adverse outcomes include those that are
     * life-threatening; result in death, disability, or permanent damage;
     * require hospitalization or prolong existing hospitalization; cause
     * congenital anomalies or birth defects; or jeopardize the patient and
     * may require medical or surgical intervention to prevent one of the
     * outcomes in this definition.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return mixed
     */
    public function getSeriousAdverseOutcome()
    {
        return $this->seriousAdverseOutcome;
    }

    /**
     * Setter of Serious Adverse Outcome
     * 
     * A possible serious complication and/or serious side effect of this
     * therapy. Serious adverse outcomes include those that are
     * life-threatening; result in death, disability, or permanent damage;
     * require hospitalization or prolong existing hospitalization; cause
     * congenital anomalies or birth defects; or jeopardize the patient and
     * may require medical or surgical intervention to prevent one of the
     * outcomes in this definition.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param mixed $value Value of seriousAdverseOutcome
     */
    public function setSeriousAdverseOutcome($value)
    {
        $this->seriousAdverseOutcome = $value;
    }

    /**
     * Getter of Study
     * 
     * A medical study or trial related to this entity.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return mixed
     */
    public function getStudy()
    {
        return $this->study;
    }

    /**
     * Setter of Study
     * 
     * A medical study or trial related to this entity.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param mixed $value Value of study
     */
    public function setStudy($value)
    {
        $this->study = $value;
    }

    /**
     * Getter of Workload
     * 
     * Quantitative measure of the physiologic output of the exercise; also
     * referred to as energy expenditure.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return mixed
     */
    public function getWorkload()
    {
        return $this->workload;
    }

    /**
     * Setter of Workload
     * 
     * Quantitative measure of the physiologic output of the exercise; also
     * referred to as energy expenditure.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param mixed $value Value of workload
     */
    public function setWorkload($value)
    {
        $this->workload = $value;
    }
}
