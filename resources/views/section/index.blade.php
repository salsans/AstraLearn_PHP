@extends('layouts.customlayout2')

@section('content')
<h1 class="card-title">Section</h1>
    @foreach ($video as $item)
        <td>
        <iframe id="videoContainer" width="560" height="315" src="{{ asset('upload/'.$item->video_pembelajaran) }}" frameborder="0" allowfullscreen style="border-radius: 15px; height: 555px; width: 1100px;">
        </iframe>

            <!-- <video controls style="width: 1080px;">
                <source src="{{ asset('upload/'.$item->video_pembelajaran) }}" type="video/mp4">
            </video> -->
        </td><br>
        <a href="{{ route('section.edit',['id'=> $item->id_section]) }}"class="btn btn-primary">Update</a>
        <a href="{{ route('section.delete',['id'=> $item->id_section]) }}"class="btn btn-primary">Hapus</a>
        <a href="{{ route('soalexercise.create') }}" class="btn btn-primary">Create Exercise</a>
        
    @endforeach
@endsection
