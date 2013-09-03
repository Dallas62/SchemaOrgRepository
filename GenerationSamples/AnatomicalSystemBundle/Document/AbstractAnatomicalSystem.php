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

namespace SchemaRepository\Bundle\AnatomicalSystemBundle\Document;

use SchemaRepository\Bundle\AnatomicalSystemBundle\Model\AbstractAnatomicalSystem;
use Doctrine\ODM\MongoDB\Mapping\Annotations as ODM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Anatomical System Document
 *
 * @ODM\MappedSuperclass()
 */
abstract class AbstractAnatomicalSystem extends AbstractAnatomicalSystem
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
     * @ODM\String
     * @Assert\Type(type="string")
     */
     protected $alternateName;

    /**
     * {@inheritdoc}
     * 
     * @ODM\Field
     */
     protected $code;

    /**
     * {@inheritdoc}
     * 
     * @ODM\Field
     */
     protected $guideline;

    /**
     * {@inheritdoc}
     * 
     * @ODM\Field
     */
     protected $medicineSystem;

    /**
     * {@inheritdoc}
     * 
     * @ODM\Field
     */
     protected $recognizingAuthority;

    /**
     * {@inheritdoc}
     * 
     * @ODM\Field
     */
     protected $relevantSpecialty;

    /**
     * {@inheritdoc}
     * 
     * @ODM\Field
     */
     protected $study;

    /**
     * {@inheritdoc}
     * 
     * @ODM\String
     * @Assert\Type(type="string")
     */
     protected $associatedPathophysiology;

    /**
     * {@inheritdoc}
     * 
     * @ODM\Field
     */
     protected $comprisedOf;

    /**
     * {@inheritdoc}
     * 
     * @ODM\Field
     */
     protected $relatedCondition;

    /**
     * {@inheritdoc}
     * 
     * @ODM\Field
     */
     protected $relatedStructure;

    /**
     * {@inheritdoc}
     * 
     * @ODM\Field
     */
     protected $relatedTherapy;
}
