<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users</title>


    <style>
       
        .cssHeader
        {
            background-color:#e9ffe8;
            font-family: "Times New Roman", Times, serif;
            font-size:15px;
        }
        .cssItem
        {
            background-color:#fdffe8;
            font-family: "Times New Roman", Times, serif;
            font-size:15px;

        }
    </style>


</head>
<body>

<?php
      use \koolreport\widgets\koolphp\Table;
      use \koolreport\widgets\google\AreaChart;
      use \koolreport\widgets\google\BarChart;
      use \koolreport\widgets\google\ColumnChart;
      use \koolreport\widgets\google\TreeMap;
      use \koolreport\widgets\google\PieChart;
      use \koolreport\widgets\google\LineChart;
      use \koolreport\widgets\google\ComboChart;
      use \koolreport\widgets\google\DonutChart;
      use \koolreport\widgets\google\Gauge;
      use \koolreport\widgets\google\Sankey;
      use \koolreport\widgets\google\ScatterChart;
      use \koolreport\widgets\google\Timeline;
      use \koolreport\widgets\google\GeoChart;
      use \koolreport\widgets\google\Histogram;
      use \koolreport\widgets\koolphp\Card;
?>

    <div class="container">
        <div class="col-sm-12">
            <?php
                Card::create(array(
                    "value"=>$this->src("automaker")->query("select count(id) from users"),
                    "title"=>"Total Number of Members",
                    "cssClass"=>array(
                        "card"=>"bg-info",
                        "title"=>"text-white",
                        "value"=>"text-white"
                    )
                ));


                Table::create(array(
                    "dataSource" => $this->dataStore("result"),
                    "cssClass"=>array(
                        "th"=>"cssHeader",
                        "tr"=>"cssItem"
                    ),
                    "paging"=>array(
                        "pageSize"=>10,
                        "pageIndex"=>0,
                    ),
                ));


                BarChart::create(array(
                    "dataSource" => $this->dataStore("result")
                ));
            ?>
        </div>
    </div>
   

       


</body>
</html>