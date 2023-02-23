<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaymentController extends Controller
{
    /**
     * Create a new PaymentController instance.
     *
     * @return void
     */
    public function __construct() {
        $this->middleware('auth:api');
    }

    /**
     * Get all Payments
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index(Request $request) {
        return Response::json(new PaymentResource::collection(Payment::all()));
    }
}
