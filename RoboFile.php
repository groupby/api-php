<?php

class RoboFile extends \Robo\Tasks
{

    function install()
    {
        $this->taskComposerUpdate('./composer.phar')
            ->preferDist()
            ->run();
    }

    function test()
    {
        $this->install();

        $this->taskPhpUnit()
            ->configFile('phpunit.xml')
            ->run();
    }

}
