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
                            <h6>Create Service</h6>
                        </div>
                        <div class="card-body px-0 pt-0 pb-2">
                            <div class="p-4 " style="background-color: #646b76 !important;">
                                <form action="/admin/category/store" method="post">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <input type="text" class="form-control form-control-alternative"
                                                       id="exampleFormControlInput1" name="title"
                                                       placeholder="enter_title">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <input type="text" class="form-control form-control-alternative"
                                                       id="exampleFormControlInput1" name="description"
                                                       placeholder="enter_description">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <input type="text" class="form-control form-control-alternative"
                                                       id="exampleFormControlInput1" name="month-number"
                                                       placeholder="enter_month-number">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group has-success">
                                                <input type="file" placeholder="enter-image"
                                                       class="form-control form-control-alternative is-valid"/>
                                            </div>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-secondary btn-lg w-100"
                                            style="background:#4355b5">Create
                                    </button>
                                </form>
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


