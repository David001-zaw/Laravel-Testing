@extends('layouts.app')

@section('title', 'Live Search with Ajax')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="form-group my-3">
                <h4 class="text-primary">Search with Id or Title</h4>
                <input type="text" name="search" id="search" class="form-control" autocomplete="off" placeholder="Search Post..." onfocus="this.value=''">
            </div>
            <div id="not_found">
                <table class="table table-bordered border-primary">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Title</th>
                        </tr>
                    </thead>
                    <tbody id="search_list" class="text-center">
                        @foreach ($posts as $post)
                            <tr>
                                <td>{{ $post->id }}</td>
                                <td>{{ $post->title }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection

@section('custom_script')
<script>
    $(document).ready(function(){
        $('#search').on('keyup', function(){
            $query = $(this).val();
            // console.log($query)
            $.ajax({
                url:"search",
                type:"GET",
                data:{'search':$query},
                success:function(data){
                    // console.log(data);
                    if(data.length > 0){
                        $('#search_list').html(data);
                    }else{
                        $not_found = `
                            <div class="my-3">
                                <h3>There is no blog which named  >> <span class="text-danger"> ${$query} </span></h3>
                            </div>
                        `;
                        $('#search_list').html($not_found);
                    }

                }
            });
        });
    });
</script>
@endsection
