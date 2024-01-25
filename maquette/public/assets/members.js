const tableBody = document.querySelector('tbody');
const memnbers = [
  {
    lastName: "BETROJI",
    firstName: "Jalil",
    birthDate: "21/02/2000",
    address: "Tanger Ahlan",
    classroom: "Mobile",
    group: "DMB 101",
    phoneNumber: "0651782276"
  },
  {
    lastName: "Lamchatab",
    firstName: "Amin",
    birthDate: "19/03/2004",
    address: "Tanger Ahlan",
    classroom: "Mobile",
    group: "DMB 101",
    phoneNumber: "0651782276"
  },
  {
    lastName: "Boukhar",
    firstName: "Soufiane",
    birthDate: "11/05/1997",
    address: "Tanger Ahlan",
    classroom: "Mobile",
    group: "DMB 101",
    phoneNumber: "0651782276"
  },
  {
    lastName: "ACHOUA",
    firstName: "Hamid",
    birthDate: "12/03/1999",
    address: "Tanger Ahlan",
    classroom: "Mobile",
    group: "DMB 101",
    phoneNumber: "0651782276"
  },
  {
    lastName: "Ben NASAR",
    firstName: "Adnan",
    birthDate: "18/05/2003",
    address: "Tanger Ahlan",
    classroom: "Mobile",
    group: "DMB 101",
    phoneNumber: "0651782276"
  },
  {
    lastName: "LHARAK",
    firstName: "Adnan",
    birthDate: "19/12/2000",
    address: "Tanger Ahlan",
    classroom: "Mobile",
    group: "DMB 101",
    phoneNumber: "0651782276"
  },
  {
    lastName: "BOUIK",
    firstName: "Hussien",
    birthDate: "13/06/2004",
    address: "Tanger Ahlan",
    classroom: "Mobile",
    group: "DMB 101",
    phoneNumber: "0651782276"
  },
  {
    lastName: "ZAANI",
    firstName: "Hamza",
    birthDate: "17/02/2002",
    address: "Tanger Ahlan",
    classroom: "Mobile",
    group: "DMB 101",
    phoneNumber: "0651782276"
  },
  {
    lastName: "GRAIN",
    firstName: "Reda",
    birthDate: "14/04/2002",
    address: "Tanger Ahlan",
    classroom: "Mobile",
    group: "DMB 101",
    phoneNumber: "0651782276"
  },
  {
    lastName: "SARSRI",
    firstName: "Imrane",
    birthDate: "13/02/2003",
    address: "Tanger Ahlan",
    classroom: "Mobile",
    group: "DMB 101",
    phoneNumber: "0651782276"
  },
  {
    lastName: "ASSAID",
    firstName: "Amina",
    birthDate: "25/05/2003",
    address: "Tanger Ahlan",
    classroom: "Mobile",
    group: "DMB 101",
    phoneNumber: "0651782276"
  },
  {
    lastName: "DAIFANE",
    firstName: "Yasmine",
    birthDate: "14/01/2004",
    address: "Tanger Ahlan",
    classroom: "Mobile",
    group: "DMB 101",
    phoneNumber: "0651782276"
  },
  {
    lastName: "FAIZ",
    firstName: "Safae",
    birthDate: "11/04/1997",
    address: "Tanger Ahlan",
    classroom: "Mobile",
    group: "DMB 101",
    phoneNumber: "0651782276"
  },
];

for(let i=0 ; i<memnbers.length;i++){
  tableBody.innerHTML += `
  <tr>
  <td>
      <a>
          ${memnbers[i].lastName}
      </a>
  </td>
  <td>
      <a>
          ${memnbers[i].firstName}
      </a>
  </td>
  <td class="text-center">
     ${memnbers[i].birthDate}
  </td>
  <td class="project_progress">
      ${memnbers[i].address}
  </td>
  <td class="project-state text-center">
      ${memnbers[i].classroom}
  </td>
  <td class="project-actions text-center">
      ${memnbers[i].classroom}
  </td>
  <td>
      ${memnbers[i].phoneNumber}
  </td>
  <td class="project-actions text-center">
      <a class="btn btn-info btn-sm" href="#">
      <i class="fa-solid fa-list-check"></i>
      </a>
      <a class="btn btn-danger btn-sm" href="#">
      <i class="fa-solid fa-triangle-exclamation"></i>
      </a>
  </td>
</tr>
  `
}