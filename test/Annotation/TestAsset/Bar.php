<?php

/**
 * @see       https://github.com/laminas/laminas-code for the canonical source repository
 * @copyright https://github.com/laminas/laminas-code/blob/master/COPYRIGHT.md
 * @license   https://github.com/laminas/laminas-code/blob/master/LICENSE.md New BSD License
 */

namespace LaminasTest\Code\Annotation\TestAsset;

use Laminas\Code\Annotation\AnnotationInterface;

class Bar implements AnnotationInterface
{
    public $content;

    public function initialize($content)
    {
        $this->content = $content;
    }
}
