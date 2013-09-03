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

namespace SchemaRepository\Bundle\DislikeActionBundle\Entity;

use SchemaRepository\Bundle\DislikeActionBundle\Model\AbstractDislikeAction;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Dislike Action Entity
 *
 * @ODM\MappedSuperclass()
 */
abstract class AbstractDislikeAction extends AbstractDislikeAction
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
     * @ORM\Column(name="agent", type="string", nullable=true)
     */
     protected $agent;

    /**
     * {@inheritdoc}
     * 
     * @ORM\Column(name="end_time", type="datetime", nullable=true)
     */
     protected $endTime;

    /**
     * {@inheritdoc}
     * 
     * @ORM\Column(name="instrument", type="string", nullable=true)
     */
     protected $instrument;

    /**
     * {@inheritdoc}
     * 
     * @ORM\Column(name="location", type="string", nullable=true)
     */
     protected $location;

    /**
     * {@inheritdoc}
     * 
     * @ORM\Column(name="object", type="string", nullable=true)
     */
     protected $object;

    /**
     * {@inheritdoc}
     * 
     * @ORM\Column(name="participant", type="string", nullable=true)
     */
     protected $participant;

    /**
     * {@inheritdoc}
     * 
     * @ORM\Column(name="result", type="string", nullable=true)
     */
     protected $result;

    /**
     * {@inheritdoc}
     * 
     * @ORM\Column(name="start_time", type="datetime", nullable=true)
     */
     protected $startTime;
}
