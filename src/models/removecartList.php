<?php

    require_once '../../php/db/mongodb.php'; 

    function removeitemFromCart($userId, $index){
        global $database;     

        $collection = $database->selectCollection('Cart_List');
        $userDocument = $collection->findOne(['userId' => $userId]);

        if($userDocument){

            $cartList = $userDocument['cart_list'];
            $cartArray = [];

            foreach ($cartList as $item) {
                $cartArray[] = $item;
            }
            unset($cartArray[$index]);
            $cartArray = array_values($cartArray);
            $result = $collection->updateOne(
                ['userId' => $userId],
                ['$set' => ['cart_list' => $cartArray]]
            );

            return $result;

        }
        else {
            return "User not found";
        }
    }
?>