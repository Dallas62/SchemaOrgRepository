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

use SchemaRepository\Bundle\CreativeWorkBundle\Model\CreativeWorkInterface;

/**
 * Interface of Exercise Plan Model
 * 
 * @author SchemaGenerator <dallas62@free.fr>
 * @package SchemaRepository\Bundle\ExercisePlanBundle\Model
 */
interface ExercisePlanInterface extends CreativeWorkInterface
{

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
    public function getActivityDuration();

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
    public function getActivityFrequency();

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
    public function getAdditionalVariable();

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
    public function getAdverseOutcome();

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
    public function getAlternateName();

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
    public function getCategory();

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
    public function getCode();

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
    public function getContraindication();

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
    public function getDuplicateTherapy();

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
    public function getExerciseType();

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
    public function getGuideline();

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
    public function getIndication();

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
    public function getIntensity();

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
    public function getMedicineSystem();

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
    public function getRecognizingAuthority();

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
    public function getRelevantSpecialty();

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
    public function getRepetitions();

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
    public function getRestPeriods();

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
    public function getSeriousAdverseOutcome();

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
    public function getStudy();

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
    public function getWorkload();
}
