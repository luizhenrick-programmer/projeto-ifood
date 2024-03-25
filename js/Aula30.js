const toastTrigger = document.querySelector('#btnToast')
const toastLiveExample = document.querySelector('.toast')

if (toastTrigger) {
  toastTrigger.addEventListener('click', () => {
    const Toast = new  bootstrap.Toast(toastLiveExample);
    Toast.show()
  })
}