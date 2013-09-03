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

namespace SchemaRepository\Bundle\TVEpisodeBundle\Model;

use SchemaRepository\Bundle\TVEpisodeBundle\Model\TVEpisodeInterface;
use SchemaRepository\Bundle\CreativeWorkBundle\Model\AbstractCreativeWork;

/**
 * Model of TV Episode
 * 
 * @author SchemaGenerator <dallas62@free.fr>
 * @package SchemaRepository\Bundle\TVEpisodeBundle\Model
 */
abstract class AbstractTVEpisode extends AbstractCreativeWork implements TVEpisodeInterface
{

    /**
     * A cast member of the movie, TV series, season, or episode, or video.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var mixed
     */
    protected $actor;

    /**
     * A cast member of the movie, TV series, season, or episode, or video.
     * (legacy spelling; see singular form, actor)
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var array
     */
    protected $actors;

    /**
     * The director of the movie, TV episode, or series.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var mixed
     */
    protected $director;

    /**
     * The episode number.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var integer|long|float|decimal
     */
    protected $episodeNumber;

    /**
     * The composer of the movie or TV soundtrack.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var mixed
     */
    protected $musicBy;

    /**
     * The season to which this episode belongs.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var mixed
     */
    protected $partOfSeason;

    /**
     * The TV series to which this episode or season belongs.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var mixed
     */
    protected $partOfTVSeries;

    /**
     * The producer of the movie, TV series, season, or episode, or video.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var mixed
     */
    protected $producer;

    /**
     * The production company or studio that made the movie, TV series,
     * season, or episode, or video.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var mixed
     */
    protected $productionCompany;

    /**
     * The trailer of the movie or TV series, season, or episode.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var mixed
     */
    protected $trailer;

    /**
     * Getter of Actor
     * 
     * A cast member of the movie, TV series, season, or episode, or video.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return mixed
     */
    public function getActor()
    {
        return $this->actor;
    }

    /**
     * Setter of Actor
     * 
     * A cast member of the movie, TV series, season, or episode, or video.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param mixed $value Value of actor
     */
    public function setActor($value)
    {
        $this->actor = $value;
    }

    /**
     * Getter of Actors
     * 
     * A cast member of the movie, TV series, season, or episode, or video.
     * (legacy spelling; see singular form, actor)
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return array
     */
    public function getActors()
    {
        return $this->actors;
    }

    /**
     * Setter of Actors
     * 
     * A cast member of the movie, TV series, season, or episode, or video.
     * (legacy spelling; see singular form, actor)
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param array $value Value of actors
     */
    public function setActors($value)
    {
        $this->actors = $value;
    }

    /*
     * Add actor to Array
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param mixed $value Value of actor
     */
    public function addActor($value)
    {
        $this->actors[] = $value;
    }

    /*
     * Remove actor to Array
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param mixed $value Value of actor
     */
    public function removeActor($value)
    {
        $key = array_search($value, $this->actors);
        if($key !== false) {
           unset($this->actors[$key]);
        }
    }

    /**
     * Getter of Director
     * 
     * The director of the movie, TV episode, or series.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return mixed
     */
    public function getDirector()
    {
        return $this->director;
    }

    /**
     * Setter of Director
     * 
     * The director of the movie, TV episode, or series.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param mixed $value Value of director
     */
    public function setDirector($value)
    {
        $this->director = $value;
    }

    /**
     * Getter of Episode Number
     * 
     * The episode number.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return integer|long|float|decimal
     */
    public function getEpisodeNumber()
    {
        return $this->episodeNumber;
    }

    /**
     * Setter of Episode Number
     * 
     * The episode number.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param integer|long|float|decimal $value Value of episodeNumber
     */
    public function setEpisodeNumber($value)
    {
        $this->episodeNumber = $value;
    }

    /**
     * Getter of Music by
     * 
     * The composer of the movie or TV soundtrack.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return mixed
     */
    public function getMusicBy()
    {
        return $this->musicBy;
    }

    /**
     * Setter of Music by
     * 
     * The composer of the movie or TV soundtrack.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param mixed $value Value of musicBy
     */
    public function setMusicBy($value)
    {
        $this->musicBy = $value;
    }

    /**
     * Getter of Part of Season
     * 
     * The season to which this episode belongs.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return mixed
     */
    public function getPartOfSeason()
    {
        return $this->partOfSeason;
    }

    /**
     * Setter of Part of Season
     * 
     * The season to which this episode belongs.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param mixed $value Value of partOfSeason
     */
    public function setPartOfSeason($value)
    {
        $this->partOfSeason = $value;
    }

    /**
     * Getter of Part of TV Series
     * 
     * The TV series to which this episode or season belongs.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return mixed
     */
    public function getPartOfTVSeries()
    {
        return $this->partOfTVSeries;
    }

    /**
     * Setter of Part of TV Series
     * 
     * The TV series to which this episode or season belongs.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param mixed $value Value of partOfTVSeries
     */
    public function setPartOfTVSeries($value)
    {
        $this->partOfTVSeries = $value;
    }

    /**
     * Getter of Producer
     * 
     * The producer of the movie, TV series, season, or episode, or video.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return mixed
     */
    public function getProducer()
    {
        return $this->producer;
    }

    /**
     * Setter of Producer
     * 
     * The producer of the movie, TV series, season, or episode, or video.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param mixed $value Value of producer
     */
    public function setProducer($value)
    {
        $this->producer = $value;
    }

    /**
     * Getter of Production Company
     * 
     * The production company or studio that made the movie, TV series,
     * season, or episode, or video.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return mixed
     */
    public function getProductionCompany()
    {
        return $this->productionCompany;
    }

    /**
     * Setter of Production Company
     * 
     * The production company or studio that made the movie, TV series,
     * season, or episode, or video.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param mixed $value Value of productionCompany
     */
    public function setProductionCompany($value)
    {
        $this->productionCompany = $value;
    }

    /**
     * Getter of Trailer
     * 
     * The trailer of the movie or TV series, season, or episode.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return mixed
     */
    public function getTrailer()
    {
        return $this->trailer;
    }

    /**
     * Setter of Trailer
     * 
     * The trailer of the movie or TV series, season, or episode.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param mixed $value Value of trailer
     */
    public function setTrailer($value)
    {
        $this->trailer = $value;
    }
}
