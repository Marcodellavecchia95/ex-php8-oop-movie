 <?php
    class Genre
    {
        public $name;
        public $description;

        function __construct($name, $description)
        {
            $this->name = $name;
            $this->description = $description;
        }

        public function getName()
        {
            return $this->name;
        }

        public function getDescription()
        {
            return $this->description;
        }
    }
