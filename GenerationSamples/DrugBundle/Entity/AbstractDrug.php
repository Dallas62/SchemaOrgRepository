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

namespace SchemaRepository\Bundle\DrugBundle\Entity;

use SchemaRepository\Bundle\DrugBundle\Model\AbstractDrug;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Drug Entity
 *
 * @ODM\MappedSuperclass()
 */
abstract class AbstractDrug extends AbstractDrug
{

    /**
     * {@inheritdoc}
     * 
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
     protected $id;

    /**
     * {@inheritdoc}
     * 
     * @ORM\Column(name="additional_type", type="string", nullable=true)
     * @Assert\Type(type="string")
     */
     protected $additionalType;

    /**
     * {@inheritdoc}
     * 
     * @ORM\Column(name="description", type="string", nullable=true)
     * @Assert\Type(type="string")
     */
     protected $description;

    /**
     * {@inheritdoc}
     * 
     * @ORM\Column(name="image", type="string", nullable=true)
     * @Assert\Type(type="string")
     */
     protected $image;

    /**
     * {@inheritdoc}
     * 
     * @ORM\Column(name="name", type="string", nullable=true)
     * @Assert\Type(type="string")
     */
     protected $name;

    /**
     * {@inheritdoc}
     * 
     * @ORM\Column(name="same_as", type="string", nullable=true)
     * @Assert\Type(type="string")
     */
     protected $sameAs;

    /**
     * {@inheritdoc}
     * 
     * @ORM\Column(name="url", type="string", nullable=true)
     * @Assert\Type(type="string")
     */
     protected $url;

    /**
     * {@inheritdoc}
     * 
     * @ORM\Column(name="alternate_name", type="string", nullable=true)
     * @Assert\Type(type="string")
     */
     protected $alternateName;

    /**
     * {@inheritdoc}
     * 
     * @ORM\Column(name="code", type="string", nullable=true)
     */
     protected $code;

    /**
     * {@inheritdoc}
     * 
     * @ORM\Column(name="guideline", type="string", nullable=true)
     */
     protected $guideline;

    /**
     * {@inheritdoc}
     * 
     * @ORM\Column(name="medicine_system", type="string", nullable=true)
     */
     protected $medicineSystem;

    /**
     * {@inheritdoc}
     * 
     * @ORM\Column(name="recognizing_authority", type="string", nullable=true)
     */
     protected $recognizingAuthority;

    /**
     * {@inheritdoc}
     * 
     * @ORM\Column(name="relevant_specialty", type="string", nullable=true)
     */
     protected $relevantSpecialty;

    /**
     * {@inheritdoc}
     * 
     * @ORM\Column(name="study", type="string", nullable=true)
     */
     protected $study;

    /**
     * {@inheritdoc}
     * 
     * @ORM\Column(name="adverse_outcome", type="string", nullable=true)
     */
     protected $adverseOutcome;

    /**
     * {@inheritdoc}
     * 
     * @ORM\Column(name="contraindication", type="string", nullable=true)
     */
     protected $contraindication;

    /**
     * {@inheritdoc}
     * 
     * @ORM\Column(name="duplicate_therapy", type="string", nullable=true)
     */
     protected $duplicateTherapy;

    /**
     * {@inheritdoc}
     * 
     * @ORM\Column(name="indication", type="string", nullable=true)
     */
     protected $indication;

    /**
     * {@inheritdoc}
     * 
     * @ORM\Column(name="serious_adverse_outcome", type="string", nullable=true)
     */
     protected $seriousAdverseOutcome;

    /**
     * {@inheritdoc}
     * 
     * @ORM\Column(name="active_ingredient", type="string", nullable=true)
     * @Assert\Type(type="string")
     */
     protected $activeIngredient;

    /**
     * {@inheritdoc}
     * 
     * @ORM\Column(name="administration_route", type="string", nullable=true)
     * @Assert\Type(type="string")
     */
     protected $administrationRoute;

    /**
     * {@inheritdoc}
     * 
     * @ORM\Column(name="alcohol_warning", type="string", nullable=true)
     * @Assert\Type(type="string")
     */
     protected $alcoholWarning;

