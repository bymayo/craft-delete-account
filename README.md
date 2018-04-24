<img src="https://raw.githubusercontent.com/bymayo/craft-delete-account/master/screenshots/icon.png" width="50">

# Delete Account

Delete Account is a Craft CMS plugin that allows users to delete their own account within your own Twig templates to adhere to GDPR rules on users being able to manage their own data.

*NOTE: This only removes the users account, and doesn't remove any data they previously submitted via a Commerce order or 3rd Party.*

## Features

- Set a 'keyword' that needs to be correctly entered before accounts are deleted (Stops accidental deletion).
- Disallow admins from deleting their accounts on front end.

## Install

- Add the `deleteaccount` directory into your `craft/plugins` directory.
- Navigate to Settings -> Plugins and click the "Install" button.

## Config

Navigate to Settings -> Plugins -> Delete Account (Little cog) to customise the config settings.

## Templating

You can simply output the form in your account templates by using the following method:

```
{{ craft.deleteaccount.form }}
```

If you want more control you can take the `form` template from `craft/plugins/deleteaccount/templates/form` and place this in your own template folder. Then include this with the `{% include %}` twig tag.

You can optionally grab settings from the plugin:

```
{{ craft.deleteaccount.settings('redirect') }}
```

## Roadmap

- Delete all user related Commerce orders.
- Delete all user related data in 3rd party plugins.

## Credits

- Remove Account by Gregor Cresnar from Noun Project (https://thenounproject.com/grega.cresnar/)
