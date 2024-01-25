const tableBody = document.querySelector("tbody");
const teamsList = [
  {
    teamName: "Techniqie",
    teamCurrentProject: "CNMH",
    teamDescription:
      "L'équipe technique est chargée de la mise en œuvre des aspects technologiques du projet. Elle se concentre sur le développement, la maintenance et l'optimisation du code. Les membres de cette équipe sont spécialisés dans les langages de programmation, les frameworks et les technologies nécessaires à la réalisation du produit.",
  },
  {
    teamName: "Fonctionnel",
    teamCurrentProject: "CNMH",
    teamDescription:
      "L'équipe fonctionnelle se concentre sur les aspects métier du projet. Elle collabore avec les parties prenantes pour comprendre les besoins fonctionnels, définir les spécifications et s'assurer que le produit final répond aux exigences opérationnelles de l'entreprise.",
  },
  {
    teamName: "Test",
    teamCurrentProject: "CNMH",
    teamDescription:
      "L'équipe de test s'assure de la qualité du produit final en identifiant et en corrigeant les éventuels bogues ou problèmes de performance. Elle effectue des tests unitaires, des tests d'intégration et des tests d'acceptation pour garantir que le logiciel répond aux exigences spécifiées.",
  },
  {
    teamName: "Conception",
    teamCurrentProject: "CNMH",
    teamDescription:
      "L'équipe de conception se penche sur l'aspect visuel et fonctionnel du projet. Elle est responsable de la création d'une expérience utilisateur intuitive et attrayante. Les designers travaillent sur l'interface utilisateur, l'expérience utilisateur, et veillent à ce que le produit réponde aux besoins esthétiques et fonctionnels.",
  },
  {
    teamName: "Codage",
    teamCurrentProject: "CNMH",
    teamDescription:
      "L'équipe de codage est responsable de la mise en œuvre des fonctionnalités définies dans les spécifications du projet. Les développeurs travaillent en étroite collaboration avec l'équipe technique pour écrire, tester et déployer le code source du logiciel.",
  },
];
if (tableBody != null) {
  for (let i = 0; i < teamsList.length; i++) {
    tableBody.innerHTML += `
      <tr>
        <td>${teamsList[i].teamName}</td>
        <td class='truncate'>${teamsList[i].teamDescription}</td>
        <td class="text-center">
            ${teamsList[i].teamCurrentProject} 
        </td>
        <td class="text-center">
        <a class="btn btn-default btn-sm" href="show.php">
           <i class="fa-regular fa-folder"></i>
        </a>
        <a class="btn btn-info btn-sm" href="edit.php">
            <i class="fa-solid fa-pen-to-square"></i>
        </a>
        <a class="btn btn-danger btn-sm" data-toggle="modal" data-target="#modal-delete">
            <i class="fa-regular fa-trash-can"></i>
        </a>
    </td>
      </tr>`;
  }
}

// add new team logic

const selectProject = document.getElementById("selectProject");
const selectMembers = document.getElementById("selectMembers");
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
const projectList = [
    {
      name:"CNMH",
      created_at:"12/02/2023",
    },
    {
      name:"LMS",
      created_at:"06/09/2023",
    },
    {
      name:"E-Commerce",
      created_at:"01/01/2024",
    },
  ]
if (selectMembers != null) {
  for (let i = 0; i < members.length; i++) {
    selectMembers.innerHTML += `
        <option value='${members[i].lastName + " " + members[i].firstName}'>${
      members[i].lastName + " " + members[i].firstName
    }</option>
        `;
  }
}
if (selectProject != null) {
    for (let i = 0; i < projectList.length; i++) {
        selectProject.innerHTML += `
            <option value='${projectList[i].name + " " + projectList[i].name}'>${
          projectList[i].name + " " + projectList[i].name
        }</option>
            `;
      }
}

// const displayedMembers = teamsList[i].teamMembers.slice(0, 2); // Display only the first 3 members
//   const remainingMembers =
//     teamsList[i].teamMembers.length - displayedMembers.length;
// ${displayedMembers
//     .map(
//       (member) => `<span>${member.firstName} ${member.lastName}</span>`
//     )
//     .join("")}

// ${remainingMembers > 0 ? `... and ${remainingMembers} more` : ""}

