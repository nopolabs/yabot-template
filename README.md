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
    cd my-bot
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

- TODO how to add plugins from yabot-plugins

## Writing your own plugins

- TODO how to write a plugin
