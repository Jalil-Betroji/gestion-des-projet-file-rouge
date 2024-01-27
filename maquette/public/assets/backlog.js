// const backlogTable = document.getElementById('backlogTable');
// const assignedTasks = [
//   {
//     memberName: "Betroji Jalil",
//     TaskAssigned: [
//       {
//         priority0: {
//           todo: [
//             "gestion de rendez-vous / recherche sa marche pas bug new_issue",
//             "changer le titre de routage choix/tuteur en choix-tuteur bug new_issue",
//           ],
//           doing: [
//             {
//               depot: "https://www.google.com",
//               tasks: ["gestion consultation / la date de consultation doit etre siasie automatique en utilisant le time zone bug new_issue"]
//             }
//           ],
//         },
//         priority1: {
//           todo: [
//             "Gestions rendez-vous/Ajouter/le champ doit avoir la date automatique bug new_issue",
//           ],
//           doing: [
//             "Authorisation de supprimer en consultation-medecin-generale bug",
//           ],
//         },
//         priority2: {
//           todo: ["Route est bloque la creation de nouveau route"],
//           doing: [
//             "Authorisation de supprimer en consultation-medecin-generale bug",
//           ],
//         },
//       },
//     ],
//   },
//   {
//     memberName: "BEN NASAR Adnan",
//     TaskAssigned: [
//       {
//         priority0: {
//           todo: [
//             "gestion de rendez-vous / recherche sa marche pas bug new_issue",
//             "changer le titre de routage choix/tuteur en choix-tuteur bug new_issue",
//           ],
//           doing: [
//             "gestion consultation / la date de consultation doit etre siasie automatique en utilisant le time zone bug new_issue",
//           ],
//         },
//         priority1: {
//           todo: [
//             "Gestions rendez-vous/Ajouter/le champ doit avoir la date automatique bug new_issue",
//           ],
//           doing: [
//             "Authorisation de supprimer en consultation-medecin-generale bug",
//           ],
//         },
//         priority2: {
//           todo: ["Route est bloque la creation de nouveau route"],
//           doing: [
//             "Authorisation de supprimer en consultation-medecin-generale bug",
//           ],
//         },
//       },
//     ],
//   },
// ];

// for (let i = 0; i < assignedTasks.length; i++) {
//   const memberName = assignedTasks[i].memberName;
//   const tasksAssigned = assignedTasks[i].TaskAssigned;

//   for (let j = 0; j < tasksAssigned.length; j++) {
//     const taskAssigned = tasksAssigned[j];

//     for (const priorityKey in taskAssigned) {
//       if (taskAssigned.hasOwnProperty(priorityKey)) {
//         const priorityObj = taskAssigned[priorityKey];
//         const priorityNum = priorityKey.replace('priority', '');

//         for (let k = 0; k < Math.max(priorityObj.todo.length, priorityObj.doing.length); k++) {
//           const todoItem = priorityObj.todo[k] || '';
//           const doingItem = priorityObj.doing[k] || '';

//           let priorityBgClass = '';
//           if (priorityNum === '0') {
//             priorityBgClass = 'bg-danger';
//           } else if (priorityNum === '1') {
//             priorityBgClass = 'bg-warning';
//           } else if (priorityNum === '2') {
//             priorityBgClass = 'bg-default';
//           }

//           backlogTable.innerHTML += `
//             <tr>
//               <td>
//                 <a href="${doingItem.depot || '#'}">${todoItem}</a>
//               </td>
//               <td class="text-center">
//                 <span class="badge ${todoItem ? 'bg-info' : doingItem ? 'bg-primary' : ''} ${priorityBgClass}">
//                   ${todoItem ? `P${priorityNum}` : ''}
//                 </span>
//               </td>
//               <td class="project-state text-center">
//                 <span class="badge badge-info">${todoItem ? `À faire` : doingItem ? '' : 'Depot'}</span>
//               </td>
//               <td class="text-center">
//                 <div class="d-flex">
//                   <img src="../assets/imgs/25231.png" alt="" class="mx-2" style="width: 20px; height: 20px;">
//                   <p>${memberName}</p>
//                 </div>
//               </td>
//               <td class="project-state text-center">
//                 <span class="badge badge-info">${doingItem ? `En cours` : ''}</span>
//               </td>
//             </tr>
//           `;
//         }
//       }
//     }
//   }
// }
