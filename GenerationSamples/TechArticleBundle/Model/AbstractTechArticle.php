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

namespace SchemaRepository\Bundle\TechArticleBundle\Model;

use SchemaRepository\Bundle\TechArticleBundle\Model\TechArticleInterface;
use SchemaRepository\Bundle\ArticleBundle\Model\AbstractArticle;

/**
 * Model of Tech Article
 * 
 * @author SchemaGenerator <dallas62@free.fr>
 * @package SchemaRepository\Bundle\TechArticleBundle\Model
 */
abstract class AbstractTechArticle extends AbstractArticle implements TechArticleInterface
{

    /**
     * Prerequisites needed to fulfill steps in article.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var string
     */
    protected $dependencies;

    /**
     * Proficiency needed for this content; expected values: 'Beginner',
     * 'Expert'.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var string
     */
    protected $proficiencyLevel;

    /**
     * Getter of Dependencies
     * 
     * Prerequisites needed to fulfill steps in article.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return string
     */
    public function getDependencies()
    {
        return $this->dependencies;
    }

    /**
     * Setter of Dependencies
     * 
     * Prerequisites needed to fulfill steps in article.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param string $value Value of dependencies
     */
    public function setDependencies($value)
    {
        $this->dependencies = $value;
    }

    /**
     * Getter of Proficiency Level
     * 
     * Proficiency needed for this content; expected values: 'Beginner',
     * 'Expert'.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return string
     */
    public function getProficiencyLevel()
    {
        return $this->proficiencyLevel;
    }

    /**
     * Setter of Proficiency Level
     * 
     * Proficiency needed for this content; expected values: 'Beginner',
     * 'Expert'.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param string $value Value of proficiencyLevel
     */
    public function setProficiencyLevel($value)
    {
        $this->proficiencyLevel = $value;
    }
}
