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

namespace SchemaRepository\Bundle\MusicRecordingBundle\Model;

use SchemaRepository\Bundle\MusicRecordingBundle\Model\MusicRecordingInterface;
use SchemaRepository\Bundle\CreativeWorkBundle\Model\AbstractCreativeWork;

/**
 * Model of Music Recording
 * 
 * @author SchemaGenerator <dallas62@free.fr>
 * @package SchemaRepository\Bundle\MusicRecordingBundle\Model
 */
abstract class AbstractMusicRecording extends AbstractCreativeWork implements MusicRecordingInterface
{

    /**
     * The artist that performed this album or recording.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var mixed
     */
    protected $byArtist;

    /**
     * The duration of the item (movie, audio recording, event, etc.) in ISO
     * 8601 date format.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var mixed
     */
    protected $duration;

    /**
     * The album to which this recording belongs.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var mixed
     */
    protected $inAlbum;

    /**
     * The playlist to which this recording belongs.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var mixed
     */
    protected $inPlaylist;

    /**
     * Getter of By Artist
     * 
     * The artist that performed this album or recording.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return mixed
     */
    public function getByArtist()
    {
        return $this->byArtist;
    }

    /**
     * Setter of By Artist
     * 
     * The artist that performed this album or recording.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param mixed $value Value of byArtist
     */
    public function setByArtist($value)
    {
        $this->byArtist = $value;
    }

    /**
     * Getter of Duration
     * 
     * The duration of the item (movie, audio recording, event, etc.) in ISO
     * 8601 date format.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return mixed
     */
    public function getDuration()
    {
        return $this->duration;
    }

    /**
     * Setter of Duration
     * 
     * The duration of the item (movie, audio recording, event, etc.) in ISO
     * 8601 date format.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param mixed $value Value of duration
     */
    public function setDuration($value)
    {
        $this->duration = $value;
    }

    /**
     * Getter of In Album
     * 
     * The album to which this recording belongs.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return mixed
     */
    public function getInAlbum()
    {
        return $this->inAlbum;
    }

    /**
     * Setter of In Album
     * 
     * The album to which this recording belongs.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param mixed $value Value of inAlbum
     */
    public function setInAlbum($value)
    {
        $this->inAlbum = $value;
    }

    /**
     * Getter of In Playlist
     * 
     * The playlist to which this recording belongs.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return mixed
     */
    public function getInPlaylist()
    {
        return $this->inPlaylist;
    }

    /**
     * Setter of In Playlist
     * 
     * The playlist to which this recording belongs.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param mixed $value Value of inPlaylist
     */
    public function setInPlaylist($value)
    {
        $this->inPlaylist = $value;
    }
}
