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

namespace SchemaRepository\Bundle\PriceSpecificationBundle\Entity;

use SchemaRepository\Bundle\PriceSpecificationBundle\Model\AbstractPriceSpecification;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Price Specification Entity
 *
 * @ODM\MappedSuperclass()
 */
abstract class AbstractPriceSpecification extends AbstractPriceSpecification
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
     * @ORM\Column(name="eligible_quantity", type="string", nullable=true)
     */
     protected $eligibleQuantity;

    /**
     * {@inheritdoc}
     * 
     * @ORM\Column(name="eligible_transaction_volume", type="string", nullable=true)
     */
     protected $eligibleTransactionVolume;

    /**
     * {@inheritdoc}
     * 
     * @ORM\Column(name="max_price", type="float", nullable=true)
     */
     protected $maxPrice;

    /**
     * {@inheritdoc}
     * 
     * @ORM\Column(name="min_price", type="float", nullable=true)
     */
     protected $minPrice;

    /**
     * {@inheritdoc}
     * 
     * @ORM\Column(name="price", type="string", nullable=true)
     */
     protected $price;

    /**
     * {@inheritdoc}
     * 
     * @ORM\Column(name="price_currency", type="string", nullable=true)
     * @Assert\Type(type="string")
     */
     protected $priceCurrency;

    /**
     * {@inheritdoc}
     * 
     * @ORM\Column(name="valid_from", type="datetime", nullable=true)
     */
     protected $validFrom;

    /**
     * {@inheritdoc}
     * 
     * @ORM\Column(name="valid_through", type="datetime", nullable=true)
     */
     protected $validThrough;

    /**
     * {@inheritdoc}
     * 
     * @ORM\Column(name="value_added_tax_included", type="boolean", nullable=true)
     */
     protected $valueAddedTaxIncluded;
}
