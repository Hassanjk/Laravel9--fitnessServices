@extends('layouts.adminBase')

@section('title', 'Service-single')

@section('content')
    <main class="main-content position-relative border-radius-lg ">
        @include('AdminPanel.header')
        <div class="container-fluid py-4">

            <div class="row">
                <div class="col-12">
                    <div class="card mb-4">
                        <div class="card-header pb-0">
                            <h6>Single Service Details</h6>
                        </div>
                        <div class="card-body px-0 pt-0 pb-2">
                            <div class="table-responsive p-0">
                                <div class="btn btn-secondary btn-lg w-25" style="background:#4355b5"><a
                                        href="/admin/category/edit/{{$data->id}}"
                                        style="text-decoration: none;color: white"> edit</a>
                                </div>
                                <div class="btn btn-primary btn-lg w-25" style="background:#f5365c"><a
                                        href="/admin/category/delete/{{$data->id}}"
                                        style="text-decoration: none;color: white"> Delete Service</a>
                                </div>
                                <table class="table align-items-center mb-0">
                                    <tr>
                                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Id
                                        </th>
                                        <td class="align-middle text-center">
                                            <span class="text-secondary text-xs font-weight-bold">{{$data->id}}</span>
                                        </td>
                                    </tr>

                                    <tr>
                                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Service-name
                                        </th>
                                        <td class="align-middle text-center">
                                            <span
                                                class="text-secondary text-xs font-weight-bold">{{$data->title}}</span>
                                        </td>
                                    </tr>

                                    <tr>
                                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Service-Description
                                        </th>
                                        <td class="align-middle text-center">
                                            <span
                                                class="text-secondary text-xs font-weight-bold">{{$data->description}}</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Service-image
                                        </th>
                                        <td class="align-middle text-center">
                                            <span
                                                class="text-secondary text-xs font-weight-bold">{{$data->image}}</span>
                                        </td>
                                    </tr>

                                </table>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{--            footer must be included here!--}}
        @include('AdminPanel.footer')
        </div>
    </main>
@endsection


