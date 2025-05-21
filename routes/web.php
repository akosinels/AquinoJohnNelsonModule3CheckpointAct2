<?php

use Illuminate\Support\Facades\Route;


// Route for customer with required parameters [cite: 111, 138]
Route::get('/customer/{customerId}/{name}/{address}', function ($customerId, $name, $address) {
    return view('customerDetail', [
        'customerId' => $customerId,
        'customerName' => $name,
        'customerAddress' => $address
    ]);
})->name('customer.show.param'); // New name to avoid conflict

// Route for item with required parameters [cite: 111, 139]
Route::get('/item/{itemNo}/{name}/{price}', function ($itemNo, $name, $price) {
    return view('itemDetail', [
        'itemNo' => $itemNo,
        'itemName' => $name,
        'itemPrice' => $price
    ]);
})->name('item.show.param'); // New name

// Route for order with required parameters [cite: 111, 140]
Route::get('/order/{customerId}/{name}/{orderNo}/{date}', function ($customerId, $name, $orderNo, $date) {
    return view('orderParamDetail', [ // Changed view name to avoid conflict with general 'Order' view
        'customerId' => $customerId,
        'customerName' => $name,
        'orderNo' => $orderNo,
        'orderDate' => $date
    ]);
})->name('order.show.param'); // New name

// Route for orderDetails with required parameters [cite: 111, 141]
Route::get('/orderDetails/{transNo}/{orderNo}/{itemId}/{name}/{price}/{qty}', function ($transNo, $orderNo, $itemId, $name, $price, $qty) {
    return view('orderDetailsParamView', [ // Changed view name
        'transNo' => $transNo,
        'orderNo' => $orderNo,
        'itemId' => $itemId,
        'itemName' => $name,
        'itemPrice' => $price,
        'quantity' => $qty
    ]);
})->name('order.details.show.param'); // New name