    document.querySelector('.theme-toggle-button').addEventListener('click', (element) =>{
      document.body.classList.toggle('dark');
      if (element.target.innerHTML === "Light") {
          element.target.innerHTML = "Dark";
      } else {
          element.target.innerHTML = "Light";
      }
    });
  