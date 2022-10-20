<div class="flex space-x-1 justify-around">
    @if($type == 'file')
    <a href="{{asset('storage/'.$file_path)}}" target="_blank">
        <button
            class="p-1 text-green-600 hover:bg-green-600 hover:text-white rounded">
            <i class="fas fa-cloud-download-alt"></i>
        </button>
    </a>
    @elseif($type == 'video')
        <a href="{{$video_link}}" target="_blank">
            <button
                class="p-1 text-red-600 hover:bg-red-600 hover:text-white rounded">
                <i class="fab fa-youtube"></i>
            </button>
        </a>
    @endif
</div>
