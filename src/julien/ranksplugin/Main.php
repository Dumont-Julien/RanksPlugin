<?php

declare(strict_types=1);

/**
 *  ____       _      _   _   _  __  ____
 * |  _ \     / \    | \ | | | |/ / / ___|
 * | |_) |   / _ \   |  \| | | ' /  \___ \
 * |  _ <   / ___ \  | |\  | | . \   ___) |
 * |_| \_\ /_/   \_\ |_| \_| |_|\_\ |____/
 *
 * @author: Dumont-julien
 * @link: https://github.com/Dumont-Julien
 */

namespace julien\ranksplugin;

use julien\ranksplugin\data\DataBaseConnector;
use julien\ranksplugin\translation\Language;
use pocketmine\plugin\PluginBase;
use pocketmine\utils\Config;
use pocketmine\utils\SingletonTrait;

class Main extends PluginBase {

    use SingletonTrait;

    public DataBaseConnector $db;
    public Config $config;
    public Language $language;

    protected function onLoad(): void {
        self::setInstance($this);

        $this->language = new Language($this->config->get('lang'));
    }

    protected function onEnable(): void {
        /* Instance */
        $this->config = $this->getConfig();

        /* Config */
        $config = $this->config;
        if ($config->get('config') === "config"){
            if (!file_exists($this->getDataFolder() . "Ranks/")){
                @mkdir($this->getDataFolder() . "Ranks/");
            }
        }elseif($config->get('config') === "mysql"){
            $this->db = new DataBaseConnector($config->get('user_name'), $config->get('password'), $config->get('hostname'), $config->get('schema'), $config->get('port') !== 3306 ? $config->get('port') : null);
        }

        /* Logger */
        $this->getLogger()->info("-> RanksPlugin is enable !");
    }
}