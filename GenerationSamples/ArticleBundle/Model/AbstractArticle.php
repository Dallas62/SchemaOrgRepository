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

namespace SchemaRepository\Bundle\ArticleBundle\Model;

use SchemaRepository\Bundle\ArticleBundle\Model\ArticleInterface;
use SchemaRepository\Bundle\CreativeWorkBundle\Model\AbstractCreativeWork;

/**
 * Model of Article
 * 
 * @author SchemaGenerator <dallas62@free.fr>
 * @package SchemaRepository\Bundle\ArticleBundle\Model
 */
abstract class AbstractArticle extends AbstractCreativeWork implements ArticleInterface
{

    /**
     * The actual body of the article.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var string
     */
    protected $articleBody;

    /**
     * Articles may belong to one or more 'sections' in a magazine or
     * newspaper, such as Sports, Lifestyle, etc.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var string
     */
    protected $articleSection;

    /**
     * The number of words in the text of the Article.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var integer|long
     */
    protected $wordCount;

    /**
     * Getter of Article Body
     * 
     * The actual body of the article.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return string
     */
    public function getArticleBody()
    {
        return $this->articleBody;
    }

    /**
     * Setter of Article Body
     * 
     * The actual body of the article.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param string $value Value of articleBody
     */
    public function setArticleBody($value)
    {
        $this->articleBody = $value;
    }

    /**
     * Getter of Article Section
     * 
     * Articles may belong to one or more 'sections' in a magazine or
     * newspaper, such as Sports, Lifestyle, etc.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return string
     */
    public function getArticleSection()
    {
        return $this->articleSection;
    }

    /**
     * Setter of Article Section
     * 
     * Articles may belong to one or more 'sections' in a magazine or
     * newspaper, such as Sports, Lifestyle, etc.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param string $value Value of articleSection
     */
    public function setArticleSection($value)
    {
        $this->articleSection = $value;
    }

    /**
     * Getter of Word Count
     * 
     * The number of words in the text of the Article.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return integer|long
     */
    public function getWordCount()
    {
        return $this->wordCount;
    }

    /**
     * Setter of Word Count
     * 
     * The number of words in the text of the Article.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param integer|long $value Value of wordCount
     */
    public function setWordCount($value)
    {
        $this->wordCount = $value;
    }
}
