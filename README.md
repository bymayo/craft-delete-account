**Looking for Craft 2 Support?** [Delete Account for Craft 2](https://github.com/bymayo/craft-delete-account/tree/craft-2)

<img src="https://github.com/bymayo/craft-delete-account/blob/master/resources/img/icon.png?raw=true" width="50">

# Delete Account for Craft 3.x

Delete Account is a Craft CMS plugin that allows users to delete their own account within Twig templates (Front end). This also adheres to GDPR rules regarding users being able to manage their own data and delete their account.

*NOTE: This only removes the users account, and doesn't remove any data they previously submitted via a Commerce order or 3rd Party plugin (Yet).*

## Features

- Set a `keyword` that needs to be correctly entered before accounts are deleted (Stops accidental deletion).
- Disallow admins from deleting their accounts on front end.

## Requirements

- Craft CMS 3.x
- MySQL (No PostgreSQL support)

## Install

- Install with Composer via `composer require bymayo/delete-account` from your project directory
- Install the plugin in the Craft Control Panel under `Settings > Plugins`

You can also install the plugin via the Plugin Store in the Craft Admin CP.

## Config

Navigate to Settings -> Plugins -> Delete Account -> Settings to customise the config settings.

## Templating

You can simply output the form in your account templates by using the following method:

```
{{ craft.deleteAccount.form }}
```

If you want more control you can take the `form` template from `bymayo/deleteaccount/templates/form` and place this in your own template folder. Then include this with the `{% include %}` twig tag.

You can optionally grab settings from the plugin:

```
{{ craft.deleteAccount.settings('redirect') }}
```

## Roadmap

- Setting to disallow users with access to CP from deleting their accounts.
- Setting to send an email to the user after deletion.
- Delete all user related Commerce orders.
- Delete all user related data in 3rd party plugins.
