import "../../node_modules/admin-lte/plugins/jquery/jquery.min.js";
import "../../node_modules/admin-lte/plugins/bootstrap/js/bootstrap.bundle.min.js";
import "../../node_modules/admin-lte/dist/js/adminlte.min.js";

document.addEventListener("DOMContentLoaded", function () {
  // Sample data for tables
  const tableData1 = [
    { id: 1, name: "Item 1", price: "$10" },
    { id: 2, name: "Item 2", price: "$20" },
    // Add more data as needed
  ];

  const tableData2 = [
    { id: 1, category: "Category A", quantity: 50 },
    { id: 2, category: "Category B", quantity: 30 },
    // Add more data as needed
  ];

  // Function to generate and render tables
  function renderTable(data) {
    const tableContainer = document.querySelector(".table-container");

    // Generate table HTML based on the data
    const tableHTML = `
        <table class="table table-bordered table-striped">
          <thead>
            <tr>
              ${Object.keys(data[0])
                .map((key) => `<th>${key}</th>`)
                .join("")}
            </tr>
          </thead>
          <tbody>
            ${data
              .map(
                (row) =>
                  `<tr>${Object.values(row)
                    .map((value) => `<td>${value}</td>`)
                    .join("")}</tr>`
              )
              .join("")}
          </tbody>
        </table>
      `;

    // Replace the table content
    tableContainer.innerHTML = tableHTML;
  }

  // Button click event listeners
  document.getElementById("btnTable1").addEventListener("click", function () {
    renderTable(tableData1);
  });

  document.getElementById("btnTable2").addEventListener("click", function () {
    renderTable(tableData2);
  });

  // Initial table rendering (choose the default table)
  renderTable(tableData1);
});

document.addEventListener("DOMContentLoaded", (event) => {
  var dragSrcEl = null;

  function handleDragStart(e) {
    this.style.opacity = "0.1";
    this.style.border = "3px dashed #c4cad3";

    dragSrcEl = this;

    e.dataTransfer.effectAllowed = "move";
    e.dataTransfer.setData("text/html", this.innerHTML);
  }

  function handleDragOver(e) {
    if (e.preventDefault) {
      e.preventDefault();
    }

    e.dataTransfer.dropEffect = "move";

    return false;
  }

  function handleDragEnter(e) {
    this.classList.add("task-hover");
  }

  function handleDragLeave(e) {
    this.classList.remove("task-hover");
  }

  function handleDrop(e) {
    if (e.stopPropagation) {
      e.stopPropagation(); // stops the browser from redirecting.
    }

    if (dragSrcEl != this) {
      // Remove the dragged item from its original position
      dragSrcEl.parentNode.removeChild(dragSrcEl);
      
      // Insert the dragged item before or after the current item
      const draggedItemHTML = e.dataTransfer.getData("text/html");
      if (e.clientY < this.getBoundingClientRect().top + this.offsetHeight / 2) {
        this.insertAdjacentHTML("beforebegin", draggedItemHTML);
      } else {
        this.insertAdjacentHTML("afterend", draggedItemHTML);
      }
    }

    return false;
  }

  function handleDragEnd(e) {
    this.style.opacity = "1";
    this.style.border = 0;

    items.forEach(function (item) {
      item.classList.remove("task-hover");
    });
  }

  let items = document.querySelectorAll(".task");
  items.forEach(function (item) {
    item.addEventListener("dragstart", handleDragStart, false);
    item.addEventListener("dragenter", handleDragEnter, false);
    item.addEventListener("dragover", handleDragOver, false);
    item.addEventListener("dragleave", handleDragLeave, false);
    item.addEventListener("drop", handleDrop, false);
    item.addEventListener("dragend", handleDragEnd, false);
  });
});

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

console.log(htmlContent);
