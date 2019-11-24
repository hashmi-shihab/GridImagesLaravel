@extends('welcome')
@section('content')

    {{--<table class="table" style="margin: 10px 150px 10px 150px">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">First</th>
            <th scope="col">Last</th>
            <th scope="col">Handle</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <th scope="row">1</th>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
        </tr>
        <tr>
            <th scope="row">2</th>
            <td>Jacob</td>
            <td>Thornton</td>
            <td>@fat</td>
        </tr>
        <tr>
            <th scope="row">3</th>
            <td>Larry</td>
            <td>the Bird</td>
            <td>@twitter</td>
        </tr>
        </tbody>
    </table>--}}

    <h2 style="text-align: center">Gallery</h2>

    <div id="gallery" style="display:none; margin-bottom: 50px">

        @foreach($images as $image)
        <a href="">
            <img alt="Lemon Slice"
                 src="{{asset('galleryImages/'.$image->image)}}"
                 data-image="{{asset('galleryImages/'.$image->image)}}"
                 data-description=""
                 style="display:none">
        </a>

            @endforeach
    </div>


@endsection

@section('jsscript')

    <script type="text/javascript">

        jQuery(document).ready(function(){

            jQuery("#gallery").unitegallery({
                tiles_type:"justified"
            });

        });

    </script>


    @endsection
