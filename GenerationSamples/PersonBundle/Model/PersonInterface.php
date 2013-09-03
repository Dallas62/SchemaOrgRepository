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

namespace SchemaRepository\Bundle\PersonBundle\Model;

use SchemaRepository\Bundle\ThingBundle\Model\ThingInterface;

/**
 * Interface of Person Model
 * 
 * @author SchemaGenerator <dallas62@free.fr>
 * @package SchemaRepository\Bundle\PersonBundle\Model
 */
interface PersonInterface extends ThingInterface
{

    /**
     * Getter of Additional Name
     * 
     * An additional name for a Person, can be used for a middle name.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return string
     */
    public function getAdditionalName();

    /**
     * Getter of Address
     * 
     * Physical address of the item.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return mixed
     */
    public function getAddress();

    /**
     * Getter of Affiliation
     * 
     * An organization that this person is affiliated with. For example, a
     * school/university, a club, or a team.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return mixed
     */
    public function getAffiliation();

    /**
     * Getter of Alumni of
     * 
     * An educational organizations that the person is an alumni of.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return mixed
     */
    public function getAlumniOf();

    /**
     * Getter of Award
     * 
     * An award won by this person or for this creative work.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return string
     */
    public function getAward();

    /**
     * Getter of Awards
     * 
     * Awards won by this person or for this creative work. (legacy spelling;
     * see singular form, award)
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return string
     */
    public function getAwards();

    /**
     * Getter of Birth Date
     * 
     * Date of birth.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return mixed
     */
    public function getBirthDate();

    /**
     * Getter of Brand
     * 
     * The brand(s) associated with a product or service, or the brand(s)
     * maintained by an organization or business person.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return mixed
     */
    public function getBrand();

    /**
     * Getter of Children
     * 
     * A child of the person.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return mixed
     */
    public function getChildren();

    /**
     * Getter of Colleague
     * 
     * A colleague of the person.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return mixed
     */
    public function getColleague();

    /**
     * Getter of Colleagues
     * 
     * A colleague of the person (legacy spelling; see singular form,
     * colleague).
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return array
     */
    public function getColleagues();

    /**
     * Getter of Contact Point
     * 
     * A contact point for a person or organization.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return mixed
     */
    public function getContactPoint();

    /**
     * Getter of Contact Points
     * 
     * A contact point for a person or organization (legacy spelling; see
     * singular form, contactPoint).
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return array
     */
    public function getContactPoints();

    /**
     * Getter of Death Date
     * 
     * Date of death.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return mixed
     */
    public function getDeathDate();

    /**
     * Getter of Duns
     * 
     * The Dun & Bradstreet DUNS number for identifying an organization or
     * business person.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return string
     */
    public function getDuns();

    /**
     * Getter of Email
     * 
     * Email address.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return string
     */
    public function getEmail();

    /**
     * Getter of Family Name
     * 
     * Family name. In the U.S., the last name of an Person. This can be used
     * along with givenName instead of the Name property.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return string
     */
    public function getFamilyName();

    /**
     * Getter of Fax Number
     * 
     * The fax number.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return string
     */
    public function getFaxNumber();

    /**
     * Getter of Follows
     * 
     * The most generic uni-directional social relation.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return mixed
     */
    public function getFollows();

    /**
     * Getter of Gender
     * 
     * Gender of the person.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return string
     */
    public function getGender();

    /**
     * Getter of Given Name
     * 
     * Given name. In the U.S., the first name of a Person. This can be used
     * along with familyName instead of the Name property.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return string
     */
    public function getGivenName();

    /**
     * Getter of Global Location Number
     * 
     * The Global Location Number (GLN, sometimes also referred to as
     * International Location Number or ILN) of the respective organization,
     * person, or place. The GLN is a 13-digit number used to identify
     * parties and physical locations.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return string
     */
    public function getGlobalLocationNumber();

