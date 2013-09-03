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

use SchemaRepository\Bundle\IntangibleBundle\Model\IntangibleInterface;

/**
 * Interface of Job Posting Model
 * 
 * @author SchemaGenerator <dallas62@free.fr>
 * @package SchemaRepository\Bundle\JobPostingBundle\Model
 */
interface JobPostingInterface extends IntangibleInterface
{

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
    public function getBaseSalary();

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
    public function getBenefits();

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
    public function getDatePosted();

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
    public function getEducationRequirements();

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
    public function getEmploymentType();

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
    public function getExperienceRequirements();

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
    public function getHiringOrganization();

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
    public function getIncentives();

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
    public function getIndustry();

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
    public function getJobLocation();

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
    public function getOccupationalCategory();

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
    public function getQualifications();

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
    public function getResponsibilities();

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
    public function getSalaryCurrency();

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
    public function getSkills();

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
    public function getSpecialCommitments();

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
    public function getTitle();

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
    public function getWorkHours();
}
