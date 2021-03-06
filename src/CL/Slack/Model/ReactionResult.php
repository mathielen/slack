<?php

/*
 * This file is part of the Slack API library.
 *
 * (c) Cas Leentfaar <info@casleentfaar.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CL\Slack\Model;

/**
 * @author Cas Leentfaar <info@casleentfaar.com>
 *
 * @link Official documentation at https://api.slack.com/methods/search.messages
 */
class ReactionResult extends AbstractModel
{
    /**
     * @var ReactionResultItem[]
     */
    private $reactions = [];

    /**
     * @return ReactionResultItem[]
     */
    public function getReactions()
    {
        return $this->reactions;
    }
}
