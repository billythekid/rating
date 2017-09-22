<?php
/**
 * Rating plugin for Craft CMS 3.x
 *
 * Ratings system
 *
 * @link      https://billyfagan.co.uk
 * @copyright Copyright (c) 2017 Billy Fagan
 */

namespace billythekid\rating\services;

use billythekid\rating\Rating;

use Craft;
use craft\base\Component;

/**
 * RatingService Service
 *
 * All of your plugin’s business logic should go in services, including saving data,
 * retrieving data, etc. They provide APIs that your controllers, template variables,
 * and other plugins can interact with.
 *
 * https://craftcms.com/docs/plugins/services
 *
 * @author    Billy Fagan
 * @package   Rating
 * @since     1.0.0
 */
class RatingService extends Component
{
    // Public Methods
    // =========================================================================

    /**
     * This function can literally be anything you want, and you can have as many service
     * functions as you want
     *
     * From any other plugin file, call it like this:
     *
     *     Rating::$plugin->ratingService->exampleService()
     *
     * @return mixed
     */
    public function exampleService()
    {
        $result = 'something';
        // Check our Plugin's settings for `someAttribute`
        if (Rating::$plugin->getSettings()->someAttribute) {
        }

        return $result;
    }
}
