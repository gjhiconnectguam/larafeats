<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IPAddressController extends Controller
{
    /**
     * Shows the form for displaying the client
     * ip address
     *
     * @return Response
     */
    public function index()
    {
        return view('get_client_ips.index');
    }

    /**
     * Returns the request data with the ip address
     *
     * @return Response
     */
    public function store(Request $request)
    {
        return redirect()->route('client.ips')
            ->with('request', json_encode($request))
            ->with('has_result' , true)
            ->with('ip_address', $request->ip())
            ->with('ip_addresses', json_encode($request->getClientIps()));
    }
}
