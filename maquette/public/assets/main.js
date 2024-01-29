import "../../node_modules/admin-lte/plugins/bootstrap/js/bootstrap.bundle.min.js";
import "../../node_modules/admin-lte/dist/js/adminlte.min.js";

const boardClasses = ["issue_mention", "en_cours", "envalidation", "done"];
const draggables = document.querySelectorAll(".draggable");
const containers = document.querySelectorAll(".parent-div");
const workflowMethod = document.getElementById("workflowMethod");
const addLivrableBtn = document.getElementById("add-livrableBtn");
const livrableModal = document.getElementById("add-livrable");

draggables.forEach((draggable) => {
  draggable.addEventListener("dragstart", () => {
    draggable.classList.add("dragging");
  });
  draggable.addEventListener("dragend", () => {
    draggable.classList.remove("dragging");
  });
});
containers.forEach((container) => {
  container.addEventListener("dragover", (e) => {
    e.preventDefault();
    const elementPlacement = getDragPlacement(container, e.clientY);
    console.log(elementPlacement);
    const draggable = document.querySelector(".dragging");
    if (elementPlacement == null) {
      container.appendChild(draggable);
      const parentElement = container.parentElement;
      const title = parentElement.querySelector(
        ".project-column-heading__title"
      );
      const cardElement = draggable.querySelector("a");
      const changedDate = draggable.querySelector(".changedAt");
      const currentDate = new Date();
      const formattedDate = new Intl.DateTimeFormat("en-US", {
        month: "short",
        day: "numeric",
        hour: "numeric",
        minute: "numeric",
      }).format(currentDate);
      changedDate.textContent = formattedDate;
      const currentClasses = Array.from(cardElement.classList);
      switch (title.textContent.trim()) {
        case "En Cours":
          cardElement.classList.remove(...currentClasses);
          cardElement.classList.add(boardClasses[0], boardClasses[1]);
          break;
        case "En Validation":
          cardElement.classList.remove(...currentClasses);
          cardElement.classList.add(boardClasses[0], boardClasses[2]);
          break;
        case "Terminé":
          cardElement.classList.remove(...currentClasses);
          cardElement.classList.add(boardClasses[0], boardClasses[3]);
          break;
        case "À Faire":
          cardElement.classList.remove(...currentClasses);
          cardElement.classList.add(boardClasses[0]);
          break;
      }
    } else {
      container.insertBefore(draggable, elementPlacement);
      const parentElement = container.parentElement;
      const title = parentElement.querySelector(
        ".project-column-heading__title"
      );
      const cardElement = draggable.querySelector("a");
      const changedDate = draggable.querySelector(".changedAt");
      const currentDate = new Date();
      const formattedDate = new Intl.DateTimeFormat("en-US", {
        month: "short",
        day: "numeric",
        hour: "numeric",
        minute: "numeric",
      }).format(currentDate);
      changedDate.textContent = formattedDate;
      const currentClasses = Array.from(cardElement.classList);
      switch (title.textContent.trim()) {
        case "En Cours":
          cardElement.classList.remove(...currentClasses);
          cardElement.classList.add(boardClasses[0], boardClasses[1]);
          break;
        case "En Validation":
          cardElement.classList.remove(...currentClasses);
          cardElement.classList.add(boardClasses[0], boardClasses[2]);
          break;
        case "Terminé":
          cardElement.classList.remove(...currentClasses);
          cardElement.classList.add(boardClasses[0], boardClasses[3]);
          break;
        case "À Faire":
          cardElement.classList.remove(...currentClasses);
          cardElement.classList.add(boardClasses[0]);
          break;
      }
    }
  });
});
const getDragPlacement = (container, y) => {
  const draggableElements = [
    ...container.querySelectorAll(".draggable:not(.dragging)"),
  ];
  return draggableElements.reduce(
    (closest, child) => {
      const box = child.getBoundingClientRect();
      const offset = y - box.top - box.height / 2;
      if (offset < 0 && offset > closest.offset) {
        return { offset: offset, element: child };
      } else {
        return closest;
      }
    },
    { offset: Number.NEGATIVE_INFINITY }
  ).element;
};
const members = [
  "Betroji Jalil",
  "Ben NASAR Adnan",
  "ACHOUA Hamid",
  "Boukhar Soufiane",
  "Lamchatab Amin",
  "LHARAK Adnan",
  "BOUIK Hussien",
  "ZAANI Hamza",
  "GRAIN Reda",
  "SARSRI Imrane",
  "ASSAID Amina",
  "DAIFANE Yasmine",
  "FAIZ Safae",
];

let htmlContent = "";
for (let i = 0; i < members.length; i++) {
  htmlContent += `
  <div class="d-flex justify-content-between align-items-center">
  <div class="d-flex align-items-center gap-2">
      <div>
          <img src="../assets/imgs/25231.png" alt="" style="width: 20px; height: 20px;"
              class="rounded-circle">
      </div>
      <h3 class="mb-0">${members[i]}</h3>
  </div>
  <span class="badge bg-secondary">2</span>
</div>
    `;
}
if (workflowMethod != null) {
  workflowMethod.addEventListener("change", () => {
    if (workflowMethod.value === "WaterFall") {
      window.location.href = "waterfall/tasks/index.php";
    } else {
      window.location.href = "../../index.php";
    }
  });
}
