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

namespace SchemaRepository\Bundle\SocialEventBundle\Document;

use SchemaRepository\Bundle\SocialEventBundle\Model\AbstractSocialEvent;
use Doctrine\ODM\MongoDB\Mapping\Annotations as ODM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Social Event Document
 *
 * @ODM\MappedSuperclass()
 */
abstract class AbstractSocialEvent extends AbstractSocialEvent
{

    /**
     * {@inheritdoc}
     * 
     * @ODM\Id
     */
     protected $id;

    /**
     * {@inheritdoc}
     * 
     * @ODM\String
     * @Assert\Type(type="string")
     */
     protected $additionalType;

    /**
     * {@inheritdoc}
     * 
     * @ODM\String
     * @Assert\Type(type="string")
     */
     protected $description;

    /**
     * {@inheritdoc}
     * 
     * @ODM\String
     * @Assert\Type(type="string")
     */
     protected $image;

    /**
     * {@inheritdoc}
     * 
     * @ODM\String
     * @Assert\Type(type="string")
     */
     protected $name;

    /**
     * {@inheritdoc}
     * 
     * @ODM\String
     * @Assert\Type(type="string")
     */
     protected $sameAs;

    /**
     * {@inheritdoc}
     * 
     * @ODM\String
     * @Assert\Type(type="string")
     */
     protected $url;

    /**
     * {@inheritdoc}
     * 
     * @ODM\Field
     */
     protected $attendee;

    /**
     * {@inheritdoc}
     * 
     * @ODM\Raw
     */
     protected $attendees;

    /**
     * {@inheritdoc}
     * 
     * @ODM\Field
     */
     protected $duration;

    /**
     * {@inheritdoc}
     * 
     * @ODM\Field
     */
     protected $endDate;

    /**
     * {@inheritdoc}
     * 
     * @ODM\Field
     */
     protected $location;

    /**
     * {@inheritdoc}
     * 
     * @ODM\Field
     */
     protected $offers;

    /**
     * {@inheritdoc}
     * 
     * @ODM\Field
     */
     protected $performer;

    /**
     * {@inheritdoc}
     * 
     * @ODM\Raw
     */
     protected $performers;

    /**
     * {@inheritdoc}
     * 
     * @ODM\Field
     */
     protected $startDate;

    /**
     * {@inheritdoc}
     * 
     * @ODM\Field
     */
     protected $subEvent;

    /**
     * {@inheritdoc}
     * 
     * @ODM\Raw
     */
     protected $subEvents;

    /**
     * {@inheritdoc}
     * 
     * @ODM\Field
     */
     protected $superEvent;
}
