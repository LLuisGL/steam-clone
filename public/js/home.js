document.addEventListener('DOMContentLoaded', () => {
    const base = document.getElementById('img_main');
    const overlay = document.getElementById('img_replace');
    const originalSrc = base.src;

    const imageIDs = ['img_1', 'img_2', 'img_3', 'img_4'];
    const images = imageIDs.map(id => document.getElementById(id));

    images.forEach(img => {
        img.addEventListener('mouseenter', () => {
        crossFadeTo(img.src);
        });

        img.addEventListener('mouseleave', () => {
        crossFadeTo(originalSrc);
        });
    });

    function crossFadeTo(newSrc) {
        if (base.src === newSrc) return;

        overlay.src = newSrc;
        base.classList.add('fade-out');
        setTimeout(() => {
            base.src = newSrc;
            base.onload = () => {
                base.classList.remove('fade-out');
            };
        }, 300);
    }
});