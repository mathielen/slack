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

use CL\Slack\Model\Channel;
use CL\Slack\Model\Message;

/**
 * @author Markus Thielen <info@logicx.de>
 */
class ReactionsGetPayloadResponse extends AbstractPayloadResponse
{

    /**
     * @var string
     */
    private $channel;
    
    /**
     * @var string
     */
    private $type;
    
    /**
     * @var Message
     */
    private $message;

    /**
     * @return Message
     */
    public function getResult()
    {
        return $this->message;
    }
}
