<?php
require_once __DIR__ . '/vendor/autoload.php';
class SaleReport extends \koolreport\KoolReport

{
    //GET BOOSTRAP
    use \koolreport\clients\Bootstrap;
    protected function settings()
    {
        return array(
            "dataSources" => array(
                "automaker" => array(
                    "connectionString" => "mysql:host=localhost;dbname=report",
                    "username" => "root",
                    "password" => "",
                    "charset" => "utf8"
                )
            )
        );
    }

    protected function setup()
    {
        $this->src("automaker")
        ->query("SELECT first_name as NAME, sum(price) as VALUE FROM users Group By id ORDER BY first_name LIMIT 10")
        ->pipe($this->dataStore("result"));
    }
}

