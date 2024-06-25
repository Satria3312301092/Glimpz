document.addEventListener("DOMContentLoaded", function () {
    var navbar = document.getElementById("navbar");
    var nav_menu = document.getElementById("nav_menu");
    var search1 = document.getElementById("btn_search1");
    var search2 = document.getElementById("btn_search2");

    window.addEventListener("scroll", function () {
        if (window.scrollY > document.querySelector(".carousel").offsetHeight) {
            navbar.classList.remove("bg-transparent");
            navbar.classList.add("bg-white", "shadow-lg");

            nav_menu.classList.remove("text-white");
            nav_menu.classList.add("text-black");

            search1.classList.add('hidden');
            search2.classList.remove('hidden');

        } else {
            navbar.classList.remove("bg-white","shadow-lg");
            navbar.classList.add("bg-transparent");
            nav_menu.classList.remove("text-black");
            nav_menu.classList.add("text-white");
            
            search1.classList.remove('hidden');
            search2.classList.add('hidden');
        }
    });
});

document.addEventListener('DOMContentLoaded', () => {
    // Function to handle scrolling
    function handleScroll(container, distance) {
        container.scrollBy({
            left: distance,
            behavior: 'smooth'
        });

        // Check if user is close to the end of the container
        if (container.scrollLeft + container.clientWidth >= container.scrollWidth - 50) {
            duplicateContent(container);
        }
    }

    // Function to duplicate the content of the scroll container
    function duplicateContent(container) {
        const originalContent = container.innerHTML;
        container.innerHTML += originalContent; // Append a copy of the original content
    }

    // Function to add click event listeners to buttons
    function addButtonListeners(containerId, prevButtonId, nextButtonId, distance) {
        const scrollContainer = document.getElementById(containerId);
        const prevButton = document.getElementById(prevButtonId);
        const nextButton = document.getElementById(nextButtonId);

        if (prevButton) {
            prevButton.addEventListener('click', () => {
                handleScroll(scrollContainer, -distance);
            });
        }

        if (nextButton) {
            nextButton.addEventListener('click', () => {
                handleScroll(scrollContainer, distance);
            });
        }
    }

    // Add click event listeners to scroll containers and buttons
    addButtonListeners('scrollContainer1', 'prevButton1', 'nextButton1', 384);
    addButtonListeners('scrollContainer2', 'prevButton2', 'nextButton2', 384);
    addButtonListeners('scrollContainer3', 'prevButton3', 'nextButton3', 193);

    // Add wheel event listener to all scroll containers
    document.querySelectorAll('.scrollContainer').forEach((scrollContainer) => {
        scrollContainer.addEventListener('wheel', (event) => {
            event.preventDefault(); // Prevent default scrolling behavior
            const distance = event.deltaY < 0 ? -384 : 384;
            handleScroll(scrollContainer, distance); // Adjust scroll distance based on scroll direction
        });

        // Initial content duplication to support infinite scroll
        duplicateContent(scrollContainer);
    });
});
