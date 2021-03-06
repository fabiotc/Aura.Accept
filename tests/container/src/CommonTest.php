<?php
namespace Aura\Accept\_Config;

use Aura\Di\ContainerAssertionsTrait;

use Aura\Di\_Config\AbstractContainerTest;

class CommonTest extends AbstractContainerTest
{
    protected function getConfigClasses()
    {
        return array(
            'Aura\Accept\_Config\Common'
        );
    }

    public function provideNewInstance()
    {
        return array(
            array('Aura\Accept\Accept'),
            array('Aura\Accept\Charset\CharsetNegotiator'),
            array('Aura\Accept\Encoding\EncodingNegotiator'),
            array('Aura\Accept\Language\LanguageNegotiator'),
            array('Aura\Accept\Media\MediaNegotiator'),
        );
    }
}
