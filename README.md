# Typography test page for SilverStripe
A simple extension (extending Page) to add a simple typography test page to see your website styles.

It includes a JavaScript function to add element titles to all elements in the test page to help you see what element is which.

## Requirements
- SilverStripe 4 in `dev` environment

For SilverStripe 3, please refer to the [SilverStripe3 branch](https://github.com/axllent/silverstripe-typography/tree/silverstripe3).

## Installation
```
composer require axllent/silverstripe-typography --dev
```

## Usage
Install the module, run a `?flush=1` and access your website with /typo/ (eg: www.example.com/typo/).
Please note that your website must be in the `dev` environment for the route to be activated.

If you need a customised layout then add a Layout/Typography.ss template in your theme directory and

```
  <% include TypographySampleText %>
```
