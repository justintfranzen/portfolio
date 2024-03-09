export const initProjectSection = () => {
  const infoH1 = document.querySelector('.info h1');
  const infoH3 = document.querySelector('.info h3');
  const hr = document.querySelector('.info hr');
  const projectsLink = document.querySelector('.nav ul .work-section');
  const navSection = document.querySelector('.info .nav');
  const heroSectionLeft = document.querySelector('.hero-section.left');
  const heroSectionRight = document.querySelector('.hero-section.right');
  const projects = document.querySelectorAll('.project');
  const projectSection = document.querySelector('.projects');
  const projectsAboutContact = document.querySelector('.projects .nav');
  const aboutContactSection = document.querySelector('.about-contact');

  projectsLink.addEventListener('click', () => {
    heroSectionLeft.classList.add('open-left');
    heroSectionRight.classList.add('open-right');
    infoH1.classList.add('header-hide');
    infoH3.classList.add('header-hide');
    hr.classList.add('header-hide');
    navSection.classList.add('header-hide');
    projectSection.style.overflowX = 'scroll';

    setTimeout(() => {
      Array.from(projects).forEach((project, index) => {
        // Delay each box's animation
        setTimeout(() => {
          project.style.opacity = '1';
          project.style.transform = 'translateY(0)';
        }, index * 200 + 200); // 2000 milliseconds (2 seconds) delay for the first box, then 1000 milliseconds (1 second) gap for the subsequent boxes
      });
    }, 400);

    setTimeout(() => {
      projectsAboutContact.style.right = '1em';
      projectsAboutContact.style.transition = '1s';
    }, 3000);
  });

  projectsAboutContact.addEventListener('click', () => {
    aboutContactSection.style.top = '0';
  });
};
