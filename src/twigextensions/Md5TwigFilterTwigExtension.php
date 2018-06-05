<?php
/**
 * MD5 Twig Filter plugin for Craft CMS 3.x
 *
 * A filter for twig to hash a string with MD5
 *
 * @link      https://steadfastcollective.com/
 * @copyright Copyright (c) 2018 Daniel Jones
 */

namespace steadfastcollective\md5twigfilter\twigextensions;

use steadfastcollective\md5twigfilter\Md5TwigFilter;

use Craft;

/**
 * Twig can be extended in many ways; you can add extra tags, filters, tests, operators,
 * global variables, and functions. You can even extend the parser itself with
 * node visitors.
 *
 * http://twig.sensiolabs.org/doc/advanced.html
 *
 * @author    Daniel Jones
 * @package   Md5TwigFilter
 * @since     1.0.0
 */
class Md5TwigFilterTwigExtension extends \Twig_Extension
{
    // Public Methods
    // =========================================================================

    /**
     * Returns the name of the extension.
     *
     * @return string The extension name
     */
    public function getName()
    {
        return 'Md5TwigFilter';
    }

    /**
     * Returns an array of Twig filters, used in Twig templates via:
     *
     *      {{ 'something' | someFilter }}
     *
     * @return array
     */
    public function getFilters()
    {
        return [
            new \Twig_SimpleFilter('md5', [$this, 'strMd5']),
        ];
    }

    /**
     * Returns an array of Twig functions, used in Twig templates via:
     *
     *      {% set this = someFunction('something') %}
     *
    * @return array
     */
    public function getFunctions()
    {
        return [
            new \Twig_SimpleFunction('md5', [$this, 'strMd5']),
        ];
    }

    /**
     * Our function called via Twig; it can do anything you want
     *
     * @param null $text
     *
     * @return string
     */
    public function strMd5($text = null)
    {
        $result = md5($text);

        return $result;
    }
}
