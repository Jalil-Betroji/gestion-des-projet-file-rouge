const tableBody = document.querySelector("tbody");
const membersSearch = document.getElementById("membersSearch");
const undeisiplinedMember = document.getElementById('undeisiplinedMember');
const selectTeachers = document.getElementById('selectTeachers');
const members = [
  {
    lastName: "BETROJI",
    firstName: "Jalil",
    birthDate: "21/02/2000",
    address: "Tanger Ahlan",
    classroom: "Mobile",
    group: "DMB 101",
    phoneNumber: "0651782276",
  },
  {
    lastName: "Lamchatab",
    firstName: "Amin",
    birthDate: "19/03/2004",
    address: "Tanger Ahlan",
    classroom: "Mobile",
    group: "DMB 101",
    phoneNumber: "0651782276",
  },
  {
    lastName: "Boukhar",
    firstName: "Soufiane",
    birthDate: "11/05/1997",
    address: "Tanger Ahlan",
    classroom: "Mobile",
    group: "DMB 101",
    phoneNumber: "0651782276",
  },
  {
    lastName: "ACHOUA",
    firstName: "Hamid",
    birthDate: "12/03/1999",
    address: "Tanger Ahlan",
    classroom: "Mobile",
    group: "DMB 101",
    phoneNumber: "0651782276",
  },
  {
    lastName: "Ben NASAR",
    firstName: "Adnan",
    birthDate: "18/05/2003",
    address: "Tanger Ahlan",
    classroom: "Mobile",
    group: "DMB 101",
    phoneNumber: "0651782276",
  },
  {
    lastName: "LHARAK",
    firstName: "Adnan",
    birthDate: "19/12/2000",
    address: "Tanger Ahlan",
    classroom: "Mobile",
    group: "DMB 101",
    phoneNumber: "0651782276",
  },
  {
    lastName: "BOUIK",
    firstName: "Hussien",
    birthDate: "13/06/2004",
    address: "Tanger Ahlan",
    classroom: "Mobile",
    group: "DMB 101",
    phoneNumber: "0651782276",
  },
  {
    lastName: "ZAANI",
    firstName: "Hamza",
    birthDate: "17/02/2002",
    address: "Tanger Ahlan",
    classroom: "Mobile",
    group: "DMB 101",
    phoneNumber: "0651782276",
  },
  {
    lastName: "GRAIN",
    firstName: "Reda",
    birthDate: "14/04/2002",
    address: "Tanger Ahlan",
    classroom: "Mobile",
    group: "DMB 101",
    phoneNumber: "0651782276",
  },
  {
    lastName: "SARSRI",
    firstName: "Imrane",
    birthDate: "13/02/2003",
    address: "Tanger Ahlan",
    classroom: "Mobile",
    group: "DMB 101",
    phoneNumber: "0651782276",
  },
  {
    lastName: "ASSAID",
    firstName: "Amina",
    birthDate: "25/05/2003",
    address: "Tanger Ahlan",
    classroom: "Mobile",
    group: "DMB 101",
    phoneNumber: "0651782276",
  },
  {
    lastName: "DAIFANE",
    firstName: "Yasmine",
    birthDate: "14/01/2004",
    address: "Tanger Ahlan",
    classroom: "Mobile",
    group: "DMB 101",
    phoneNumber: "0651782276",
  },
  {
    lastName: "FAIZ",
    firstName: "Safae",
    birthDate: "11/04/1997",
    address: "Tanger Ahlan",
    classroom: "Mobile",
    group: "DMB 101",
    phoneNumber: "0651782276",
  },
];
const membersPerPage = 5;
let currentPage = 1;

function displayMembers(startIndex, endIndex) {
  tableBody.innerHTML = "";

  for (let i = startIndex; i < endIndex; i++) {
    if (i >= members.length) {
      break;
    }

    tableBody.innerHTML += `
        <tr>
            <td><a>${members[i].lastName}</a></td>
            <td><a>${members[i].firstName}</a></td>
            <td class="text-center">${members[i].birthDate}</td>
            <td class="project_progress">${members[i].address}</td>
            <td class="project-state text-center">${members[i].classroom}</td>
            <td class="project-actions text-center">${members[i].classroom}</td>
            <td>${members[i].phoneNumber}</td>
            <td class="project-state text-center">
            <input type="checkbox">
            </td>
            <td class="project-actions text-center">
                <a class="btn btn-info btn-sm" href="#">
                    <i class="fa-solid fa-list-check"></i>
                </a>
                <a class="btn btn-danger btn-sm" href="review.php">
                    <i class="fa-solid fa-triangle-exclamation"></i>
                </a>
            </td>
        </tr>`;
  }
}

