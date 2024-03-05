window.addEventListener('scroll', function(){
    let elements = document.querySelectorAll('.products article');

    elements.forEach(function(elem){
        let position = elem.getBoundingClientRect();

        if (position.top < window.innerHeight) {
            elem.classList.add('scale-in');
        }
    })
})