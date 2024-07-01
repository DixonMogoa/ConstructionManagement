<?php

use Illuminate\Http\Request;

class VendorController extends Controller
{
    public function index()
    {
        // Vendor dashboard
    }

    public function manageItems()
    {
        $items = Item::where('vendor_id', auth()->id())->get();
        return view('vendor.items', compact('items'));
    }

    public function addItem(Request $request)
    {
        // Logic to add item
    }

    public function updateItem(Request $request, $id)
    {
        // Logic to update item
    }

    public function deleteItem($id)
    {
        // Logic to delete item
    }
}