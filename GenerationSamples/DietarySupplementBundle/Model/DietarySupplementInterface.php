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

namespace SchemaRepository\Bundle\DietarySupplementBundle\Model;

use SchemaRepository\Bundle\MedicalTherapyBundle\Model\MedicalTherapyInterface;

/**
 * Interface of Dietary Supplement Model
 * 
 * @author SchemaGenerator <dallas62@free.fr>
 * @package SchemaRepository\Bundle\DietarySupplementBundle\Model
 */
interface DietarySupplementInterface extends MedicalTherapyInterface
{

    /**
     * Getter of Active Ingredient
     * 
     * An active ingredient, typically chemical compounds and/or biologic
     * substances.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return string
     */
    public function getActiveIngredient();

    /**
     * Getter of Background
     * 
     * Descriptive information establishing a historical perspective on the
     * supplement. May include the rationale for the name, the population
     * where the supplement first came to prominence, etc.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return string
     */
    public function getBackground();

    /**
     * Getter of Dosage Form
     * 
     * A dosage form in which this drug/supplement is available, e.g.
     * 'tablet', 'suspension', 'injection'.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return string
     */
    public function getDosageForm();

    /**
     * Getter of Is Proprietary
     * 
     * True if this item's name is a proprietary/brand name (vs. generic
     * name).
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return bool
     */
    public function getIsProprietary();

    /**
     * Getter of Legal Status
     * 
     * The drug or supplement's legal status, including any controlled
     * substance schedules that apply.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return mixed
     */
    public function getLegalStatus();

    /**
     * Getter of Manufacturer
     * 
     * The manufacturer of the product.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return mixed
     */
    public function getManufacturer();

    /**
     * Getter of Maximum Intake
     * 
     * Recommended intake of this supplement for a given population as
     * defined by a specific recommending authority.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return mixed
     */
    public function getMaximumIntake();

    /**
     * Getter of Mechanism of Action
     * 
     * The specific biochemical interaction through which this drug or
     * supplement produces its pharmacological effect.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return string
     */
    public function getMechanismOfAction();

    /**
     * Getter of Non Proprietary Name
     * 
     * The generic name of this drug or supplement.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return string
     */
    public function getNonProprietaryName();

    /**
     * Getter of Recommended Intake
     * 
     * Recommended intake of this supplement for a given population as
     * defined by a specific recommending authority.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return mixed
     */
    public function getRecommendedIntake();

    /**
     * Getter of Safety Consideration
     * 
     * Any potential safety concern associated with the supplement. May
     * include interactions with other drugs and foods, pregnancy,
     * breastfeeding, known adverse reactions, and documented efficacy of the
     * supplement.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return string
     */
    public function getSafetyConsideration();

    /**
     * Getter of Target Population
     * 
     * Characteristics of the population for which this is intended, or which
     * typically uses it, e.g. 'adults'.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return string
     */
    public function getTargetPopulation();
}
