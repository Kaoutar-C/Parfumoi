document.getElementById('main_image').addEventListener('change', function() {
    const file = this.files[0];
    if (file) {
        const reader = new FileReader();
        reader.onload = function(e) {
            const preview = document.getElementById('preview');
            const text = document.getElementById('upload-text');
            preview.src = e.target.result;
            preview.style.display = 'block';
            text.style.display = 'none';
        };
        reader.readAsDataURL(file);
    }
});