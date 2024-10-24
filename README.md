# Plugin Family

This package bundles the WP Media plugin collection within a single plugin.

## Functionality

This package gathers essential data about each member plugin and provides their installation and activation links, similar to the [Imagify Partner](https://github.com/wp-media/wp-imagify-partner/) package. It returns an installation link for plugins that are not installed, and an activation link for those that are installed but not active.
For Imagify, the link generated by the Imagify Partner package is used.

PS: The Imagify Partner package needs be installed along side. refer [here](https://github.com/wp-media/wp-imagify-partner/) for more information.

## Usage Instructions

- Install using composer: `composer require wp-media/plugin-family`
- Import the model that holds the filtered data into your view class.

```php
use WPMedia\PluginFamily\Model\PluginFamily;

class View {
    protected $plugin_family;

    public function __construct( $plugin_family ) {
        $this->plugin_family = $plugin_family;
    }

    public function display_page() {
		$plugin_family = $this->plugin_family->get_filtered_plugins( 'imagify-plugin/imagify' );

		$data = [
			'plugin_family' => $plugin_family['uncategorized'],
		];

		$this->print_template( 'page-settings', $data );
	}
}
```
The model returns an array with 2 keys ( categorized & uncategorized ). This for plugins like WP Rocket that needs to display the plugins by category.

- The categorized version has the plugins grouped by their categories.
- The uncategorized version is the reverse of the former.

Next, we need to invoke the controller responsible for managing the installation and activation. This controller has a corresponding interface that needs to be implemented.

```php
use WPMedia\PluginFamily\Controller\{ PluginFamily, PluginFamilyInterface };

class Subscriber implements SubscriberInterface, PluginFamilyInterface {

    protected $plugin_family;

    public function __construct( $plugin_family ) {
        $this->plugin_family = $plugin_family;
    }

	public static function get_subscribed_events() {
        $events = PluginFamily::get_subscribed_events();

        return $events;
	}

    public function install_activate() {
        $this->plugin_family->install_activate();
    }

    public function display_error_notice() {
        $this->plugin_family->display_error_notice();
    }
}
```
The methods ( `install_activate` & `display_error_notice` ) are required.

PS: This example is based on the assumption that your plugin utilizes EDA. If EDA is not available, you can iterate through the events returned by `PluginFamily::get_subscribed_events()` and use `add_action` accordingly.

## Development & Testing

To facilitate development and testing of the package, it is recommended to specify a development branch in the composer.json file of your project.

## Taking WP Rocket as example

```JSON
"require": {
    "wp-media/plugin-family": "dev-whatever-dev-branch"
}
```

PS: Always have the dev prefix before the actual branch.

```JSON
"repositories": [
        {
            "type": "vcs",
            "url": "https://github.com/wp-media/plugin-family"
        }
    ]
```