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

namespace SchemaRepository\Bundle\DietarySupplementBundle\Entity;

use SchemaRepository\Bundle\DietarySupplementBundle\Model\AbstractDietarySupplement;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Dietary Supplement Entity
 *
 * @ODM\MappedSuperclass()
 */
abstract class AbstractDietarySupplement extends AbstractDietarySupplement
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
     * @ORM\Column(name="background", type="string", nullable=true)
     * @Assert\Type(type="string")
     */
     protected $background;

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
     * @ORM\Column(name="is_proprietary", type="boolean", nullable=true)
     */
     protected $isProprietary;

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
     * @ORM\Column(name="maximum_intake", type="string", nullable=true)
     */
     protected $maximumIntake;

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
     * @ORM\Column(name="recommended_intake", type="string", nullable=true)
     */
     protected $recommendedIntake;

    /**
     * {@inheritdoc}
     * 
     * @ORM\Column(name="safety_consideration", type="string", nullable=true)
     * @Assert\Type(type="string")
     */
     protected $safetyConsideration;

    /**
     * {@inheritdoc}
     * 
     * @ORM\Column(name="target_population", type="string", nullable=true)
     * @Assert\Type(type="string")
     */
     protected $targetPopulation;
}
