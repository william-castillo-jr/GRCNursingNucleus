isDarkMode = document.body.dataset.bsTheme === "light";

function darkMode() {
    const currentURL = window.location.pathname;
    const darkModeToggle = document.getElementById('dark-mode-toggle');

    //basic dark mode styles
    if (isDarkMode) {
        // Switch to light mode
        document.body.dataset.bsTheme = "light";
        darkModeToggle.textContent = "Dark";
    } else {
        // Switch to dark mode
        document.body.dataset.bsTheme = "dark";
        darkModeToggle.textContent = "Light";
    }


    if (currentURL === "/sprint3/contacts.html") {
        const form = document.getElementById('contact-form');
        const inputs = form.querySelectorAll('input');
        const textAreas = form.querySelectorAll('textarea');
        const submit = form.querySelectorAll('input[type="submit"]');


        if (isDarkMode) {
            // Switch to light mode
            document.body.style.backgroundColor = "#6AB445";
            form.style.backgroundColor = "white";
            form.style.color = "black";
            inputs.forEach(input => input.style.backgroundColor = "white");
            textAreas.forEach(textarea => textarea.style.backgroundColor = "white");
            submit.forEach(input => input.style.backgroundColor = "white");
            submit.forEach(input => input.style.color = "#333333");
        }
        else {
            // Switch to dark mode
            document.body.style.backgroundColor = "#106333";
            form.style.backgroundColor = "#333333";
            form.style.color = "white";
            inputs.forEach(input => input.style.backgroundColor = "#333333");
            textAreas.forEach(textarea => textarea.style.backgroundColor = "#333333");
            submit.forEach(input => input.style.backgroundColor = "#333333");
            submit.forEach(input => input.style.color = "white");
        }
    }else if (currentURL === "/sprint3/php/viewentries.php") {
        if (isDarkMode) {
            // Switch to light mode
            document.body.style.backgroundColor = "white";
        } else {
            // Switch to dark mode
            document.body.style.backgroundColor = "#106333";
            $("#sortable-table").removeClass('table-striped').addClass('table');
        }
    }
    else if (currentURL === "/sprint3/requirements.php") {
        const h1 = document.querySelectorAll('h1');
        const h3 = document.querySelectorAll('h3');
        const h4 = document.querySelectorAll('h4');
        const h5 = document.querySelectorAll('h5');
        const li = document.querySelectorAll('li');

        const cards = document.getElementsByClassName('card');
        const headers = document.getElementsByClassName('card-header');
        const container = document.getElementsByClassName('container');



        if (isDarkMode) {
            // Switch to light mode
            document.body.style.backgroundColor = "#6AB445";
            // for (let i = 0; i < container.length; i++) {
            //     container[i].style.backgroundColor = "white";
            // }
            // for (let i = 0; i < headers.length; i++) {
            //     headers[i].style.backgroundColor = "white";
            // }
            // for (let i = 0; i < cards.length; i++) {
            //     cards[i].style.backgroundColor = "white";
            // }
            // for (let i = 0; i < h1.length; i++) {
            //     h1[i].style.color = "black";
            // }
            // for (let i = 0; i < h3.length; i++) {
            //     h3[i].style.color = "black";
            // }
            // for (let i = 0; i < h4.length; i++) {
            //     h4[i].style.color = "black";
            // }
            // for (let i = 0; i < h5.length; i++) {
            //     h5[i].style.color = "black";
            // }
            // for (let i = 0; i < li.length; i++) {
            //     li[i].style.color = "black";
            // }
        }
        else {
            // Switch to dark mode
            document.body.style.backgroundColor = "#106333";
            // for (let i = 0; i < container.length; i++) {
            //     container[i].style.backgroundColor = "#333333";
            // }
            // for (let i = 0; i < headers.length; i++) {
            //     headers[i].style.backgroundColor = "#106333";
            // }
            // for (let i = 0; i < cards.length; i++) {
            //     cards[i].style.backgroundColor = "#333333";
            // }
            // for (let i = 0; i < h1.length; i++) {
            //     h1[i].style.color = "white";
            // }
            // for (let i = 0; i < h3.length; i++) {
            //     h3[i].style.color = "white";
            // }
            // for (let i = 0; i < h4.length; i++) {
            //     h4[i].style.color = "white";
            // }
            // for (let i = 0; i < h5.length; i++) {
            //     h5[i].style.color = "white";
            // }
            // for (let i = 0; i < li.length; i++) {
            //     li[i].style.color = "white";
            // }
        }
    }
    else if (currentURL === "/sprint3/questionnaire.html") {
        const form = document.getElementById('contact-form');
        const containers = document.getElementsByClassName('container-bg');
        const p = document.querySelectorAll('p');
        const h1 = document.querySelectorAll('h1');

        if (isDarkMode) {
            // Switch to light mode
            document.body.style.backgroundColor = "#6AB445";
            for (let i = 0; i < containers.length; i++) {
                containers[i].style.backgroundColor = "white";
            }
            form.style.backgroundColor = "white";
            form.style.color = "black";
            for (let i = 0; i < p.length; i++) {
                p[i].style.color = "black";
            }
            for (let i = 0; i < h1.length; i++) {
                h1[i].style.color = "black";
            }
        } else {
            // Switch to dark mode
            document.body.style.backgroundColor = "#106333";
            for (let i = 0; i < containers.length; i++) {
                containers[i].style.backgroundColor = "#333333";
            }
            form.style.backgroundColor = "#333333";
            form.style.color = "white";
            for (let i = 0; i < p.length; i++) {
                p[i].style.color = "white";
            }
            for (let i = 0; i < h1.length; i++) {
                h1[i].style.color = "white";
            }
        }
    }
    else if (currentURL === "/index.html") {
        const p = document.querySelectorAll('p');
        const h2 = document.querySelectorAll('h2');

        if (isDarkMode) {
            // Switch to light mode
            document.body.style.backgroundColor = "#6AB445";
            for (let i = 0; i < p.length; i++) {
                p[i].style.color = "black";
            }
            for (let i = 0; i < h2.length; i++) {
                h2[i].style.color = "black";
            }
        } else {
            // Switch to dark mode
            document.body.style.backgroundColor = "#106333";
            for (let i = 0; i < p.length; i++) {
                p[i].style.color = "white";
            }
            for (let i = 0; i < h2.length; i++) {
                h2[i].style.color = "white";
            }
        }
    }
    else if (currentURL === "/sprint3/php/email.php") {
        const p = document.querySelectorAll('p');
        const h1 = document.querySelectorAll('h1');

        if (isDarkMode) {
            // Switch to light mode
            document.body.style.backgroundColor = "white";
            for (let i = 0; i < h1.length; i++) {
                h1[i].style.color = "black";
            }
            for (let i = 0; i < p.length; i++) {
                p[i].style.color = "black";
            }
        } else {
            // Switch to dark mode
            document.body.style.backgroundColor = "#106333";
            for (let i = 0; i < h1.length; i++) {
                h1[i].style.color = "white";
            }
            for (let i = 0; i < p.length; i++) {
                p[i].style.color = "white";
            }
        }
    } else if (currentURL === "/sprint3/php/confirm.php") {
        const h1 = document.querySelectorAll('h2');
        if (isDarkMode) {
            // Switch to light mode
            document.body.style.backgroundColor = "white";
            for (let i = 0; i < h1.length; i++) {
                h1[i].style.color = "black";
            }
        } else {
            // Switch to dark mode
            document.body.style.backgroundColor = "#106333";
            for (let i = 0; i < h1.length; i++) {
                h1[i].style.color = "white";
            }
        }
    } 

    isDarkMode = !isDarkMode;
}

darkMode();
