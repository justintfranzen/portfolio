export const initShowProjectInformation = () => {
  const projectBtn = document.querySelectorAll(
    '.project .project-details button',
  );
  const project = document.querySelectorAll('.project');
  const projectInformation = document.querySelectorAll('.modal');
  const closeModal = document.querySelectorAll('.modal .close-modal');

  for (let i = 0; i < project.length; i++) {
    if (projectBtn[i]) {
      projectBtn[i].addEventListener('click', () => {
        const currentProjectInformation = projectInformation[i];

        // Toggle the display property
        if (currentProjectInformation.style.display === 'flex') {
          currentProjectInformation.style.display = 'none';
        } else {
          currentProjectInformation.style.display = 'flex';
        }
      });

      closeModal[i].addEventListener('click', () => {
        const currentProjectInformation = projectInformation[i];
        currentProjectInformation.style.display = 'none';
      });
    }
  }
};
