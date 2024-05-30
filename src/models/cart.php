<?php
 
    require_once '../../php/db/mongodb.php'; 

    function insertOrUpdateCart($userId, $proId, $qty, $name, $price, $img){
        global $database;       

        $collection = $database->selectCollection('Cart_List');

        
        $userDocument = $collection->findOne(['userId' => $userId]);

        
        if (!$userDocument) {
            $document = [
                'userId' => $userId,
                'cart_list' => [
                    [
                        'productId' => $proId,
                        'quantity' => $qty,
                        'Name' => $name,
                        'Price' => $price,
                        'img' => $img
                    ]
                ]
            ];
            $result = $collection->insertOne($document);
        } else {
            
            $cartList = $userDocument['cart_list'];
            $cartList[] = [
                'productId' => $proId,
                'quantity' => $qty,
                'Name' => $name,
                'Price' => $price,
                'img' => $img
            ];
            $result = $collection->updateOne(
                ['userId' => $userId],
                ['$set' => ['cart_list' => $cartList]]
            );
        }

        return $result;
    }

    function getcartList($userId){
        global $database;

        $collection = $database->selectCollection('Cart_List');
        $userDocument = $collection->findOne(['userId' => $userId]);
        return $userDocument ? $userDocument['cart_list'] : [];
    }
?>
