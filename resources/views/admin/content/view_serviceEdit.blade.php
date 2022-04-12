<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h2>{{$title}}</h2>
            </div>
            <form method="POST" action="{{ url('service/update') }}/{{ $services->id }}">
                {{ csrf_field() }}
            <div class="card-body">
                <div class="col-md-12">
                    @include('../../flash_message.flash_message')
                    <div class="form-group">
                        <label for="formGroupExampleInput">Service Name</label>
                        <input type="text" class="form-control" id="formGroupExampleInput" name="name" placeholder="Services Name" value="{{ $services->name }}">
                    </div>
                    <div class="form-group">
                        <label for="formGroupExampleInput2">Descriptions</label>
                        <textarea name="description" id="desc" class="form-control" cols="30" rows="10" placeholder="Descriptions">{{ $services->detail }}</textarea>
                    </div>
                    <div class="card-footer text-right">
                           <button class="btn btn-primary" type="submit">Submit</button>
                    </div>
                </div>
            </div>
            </form>
        </div>
    </div>
</div>