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

namespace SchemaRepository\Bundle\ProductBundle\Model;

use SchemaRepository\Bundle\ProductBundle\Model\ProductInterface;
use SchemaRepository\Bundle\ThingBundle\Model\AbstractThing;

/**
 * Model of Product
 * 
 * @author SchemaGenerator <dallas62@free.fr>
 * @package SchemaRepository\Bundle\ProductBundle\Model
 */
abstract class AbstractProduct extends AbstractThing implements ProductInterface
{

    /**
     * The overall rating, based on a collection of reviews or ratings, of
     * the item.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var mixed
     */
    protected $aggregateRating;

    /**
     * The intended audience of the item, i.e. the group for whom the item
     * was created.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var mixed
     */
    protected $audience;

    /**
     * The brand(s) associated with a product or service, or the brand(s)
     * maintained by an organization or business person.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var mixed
     */
    protected $brand;

    /**
     * The color of the product.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var string
     */
    protected $color;

    /**
     * The depth of the product.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var mixed
     */
    protected $depth;

    /**
     * The GTIN-13 code of the product, or the product to which the offer
     * refers. This is equivalent to 13-digit ISBN codes and EAN UCC-13.
     * Former 12-digit UPC codes can be converted into a GTIN-13 code by
     * simply adding a preceeding zero.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var string
     */
    protected $gtin13;

    /**
     * The GTIN-14 code of the product, or the product to which the offer
     * refers.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var string
     */
    protected $gtin14;

    /**
     * The GTIN-8 code of the product, or the product to which the offer
     * refers. This code is also known as EAN/UCC-8 or 8-digit EAN.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var string
     */
    protected $gtin8;

    /**
     * The height of the item.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var mixed
     */
    protected $height;

    /**
     * A pointer to another product (or multiple products) for which this
     * product is an accessory or spare part.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var mixed
     */
    protected $isAccessoryOrSparePartFor;

    /**
     * A pointer to another product (or multiple products) for which this
     * product is a consumable.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var mixed
     */
    protected $isConsumableFor;

    /**
     * A pointer to another, somehow related product (or multiple products).
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var mixed
     */
    protected $isRelatedTo;

    /**
     * A pointer to another, functionally similar product (or multiple
     * products).
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var mixed
     */
    protected $isSimilarTo;

    /**
     * A predefined value from OfferItemCondition or a textual description of
     * the condition of the product or service, or the products or services
     * included in the offer.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var mixed
     */
    protected $itemCondition;

    /**
     * URL of an image for the logo of the item.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var mixed
     */
    protected $logo;

    /**
     * The manufacturer of the product.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var mixed
     */
    protected $manufacturer;

    /**
     * The model of the product. Use with the URL of a ProductModel or a
     * textual representation of the model identifier. The URL of the
     * ProductModel can be from an external source. It is recommended to
     * additionally provide strong product identifiers via the
     * gtin8/gtin13/gtin14 and mpn properties.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var mixed
     */
    protected $model;

    /**
     * The Manufacturer Part Number (MPN) of the product, or the product to
     * which the offer refers.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var string
     */
    protected $mpn;

    /**
     * An offer to sell this item—for example, an offer to sell a product,
     * the DVD of a movie, or tickets to an event.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var mixed
     */
    protected $offers;

    /**
     * The product identifier, such as ISBN. For example: <meta
     * itemprop='productID' content='isbn:123-456-789'/>.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var string
     */
    protected $productID;

    /**
     * The release date of a product or product model. This can be used to
     * distinguish the exact variant of a product.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var mixed
     */
    protected $releaseDate;

    /**
     * A review of the item.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var mixed
     */
    protected $review;

    /**
     * Review of the item (legacy spelling; see singular form, review).
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var array
     */
    protected $reviews;

    /**
     * The Stock Keeping Unit (SKU), i.e. a merchant-specific identifier for
     * a product or service, or the product to which the offer refers.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var string
     */
    protected $sku;

    /**
     * The weight of the product.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var mixed
     */
    protected $weight;

    /**
     * The width of the item.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var mixed
     */
    protected $width;

