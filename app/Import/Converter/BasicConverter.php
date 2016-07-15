<?php
/**
 * BasicConverter.php
 * Copyright (C) 2016 thegrumpydictator@gmail.com
 *
 * This software may be modified and distributed under the terms
 * of the MIT license.  See the LICENSE file for details.
 */

declare(strict_types = 1);

namespace FireflyIII\Import\Converter;

use FireflyIII\User;


/**
 * Class BasicConverter
 *
 * @package FireflyIII\Import\Converter
 */
class BasicConverter
{
    /** @var  bool */
    public $doMap;

    /** @var  array */
    public $mapping = [];

    /** @var  User */
    public $user;

    /**
     * @param mixed $doMap
     */
    public function setDoMap(bool $doMap)
    {
        $this->doMap = $doMap;
    }

    /**
     * @param array $mapping
     *
     */
    public function setMapping(array $mapping)
    {
        $this->mapping = $mapping;
    }

    /**
     * @param User $user
     */
    public function setUser(User $user)
    {
        $this->user = $user;
    }
}