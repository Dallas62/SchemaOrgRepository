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

use SchemaRepository\Bundle\DietarySupplementBundle\Model\DietarySupplementInterface;
use SchemaRepository\Bundle\MedicalTherapyBundle\Model\AbstractMedicalTherapy;

/**
 * Model of Dietary Supplement
 * 
 * @author SchemaGenerator <dallas62@free.fr>
 * @package SchemaRepository\Bundle\DietarySupplementBundle\Model
 */
abstract class AbstractDietarySupplement extends AbstractMedicalTherapy implements DietarySupplementInterface
{

    /**
     * An active ingredient, typically chemical compounds and/or biologic
     * substances.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var string
     */
    protected $activeIngredient;

    /**
     * Descriptive information establishing a historical perspective on the
     * supplement. May include the rationale for the name, the population
     * where the supplement first came to prominence, etc.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var string
     */
    protected $background;

    /**
     * A dosage form in which this drug/supplement is available, e.g.
     * 'tablet', 'suspension', 'injection'.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var string
     */
    protected $dosageForm;

    /**
     * True if this item's name is a proprietary/brand name (vs. generic
     * name).
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var bool
     */
    protected $isProprietary;

    /**
     * The drug or supplement's legal status, including any controlled
     * substance schedules that apply.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var mixed
     */
    protected $legalStatus;

    /**
     * The manufacturer of the product.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var mixed
     */
    protected $manufacturer;

    /**
     * Recommended intake of this supplement for a given population as
     * defined by a specific recommending authority.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var mixed
     */
    protected $maximumIntake;

    /**
     * The specific biochemical interaction through which this drug or
     * supplement produces its pharmacological effect.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var string
     */
    protected $mechanismOfAction;

    /**
     * The generic name of this drug or supplement.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var string
     */
    protected $nonProprietaryName;

    /**
     * Recommended intake of this supplement for a given population as
     * defined by a specific recommending authority.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var mixed
     */
    protected $recommendedIntake;

    /**
     * Any potential safety concern associated with the supplement. May
     * include interactions with other drugs and foods, pregnancy,
     * breastfeeding, known adverse reactions, and documented efficacy of the
     * supplement.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var string
     */
    protected $safetyConsideration;

    /**
     * Characteristics of the population for which this is intended, or which
     * typically uses it, e.g. 'adults'.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var string
     */
    protected $targetPopulation;

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
    public function getActiveIngredient()
    {
        return $this->activeIngredient;
    }

    /**
     * Setter of Active Ingredient
     * 
     * An active ingredient, typically chemical compounds and/or biologic
     * substances.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param string $value Value of activeIngredient
     */
    public function setActiveIngredient($value)
    {
        $this->activeIngredient = $value;
    }

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
    public function getBackground()
    {
        return $this->background;
    }

    /**
     * Setter of Background
     * 
     * Descriptive information establishing a historical perspective on the
     * supplement. May include the rationale for the name, the population
     * where the supplement first came to prominence, etc.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param string $value Value of background
     */
    public function setBackground($value)
    {
        $this->background = $value;
    }

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
    public function getDosageForm()
    {
        return $this->dosageForm;
    }

    /**
     * Setter of Dosage Form
     * 
     * A dosage form in which this drug/supplement is available, e.g.
     * 'tablet', 'suspension', 'injection'.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param string $value Value of dosageForm
     */
    public function setDosageForm($value)
    {
        $this->dosageForm = $value;
    }

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
    public function getIsProprietary()
    {
        return $this->isProprietary;
    }

    /**
     * Setter of Is Proprietary
     * 
     * True if this item's name is a proprietary/brand name (vs. generic
     * name).
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param bool $value Value of isProprietary
     */
    public function setIsProprietary($value)
    {
        $this->isProprietary = $value;
    }

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
    public function getLegalStatus()
    {
        return $this->legalStatus;
    }

    /**
     * Setter of Legal Status
     * 
     * The drug or supplement's legal status, including any controlled
     * substance schedules that apply.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param mixed $value Value of legalStatus
     */
    public function setLegalStatus($value)
    {
        $this->legalStatus = $value;
    }

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
    public function getManufacturer()
    {
        return $this->manufacturer;
    }

    /**
     * Setter of Manufacturer
     * 
     * The manufacturer of the product.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param mixed $value Value of manufacturer
     */
    public function setManufacturer($value)
    {
        $this->manufacturer = $value;
    }

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
    public function getMaximumIntake()
    {
        return $this->maximumIntake;
    }

    /**
     * Setter of Maximum Intake
     * 
     * Recommended intake of this supplement for a given population as
     * defined by a specific recommending authority.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param mixed $value Value of maximumIntake
     */
    public function setMaximumIntake($value)
    {
        $this->maximumIntake = $value;
    }

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
    public function getMechanismOfAction()
    {
        return $this->mechanismOfAction;
    }

    /**
     * Setter of Mechanism of Action
     * 
     * The specific biochemical interaction through which this drug or
     * supplement produces its pharmacological effect.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param string $value Value of mechanismOfAction
     */
    public function setMechanismOfAction($value)
    {
        $this->mechanismOfAction = $value;
    }

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
    public function getNonProprietaryName()
    {
        return $this->nonProprietaryName;
    }

    /**
     * Setter of Non Proprietary Name
     * 
     * The generic name of this drug or supplement.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param string $value Value of nonProprietaryName
     */
    public function setNonProprietaryName($value)
    {
        $this->nonProprietaryName = $value;
    }

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
    public function getRecommendedIntake()
    {
        return $this->recommendedIntake;
    }

    /**
     * Setter of Recommended Intake
     * 
     * Recommended intake of this supplement for a given population as
     * defined by a specific recommending authority.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param mixed $value Value of recommendedIntake
     */
    public function setRecommendedIntake($value)
    {
        $this->recommendedIntake = $value;
    }

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
    public function getSafetyConsideration()
    {
        return $this->safetyConsideration;
    }

    /**
     * Setter of Safety Consideration
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
     * @param string $value Value of safetyConsideration
     */
    public function setSafetyConsideration($value)
    {
        $this->safetyConsideration = $value;
    }

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
    public function getTargetPopulation()
    {
        return $this->targetPopulation;
    }

    /**
     * Setter of Target Population
     * 
     * Characteristics of the population for which this is intended, or which
     * typically uses it, e.g. 'adults'.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param string $value Value of targetPopulation
     */
    public function setTargetPopulation($value)
    {
        $this->targetPopulation = $value;
    }
}
