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

namespace julien\ranksplugin\translation;

use julien\ranksplugin\exception\MissingLanguageArgumentException;
use julien\ranksplugin\Main;
use pocketmine\utils\Config;

final class MessageTranslation {

    /**
     * @throws MissingLanguageArgumentException
     */
    public static function messageTranslate(string $messageKey): string {
        $lang = Main::getInstance()->language;
        $config = new Config(Main::getInstance()->getDataFolder() . 'languages/lang_' . $lang->getLanguage() . '.json', Config::JSON);
        return $config->get($messageKey) === null ? throw new MissingLanguageArgumentException('Language argument ' . $messageKey . ' is missing !') : $config->get($messageKey);
    }

}