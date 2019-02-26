<?php
require 'connect.php';
require 'looptemplater.php';
require 'utils/generalutils.php';

function categoryLoopTemplate($conn, $table, $category, $notifymecount){
    //this will return item from categories
    $products = retrieveaproducts($conn, $table, $category, 1, 0, 0, 6);
    if($products != False){
        //show the items
        for($x = 0; $x < count($products); $x++){
            $singleItem = $products[$x];
            $price = number_format($singleItem['price']);
            echo returnProperItems($singleItem['id'], $singleItem['imageone'], $singleItem['label'], $singleItem['itemtitle'], $price, $singleItem['size']);
        }
    }else{
        //mark this category as needing restocking
        //then return the empty category indicator
        if(file_exists('logs/Restock_errors.txt')){
            //append data
            createnewTXTFile('logs/Restock_errors.txt', 'a', $category);
        }else{
            //create new file
            createnewTXTFile('logs/Restock_errors.txt', 'w', $category);
        }
        echo returnEmptyCategory();
    }

}


function showAllItems($conn, $table){
    // this is particularly geared to retrieving all items from an entire table
    // say for instance the labels category will want items from all categories
    $products = retrieveallItems($conn, $table, 1, 0, 0, 6);
    if($products != False){
        //show the items
        for($x = 0; $x < count($products); $x++){
            $singleItem = $products[$x];
            $price = number_format($singleItem['price']);
            echo returnProperItems($singleItem['id'], $singleItem['imageone'], $singleItem['label'], $singleItem['itemtitle'], $price, $singleItem['size']);
        }
    }else{
        //mark this category as needing restocking
        //then return the empty category indicator
        if(file_exists('logs/Restock_errors.txt')){
            //append data
            createnewTXTFile('logs/Restock_errors.txt', 'a', 'all');
        }else{
            //create new file
            createnewTXTFile('logs/Restock_errors.txt', 'w', 'all');
        }
        echo returnEmptyCategory();
    }
}

function showCategorySubcategory($conn, $table, $category, $subcategory, $notifymecount){
    //this will return items from a subcategory in a specific category
    $products = retrieveaproductsCategorySubcat($conn, $table, $category, $subcategory, 1, 0, 0, 6);
    if($products != False){
        //show the items
        for($x = 0; $x < count($products); $x++){
            $singleItem = $products[$x];
            $price = number_format($singleItem['price']);
            echo returnProperItems($singleItem['id'], $singleItem['imageone'], $singleItem['label'], $singleItem['itemtitle'], $price, $singleItem['size']);
        }
    }else{
        //mark this category as needing restocking
        //then return the empty category indicator
        if(file_exists('logs/Restock_errors.txt')){
            //append data
            createnewTXTFile('logs/Restock_errors.txt', 'a', "$category -> $subcategory");
        }else{
            //create new file
            createnewTXTFile('logs/Restock_errors.txt', 'w', "$category -> $subcategory");
        }
        echo returnEmptyCategory();
    }
}


function subcategoryTemplateLoops($conn, $table, $subcategory, $notifymecount){
    //this will return item from categories
    $products = retrieveaproductsOnlySubcategory($conn, $table, $subcategory, 1, 0, 0, 6);
    if($products != False){
        //show the items
        for($x = 0; $x < count($products); $x++){
            $singleItem = $products[$x];
            $price = number_format($singleItem['price']);
            echo returnProperItems($singleItem['id'], $singleItem['imageone'], $singleItem['label'], $singleItem['itemtitle'], $price, $singleItem['size']);
        }
    }else{
        //mark this category as needing restocking
        //then return the empty category indicator
        if(file_exists('logs/Restock_errors.txt')){
            //append data
            createnewTXTFile('logs/Restock_errors.txt', 'a', "$subcategory -> subcategory");
        }else{
            //create new file
            createnewTXTFile('logs/Restock_errors.txt', 'w', "$subcategory -> subcategory");
        }
        echo returnEmptyCategory();
    }

}


function categoryLoopSexed($conn, $table, $category, $sex, $notifymecount){
    //this will return item from categories
    $products = retrieveaproductsOnlyCategorySingleSex($conn, $table, $category, $sex, 1, 0, 0, 6);
    if($products != False){
        //show the items
        for($x = 0; $x < count($products); $x++){
            $singleItem = $products[$x];
            $price = number_format($singleItem['price']);
            echo returnProperItems($singleItem['id'], $singleItem['imageone'], $singleItem['label'], $singleItem['itemtitle'], $price, $singleItem['size']);
        }
    }else{
        //mark this category as needing restocking
        //then return the empty category indicator
        if(file_exists('logs/Restock_errors.txt')){
            //append data
            createnewTXTFile('logs/Restock_errors.txt', 'a', "category -> $category | sex -> unisex | -> not [$sex]");
        }else{
            //create new file
            createnewTXTFile('logs/Restock_errors.txt', 'w', "category -> $category | sex -> unisex | -> not [$sex]");
        }
        echo returnEmptyCategory();
    }

}

function subcategoryLoopSexed($conn, $table, $subcategory, $sex, $notifymecount){
    //this will return item from categories
    $products = retrieveaproductsOnlySubCategorySingleSex($conn, $table, $subcategory, $sex, 1, 0, 0, 6);
    if($products != False){
        //show the items
        for($x = 0; $x < count($products); $x++){
            $singleItem = $products[$x];
            $price = number_format($singleItem['price']);
            echo returnProperItems($singleItem['id'], $singleItem['imageone'], $singleItem['label'], $singleItem['itemtitle'], $price, $singleItem['size']);
        }
    }else{
        //mark this category as needing restocking
        //then return the empty category indicator
        if(file_exists('logs/Restock_errors.txt')){
            //append data
            createnewTXTFile('logs/Restock_errors.txt', 'a', "subcategory -> $subcategory | sex -> unisex | -> not [$sex]");
        }else{
            //create new file
            createnewTXTFile('logs/Restock_errors.txt', 'w', "subcategory -> $subcategory | sex -> unisex | -> not [$sex]");
        }
        echo returnEmptyCategory();
    }

}

function allItemsSingleGender($conn, $table, $category, $sex, $notifymecount){
    //this will return item from single gender....reverse of what is provided
    $products = retrieveallProductsFromOneSingleSex($conn, $table, $sex, 1, 0, 0, 6);
    if($products != False){
        //show the items
        for($x = 0; $x < count($products); $x++){
            $singleItem = $products[$x];
            $price = number_format($singleItem['price']);
            echo returnProperItems($singleItem['id'], $singleItem['imageone'], $singleItem['label'], $singleItem['itemtitle'], $price, $singleItem['size']);
        }
    }else{
        //mark this category as needing restocking
        //then return the empty category indicator
        if(file_exists('logs/Restock_errors.txt')){
            //append data
            createnewTXTFile('logs/Restock_errors.txt', 'a', " sex -> unisex | -> not [$sex]");
        }else{
            //create new file
            createnewTXTFile('logs/Restock_errors.txt', 'w', " sex -> unisex | -> not [$sex]");
        }
        echo returnEmptyCategory();
    }

}

?>
