<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.translation.theme_provider' shared service.

$this->services['prestashop.translation.theme_provider'] = $instance = new \PrestaShopBundle\Translation\Provider\ThemeProvider(${($_ = isset($this->services['prestashop.translation.database_loader']) ? $this->services['prestashop.translation.database_loader'] : $this->load('getPrestashop_Translation_DatabaseLoaderService.php')) && false ?: '_'}, ($this->targetDirs[0].'/themes'));

$instance->themeResourcesDirectory = ($this->targetDirs[3].'\\app/../themes');
$instance->filesystem = ${($_ = isset($this->services['filesystem']) ? $this->services['filesystem'] : $this->services['filesystem'] = new \Symfony\Component\Filesystem\Filesystem()) && false ?: '_'};
$instance->themeRepository = ${($_ = isset($this->services['prestashop.core.addon.theme.repository']) ? $this->services['prestashop.core.addon.theme.repository'] : $this->load('getPrestashop_Core_Addon_Theme_RepositoryService.php')) && false ?: '_'};
$instance->themeExtractor = ${($_ = isset($this->services['prestashop.translation.theme_extractor']) ? $this->services['prestashop.translation.theme_extractor'] : $this->load('getPrestashop_Translation_ThemeExtractorService.php')) && false ?: '_'};
$instance->defaultTranslationDir = ($this->targetDirs[3].'\\app/Resources/translations');

return $instance;