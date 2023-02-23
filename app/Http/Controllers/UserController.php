<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Resources\PaymentResource;
use App\Models\Payment;
use Tymon\JWTAuth\Facades\JWTAuth;
use App\Http\Resources\UserResource;
use App\Models\User;

class UserController extends Controller
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
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json(UserResource::collection(User::all()));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {

        return response()->json(new UserResource(User::create($request->all())));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return response()->json(new UserResource(User::find($id)));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete(string $id)
    {
        return response()->json(['result' => User::destroy($id)]);
    }
}
