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

namespace SchemaRepository\Bundle\UserCommentsBundle\Model;

use SchemaRepository\Bundle\UserCommentsBundle\Model\UserCommentsInterface;
use SchemaRepository\Bundle\UserInteractionBundle\Model\AbstractUserInteraction;

/**
 * Model of User Comments
 * 
 * @author SchemaGenerator <dallas62@free.fr>
 * @package SchemaRepository\Bundle\UserCommentsBundle\Model
 */
abstract class AbstractUserComments extends AbstractUserInteraction implements UserCommentsInterface
{

    /**
     * The text of the UserComment.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var string
     */
    protected $commentText;

    /**
     * The time at which the UserComment was made.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var mixed
     */
    protected $commentTime;

    /**
     * The creator/author of this CreativeWork or UserComments. This is the
     * same as the Author property for CreativeWork.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var mixed
     */
    protected $creator;

    /**
     * Specifies the CreativeWork associated with the UserComment.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var mixed
     */
    protected $discusses;

    /**
     * The URL at which a reply may be posted to the specified UserComment.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var string
     */
    protected $replyToUrl;

    /**
     * Getter of Comment Text
     * 
     * The text of the UserComment.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return string
     */
    public function getCommentText()
    {
        return $this->commentText;
    }

    /**
     * Setter of Comment Text
     * 
     * The text of the UserComment.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param string $value Value of commentText
     */
    public function setCommentText($value)
    {
        $this->commentText = $value;
    }

    /**
     * Getter of Comment Time
     * 
     * The time at which the UserComment was made.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return mixed
     */
    public function getCommentTime()
    {
        return $this->commentTime;
    }

    /**
     * Setter of Comment Time
     * 
     * The time at which the UserComment was made.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param mixed $value Value of commentTime
     */
    public function setCommentTime($value)
    {
        $this->commentTime = $value;
    }

    /**
     * Getter of Creator
     * 
     * The creator/author of this CreativeWork or UserComments. This is the
     * same as the Author property for CreativeWork.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return mixed
     */
    public function getCreator()
    {
        return $this->creator;
    }

    /**
     * Setter of Creator
     * 
     * The creator/author of this CreativeWork or UserComments. This is the
     * same as the Author property for CreativeWork.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param mixed $value Value of creator
     */
    public function setCreator($value)
    {
        $this->creator = $value;
    }

    /**
     * Getter of Discusses
     * 
     * Specifies the CreativeWork associated with the UserComment.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return mixed
     */
    public function getDiscusses()
    {
        return $this->discusses;
    }

    /**
     * Setter of Discusses
     * 
     * Specifies the CreativeWork associated with the UserComment.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param mixed $value Value of discusses
     */
    public function setDiscusses($value)
    {
        $this->discusses = $value;
    }

    /**
     * Getter of Reply to Url
     * 
     * The URL at which a reply may be posted to the specified UserComment.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return string
     */
    public function getReplyToUrl()
    {
        return $this->replyToUrl;
    }

    /**
     * Setter of Reply to Url
     * 
     * The URL at which a reply may be posted to the specified UserComment.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param string $value Value of replyToUrl
     */
    public function setReplyToUrl($value)
    {
        $this->replyToUrl = $value;
    }
}
