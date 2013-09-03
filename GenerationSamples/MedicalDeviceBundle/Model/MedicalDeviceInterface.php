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

namespace SchemaRepository\Bundle\MedicalDeviceBundle\Model;

use SchemaRepository\Bundle\MedicalEntityBundle\Model\MedicalEntityInterface;

/**
 * Interface of Medical Device Model
 * 
 * @author SchemaGenerator <dallas62@free.fr>
 * @package SchemaRepository\Bundle\MedicalDeviceBundle\Model
 */
interface MedicalDeviceInterface extends MedicalEntityInterface
{

    /**
     * Getter of Adverse Outcome
     * 
     * A possible complication and/or side effect of this therapy. If it is
     * known that an adverse outcome is serious (resulting in death,
     * disability, or permanent damage; requiring hospitalization; or is
     * otherwise life-threatening or requires immediate medical attention),
     * tag it as a seriouseAdverseOutcome instead.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return mixed
     */
    public function getAdverseOutcome();

    /**
     * Getter of Contraindication
     * 
     * A contraindication for this therapy.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return mixed
     */
    public function getContraindication();

    /**
     * Getter of Indication
     * 
     * A factor that indicates use of this therapy for treatment and/or
     * prevention of a condition, symptom, etc. For therapies such as drugs,
     * indications can include both officially-approved indications as well
     * as off-label uses. These can be distinguished by using the
     * ApprovedIndication subtype of MedicalIndication.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return mixed
     */
    public function getIndication();

    /**
     * Getter of Post Op
     * 
     * A description of the postoperative procedures, care, and/or followups
     * for this device.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return string
     */
    public function getPostOp();

    /**
     * Getter of Pre Op
     * 
     * A description of the workup, testing, and other preparations required
     * before implanting this device.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return string
     */
    public function getPreOp();

    /**
     * Getter of Procedure
     * 
     * A description of the procedure involved in setting up, using, and/or
     * installing the device.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return string
     */
    public function getProcedure();

    /**
     * Getter of Purpose
     * 
     * A goal towards an action is taken. Can be concrete or abstract.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return mixed
     */
    public function getPurpose();

    /**
     * Getter of Serious Adverse Outcome
     * 
     * A possible serious complication and/or serious side effect of this
     * therapy. Serious adverse outcomes include those that are
     * life-threatening; result in death, disability, or permanent damage;
     * require hospitalization or prolong existing hospitalization; cause
     * congenital anomalies or birth defects; or jeopardize the patient and
     * may require medical or surgical intervention to prevent one of the
     * outcomes in this definition.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return mixed
     */
    public function getSeriousAdverseOutcome();
}
