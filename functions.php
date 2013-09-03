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

include_once 'GeneratorClass/DataType.php';
include_once 'GeneratorClass/Property.php';
include_once 'GeneratorClass/ClassType.php';

/**
 * Get the schema from schema.org
 * 
 * @return array
 */
function loadSchema() {
    $cacheFileName = __DIR__.'/all.json.cache';
    // 24h Cache
    if(!file_exists($cacheFileName) || filemtime($cacheFileName) < time() - 24 * 60 * 60) {
        echo "Downloading...\n";
        $schema = file_get_contents('http://schema.rdfs.org/all.json');
        echo "Caching...\n";
        file_put_contents($cacheFileName, $schema);
    } else {
        echo "From Cache...\n";
        $schema = file_get_contents($cacheFileName);
    }
    echo "Loaded !\n";
    return json_decode($schema);
}

/**
 * default file header
 * 
 * @return type
 */
function phpFileHeader() {
    $header =   "<?php\n\n"
            .   "/**\n"
            .   " * The MIT License (MIT)\n"
            .   " * \n"
            .   " * Copyright (c) " . date('Y') . " Tacyniak Boris <boris.tacyniak@free.fr>\n"
            .   " * \n"
            .   " * Permission is hereby granted, free of charge, to any person obtaining a copy\n"
            .   " * of this software and associated documentation files (the \"Software\"), to deal\n"
            .   " * in the Software without restriction, including without limitation the rights\n"
            .   " * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell\n"
            .   " * copies of the Software, and to permit persons to whom the Software is\n"
            .   " * furnished to do so, subject to the following conditions:\n"
            .   " * \n"
            .   " * The above copyright notice and this permission notice shall be included in\n"
            .   " * all copies or substantial portions of the Software.\n"
            .   " * \n"
            .   " * THE SOFTWARE IS PROVIDED \"AS IS\", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR\n"
            .   " * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,\n"
            .   " * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE\n"
            .   " * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER\n"
            .   " * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,\n"
            .   " * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN\n"
            .   " * THE SOFTWARE.\n"
            .   " */\n\n";
    return $header;
}

function classTypeNameSpace($classTypeName, $folder = '', $classLoaded = '') {
    return 'SchemaRepository\\Bundle\\'.$classTypeName. 'Bundle' . ( (!empty($folder) ? '\\'.$folder : '') ) . ( (!empty($classLoaded) ? '\\'.$classLoaded : '') ) ;
}

function deleteDir($path, $deleteRoot = false)
{
    return !empty($path) && is_file($path) ?
        @unlink($path) :
        (array_reduce(glob($path.'/*'), function ($r, $i) { return $r && deleteDir($i, true); }, TRUE)) && ($deleteRoot && rmdir($path));
}