    /**
     * Getter of Has POS
     * 
     * Points-of-Sales operated by the organization or person.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return mixed
     */
    public function getHasPOS();

    /**
     * Getter of Home Location
     * 
     * A contact location for a person's residence.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return mixed
     */
    public function getHomeLocation();

    /**
     * Getter of Honorific Prefix
     * 
     * An honorific prefix preceding a Person's name such as Dr/Mrs/Mr.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return string
     */
    public function getHonorificPrefix();

    /**
     * Getter of Honorific Suffix
     * 
     * An honorific suffix preceding a Person's name such as M.D. /PhD/MSCSW.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return string
     */
    public function getHonorificSuffix();

    /**
     * Getter of Interaction Count
     * 
     * A count of a specific user interactions with this item—for example,
     * 20 UserLikes, 5 UserComments, or 300 UserDownloads. The user
     * interaction type should be one of the sub types of UserInteraction.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return string
     */
    public function getInteractionCount();

    /**
     * Getter of Isic V4
     * 
     * The International Standard of Industrial Classification of All
     * Economic Activities (ISIC), Revision 4 code for a particular
     * organization, business person, or place.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return string
     */
    public function getIsicV4();

    /**
     * Getter of Job Title
     * 
     * The job title of the person (for example, Financial Manager).
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return string
     */
    public function getJobTitle();

    /**
     * Getter of Knows
     * 
     * The most generic bi-directional social/work relation.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return mixed
     */
    public function getKnows();

    /**
     * Getter of Makes Offer
     * 
     * A pointer to products or services offered by the organization or
     * person.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return mixed
     */
    public function getMakesOffer();

    /**
     * Getter of Member of
     * 
     * An organization to which the person belongs.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return mixed
     */
    public function getMemberOf();

    /**
     * Getter of Naics
     * 
     * The North American Industry Classification System (NAICS) code for a
     * particular organization or business person.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return string
     */
    public function getNaics();

    /**
     * Getter of Nationality
     * 
     * Nationality of the person.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return mixed
     */
    public function getNationality();

    /**
     * Getter of Owns
     * 
     * Products owned by the organization or person.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return mixed
     */
    public function getOwns();

    /**
     * Getter of Parent
     * 
     * A parent of this person.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return mixed
     */
    public function getParent();

    /**
     * Getter of Parents
     * 
     * A parents of the person (legacy spelling; see singular form, parent).
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return array
     */
    public function getParents();

    /**
     * Getter of Performer in
     * 
     * Event that this person is a performer or participant in.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return mixed
     */
    public function getPerformerIn();

    /**
     * Getter of Related to
     * 
     * The most generic familial relation.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return mixed
     */
    public function getRelatedTo();

    /**
     * Getter of Seeks
     * 
     * A pointer to products or services sought by the organization or person
     * (demand).
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return mixed
     */
    public function getSeeks();

    /**
     * Getter of Sibling
     * 
     * A sibling of the person.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return mixed
     */
    public function getSibling();

    /**
     * Getter of Siblings
     * 
     * A sibling of the person (legacy spelling; see singular form, sibling).
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return array
     */
    public function getSiblings();

    /**
     * Getter of Spouse
     * 
     * The person's spouse.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return mixed
     */
    public function getSpouse();

    /**
     * Getter of Tax ID
     * 
     * The Tax / Fiscal ID of the organization or person, e.g. the TIN in the
     * US or the CIF/NIF in Spain.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return string
     */
    public function getTaxID();

    /**
     * Getter of Telephone
     * 
     * The telephone number.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return string
     */
    public function getTelephone();

    /**
     * Getter of Vat ID
     * 
     * The Value-added Tax ID of the organisation or person.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return string
     */
    public function getVatID();

    /**
     * Getter of Work Location
     * 
     * A contact location for a person's place of work.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return mixed
     */
    public function getWorkLocation();

    /**
     * Getter of Works for
     * 
     * Organizations that the person works for.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return mixed
     */
    public function getWorksFor();
}
