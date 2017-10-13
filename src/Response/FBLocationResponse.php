<?php

namespace InstagramAPI\Response;

use InstagramAPI\Response;

/**
 * FBLocationResponse.
 *
 * @method mixed getHasMore()
 * @method Model\LocationItem[] getItems()
 * @method mixed getMessage()
 * @method mixed getRankToken()
 * @method string getStatus()
 * @method Model\_Message[] get_Messages()
 * @method bool isHasMore()
 * @method bool isItems()
 * @method bool isMessage()
 * @method bool isRankToken()
 * @method bool isStatus()
 * @method bool is_Messages()
 * @method $this setHasMore(mixed $value)
 * @method $this setItems(Model\LocationItem[] $value)
 * @method $this setMessage(mixed $value)
 * @method $this setRankToken(mixed $value)
 * @method $this setStatus(string $value)
 * @method $this set_Messages(Model\_Message[] $value)
 * @method $this unsetHasMore()
 * @method $this unsetItems()
 * @method $this unsetMessage()
 * @method $this unsetRankToken()
 * @method $this unsetStatus()
 * @method $this unset_Messages()
 */
class FBLocationResponse extends Response
{
    const JSON_PROPERTY_MAP = [
        'has_more'   => '',
        'items'      => 'Model\LocationItem[]',
        'rank_token' => '',
    ];
}
