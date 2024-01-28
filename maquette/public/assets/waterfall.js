const tableBody = document.querySelector("tbody");
const projectInfoList = [
  {
    projectAssigner: "Fatin Chebab",
    projectCreatedAt: "créé : 19/06/23",
    projectName: "PROJET FIL ROUGE",
    projectDescription:
      "Développer une application web qui répond aux 6 compétences visées duréférentiel (C1,C2,C3,C5,C6,C7).",
    projectDepo:
      "https://github.com/Jalil-Betroji/gestion-des-projet-file-rouge",
    projectProgress: "67",
    projectStatus: "En cours",
  },
  {
    projectAssigner: "Imane Bouziane",
    projectCreatedAt: "créé : 25/04/23",
    projectName:
      "Développer les interfaces de l'application de suivi budgétaire",
    projectDescription:
      " Ce brief a pour objectif de créer une application de suivi de budget en utilisant React JS",
    projectDepo: "https://drive.google.com/",
    projectProgress: "47",
    projectStatus: "En cours",
  },
  {
    projectAssigner: "Abdelatif Souklabi",
    projectCreatedAt: "créé : 05/04/23",
    projectName: "Plugin de formulaire de contact personnalisé pour WordPress",
    projectDescription:
      "Il s'agit de créer un plugin WordPress permettant de créer et personnaliser un formulaire de contact.",
    projectDepo: "https://drive.google.com/",
    projectProgress: "87",
    projectStatus: "En cours",
  },
  {
    projectAssigner: "Fouad Essarraj",
    projectCreatedAt: "créé : 05/04/23",
    projectName: "Plugin de formulaire de contact personnalisé pour WordPress",
    projectDescription:
      "Il s'agit de créer un plugin WordPress permettant de créer et personnaliser un formulaire de contact.",
    projectDepo:
      "https://github.com/Jalil-Betroji/gestion-des-projet-file-rouge",
    projectProgress: "100",
    projectStatus: "Terminé",
  },
  {
    projectAssigner: "Masaoudi",
    projectCreatedAt: "créé : 05/04/23",
    projectName: "Plugin de formulaire de contact personnalisé pour WordPress",
    projectDescription:
      "Il s'agit de créer un plugin WordPress permettant de créer et personnaliser un formulaire de contact.",
    projectDepo:
      "https://github.com/Jalil-Betroji/gestion-des-projet-file-rouge",
    projectProgress: "0",
    projectStatus: "À faire",
  },
];

for (let i = 0; i < projectInfoList.length; i++) {
  tableBody.innerHTML += `
    <tr>
            <td>
                <a>
                    ${projectInfoList[i].projectAssigner}
                </a>
                <br />
                <small>
                ${projectInfoList[i].projectCreatedAt}
                </small>
            </td>
            <td>
                <a>
                ${projectInfoList[i].projectName}
                </a>
                <br />
                <small class="truncate">
                ${projectInfoList[i].projectDescription}
                </small>
            </td>
            <td class="text-center">
                <ul class="list-inline">
                    <li class="list-inline-item">
                        <a href="${projectInfoList[i].projectDepo}">
                            <img src="/public/assets/imgs/25231.png" alt="github" class="table-avatar">
                        </a>
                    </li>
                </ul>
            </td>
            <td class="project_progress">
    <div class="progress progress-sm">
        <div class="progress-bar 
            ${
              projectInfoList[i].projectProgress > 70
                ? "bg-success"
                : projectInfoList[i].projectProgress > 50 &&
                  projectInfoList[i].projectProgress < 70
                ? "bg-primary"
                : projectInfoList[i].projectProgress > 0 &&
                  projectInfoList[i].projectProgress < 50
                ? "bg-warning"
                : "bg-default"
            }" 
            role="progressbar" 
            aria-valuenow="${projectInfoList[i].projectProgress}" 
            aria-valuemin="0" 
            aria-valuemax="100" 
            style="width: ${projectInfoList[i].projectProgress}%">
        </div>
    </div>
    <small>
        ${projectInfoList[i].projectProgress}% Complet
    </small>
</td>

            <td class="project-state text-center">
                <span class="badge badge-info">En cours</span>
            </td>
            <td class="project-actions text-center">
                <a class="btn btn-primary btn-sm" href="tasks/index.php">
                Tâches
                </a>
            </td>
            <td class="project-actions text-center">
                <a class="btn btn-default btn-sm" href="tasks/show.php">
                <i class="fa-regular fa-folder" aria-hidden="true"></i>
                </a>
                <a class="btn btn-info btn-sm" href="tasks/edit.php">
                    <i class="fas fa-pencil-alt">
                    </i>
                </a>
                <a class="btn btn-danger btn-sm" href="#" data-toggle="modal" data-target="#modal-delete">
                    <i class="fas fa-trash">
                    </i>
                </a>
            </td>
        </tr>
    `;
}
