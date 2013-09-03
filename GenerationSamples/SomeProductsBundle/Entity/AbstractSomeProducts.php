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

namespace SchemaRepository\Bundle\SomeProductsBundle\Entity;

use SchemaRepository\Bundle\SomeProductsBundle\Model\AbstractSomeProducts;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Some Products Entity
 *
 * @ODM\MappedSuperclass()
 */
abstract class AbstractSomeProducts extends AbstractSomeProducts
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
     * @ORM\Column(name="aggregate_rating", type="string", nullable=true)
     */
     protected $aggregateRating;

    /**
     * {@inheritdoc}
     * 
     * @ORM\Column(name="audience", type="string", nullable=true)
     */
     protected $audience;

    /**
     * {@inheritdoc}
     * 
     * @ORM\Column(name="brand", type="string", nullable=true)
     */
     protected $brand;

    /**
     * {@inheritdoc}
     * 
     * @ORM\Column(name="color", type="string", nullable=true)
     * @Assert\Type(type="string")
     */
     protected $color;

    /**
     * {@inheritdoc}
     * 
     * @ORM\Column(name="depth", type="string", nullable=true)
     */
     protected $depth;

    /**
     * {@inheritdoc}
     * 
     * @ORM\Column(name="gtin13", type="string", nullable=true)
     * @Assert\Type(type="string")
     */
     protected $gtin13;

    /**
     * {@inheritdoc}
     * 
     * @ORM\Column(name="gtin14", type="string", nullable=true)
     * @Assert\Type(type="string")
     */
     protected $gtin14;

    /**
     * {@inheritdoc}
     * 
     * @ORM\Column(name="gtin8", type="string", nullable=true)
     * @Assert\Type(type="string")
     */
     protected $gtin8;

    /**
     * {@inheritdoc}
     * 
     * @ORM\Column(name="height", type="string", nullable=true)
     */
     protected $height;

    /**
     * {@inheritdoc}
     * 
     * @ORM\Column(name="is_accessory_or_spare_part_for", type="string", nullable=true)
     */
     protected $isAccessoryOrSparePartFor;

    /**
     * {@inheritdoc}
     * 
     * @ORM\Column(name="is_consumable_for", type="string", nullable=true)
     */
     protected $isConsumableFor;

    /**
     * {@inheritdoc}
     * 
     * @ORM\Column(name="is_related_to", type="string", nullable=true)
     */
     protected $isRelatedTo;

    /**
     * {@inheritdoc}
     * 
     * @ORM\Column(name="is_similar_to", type="string", nullable=true)
     */
     protected $isSimilarTo;

    /**
     * {@inheritdoc}
     * 
     * @ORM\Column(name="item_condition", type="string", nullable=true)
     */
     protected $itemCondition;

    /**
     * {@inheritdoc}
     * 
     * @ORM\Column(name="logo", type="string", nullable=true)
     */
     protected $logo;

    /**
     * {@inheritdoc}
     * 
     * @ORM\Column(name="manufacturer", type="string", nullable=true)
     */
     protected $manufacturer;

    /**
     * {@inheritdoc}
     * 
     * @ORM\Column(name="model", type="string", nullable=true)
     */
     protected $model;

    /**
     * {@inheritdoc}
     * 
     * @ORM\Column(name="mpn", type="string", nullable=true)
     * @Assert\Type(type="string")
     */
     protected $mpn;

    /**
     * {@inheritdoc}
     * 
     * @ORM\Column(name="offers", type="string", nullable=true)
     */
     protected $offers;

    /**
     * {@inheritdoc}
     * 
     * @ORM\Column(name="product_id", type="string", nullable=true)
     * @Assert\Type(type="string")
     */
     protected $productID;

    /**
     * {@inheritdoc}
     * 
     * @ORM\Column(name="release_date", type="string", nullable=true)
     */
     protected $releaseDate;

    /**
     * {@inheritdoc}
     * 
     * @ORM\Column(name="review", type="string", nullable=true)
     */
     protected $review;

    /**
     * {@inheritdoc}
     * 
     * @ORM\Column(name="reviews", type="array", nullable=true)
     */
     protected $reviews;

    /**
     * {@inheritdoc}
     * 
     * @ORM\Column(name="sku", type="string", nullable=true)
     * @Assert\Type(type="string")
     */
     protected $sku;

    /**
     * {@inheritdoc}
     * 
     * @ORM\Column(name="weight", type="string", nullable=true)
     */
     protected $weight;

    /**
     * {@inheritdoc}
     * 
     * @ORM\Column(name="width", type="string", nullable=true)
     */
     protected $width;

    /**
     * {@inheritdoc}
     * 
     * @ORM\Column(name="inventory_level", type="string", nullable=true)
     */
     protected $inventoryLevel;
}
