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

namespace SchemaRepository\Bundle\MedicalGuidelineBundle\Model;

use SchemaRepository\Bundle\MedicalGuidelineBundle\Model\MedicalGuidelineInterface;
use SchemaRepository\Bundle\MedicalEntityBundle\Model\AbstractMedicalEntity;

/**
 * Model of Medical Guideline
 * 
 * @author SchemaGenerator <dallas62@free.fr>
 * @package SchemaRepository\Bundle\MedicalGuidelineBundle\Model
 */
abstract class AbstractMedicalGuideline extends AbstractMedicalEntity implements MedicalGuidelineInterface
{

    /**
     * Strength of evidence of the data used to formulate the guideline
     * (enumerated).
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var mixed
     */
    protected $evidenceLevel;

    /**
     * Source of the data used to formulate the guidance, e.g. RCT, consensus
     * opinion, etc.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var string
     */
    protected $evidenceOrigin;

    /**
     * Date on which this guideline's recommendation was made.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var mixed
     */
    protected $guidelineDate;

    /**
     * The medical conditions, treatments, etc. that are the subject of the
     * guideline.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var mixed
     */
    protected $guidelineSubject;

    /**
     * Getter of Evidence Level
     * 
     * Strength of evidence of the data used to formulate the guideline
     * (enumerated).
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return mixed
     */
    public function getEvidenceLevel()
    {
        return $this->evidenceLevel;
    }

    /**
     * Setter of Evidence Level
     * 
     * Strength of evidence of the data used to formulate the guideline
     * (enumerated).
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param mixed $value Value of evidenceLevel
     */
    public function setEvidenceLevel($value)
    {
        $this->evidenceLevel = $value;
    }

    /**
     * Getter of Evidence Origin
     * 
     * Source of the data used to formulate the guidance, e.g. RCT, consensus
     * opinion, etc.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return string
     */
    public function getEvidenceOrigin()
    {
        return $this->evidenceOrigin;
    }

    /**
     * Setter of Evidence Origin
     * 
     * Source of the data used to formulate the guidance, e.g. RCT, consensus
     * opinion, etc.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param string $value Value of evidenceOrigin
     */
    public function setEvidenceOrigin($value)
    {
        $this->evidenceOrigin = $value;
    }

    /**
     * Getter of Guideline Date
     * 
     * Date on which this guideline's recommendation was made.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return mixed
     */
    public function getGuidelineDate()
    {
        return $this->guidelineDate;
    }

    /**
     * Setter of Guideline Date
     * 
     * Date on which this guideline's recommendation was made.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param mixed $value Value of guidelineDate
     */
    public function setGuidelineDate($value)
    {
        $this->guidelineDate = $value;
    }

    /**
     * Getter of Guideline Subject
     * 
     * The medical conditions, treatments, etc. that are the subject of the
     * guideline.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return mixed
     */
    public function getGuidelineSubject()
    {
        return $this->guidelineSubject;
    }

    /**
     * Setter of Guideline Subject
     * 
     * The medical conditions, treatments, etc. that are the subject of the
     * guideline.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param mixed $value Value of guidelineSubject
     */
    public function setGuidelineSubject($value)
    {
        $this->guidelineSubject = $value;
    }
}
