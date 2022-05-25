<?php
require_once "../layout/header.php";
include_once "../classes/inventory_db.php";
$inventory=new Inventory();
if($inventory->get_inventory()){
    foreach($inventory->get_inventory() as $results){
        echo $results["name"]."\t";
        echo $results["quantity"]."\t";
        echo $results["price"]."\t";
        echo $results["barcode"]."\t";
        echo "<button>Edit</button>"."\t";;
        echo "<button>Update</button>"."\t";;
        echo "<button>delete</button>"."\t";;
        echo "<br>";
    }
}
?>