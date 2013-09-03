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

namespace SchemaRepository\Bundle\NewsArticleBundle\Model;

use SchemaRepository\Bundle\NewsArticleBundle\Model\NewsArticleInterface;
use SchemaRepository\Bundle\ArticleBundle\Model\AbstractArticle;

/**
 * Model of News Article
 * 
 * @author SchemaGenerator <dallas62@free.fr>
 * @package SchemaRepository\Bundle\NewsArticleBundle\Model
 */
abstract class AbstractNewsArticle extends AbstractArticle implements NewsArticleInterface
{

    /**
     * The location where the NewsArticle was produced.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var string
     */
    protected $dateline;

    /**
     * The number of the column in which the NewsArticle appears in the print
     * edition.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var string
     */
    protected $printColumn;

    /**
     * The edition of the print product in which the NewsArticle appears.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var string
     */
    protected $printEdition;

    /**
     * If this NewsArticle appears in print, this field indicates the name of
     * the page on which the article is found. Please note that this field is
     * intended for the exact page name (e.g. A5, B18).
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var string
     */
    protected $printPage;

    /**
     * If this NewsArticle appears in print, this field indicates the print
     * section in which the article appeared.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var string
     */
    protected $printSection;

    /**
     * Getter of Dateline
     * 
     * The location where the NewsArticle was produced.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return string
     */
    public function getDateline()
    {
        return $this->dateline;
    }

    /**
     * Setter of Dateline
     * 
     * The location where the NewsArticle was produced.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param string $value Value of dateline
     */
    public function setDateline($value)
    {
        $this->dateline = $value;
    }

    /**
     * Getter of Print Column
     * 
     * The number of the column in which the NewsArticle appears in the print
     * edition.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return string
     */
    public function getPrintColumn()
    {
        return $this->printColumn;
    }

    /**
     * Setter of Print Column
     * 
     * The number of the column in which the NewsArticle appears in the print
     * edition.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param string $value Value of printColumn
     */
    public function setPrintColumn($value)
    {
        $this->printColumn = $value;
    }

    /**
     * Getter of Print Edition
     * 
     * The edition of the print product in which the NewsArticle appears.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return string
     */
    public function getPrintEdition()
    {
        return $this->printEdition;
    }

    /**
     * Setter of Print Edition
     * 
     * The edition of the print product in which the NewsArticle appears.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param string $value Value of printEdition
     */
    public function setPrintEdition($value)
    {
        $this->printEdition = $value;
    }

    /**
     * Getter of Print Page
     * 
     * If this NewsArticle appears in print, this field indicates the name of
     * the page on which the article is found. Please note that this field is
     * intended for the exact page name (e.g. A5, B18).
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return string
     */
    public function getPrintPage()
    {
        return $this->printPage;
    }

    /**
     * Setter of Print Page
     * 
     * If this NewsArticle appears in print, this field indicates the name of
     * the page on which the article is found. Please note that this field is
     * intended for the exact page name (e.g. A5, B18).
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param string $value Value of printPage
     */
    public function setPrintPage($value)
    {
        $this->printPage = $value;
    }

    /**
     * Getter of Print Section
     * 
     * If this NewsArticle appears in print, this field indicates the print
     * section in which the article appeared.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return string
     */
    public function getPrintSection()
    {
        return $this->printSection;
    }

    /**
     * Setter of Print Section
     * 
     * If this NewsArticle appears in print, this field indicates the print
     * section in which the article appeared.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param string $value Value of printSection
     */
    public function setPrintSection($value)
    {
        $this->printSection = $value;
    }
}
