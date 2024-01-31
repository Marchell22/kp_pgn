document.addEventListener("DOMContentLoaded", function () {
    var bgImages = ["image1.jpg", "image2.jpg", "image3.jpg"]; // Ganti dengan nama gambar Anda
    var currentIndex = 0;

    function changeBackground() {
        document.body.style.backgroundImage = "url('/images/" + bgImages[currentIndex] + "')";
        currentIndex = (currentIndex + 1) % bgImages.length;
    }

    setInterval(changeBackground, 5000); // Ganti dengan interval yang diinginkan (dalam milidetik)
});