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

namespace SchemaRepository\Bundle\CivicStructureBundle\Model;

use SchemaRepository\Bundle\PlaceBundle\Model\PlaceInterface;

/**
 * Interface of Civic Structure Model
 * 
 * @author SchemaGenerator <dallas62@free.fr>
 * @package SchemaRepository\Bundle\CivicStructureBundle\Model
 */
interface CivicStructureInterface extends PlaceInterface
{

    /**
     * Getter of Opening Hours
     * 
     * The opening hours for a business. Opening hours can be specified as a
     * weekly time range, starting with days, then times per day. Multiple
     * days can be listed with commas ',' separating each day. Day or time
     * ranges are specified using a hyphen '-'.- Days are specified using the
     * following two-letter combinations: Mo, Tu, We, Th, Fr, Sa, Su.- Times
     * are specified using 24:00 time. For example, 3pm is specified as
     * 15:00. - Here is an example: <time itemprop="openingHours"
     * datetime="Tu,Th 16:00-20:00">Tuesdays and Thursdays 4-8pm</time>. - If
     * a business is open 7 days a week, then it can be specified as <time
     * itemprop="openingHours" datetime="Mo-Su">Monday through Sunday, all
     * day</time>.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return mixed
     */
    public function getOpeningHours();
}
