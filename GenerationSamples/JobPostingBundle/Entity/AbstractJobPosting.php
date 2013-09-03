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

namespace SchemaRepository\Bundle\JobPostingBundle\Entity;

use SchemaRepository\Bundle\JobPostingBundle\Model\AbstractJobPosting;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Job Posting Entity
 *
 * @ODM\MappedSuperclass()
 */
abstract class AbstractJobPosting extends AbstractJobPosting
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
     * @ORM\Column(name="base_salary", type="float", nullable=true)
     */
     protected $baseSalary;

    /**
     * {@inheritdoc}
     * 
     * @ORM\Column(name="benefits", type="string", nullable=true)
     * @Assert\Type(type="string")
     */
     protected $benefits;

    /**
     * {@inheritdoc}
     * 
     * @ORM\Column(name="date_posted", type="string", nullable=true)
     */
     protected $datePosted;

    /**
     * {@inheritdoc}
     * 
     * @ORM\Column(name="education_requirements", type="string", nullable=true)
     * @Assert\Type(type="string")
     */
     protected $educationRequirements;

    /**
     * {@inheritdoc}
     * 
     * @ORM\Column(name="employment_type", type="string", nullable=true)
     * @Assert\Type(type="string")
     */
     protected $employmentType;

    /**
     * {@inheritdoc}
     * 
     * @ORM\Column(name="experience_requirements", type="string", nullable=true)
     * @Assert\Type(type="string")
     */
     protected $experienceRequirements;

    /**
     * {@inheritdoc}
     * 
     * @ORM\Column(name="hiring_organization", type="string", nullable=true)
     */
     protected $hiringOrganization;

    /**
     * {@inheritdoc}
     * 
     * @ORM\Column(name="incentives", type="string", nullable=true)
     * @Assert\Type(type="string")
     */
     protected $incentives;

    /**
     * {@inheritdoc}
     * 
     * @ORM\Column(name="industry", type="string", nullable=true)
     * @Assert\Type(type="string")
     */
     protected $industry;

    /**
     * {@inheritdoc}
     * 
     * @ORM\Column(name="job_location", type="string", nullable=true)
     */
     protected $jobLocation;

    /**
     * {@inheritdoc}
     * 
     * @ORM\Column(name="occupational_category", type="string", nullable=true)
     * @Assert\Type(type="string")
     */
     protected $occupationalCategory;

    /**
     * {@inheritdoc}
     * 
     * @ORM\Column(name="qualifications", type="string", nullable=true)
     * @Assert\Type(type="string")
     */
     protected $qualifications;

    /**
     * {@inheritdoc}
     * 
     * @ORM\Column(name="responsibilities", type="string", nullable=true)
     * @Assert\Type(type="string")
     */
     protected $responsibilities;

    /**
     * {@inheritdoc}
     * 
     * @ORM\Column(name="salary_currency", type="string", nullable=true)
     * @Assert\Type(type="string")
     */
     protected $salaryCurrency;

    /**
     * {@inheritdoc}
     * 
     * @ORM\Column(name="skills", type="string", nullable=true)
     * @Assert\Type(type="string")
     */
     protected $skills;

    /**
     * {@inheritdoc}
     * 
     * @ORM\Column(name="special_commitments", type="string", nullable=true)
     * @Assert\Type(type="string")
     */
     protected $specialCommitments;

    /**
     * {@inheritdoc}
     * 
     * @ORM\Column(name="title", type="string", nullable=true)
     * @Assert\Type(type="string")
     */
     protected $title;

    /**
     * {@inheritdoc}
     * 
     * @ORM\Column(name="work_hours", type="string", nullable=true)
     * @Assert\Type(type="string")
     */
     protected $workHours;
}
