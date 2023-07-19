<?php
require_once __DIR__ . '/vendor/autoload.php';
class SaleReport extends \koolreport\KoolReport
{
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
        // "users" tablosundan veri çekmek için sorgu cümlesini belirtin
        $this->src("automaker")->query("SELECT * FROM users")->pipe($this->dataStore("result"));
    }
}