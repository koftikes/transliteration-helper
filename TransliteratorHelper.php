<?php
/**
 * @copyright Copyright (c) 20013 2amigOS! Consulting Group LLC
 * @link http://2amigos.us
 * @license http://www.opensource.org/licenses/bsd-license.php New BSD License
 */

namespace dosamigos\helpers;

/**
 * TransliteratorHelper transliterates UTF-8 encoded text to US-ASCII. Based on Drupal's transliteration module, which
 * is based on UtfNormal.php from MediaWiki (http://www.mediawiki.org).
 *
 * @see http://userguide.icu-project.org/transforms/general
 * @see http://www.utf8-chartable.de/unicode-utf8-table.pl
 * @see https://doc.wikimedia.org/mediawiki-core/master/php/html/classUtfNormal.html
 * @see http://drupal.org/project/issues/transliteration
 *
 * @author Antonio Ramirez <amigo.cobos@gmail.com>
 */
class TransliteratorHelper extends BaseTransliteratorHelper
{
}