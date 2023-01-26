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

class Language {

    private LanguageIds $language;

    public function __construct(LanguageIds $languageIds) {
        $this->language = $languageIds;
    }

    /**
     * @return LanguageIds
     */
    public function getLanguage(): LanguageIds {
        return $this->language;
    }
}