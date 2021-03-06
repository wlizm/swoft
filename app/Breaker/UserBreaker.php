<?php

namespace App\Breaker;

use Swoft\Bean\Annotation\Breaker;
use Swoft\Bean\Annotation\Value;
use Swoft\Circuit\CircuitBreaker;

/**
 * the breaker of user
 *
 * @Breaker("user")
 * @uses      UserBreaker
 * @version   2017年12月14日
 * @author    stelin <phpcrazy@126.com>
 * @copyright Copyright 2010-2016 swoft software
 * @license   PHP Version 7.x {@link http://www.php.net/license/3_0.txt}
 */
class UserBreaker extends CircuitBreaker
{
    /**
     * The number of successive failures
     * If the arrival, the state switch to open
     *
     * @Value(name="${config.breaker.user.failCount}", env="${USER_BREAKER_FAIL_COUNT}")
     * @var int
     */
    protected $switchToFailCount = 3;

    /**
     * The number of successive successes
     * If the arrival, the state switch to close
     *
     * @Value(name="${config.breaker.user.successCount}", env="${USER_BREAKER_SUCCESS_COUNT}")
     * @var int
     */
    protected $switchToSuccessCount = 3;

    /**
     * Switch close to open delay time
     * The unit is milliseconds
     *
     * @Value(name="${config.breaker.user.delayTime}", env="${USER_BREAKER_DELAY_TIME}")
     * @var int
     */
    protected $delaySwitchTimer = 500;
}