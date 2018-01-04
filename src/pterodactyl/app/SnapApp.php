<?php namespace Pterodactyl;

class SnapApp extends \Illuminate\Foundation\Application
{
    /**
     * Get the path to the storage directory.
     *
     * @return string
     */
    public function storagePath()
    {
        return env('PTERODACTYL_STORAGE_PATH');
    }

    /**
     * Get the path to the application configuration files.
     *
     * @param  string  $path Optionally, a path to append to the config path
     * @return string
     */
    public function configPath($path = '')
    {
        return env('PTERODACTYL_CONFIG_PATH');
    }

}
