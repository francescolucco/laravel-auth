@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
         <h1>Elenco POST</h1>

         <table class="table">
            <thead>
              <tr>
                <th scope="col">ID</th>
                <th scope="col">First</th>
                <th scope="col" colspan="3">Handle</th>
              </tr>
            </thead>
            <tbody>

               @foreach ($posts as $post)
               <tr>
                 <th scope="row">{{$post->id}}</th>
                 <td>{{$post->slug}}</td>
                 <td>
                  <a href="{{route('admin.posts.show', $post)}}" type="button" class="btn btn-primary">Show</a>
                 </td>
                 <td>
                  <a href="{{route('admin.posts.edit', $post)}}" type="button" class="btn btn-success">Edit</a>
                 </td>
                 <td>
                  <a href="" type="button" class="btn btn-danger">Edit</a>
                 </td>
               </tr>
               @endforeach
            </tbody>
          </table>
        <div>
          {{$posts->links()}}
        </div>
      </div>
</div>
@endsection
