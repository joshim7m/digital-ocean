@extends('layouts.master')


@section('content')

  <div class="flex justify-center">
    <div class="w-6/12 bg-white rounded-lg">

      <div class="mt-5 mb-8 p-6">
        <form action="{{ route('post.store') }}" method="post">
          @csrf
          <input type="text" name="title" class="bg-gray-100 border-2 rounded mb-4 p-2 focus:outline-none w-full">
          <input type="textarea" name="description" class="bg-gray-100 border-2 rounded mb-4 p-2 focus:outline-none w-full h-24">

          <button type="submit" class="bg-blue-500 text-white px-12 py-3 rounded shadow-md">Add Post</button>
        </form>
      </div>
      
      <div class="posts border-t border-gray-100 p-6">
        @if($posts->count())
          @foreach($posts as $post)
            <div class="my-4 p-3 bg-gray-100">
              <div class="flex justify-between">
                <div class="avater mr-3">
                  <div class="w-10 h-10 rounded-full bg-green-300 flex items-center justify-center text-gray-400 font-bold">
                    {{ mb_substr($post->user->name, 0, 1) }}
                  </div>
                </div>
               <div class="content flex-1">
                  <h2 class="text-lg font-medium text-gray-700">{{ $post->title }}</h2>
                  <p class="text-base text-gray-600">{{ $post->description }}</p>
                </div>
                <div class="w-24 flex flex-col">
                  <p class="text-gray-500 text-base">{{ $post->created_at->diffForHumans() }}</p>
                  <p class="text-gray-500 text-base">Like</p>
                  <p class="text-gray-500 text-base">Unlike</p>
                </div>
              </div>
            </div>
          @endforeach
          @else
          <p>There is no post</p>
        @endif
      </div>

    </div>
  </div>

@endsection 