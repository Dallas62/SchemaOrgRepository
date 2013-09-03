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

namespace SchemaRepository\Bundle\MedicalAudienceBundle\Model;

use SchemaRepository\Bundle\AudienceBundle\Model\AudienceInterface;

/**
 * Interface of Medical Audience Model
 * 
 * @author SchemaGenerator <dallas62@free.fr>
 * @package SchemaRepository\Bundle\MedicalAudienceBundle\Model
 */
interface MedicalAudienceInterface extends AudienceInterface
{

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
    public function getHealthCondition();

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
    public function getSuggestedGender();

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
    public function getSuggestedMaxAge();

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
    public function getSuggestedMinAge();
}
