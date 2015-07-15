<?php

namespace malkusch\lock;

use malkusch\lock\exception\MutexException;

/**
 * This mutex doesn't lock at all.
 *
 * Synchronization is not provided! This mutex is just implementing the
 * interface without locking.
 *
 * @author Markus Malkusch <markus@malkusch.de>
 * @link bitcoin:1335STSwu9hST4vcMRppEPgENMHD2r1REK Donations
 * @license WTFPL
 */
class NoMutex extends Mutex
{
    
    public function synchronized(callable $block)
    {
        return call_user_func($block);
    }
}