    /**
     * Getter of Aggregate Rating
     * 
     * The overall rating, based on a collection of reviews or ratings, of
     * the item.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return mixed
     */
    public function getAggregateRating()
    {
        return $this->aggregateRating;
    }

    /**
     * Setter of Aggregate Rating
     * 
     * The overall rating, based on a collection of reviews or ratings, of
     * the item.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param mixed $value Value of aggregateRating
     */
    public function setAggregateRating($value)
    {
        $this->aggregateRating = $value;
    }

    /**
     * Getter of Audience
     * 
     * The intended audience of the item, i.e. the group for whom the item
     * was created.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return mixed
     */
    public function getAudience()
    {
        return $this->audience;
    }

    /**
     * Setter of Audience
     * 
     * The intended audience of the item, i.e. the group for whom the item
     * was created.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param mixed $value Value of audience
     */
    public function setAudience($value)
    {
        $this->audience = $value;
    }

    /**
     * Getter of Brand
     * 
     * The brand(s) associated with a product or service, or the brand(s)
     * maintained by an organization or business person.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return mixed
     */
    public function getBrand()
    {
        return $this->brand;
    }

    /**
     * Setter of Brand
     * 
     * The brand(s) associated with a product or service, or the brand(s)
     * maintained by an organization or business person.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param mixed $value Value of brand
     */
    public function setBrand($value)
    {
        $this->brand = $value;
    }

    /**
     * Getter of Color
     * 
     * The color of the product.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return string
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * Setter of Color
     * 
     * The color of the product.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param string $value Value of color
     */
    public function setColor($value)
    {
        $this->color = $value;
    }

    /**
     * Getter of Depth
     * 
     * The depth of the product.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return mixed
     */
    public function getDepth()
    {
        return $this->depth;
    }

    /**
     * Setter of Depth
     * 
     * The depth of the product.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param mixed $value Value of depth
     */
    public function setDepth($value)
    {
        $this->depth = $value;
    }

    /**
     * Getter of Gtin13
     * 
     * The GTIN-13 code of the product, or the product to which the offer
     * refers. This is equivalent to 13-digit ISBN codes and EAN UCC-13.
     * Former 12-digit UPC codes can be converted into a GTIN-13 code by
     * simply adding a preceeding zero.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return string
     */
    public function getGtin13()
    {
        return $this->gtin13;
    }

    /**
     * Setter of Gtin13
     * 
     * The GTIN-13 code of the product, or the product to which the offer
     * refers. This is equivalent to 13-digit ISBN codes and EAN UCC-13.
     * Former 12-digit UPC codes can be converted into a GTIN-13 code by
     * simply adding a preceeding zero.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param string $value Value of gtin13
     */
    public function setGtin13($value)
    {
        $this->gtin13 = $value;
    }

    /**
     * Getter of Gtin14
     * 
     * The GTIN-14 code of the product, or the product to which the offer
     * refers.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return string
     */
    public function getGtin14()
    {
        return $this->gtin14;
    }

    /**
     * Setter of Gtin14
     * 
     * The GTIN-14 code of the product, or the product to which the offer
     * refers.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param string $value Value of gtin14
     */
    public function setGtin14($value)
    {
        $this->gtin14 = $value;
    }

    /**
     * Getter of Gtin8
     * 
     * The GTIN-8 code of the product, or the product to which the offer
     * refers. This code is also known as EAN/UCC-8 or 8-digit EAN.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return string
     */
    public function getGtin8()
    {
        return $this->gtin8;
    }

    /**
     * Setter of Gtin8
     * 
     * The GTIN-8 code of the product, or the product to which the offer
     * refers. This code is also known as EAN/UCC-8 or 8-digit EAN.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param string $value Value of gtin8
     */
    public function setGtin8($value)
    {
        $this->gtin8 = $value;
    }

    /**
     * Getter of Height
     * 
     * The height of the item.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return mixed
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * Setter of Height
     * 
     * The height of the item.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param mixed $value Value of height
     */
    public function setHeight($value)
    {
        $this->height = $value;
    }

