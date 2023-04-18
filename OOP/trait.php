<?php
trait diamondWatches{
    public function gold(){
        echo "it's made with gold!\n";
    }

    public function price(){
        echo "oh! it's priceless!!\n";
    }
}

trait expensiveShits{
    public function highPrice(){
        echo "it's fucking expensive!\n";
    }
}

class Rolex{
    use diamondWatches, expensiveShits;

    public function runTraitFuncs(){
        $this->gold();
        $this->price();
        $this->highPrice();
    }
}

$rolex = new Rolex();
$rolex->runTraitFuncs();