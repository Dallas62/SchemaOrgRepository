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

namespace SchemaRepository\Bundle\JobPostingBundle\Model;

use SchemaRepository\Bundle\JobPostingBundle\Model\JobPostingInterface;
use SchemaRepository\Bundle\IntangibleBundle\Model\AbstractIntangible;

/**
 * Model of Job Posting
 * 
 * @author SchemaGenerator <dallas62@free.fr>
 * @package SchemaRepository\Bundle\JobPostingBundle\Model
 */
abstract class AbstractJobPosting extends AbstractIntangible implements JobPostingInterface
{

    /**
     * The base salary of the job.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var integer|long|float|decimal
     */
    protected $baseSalary;

    /**
     * Description of benefits associated with the job.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var string
     */
    protected $benefits;

    /**
     * Publication date for the job posting.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var mixed
     */
    protected $datePosted;

    /**
     * Educational background needed for the position.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var string
     */
    protected $educationRequirements;

    /**
     * Type of employment (e.g. full-time, part-time, contract, temporary,
     * seasonal, internship).
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var string
     */
    protected $employmentType;

    /**
     * Description of skills and experience needed for the position.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var string
     */
    protected $experienceRequirements;

    /**
     * Organization offering the job position.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var mixed
     */
    protected $hiringOrganization;

    /**
     * Description of bonus and commission compensation aspects of the job.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var string
     */
    protected $incentives;

    /**
     * The industry associated with the job position.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var string
     */
    protected $industry;

    /**
     * A (typically single) geographic location associated with the job
     * position.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var mixed
     */
    protected $jobLocation;

    /**
     * Category or categories describing the job. Use BLS O*NET-SOC taxonomy:
     * http://www.onetcenter.org/taxonomy.html. Ideally includes textual
     * label and formal code, with the property repeated for each applicable
     * value.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var string
     */
    protected $occupationalCategory;

    /**
     * Specific qualifications required for this role.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var string
     */
    protected $qualifications;

    /**
     * Responsibilities associated with this role.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var string
     */
    protected $responsibilities;

    /**
     * The currency (coded using ISO 4217,
     * http://en.wikipedia.org/wiki/ISO_4217 used for the main salary
     * information in this job posting.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var string
     */
    protected $salaryCurrency;

    /**
     * Skills required to fulfill this role.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var string
     */
    protected $skills;

    /**
     * Any special commitments associated with this job posting. Valid
     * entries include VeteranCommit, MilitarySpouseCommit, etc.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var string
     */
    protected $specialCommitments;

    /**
     * The title of the job.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var string
     */
    protected $title;

    /**
     * The typical working hours for this job (e.g. 1st shift, night shift,
     * 8am-5pm).
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var string
     */
    protected $workHours;

    /**
     * Getter of Base Salary
     * 
     * The base salary of the job.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return integer|long|float|decimal
     */
    public function getBaseSalary()
    {
        return $this->baseSalary;
    }

    /**
     * Setter of Base Salary
     * 
     * The base salary of the job.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param integer|long|float|decimal $value Value of baseSalary
     */
    public function setBaseSalary($value)
    {
        $this->baseSalary = $value;
    }

    /**
     * Getter of Benefits
     * 
     * Description of benefits associated with the job.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return string
     */
    public function getBenefits()
    {
        return $this->benefits;
    }

    /**
     * Setter of Benefits
     * 
     * Description of benefits associated with the job.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param string $value Value of benefits
     */
    public function setBenefits($value)
    {
        $this->benefits = $value;
    }

    /**
     * Getter of Date Posted
     * 
     * Publication date for the job posting.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return mixed
     */
    public function getDatePosted()
    {
        return $this->datePosted;
    }

    /**
     * Setter of Date Posted
     * 
     * Publication date for the job posting.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param mixed $value Value of datePosted
     */
    public function setDatePosted($value)
    {
        $this->datePosted = $value;
    }

    /**
     * Getter of Education Requirements
     * 
     * Educational background needed for the position.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return string
     */
    public function getEducationRequirements()
    {
        return $this->educationRequirements;
    }

    /**
     * Setter of Education Requirements
     * 
     * Educational background needed for the position.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param string $value Value of educationRequirements
     */
    public function setEducationRequirements($value)
    {
        $this->educationRequirements = $value;
    }

    /**
     * Getter of Employment Type
     * 
     * Type of employment (e.g. full-time, part-time, contract, temporary,
     * seasonal, internship).
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return string
     */
    public function getEmploymentType()
    {
        return $this->employmentType;
    }

    /**
     * Setter of Employment Type
     * 
     * Type of employment (e.g. full-time, part-time, contract, temporary,
     * seasonal, internship).
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param string $value Value of employmentType
     */
    public function setEmploymentType($value)
    {
        $this->employmentType = $value;
    }

    /**
     * Getter of Experience Requirements
     * 
     * Description of skills and experience needed for the position.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return string
     */
    public function getExperienceRequirements()
    {
        return $this->experienceRequirements;
    }

    /**
     * Setter of Experience Requirements
     * 
     * Description of skills and experience needed for the position.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param string $value Value of experienceRequirements
     */
    public function setExperienceRequirements($value)
    {
        $this->experienceRequirements = $value;
    }

    /**
     * Getter of Hiring Organization
     * 
     * Organization offering the job position.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return mixed
     */
    public function getHiringOrganization()
    {
        return $this->hiringOrganization;
    }

