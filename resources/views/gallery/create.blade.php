@extends('welcome')
@section('content')


    <div class="card-header" style="text-align: center;margin: 10px 300px 50px 300px">
        <h2>Create Gallery</h2>
    </div>


    <div class="card-body" style="margin: 10px 400px 10px 400px">
        <form>

            <div class="">

                <div class="form-group">
                    <label for="image"> Feature Image</label>
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <input type="file" name="image[]" class="form-control" id="file-1" multiple="" data-overwrite-initial="false" data-min-file-count="2">
                    <p class="help-block">Image must be jpeg,png,jpg,gif,svg and max file size 2M, max files 8</p>
                </div>
                <div class="form-group ">
                    <label for="published">Published</label>
                    <select class="form-control" name="published">
                        <option value="-1" selected="selected">Select</option>
                        <option value="1" >Yes</option>
                        <option value="0">No</option>
                    </select>
                </div>

            </div>


        </form>
    </div>

    {{--<div class="container">
        <div class="col-lg-12 col-sm-12 col-l1 main-section">
            <h1> Upload Image </h1>
            <form>
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <div class="form-control">
                    <input type="file" id="file-1" name="file" multiple="" data-overwrite-initial="false" data-min-file-count="2">
                </div>
            </form>
        </div>
    </div>--}}

@endsection

@section('jsscript')

    <script>
    $('#file-1').fileinput({
    theme:'fa',
    uploadUrl:"{{url('image-submit')}}",
    uploadExtraData:function(){
    return{
    _token:$("input[name='_token']").val()
    };
    },
    allowedFileExtensions:['jpeg','png','jpg','gif','svg'],
    overwriteInitial:false,
    maxFileSize:2000,
    maxFileNum:8,
    slugCallback:function(filename){
    return filename.replace('(','_').replace(']','_');
    }
    });
    </script>
    @endsection
