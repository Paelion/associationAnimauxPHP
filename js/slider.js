class Slideshow {
    constructor(id, imgs) {
        this.idSlide = id;
        this.imgs = imgs;


        this.domSlide = document.getElementById(this.idSlide);
        this.domImg = this.domSlide.querySelector('img');
        this.domPrev = this.domSlide.querySelector('div .prevBtn');
        this.domNext = this.domSlide.querySelector('div .nextBtn');

        this.imgNumber = 0;

        // Gestionnaires d'événements et Action !
        this.domPrev.addEventListener('click', this.prevImage.bind(this));
        this.domNext.addEventListener('click', this.nextImage.bind(this));

    }

    /* Fonction bouton prev */
    prevImage() {
        this.imgNumber--;
        if (this.imgNumber < 0) {
            this.imgNumber = this.imgs.length - 1;
        }
        this.domImg.src = this.imgs[this.imgNumber];
    }

    /* fonction bouton next */
    nextImage() {
        this.imgNumber++;
        if (this.imgNumber > (this.imgs.length - 1)) {
            this.imgNumber = 0;
        }
        this.domImg.src = this.imgs[this.imgNumber];
    }


}

var slide = new Slideshow(
    'slideshow',
    ["../img/chien.jpg",
        "../img/chiens.jpg",
        "../img/chat.jpg"
    ]
    )
;




