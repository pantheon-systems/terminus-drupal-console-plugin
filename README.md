# Terminus Drupal Console

[![Terminus v1.x Compatible](https://img.shields.io/badge/terminus-v1.x-green.svg)](https://github.com/pantheon-systems/terminus-drupal-console-plugin/tree/1.x)
[![Terminus v0.x Compatible](https://img.shields.io/badge/terminus-v0.x-green.svg)](https://github.com/pantheon-systems/terminus-drupal-console-plugin/tree/0.x)

Terminus Plugin to run [Drupal Console](https://github.com/hechoendrupal/DrupalConsole) commands on [Pantheon](https://www.pantheon.io) sites.

Adds a command 'drupal' to Terminus 0.x which you can use just like 'drush' or 'wp'. For a version that works with Terminus 1.x, see the [1.x branch](https://github.com/pantheon-systems/terminus-drupal-console-plugin/tree/1.x).

This project is based on the [Terminus Composer](https://github.com/rvtraveller/terminus-composer) plugin.

## Configuration

In order for the Terminus Drupal Console plugin to work, you must add Drupal Console to your Drupal site.  Drupal Console is already included if you are using the [Example Drops-8 Composer repository](https://github.com/pantheon-systems/example-drops-8-composer) (recommended).

## Examples
* `terminus drupal "list" --site=my-site --env=dev`
* `terminus drupal "theme:debug" --site=my-site --env=dev`

## Installation
For help installing, see [Terminus's Wiki](https://github.com/pantheon-systems/terminus/wiki/Plugins)
```
mkdir -p ~/terminus/plugins
composer create-project -d ~/terminus/plugins pantheon-systems/terminus-drupal-console-plugin terminus-drupal-console-plugin dev-0.x
```
## Help
Run `terminus help drupal` for help.