// const teamsList = [
//     {
//       teamName: "Techniqie",
//       teamMembers: [
//         {
//           lastName: "BETROJI",
//           firstName: "Jalil",
//         },
//         {
//           lastName: "Lamchatab",
//           firstName: "Amin",
//         },
//         {
//           lastName: "Boukhar",
//           firstName: "Soufiane",
//         },
//         {
//           lastName: "ACHOUA",
//           firstName: "Hamid",
//         },
//         {
//           lastName: "Ben NASAR",
//           firstName: "Adnan",
//         },
//         {
//           lastName: "LHARAK",
//           firstName: "Adnan",
//         },
//         {
//           lastName: "ZAANI",
//           firstName: "Hamza",
//         },
//         {
//           lastName: "SARSRI",
//           firstName: "Imrane",
//         },
//       ],
//       teamDescription:
//         "L'équipe technique est chargée de la mise en œuvre des aspects technologiques du projet. Elle se concentre sur le développement, la maintenance et l'optimisation du code. Les membres de cette équipe sont spécialisés dans les langages de programmation, les frameworks et les technologies nécessaires à la réalisation du produit.",
//     },
//     {
//       teamName: "Fonctionnel",
//       teamMembers: [
//         {
//           lastName: "BETROJI",
//           firstName: "Jalil",
//         },
//         {
//           lastName: "Lamchatab",
//           firstName: "Amin",
//         },
//         {
//           lastName: "Boukhar",
//           firstName: "Soufiane",
//         },
//         {
//           lastName: "ACHOUA",
//           firstName: "Hamid",
//         },
//         {
//           lastName: "Ben NASAR",
//           firstName: "Adnan",
//         },
//         {
//           lastName: "LHARAK",
//           firstName: "Adnan",
//         },
//         {
//           lastName: "BOUIK",
//           firstName: "Hussien",
//         },
//         {
//           lastName: "ZAANI",
//           firstName: "Hamza",
//         },
//         {
//           lastName: "GRAIN",
//           firstName: "Reda",
//         },
//         {
//           lastName: "SARSRI",
//           firstName: "Imrane",
//         },
//         {
//           lastName: "ASSAID",
//           firstName: "Amina",
//         },
//         {
//           lastName: "DAIFANE",
//           firstName: "Yasmine",
//         },
//         {
//           lastName: "FAIZ",
//           firstName: "Safae",
//         },
//       ],
//       teamDescription:
//         "L'équipe fonctionnelle se concentre sur les aspects métier du projet. Elle collabore avec les parties prenantes pour comprendre les besoins fonctionnels, définir les spécifications et s'assurer que le produit final répond aux exigences opérationnelles de l'entreprise.",
//     },
//     {
//       teamName: "Test",
//       teamMembers: [
//         {
//           lastName: "BETROJI",
//           firstName: "Jalil",
//         },
//         {
//           lastName: "Lamchatab",
//           firstName: "Amin",
//         },
//         {
//           lastName: "Boukhar",
//           firstName: "Soufiane",
//         },
//         {
//           lastName: "ACHOUA",
//           firstName: "Hamid",
//         },
//         {
//           lastName: "Ben NASAR",
//           firstName: "Adnan",
//         },
//         {
//           lastName: "LHARAK",
//           firstName: "Adnan",
//         },
//         {
//           lastName: "BOUIK",
//           firstName: "Hussien",
//         },
//         {
//           lastName: "ZAANI",
//           firstName: "Hamza",
//         },
//         {
//           lastName: "GRAIN",
//           firstName: "Reda",
//         },
//         {
//           lastName: "SARSRI",
//           firstName: "Imrane",
//         },
//         {
//           lastName: "ASSAID",
//           firstName: "Amina",
//         },
//         {
//           lastName: "DAIFANE",
//           firstName: "Yasmine",
//         },
//         {
//           lastName: "FAIZ",
//           firstName: "Safae",
//         },
//       ],
//       teamDescription:
//         "L'équipe de test s'assure de la qualité du produit final en identifiant et en corrigeant les éventuels bogues ou problèmes de performance. Elle effectue des tests unitaires, des tests d'intégration et des tests d'acceptation pour garantir que le logiciel répond aux exigences spécifiées.",
//     },
//     {
//       teamName: "Conception",
//       teamMembers: [
//         {
//           lastName: "BETROJI",
//           firstName: "Jalil",
//         },
//         {
//           lastName: "Lamchatab",
//           firstName: "Amin",
//         },
//         {
//           lastName: "Boukhar",
//           firstName: "Soufiane",
//         },
//         {
//           lastName: "ACHOUA",
//           firstName: "Hamid",
//         },
//         {
//           lastName: "Ben NASAR",
//           firstName: "Adnan",
//         },
//         {
//           lastName: "LHARAK",
//           firstName: "Adnan",
//         },
//         {
//           lastName: "BOUIK",
//           firstName: "Hussien",
//         },
//         {
//           lastName: "ZAANI",
//           firstName: "Hamza",
//         },
//         {
//           lastName: "GRAIN",
//           firstName: "Reda",
//         },
//         {
//           lastName: "SARSRI",
//           firstName: "Imrane",
//         },
//         {
//           lastName: "ASSAID",
//           firstName: "Amina",
//         },
//         {
//           lastName: "DAIFANE",
//           firstName: "Yasmine",
//         },
//         {
//           lastName: "FAIZ",
//           firstName: "Safae",
//         },
//       ],
//       teamDescription:
//         "L'équipe de conception se penche sur l'aspect visuel et fonctionnel du projet. Elle est responsable de la création d'une expérience utilisateur intuitive et attrayante. Les designers travaillent sur l'interface utilisateur, l'expérience utilisateur, et veillent à ce que le produit réponde aux besoins esthétiques et fonctionnels.",
//     },
//     {
//       teamName: "Codage",
//       teamMembers: [
//         {
//           lastName: "BETROJI",
//           firstName: "Jalil",
//         },
//         {
//           lastName: "Lamchatab",
//           firstName: "Amin",
//         },
//         {
//           lastName: "Boukhar",
//           firstName: "Soufiane",
//         },
//         {
//           lastName: "ACHOUA",
//           firstName: "Hamid",
//         },
//         {
//           lastName: "Ben NASAR",
//           firstName: "Adnan",
//         },
//         {
//           lastName: "LHARAK",
//           firstName: "Adnan",
//         },
//         {
//           lastName: "BOUIK",
//           firstName: "Hussien",
//         },
//         {
//           lastName: "ZAANI",
//           firstName: "Hamza",
//         },
//         {
//           lastName: "GRAIN",
//           firstName: "Reda",
//         },
//         {
//           lastName: "SARSRI",
//           firstName: "Imrane",
//         },
//         {
//           lastName: "ASSAID",
//           firstName: "Amina",
//         },
//         {
//           lastName: "DAIFANE",
//           firstName: "Yasmine",
//         },
//         {
//           lastName: "FAIZ",
//           firstName: "Safae",
//         },
//       ],
//       teamDescription:
//         "L'équipe de codage est responsable de la mise en œuvre des fonctionnalités définies dans les spécifications du projet. Les développeurs travaillent en étroite collaboration avec l'équipe technique pour écrire, tester et déployer le code source du logiciel.",
//     },
//   ];
