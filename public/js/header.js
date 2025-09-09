document.querySelectorAll(".dropdown-toggle").forEach(button => {
            button.addEventListener("click", function(e) {
                e.preventDefault();
                let parent = this.parentElement;
                parent.classList.toggle("active");
            });
        });

        document.addEventListener("click", function(e) {
            document.querySelectorAll(".dropdown").forEach(drop => {
                if (!drop.contains(e.target)) {
                    drop.classList.remove("active");
                }
            });
        });

        const mobileMenuBtn = document.querySelector('.mobile-menu-btn');
        const navLinks = document.querySelector('.nav-links');

        mobileMenuBtn.addEventListener('click', function() {
            navLinks.classList.toggle('active');
        });