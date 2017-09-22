<?php
/**
 * Rating plugin for Craft CMS 3.x
 *
 * Ratings system
 *
 * @link      https://billyfagan.co.uk
 * @copyright Copyright (c) 2017 Billy Fagan
 */

namespace billythekid\rating\variables;

use billythekid\rating\Rating;

use Craft;

/**
 * Rating Variable
 *
 * Craft allows plugins to provide their own template variables, accessible from
 * the {{ craft }} global variable (e.g. {{ craft.rating }}).
 *
 * https://craftcms.com/docs/plugins/variables
 *
 * @author    Billy Fagan
 * @package   Rating
 * @since     1.0.0
 */
class RatingVariable
{
    // Public Methods
    // =========================================================================

    /**
     * Whatever you want to output to a Twig template can go into a Variable method.
     * You can have as many variable functions as you want.  From any Twig template,
     * call it like this:
     *
     *     {{ craft.rating.exampleVariable }}
     *
     * Or, if your variable requires parameters from Twig:
     *
     *     {{ craft.rating.exampleVariable(twigValue) }}
     *
     * @param null $optional
     * @return string
     */
    public function exampleVariable($optional = null)
    {
        $result = "And away we go to the Twig template...";
        if ($optional) {
            $result = "I'm feeling optional today...";
        }
        return $result;
    }
}
