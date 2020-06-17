import MicroModal from 'micromodal';

window.addEventListener('load', () => {
  MicroModal.init();
  if (!localStorage.getItem('juneteenth-opened')) {
    MicroModal.show('juneteenth');

    localStorage.setItem('juneteenth-opened', true);
  }
});
