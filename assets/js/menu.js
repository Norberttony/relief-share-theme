
// When the menu's position: sticky is active, it receives a "pinned" class.
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

// Makes the mobile menu function
{
    const menu_containerElem = document.getElementById("header-menu-container");
    const menuButton = document.getElementsByClassName("header-menu__mobile-button")[0];

    menuButton.addEventListener("click", () => {
        menu_containerElem.classList.toggle("mobileActive");
    });
}
