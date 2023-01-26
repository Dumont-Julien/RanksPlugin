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

namespace julien\ranksplugin\data;

final class DataBaseConnector {

    private string $user_name;
    private string $password;
    private string $host_name;
    private string $schema;

    private int $port;

    public function __construct(string $user_name, string $password, string $host_name, string $schema, int $port = null) {
        $this->user_name = $user_name;
        $this->password = $password;
        $this->host_name = $host_name;
        $this->schema = $schema;
        $this->port = $port !== null ? $port : 3306;
    }

    /**
     * @return string
     */
    public function getUserName(): string {
        return $this->user_name;
    }

    /**
     * @return string
     */
    public function getPassword(): string {
        return $this->password;
    }

    /**
     * @return string
     */
    public function getHostName(): string {
        return $this->host_name;
    }


    /**
     * @return string
     */
    public function getSchema(): string {
        return $this->schema;
    }

    /**
     * @return int
     */
    public function getPort(): int {
        return $this->port;
    }
}