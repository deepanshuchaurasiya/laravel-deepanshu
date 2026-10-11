@extends( 'layout')
@section('gallery')
    <!-- Gallery start -->
    <section class="gallery" id="gallery">
        <div class="container">
            <div class="album">
                <div class="responsive-container-block bg">
                    <div class="responsive-container-block img-cont">
                        <img class="img img-thumbnail" src="IMAGES/1.jpg" onclick="openModal(this)">
                        <img class="img img-thumbnail" src="IMAGES/11.jpg" onclick="openModal(this)">
                        <img class="img img-thumbnail img-last" src="IMAGES/1.jpg" onclick="openModal(this)">
                    </div>
                    <div class="responsive-container-block img-cont">
                        <img class="img img-big img-thumbnail" src="IMAGES/11.jpg" onclick="openModal(this)">
                        <img class="img img-big img-thumbnail img-last" src="IMAGES/1.jpg" onclick="openModal(this)">
                    </div>
                    <div class="responsive-container-block img-cont">
                        <img class="img img-thumbnail" src="IMAGES/11.jpg" onclick="openModal(this)">
                        <img class="img img-thumbnail" src="IMAGES/1.jpg" onclick="openModal(this)">
                        <img class="img img-thumbnail" src="IMAGES/11.jpg" onclick="openModal(this)">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Full-Screen Modal -->
    <div class="modal fade" id="imageModal" tabindex="-1" aria-labelledby="imageModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content">
                <button type="button" class="close-btn" data-bs-dismiss="modal" aria-label="Close">×</button>
                <div class="modal-body">
                    <img id="modalImage" src="" alt="Expanded View">
                </div>
            </div>
        </div>
    </div>
    <!-- galeery end -->
@endsection