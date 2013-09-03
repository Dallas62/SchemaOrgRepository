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

namespace SchemaRepository\Bundle\MedicalStudyBundle\Model;

use SchemaRepository\Bundle\MedicalStudyBundle\Model\MedicalStudyInterface;
use SchemaRepository\Bundle\MedicalEntityBundle\Model\AbstractMedicalEntity;

/**
 * Model of Medical Study
 * 
 * @author SchemaGenerator <dallas62@free.fr>
 * @package SchemaRepository\Bundle\MedicalStudyBundle\Model
 */
abstract class AbstractMedicalStudy extends AbstractMedicalEntity implements MedicalStudyInterface
{

    /**
     * Expected or actual outcomes of the study.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var string
     */
    protected $outcome;

    /**
     * Any characteristics of the population used in the study, e.g. 'males
     * under 65'.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var string
     */
    protected $population;

    /**
     * Sponsor of the study.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var mixed
     */
    protected $sponsor;

    /**
     * The status of the study (enumerated).
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var mixed
     */
    protected $status;

    /**
     * The location in which the study is taking/took place.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var mixed
     */
    protected $studyLocation;

    /**
     * A subject of the study, i.e. one of the medical conditions, therapies,
     * devices, drugs, etc. investigated by the study.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var mixed
     */
    protected $studySubject;

    /**
     * Getter of Outcome
     * 
     * Expected or actual outcomes of the study.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return string
     */
    public function getOutcome()
    {
        return $this->outcome;
    }

    /**
     * Setter of Outcome
     * 
     * Expected or actual outcomes of the study.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param string $value Value of outcome
     */
    public function setOutcome($value)
    {
        $this->outcome = $value;
    }

    /**
     * Getter of Population
     * 
     * Any characteristics of the population used in the study, e.g. 'males
     * under 65'.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return string
     */
    public function getPopulation()
    {
        return $this->population;
    }

    /**
     * Setter of Population
     * 
     * Any characteristics of the population used in the study, e.g. 'males
     * under 65'.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param string $value Value of population
     */
    public function setPopulation($value)
    {
        $this->population = $value;
    }

    /**
     * Getter of Sponsor
     * 
     * Sponsor of the study.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return mixed
     */
    public function getSponsor()
    {
        return $this->sponsor;
    }

    /**
     * Setter of Sponsor
     * 
     * Sponsor of the study.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param mixed $value Value of sponsor
     */
    public function setSponsor($value)
    {
        $this->sponsor = $value;
    }

    /**
     * Getter of Status
     * 
     * The status of the study (enumerated).
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return mixed
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Setter of Status
     * 
     * The status of the study (enumerated).
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param mixed $value Value of status
     */
    public function setStatus($value)
    {
        $this->status = $value;
    }

    /**
     * Getter of Study Location
     * 
     * The location in which the study is taking/took place.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return mixed
     */
    public function getStudyLocation()
    {
        return $this->studyLocation;
    }

    /**
     * Setter of Study Location
     * 
     * The location in which the study is taking/took place.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param mixed $value Value of studyLocation
     */
    public function setStudyLocation($value)
    {
        $this->studyLocation = $value;
    }

    /**
     * Getter of Study Subject
     * 
     * A subject of the study, i.e. one of the medical conditions, therapies,
     * devices, drugs, etc. investigated by the study.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return mixed
     */
    public function getStudySubject()
    {
        return $this->studySubject;
    }

    /**
     * Setter of Study Subject
     * 
     * A subject of the study, i.e. one of the medical conditions, therapies,
     * devices, drugs, etc. investigated by the study.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param mixed $value Value of studySubject
     */
    public function setStudySubject($value)
    {
        $this->studySubject = $value;
    }
}
