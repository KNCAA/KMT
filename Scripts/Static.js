function onEntry(entry){
    entry.forEach(change => {
        if(change.isIntersecting){
            change.target.classList.add('vued');
        } else{
        change.target.classList.remove('vued');
        }
    });
}

let options = {threshold: [0.5] };
let observer = new IntersectionObserver(onEntry, options);
let elements = document.querySelectorAll('.openeds');
for (let elm of elements){
    observer.observe(elm);
}