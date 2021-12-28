<?php
/**
 * Copyright (C) 2020-2021 Carlos Garcia Gomez <carlos@facturascripts.com>
 */

namespace FacturaScripts\Plugins\NeoTheme;

use FacturaScripts\Core\Base\InitClass;

class Init extends InitClass
{
    public function init()
    {
        // se ejecutara cada vez que carga FacturaScripts (si este plugin está activado).
        $this->loadExtension(new Extension\Model\User());
    }

    public function update()
    {
        // se ejecutara cada vez que se instala o actualiza el plugin.
    }
}