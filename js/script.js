document.addEventListener('DOMContentLoaded', () => {
    const sections = document.querySelectorAll('.section');
    const navButtons = document.querySelectorAll('.nav-btn');
    const profilePic = document.getElementById('profile-pic');
    const cursor = document.getElementById('cursor');

    function checkScroll() {
        sections.forEach(section => {
            const sectionTop = section.getBoundingClientRect().top;
            const windowHeight = window.innerHeight;
            if (sectionTop < windowHeight * 0.75) {
                section.classList.add('visible');
            }
        });
    }

    window.addEventListener('scroll', checkScroll);
    checkScroll(); // Initial check

    navButtons.forEach(button => {
        button.addEventListener('click', () => {
            const targetId = button.getAttribute('data-section');
            const targetSection = document.getElementById(targetId);
            targetSection.scrollIntoView({ behavior: 'smooth' });
        });
    });

    profilePic.addEventListener('click', () => {
        profilePic.style.transform = 'rotate(360deg)';
        setTimeout(() => {
            profilePic.style.transform = 'rotate(0deg)';
        }, 1000);
    });

    document.addEventListener('mousemove', (e) => {
        cursor.style.left = e.clientX + 'px';
        cursor.style.top = e.clientY + 'px';
    });

    const skillLevels = document.querySelectorAll('.skill-level');
    skillLevels.forEach(skill => {
        skill.style.width = '0%';
        setTimeout(() => {
            skill.style.width = skill.getAttribute('style').split(':')[1];
        }, 500);
    });
});
function setRandomSkillLevels() {
    const skillLevels = document.querySelectorAll('.skill-level');
    skillLevels.forEach(skill => {
        const randomPercentage = Math.floor(Math.random() * (91 - 70) + 70);
        skill.style.width = `${randomPercentage}%`;
        skill.textContent = `${randomPercentage}%`;
    });
}

document.addEventListener('DOMContentLoaded', () => {
    // ... (your existing code)

    setRandomSkillLevels();

    // ... (rest of your existing code)
});
document.addEventListener('DOMContentLoaded', () => {
    // Existing code...

    // Carousel functionality
    let currentSlide = 0;
    const slides = document.querySelectorAll('.carousel-slide');
    const totalSlides = slides.length;

    function showSlide(index) {
        slides.forEach((slide, i) => {
            slide.style.transform = `translateX(${(i - index) * 100}%)`;
        });
    }

    document.getElementById('nextBtn').addEventListener('click', () => {
        currentSlide = (currentSlide + 1) % totalSlides;
        showSlide(currentSlide);
    });

    document.getElementById('prevBtn').addEventListener('click', () => {
        currentSlide = (currentSlide - 1 + totalSlides) % totalSlides;
        showSlide(currentSlide);
    });

    // Set random skill levels
    setRandomSkillLevels();
});