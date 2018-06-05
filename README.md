# MD5 Twig Filter plugin for Craft CMS 3.x

A simple filter for twig to hash a string with MD5.

IMPORTANT! Do not use md5 to hash passwords or other sensitive data, MD5 is considered crytographically broken.

## Requirements

This plugin requires Craft CMS 3.0.0-beta.23 or later.

## Installation

To install the plugin, follow these instructions.

1. Open your terminal and go to your Craft project:

        cd /path/to/project

2. Then tell Composer to load the plugin:

        composer require /md5-twig-filter

3. In the Control Panel, go to Settings → Plugins and click the “Install” button for MD5 Twig Filter.

## Using MD5 Twig Filter

        {{ md5("some string" }}
        {{ "some string" | md5 }}

Brought to you by [Steadfast Collective](https://steadfastcollective.com/)
