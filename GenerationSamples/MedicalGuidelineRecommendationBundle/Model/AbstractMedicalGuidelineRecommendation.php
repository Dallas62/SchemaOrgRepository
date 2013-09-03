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

namespace SchemaRepository\Bundle\MedicalGuidelineRecommendationBundle\Model;

use SchemaRepository\Bundle\MedicalGuidelineRecommendationBundle\Model\MedicalGuidelineRecommendationInterface;
use SchemaRepository\Bundle\MedicalGuidelineBundle\Model\AbstractMedicalGuideline;

/**
 * Model of Medical Guideline Recommendation
 * 
 * @author SchemaGenerator <dallas62@free.fr>
 * @package SchemaRepository\Bundle\MedicalGuidelineRecommendationBundle\Model
 */
abstract class AbstractMedicalGuidelineRecommendation extends AbstractMedicalGuideline implements MedicalGuidelineRecommendationInterface
{

    /**
     * Strength of the guideline's recommendation (e.g. 'class I').
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var string
     */
    protected $recommendationStrength;

    /**
     * Getter of Recommendation Strength
     * 
     * Strength of the guideline's recommendation (e.g. 'class I').
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return string
     */
    public function getRecommendationStrength()
    {
        return $this->recommendationStrength;
    }

    /**
     * Setter of Recommendation Strength
     * 
     * Strength of the guideline's recommendation (e.g. 'class I').
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param string $value Value of recommendationStrength
     */
    public function setRecommendationStrength($value)
    {
        $this->recommendationStrength = $value;
    }
}
