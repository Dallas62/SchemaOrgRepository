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

namespace SchemaRepository\Bundle\TVSeasonBundle\Model;

use SchemaRepository\Bundle\TVSeasonBundle\Model\TVSeasonInterface;
use SchemaRepository\Bundle\CreativeWorkBundle\Model\AbstractCreativeWork;

/**
 * Model of TV Season
 * 
 * @author SchemaGenerator <dallas62@free.fr>
 * @package SchemaRepository\Bundle\TVSeasonBundle\Model
 */
abstract class AbstractTVSeason extends AbstractCreativeWork implements TVSeasonInterface
{

    /**
     * The end date and time of the event (in ISO 8601 date format).
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var mixed
     */
    protected $endDate;

    /**
     * An episode of a TV series or season.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var mixed
     */
    protected $episode;

    /**
     * The episode of a TV series or season (legacy spelling; see singular
     * form, episode).
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var array
     */
    protected $episodes;

    /**
     * The number of episodes in this season or series.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var integer|long|float|decimal
     */
    protected $numberOfEpisodes;

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
     * The season number.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var integer|long
     */
    protected $seasonNumber;

    /**
     * The start date and time of the event (in ISO 8601 date format).
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access protected
     * @var mixed
     */
    protected $startDate;

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
     * Getter of End Date
     * 
     * The end date and time of the event (in ISO 8601 date format).
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return mixed
     */
    public function getEndDate()
    {
        return $this->endDate;
    }

    /**
     * Setter of End Date
     * 
     * The end date and time of the event (in ISO 8601 date format).
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param mixed $value Value of endDate
     */
    public function setEndDate($value)
    {
        $this->endDate = $value;
    }

    /**
     * Getter of Episode
     * 
     * An episode of a TV series or season.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return mixed
     */
    public function getEpisode()
    {
        return $this->episode;
    }

    /**
     * Setter of Episode
     * 
     * An episode of a TV series or season.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param mixed $value Value of episode
     */
    public function setEpisode($value)
    {
        $this->episode = $value;
    }

    /**
     * Getter of Episodes
     * 
     * The episode of a TV series or season (legacy spelling; see singular
     * form, episode).
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return array
     */
    public function getEpisodes()
    {
        return $this->episodes;
    }

    /**
     * Setter of Episodes
     * 
     * The episode of a TV series or season (legacy spelling; see singular
     * form, episode).
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param array $value Value of episodes
     */
    public function setEpisodes($value)
    {
        $this->episodes = $value;
    }

    /*
     * Add episode to Array
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param mixed $value Value of episode
     */
    public function addEpisode($value)
    {
        $this->episodes[] = $value;
    }

    /*
     * Remove episode to Array
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param mixed $value Value of episode
     */
    public function removeEpisode($value)
    {
        $key = array_search($value, $this->episodes);
        if($key !== false) {
           unset($this->episodes[$key]);
        }
    }

    /**
     * Getter of Number of Episodes
     * 
     * The number of episodes in this season or series.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return integer|long|float|decimal
     */
    public function getNumberOfEpisodes()
    {
        return $this->numberOfEpisodes;
    }

    /**
     * Setter of Number of Episodes
     * 
     * The number of episodes in this season or series.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param integer|long|float|decimal $value Value of numberOfEpisodes
     */
    public function setNumberOfEpisodes($value)
    {
        $this->numberOfEpisodes = $value;
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
     * Getter of Season Number
     * 
     * The season number.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return integer|long
     */
    public function getSeasonNumber()
    {
        return $this->seasonNumber;
    }

    /**
     * Setter of Season Number
     * 
     * The season number.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param integer|long $value Value of seasonNumber
     */
    public function setSeasonNumber($value)
    {
        $this->seasonNumber = $value;
    }

    /**
     * Getter of Start Date
     * 
     * The start date and time of the event (in ISO 8601 date format).
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return mixed
     */
    public function getStartDate()
    {
        return $this->startDate;
    }

    /**
     * Setter of Start Date
     * 
     * The start date and time of the event (in ISO 8601 date format).
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @param mixed $value Value of startDate
     */
    public function setStartDate($value)
    {
        $this->startDate = $value;
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
