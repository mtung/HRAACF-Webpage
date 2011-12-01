<?

    /***********************************************************************
     * Stock.php
     *
     * Computer Science 50
     * Problem Set 7
     *
     * Defines a class (i.e., structure) for a stock.
     **********************************************************************/


    class Stock
    {
        // stock's symbol
        public $symbol = NULL;

        // stock's name
        public $name = NULL;

        // stock's most recent price 
        public $price = NULL;

        // time at which the stock last changed hands (measured in the number
        // of seconds since the Unix Epoch (January 1 1970 00:00:00 GMT)
        public $time = NULL;

        // percent by which the stock's price changed over the course 
        // of the most recent (business) day 
        public $change = NULL;

        // most recent (business) day's opening price
        public $open = NULL;

        // most recent (business) day's high
        public $high = NULL;

        // most recent (business) day's low
        public $low = NULL;
    }

?>
