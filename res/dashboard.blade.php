<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <div class="col-sm-12">
                <div class="alert  alert-success alert-dismissible fade show" role="alert">
                     {{$sales}}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>

    <div class="content mt-3">
        <div class="col-xl-3 col-lg-6">
            <div class="card">
                <div class="card-body">
                    <div class="stat-widget-one">
                        <div class="stat-icon dib"><i class="ti-money text-success border-success"></i></div>
                        <div class="stat-content dib">
                            <div class="stat-text">Total Profit</div>
                            <div class="stat-digit">{{$invoice}}</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-6">
            <div class="card">
                <div class="card-body">
                    <div class="stat-widget-one">
                        <div class="stat-icon dib"><i class="ti-user text-primary border-primary"></i></div>
                        <div class="stat-content dib">
                            <div class="stat-text">New Customer</div>
                            <div class="stat-digit">{{$personal}}</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-6">
            <div class="card">
                <div class="card-body">
                    <div class="stat-widget-one">
                        <div class="stat-icon dib"><i class="ti-layout-grid2 text-warning border-warning"></i></div>
                        <div class="stat-content dib">
                            <div class="stat-text">Total lots sold</div>
                            <div class="stat-digit">{{$item}}</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- .content -->

    <div class="content mt-3">
    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="mb-3">Yearly Sales </h4>
                                <canvas id="sales-chart"></canvas>
                            </div>
                        </div>
                    </div><!-- /# column -->

                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="mb-3">The proposals</h4>
                                <li style="color:green;">Best-selling product cakes</li>
                                <li style="color:green;">Create packages for occasions</li>
                                <li style="color:red;" >It is not possible to expand at this time</li>
                                <li style="color:green;">Sales are up from the previous year</li>
                                
                            </div>
                        </div>
                    </div><!-- /# column -->

    </div> <!-- .content -->

    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Invoices Table</strong>
                            </div>
                            
                            <div class="card-body">
                            <div class="col text-base">
                                <a class="btn btn-secondary btn-sm ml-4" href="{{route('invoices.create')}}" role="button">{{ __('Add Invoice') }}</a>      
                            </div>
                            <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                        <thead>
                            <tr style="background-color: silver">
                                <th>invoice_number</th>
                                <th>items_number</th>
                                <th>VAT</th>
                                <th>price_befor_VAT</th>
                                <th>discount</th>
                                <th>total_price</th>
                                <th>sales_field</th>
                                <th>data</th>
                                <th>update</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        @foreach($income as $i)
                        <tbody>
                            <tr>

                                <td>{{$i->invoice_number}}</td>
                                <td>{{$i->items_number}}</td>
                                <td>{{$i->VAT}}</td>
                                <td>{{$i->price_befor_VAT}}</td>
                                <td>{{$i->discount}}</td>
                                <td>{{$i->total_price}}</td>
                                <td>{{$i->sales_field}}</td>
                                <td>{{$i->date}}</td>
                                <td>
                                <a href="{{ route('invoices.edit', $i->invoice_number)}}" class="btn btn-success btn-sm">Edit</a>
                                </td>
                                <td>
                                <form action="{{ route('invoices.destroy', $i->invoice_number)}}" method="post" style="display: inline-block">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger btn-sm bi bi-trash" type="submit">Delete</button>
                                </form>
                                </td>

                            </tr>
                        </tbody>
                        @endforeach
                            
                    </table>

                            </div>
                        </div>
                    </div>

       
    </div>

    
    <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <strong class="card-title">Incoming Table</strong>
                </div>
                
                <div class="card-body">
                    <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                        <thead>
                            <tr style="background-color: silver">
                            <th>Year</th>
                                <th>Total Income</th>
                            </tr>
                        </thead>
                        @foreach($incoming as $in)
                        <tbody>
                            <tr>
                                <td>{{$in->year}}</td>
                                <td>{{$in->Total_Income}}</td>
                            </tr>
                        </tbody>
                        @endforeach
                            
                    </table>
                </div>
            </div>
        </div>

       
    </div>
    
</x-app-layout>
