<?php

/*
 * This file is part of rrmode/flarum-elasticsearch.
 *
 * Copyright (c) 2021 rrmode.
 *
 * For the full copyright and license information, please view the LICENSE.md
 * file that was distributed with this source code.
 */

namespace Rrmode\FlarumES\Search;

use Flarum\User\User;
use Rrmode\FlarumES\AbstractElasticGambit;

/**
 * Elastic User Gambit
 * @package Rrmode\FlarumES\Search
 */
class UserGambit extends AbstractElasticGambit
{
    public function getModelClass(): string
    {
        return User::class;
    }
}
