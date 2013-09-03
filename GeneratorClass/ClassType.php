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

class ClassType {
    
    private $name;
    
    private $label;
    
    private $properties = array();
    
    private $propertiesList;
    
    private $comment;
    
    private $parentName = '';
    
    private $parent = null;
    
    /**
     * @param string $name
     * @param string $comment
     * @param array  $propertiesList
     */
    public function __construct($name, $label, $comment, $parentName, $propertiesList) {
        $this->name = $name;
        $this->label = $label;
        $this->comment = $comment;
        $this->propertiesList = $propertiesList;
        $this->parentName = $parentName;
    }

    public function setParent(&$parent) {
        $this->parent = $parent;
    }

    public function addProperty($property) {
        if(
            (
                $this->parent !== null
                && !$this->parent->propertyExist($property->getName()) || $this->parent === null
            ) && $this->propertyExist($property->getName())
        ) {
            $this->properties[$property->getName()] = $property;
        }
    }

    public function getParentName() {
        return $this->parentName;
    }
    
    public function getLabel() {
        return $this->label;
    }
    
    public function getName() {
        return $this->name;
    }

    public function propertyExist($name) {
        return in_array($name, $this->propertiesList);
    }

    public function getInterface() {
        $interface =    phpFileHeader()
                    .   "namespace " . classTypeNameSpace($this->getName(), 'Model') . ";\n\n";
        if($this->parent !== null) {
            $interface .=   "use " . classTypeNameSpace($this->parent->getName(), 'Model', $this->parent->getName().'Interface') . ";\n\n";
        }
        $interface .=   "/**\n"
                    .   " * Interface of {$this->getLabel()} Model\n"
                    .   " * \n"
                    .   " * @author SchemaGenerator <dallas62@free.fr>\n"
                    .   " * @package " . classTypeNameSpace($this->getName(), 'Model') . "\n"
                    .   " */\n"
                    .   "interface {$this->getName()}Interface";
        if($this->parent !== null) {
            $interface .=   " extends " . $this->parent->getName().'Interface';
        }
        $interface .=   "\n{\n";
        foreach ($this->properties as $property) {
            $interface .= $property->getGetterInterface();
        }
        $interface .=   "}\n";
        return $interface;
    }

    public function getModel() {
        $model =    phpFileHeader()
                .   "namespace " . classTypeNameSpace($this->getName(), 'Model') . ";\n\n"
                .   "use " . classTypeNameSpace($this->getName(), 'Model', $this->getName().'Interface') . ";\n";
        if($this->parent !== null) {
            $model .=   "use " . classTypeNameSpace($this->parent->getName(), 'Model', 'Abstract' . $this->parent->getName()) . ";\n\n";
        }
        
        $model .=   "/**\n"
                .   " * Model of {$this->getLabel()}\n"
                .   " * \n"
                .   " * @author SchemaGenerator <dallas62@free.fr>\n"
                .   " * @package " . classTypeNameSpace($this->getName(), 'Model') . "\n"
                .   " */\n"
                .   "abstract class Abstract{$this->getName()}";
        if($this->parent !== null) {
            $model .=   " extends Abstract" . $this->parent->getName();
        }
            $model .=   " implements " . $this->getName() . "Interface";
        $model .=   "\n{\n";
        foreach ($this->properties as $property) {
            $model .= $property->getAttributeDeclaration();
        }
        foreach ($this->properties as $property) {
            $model .= $property->getGetter();
            $model .= $property->getSetter();
        }
        $model .=   "}\n";
        return $model;
    }

