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

namespace SchemaRepository\Bundle\ReviewBundle\Model;

use SchemaRepository\Bundle\ReviewBundle\Model\ReviewInterface;
use SchemaRepository\Bundle\CreativeWorkBundle\Model\AbstractCreativeWork;

/**
 * Model of Review
 * 
 * @author SchemaGenerator <dallas62@free.fr>
 * @package SchemaRepository\Bundle\ReviewBundle\Model
 */
abstract class AbstractReview extends AbstractCreativeWork implements ReviewInterface
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
     * The actual body of the review
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var string
     */
    protected $reviewBody;

    /**
     * The rating given in this review. Note that reviews can themselves be
     * rated. The reviewRating applies to rating given by the review. The
     * aggregateRating property applies to the review itself, as a creative
     * work.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var mixed
     */
    protected $reviewRating;

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
     * Getter of Review Body
     * 
     * The actual body of the review
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return string
     */
    public function getReviewBody()
    {
        return $this->reviewBody;
    }

    /**
     * Setter of Review Body
     * 
     * The actual body of the review
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param string $value Value of reviewBody
     */
    public function setReviewBody($value)
    {
        $this->reviewBody = $value;
    }

    /**
     * Getter of Review Rating
     * 
     * The rating given in this review. Note that reviews can themselves be
     * rated. The reviewRating applies to rating given by the review. The
     * aggregateRating property applies to the review itself, as a creative
     * work.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return mixed
     */
    public function getReviewRating()
    {
        return $this->reviewRating;
    }

    /**
     * Setter of Review Rating
     * 
     * The rating given in this review. Note that reviews can themselves be
     * rated. The reviewRating applies to rating given by the review. The
     * aggregateRating property applies to the review itself, as a creative
     * work.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param mixed $value Value of reviewRating
     */
    public function setReviewRating($value)
    {
        $this->reviewRating = $value;
    }
}
