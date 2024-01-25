const tableBody = document.querySelector("tbody");
const labelsSearch = document.getElementById("searchLabels");
const labels = [
  {
    labelName: "Bug",
    labelDescription: "Quelque chose ne fonctionne pas",
    color: "bg-danger",
  },
  {
    labelName: "Enhancement",
    labelDescription: "Nouvelle fonctionnalité ou demande",
    color: "bg-info",
  },
  {
    labelName: "Question",
    labelDescription: "Des informations supplémentaires sont demandées",
    color: "bg-fuchsia",
  },
];
const randomColorArr = [
  "bg-primary",
  "bg-secondary",
  "bg-success",
  "bg-danger",
  "bg-warning",
  "bg-info",
  "bg-dark",
  "bg-purple",
  "bg-pink",
  "bg-teal",
  "bg-indigo",
  "bg-cyan",
  "bg-brown",
  "bg-gray",
  "bg-blue",
  "bg-red",
  "bg-yellow",
  "bg-green",
  "bg-orange",
];
const labelsPerPage = 5;
let currentPage = 1;

function displaylabels(startIndex, endIndex) {
  tableBody.innerHTML = "";

  for (let i = startIndex; i < endIndex; i++) {
    if (i >= labels.length) {
      break;
    }
    tableBody.innerHTML += `
        <tr>
            <td><a class="${labels[i].color} rounded p-2" id="labelColor">${labels[i].labelName}</a></td>
            <td><a>${labels[i].labelDescription}</a></td>
            <td class="text-center">
            <button type="button" class="btn ${labels[i].color} randomColor">
                <i class="fa-solid fa-recycle randomColor"></i>
            </button>
            </td>
            <td class="project-actions text-center">
                <a class="btn btn-info btn-sm" href="#">
                <i class="fa-solid fa-pen-to-square"></i>
                </a>
                <a class="btn btn-danger btn-sm" data-toggle="modal" data-target="#modal-delete">
                <i class="fa-solid fa-trash"></i>
                </a>
            </td>
        </tr>`;
  }
}

const selectColorRandomly = document.querySelectorAll(".randomColor");

function getRandomColor() {
  const randomIndex = Math.floor(Math.random() * randomColorArr.length);
  return randomColorArr[randomIndex];
}

document.addEventListener("click", (event) => {
  if (event.target.classList.contains("randomColor")) {
    const labelColor = event.target.closest("tr").querySelector("#labelColor");
    labelColor.className = "";
    labelColor.classList.add("rounded", "p-2", getRandomColor());
  }
});

function updatePagination() {
  const paginationDiv = document.querySelector(".pagination");
  const totalPages = Math.ceil(labels.length / labelsPerPage);

  let paginationHTML = `
      <li class="paginate_button page-item previous ${
        currentPage === 1 ? "disabled" : ""
      }" id="prevPage">
        <a href="#" aria-controls="example2" data-dt-idx="0" tabindex="0" class="page-link">Précédent</a>
      </li>
    `;

  for (let i = 1; i <= totalPages; i++) {
    paginationHTML += `
        <li class="paginate_button page-item ${
          currentPage === i ? "active" : ""
        }" id="page-${i}">
          <a href="#" data-page="${i}" class="page-link">${i}</a>
        </li>
      `;
  }

  paginationHTML += `
      <li class="paginate_button page-item next ${
        currentPage === totalPages ? "disabled" : ""
      }" id="nextPage">
        <a href="#" aria-controls="example2" data-dt-idx="${
          totalPages + 1
        }" tabindex="0" class="page-link">Suivant</a>
      </li>
    `;

  paginationDiv.innerHTML = paginationHTML;

  // Event listener for pagination links
  const pageLinks = document.querySelectorAll(
    ".paginate_button.page-item:not(.previous):not(.next) a"
  );
  pageLinks.forEach((link) => {
    link.addEventListener("click", (event) => {
      event.preventDefault();
      const clickedPage = parseInt(event.target.dataset.page);
      if (clickedPage !== currentPage) {
        currentPage = clickedPage;
        const startIndex = (currentPage - 1) * labelsPerPage;
        const endIndex = startIndex + labelsPerPage;
        displaylabels(startIndex, endIndex);
        updatePagination();
        labelsSearch.value = "";
      }
    });
  });
}

displaylabels(0, labelsPerPage);
updatePagination();

document.getElementById("nextPage").addEventListener("click", () => {
  const totalPages = Math.ceil(labels.length / labelsPerPage);

  if (currentPage < totalPages) {
    currentPage++;
    const startIndex = (currentPage - 1) * labelsPerPage;
    const endIndex = startIndex + labelsPerPage;
    displaylabels(startIndex, endIndex);
    updatePagination();
    labelsSearch.value = "";
  }
});

document.getElementById("prevPage").addEventListener("click", () => {
  if (currentPage > 1) {
    currentPage--;
    const startIndex = (currentPage - 1) * labelsPerPage;
    const endIndex = startIndex + labelsPerPage;
    displaylabels(startIndex, endIndex);
    updatePagination();
    labelsSearch.value = "";
  }
});

labelsSearch.addEventListener("input", () => {
  tableBody.innerHTML = "";

  const searchTerm = labelsSearch.value.toLowerCase();

  for (let i = 0; i < labels.length; i++) {
    const labelName = labels[i].labelName.toLowerCase();
    const labelDescription = labels[i].labelDescription.toLowerCase();

    if (
      labelName.includes(searchTerm) ||
      labelDescription.includes(searchTerm)
    ) {
      tableBody.innerHTML += `
      <tr>
      <td><a class="${labels[i].color} rounded p-2" id="labelColor">${labels[i].labelName}</a></td>
      <td><a>${labels[i].labelDescription}</a></td>
      <td class="text-center">
      <button type="button" class="btn ${labels[i].color} randomColor">
          <i class="fa-solid fa-recycle randomColor"></i>
      </button>
      </td>
      <td class="project-actions text-center">
          <a class="btn btn-info btn-sm" href="#">
          <i class="fa-solid fa-pen-to-square"></i>
          </a>
          <a class="btn btn-danger btn-sm" data-toggle="modal" data-target="#modal-delete">
          <i class="fa-solid fa-trash"></i>
          </a>
      </td>
  </tr>`;
    }
    if (searchTerm === "") {
      displaylabels(0, labelsPerPage);
    }
  }
});
