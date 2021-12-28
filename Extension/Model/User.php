<?php
/**
 * Copyright (C) 2020-2021 Carlos Garcia Gomez <carlos@facturascripts.com>
 */

namespace FacturaScripts\Plugins\NeoTheme\Extension\Model;

class User
{
    public function gravatar()
    {
        return function ($size = 80) {
            return 'https://www.gravatar.com/avatar/' . md5(strtolower(trim($this->email))) . '?s=' . $size;
        };
    }
}
