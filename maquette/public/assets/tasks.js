const tasksTableBody = document.getElementById("tasksTableBody");
const tasksList = [
  {
    task: [
      {
        taskName: "gestion de rendez-vous / recherche sa marche pas",
        labels: ["Bug", "Enhancement"],
        projet:"CNMH",
        assignedTo: "Betroji Jalil",
        img: "../assets/imgs/25231.png",
      },
      {
        taskName:
          "gestion consultation / la date de consultation doit etre saisie automatique en utilisant le time zone ",
        labels: ["Enhancement"],
        projet:"CNMH",
        assignedTo: "Betroji Jalil",
        img: "../assets/imgs/25231.png",
      },
      {
        taskName: "changer le titre de routage choix/tuteur en choix-tuteur",
        labels: ["Bug"],
        projet:"CNMH",
        assignedTo: "Betroji Jalil",
        img: "../assets/imgs/25231.png",
      },
      {
        taskName: "gestion de rendez-vous / recherche sa marche pas",
        labels: ["Bug"],
        projet:"CNMH",
        assignedTo: "Betroji Jalil",
        img: "../assets/imgs/25231.png",
      },
    ],
  },
];

if (tasksTableBody != null) {
  for (let i = 0; i < tasksList[0].task.length; i++) {
    const labels = tasksList[0].task[i].labels;

    const labelSpans = labels.map((label, index) => {
      let labelClass = '';
      if (label === "Bug") {
        labelClass = 'bg-danger';
      } else if (label === "Enhancement") {
        labelClass = 'bg-info';
      }

      return `<span class="rounded p-1 ${labelClass}">${label}</span>`;
    }).join(' ');

    tasksTableBody.innerHTML += `
      <tr>
        <td>
          ${tasksList[0].task[i].taskName}
          ${labelSpans}
        </td>
        <td>
        ${tasksList[0].task[i].projet}
      </td>
        <td class="text-center">
          <img src="${tasksList[0].task[i].img}" style="width:20px;height:20px;border-radius:100%;">
        </td>
        <td class="text-center">
          <a class="btn btn-default btn-sm" href="show.php">
            <i class="fa-regular fa-folder" aria-hidden="true"></i>
          </a>
          <a class="btn btn-info btn-sm" href="edit.php">
            <i class="fas fa-pencil-alt"></i>
          </a>
          <a class="btn btn-danger btn-sm" href="#" data-toggle="modal" data-target="#modal-delete">
            <i class="fas fa-trash"></i>
          </a>
        </td>
      </tr>
    `;
  }
}
