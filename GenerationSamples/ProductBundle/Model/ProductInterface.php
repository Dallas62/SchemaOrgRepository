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

use SchemaRepository\Bundle\ThingBundle\Model\ThingInterface;

/**
 * Interface of Product Model
 * 
 * @author SchemaGenerator <dallas62@free.fr>
 * @package SchemaRepository\Bundle\ProductBundle\Model
 */
interface ProductInterface extends ThingInterface
{

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
    public function getAggregateRating();

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
    public function getAudience();

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
    public function getBrand();

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
    public function getColor();

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
    public function getDepth();

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
    public function getGtin13();

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
    public function getGtin14();

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
    public function getGtin8();

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
    public function getHeight();

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
    public function getIsAccessoryOrSparePartFor();

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
    public function getIsConsumableFor();

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
    public function getIsRelatedTo();

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
    public function getIsSimilarTo();

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
    public function getItemCondition();

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
    public function getLogo();

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
    public function getManufacturer();

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
    public function getModel();

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
    public function getMpn();

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
    public function getOffers();

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
    public function getProductID();

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
    public function getReleaseDate();

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
    public function getReview();

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
    public function getReviews();

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
    public function getSku();

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
    public function getWeight();

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
    public function getWidth();
}
