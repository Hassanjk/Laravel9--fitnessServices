@extends('layouts.adminBase')

@section('title', 'MyDashBoard')

@section('content')
    <main class="main-content position-relative border-radius-lg ">
        @include('AdminPanel.header')
        <div class="container-fluid py-4">

            <div class="row">
                <div class="col-12">
                    <div class="card mb-4">
                        <div class="card-header pb-0">
                            <h6>Services Table</h6>
                        </div>
                        <div class="card-body px-0 pt-0 pb-2">
                            <div class="table-responsive p-0">
                                <table class="table align-items-center mb-0">
                                    <thead>
                                    <tr>
                                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Id
                                        </th>
                                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Service-name
                                        </th>
                                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Image
                                        </th>
                                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Description
                                        </th>
                                        <th class="text-secondary opacity-7"></th>
                                        <th class="text-secondary opacity-7"></th>
                                        <th class="text-secondary opacity-7"></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($data as $rs)
                                        <tr>

                                            <td class="align-middle text-center">
                                                <span class="text-secondary text-xs font-weight-bold">{{$rs->id}}</span>
                                            </td>
                                            <td class="align-middle text-center">
                                                <span
                                                    class="text-secondary text-xs font-weight-bold">{{$rs->title}}</span>
                                            </td>
                                            <td class="align-middle text-center">
                                                <span
                                                    class="text-secondary text-xs font-weight-bold">{{$rs->image}}</span>
                                            </td>
                                            <td class="align-middle text-center">
                                                <span
                                                    class="text-secondary text-xs font-weight-bold">{{$rs->description}}</span>
                                            </td>
                                            <td class="align-middle">
                                                <a href="/admin/category/delete{{$rs->id}}"
                                                   class="font-weight-bold text-xs btn btn-danger" data-toggle="tooltip"
                                                   data-original-title="Edit user">
                                                    Delete
                                                </a>
                                            </td>
                                            <td class="align-middle">
                                                <a href="/admin/category/edit{{$rs->id}}"
                                                   class="font-weight-bold text-xs btn btn-warning"
                                                   data-toggle="tooltip" data-original-title="Edit user">
                                                    Edit
                                                </a>
                                            </td>
                                            <td class="align-middle">
                                                <a href="/admin/category/show{{$rs->id}}"
                                                   class="font-weight-bold text-xs btn btn-info" data-toggle="tooltip"
                                                   data-original-title="Edit user">
                                                    show
                                                </a>
                                            </td>

                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
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


