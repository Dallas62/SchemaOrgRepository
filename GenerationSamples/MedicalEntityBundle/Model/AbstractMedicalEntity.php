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

namespace SchemaRepository\Bundle\MedicalEntityBundle\Model;

use SchemaRepository\Bundle\MedicalEntityBundle\Model\MedicalEntityInterface;
use SchemaRepository\Bundle\ThingBundle\Model\AbstractThing;

/**
 * Model of Medical Entity
 * 
 * @author SchemaGenerator <dallas62@free.fr>
 * @package SchemaRepository\Bundle\MedicalEntityBundle\Model
 */
abstract class AbstractMedicalEntity extends AbstractThing implements MedicalEntityInterface
{

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
     * A medical guideline related to this entity.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var mixed
     */
    protected $guideline;

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
     * A medical study or trial related to this entity.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var mixed
     */
    protected $study;

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
}
