<?php

declare(strict_types=1);

/**
 *  ____       _      _   _   _  __  ____
 * |  _ \     / \    | \ | | | |/ / / ___|
 * | |_) |   / _ \   |  \| | | ' /  \___ \
 * |  _ <   / ___ \  | |\  | | . \   ___) |
 * |_| \_\ /_/   \_\ |_| \_| |_|\_\ |____/
 *
 * @author: Dumont-Julien
 * @link: https://github.com/Dumont-Julien
 */

namespace julien\ranksplugin\utils;

use julien\ranksplugin\Main;

final class Utils {

    public static function getPrefix(): string {
        return Main::getInstance()->config->get('prefix');
    }

}