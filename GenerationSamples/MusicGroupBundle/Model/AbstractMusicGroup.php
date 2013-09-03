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

namespace SchemaRepository\Bundle\MusicGroupBundle\Model;

use SchemaRepository\Bundle\MusicGroupBundle\Model\MusicGroupInterface;
use SchemaRepository\Bundle\PerformingGroupBundle\Model\AbstractPerformingGroup;

/**
 * Model of Music Group
 * 
 * @author SchemaGenerator <dallas62@free.fr>
 * @package SchemaRepository\Bundle\MusicGroupBundle\Model
 */
abstract class AbstractMusicGroup extends AbstractPerformingGroup implements MusicGroupInterface
{

    /**
     * A music album.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var mixed
     */
    protected $album;

    /**
     * A collection of music albums (legacy spelling; see singular form,
     * album).
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var array
     */
    protected $albums;

    /**
     * A member of the music group—for example, John, Paul, George, or
     * Ringo.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var mixed
     */
    protected $musicGroupMember;

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
     * Getter of Album
     * 
     * A music album.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return mixed
     */
    public function getAlbum()
    {
        return $this->album;
    }

    /**
     * Setter of Album
     * 
     * A music album.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param mixed $value Value of album
     */
    public function setAlbum($value)
    {
        $this->album = $value;
    }

    /**
     * Getter of Albums
     * 
     * A collection of music albums (legacy spelling; see singular form,
     * album).
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return array
     */
    public function getAlbums()
    {
        return $this->albums;
    }

    /**
     * Setter of Albums
     * 
     * A collection of music albums (legacy spelling; see singular form,
     * album).
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param array $value Value of albums
     */
    public function setAlbums($value)
    {
        $this->albums = $value;
    }

    /**
     * Add album to Array
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param mixed $value Value of album
     */
    public function addAlbum($value)
    {
        $this->albums[] = $value;
    }

    /**
     * Remove album to Array
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param mixed $value Value of album
     */
    public function removeAlbum($value)
    {
        $key = array_search($value, $this->albums);
        if($key !== false) {
           unset($this->albums[$key]);
        }
    }

    /**
     * Getter of Music Group Member
     * 
     * A member of the music group—for example, John, Paul, George, or
     * Ringo.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return mixed
     */
    public function getMusicGroupMember()
    {
        return $this->musicGroupMember;
    }

    /**
     * Setter of Music Group Member
     * 
     * A member of the music group—for example, John, Paul, George, or
     * Ringo.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param mixed $value Value of musicGroupMember
     */
    public function setMusicGroupMember($value)
    {
        $this->musicGroupMember = $value;
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

    /**
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

    /**
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
