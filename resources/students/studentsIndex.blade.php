@extends('layouts.app')
@section('content')

<div class="space-y-8 p-8 bg-gray-50">
  <!-- Modern Search with Gradient Border -->
  <div class="group relative max-w-md mx-auto">
    <div class="absolute inset-0 bg-gradient-to-r from-purple-600 to-pink-600 rounded-lg blur"></div>
    <div class="relative flex items-center bg-white rounded-lg">
      <input 
        type="text" 
        placeholder="Search anything..." 
        class="w-full px-4 py-3 rounded-lg focus:outline-none"
      />
      <button class="p-3 bg-gradient-to-r from-purple-600 to-pink-600 rounded-r-lg">
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-white">
          <circle cx="11" cy="11" r="8"></circle>
          <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
        </svg>
      </button>
    </div>
  </div>

  
<dl class="max-w-md text-gray-900 divide-y divide-gray-200 dark:text-white dark:divide-gray-700">
    <div class="flex flex-col pb-3">
    @foreach($students as $student)
                        <tr>
                            <td>{{ $student->name }}</td>
                            <td>
                                <a href="{{ route('layouts.app', $recipe->id) }}" class="btn btn-info btn-sm">View</a>
                                <a href="{{ route('layouts.app', $recipe->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                <form action="{{ route('recipes.destroy', $recipe->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
    </div>

</dl>


  