    public function getDocument() {
        global $properties;
        $document = phpFileHeader()
                .   "namespace " . classTypeNameSpace($this->getName(), 'Document') . ";\n\n"
                .   "use " . classTypeNameSpace($this->getName(), 'Model', 'Abstract'.$this->getName()) . ";\n"
                .   "use Doctrine\ODM\MongoDB\Mapping\Annotations as ODM;\n"
                .   "use Symfony\Component\Validator\Constraints as Assert;\n\n"
                .   "/**\n"
                .   " * {$this->getLabel()} Document\n"
                .   " *\n"
                .   " * @ODM\MappedSuperclass()\n"
                .   " */\n"
                .   "abstract class Abstract{$this->name} extends Abstract{$this->name}\n"
                .   "{\n";
        foreach ($this->propertiesList as $property) {
            $document .=   "\n    /**\n";
            $document .=   "     * {@inheritdoc}\n";
            $document .=   "     * \n";
            switch($properties[$property]->getType()) {
                case 'string':
                    $document .=   "     * @ODM\String\n";
                    $document .=   "     * @Assert\Type(type=\"string\")\n";
                    break;
                case '\\DateTime':
                    $document .=   "     * @ODM\DateTime\n";
                    break;
                case 'array':
                    $document .=   "     * @ODM\Raw\n";
                    break;
                default:
                    if($properties[$property]->getName() !== 'id') {
                        $document .=   "     * @ODM\Field\n";
                    } else {
                        $document .=   "     * @ODM\Id\n";
                    }
            }
            $document .=   "     */\n";
            $document .=   "     protected \${$property};\n";
        }
        $document .=   "}\n";
        return $document;
    }

    public function getEntity() {
        global $properties;
        $entity = phpFileHeader()
                .   "namespace " . classTypeNameSpace($this->getName(), 'Entity') . ";\n\n"
                .   "use " . classTypeNameSpace($this->getName(), 'Model', 'Abstract'.$this->getName()) . ";\n"
                .   "use Doctrine\ORM\Mapping as ORM;\n"
                .   "use Symfony\Component\Validator\Constraints as Assert;\n\n"
                .   "/**\n"
                .   " * {$this->getLabel()} Entity\n"
                .   " *\n"
                .   " * @ODM\MappedSuperclass()\n"
                .   " */\n"
                .   "abstract class Abstract{$this->name} extends Abstract{$this->name}\n"
                .   "{\n";
        foreach ($this->propertiesList as $property) {
            $entity .=   "\n    /**\n";
            $entity .=   "     * {@inheritdoc}\n";
            $entity .=   "     * \n";
            $name = strtolower(preg_replace('/\B([A-Z]{1,})/', "_$1", $property));
            switch($properties[$property]->getType()) {
                case 'string':
                    $entity .=   "     * @ORM\Column(name=\"$name\", type=\"string\", nullable=true)\n";
                    $entity .=   "     * @Assert\Type(type=\"string\")\n";
                    break;
                case '\\DateTime':
                    $entity .=   "     * @ORM\Column(name=\"$name\", type=\"datetime\", nullable=true)\n";
                    break;
                case 'integer|long|float|decimal':
                    $entity .=   "     * @ORM\Column(name=\"$name\", type=\"float\", nullable=true)\n";
                    break;
                case 'float|decimal':
                    $entity .=   "     * @ORM\Column(name=\"$name\", type=\"float\", nullable=true)\n";
                    break;
                case 'integer|long':
                    if($properties[$property]->getName() !== 'id') {
                        $entity .=   "     * @ORM\Column(name=\"$name\", type=\"integer\", nullable=true)\n";
                    } else {
                        $entity .=   "     * @ORM\Column(name=\"id\", type=\"integer\")\n";
                        $entity .=   "     * @ORM\Id\n";
                        $entity .=   "     * @ORM\GeneratedValue(strategy=\"AUTO\")\n";
                    }
                    break;
                case 'bool':
                    $entity .=   "     * @ORM\Column(name=\"$name\", type=\"boolean\", nullable=true)\n";
                    break;
                case 'array':
                    $entity .=   "     * @ORM\Column(name=\"$name\", type=\"array\", nullable=true)\n";
                    break;
                default:
                    $entity .=   "     * @ORM\Column(name=\"$name\", type=\"string\", nullable=true)\n";
            }
            $entity .=   "     */\n";
            $entity .=   "     protected \${$property};\n";
        }
        $entity .=   "}\n";
        return $entity;
    }

    public function getFormLanguage() {
        global $properties;
        $language = '';
        foreach(array('admin', 'www') as $env) {
            $language .= "$env:\n"
                    .   "    {$this->name}:\n";
            foreach ($this->propertiesList as $property) {
                $language .= "         $property:\n";
                $language .= "             text: " . $properties[$property]->getLabel() . "\n";
            }
        }
        return $language;
    }
}