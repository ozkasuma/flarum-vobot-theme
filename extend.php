<?php

/*
 * This file is part of Ozkasuma/Vobot.
 *
 * Copyright (c) 2025 Your Name.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Ozkasuma\Vobot;

use Flarum\Extend;

return [
    (new Extend\Frontend('forum'))
        ->css(__DIR__.'/less/forum.less'),
    (new Extend\Frontend('admin'))
        ->css(__DIR__.'/less/admin.less'),
];