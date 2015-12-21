<?php


namespace AppBundle\Service;

use FOS\CommentBundle\Markup\ParserInterface;

class MyParser implements ParserInterface
{
  /**
   * Takes a markup string and returns raw html.
   *
   * @param  string $raw
   * @return string
   */
  public function parse($raw)
  {
    $re = "/(http(?:s?):\\/\\/(\\S+))/i";
    $subst = "<a href=\"$1\">$2</a>";

    return preg_replace($re, $subst, $raw);
  }
}