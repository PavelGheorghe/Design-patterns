<?php

namespace DesignePatternsInPHP\Structural\Facade;

class Facade
{
    /**
     * @var Subsystem1
     */
    private $subsystem1;
    /**
     * @var Subsystem2
     */
    private $subsystem2;

    public function __construct(
        Subsystem1 $subsystem1,
        Subsystem2 $subsystem2
    )
    {
        $this->subsystem1 = $subsystem1;
        $this->subsystem2 = $subsystem2;
    }

    public function operation()
    {
        $this->subsystem1->operation1();
        $this->subsystem2->operation1();

        echo "Subsystems is ready...\n";

        $this->subsystem1->operationN();
        $this->subsystem2->operationN();

        echo "Job Done!!";

    }
}