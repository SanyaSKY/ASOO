@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Orders</div>

                <div class="panel-body">
                    <div class="col-md-12">
                        <div class="row">
                            <a href="" class="btn btn-default">New Order</a>
                        </div>
                    </div>
                    <div class="col-md-12" style="margin-top: 15px;">
                        <div class="row">
                            <div class="panel panel-default">
                                <!-- Default panel contents -->
                                <!-- Table -->

                                <template id="order-list">
                                    <tr v-for="order in orders">
                                        <td>#@{{ order.id }}</td>
                                        <td>@{{ order.description }}</td>
                                        <td>@{{ order.type }}</td>
                                        <td>@{{ order.created_at }}</td>
                                        <td>@{{ order.status }}</td>
                                        <td><button class=""><i class="fa fa-trash" aria-hidden="true"></i></button></td>
                                    </tr>
                                </template>

                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Description</th>
                                            <th>Type <i class="fa fa-sort" aria-hidden="true"></i></th>
                                            <th>Created at <i class="fa fa-sort" aria-hidden="true"></i></th>
                                            <th>Status <i class="fa fa-sort" aria-hidden="true"></i></th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <orders></orders>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="row" style="text-align: center">
                            <button class="btn btn-default"style="display: inline-block">Show More</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
