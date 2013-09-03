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

namespace SchemaRepository\Bundle\CommunicateActionBundle\Model;

use SchemaRepository\Bundle\CommunicateActionBundle\Model\CommunicateActionInterface;
use SchemaRepository\Bundle\InteractActionBundle\Model\AbstractInteractAction;

/**
 * Model of Communicate Action
 * 
 * @author SchemaGenerator <dallas62@free.fr>
 * @package SchemaRepository\Bundle\CommunicateActionBundle\Model
 */
abstract class AbstractCommunicateAction extends AbstractInteractAction implements CommunicateActionInterface
{

    /**
     * The subject matter of the content.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var mixed
     */
    protected $about;

    /**
     * A sub property of instrument. The languaged used on this action.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var mixed
     */
    protected $language;

    /**
     * A sub property of participant. The participant who is at the receiving
     * end of the action.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var mixed
     */
    protected $recipient;

    /**
     * Getter of About
     * 
     * The subject matter of the content.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return mixed
     */
    public function getAbout()
    {
        return $this->about;
    }

    /**
     * Setter of About
     * 
     * The subject matter of the content.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param mixed $value Value of about
     */
    public function setAbout($value)
    {
        $this->about = $value;
    }

    /**
     * Getter of Language
     * 
     * A sub property of instrument. The languaged used on this action.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return mixed
     */
    public function getLanguage()
    {
        return $this->language;
    }

    /**
     * Setter of Language
     * 
     * A sub property of instrument. The languaged used on this action.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param mixed $value Value of language
     */
    public function setLanguage($value)
    {
        $this->language = $value;
    }

    /**
     * Getter of Recipient
     * 
     * A sub property of participant. The participant who is at the receiving
     * end of the action.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return mixed
     */
    public function getRecipient()
    {
        return $this->recipient;
    }

    /**
     * Setter of Recipient
     * 
     * A sub property of participant. The participant who is at the receiving
     * end of the action.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param mixed $value Value of recipient
     */
    public function setRecipient($value)
    {
        $this->recipient = $value;
    }
}
