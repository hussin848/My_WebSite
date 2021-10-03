<x-app-layout>
    <x-slot name="header">
        @extends('layouts.admin')
        @section('content')
            <!-- Page Heading -->
            <div class="row">
                <!-- Pie Chart -->
                <div class="col-xl-4 col-lg-5">
                    <div class="card shadow mb-4">
                        <!-- Card Header - Dropdown -->
                        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                            <h6 class="m-0 font-weight-bold text-primary">Top Users</h6>
                        </div>
                        <!-- Card Body -->
                        <div class="card-body">
                            <div class="chart-pie pt-4 pb-2">
                                <canvas id="myPieChart"></canvas>
                            </div>
                            <div class="mt-4 text-center small" id="names_js">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Area Chart -->
                <div class="col-xl-8 col-lg-7">
                    <div class="card shadow mb-4">
                        <!-- Card Header - Dropdown -->
                        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                            <h6 class="m-0 font-weight-bold text-primary">Earnings Overview</h6>
                            <div class="dropdown no-arrow">
                                <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                                    aria-labelledby="dropdownMenuLink">
                                    <div class="dropdown-header">Dropdown Header:</div>
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                </div>
                            </div>
                        </div>
                        <table class="table display responsive nowrap">
                            <thead>
                                <tr>
                                    <th class="wd-15p">ID</th>
                                    <th class="wd-15p">Name</th>
                                    <th class="wd-15p">Email</th>
                                    <th class="wd-15p">Subject</th>
                                    <th class="wd-15p">message</th>
                                    <th class="wd-15p">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($dash as $row)
                                    <tr>
                                        <td>{{ $row->id }}</td>
                                        <td>{{ $row->name }}</td>
                                        <td>{{ $row->email }}</td>
                                        <td>{{ $row->subject }}</td>
                                        <td>{{ $row->massege }}</td>
                                        <td><a href="{{ URL::to('delete/' . $row->id) }}"><button
                                                    style="background-color: rgb(139, 0, 35);">delete</button></a></td>
                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
                        <!-- Card Body -->
                    </div>
                </div>
            </div>

        @endsection

        @section('script')
            <!-- Page level plugins -->
            <script src="{{ asset('backend/vendor/chart.js/Chart.min.js') }}"></script>

            <!-- Page level custom scripts -->
            <script src="{{ asset('backend/js/demo/chart-area-demo.js') }}"></script>
            <script src="{{ asset('backend/js/demo/chart-pie-demo.js') }}"></script>
        @endsection

    </x-slot>



</x-app-layout>
