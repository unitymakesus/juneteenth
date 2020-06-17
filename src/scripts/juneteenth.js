import MicroModal from 'micromodal';

window.addEventListener('load', () => {
  if (!localStorage.getItem('juneteenth-opened')) {
    MicroModal.init();
    MicroModal.show('juneteenth');

    localStorage.setItem('juneteenth-opened', true);
  }
});
