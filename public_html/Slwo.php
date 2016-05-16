<?php


/**
 * Sorted list with occurrences by contents.
 */
namespace Deirde\Slwo {

    class Slwo {

        private $contents;
        private $min = 4;
        private $sort;

        /**
         * GitBackup constructor.
         * @param array $config
         */
        public function __construct($contents) {

            $this->contents = $contents;

        }


        /**
         * @param $sort
         */
        public function sort($sort) {

            $_ = [
                'natsort',
                'asort',
                'arsort',
                'krsort',
                'ksort',
                'natcasesort',
                'rsort',
                'shuffle'
            ];

            if (in_array($sort, $_)) {
                $this->sort = $sort;
            } else {
                trigger_error('The sort parameter must be one of the following: ' . implode($_, ', ') .
                    '. Ref. http://php.net/manual/en/array.sorting.php', E_USER_ERROR);
            }

        }

        public function min($min) {

            if (!is_integer($min)) {
                trigger_error('The min parameter must be an integer', E_USER_ERROR);
            } else {
                $this->min = $min;
            }

        }

        public function output() {

            /**
             * Normalize the contents.
             */
            $contents = strip_tags($this->contents);
            $contents = filter_var($contents, FILTER_SANITIZE_STRING);
            $contents = strtr($contents, array('.' => '', ',' => '', '"' => ''));

            /**
             * Get the words.
             */
            preg_match_all('/([a-zA-Z]|\xC3[\x80-\x96\x98-\xB6\xB8-\xBF]|\xC5[\x92\x93\xA0\xA1\xB8\xBD\xBE]){' . $this->min . ',}/',
                $contents, $occurrences);

            /**
             * Lowercase.
             */
            $occurrences = array_map('strtolower', $occurrences[0]);

            /**
             * Count occurrences.
             */
            $response = array_count_values($occurrences);

            /**
             * Sort.
             */
            call_user_func_array($this->sort, array(&$response));

            return $response;

        }

        /**
         * @return mixed
         */
        public function htmlOutput() {

            foreach ($this->output() as $key => $value) {

                echo $key . ' => ' . $value . '<br/>';

            }

        }

    }

}

?>