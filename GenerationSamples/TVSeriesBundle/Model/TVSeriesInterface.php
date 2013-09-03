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

namespace SchemaRepository\Bundle\TVSeriesBundle\Model;

use SchemaRepository\Bundle\CreativeWorkBundle\Model\CreativeWorkInterface;

/**
 * Interface of TV Series Model
 * 
 * @author SchemaGenerator <dallas62@free.fr>
 * @package SchemaRepository\Bundle\TVSeriesBundle\Model
 */
interface TVSeriesInterface extends CreativeWorkInterface
{

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
    public function getActor();

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
    public function getActors();

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
    public function getDirector();

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
    public function getEndDate();

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
    public function getEpisode();

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
    public function getEpisodes();

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
    public function getMusicBy();

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
    public function getNumberOfEpisodes();

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
    public function getProducer();

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
    public function getProductionCompany();

    /**
     * Getter of Season
     * 
     * A season of a TV series.
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return mixed
     */
    public function getSeason();

    /**
     * Getter of Seasons
     * 
     * The seasons of the TV series (legacy spelling; see singular form,
     * season).
     * 
     * @author SchemaGenerator <dallas62@free.fr>
     * 
     * @access public
     * 
     * @return array
     */
    public function getSeasons();

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
    public function getStartDate();

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
    public function getTrailer();
}
