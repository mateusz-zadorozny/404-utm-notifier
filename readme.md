# 404 UTM Notifier

**Contributors:** mateusz-zadorozny  
**Tags:** 404, UTM, notifier, email  
**Requires at least:** 4.6  
**Tested up to:** 5.8  
**Stable tag:** 1.0.2  
**License:** GPLv2 or later  
**License URI:** https://www.gnu.org/licenses/gpl-2.0.html  

## Description

404 UTM Notifier is a WordPress plugin that sends an email notification to the admin whenever a 404 error occurs with UTM parameters present in the URL. This can help you track and analyze broken links that are part of your marketing campaigns.

## Installation

1. Upload the `404-utm-notifier` folder to the `/wp-content/plugins/` directory.
2. Activate the plugin through the 'Plugins' menu in WordPress.

## Changelog

### 1.0.2
* Initial release.

## Frequently Asked Questions

### How does the plugin work?

The plugin hooks into the `template_redirect` action to check if a 404 error occurs. If UTM parameters are present in the URL, it sends an email notification to the admin.

### What UTM parameters does the plugin check for?

The plugin checks for the following UTM parameters: `utm_source`, `utm_medium`, `utm_campaign`, and `utm_content`.

### Can I customize the email notification?

Currently, the plugin sends a predefined email notification to the admin email address set in WordPress. Customization options are not available in this version.

## License

This plugin is licensed under the GPLv2 or later.  
https://www.gnu.org/licenses/gpl-2.0.html

## Author

Mateusz Zadorożny  
[GitHub Profile](https://github.com/mateusz-zadorozny)