function updatePagination() {
  const paginationDiv = document.querySelector(".pagination");
  const totalPages = Math.ceil(members.length / membersPerPage);

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
        const startIndex = (currentPage - 1) * membersPerPage;
        const endIndex = startIndex + membersPerPage;
        displayMembers(startIndex, endIndex);
        updatePagination();
        membersSearch.value = "";
      }
    });
  });
}

if(tableBody != null){
  displayMembers(0, membersPerPage);
updatePagination();

document.getElementById("nextPage").addEventListener("click", () => {
  const totalPages = Math.ceil(members.length / membersPerPage);

  if (currentPage < totalPages) {
    currentPage++;
    const startIndex = (currentPage - 1) * membersPerPage;
    const endIndex = startIndex + membersPerPage;
    displayMembers(startIndex, endIndex);
    updatePagination();
    membersSearch.value = "";
  }
});

document.getElementById("prevPage").addEventListener("click", () => {
  if (currentPage > 1) {
    currentPage--;
    const startIndex = (currentPage - 1) * membersPerPage;
    const endIndex = startIndex + membersPerPage;
    displayMembers(startIndex, endIndex);
    updatePagination();
    membersSearch.value = "";
  }
});

membersSearch.addEventListener("input", () => {
  tableBody.innerHTML = "";

  const searchTerm = membersSearch.value.toLowerCase();

  for (let i = 0; i < members.length; i++) {
    const memberLastName = members[i].lastName.toLowerCase();
    const memberFirstName = members[i].firstName.toLowerCase();

    if (
      memberLastName.includes(searchTerm) ||
      memberFirstName.includes(searchTerm)
    ) {
      tableBody.innerHTML += `
        <tr>
            <td><a>${members[i].lastName}</a></td>
            <td><a>${members[i].firstName}</a></td>
            <td class="text-center">${members[i].birthDate}</td>
            <td class="project_progress">${members[i].address}</td>
            <td class="project-state text-center">${members[i].classroom}</td>
            <td class="project-actions text-center">${members[i].classroom}</td>
            <td>${members[i].phoneNumber}</td>
            <td class="project-state text-center">
            <input type="checkbox">
            </td>
            <td class="project-actions text-center">
                <a class="btn btn-info btn-sm" href="#">
                    <i class="fa-solid fa-list-check"></i>
                </a>
                <a class="btn btn-danger btn-sm" href="#">
                    <i class="fa-solid fa-triangle-exclamation"></i>
                </a>
            </td>
        </tr>`;
    }
    if (searchTerm === "") {
      displayMembers(0, membersPerPage);
    }
  }
});
}



// review page logic
const teachersList = [
  {
    lastName:"Chebab",
    firstName:"Fatin",
  },
  {
    lastName:"Bouziane",
    firstName:"Imane",
  },
  {
    lastName:"Souklabi",
    firstName:"Abdelatif",
  },
  {
    lastName:"Essarraj",
    firstName:"Fouad",
  },
  {
    lastName:"Masaoudi",
    firstName:"Masaoudi",
  },
]
if(undeisiplinedMember != null){
  for(let i=0 ; i<members.length;i++){
   undeisiplinedMember.innerHTML += `
   <option value="${members[i].lastName + ' ' + members[i].firstName}">${members[i].lastName +' '+ members[i].firstName}</option>`
  }
}
if(selectTeachers != null){
  for(let i=0 ; i<teachersList.length;i++){
    selectTeachers.innerHTML += `
   <option value="${teachersList[i].lastName + ' ' + teachersList[i].firstName}">${teachersList[i].lastName +' '+ teachersList[i].firstName}</option>`
  }
}