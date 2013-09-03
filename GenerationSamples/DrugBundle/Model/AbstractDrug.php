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

namespace SchemaRepository\Bundle\DrugBundle\Model;

use SchemaRepository\Bundle\DrugBundle\Model\DrugInterface;
use SchemaRepository\Bundle\MedicalTherapyBundle\Model\AbstractMedicalTherapy;

/**
 * Model of Drug
 * 
 * @author SchemaGenerator <dallas62@free.fr>
 * @package SchemaRepository\Bundle\DrugBundle\Model
 */
abstract class AbstractDrug extends AbstractMedicalTherapy implements DrugInterface
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
     * A route by which this drug may be administered, e.g. 'oral'.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var string
     */
    protected $administrationRoute;

    /**
     * Any precaution, guidance, contraindication, etc. related to
     * consumption of alcohol while taking this drug.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var string
     */
    protected $alcoholWarning;

    /**
     * An available dosage strength for the drug.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var mixed
     */
    protected $availableStrength;

    /**
     * Any precaution, guidance, contraindication, etc. related to this
     * drug's use by breastfeeding mothers.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var string
     */
    protected $breastfeedingWarning;

    /**
     * Description of the absorption and elimination of drugs, including
     * their concentration (pharmacokinetics, pK) and biological effects
     * (pharmacodynamics, pD).
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var string
     */
    protected $clincalPharmacology;

    /**
     * Cost per unit of the drug, as reported by the source being tagged.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var mixed
     */
    protected $cost;

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
     * A dosing schedule for the drug for a given population, either
     * observed, recommended, or maximum dose based on the type used.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var mixed
     */
    protected $doseSchedule;

    /**
     * The class of drug this belongs to (e.g., statins).
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var mixed
     */
    protected $drugClass;

    /**
     * Any precaution, guidance, contraindication, etc. related to
     * consumption of specific foods while taking this drug.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var string
     */
    protected $foodWarning;

    /**
     * Another drug that is known to interact with this drug in a way that
     * impacts the effect of this drug or causes a risk to the patient. Note:
     * disease interactions are typically captured as contraindications.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var mixed
     */
    protected $interactingDrug;

    /**
     * True if the drug is available in a generic form (regardless of name).
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var bool
     */
    protected $isAvailableGenerically;

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
     * Link to the drug's label details.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var string
     */
    protected $labelDetails;

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
     * Any information related to overdose on a drug, including signs or
     * symptoms, treatments, contact information for emergency response.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var string
     */
    protected $overdosage;

    /**
     * Pregnancy category of this drug.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var mixed
     */
    protected $pregnancyCategory;

    /**
     * Any precaution, guidance, contraindication, etc. related to this
     * drug's use during pregnancy.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var string
     */
    protected $pregnancyWarning;

    /**
     * Link to prescribing information for the drug.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var string
     */
    protected $prescribingInfo;

    /**
     * Indicates whether this drug is available by prescription or
     * over-the-counter.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var mixed
     */
    protected $prescriptionStatus;

    /**
     * Any other drug related to this one, for example commonly-prescribed
     * alternatives.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var mixed
     */
    protected $relatedDrug;

    /**
     * Any FDA or other warnings about the drug (text or URL).
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var string|string
     */
    protected $warning;

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
     * Getter of Administration Route
     * 
     * A route by which this drug may be administered, e.g. 'oral'.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return string
     */
    public function getAdministrationRoute()
    {
        return $this->administrationRoute;
    }

    /**
     * Setter of Administration Route
     * 
     * A route by which this drug may be administered, e.g. 'oral'.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param string $value Value of administrationRoute
     */
    public function setAdministrationRoute($value)
    {
        $this->administrationRoute = $value;
    }

    /**
     * Getter of Alcohol Warning
     * 
     * Any precaution, guidance, contraindication, etc. related to
     * consumption of alcohol while taking this drug.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return string
     */
    public function getAlcoholWarning()
    {
        return $this->alcoholWarning;
    }

    /**
     * Setter of Alcohol Warning
     * 
     * Any precaution, guidance, contraindication, etc. related to
     * consumption of alcohol while taking this drug.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param string $value Value of alcoholWarning
     */
    public function setAlcoholWarning($value)
    {
        $this->alcoholWarning = $value;
    }

    /**
     * Getter of Available Strength
     * 
     * An available dosage strength for the drug.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return mixed
     */
    public function getAvailableStrength()
    {
        return $this->availableStrength;
    }

    /**
     * Setter of Available Strength
     * 
     * An available dosage strength for the drug.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param mixed $value Value of availableStrength
     */
    public function setAvailableStrength($value)
    {
        $this->availableStrength = $value;
    }

    /**
     * Getter of Breastfeeding Warning
     * 
     * Any precaution, guidance, contraindication, etc. related to this
     * drug's use by breastfeeding mothers.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return string
     */
    public function getBreastfeedingWarning()
    {
        return $this->breastfeedingWarning;
    }

    /**
     * Setter of Breastfeeding Warning
     * 
     * Any precaution, guidance, contraindication, etc. related to this
     * drug's use by breastfeeding mothers.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param string $value Value of breastfeedingWarning
     */
    public function setBreastfeedingWarning($value)
    {
        $this->breastfeedingWarning = $value;
    }

    /**
     * Getter of Clincal Pharmacology
     * 
     * Description of the absorption and elimination of drugs, including
     * their concentration (pharmacokinetics, pK) and biological effects
     * (pharmacodynamics, pD).
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return string
     */
    public function getClincalPharmacology()
    {
        return $this->clincalPharmacology;
    }

    /**
     * Setter of Clincal Pharmacology
     * 
     * Description of the absorption and elimination of drugs, including
     * their concentration (pharmacokinetics, pK) and biological effects
     * (pharmacodynamics, pD).
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param string $value Value of clincalPharmacology
     */
    public function setClincalPharmacology($value)
    {
        $this->clincalPharmacology = $value;
    }

    /**
     * Getter of Cost
     * 
     * Cost per unit of the drug, as reported by the source being tagged.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return mixed
     */
    public function getCost()
    {
        return $this->cost;
    }

    /**
     * Setter of Cost
     * 
     * Cost per unit of the drug, as reported by the source being tagged.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param mixed $value Value of cost
     */
    public function setCost($value)
    {
        $this->cost = $value;
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
     * Getter of Dose Schedule
     * 
     * A dosing schedule for the drug for a given population, either
     * observed, recommended, or maximum dose based on the type used.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return mixed
     */
    public function getDoseSchedule()
    {
        return $this->doseSchedule;
    }

    /**
     * Setter of Dose Schedule
     * 
     * A dosing schedule for the drug for a given population, either
     * observed, recommended, or maximum dose based on the type used.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param mixed $value Value of doseSchedule
     */
    public function setDoseSchedule($value)
    {
        $this->doseSchedule = $value;
    }

    /**
     * Getter of Drug Class
     * 
     * The class of drug this belongs to (e.g., statins).
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return mixed
     */
    public function getDrugClass()
    {
        return $this->drugClass;
    }

    /**
     * Setter of Drug Class
     * 
     * The class of drug this belongs to (e.g., statins).
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param mixed $value Value of drugClass
     */
    public function setDrugClass($value)
    {
        $this->drugClass = $value;
    }

    /**
     * Getter of Food Warning
     * 
     * Any precaution, guidance, contraindication, etc. related to
     * consumption of specific foods while taking this drug.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return string
     */
    public function getFoodWarning()
    {
        return $this->foodWarning;
    }

    /**
     * Setter of Food Warning
     * 
     * Any precaution, guidance, contraindication, etc. related to
     * consumption of specific foods while taking this drug.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param string $value Value of foodWarning
     */
    public function setFoodWarning($value)
    {
        $this->foodWarning = $value;
    }

    /**
     * Getter of Interacting Drug
     * 
     * Another drug that is known to interact with this drug in a way that
     * impacts the effect of this drug or causes a risk to the patient. Note:
     * disease interactions are typically captured as contraindications.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return mixed
     */
    public function getInteractingDrug()
    {
        return $this->interactingDrug;
    }

    /**
     * Setter of Interacting Drug
     * 
     * Another drug that is known to interact with this drug in a way that
     * impacts the effect of this drug or causes a risk to the patient. Note:
     * disease interactions are typically captured as contraindications.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param mixed $value Value of interactingDrug
     */
    public function setInteractingDrug($value)
    {
        $this->interactingDrug = $value;
    }

    /**
     * Getter of Is Available Generically
     * 
     * True if the drug is available in a generic form (regardless of name).
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return bool
     */
    public function getIsAvailableGenerically()
    {
        return $this->isAvailableGenerically;
    }

    /**
     * Setter of Is Available Generically
     * 
     * True if the drug is available in a generic form (regardless of name).
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param bool $value Value of isAvailableGenerically
     */
    public function setIsAvailableGenerically($value)
    {
        $this->isAvailableGenerically = $value;
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
     * Getter of Label Details
     * 
     * Link to the drug's label details.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return string
     */
    public function getLabelDetails()
    {
        return $this->labelDetails;
    }

    /**
     * Setter of Label Details
     * 
     * Link to the drug's label details.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param string $value Value of labelDetails
     */
    public function setLabelDetails($value)
    {
        $this->labelDetails = $value;
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
     * Getter of Overdosage
     * 
     * Any information related to overdose on a drug, including signs or
     * symptoms, treatments, contact information for emergency response.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return string
     */
    public function getOverdosage()
    {
        return $this->overdosage;
    }

    /**
     * Setter of Overdosage
     * 
     * Any information related to overdose on a drug, including signs or
     * symptoms, treatments, contact information for emergency response.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param string $value Value of overdosage
     */
    public function setOverdosage($value)
    {
        $this->overdosage = $value;
    }

    /**
     * Getter of Pregnancy Category
     * 
     * Pregnancy category of this drug.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return mixed
     */
    public function getPregnancyCategory()
    {
        return $this->pregnancyCategory;
    }

    /**
     * Setter of Pregnancy Category
     * 
     * Pregnancy category of this drug.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param mixed $value Value of pregnancyCategory
     */
    public function setPregnancyCategory($value)
    {
        $this->pregnancyCategory = $value;
    }

    /**
     * Getter of Pregnancy Warning
     * 
     * Any precaution, guidance, contraindication, etc. related to this
     * drug's use during pregnancy.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return string
     */
    public function getPregnancyWarning()
    {
        return $this->pregnancyWarning;
    }

    /**
     * Setter of Pregnancy Warning
     * 
     * Any precaution, guidance, contraindication, etc. related to this
     * drug's use during pregnancy.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param string $value Value of pregnancyWarning
     */
    public function setPregnancyWarning($value)
    {
        $this->pregnancyWarning = $value;
    }

    /**
     * Getter of Prescribing Info
     * 
     * Link to prescribing information for the drug.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return string
     */
    public function getPrescribingInfo()
    {
        return $this->prescribingInfo;
    }

    /**
     * Setter of Prescribing Info
     * 
     * Link to prescribing information for the drug.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param string $value Value of prescribingInfo
     */
    public function setPrescribingInfo($value)
    {
        $this->prescribingInfo = $value;
    }

    /**
     * Getter of Prescription Status
     * 
     * Indicates whether this drug is available by prescription or
     * over-the-counter.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return mixed
     */
    public function getPrescriptionStatus()
    {
        return $this->prescriptionStatus;
    }

    /**
     * Setter of Prescription Status
     * 
     * Indicates whether this drug is available by prescription or
     * over-the-counter.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param mixed $value Value of prescriptionStatus
     */
    public function setPrescriptionStatus($value)
    {
        $this->prescriptionStatus = $value;
    }

    /**
     * Getter of Related Drug
     * 
     * Any other drug related to this one, for example commonly-prescribed
     * alternatives.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return mixed
     */
    public function getRelatedDrug()
    {
        return $this->relatedDrug;
    }

    /**
     * Setter of Related Drug
     * 
     * Any other drug related to this one, for example commonly-prescribed
     * alternatives.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param mixed $value Value of relatedDrug
     */
    public function setRelatedDrug($value)
    {
        $this->relatedDrug = $value;
    }

    /**
     * Getter of Warning
     * 
     * Any FDA or other warnings about the drug (text or URL).
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return string|string
     */
    public function getWarning()
    {
        return $this->warning;
    }

    /**
     * Setter of Warning
     * 
     * Any FDA or other warnings about the drug (text or URL).
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param string|string $value Value of warning
     */
    public function setWarning($value)
    {
        $this->warning = $value;
    }
}
