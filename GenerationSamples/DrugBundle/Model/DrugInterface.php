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

use SchemaRepository\Bundle\MedicalTherapyBundle\Model\MedicalTherapyInterface;

/**
 * Interface of Drug Model
 * 
 * @author SchemaGenerator <dallas62@free.fr>
 * @package SchemaRepository\Bundle\DrugBundle\Model
 */
interface DrugInterface extends MedicalTherapyInterface
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
    public function getAdministrationRoute();

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
    public function getAlcoholWarning();

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
    public function getAvailableStrength();

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
    public function getBreastfeedingWarning();

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
    public function getClincalPharmacology();

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
    public function getCost();

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
    public function getDoseSchedule();

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
    public function getDrugClass();

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
    public function getFoodWarning();

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
    public function getInteractingDrug();

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
    public function getIsAvailableGenerically();

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
    public function getLabelDetails();

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
    public function getOverdosage();

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
    public function getPregnancyCategory();

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
    public function getPregnancyWarning();

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
    public function getPrescribingInfo();

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
    public function getPrescriptionStatus();

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
    public function getRelatedDrug();

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
    public function getWarning();
}
