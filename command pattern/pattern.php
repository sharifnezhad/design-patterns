<?php

interface Command {
    public function execute();
}

// Commands
class RandomNumber implements Command{

    public function execute()
    {
        return rand();
    }
}

class PrintMessage implements Command{

    public function execute()
    {
        return 'hello';
    }
}

// Invoker

class Invoker{
    protected $action;

    public function __construct(Command $command)
    {
        $this->action = $command;
    }

    public function result()
    {
        return $this->action->execute();
    }
}

$input = readline('enter action: ');

if (class_exists($input)) {
    $invoker = new Invoker(new $input);
    echo $invoker->result();
}else
    echo 'class does not exist';