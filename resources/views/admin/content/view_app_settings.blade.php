<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h2>{{$title}}</h2>
            </div>
            <form method="POST" action="{{ url('appsetting/update') }}/{{$profiles->id }}">
                {{ csrf_field() }}
            <div class="card-body">
                <div class="col-md-12">
                    @include('../../flash_message.flash_message')
                    <div class="form-group">
                        <label for="formGroupExampleInput">Email</label>
                        <input type="text" class="form-control" id="formGroupExampleInput" name="email" placeholder="Email" value="{{ $profiles->email }}">
                    </div>
                    <div class="form-group">
                        <label for="formGroupExampleInput2">Address</label>
                        <input type="text" class="form-control" id="formGroupExampleInput2" name="alamat" placeholder="Address" value="{{ $profiles->alamat }}">
                    </div>
                    <div class="form-group">
                        <label for="formGroupExampleInput2">Phone</label>
                        <input type="text" class="form-control" id="formGroupExampleInput2" name="phone" placeholder="Phone" value="{{ $profiles->phone }}">
                    </div>
                    <div class="form-group">
                        <label for="formGroupExampleInput2">Descriptions</label>
                        <textarea name="descriptions" id="myeditor"class="form-control" cols="30" rows="10" placeholder="Descriptions">{{ $profiles->descriptions }}</textarea>
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

