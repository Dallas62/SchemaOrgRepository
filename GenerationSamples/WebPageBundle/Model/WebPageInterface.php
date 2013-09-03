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

namespace SchemaRepository\Bundle\WebPageBundle\Model;

use SchemaRepository\Bundle\CreativeWorkBundle\Model\CreativeWorkInterface;

/**
 * Interface of Web Page Model
 * 
 * @author SchemaGenerator <dallas62@free.fr>
 * @package SchemaRepository\Bundle\WebPageBundle\Model
 */
interface WebPageInterface extends CreativeWorkInterface
{

    /**
     * Getter of Breadcrumb
     * 
     * A set of links that can help a user understand and navigate a website
     * hierarchy.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return string
     */
    public function getBreadcrumb();

    /**
     * Getter of Is Part of
     * 
     * Indicates the collection or gallery to which the item belongs.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return mixed
     */
    public function getIsPartOf();

    /**
     * Getter of Last Reviewed
     * 
     * Date on which the content on this web page was last reviewed for
     * accuracy and/or completeness.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return mixed
     */
    public function getLastReviewed();

    /**
     * Getter of Main Content of Page
     * 
     * Indicates if this web page element is the main subject of the page.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return mixed
     */
    public function getMainContentOfPage();

    /**
     * Getter of Primary Image of Page
     * 
     * Indicates the main image on the page
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return mixed
     */
    public function getPrimaryImageOfPage();

    /**
     * Getter of Related Link
     * 
     * A link related to this web page, for example to other related web
     * pages.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return string
     */
    public function getRelatedLink();

    /**
     * Getter of Reviewed by
     * 
     * People or organizations that have reviewed the content on this web
     * page for accuracy and/or completeness.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return mixed
     */
    public function getReviewedBy();

    /**
     * Getter of Significant Link
     * 
     * One of the more significant URLs on the page. Typically, these are the
     * non-navigation links that are clicked on the most.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return string
     */
    public function getSignificantLink();

    /**
     * Getter of Significant Links
     * 
     * The most significant URLs on the page. Typically, these are the
     * non-navigation links that are clicked on the most (legacy spelling;
     * see singular form, significantLink).
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return string
     */
    public function getSignificantLinks();

    /**
     * Getter of Specialty
     * 
     * One of the domain specialities to which this web page's content
     * applies.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return mixed
     */
    public function getSpecialty();
}
