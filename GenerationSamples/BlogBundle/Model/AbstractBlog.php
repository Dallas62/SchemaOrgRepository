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

namespace SchemaRepository\Bundle\BlogBundle\Model;

use SchemaRepository\Bundle\BlogBundle\Model\BlogInterface;
use SchemaRepository\Bundle\CreativeWorkBundle\Model\AbstractCreativeWork;

/**
 * Model of Blog
 * 
 * @author SchemaGenerator <dallas62@free.fr>
 * @package SchemaRepository\Bundle\BlogBundle\Model
 */
abstract class AbstractBlog extends AbstractCreativeWork implements BlogInterface
{

    /**
     * A posting that is part of this blog.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var mixed
     */
    protected $blogPost;

    /**
     * The postings that are part of this blog (legacy spelling; see singular
     * form, blogPost).
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var array
     */
    protected $blogPosts;

    /**
     * Getter of Blog Post
     * 
     * A posting that is part of this blog.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return mixed
     */
    public function getBlogPost()
    {
        return $this->blogPost;
    }

    /**
     * Setter of Blog Post
     * 
     * A posting that is part of this blog.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param mixed $value Value of blogPost
     */
    public function setBlogPost($value)
    {
        $this->blogPost = $value;
    }

    /**
     * Getter of Blog Posts
     * 
     * The postings that are part of this blog (legacy spelling; see singular
     * form, blogPost).
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return array
     */
    public function getBlogPosts()
    {
        return $this->blogPosts;
    }

    /**
     * Setter of Blog Posts
     * 
     * The postings that are part of this blog (legacy spelling; see singular
     * form, blogPost).
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param array $value Value of blogPosts
     */
    public function setBlogPosts($value)
    {
        $this->blogPosts = $value;
    }

    /**
     * Add blogPost to Array
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param mixed $value Value of blogPost
     */
    public function addBlogPost($value)
    {
        $this->blogPosts[] = $value;
    }

    /**
     * Remove blogPost to Array
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param mixed $value Value of blogPost
     */
    public function removeBlogPost($value)
    {
        $key = array_search($value, $this->blogPosts);
        if($key !== false) {
           unset($this->blogPosts[$key]);
        }
    }
}
