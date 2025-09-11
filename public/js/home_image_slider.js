class ImageSlider {
    constructor() {
        this.currentSlide = 0;
        this.slides = document.querySelectorAll('.slide');
        this.dots = document.querySelectorAll('.dot');
        this.totalSlides = this.slides.length;
        this.autoSlideInterval = null;
        
        this.init();
    }

    init() {
        // Set initial active state
        this.updateSlide();
        
        // Auto slide every 5 seconds
        this.startAutoSlide();
        
        // Dot navigation
        this.dots.forEach((dot, index) => {
            dot.addEventListener('click', () => this.goToSlide(index));
        });
        
        // Pause auto slide on hover
        const slider = document.querySelector('main');
        slider.addEventListener('mouseenter', () => this.stopAutoSlide());
        slider.addEventListener('mouseleave', () => this.startAutoSlide());
    }

    updateSlide() {
        // Update slides
        this.slides.forEach((slide, index) => {
            if (index === this.currentSlide) {
                slide.classList.remove('opacity-0');
                slide.classList.add('opacity-100');
            } else {
                slide.classList.remove('opacity-100');
                slide.classList.add('opacity-0');
            }
        });
        
        // Update dots
        this.dots.forEach((dot, index) => {
            if (index === this.currentSlide) {
                dot.classList.remove('bg-opacity-50');
                dot.classList.add('bg-opacity-100');
            } else {
                dot.classList.remove('bg-opacity-100');
                dot.classList.add('bg-opacity-50');
            }
        });
    }

    nextSlide() {
        this.currentSlide = (this.currentSlide + 1) % this.totalSlides;
        this.updateSlide();
    }

    goToSlide(index) {
        this.currentSlide = index;
        this.updateSlide();
    }

    startAutoSlide() {
        this.autoSlideInterval = setInterval(() => {
            this.nextSlide();
        }, 5000);
    }

    stopAutoSlide() {
        if (this.autoSlideInterval) {
            clearInterval(this.autoSlideInterval);
            this.autoSlideInterval = null;
        }
    }
}

// Initialize slider when DOM is loaded
document.addEventListener('DOMContentLoaded', () => {
    new ImageSlider();
});

//contact us pop up
const contactBtn = document.getElementById('contactBtn');
    const contactInfo = document.getElementById('contactInfo');

    contactBtn.addEventListener('click', () => {
        contactInfo.classList.toggle('hidden'); // Show/Hide contact info
    });