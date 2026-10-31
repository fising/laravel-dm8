<?php

if (! function_exists('config_path')) {
    /**
     * Get the configuration path.
     *
     * Provides the helper for frameworks that do not ship it (for example Lumen).
     * Delegates to Application::configPath() when present, so a custom directory
     * set with useConfigPath() is still honored.
     */
    function config_path(string $path = ''): string
    {
        $app = app();

        if (method_exists($app, 'configPath')) {
            return $app->configPath($path);
        }

        $configPath = rtrim($app->basePath(), '/\\').DIRECTORY_SEPARATOR.'config';

        if ($path === '') {
            return $configPath;
        }

        return $configPath.DIRECTORY_SEPARATOR.ltrim($path, '/\\');
    }
}
