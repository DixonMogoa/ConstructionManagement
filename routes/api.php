<?php
Route::get('booking/all', [OrderController::class, 'allBookings']);
Route::get('vendor/items/{vendorName}', [ItemController::class, 'vendorItems']);