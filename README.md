# Terminus Drupal Console

[![CircleCI](https://circleci.com/gh/pantheon-systems/terminus-drupal-console-plugin.svg?style=svg)](https://circleci.com/gh/pantheon-systems/terminus-drupal-console-plugin)
[![Terminus v1.x Compatible](https://img.shields.io/badge/terminus-v1.x-green.svg)](https://github.com/pantheon-systems/terminus-drupal-console-plugin/tree/1.x)
[![Terminus v0.x Compatible](https://img.shields.io/badge/terminus-v0.x-green.svg)](https://github.com/pantheon-systems/terminus-drupal-console-plugin/tree/0.x)

Terminus Plugin to run [Drupal Console](https://github.com/hechoendrupal/DrupalConsole) commands on [Pantheon](https://www.pantheon.io) sites.

Adds a command 'drupal' to Terminus 1.x which you can use just like 'drush' or 'wp'. For a version that works with Terminus 0.x, see the [0.x branch](https://github.com/pantheon-systems/terminus-drupal-console-plugin/tree/0.x).

This project is based on the `drush` and `wp` commands from Terminus core.

## Configuration

In order for the Terminus Drupal Console plugin to work, you must add Drupal Console to your Drupal site.  Drupal Console is already included if you are using the [Example Drops-8 Composer repository](https://github.com/pantheon-systems/example-drops-8-composer) (recommended).

## Examples
* `terminus drupal my-site.dev -- list`
* `terminus drupal my-site.dev -- theme:debug`

## Testing
The preconditions to running tests are:

- Install Terminus 1.x, and ensure it is available on your PATH as `terminus`
- Export the environment variable TERMINUS_SITE to point at a test site.
- Run `terminus auth:login`

To run the tests locally, just run `composer test`.

### Seting up testing for your own Terminus plugin

If you'd like to copy the test scripts here for use with your own Terminus plugin, you will also need to configure Circle CI to run your tests. In the Circle CI settings, set up the following environment variables:

- TERMINUS_SITE: The name of the Pantheon site to run tests against
- TERMINUS_TOKEN: A Pantheon machine token

You will also need to create an ssh key pair, and add the private key to Circle CI (leave the "Hostname" field empty), and add the public key to your account on Pantheon.

## Installation
For help installing, see [Terminus's Wiki](https://github.com/pantheon-systems/terminus/wiki/Plugins)
```
mkdir -p ~/.terminus/plugins
composer create-project -d ~/.terminus/plugins pantheon-systems/terminus-drupal-console-plugin:~1
```
## Help
Run `terminus help drupal` for help.
