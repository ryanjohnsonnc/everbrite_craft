
EverBrite Craft CMS
======================

This is a CraftCMS site I am building for a client. I started with Padstone from Imarc as the base and manipulated it from there. Padstone is a starter package for Craft 3 built by Imarc. It provides a simple project config as well as example entries and templates.

Getting Started
---------------

```sh
cd [folder]

npm install
npm run dev
```

Front-End Build
------------------------

Beyond the typical craft files, you will also see a resources/ folder. Padstone
uses [Laravel Mix](https://laravel-mix.com/docs/4.0/basic-example) to compile JS and Sass files from the resources/ folder and store the results into the public/ folder:

* `resources/assets/sass/main.scss` is compiled to `public/css/main.css`
* `resources/assets/js/main.js` is compiled to `public/js/main.js`

Additionally, Padstone produces `manifest.js` and `vendor.js` files that
must be included, in that order, before any of your own JS files. You can
customize this behavior in `webpack.mix.js`.

### Watching/Building assets

While developing, you most likely want to watch the files you are working on,
so the build happens automatically after every save.

    npm run watch

If you want to run this same build process for dev without watching, you can
run the following:

    npm run dev

If you are building to production, run:

    npm run prod

What's Included
---------------


### Plugins

The following plugins are currently included and installed via [composer](https://getcomposer.org/), which is what Craft uses for the Plugin Store as well:

* [Admin Bar](https://plugins.craftcms.com/admin-bar)
* [CodeMirror](https://plugins.craftcms.com/code-mirror)
* [Contact Form](https://plugins.craftcms.com/contact-form)
* [Contact Form Honeypot](https://plugins.craftcms.com/contact-form-honeypot)
* [Craft Kindling](https://github.com/imarc/craft-kindling)
* [Expanded Singles](https://plugins.craftcms.com/expanded-singles)
* [Google Custom Search](https://github.com/imarc/craft-googlecustomsearch)
* [Mix](https://plugins.craftcms.com/mix)
* [Position Fieldtype](https://plugins.craftcms.com/position-fieldtype)
* [Redactor](https://plugins.craftcms.com/redactor)
* [Redirect Manager](https://plugins.craftcms.com/redirect)
* [Tags](https://plugins.craftcms.com/tag-manager)
* [Typed link field](https://plugins.craftcms.com/typedlinkfield)
* [Field Manager](https://plugins.craftcms.com/field-manager) - this is included, but not installed by default.


### Macros

There is a `_macros.twig` file that provides The following macros:

* **renderAllBlocks** and **renderBlock** - these are used to render the designedContent field.
* **pagination** - used to generate pagination.
* **commaSeparate** - used to generate a comma separated list of elements based on title.


### Blocks (These really need to be updated)

The **Content Designer** Field (designedContent) allows CMS users to use the following blocks out of the box:

* Rich Text
* Two Columns
* Image with Text
* Video with Text
* Testimonial
* HTML Widget/Embed
* Call to Action
* Shared Block

## License

Padstone is released under the MIT License.