    /**
     * Getter of Is Accessory or Spare Part for
     * 
     * A pointer to another product (or multiple products) for which this
     * product is an accessory or spare part.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return mixed
     */
    public function getIsAccessoryOrSparePartFor()
    {
        return $this->isAccessoryOrSparePartFor;
    }

    /**
     * Setter of Is Accessory or Spare Part for
     * 
     * A pointer to another product (or multiple products) for which this
     * product is an accessory or spare part.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param mixed $value Value of isAccessoryOrSparePartFor
     */
    public function setIsAccessoryOrSparePartFor($value)
    {
        $this->isAccessoryOrSparePartFor = $value;
    }

    /**
     * Getter of Is Consumable for
     * 
     * A pointer to another product (or multiple products) for which this
     * product is a consumable.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return mixed
     */
    public function getIsConsumableFor()
    {
        return $this->isConsumableFor;
    }

    /**
     * Setter of Is Consumable for
     * 
     * A pointer to another product (or multiple products) for which this
     * product is a consumable.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param mixed $value Value of isConsumableFor
     */
    public function setIsConsumableFor($value)
    {
        $this->isConsumableFor = $value;
    }

    /**
     * Getter of Is Related to
     * 
     * A pointer to another, somehow related product (or multiple products).
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return mixed
     */
    public function getIsRelatedTo()
    {
        return $this->isRelatedTo;
    }

    /**
     * Setter of Is Related to
     * 
     * A pointer to another, somehow related product (or multiple products).
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param mixed $value Value of isRelatedTo
     */
    public function setIsRelatedTo($value)
    {
        $this->isRelatedTo = $value;
    }

    /**
     * Getter of Is Similar to
     * 
     * A pointer to another, functionally similar product (or multiple
     * products).
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return mixed
     */
    public function getIsSimilarTo()
    {
        return $this->isSimilarTo;
    }

    /**
     * Setter of Is Similar to
     * 
     * A pointer to another, functionally similar product (or multiple
     * products).
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param mixed $value Value of isSimilarTo
     */
    public function setIsSimilarTo($value)
    {
        $this->isSimilarTo = $value;
    }

    /**
     * Getter of Item Condition
     * 
     * A predefined value from OfferItemCondition or a textual description of
     * the condition of the product or service, or the products or services
     * included in the offer.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return mixed
     */
    public function getItemCondition()
    {
        return $this->itemCondition;
    }

    /**
     * Setter of Item Condition
     * 
     * A predefined value from OfferItemCondition or a textual description of
     * the condition of the product or service, or the products or services
     * included in the offer.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param mixed $value Value of itemCondition
     */
    public function setItemCondition($value)
    {
        $this->itemCondition = $value;
    }

    /**
     * Getter of Logo
     * 
     * URL of an image for the logo of the item.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return mixed
     */
    public function getLogo()
    {
        return $this->logo;
    }

    /**
     * Setter of Logo
     * 
     * URL of an image for the logo of the item.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param mixed $value Value of logo
     */
    public function setLogo($value)
    {
        $this->logo = $value;
    }

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
    public function getManufacturer()
    {
        return $this->manufacturer;
    }

    /**
     * Setter of Manufacturer
     * 
     * The manufacturer of the product.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param mixed $value Value of manufacturer
     */
    public function setManufacturer($value)
    {
        $this->manufacturer = $value;
    }

    /**
     * Getter of Model
     * 
     * The model of the product. Use with the URL of a ProductModel or a
     * textual representation of the model identifier. The URL of the
     * ProductModel can be from an external source. It is recommended to
     * additionally provide strong product identifiers via the
     * gtin8/gtin13/gtin14 and mpn properties.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return mixed
     */
    public function getModel()
    {
        return $this->model;
    }

    /**
     * Setter of Model
     * 
     * The model of the product. Use with the URL of a ProductModel or a
     * textual representation of the model identifier. The URL of the
     * ProductModel can be from an external source. It is recommended to
     * additionally provide strong product identifiers via the
     * gtin8/gtin13/gtin14 and mpn properties.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param mixed $value Value of model
     */
    public function setModel($value)
    {
        $this->model = $value;
    }

    /**
     * Getter of Mpn
     * 
     * The Manufacturer Part Number (MPN) of the product, or the product to
     * which the offer refers.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return string
     */
    public function getMpn()
    {
        return $this->mpn;
    }

