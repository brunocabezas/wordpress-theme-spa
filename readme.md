# Wordpress Theme SPA

Wordpress theme with a minimal setup aimed to rely on SPA's assets: javascript and css files. Based on [VueWordPress Theme Starter](#vuewordpress-theme-starter).

## How it works

As this theme styles and views rely on an SPA build, the output (css and javascript files) must be imported into our `index.php`. This takes place on `functions.php`; which imports this assets from `/dist/`.

After importing files via [`wp_enqueue_script`](https://developer.wordpress.org/reference/functions/wp_enqueue_script/) or [`wp_enqueue_style`](https://developer.wordpress.org/reference/functions/wp_enqueue_style/):

- Scripts must be placed on the footer.
- Names must be unique.
- Include if the SPA build outputs chunks, include them as well.

All requests are redirected back to the index.php so your Vue routing is respected.

<!-- All scripts and styles in `/src` are compiled down to the `/dist` directory, which is what you will deploy. **When you're ready to deploy don't deploy the src/ directory.** -->

## How to use

To use this theme on a worpdress intallation:

- Add metadata on [style.css](style.css), this information will be displayed on the Wordpress admin GUI.
- Move the content of this repo to `/wp-content/themes/wordpress-theme-spa/` or clone this repo from `/wp-content/themes`
- Enable the theme on wordpress
