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

namespace SchemaRepository\Bundle\TheaterEventBundle\Entity;

use SchemaRepository\Bundle\TheaterEventBundle\Model\AbstractTheaterEvent;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Theater Event Entity
 *
 * @ODM\MappedSuperclass()
 */
abstract class AbstractTheaterEvent extends AbstractTheaterEvent
{

    /**
     * {@inheritdoc}
     * 
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
     protected $id;

    /**
     * {@inheritdoc}
     * 
     * @ORM\Column(name="additional_type", type="string", nullable=true)
     * @Assert\Type(type="string")
     */
     protected $additionalType;

    /**
     * {@inheritdoc}
     * 
     * @ORM\Column(name="description", type="string", nullable=true)
     * @Assert\Type(type="string")
     */
     protected $description;

    /**
     * {@inheritdoc}
     * 
     * @ORM\Column(name="image", type="string", nullable=true)
     * @Assert\Type(type="string")
     */
     protected $image;

    /**
     * {@inheritdoc}
     * 
     * @ORM\Column(name="name", type="string", nullable=true)
     * @Assert\Type(type="string")
     */
     protected $name;

    /**
     * {@inheritdoc}
     * 
     * @ORM\Column(name="same_as", type="string", nullable=true)
     * @Assert\Type(type="string")
     */
     protected $sameAs;

    /**
     * {@inheritdoc}
     * 
     * @ORM\Column(name="url", type="string", nullable=true)
     * @Assert\Type(type="string")
     */
     protected $url;

    /**
     * {@inheritdoc}
     * 
     * @ORM\Column(name="attendee", type="string", nullable=true)
     */
     protected $attendee;

    /**
     * {@inheritdoc}
     * 
     * @ORM\Column(name="attendees", type="array", nullable=true)
     */
     protected $attendees;

    /**
     * {@inheritdoc}
     * 
     * @ORM\Column(name="duration", type="string", nullable=true)
     */
     protected $duration;

    /**
     * {@inheritdoc}
     * 
     * @ORM\Column(name="end_date", type="string", nullable=true)
     */
     protected $endDate;

    /**
     * {@inheritdoc}
     * 
     * @ORM\Column(name="location", type="string", nullable=true)
     */
     protected $location;

    /**
     * {@inheritdoc}
     * 
     * @ORM\Column(name="offers", type="string", nullable=true)
     */
     protected $offers;

    /**
     * {@inheritdoc}
     * 
     * @ORM\Column(name="performer", type="string", nullable=true)
     */
     protected $performer;

    /**
     * {@inheritdoc}
     * 
     * @ORM\Column(name="performers", type="array", nullable=true)
     */
     protected $performers;

    /**
     * {@inheritdoc}
     * 
     * @ORM\Column(name="start_date", type="string", nullable=true)
     */
     protected $startDate;

    /**
     * {@inheritdoc}
     * 
     * @ORM\Column(name="sub_event", type="string", nullable=true)
     */
     protected $subEvent;

    /**
     * {@inheritdoc}
     * 
     * @ORM\Column(name="sub_events", type="array", nullable=true)
     */
     protected $subEvents;

    /**
     * {@inheritdoc}
     * 
     * @ORM\Column(name="super_event", type="string", nullable=true)
     */
     protected $superEvent;
}