    /**
     * Setter of Mpn
     * 
     * The Manufacturer Part Number (MPN) of the product, or the product to
     * which the offer refers.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param string $value Value of mpn
     */
    public function setMpn($value)
    {
        $this->mpn = $value;
    }

    /**
     * Getter of Offers
     * 
     * An offer to sell this item—for example, an offer to sell a product,
     * the DVD of a movie, or tickets to an event.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return mixed
     */
    public function getOffers()
    {
        return $this->offers;
    }

    /**
     * Setter of Offers
     * 
     * An offer to sell this item—for example, an offer to sell a product,
     * the DVD of a movie, or tickets to an event.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param mixed $value Value of offers
     */
    public function setOffers($value)
    {
        $this->offers = $value;
    }

    /**
     * Getter of Product ID
     * 
     * The product identifier, such as ISBN. For example: <meta
     * itemprop='productID' content='isbn:123-456-789'/>.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return string
     */
    public function getProductID()
    {
        return $this->productID;
    }

    /**
     * Setter of Product ID
     * 
     * The product identifier, such as ISBN. For example: <meta
     * itemprop='productID' content='isbn:123-456-789'/>.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param string $value Value of productID
     */
    public function setProductID($value)
    {
        $this->productID = $value;
    }

    /**
     * Getter of Release Date
     * 
     * The release date of a product or product model. This can be used to
     * distinguish the exact variant of a product.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return mixed
     */
    public function getReleaseDate()
    {
        return $this->releaseDate;
    }

    /**
     * Setter of Release Date
     * 
     * The release date of a product or product model. This can be used to
     * distinguish the exact variant of a product.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param mixed $value Value of releaseDate
     */
    public function setReleaseDate($value)
    {
        $this->releaseDate = $value;
    }

    /**
     * Getter of Review
     * 
     * A review of the item.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return mixed
     */
    public function getReview()
    {
        return $this->review;
    }

    /**
     * Setter of Review
     * 
     * A review of the item.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param mixed $value Value of review
     */
    public function setReview($value)
    {
        $this->review = $value;
    }

    /**
     * Getter of Reviews
     * 
     * Review of the item (legacy spelling; see singular form, review).
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return array
     */
    public function getReviews()
    {
        return $this->reviews;
    }

    /**
     * Setter of Reviews
     * 
     * Review of the item (legacy spelling; see singular form, review).
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param array $value Value of reviews
     */
    public function setReviews($value)
    {
        $this->reviews = $value;
    }

    /**
     * Add review to Array
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param mixed $value Value of review
     */
    public function addReview($value)
    {
        $this->reviews[] = $value;
    }

    /**
     * Remove review to Array
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param mixed $value Value of review
     */
    public function removeReview($value)
    {
        $key = array_search($value, $this->reviews);
        if($key !== false) {
           unset($this->reviews[$key]);
        }
    }

    /**
     * Getter of Sku
     * 
     * The Stock Keeping Unit (SKU), i.e. a merchant-specific identifier for
     * a product or service, or the product to which the offer refers.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return string
     */
    public function getSku()
    {
        return $this->sku;
    }

    /**
     * Setter of Sku
     * 
     * The Stock Keeping Unit (SKU), i.e. a merchant-specific identifier for
     * a product or service, or the product to which the offer refers.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param string $value Value of sku
     */
    public function setSku($value)
    {
        $this->sku = $value;
    }

    /**
     * Getter of Weight
     * 
     * The weight of the product.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return mixed
     */
    public function getWeight()
    {
        return $this->weight;
    }

    /**
     * Setter of Weight
     * 
     * The weight of the product.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param mixed $value Value of weight
     */
    public function setWeight($value)
    {
        $this->weight = $value;
    }

    /**
     * Getter of Width
     * 
     * The width of the item.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return mixed
     */
    public function getWidth()
    {
        return $this->width;
    }

    /**
     * Setter of Width
     * 
     * The width of the item.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param mixed $value Value of width
     */
    public function setWidth($value)
    {
        $this->width = $value;
    }
}
