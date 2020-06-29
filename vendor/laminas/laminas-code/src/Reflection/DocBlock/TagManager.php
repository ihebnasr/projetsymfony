<?php

/**
 * @see       https://github.com/laminas/laminas-code for the canonical source repository
 * @copyright https://github.com/laminas/laminas-code/blob/master/COPYRIGHT.md
 * @license   https://github.com/laminas/laminas-code/blob/master/LICENSE.md New BSD License
 */

namespace Laminas\Code\Reflection\DocBlock;

use Laminas\Code\Generic\Prototype\PrototypeClassFactory;
use Laminas\Code\Reflection\DocBlock\Tag\TagInterface;

class TagManager extends PrototypeClassFactory
{
    /**
     * @return void
     */
    public function initializeDefaultTags()
    {
        $this->addPrototype(new Tag\ParamTag());
        $this->addPrototype(new Tag\ReturnTag());
        $this->addPrototype(new Tag\MethodTag());
        $this->addPrototype(new Tag\PropertyTag());
        $this->addPrototype(new Tag\AuthorTag());
        $this->addPrototype(new Tag\LicenseTag());
        $this->addPrototype(new Tag\ThrowsTag());
        $this->addPrototype(new Tag\VarTag());
        $this->setGenericPrototype(new Tag\GenericTag());
    }

    /**
     * @param string $tagName
     * @param string $content
     * @return TagInterface
     */
    public function createTag($tagName, $content = null)
    {
        /* @var TagInterface $newTag */
        $newTag = $this->getClonedPrototype($tagName);

        if ($content) {
            $newTag->initialize($content);
        }

        return $newTag;
    }
}
