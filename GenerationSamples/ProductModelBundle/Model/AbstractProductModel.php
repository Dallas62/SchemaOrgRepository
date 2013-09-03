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

namespace SchemaRepository\Bundle\ProductModelBundle\Model;

use SchemaRepository\Bundle\ProductModelBundle\Model\ProductModelInterface;
use SchemaRepository\Bundle\ProductBundle\Model\AbstractProduct;

/**
 * Model of Product Model
 * 
 * @author SchemaGenerator <dallas62@free.fr>
 * @package SchemaRepository\Bundle\ProductModelBundle\Model
 */
abstract class AbstractProductModel extends AbstractProduct implements ProductModelInterface
{

    /**
     * A pointer to a base product from which this product is a variant. It
     * is safe to infer that the variant inherits all product features from
     * the base model, unless defined locally. This is not transitive.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var mixed
     */
    protected $isVariantOf;

    /**
     * A pointer from a previous, often discontinued variant of the product
     * to its newer variant.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var mixed
     */
    protected $predecessorOf;

    /**
     * A pointer from a newer variant of a product  to its previous, often
     * discontinued predecessor.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var mixed
     */
    protected $successorOf;

    /**
     * Getter of Is Variant of
     * 
     * A pointer to a base product from which this product is a variant. It
     * is safe to infer that the variant inherits all product features from
     * the base model, unless defined locally. This is not transitive.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return mixed
     */
    public function getIsVariantOf()
    {
        return $this->isVariantOf;
    }

    /**
     * Setter of Is Variant of
     * 
     * A pointer to a base product from which this product is a variant. It
     * is safe to infer that the variant inherits all product features from
     * the base model, unless defined locally. This is not transitive.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param mixed $value Value of isVariantOf
     */
    public function setIsVariantOf($value)
    {
        $this->isVariantOf = $value;
    }

    /**
     * Getter of Predecessor of
     * 
     * A pointer from a previous, often discontinued variant of the product
     * to its newer variant.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return mixed
     */
    public function getPredecessorOf()
    {
        return $this->predecessorOf;
    }

    /**
     * Setter of Predecessor of
     * 
     * A pointer from a previous, often discontinued variant of the product
     * to its newer variant.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param mixed $value Value of predecessorOf
     */
    public function setPredecessorOf($value)
    {
        $this->predecessorOf = $value;
    }

    /**
     * Getter of Successor of
     * 
     * A pointer from a newer variant of a product  to its previous, often
     * discontinued predecessor.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return mixed
     */
    public function getSuccessorOf()
    {
        return $this->successorOf;
    }

    /**
     * Setter of Successor of
     * 
     * A pointer from a newer variant of a product  to its previous, often
     * discontinued predecessor.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param mixed $value Value of successorOf
     */
    public function setSuccessorOf($value)
    {
        $this->successorOf = $value;
    }
}
