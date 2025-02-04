
{
    const menu_containerElem = document.getElementById("header-menu-container");

    function observerCallback(entries, observer){
        for (let i = 0; i < entries.length; i++){
            let entry = entries[i];
            let elem = entry.target;

            if (entry.intersectionRatio < 1)
                elem.classList.add("pinned");
            else
                elem.classList.remove("pinned");
        }
    }
    const observer = new IntersectionObserver(observerCallback, { threshold: [ 1 ] });
    observer.observe(menu_containerElem);
}
