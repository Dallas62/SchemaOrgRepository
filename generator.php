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

include 'functions.php';

$schema = loadSchema();
$properties = array();
$classtypes = array('' => null);


foreach ($schema as $key => $value) {
    switch ($key) {
        case "properties":
            foreach($value as $name => $element) {
                $properties[$name] = new Property($name, $element->label, $element->ranges, $element->comment_plain);
            }
            break;
        case "types":
            foreach($value as $name => $element) {
                $parentName = (count($element->ancestors))?$element->ancestors[count($element->ancestors) - 1]:'';
                $classtypes[$name] = new ClassType($name, $element->label, $element->comment_plain, $parentName, $element->properties);
            }
            break;
    }
}

foreach($classtypes as $classtype) {
    if($classtype !== null) { $classtype->setParent($classtypes[$classtype->getParentName()]); }
}

foreach($properties as $property) {
    foreach($classtypes as $classtype) {
        if($classtype !== null) { $classtype->addProperty($property); }
    }
}

deleteDir(__DIR__ . '/Bundle');
foreach($classtypes as $classtype) {
    if($classtype !== null) {
        $mode = 0775;
        $path = __DIR__ . '/Bundle/' . $classtype->getName() . 'Bundle/';
        mkdir($path.'Controler', $mode, true);
        mkdir($path.'DependencyInjection', $mode, true);
        mkdir($path.'Doctrine', $mode, true);
        mkdir($path.'Document', $mode, true);
        mkdir($path.'Entity', $mode, true);
        mkdir($path.'Form/Type', $mode, true);
        mkdir($path.'Model', $mode, true);
        mkdir($path.'Ressources/config', $mode, true);
        mkdir($path.'Ressources/translations', $mode, true);
        mkdir($path.'Tests', $mode, true);
        file_put_contents($path . '/Model/' . $classtype->getName() . 'Interface.php', $classtype->getInterface());
        file_put_contents($path . '/Model/Abstract' . $classtype->getName() . '.php', $classtype->getModel());
        file_put_contents($path . '/Document/Abstract' . $classtype->getName() . '.php', $classtype->getDocument());
        file_put_contents($path . '/Entity/Abstract' . $classtype->getName() . '.php', $classtype->getEntity());
        file_put_contents($path . '/Ressources/translations/form.en.yml', $classtype->getFormLanguage());
    }
}

echo "\n\nBundles Generated! look into " . __DIR__."/Bundle/ \n\n";