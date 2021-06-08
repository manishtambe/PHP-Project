const toggleBtn = document.querySelector(".Button-toggle");
const closeBtn = document.querySelector(".close");
const sidebar = document.querySelector(".sidebar");

toggleBtn.addEventListener("click", function () {
  if (sidebar.classList.contains("show-sidebar")) {
    sidebar.classList.remove("show-sidebar");
  } else {
   sidebar.classList.add("show-sidebar");
  }
});

closeBtn.addEventListener("click", function () {
  sidebar.classList.remove("show-sidebar");
});
