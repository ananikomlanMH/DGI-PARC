@extends('layout')


@section('title', 'Dashboard')

@section('content')
    <h3>Dashboard</h3>

    <div class="row">
        <div class="card col-4">
            <div class="card-body">
                <div class="row alig n-items-start">
                    <div class="col-8">
                        <h5 class="card-title mb-9 fw-semibold"> Maintennance ({{ date('Y') }}) </h5>
                        <h4 class="fw-semibold mb-3">{{ \App\Models\Maintenance::all()->count() }}</h4>
                        <div class="d-flex align-items-center pb-1">
                          <span
                              class="me-2 rounded-circle bg-light-danger round-20 d-flex align-items-center justify-content-center">
                            <i class="ti ti-tools text-danger"></i>
                          </span>
                            <p class="text-dark me-1 fs-3 mb-0">+9%</p>
                            <p class="fs-3 mb-0">last year</p>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="d-flex justify-content-end">
                            <div
                                class="text-white bg-secondary rounded-circle p-6 d-flex align-items-center justify-content-center">
                                <i class="ti ti-tools fs-6"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="card col-4">
            <div class="card-body">
                <div class="row alig n-items-start">
                    <div class="col-8">
                        <h5 class="card-title mb-9 fw-semibold"> Inventaires ({{ date('Y') }}) </h5>
                        <h4 class="fw-semibold mb-3">{{ \App\Models\Inventaire::all()->count() }}</h4>
                        <div class="d-flex align-items-center pb-1">
                          <span
                              class="me-2 rounded-circle bg-light-danger round-20 d-flex align-items-center justify-content-center">
                            <i class="ti ti-checkup-list text-danger"></i>
                          </span>
                            <p class="text-dark me-1 fs-3 mb-0">+9%</p>
                            <p class="fs-3 mb-0">last year</p>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="d-flex justify-content-end">
                            <div
                                class="text-white bg-secondary rounded-circle p-6 d-flex align-items-center justify-content-center">
                                <i class="ti ti-checkup-list fs-6"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="card col-4">
            <div class="card-body">
                <div class="row alig n-items-start">
                    <div class="col-8">
                        <h5 class="card-title mb-9 fw-semibold"> Matériels ({{ date('Y') }}) </h5>
                        <h4 class="fw-semibold mb-3">{{ \App\Models\Materiel::all()->count() }}</h4>
                        <div class="d-flex align-items-center pb-1">
                          <span
                              class="me-2 rounded-circle bg-light-danger round-20 d-flex align-items-center justify-content-center">
                            <i class="ti ti-package text-danger"></i>
                          </span>
                            <p class="text-dark me-1 fs-3 mb-0">+9%</p>
                            <p class="fs-3 mb-0">last year</p>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="d-flex justify-content-end">
                            <div
                                class="text-white bg-secondary rounded-circle p-6 d-flex align-items-center justify-content-center">
                                <i class="ti ti-package fs-6"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12 d-flex align-items-strech">
            <div class="card w-100">
                <div class="card-body">
                    <div class="d-sm-flex d-block align-items-center justify-content-between mb-9">
                        <div class="mb-3 mb-sm-0">
                            <h5 class="card-title fw-semibold">Situation Globale</h5>
                        </div>
                        <div>
                            <select class="form-select">
                                <option value="1">March 2023</option>
                                <option value="2">April 2023</option>
                                <option value="3">May 2023</option>
                                <option value="4">June 2023</option>
                            </select>
                        </div>
                    </div>
                    <div id="chart" style="min-height: 360px;">

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
