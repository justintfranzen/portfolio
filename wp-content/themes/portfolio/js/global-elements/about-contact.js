export const initAboutContact = () => {
  const aboutContactSection = document.querySelector('.about-contact');
  const aboutContactBtn = document.querySelector('.nav .about-contact-btn');
  const closeBtn = document.querySelector('.about .close');

  aboutContactBtn.addEventListener('click', () => {
    aboutContactSection.style.top = '0';
  });

  closeBtn.addEventListener('click', () => {
    aboutContactSection.style.top = '-100%';
  });
};
