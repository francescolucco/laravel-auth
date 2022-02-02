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
                <th scope="col">Last</th>
                <th scope="col">Handle</th>
              </tr>
            </thead>
            <tbody>

               @foreach ($posts as $post)
               <tr>
                 <th scope="row">{{$post->id}}</th>
                 <td>{{$post->description}}</td>
                 <td>{{$post->slug}}</td>
                 <td>xxx</td>
               </tr>
               @endforeach
            </tbody>
          </table>

    </div>
</div>
@endsection