    /**
     * Setter of Hiring Organization
     * 
     * Organization offering the job position.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param mixed $value Value of hiringOrganization
     */
    public function setHiringOrganization($value)
    {
        $this->hiringOrganization = $value;
    }

    /**
     * Getter of Incentives
     * 
     * Description of bonus and commission compensation aspects of the job.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return string
     */
    public function getIncentives()
    {
        return $this->incentives;
    }

    /**
     * Setter of Incentives
     * 
     * Description of bonus and commission compensation aspects of the job.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param string $value Value of incentives
     */
    public function setIncentives($value)
    {
        $this->incentives = $value;
    }

    /**
     * Getter of Industry
     * 
     * The industry associated with the job position.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return string
     */
    public function getIndustry()
    {
        return $this->industry;
    }

    /**
     * Setter of Industry
     * 
     * The industry associated with the job position.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param string $value Value of industry
     */
    public function setIndustry($value)
    {
        $this->industry = $value;
    }

    /**
     * Getter of Job Location
     * 
     * A (typically single) geographic location associated with the job
     * position.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return mixed
     */
    public function getJobLocation()
    {
        return $this->jobLocation;
    }

    /**
     * Setter of Job Location
     * 
     * A (typically single) geographic location associated with the job
     * position.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param mixed $value Value of jobLocation
     */
    public function setJobLocation($value)
    {
        $this->jobLocation = $value;
    }

    /**
     * Getter of Occupational Category
     * 
     * Category or categories describing the job. Use BLS O*NET-SOC taxonomy:
     * http://www.onetcenter.org/taxonomy.html. Ideally includes textual
     * label and formal code, with the property repeated for each applicable
     * value.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return string
     */
    public function getOccupationalCategory()
    {
        return $this->occupationalCategory;
    }

    /**
     * Setter of Occupational Category
     * 
     * Category or categories describing the job. Use BLS O*NET-SOC taxonomy:
     * http://www.onetcenter.org/taxonomy.html. Ideally includes textual
     * label and formal code, with the property repeated for each applicable
     * value.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param string $value Value of occupationalCategory
     */
    public function setOccupationalCategory($value)
    {
        $this->occupationalCategory = $value;
    }

    /**
     * Getter of Qualifications
     * 
     * Specific qualifications required for this role.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return string
     */
    public function getQualifications()
    {
        return $this->qualifications;
    }

    /**
     * Setter of Qualifications
     * 
     * Specific qualifications required for this role.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param string $value Value of qualifications
     */
    public function setQualifications($value)
    {
        $this->qualifications = $value;
    }

    /**
     * Getter of Responsibilities
     * 
     * Responsibilities associated with this role.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return string
     */
    public function getResponsibilities()
    {
        return $this->responsibilities;
    }

    /**
     * Setter of Responsibilities
     * 
     * Responsibilities associated with this role.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param string $value Value of responsibilities
     */
    public function setResponsibilities($value)
    {
        $this->responsibilities = $value;
    }

    /**
     * Getter of Salary Currency
     * 
     * The currency (coded using ISO 4217,
     * http://en.wikipedia.org/wiki/ISO_4217 used for the main salary
     * information in this job posting.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return string
     */
    public function getSalaryCurrency()
    {
        return $this->salaryCurrency;
    }

    /**
     * Setter of Salary Currency
     * 
     * The currency (coded using ISO 4217,
     * http://en.wikipedia.org/wiki/ISO_4217 used for the main salary
     * information in this job posting.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param string $value Value of salaryCurrency
     */
    public function setSalaryCurrency($value)
    {
        $this->salaryCurrency = $value;
    }

    /**
     * Getter of Skills
     * 
     * Skills required to fulfill this role.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return string
     */
    public function getSkills()
    {
        return $this->skills;
    }

    /**
     * Setter of Skills
     * 
     * Skills required to fulfill this role.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param string $value Value of skills
     */
    public function setSkills($value)
    {
        $this->skills = $value;
    }

    /**
     * Getter of Special Commitments
     * 
     * Any special commitments associated with this job posting. Valid
     * entries include VeteranCommit, MilitarySpouseCommit, etc.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return string
     */
    public function getSpecialCommitments()
    {
        return $this->specialCommitments;
    }

    /**
     * Setter of Special Commitments
     * 
     * Any special commitments associated with this job posting. Valid
     * entries include VeteranCommit, MilitarySpouseCommit, etc.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param string $value Value of specialCommitments
     */
    public function setSpecialCommitments($value)
    {
        $this->specialCommitments = $value;
    }

    /**
     * Getter of Title
     * 
     * The title of the job.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Setter of Title
     * 
     * The title of the job.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param string $value Value of title
     */
    public function setTitle($value)
    {
        $this->title = $value;
    }

    /**
     * Getter of Work Hours
     * 
     * The typical working hours for this job (e.g. 1st shift, night shift,
     * 8am-5pm).
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return string
     */
    public function getWorkHours()
    {
        return $this->workHours;
    }

    /**
     * Setter of Work Hours
     * 
     * The typical working hours for this job (e.g. 1st shift, night shift,
     * 8am-5pm).
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param string $value Value of workHours
     */
    public function setWorkHours($value)
    {
        $this->workHours = $value;
    }
}
