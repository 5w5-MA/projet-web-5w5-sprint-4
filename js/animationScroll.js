let lesImages = document.querySelectorAll(".imageVie");
window.addEventListener('scroll', ApparitionImg);

function ApparitionImg() {
    let bas = window.innerHeight / 4 * 3;

    lesImages.forEach(img => {
        let hautImg = img.getBoundingClientRect().top;
        if (hautImg < bas) {
            img.classList.add("apparitionImg");

        } else {
            img.classList.remove("apparitionImg");
        }

    });
}

