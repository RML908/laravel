<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LocationController extends Controller
{
    public function store(Request $request)
    {
        // code to create a location
    }

    public function update(Request $request, $id)
    {
        // code to update a location
    }

    public function delete($id)
    {
        // code to delete a location
    }

    public function index()
    {
        // code to get a list of locations
    }

    public function showByUser($userId)
    {
        // code to get a list of locations by user
    }

    public function showByIp($ip)
    {
        // code to get a list of locations by ip
    }
}
