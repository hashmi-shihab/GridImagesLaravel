@extends('welcome')
@section('content')

   <div>
    <form role="form" method="POST"  action="" enctype="multipart/form-data">

        @CSRF
        @method('PUT')

        <div class="box-body">
            <div class="form-group">
                <label for="image"> Feature Image</label>
                <input type="file" name="image" class="form-control" id="image" >
                <p class="help-block">Image must be jpeg,png,jpg,gif,svg and max file size 2M.</p>
                <div>
                    <img width="150px" id="image" alt="image"
                         {{--src="{{ asset('images/gallery/'.$gallery['image']) }}">--}}

                </div>
            </div>

            <div class="form-group col-md-2 col-sm-4 col-xs-12" style="padding-left: 0px; padding-right: 0px;">
                <label for="published">Published</label>
                <select class="form-control" name="published">
                    {{--<option value="-1"
                            @if($gallery['published'] == '-1') selected @endif >Select
                    </option>
                    <option value="1"
                            @if($gallery['published'] == '1') selected @endif >Yes
                    </option>
                    <option value="0"
                            @if( $gallery['published'] == '0') selected @endif >No
                    </option>--}}
                </select>
            </div>
        </div>


        <div class="box-footer">

            <button type="submit" class="btn btn-primary">Update</button>
        </div>
    </form>

   </div>

@endsection
