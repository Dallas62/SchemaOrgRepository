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

namespace SchemaRepository\Bundle\ProductModelBundle\Document;

use SchemaRepository\Bundle\ProductModelBundle\Model\AbstractProductModel;
use Doctrine\ODM\MongoDB\Mapping\Annotations as ODM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Product Model Document
 *
 * @ODM\MappedSuperclass()
 */
abstract class AbstractProductModel extends AbstractProductModel
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
     protected $aggregateRating;

    /**
     * {@inheritdoc}
     * 
     * @ODM\Field
     */
     protected $audience;

    /**
     * {@inheritdoc}
     * 
     * @ODM\Field
     */
     protected $brand;

    /**
     * {@inheritdoc}
     * 
     * @ODM\String
     * @Assert\Type(type="string")
     */
     protected $color;

    /**
     * {@inheritdoc}
     * 
     * @ODM\Field
     */
     protected $depth;

    /**
     * {@inheritdoc}
     * 
     * @ODM\String
     * @Assert\Type(type="string")
     */
     protected $gtin13;

    /**
     * {@inheritdoc}
     * 
     * @ODM\String
     * @Assert\Type(type="string")
     */
     protected $gtin14;

    /**
     * {@inheritdoc}
     * 
     * @ODM\String
     * @Assert\Type(type="string")
     */
     protected $gtin8;

    /**
     * {@inheritdoc}
     * 
     * @ODM\Field
     */
     protected $height;

    /**
     * {@inheritdoc}
     * 
     * @ODM\Field
     */
     protected $isAccessoryOrSparePartFor;

    /**
     * {@inheritdoc}
     * 
     * @ODM\Field
     */
     protected $isConsumableFor;

    /**
     * {@inheritdoc}
     * 
     * @ODM\Field
     */
     protected $isRelatedTo;

    /**
     * {@inheritdoc}
     * 
     * @ODM\Field
     */
     protected $isSimilarTo;

    /**
     * {@inheritdoc}
     * 
     * @ODM\Field
     */
     protected $itemCondition;

    /**
     * {@inheritdoc}
     * 
     * @ODM\Field
     */
     protected $logo;

    /**
     * {@inheritdoc}
     * 
     * @ODM\Field
     */
     protected $manufacturer;

    /**
     * {@inheritdoc}
     * 
     * @ODM\Field
     */
     protected $model;

    /**
     * {@inheritdoc}
     * 
     * @ODM\String
     * @Assert\Type(type="string")
     */
     protected $mpn;

    /**
     * {@inheritdoc}
     * 
     * @ODM\Field
     */
     protected $offers;

    /**
     * {@inheritdoc}
     * 
     * @ODM\String
     * @Assert\Type(type="string")
     */
     protected $productID;

    /**
     * {@inheritdoc}
     * 
     * @ODM\Field
     */
     protected $releaseDate;

    /**
     * {@inheritdoc}
     * 
     * @ODM\Field
     */
     protected $review;

    /**
     * {@inheritdoc}
     * 
     * @ODM\Raw
     */
     protected $reviews;

    /**
     * {@inheritdoc}
     * 
     * @ODM\String
     * @Assert\Type(type="string")
     */
     protected $sku;

    /**
     * {@inheritdoc}
     * 
     * @ODM\Field
     */
     protected $weight;

    /**
     * {@inheritdoc}
     * 
     * @ODM\Field
     */
     protected $width;

    /**
     * {@inheritdoc}
     * 
     * @ODM\Field
     */
     protected $isVariantOf;

    /**
     * {@inheritdoc}
     * 
     * @ODM\Field
     */
     protected $predecessorOf;

    /**
     * {@inheritdoc}
     * 
     * @ODM\Field
     */
     protected $successorOf;
}
