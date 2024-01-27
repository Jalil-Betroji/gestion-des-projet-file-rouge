const issuesTableBody = document.getElementById("issuesTableBody");
const issuesList = [
  {
    issue: [
      {
        issueName: "gestion de rendez-vous / recherche sa marche pas",
        labels: ["Bug", "Enhancement"],
        projet: "CNMH",
        assignedTo: "Betroji Jalil",
        prioriy: "P0",
        img: "../assets/imgs/25231.png",
      },
      {
        issueName:
          "gestion consultation / la date de consultation doit etre saisie automatique en utilisant le time zone ",
        labels: ["Enhancement"],
        projet: "CNMH",
        assignedTo: "Betroji Jalil",
        prioriy: "P1",
        img: "../assets/imgs/25231.png",
      },
      {
        issueName: "changer le titre de routage choix/tuteur en choix-tuteur",
        labels: ["Bug"],
        projet: "CNMH",
        assignedTo: "Betroji Jalil",
        prioriy: "P0",
        img: "../assets/imgs/25231.png",
      },
      {
        issueName: "gestion de rendez-vous / recherche sa marche pas",
        labels: ["Bug"],
        projet: "CNMH",
        assignedTo: "Betroji Jalil",
        prioriy: "P2",
        img: "../assets/imgs/25231.png",
      },
    ],
  },
];

if (issuesTableBody != null) {
  for (let i = 0; i < issuesList[0].issue.length; i++) {
    const labels = issuesList[0].issue[i].labels;

    const labelSpans = labels
      .map((label, index) => {
        let labelClass = "";
        if (label === "Bug") {
          labelClass = "bg-danger";
        } else if (label === "Enhancement") {
          labelClass = "bg-info";
        }

        return `<span class="rounded p-1 ${labelClass}">${label}</span>`;
      })
      .join(" ");

      issuesTableBody.innerHTML += `
        <tr>
          <td>
            ${issuesList[0].issue[i].issueName}
            ${labelSpans}
          </td>
          <td>
          ${issuesList[0].issue[i].projet}
        </td>
          <td class="text-center">
            <img src="${issuesList[0].issue[i].img}" style="width:20px;height:20px;border-radius:100%;">
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
