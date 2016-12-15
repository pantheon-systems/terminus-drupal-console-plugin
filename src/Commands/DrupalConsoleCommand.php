<?php
/**
 * Run Drupal Console on Pantheon
 */
namespace Pantheon\TerminusDrupalConsole\Commands;

use \Pantheon\Terminus\Commands\Remote\SSHBaseCommand;

/**
 * Run a Drupal Console Command
 */
class DrupalConsoleCommand extends SSHBaseCommand
{
    /**
     * @inheritdoc
     */
    protected $command = 'drupal';

    /**
     * @inheritdoc
     */
    protected $valid_frameworks = [
        'drupal8',
    ];

    /**
     * @inheritdoc
     */
    protected $unavailable_commands = [
    ];

    /**
     * Run an arbitrary Drupal Console command on a site's environment
     *
     * @authorize
     *
     * @command remote:drupal
     * @aliases drupal
     *
     * @param string $site_env_id Name of the environment to run the drush command on.
     * @param array $drupal_command Drupal Console command to invoke on the environment
     * @return string Output of the given Drupal Console command executed on the site environment
     *
     * @usage terminus drupal <site>.<env> -- <command>
     *    Runs the Drupal Console command <command> on the <env> environment of <site>
     */
    public function drupalCommand($site_env_id, array $drupal_command)
    {
        $this->prepareEnvironment($site_env_id);

        return $this->executeCommand($drupal_command);
    }
}
