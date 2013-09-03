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

namespace SchemaRepository\Bundle\DatasetBundle\Model;

use SchemaRepository\Bundle\DatasetBundle\Model\DatasetInterface;
use SchemaRepository\Bundle\CreativeWorkBundle\Model\AbstractCreativeWork;

/**
 * Model of Dataset
 * 
 * @author SchemaGenerator <dallas62@free.fr>
 * @package SchemaRepository\Bundle\DatasetBundle\Model
 */
abstract class AbstractDataset extends AbstractCreativeWork implements DatasetInterface
{

    /**
     * A data catalog which contains a dataset.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var mixed
     */
    protected $catalog;

    /**
     * A downloadable form of this dataset, at a specific location, in a
     * specific format.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var mixed
     */
    protected $distribution;

    /**
     * The range of spatial applicability of a dataset, e.g. for a dataset of
     * New York weather, the state of New York.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var mixed
     */
    protected $spatial;

    /**
     * The range of temporal applicability of a dataset, e.g. for a 2011
     * census dataset, the year 2011 (in ISO 8601 time interval format).
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var \DateTime
     */
    protected $temporal;

    /**
     * Getter of Catalog
     * 
     * A data catalog which contains a dataset.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return mixed
     */
    public function getCatalog()
    {
        return $this->catalog;
    }

    /**
     * Setter of Catalog
     * 
     * A data catalog which contains a dataset.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param mixed $value Value of catalog
     */
    public function setCatalog($value)
    {
        $this->catalog = $value;
    }

    /**
     * Getter of Distribution
     * 
     * A downloadable form of this dataset, at a specific location, in a
     * specific format.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return mixed
     */
    public function getDistribution()
    {
        return $this->distribution;
    }

    /**
     * Setter of Distribution
     * 
     * A downloadable form of this dataset, at a specific location, in a
     * specific format.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param mixed $value Value of distribution
     */
    public function setDistribution($value)
    {
        $this->distribution = $value;
    }

    /**
     * Getter of Spatial
     * 
     * The range of spatial applicability of a dataset, e.g. for a dataset of
     * New York weather, the state of New York.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return mixed
     */
    public function getSpatial()
    {
        return $this->spatial;
    }

    /**
     * Setter of Spatial
     * 
     * The range of spatial applicability of a dataset, e.g. for a dataset of
     * New York weather, the state of New York.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param mixed $value Value of spatial
     */
    public function setSpatial($value)
    {
        $this->spatial = $value;
    }

    /**
     * Getter of Temporal
     * 
     * The range of temporal applicability of a dataset, e.g. for a 2011
     * census dataset, the year 2011 (in ISO 8601 time interval format).
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return \DateTime
     */
    public function getTemporal()
    {
        return $this->temporal;
    }

    /**
     * Setter of Temporal
     * 
     * The range of temporal applicability of a dataset, e.g. for a 2011
     * census dataset, the year 2011 (in ISO 8601 time interval format).
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param \DateTime $value Value of temporal
     */
    public function setTemporal($value)
    {
        $this->temporal = $value;
    }
}
