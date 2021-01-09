
let xhr = new XMLHttpRequest();

xhr.open('POST', '/',true);
xhr.setRequestHeader(
    "content-type",
    "application/x-www-form-urlencoded;charset=UTF-8"
);
xhr.send('');

 const menu = document.querySelectorAll(".js-menu");

      function toggle() {
        const content = this.nextElementSibling;
        this.classList.toggle("is-active");
        content.classList.toggle("is-open");
      }

      for (let i = 0; i < menu.length; i++) {
        menu[i].addEventListener("click", toggle);
      }
