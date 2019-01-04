<?php

use GetOpt\GetOpt;
use GetOpt\Option;
use GetOpt\Command;
use GetOpt\ArgumentException;
use GetOpt\ArgumentException\Missing;

if (!class_exists('trebsqyArgs')) {

    class trebsqyArgs {
        
        private $getOpt;

        public function __construct() {
            $this->getOpt = new GetOpt();
            $this->init();
        }

        public function init() {


// define common options
            $this->getOpt->addOptions([
                        Option::create('l', 'limit', GetOpt::OPTIONAL_ARGUMENT)
                        ->setDescription('limit the record set to fetch in one go.')
                        ->setDefaultValue(1000),
            ]);

// process arguments and catch user errors
            try {
                try {
                    $this->getOpt->process();
                } catch (Missing $exception) {
                    // catch missing exceptions if help is requested
                    if (!$this->getOpt->getOption('help')) {
                        throw $exception;
                    }
                }
            } catch (ArgumentException $exception) {
                file_put_contents('php://stderr', $exception->getMessage() . PHP_EOL);
                echo PHP_EOL . $this->getOpt->getHelpText();
                exit;
            }
        }

        public function __get($name) {
            if ($data = $this->getOpt->getOption($name)) {
                return $data;

                return -1;
            }
        }

    }

}
