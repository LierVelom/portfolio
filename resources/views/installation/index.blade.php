@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Cài đặt Portfolio</h2>
    <form action="{{ route('installation.process') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Tên Portfolio</label>
            <input type="text" name="name" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="theme" class="form-label">Chọn Theme</label>
            <select name="theme" class="form-control">
                <option value="default">Mặc định</option>
                <option value="modern">Modern</option>
                <option value="classic">Classic</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="about" class="form-label">Giới thiệu</label>
            <textarea name="about" class="form-control" required></textarea>
        </div>

        <div class="mb-3">
            <label class="form-label">Social Links</label>
            <div id="social-links-container">
                <div class="input-group mb-2">
                    <input type="text" name="social_links[0][platform]" class="form-control" placeholder="Tên nền tảng (VD: Facebook, GitHub)">
                    <input type="text" name="social_links[0][url]" class="form-control" placeholder="URL">
                    <button type="button" class="btn btn-danger remove-social-link">X</button>
                </div>
            </div>
            <button type="button" class="btn btn-secondary" id="add-social-link">Thêm liên kết</button>
        </div>

        <button type="submit" class="btn btn-primary">Lưu</button>
    </form>
</div>

<script>
document.addEventListener("DOMContentLoaded", function () {
    let socialLinksContainer = document.getElementById("social-links-container");
    let addButton = document.getElementById("add-social-link");
    let index = 1;

    addButton.addEventListener("click", function () {
        let div = document.createElement("div");
        div.classList.add("input-group", "mb-2");

        div.innerHTML = `
            <input type="text" name="social_links[${index}][platform]" class="form-control" placeholder="Tên nền tảng">
            <input type="text" name="social_links[${index}][url]" class="form-control" placeholder="URL">
            <button type="button" class="btn btn-danger remove-social-link">X</button>
        `;

        socialLinksContainer.appendChild(div);

        div.querySelector(".remove-social-link").addEventListener("click", function () {
            div.remove();
        });

        index++;
    });

    document.querySelectorAll(".remove-social-link").forEach(button => {
        button.addEventListener("click", function () {
            this.parentElement.remove();
        });
    });
});
</script>
@endsection
