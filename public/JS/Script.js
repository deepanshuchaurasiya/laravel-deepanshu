function openModal(img) {
    document.getElementById("modalImage").src = img.src;
    var modal = new bootstrap.Modal(document.getElementById("imageModal"));
    modal.show();
}