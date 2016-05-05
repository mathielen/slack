<?php

/*
 * This file is part of the Slack API library.
 *
 * (c) Cas Leentfaar <info@casleentfaar.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CL\Slack\Payload;

/**
 * @author Markus Thielen <info@logicx.de>
 *
 * @link Official documentation at https://api.slack.com/methods/reactions.get
 */
class ReactionsGetPayload extends AbstractPayload
{

    /**
     * @var string
     */
    private $file;

    /**
     * @var string
     */
    private $file_comment;

    /**
     * @var string
     */
    private $channel;

    /**
     * @var string
     */
    private $timestamp;

    /**
     * @var boolean
     */
    private $full;
    
    /**
     * @inheritdoc
     */
    public function getMethod()
    {
        return 'reactions.get';
    }

    /**
     * @return mixed
     */
    public function getFile()
    {
        return $this->file;
    }

    /**
     * @param mixed $file
     */
    public function setFile($file)
    {
        $this->file = $file;
    }

    /**
     * @return string
     */
    public function getFileComment()
    {
        return $this->file_comment;
    }

    /**
     * @param string $file_comment
     */
    public function setFileComment($file_comment)
    {
        $this->file_comment = $file_comment;
    }

    /**
     * @return string
     */
    public function getChannel()
    {
        return $this->channel;
    }

    /**
     * @param string $channel
     */
    public function setChannel($channel)
    {
        $this->channel = $channel;
    }

    /**
     * @return mixed
     */
    public function getTimestamp()
    {
        return $this->timestamp;
    }

    /**
     * @param mixed $timestamp
     */
    public function setTimestamp($timestamp)
    {
        $this->timestamp = $timestamp;
    }

    /**
     * @return mixed
     */
    public function getFull()
    {
        return $this->full;
    }

    /**
     * @param mixed $full
     */
    public function setFull($full)
    {
        $this->full = $full;
    }
    
}
