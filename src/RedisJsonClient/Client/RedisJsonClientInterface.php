<?php
/**
 * This file is part of PhpRedisJSON library
 *
 * @project   php-redis-json
 * @author    Rafael Campoy <rafa.campoy@gmail.com>
 * @copyright 2019 Rafael Campoy <rafa.campoy@gmail.com>
 * @license   MIT
 * @link      https://github.com/averias/php-redis-json
 *
 * Copyright and license information, is included in
 * the LICENSE file that is distributed with this source code.
 */

namespace Averias\RedisJson\Client;

use Averias\RedisJson\Encoder\Traits\JsonEncoderTraitInterface;

interface RedisJsonClientInterface extends ClientInterface, JsonCommandTraitInterface, JsonEncoderTraitInterface
{

}
