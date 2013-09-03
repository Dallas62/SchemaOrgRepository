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

class Property {
    private $name;

    private $label;

    private $type;

    private $realType;

    private $comment;

    /**
     * @param string $name
     * @param string $type
     */
    public function __construct($name, $label, $type, $comment) {
        global $properties;
        if(substr($name, -1) == 's' && $type[0] !== 'Text' && $type[0] !== 'URL' && isset($properties[substr($name, 0, -1)])) {
            $type = array('Array');
        }
        $this->name = $name;
        $this->label = $label;
        $this->realType = $type;
        $this->type = DataType::getPhpType($type);
        $this->comment = $comment;
    }

    /**
     * return the php code of attribute declaration
     * 
     * @return string
     */
    public function getAttributeDeclaration() {
        $function   =   "\n    /**\n"
                    .   "     * " . wordwrap($this->comment, 70, "\n     * ", true) . "\n"
                    .   "     * \n"
                    .   "     * @author SchemaGenerator <dallas62@free.fr>\n"
                    .   "     * \n"
                    .   "     * @access protected\n"
                    .   "     * @var {$this->type}\n"
                    .   "     */\n"
                    .   "    protected \${$this->name};\n";
        return $function;
    }

    /**
     * Return the getter Comment
     * 
     * @return string
     */
    private function getterComment() {
        return  "\n    /**\n"
            .   "     * Getter of {$this->label}\n"
            .   "     * \n"
            .   "     * " . wordwrap($this->comment, 70, "\n     * ", true) . "\n"
            .   "     * \n"
            .   "     * @author SchemaGenerator <dallas62@free.fr>\n"
            .   "     * \n"
            .   "     * @access public\n"
            .   "     * \n"
            .   "     * @return {$this->type}\n"
            .   "     */\n";
    }

    /**
     * return the php code of getter
     * 
     * @return string
     */
    public function getGetter() {
        $function   =   $this->getterComment()
                    .   "    public function get" . ucfirst($this->name) . "()\n"
                    .   "    {\n"
                    .   "        return \$this->{$this->name};\n"
                    .   "    }\n";
        return $function;
    }

    /**
     * return the php code of getter interface
     * 
     * @return string
     */
    public function getGetterInterface() {
        $function   =   $this->getterComment()
                    .   "    public function get" . ucfirst($this->name) . "();\n";
        return $function;
    }

    /**
     * Return the setter Comment
     * 
     * @return string
     */
    private function setterComment() {
        return  "\n    /**\n"
            .   "     * Setter of {$this->label}\n"
            .   "     * \n"
            .   "     * " . wordwrap($this->comment, 70, "\n     * ", true) . "\n"
            .   "     * \n"
            .   "     * @author SchemaGenerator <dallas62@free.fr>\n"
            .   "     * \n"
            .   "     * @access public\n"
            .   "     * \n"
            .   "     * @param {$this->type} \$value Value of {$this->name}\n"
            .   "     */\n";
    }

    /**
     * return the php code of setter
     * 
     * @return string
     */
    public function getSetter() {
        $function   =   $this->setterComment()
                    .   "    public function set" . ucfirst($this->name) . "(\$value)\n"
                    .   "    {\n"
                    .   "        \$this->{$this->name} = \$value;\n"
                    .   "    }\n";
        if($this->type === 'array') {
            $function .= $this->getArraySetter();
        }
        return $function;
    }

    private function getArraySetter() {
        $function   =   "\n    /*\n"
                    .   "     * Add " . substr($this->name, 0, -1) . " to Array\n"
                    .   "     * \n"
                    .   "     * @author SchemaGenerator <dallas62@free.fr>\n"
                    .   "     * \n"
                    .   "     * @access public\n"
                    .   "     * \n"
                    .   "     * @param mixed \$value Value of " . substr($this->name, 0, -1) . "\n"
                    .   "     */\n"
                    .   "    public function add" . ucfirst(substr($this->name, 0, -1)) . "(\$value)\n"
                    .   "    {\n"
                    .   "        \$this->{$this->name}[] = \$value;\n"
                    .   "    }\n"
                    .   "\n    /*\n"
                    .   "     * Remove " . substr($this->name, 0, -1) . " to Array\n"
                    .   "     * \n"
                    .   "     * @author SchemaGenerator <dallas62@free.fr>\n"
                    .   "     * \n"
                    .   "     * @access public\n"
                    .   "     * \n"
                    .   "     * @param mixed \$value Value of " . substr($this->name, 0, -1) . "\n"
                    .   "     */\n"
                    .   "    public function remove" . ucfirst(substr($this->name, 0, -1)) . "(\$value)\n"
                    .   "    {\n"
                    .   "        \$key = array_search(\$value, \$this->{$this->name});\n"
                    .   "        if(\$key !== false) {\n"
                    .   "           unset(\$this->{$this->name}[\$key]);\n"
                    .   "        }\n"
                    .   "    }\n";
        return $function;
    }

    /**
     * return the php code of setter interface
     * 
     * @return string
     */
    public function getSetterInterface() {
        $function   =   $this->setterComment(true)
                    .   "    public function set" . ucfirst($this->name) . "(\$value);\n\n";
        return $function;
    }

    /**
     * return the name of the property
     * 
     * @return string
     */
    public function getLabel()
    {
        return $this->label;
    }

    /**
     * return the name of the property
     * 
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * return the type of the property
     * 
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }
}