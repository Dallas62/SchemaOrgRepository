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

namespace SchemaRepository\Bundle\MedicalDeviceBundle\Entity;

use SchemaRepository\Bundle\MedicalDeviceBundle\Model\AbstractMedicalDevice;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Medical Device Entity
 *
 * @ODM\MappedSuperclass()
 */
abstract class AbstractMedicalDevice extends AbstractMedicalDevice
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
     * @ORM\Column(name="indication", type="string", nullable=true)
     */
     protected $indication;

    /**
     * {@inheritdoc}
     * 
     * @ORM\Column(name="post_op", type="string", nullable=true)
     * @Assert\Type(type="string")
     */
     protected $postOp;

    /**
     * {@inheritdoc}
     * 
     * @ORM\Column(name="pre_op", type="string", nullable=true)
     * @Assert\Type(type="string")
     */
     protected $preOp;

    /**
     * {@inheritdoc}
     * 
     * @ORM\Column(name="procedure", type="string", nullable=true)
     * @Assert\Type(type="string")
     */
     protected $procedure;

    /**
     * {@inheritdoc}
     * 
     * @ORM\Column(name="purpose", type="string", nullable=true)
     */
     protected $purpose;

    /**
     * {@inheritdoc}
     * 
     * @ORM\Column(name="serious_adverse_outcome", type="string", nullable=true)
     */
     protected $seriousAdverseOutcome;
}
