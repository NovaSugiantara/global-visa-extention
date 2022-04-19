<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h2>{{$title}}</h2>
            </div>
            <form method="POST" action="{{ url('regulation/update') }}/{{$regulations->id }}">
                {{ csrf_field() }}
            <div class="card-body">
                <div class="col-md-12">
                    @include('../../flash_message.flash_message')
                    <div class="form-group">
                        <label for="formGroupExampleInput2">Descriptions</label>
                        <textarea name="descriptions" id="myeditor" class="form-control" id="my-editor desc" cols="30" rows="10" placeholder="Descriptions">{{ $regulations->descriptions }}</textarea>
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