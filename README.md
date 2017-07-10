# yabot-template
Project template for building a slack bot using nopolabs/yabot

## Getting Started

You will need php 7.* and [composer](https://getcomposer.org/download/).

- Use composer to create a new project based on yabot-template.
- Copy config.example.php to config.php
- Follow [Slack's instructions](https://get.slack.help/hc/en-us/articles/215770388) to get a slack token.
- Replace "SLACK-TOKEN-GOES-HERE" in config.php with your slack token.
- **Do not** check your slack token into a public source control repository.<br/>
  (Slack will revoke tokens it finds shared publically).
- Run Yabot: 'php yabot.php'

```bash
composer create-project --stability dev nopolabs/yabot-template my-bot
# allow composer to remove existing .git history
cd my-bot
# create your own git repository for your bot
cp config.example.php config.php
vi config.php
# replace SLACK-TOKEN-GOES-HERE with your slack token
php yabot.php
# ... profit
```

NOTE: yabot uses nopolabs repositories for slack-client and phpws
because it depends on updates to coderstephen/slack-client
and devristo/phpws that are not yet available from those packages.

## Adding plugins

Visit [yabot-plugins](https://github.com/nopolabs/yabot-plugins) to find
a number of example plugins of varying complexity and utility. Here is
how to add one of those plugins (GiphyPlugin) to this project.

- Use composer to require nopolabs/yabot-plugins
- Import plugin.giphy.yml in config/plugins.yml
- Start yabot

```bash
composer require nopolabs/yabot-plugins
vi config/plugins.yml
# add: "- { resource: '../vendor/nopolabs/yabot-plugins/config/plugin.giphy.yml' }" to the imports section.
php yabot.php
```

## Writing your own plugins

yabot-template contains one plugin (HelloPlugin) as a placeholder
to show where plugin source code, tests, and configuration go.
Specifically:

- source code goes in the src/ directory 
- tests go in the tests/ directory
- configuration goes in config/plugins.yml and config.php
- package namespaces for src/ and tests/ auto-loading are set in composer.json

## Logging

Yabot uses [monolog](https://github.com/Seldaek/monolog) to write logs.
By default logging is configured in config.php to go to logs/bot.log. 

Setting `'log.file' => 'php://stdout'` can be useful during development to
direct logging information to the terminal where you have started yabot.


