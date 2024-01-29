let skillsProgressBar = document.querySelector("#skills");
let projectProgressBar = document.getElementById("validatedProject");
let finalProjectBar = document.getElementById('projet-PFE');
let projectValue = document.getElementById('project-value');
let tasksCorrectedBar = document.getElementById('tasksCorrected');
let tasksValue = document.getElementById('tasksValue');
let pfeValue = document.getElementById('pfe-value');
let skillsValue = document.getElementById("skills-value");

let skillsProgressValue = 0;
let projectProgressValue = 0;
let tasksProgressValue = 0;
let finalProjectValue = 0;
let skillsProgressEndValue = 45;
let projectProgressEndValue = 25;
let tasksProgressEndValue = 35;
let finalProjectEndValue = 10;
let speed = 40;

let skillsProgress = setInterval(() => {
  skillsProgressValue++;
  skillsValue.textContent = `${skillsProgressValue}%`;
  skillsProgressBar.style.background = `conic-gradient(
      #edd53d ${skillsProgressValue * 3.6}deg, 
      #cadcff ${360 - skillsProgressValue * 3.6}deg
  )`;
  if (skillsProgressValue == skillsProgressEndValue) {
    clearInterval(skillsProgress);
  }
}, speed);

let projectProgress = setInterval(() => {
  projectProgressValue++;
  projectValue.textContent = `${projectProgressValue}%`;
  projectProgressBar.style.background = `conic-gradient(
      #32d00a ${projectProgressValue * 3.6}deg, 
      #cadcff ${360 - projectProgressValue * 3.6}deg
  )`;
  if (projectProgressValue == projectProgressEndValue) {
    clearInterval(projectProgress);
  }
}, speed);

let tasksCorrectedProgress = setInterval(() => {
  tasksProgressValue++;
  tasksValue.textContent = `${tasksProgressValue}%`;
  tasksCorrectedBar.style.background = `conic-gradient(
      #4d5bf9 ${tasksProgressValue * 3.6}deg, 
      #cadcff ${360 - tasksProgressValue * 3.6}deg
  )`;
  if (tasksProgressValue == tasksProgressEndValue) {
    clearInterval(tasksCorrectedProgress);
  }
}, speed);

let finalProjectProgress = setInterval(() => {
    finalProjectValue++;
    pfeValue.textContent = `${finalProjectValue}%`;
    finalProjectBar.style.background = `conic-gradient(
        #e3614d ${finalProjectValue * 3.6}deg, 
        #cadcff ${360 - finalProjectValue * 3.6}deg
    )`;
    if (finalProjectValue == finalProjectEndValue) {
      clearInterval(finalProjectProgress);
    }
  }, speed);
