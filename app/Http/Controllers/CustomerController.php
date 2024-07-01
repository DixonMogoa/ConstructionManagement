<?php
class CustomerController extends Controller
{
    public function index()
    {
        // Customer dashboard
    }

    public function checkItems()
    {
        $items = Item::all();
        return view('customer.items', compact('items'));
    }

    public function orderItem(Request $request)
    {
        // Logic to order item
    }
}