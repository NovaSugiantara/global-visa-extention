<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h2>{{$title}}</h2>
                <!-- <div class="d-flex flex-row-reverse"><button class="btn btn-sm btn-pill btn-outline-primary font-weight-bolder" id="createNewUser"><i class="fas fa-plus"></i>add data </button></div> -->
            </div>
            <div class="card-body">
                <div class="col-md-12">
                    <div class="table-responsive">
                    @include('../../flash_message.flash_message')
                        <table class="table" id="tablePromo">
                            <thead class="font-weight-bold text-center">
                                <tr>
                                    <th>No.</th>
                                    <th>Name</th>
                                    <th>Currency</th>
                                    <th>Price</th>
                                    <th style="width:90px;">Action</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                @foreach ($promos as $promo)
                                <tr>
                                    <td>{{$promo->id}}</td>
                                    <td>{{$promo->name}}</td>
                                    <td>{{$promo->currency}}</td>
                                    <td>{{$promo->price}}</td>
                                    <td>
                                        <!-- Button trigger modal -->
                                        <a href="{{ url('/promo/edit') }}/{{ $promo->id }}" class="btn btn-primary"><i class="fa-solid fa-pen-to-square"></i></a>
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
</div>
