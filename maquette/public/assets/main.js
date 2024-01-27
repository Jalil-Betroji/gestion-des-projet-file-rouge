import "../../node_modules/admin-lte/plugins/bootstrap/js/bootstrap.bundle.min.js";
import "../../node_modules/admin-lte/dist/js/adminlte.min.js";

// document.addEventListener("DOMContentLoaded", function () {
//   // Sample data for tables
//   const tableData1 = [
//     { id: 1, name: "Item 1", price: "$10" },
//     { id: 2, name: "Item 2", price: "$20" },
//     // Add more data as needed
//   ];

//   const tableData2 = [
//     { id: 1, category: "Category A", quantity: 50 },
//     { id: 2, category: "Category B", quantity: 30 },
//     // Add more data as needed
//   ];

//   // Function to generate and render tables
//   function renderTable(data) {
//     const tableContainer = document.querySelector(".table-container");

//     // Generate table HTML based on the data
//     const tableHTML = `
//         <table class="table table-bordered table-striped">
//           <thead>
//             <tr>
//               ${Object.keys(data[0])
//                 .map((key) => `<th>${key}</th>`)
//                 .join("")}
//             </tr>
//           </thead>
//           <tbody>
//             ${data
//               .map(
//                 (row) =>
//                   `<tr>${Object.values(row)
//                     .map((value) => `<td>${value}</td>`)
//                     .join("")}</tr>`
//               )
//               .join("")}
//           </tbody>
//         </table>
//       `;

//     // Replace the table content
//     tableContainer.innerHTML = tableHTML;
//   }

//   // Button click event listeners
//   document.getElementById("btnTable1").addEventListener("click", function () {
//     renderTable(tableData1);
//   });

//   document.getElementById("btnTable2").addEventListener("click", function () {
//     renderTable(tableData2);
//   });

//   // Initial table rendering (choose the default table)
//   renderTable(tableData1);
// });

const boardClasses = ["issue_mention", "en_cours", "envalidation", "done"];
const draggables = document.querySelectorAll(".draggable");
const containers = document.querySelectorAll(".parent-div");

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
      const title = parentElement.querySelector(".project-column-heading__title");
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
      const title = parentElement.querySelector(".project-column-heading__title");
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