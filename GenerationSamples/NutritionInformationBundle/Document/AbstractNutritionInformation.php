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

namespace SchemaRepository\Bundle\NutritionInformationBundle\Document;

use SchemaRepository\Bundle\NutritionInformationBundle\Model\AbstractNutritionInformation;
use Doctrine\ODM\MongoDB\Mapping\Annotations as ODM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Nutrition Information Document
 *
 * @ODM\MappedSuperclass()
 */
abstract class AbstractNutritionInformation extends AbstractNutritionInformation
{

    /**
     * {@inheritdoc}
     * 
     * @ODM\Id
     */
     protected $id;

    /**
     * {@inheritdoc}
     * 
     * @ODM\String
     * @Assert\Type(type="string")
     */
     protected $additionalType;

    /**
     * {@inheritdoc}
     * 
     * @ODM\String
     * @Assert\Type(type="string")
     */
     protected $description;

    /**
     * {@inheritdoc}
     * 
     * @ODM\String
     * @Assert\Type(type="string")
     */
     protected $image;

    /**
     * {@inheritdoc}
     * 
     * @ODM\String
     * @Assert\Type(type="string")
     */
     protected $name;

    /**
     * {@inheritdoc}
     * 
     * @ODM\String
     * @Assert\Type(type="string")
     */
     protected $sameAs;

    /**
     * {@inheritdoc}
     * 
     * @ODM\String
     * @Assert\Type(type="string")
     */
     protected $url;

    /**
     * {@inheritdoc}
     * 
     * @ODM\Field
     */
     protected $calories;

    /**
     * {@inheritdoc}
     * 
     * @ODM\Field
     */
     protected $carbohydrateContent;

    /**
     * {@inheritdoc}
     * 
     * @ODM\Field
     */
     protected $cholesterolContent;

    /**
     * {@inheritdoc}
     * 
     * @ODM\Field
     */
     protected $fatContent;

    /**
     * {@inheritdoc}
     * 
     * @ODM\Field
     */
     protected $fiberContent;

    /**
     * {@inheritdoc}
     * 
     * @ODM\Field
     */
     protected $proteinContent;

    /**
     * {@inheritdoc}
     * 
     * @ODM\Field
     */
     protected $saturatedFatContent;

    /**
     * {@inheritdoc}
     * 
     * @ODM\String
     * @Assert\Type(type="string")
     */
     protected $servingSize;

    /**
     * {@inheritdoc}
     * 
     * @ODM\Field
     */
     protected $sodiumContent;

    /**
     * {@inheritdoc}
     * 
     * @ODM\Field
     */
     protected $sugarContent;

    /**
     * {@inheritdoc}
     * 
     * @ODM\Field
     */
     protected $transFatContent;

    /**
     * {@inheritdoc}
     * 
     * @ODM\Field
     */
     protected $unsaturatedFatContent;
}
