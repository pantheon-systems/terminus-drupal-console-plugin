# Terminus Drupal Console

[![CircleCI](https://circleci.com/gh/pantheon-systems/terminus-drupal-console-plugin.svg?style=shield)](https://circleci.com/gh/pantheon-systems/terminus-drupal-console-plugin)
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

## Installation
For help installing, see [Manage Plugins](https://pantheon.io/docs/terminus/plugins/)
```
mkdir -p ~/.terminus/plugins
composer create-project --no-dev -d ~/.terminus/plugins pantheon-systems/terminus-drupal-console-plugin:~1
```
## Help
Run `terminus help drupal` for help.
