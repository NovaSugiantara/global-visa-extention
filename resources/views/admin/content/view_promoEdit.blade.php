<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h2>{{$title}}</h2>
            </div>
            <form method="POST" action="{{ url('promo/update') }}/{{$promos->id }}">
                {{ csrf_field() }}
            <div class="card-body">
                <div class="col-md-12">
                    <input type="hidden" name="id" value="{{ $promos->id }}">
                    <div class="form-group">
                        <label for="formGroupExampleInput">Package</label>
                        <input type="text" class="form-control" id="formGroupExampleInput" name="name" placeholder="Package Name" value="{{ $promos->name }}">
                    </div>
                    <div class="form-group">
                        <label for="formGroupExampleInput2">Currency</label>
                        <input type="text" class="form-control" id="formGroupExampleInput2" name="curency" placeholder="Currency" value="{{ $promos->currency }}">
                    </div>
                    <div class="form-group">
                        <label for="formGroupExampleInput2">Price</label>
                        <input type="text" class="form-control" id="formGroupExampleInput2" name="price" placeholder="Price" value="{{ $promos->price }}">
                    </div>
                    <div class="form-group">
                        <label for="formGroupExampleInput2">Descriptions</label>
                        <textarea name="descriptions" id="myeditor" class="form-control" cols="30" rows="10" placeholder="Descriptions">{{ $promos->descriptions }}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="formGroupExampleInput2">Features</label>
                        <textarea name="feature" id="myeditor2" class="form-control" cols="30" rows="10" placeholder="Feature">{{ $promos->feature }}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="formGroupExampleInput2">Extras</label>
                        <select class="form-select form-control" name="extras_id">
                            <option value="
                            <?php 
                                if($promos->extras_id == 1){
                                    echo "1";
                                }
                                else{
                                    echo "0";
                                }
                            ?>
                            " selected ><?php 
                                if($promos->extras_id == 1){
                                    echo "Best Value";
                                }
                                else{
                                    echo "None";
                                }
                            ?></option>
                            <option value="0">None</option>
                            <option value='1'>Best Value</option>
                        </select>
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

@push('scripts')
        <script>
            CKEDITOR.replace('myeditor2');
        </script>
    @endpush