    /**
     * {@inheritdoc}
     * 
     * @ORM\Column(name="available_strength", type="string", nullable=true)
     */
     protected $availableStrength;

    /**
     * {@inheritdoc}
     * 
     * @ORM\Column(name="breastfeeding_warning", type="string", nullable=true)
     * @Assert\Type(type="string")
     */
     protected $breastfeedingWarning;

    /**
     * {@inheritdoc}
     * 
     * @ORM\Column(name="clincal_pharmacology", type="string", nullable=true)
     * @Assert\Type(type="string")
     */
     protected $clincalPharmacology;

    /**
     * {@inheritdoc}
     * 
     * @ORM\Column(name="cost", type="string", nullable=true)
     */
     protected $cost;

    /**
     * {@inheritdoc}
     * 
     * @ORM\Column(name="dosage_form", type="string", nullable=true)
     * @Assert\Type(type="string")
     */
     protected $dosageForm;

    /**
     * {@inheritdoc}
     * 
     * @ORM\Column(name="dose_schedule", type="string", nullable=true)
     */
     protected $doseSchedule;

    /**
     * {@inheritdoc}
     * 
     * @ORM\Column(name="drug_class", type="string", nullable=true)
     */
     protected $drugClass;

    /**
     * {@inheritdoc}
     * 
     * @ORM\Column(name="food_warning", type="string", nullable=true)
     * @Assert\Type(type="string")
     */
     protected $foodWarning;

    /**
     * {@inheritdoc}
     * 
     * @ORM\Column(name="interacting_drug", type="string", nullable=true)
     */
     protected $interactingDrug;

    /**
     * {@inheritdoc}
     * 
     * @ORM\Column(name="is_available_generically", type="boolean", nullable=true)
     */
     protected $isAvailableGenerically;

    /**
     * {@inheritdoc}
     * 
     * @ORM\Column(name="is_proprietary", type="boolean", nullable=true)
     */
     protected $isProprietary;

    /**
     * {@inheritdoc}
     * 
     * @ORM\Column(name="label_details", type="string", nullable=true)
     * @Assert\Type(type="string")
     */
     protected $labelDetails;

    /**
     * {@inheritdoc}
     * 
     * @ORM\Column(name="legal_status", type="string", nullable=true)
     */
     protected $legalStatus;

    /**
     * {@inheritdoc}
     * 
     * @ORM\Column(name="manufacturer", type="string", nullable=true)
     */
     protected $manufacturer;

    /**
     * {@inheritdoc}
     * 
     * @ORM\Column(name="mechanism_of_action", type="string", nullable=true)
     * @Assert\Type(type="string")
     */
     protected $mechanismOfAction;

    /**
     * {@inheritdoc}
     * 
     * @ORM\Column(name="non_proprietary_name", type="string", nullable=true)
     * @Assert\Type(type="string")
     */
     protected $nonProprietaryName;

    /**
     * {@inheritdoc}
     * 
     * @ORM\Column(name="overdosage", type="string", nullable=true)
     * @Assert\Type(type="string")
     */
     protected $overdosage;

    /**
     * {@inheritdoc}
     * 
     * @ORM\Column(name="pregnancy_category", type="string", nullable=true)
     */
     protected $pregnancyCategory;

    /**
     * {@inheritdoc}
     * 
     * @ORM\Column(name="pregnancy_warning", type="string", nullable=true)
     * @Assert\Type(type="string")
     */
     protected $pregnancyWarning;

    /**
     * {@inheritdoc}
     * 
     * @ORM\Column(name="prescribing_info", type="string", nullable=true)
     * @Assert\Type(type="string")
     */
     protected $prescribingInfo;

    /**
     * {@inheritdoc}
     * 
     * @ORM\Column(name="prescription_status", type="string", nullable=true)
     */
     protected $prescriptionStatus;

    /**
     * {@inheritdoc}
     * 
     * @ORM\Column(name="related_drug", type="string", nullable=true)
     */
     protected $relatedDrug;

    /**
     * {@inheritdoc}
     * 
     * @ORM\Column(name="warning", type="string", nullable=true)
     */
     protected $warning;
}
