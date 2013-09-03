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

namespace SchemaRepository\Bundle\BookBundle\Model;

use SchemaRepository\Bundle\BookBundle\Model\BookInterface;
use SchemaRepository\Bundle\CreativeWorkBundle\Model\AbstractCreativeWork;

/**
 * Model of Book
 * 
 * @author SchemaGenerator <dallas62@free.fr>
 * @package SchemaRepository\Bundle\BookBundle\Model
 */
abstract class AbstractBook extends AbstractCreativeWork implements BookInterface
{

    /**
     * The edition of the book.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var string
     */
    protected $bookEdition;

    /**
     * The format of the book.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var mixed
     */
    protected $bookFormat;

    /**
     * The illustrator of the book.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var mixed
     */
    protected $illustrator;

    /**
     * The ISBN of the book.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var string
     */
    protected $isbn;

    /**
     * The number of pages in the book.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var integer|long
     */
    protected $numberOfPages;

    /**
     * Getter of Book Edition
     * 
     * The edition of the book.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return string
     */
    public function getBookEdition()
    {
        return $this->bookEdition;
    }

    /**
     * Setter of Book Edition
     * 
     * The edition of the book.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param string $value Value of bookEdition
     */
    public function setBookEdition($value)
    {
        $this->bookEdition = $value;
    }

    /**
     * Getter of Book Format
     * 
     * The format of the book.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return mixed
     */
    public function getBookFormat()
    {
        return $this->bookFormat;
    }

    /**
     * Setter of Book Format
     * 
     * The format of the book.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param mixed $value Value of bookFormat
     */
    public function setBookFormat($value)
    {
        $this->bookFormat = $value;
    }

    /**
     * Getter of Illustrator
     * 
     * The illustrator of the book.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return mixed
     */
    public function getIllustrator()
    {
        return $this->illustrator;
    }

    /**
     * Setter of Illustrator
     * 
     * The illustrator of the book.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param mixed $value Value of illustrator
     */
    public function setIllustrator($value)
    {
        $this->illustrator = $value;
    }

    /**
     * Getter of ISBN
     * 
     * The ISBN of the book.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return string
     */
    public function getIsbn()
    {
        return $this->isbn;
    }

    /**
     * Setter of ISBN
     * 
     * The ISBN of the book.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param string $value Value of isbn
     */
    public function setIsbn($value)
    {
        $this->isbn = $value;
    }

    /**
     * Getter of Number of Pages
     * 
     * The number of pages in the book.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return integer|long
     */
    public function getNumberOfPages()
    {
        return $this->numberOfPages;
    }

    /**
     * Setter of Number of Pages
     * 
     * The number of pages in the book.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param integer|long $value Value of numberOfPages
     */
    public function setNumberOfPages($value)
    {
        $this->numberOfPages = $value;
    }
}
