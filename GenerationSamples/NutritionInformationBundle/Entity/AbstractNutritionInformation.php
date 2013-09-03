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

namespace SchemaRepository\Bundle\NutritionInformationBundle\Entity;

use SchemaRepository\Bundle\NutritionInformationBundle\Model\AbstractNutritionInformation;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Nutrition Information Entity
 *
 * @ODM\MappedSuperclass()
 */
abstract class AbstractNutritionInformation extends AbstractNutritionInformation
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
     * @ORM\Column(name="calories", type="string", nullable=true)
     */
     protected $calories;

    /**
     * {@inheritdoc}
     * 
     * @ORM\Column(name="carbohydrate_content", type="string", nullable=true)
     */
     protected $carbohydrateContent;

    /**
     * {@inheritdoc}
     * 
     * @ORM\Column(name="cholesterol_content", type="string", nullable=true)
     */
     protected $cholesterolContent;

    /**
     * {@inheritdoc}
     * 
     * @ORM\Column(name="fat_content", type="string", nullable=true)
     */
     protected $fatContent;

    /**
     * {@inheritdoc}
     * 
     * @ORM\Column(name="fiber_content", type="string", nullable=true)
     */
     protected $fiberContent;

    /**
     * {@inheritdoc}
     * 
     * @ORM\Column(name="protein_content", type="string", nullable=true)
     */
     protected $proteinContent;

    /**
     * {@inheritdoc}
     * 
     * @ORM\Column(name="saturated_fat_content", type="string", nullable=true)
     */
     protected $saturatedFatContent;

    /**
     * {@inheritdoc}
     * 
     * @ORM\Column(name="serving_size", type="string", nullable=true)
     * @Assert\Type(type="string")
     */
     protected $servingSize;

    /**
     * {@inheritdoc}
     * 
     * @ORM\Column(name="sodium_content", type="string", nullable=true)
     */
     protected $sodiumContent;

    /**
     * {@inheritdoc}
     * 
     * @ORM\Column(name="sugar_content", type="string", nullable=true)
     */
     protected $sugarContent;

    /**
     * {@inheritdoc}
     * 
     * @ORM\Column(name="trans_fat_content", type="string", nullable=true)
     */
     protected $transFatContent;

    /**
     * {@inheritdoc}
     * 
     * @ORM\Column(name="unsaturated_fat_content", type="string", nullable=true)
     */
     protected $unsaturatedFatContent;
}
