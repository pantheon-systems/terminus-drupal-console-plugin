<?php
namespace Terminus\Commands;

use Terminus\Collections\Sites;
use Terminus\Models\Environment;

/**
 * Run Drupal Console on Pantheon
 *
 * @command drupal
 */
class DrupalConsoleCommand extends CommandWithSSH {
  /**
   * {@inheritdoc}
   */
  protected $client = 'Drupal Console';

  /**
   * {@inheritdoc}
   */
  protected $command = 'drupal';

  /**
   * Invoke Drupal Console commands on a Pantheon development site
   *
   * <commands>...
   * : The Drupal Console command you intend to run with its arguments, in quotes
   *
   * [--site=<site>]
   * : The name (DNS shortname) of your site on Pantheon
   *
   * [--env=<environment>]
   * : Your Pantheon environment. Default: dev
   *
   */
  public function __invoke($args, $assoc_args) {
    parent::__invoke($args, $assoc_args);
    $command = $this->ssh_command;
    if ($this->log()->getOptions('logFormat') != 'normal') {
        $command .= ' --pipe';
    }
    $result = $this->environment->sendCommandViaSsh($command);
    $this->output()->outputDump($result['output']);
    exit($result['exit_code']);
  }
}

