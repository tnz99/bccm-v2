@foreach($galleryData as $galleryItem)
    <div class="option">
        <div class="image" style="background-image: url('{{ asset('uploads/story/kingdom/gallery/galleries/' . $galleryItem->image) }}');">
            <div class="label">
                <div class="info">
                    <div class="main">{!! nl2br(e($galleryItem->title)) !!}</div>
                    <div class="sub">{!! nl2br(e($galleryItem->subtitle)) !!}</div>
                </div>
            </div>
        </div>
        <div class="description">
            <div class="image-content text-black scroll">{!! nl2br(e($galleryItem->description)) !!}</div>
        </div>
    </div>
@endforeach
