<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Response;

class OrdersController extends Controller
{
    /**
     * Variable to limit orders to display.
     */
    const LIMIT_ORDERS_TO_DISPLAY = 5;

    /**
     * Display a listing of the orders.
     *
     * @param null $count
     *
     * @return mixed
     */
    public function index($count = null)
    {
        if (!Auth::guest()) {
            if ($count != null) {
                return Response::json(
                    Auth::user()->orders()->limit($count)->get(), 200
                );
            }

            return Response::json(
                Auth::user()->orders()->limit(self::LIMIT_ORDERS_TO_DISPLAY)->get(), 200
            );
        }

        return Response::json(null, 201);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int                      $id
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the order from storage.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $order = Order::findOrFail($id);
            $order->delete();
        } catch (ModelNotFoundException $ex) {
            return Response::json([
                'success'  => false,
                'messages' => [
                    'Order was not found',
                ],
            ], 400);
        }

        return Response::json([
            'success'  => true,
            'messages' => [
                'Order successfully deleted',
            ],
        ], 200);
    }
}
