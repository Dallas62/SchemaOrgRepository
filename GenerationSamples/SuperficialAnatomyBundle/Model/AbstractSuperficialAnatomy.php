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

namespace SchemaRepository\Bundle\SuperficialAnatomyBundle\Model;

use SchemaRepository\Bundle\SuperficialAnatomyBundle\Model\SuperficialAnatomyInterface;
use SchemaRepository\Bundle\MedicalEntityBundle\Model\AbstractMedicalEntity;

/**
 * Model of Superficial Anatomy
 * 
 * @author SchemaGenerator <dallas62@free.fr>
 * @package SchemaRepository\Bundle\SuperficialAnatomyBundle\Model
 */
abstract class AbstractSuperficialAnatomy extends AbstractMedicalEntity implements SuperficialAnatomyInterface
{

    /**
     * If applicable, a description of the pathophysiology associated with
     * the anatomical system, including potential abnormal changes in the
     * mechanical, physical, and biochemical functions of the system.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var string
     */
    protected $associatedPathophysiology;

    /**
     * Anatomical systems or structures that relate to the superficial
     * anatomy.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var mixed
     */
    protected $relatedAnatomy;

    /**
     * A medical condition associated with this anatomy.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var mixed
     */
    protected $relatedCondition;

    /**
     * A medical therapy related to this anatomy.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var mixed
     */
    protected $relatedTherapy;

    /**
     * The significance associated with the superficial anatomy; as an
     * example, how characteristics of the superficial anatomy can suggest
     * underlying medical conditions or courses of treatment.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var string
     */
    protected $significance;

    /**
     * Getter of Associated Pathophysiology
     * 
     * If applicable, a description of the pathophysiology associated with
     * the anatomical system, including potential abnormal changes in the
     * mechanical, physical, and biochemical functions of the system.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return string
     */
    public function getAssociatedPathophysiology()
    {
        return $this->associatedPathophysiology;
    }

    /**
     * Setter of Associated Pathophysiology
     * 
     * If applicable, a description of the pathophysiology associated with
     * the anatomical system, including potential abnormal changes in the
     * mechanical, physical, and biochemical functions of the system.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param string $value Value of associatedPathophysiology
     */
    public function setAssociatedPathophysiology($value)
    {
        $this->associatedPathophysiology = $value;
    }

    /**
     * Getter of Related Anatomy
     * 
     * Anatomical systems or structures that relate to the superficial
     * anatomy.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return mixed
     */
    public function getRelatedAnatomy()
    {
        return $this->relatedAnatomy;
    }

    /**
     * Setter of Related Anatomy
     * 
     * Anatomical systems or structures that relate to the superficial
     * anatomy.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param mixed $value Value of relatedAnatomy
     */
    public function setRelatedAnatomy($value)
    {
        $this->relatedAnatomy = $value;
    }

    /**
     * Getter of Related Condition
     * 
     * A medical condition associated with this anatomy.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return mixed
     */
    public function getRelatedCondition()
    {
        return $this->relatedCondition;
    }

    /**
     * Setter of Related Condition
     * 
     * A medical condition associated with this anatomy.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param mixed $value Value of relatedCondition
     */
    public function setRelatedCondition($value)
    {
        $this->relatedCondition = $value;
    }

    /**
     * Getter of Related Therapy
     * 
     * A medical therapy related to this anatomy.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return mixed
     */
    public function getRelatedTherapy()
    {
        return $this->relatedTherapy;
    }

    /**
     * Setter of Related Therapy
     * 
     * A medical therapy related to this anatomy.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param mixed $value Value of relatedTherapy
     */
    public function setRelatedTherapy($value)
    {
        $this->relatedTherapy = $value;
    }

    /**
     * Getter of Significance
     * 
     * The significance associated with the superficial anatomy; as an
     * example, how characteristics of the superficial anatomy can suggest
     * underlying medical conditions or courses of treatment.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return string
     */
    public function getSignificance()
    {
        return $this->significance;
    }

    /**
     * Setter of Significance
     * 
     * The significance associated with the superficial anatomy; as an
     * example, how characteristics of the superficial anatomy can suggest
     * underlying medical conditions or courses of treatment.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param string $value Value of significance
     */
    public function setSignificance($value)
    {
        $this->significance = $value;
    }
}
