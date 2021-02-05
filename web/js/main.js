new WOW().init();

let navbarMain = document.getElementById('navbar_main');
navbarMain ? navbarMain.addEventListener('click', (event) => {
    event.preventDefault();
    event.stopPropagation();

    toggleMobileSidebar();
}) : null;

let offcanvasHeade = document.querySelector('.offcanvas-header .fa-times')
offcanvasHeade ? offcanvasHeade.addEventListener('click', (event) => {
    event.preventDefault();
    event.stopPropagation();

    toggleMobileSidebar();
}) : null;

let screenOverlay = document.querySelector('.screen-overlay');
screenOverlay ? screenOverlay.addEventListener('click', (event) => {
    event.preventDefault();
    event.stopPropagation();

    toggleMobileSidebar();
}) : null;

let mainImage = document.getElementById('main-image');
mainImage ? mainImage.addEventListener('change', (event) => {
    loadImage(event)
}) : null;

let documentInput = document.getElementById('document-input');
documentInput ? documentInput.addEventListener('change', (event) => {
    downloadDocumnet(event);
}) : null;

/*
document.onkeydown = () => {
    toggleMobileSidebar();
}; */

document.addEventListener("DOMContentLoaded", () => {
    if (document.documentElement.clientWidth <= 991) {
        let navTop = document.getElementById('navBar');
        navTop.style.marginTop = '0px';
    }
});

function imageValid(image) {
    if (image.size > 6000000) {
        alert('Максимальный размер файла 5мб!');
        return false;
    }

    let allowedTypes = ["image/png", "image/jpeg"];
    if (!allowedTypes.includes(image.type)) {
        alert('Не верный формат изображения!');
        return false;
    }

    return  true;
}

function downloadDocumnet(event) {
    let file = event.target.files[0];
    console.log(file)
    let documentContainer = document.getElementById('document-container');
    if (file && file.type.length) {
        //<img src="/images/site/icons/pdf.png" style="width: 60px; margin: 5px;" />
        let fileType = '';
        if (file.type.includes('pdf')) {
            console.log("pdf");
            fileType = "pdf.png";
        } else if (file.type.includes('excel') || file.type.includes('spreadsheetml')) {
            console.log("excel.png");
            fileType = "excel.png";
        } else if (file.type.includes('msword') || file.type.includes('wordprocessingml')) {
            console.log("word.png")
            fileType = "word.png";
        } else {
            console.log("unknow");
            fileType = "no-image.png";
        }
        documentContainer.innerHTML +=
        `<div>
            <span style="color: red; font-weight: 600; cursor: pointer;">x</span>
            <img src="/images/site/icons/${fileType}" style="width: 60px; margin: 5px;" />
            <span>${file.name}</span>
        </div>`;

        const url = 'https://example.com/profile';
        const data = { username: 'example' };

        try {
            const response = fetch(url, {
                method: 'POST', // или 'PUT'
                body: JSON.stringify(data), // данные могут быть 'строкой' или {объектом}!
                headers: {
                    'Content-Type': 'application/json'
                }
            });
            const json = response.json();
            console.log('Успех:', JSON.stringify(json));
        } catch (error) {
            console.error('Ошибка:', error);
        }
    }

}

/*
async uploadDocumentToServer() {
    try {
        const response = fetch(url, {
            method: 'POST', // или 'PUT'
            body: JSON.stringify(data), // данные могут быть 'строкой' или {объектом}!
            headers: {
                'Content-Type': 'application/json'
            }
        });
        const json = response.json();
        console.log('Успех:', JSON.stringify(json));
    } catch (error) {
        console.error('Ошибка:', error);
    }
} */

function loadImage(event) {
    let file = event.target.files[0];
    if (!file) {
        return;
    }
    if (!imageValid(file)) {
        return;
    } else {
        let fr = new FileReader();

        fr.addEventListener("load", function () {
            let mainImageOutput = document.getElementById("mainImageOutput");
            mainImageOutput.style.backgroundImage = "url(" + fr.result + ")";
            mainImageOutput.style.display = "block";
        }, false);

        fr.readAsDataURL(file);
        document.getElementById('mainImageExist').style.display = 'none';
    }
}

function toggleMobileSidebar() {
    let body = document.body;
    body.classList.contains('offcanvas-active')
        ? body.classList.remove('offcanvas-active')
        : body.classList.add('offcanvas-active');

    let screenOverlay = document.querySelector('.screen-overlay');
    screenOverlay.classList.contains('show')
        ? screenOverlay.classList.remove('show')
        : screenOverlay.classList.add('show');

    let mobileOffcanvas = document.querySelector('.mobile-offcanvas');
    mobileOffcanvas.classList.contains('show')
        ? mobileOffcanvas.classList.remove('show')
        : mobileOffcanvas.classList.add('show');
}

if (document.documentElement.clientWidth > 991) {
    let navItem = document.querySelectorAll('.nav-item.dropdown');
    navItem.forEach(item => {
        item.addEventListener('mouseover', (event) => {
            let target = event.currentTarget;
            target.querySelector('.dropdown-menu').classList.add('show');
        })
        item.addEventListener('mouseout', (event) => {
            let target = event.currentTarget;
            target.querySelector('.dropdown-menu').classList.remove('show');
        })
    })
}

if (document.documentElement.clientWidth <= 991) {
    let navItem = document.querySelectorAll('.nav-item.dropdown');
    navItem.forEach(item => {
        item.addEventListener('click', (event) => {
            let target = event.currentTarget;
            target.querySelector('.dropdown-menu').classList.add('show');
        })
        item.addEventListener('click', (event) => {
            let target = event.currentTarget;
            target.querySelector('.dropdown-menu').classList.remove('show');
        })
    })
}


// When the user scrolls the page, execute myFunction
window.onscroll = function() {navBarFixed()};

// Get the navbar
let navbar = document.getElementById("navbar");

// Get the offset position of the navbar
let sticky = navbar ? navbar.offsetTop : null;

// Add the sticky class to the navbar when you reach its scroll position. Remove "sticky" when you leave the scroll position
function navBarFixed() {
    if (!navbar || !sticky)
        return;

    if (window.pageYOffset >= sticky)
        navbar.classList.add("sticky");
    else
        navbar.classList.remove("sticky");
}

let aboutCount = document.getElementById('about-count');
aboutCount.onscroll = function(e) {
    console.log(e)
}
aboutCount.onscroll()