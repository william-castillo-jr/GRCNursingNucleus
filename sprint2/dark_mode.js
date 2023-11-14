let isDarkMode = document.body.dataset.bsTheme === "light";

function darkMode() {
    const currentURL = window.location.pathname;
    const darkModeToggle = document.getElementById('dark-mode-toggle');

    if (currentURL === "/sprint2/contacts.html") {
        const form = document.getElementById('contact-form');
        const inputs = form.querySelectorAll('input');
        const textAreas = form.querySelectorAll('textarea');
        const submit = form.querySelectorAll('input[type="submit"]');


        if (isDarkMode) {
            // Switch to light mode
            document.body.dataset.bsTheme = "light";
            document.body.style.backgroundColor = "#6AB445";
            form.style.backgroundColor = "white";
            form.style.color = "black";
            darkModeToggle.textContent = "Dark";
            inputs.forEach(input => input.style.backgroundColor = "white");
            textAreas.forEach(textarea => textarea.style.backgroundColor = "white");
            submit.forEach(input => input.style.backgroundColor = "white");
            submit.forEach(input => input.style.color = "#333333");
        }
        else {
            // Switch to dark mode
            document.body.dataset.bsTheme = "dark";
            document.body.style.backgroundColor = "#106333";
            form.style.backgroundColor = "#333333";
            form.style.color = "white";
            darkModeToggle.textContent = "Light";
            inputs.forEach(input => input.style.backgroundColor = "#333333");
            textAreas.forEach(textarea => textarea.style.backgroundColor = "#333333");
            submit.forEach(input => input.style.backgroundColor = "#333333");
            submit.forEach(input => input.style.color = "white");

        }
    }
    else if (currentURL === "/sprint2/index.html") {
        const collapsable = document.querySelectorAll('.collapsible');
        const content = document.querySelectorAll('.content');

        if (isDarkMode) {
            // Switch to light mode
            document.body.dataset.bsTheme = "light";
            document.body.style.color = "black";
            document.body.style.backgroundColor = "#6AB445";
            collapsable.forEach(item => item.style.backgroundColor = "#6AB445");
            content.forEach(item => item.style.backgroundColor = "#6AB445");
            darkModeToggle.textContent = "Dark";
        }
        else {
            // Switch to dark mode
            document.body.dataset.bsTheme = "dark";
            // document.body.style.color = "white";
            document.body.style.backgroundColor = "#106333";
            collapsable.forEach(item => item.style.backgroundColor = "#106333");
            content.forEach(item => item.style.backgroundColor = "#333333");
            darkModeToggle.textContent = "Light";
        }

    }
    else if (currentURL === "/sprint2/questionnaire.html") {
        const form = document.getElementById('contact-form');
        const containers = document.getElementsByClassName('container-bg');
        const p = document.querySelectorAll('p');
        const h1 = document.querySelectorAll('h1');

        if (isDarkMode) {
            // Switch to light mode
            document.body.dataset.bsTheme = "light";
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
            darkModeToggle.textContent = "Dark";
        } else {
            // Switch to dark mode
            document.body.dataset.bsTheme = "dark";
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
            darkModeToggle.textContent = "Light";
        }
    }
    else if (currentURL === "/sprint2/questionnaire.html") {
            const form = document.getElementById('contact-form');
            const containers = document.getElementsByClassName('container-bg');
            const p = document.querySelectorAll('p');
            const h1 = document.querySelectorAll('h1');

            if (isDarkMode) {
                // Switch to light mode
                document.body.dataset.bsTheme = "light";
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
                darkModeToggle.textContent = "Dark";
            } else {
                // Switch to dark mode
                document.body.dataset.bsTheme = "dark";
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
                darkModeToggle.textContent = "Light";
            }
    }
    else if (currentURL === "/index.html") {
        const p = document.querySelectorAll('p');
        const h2 = document.querySelectorAll('h2');

        if (isDarkMode) {
            // Switch to light mode
            document.body.dataset.bsTheme = "light";
            document.body.style.backgroundColor = "#6AB445";
            for (let i = 0; i < p.length; i++) {
                p[i].style.color = "black";
            }
            for (let i = 0; i < h2.length; i++) {
                h2[i].style.color = "black";
            }
            darkModeToggle.textContent = "Dark";
        } else {
            // Switch to dark mode
            document.body.dataset.bsTheme = "dark";
            document.body.style.backgroundColor = "#106333";
            for (let i = 0; i < p.length; i++) {
                p[i].style.color = "white";
            }
            for (let i = 0; i < h2.length; i++) {
                h2[i].style.color = "white";
            }
            darkModeToggle.textContent = "Light";
        }
    }
    else if (currentURL === "/sprint2/php/email.php") {
        const p = document.querySelectorAll('p');
        const h1 = document.querySelectorAll('h1');

        if (isDarkMode) {
            // Switch to light mode
            document.body.dataset.bsTheme = "light";
            document.body.style.backgroundColor = "white";
            for (let i = 0; i < h1.length; i++) {
                h1[i].style.color = "black";
            }
            for (let i = 0; i < p.length; i++) {
                p[i].style.color = "black";
            }
            darkModeToggle.textContent = "Dark";
        } else {
            // Switch to dark mode
            document.body.dataset.bsTheme = "dark";
            document.body.style.backgroundColor = "#106333";
            for (let i = 0; i < h1.length; i++) {
                h1[i].style.color = "white";
            }
            for (let i = 0; i < p.length; i++) {
                p[i].style.color = "white";
            }
            darkModeToggle.textContent = "Light";
        }
    } else if (currentURL === "/sprint2/php/confirm.php") {
        const h1 = document.querySelectorAll('h2');

        if (isDarkMode) {
            // Switch to light mode
            document.body.dataset.bsTheme = "light";
            document.body.style.backgroundColor = "white";
            for (let i = 0; i < h1.length; i++) {
                h1[i].style.color = "black";
            }
            darkModeToggle.textContent = "Dark";
        } else {
            // Switch to dark mode
            document.body.dataset.bsTheme = "dark";
            document.body.style.backgroundColor = "#106333";
            for (let i = 0; i < h1.length; i++) {
                h1[i].style.color = "white";
            }
            darkModeToggle.textContent = "Light";
        }
    }


    isDarkMode = !isDarkMode;
}

darkMode();
