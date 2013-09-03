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

namespace SchemaRepository\Bundle\MusicPlaylistBundle\Model;

use SchemaRepository\Bundle\MusicPlaylistBundle\Model\MusicPlaylistInterface;
use SchemaRepository\Bundle\CreativeWorkBundle\Model\AbstractCreativeWork;

/**
 * Model of Music Playlist
 * 
 * @author SchemaGenerator <dallas62@free.fr>
 * @package SchemaRepository\Bundle\MusicPlaylistBundle\Model
 */
abstract class AbstractMusicPlaylist extends AbstractCreativeWork implements MusicPlaylistInterface
{

    /**
     * The number of tracks in this album or playlist.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var integer|long
     */
    protected $numTracks;

    /**
     * A music recording (track)—usually a single song.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var mixed
     */
    protected $track;

    /**
     * A music recording (track)—usually a single song (legacy spelling;
     * see singular form, track).
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var array
     */
    protected $tracks;

    /**
     * Getter of Num Tracks
     * 
     * The number of tracks in this album or playlist.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return integer|long
     */
    public function getNumTracks()
    {
        return $this->numTracks;
    }

    /**
     * Setter of Num Tracks
     * 
     * The number of tracks in this album or playlist.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param integer|long $value Value of numTracks
     */
    public function setNumTracks($value)
    {
        $this->numTracks = $value;
    }

    /**
     * Getter of Track
     * 
     * A music recording (track)—usually a single song.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return mixed
     */
    public function getTrack()
    {
        return $this->track;
    }

    /**
     * Setter of Track
     * 
     * A music recording (track)—usually a single song.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param mixed $value Value of track
     */
    public function setTrack($value)
    {
        $this->track = $value;
    }

    /**
     * Getter of Tracks
     * 
     * A music recording (track)—usually a single song (legacy spelling;
     * see singular form, track).
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return array
     */
    public function getTracks()
    {
        return $this->tracks;
    }

    /**
     * Setter of Tracks
     * 
     * A music recording (track)—usually a single song (legacy spelling;
     * see singular form, track).
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param array $value Value of tracks
     */
    public function setTracks($value)
    {
        $this->tracks = $value;
    }

    /*
     * Add track to Array
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param mixed $value Value of track
     */
    public function addTrack($value)
    {
        $this->tracks[] = $value;
    }

    /*
     * Remove track to Array
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param mixed $value Value of track
     */
    public function removeTrack($value)
    {
        $key = array_search($value, $this->tracks);
        if($key !== false) {
           unset($this->tracks[$key]);
        }
    }
}
