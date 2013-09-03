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

namespace SchemaRepository\Bundle\AggregateRatingBundle\Model;

use SchemaRepository\Bundle\AggregateRatingBundle\Model\AggregateRatingInterface;
use SchemaRepository\Bundle\RatingBundle\Model\AbstractRating;

/**
 * Model of Aggregate Rating
 * 
 * @author SchemaGenerator <dallas62@free.fr>
 * @package SchemaRepository\Bundle\AggregateRatingBundle\Model
 */
abstract class AbstractAggregateRating extends AbstractRating implements AggregateRatingInterface
{

    /**
     * The item that is being reviewed/rated.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var mixed
     */
    protected $itemReviewed;

    /**
     * The count of total number of ratings.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var integer|long|float|decimal
     */
    protected $ratingCount;

    /**
     * The count of total number of reviews.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var integer|long|float|decimal
     */
    protected $reviewCount;

    /**
     * Getter of Item Reviewed
     * 
     * The item that is being reviewed/rated.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return mixed
     */
    public function getItemReviewed()
    {
        return $this->itemReviewed;
    }

    /**
     * Setter of Item Reviewed
     * 
     * The item that is being reviewed/rated.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param mixed $value Value of itemReviewed
     */
    public function setItemReviewed($value)
    {
        $this->itemReviewed = $value;
    }

    /**
     * Getter of Rating Count
     * 
     * The count of total number of ratings.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return integer|long|float|decimal
     */
    public function getRatingCount()
    {
        return $this->ratingCount;
    }

    /**
     * Setter of Rating Count
     * 
     * The count of total number of ratings.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param integer|long|float|decimal $value Value of ratingCount
     */
    public function setRatingCount($value)
    {
        $this->ratingCount = $value;
    }

    /**
     * Getter of Review Count
     * 
     * The count of total number of reviews.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return integer|long|float|decimal
     */
    public function getReviewCount()
    {
        return $this->reviewCount;
    }

    /**
     * Setter of Review Count
     * 
     * The count of total number of reviews.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param integer|long|float|decimal $value Value of reviewCount
     */
    public function setReviewCount($value)
    {
        $this->reviewCount = $value;
    }
}
