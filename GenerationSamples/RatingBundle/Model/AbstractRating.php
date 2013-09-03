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

namespace SchemaRepository\Bundle\RatingBundle\Model;

use SchemaRepository\Bundle\RatingBundle\Model\RatingInterface;
use SchemaRepository\Bundle\IntangibleBundle\Model\AbstractIntangible;

/**
 * Model of Rating
 * 
 * @author SchemaGenerator <dallas62@free.fr>
 * @package SchemaRepository\Bundle\RatingBundle\Model
 */
abstract class AbstractRating extends AbstractIntangible implements RatingInterface
{

    /**
     * The highest value allowed in this rating system. If bestRating is
     * omitted, 5 is assumed.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var integer|long|float|decimal|string
     */
    protected $bestRating;

    /**
     * The rating for the content.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var string
     */
    protected $ratingValue;

    /**
     * The lowest value allowed in this rating system. If worstRating is
     * omitted, 1 is assumed.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var integer|long|float|decimal|string
     */
    protected $worstRating;

    /**
     * Getter of Best Rating
     * 
     * The highest value allowed in this rating system. If bestRating is
     * omitted, 5 is assumed.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return integer|long|float|decimal|string
     */
    public function getBestRating()
    {
        return $this->bestRating;
    }

    /**
     * Setter of Best Rating
     * 
     * The highest value allowed in this rating system. If bestRating is
     * omitted, 5 is assumed.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param integer|long|float|decimal|string $value Value of bestRating
     */
    public function setBestRating($value)
    {
        $this->bestRating = $value;
    }

    /**
     * Getter of Rating Value
     * 
     * The rating for the content.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return string
     */
    public function getRatingValue()
    {
        return $this->ratingValue;
    }

    /**
     * Setter of Rating Value
     * 
     * The rating for the content.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param string $value Value of ratingValue
     */
    public function setRatingValue($value)
    {
        $this->ratingValue = $value;
    }

    /**
     * Getter of Worst Rating
     * 
     * The lowest value allowed in this rating system. If worstRating is
     * omitted, 1 is assumed.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return integer|long|float|decimal|string
     */
    public function getWorstRating()
    {
        return $this->worstRating;
    }

    /**
     * Setter of Worst Rating
     * 
     * The lowest value allowed in this rating system. If worstRating is
     * omitted, 1 is assumed.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param integer|long|float|decimal|string $value Value of worstRating
     */
    public function setWorstRating($value)
    {
        $this->worstRating = $value;
    }
}
