document.addEventListener('DOMContentLoaded', () => {

    var player1 = new BootstrapVideoplayer('myCustomPlayer',{
        selectors:{
            video: '.video'
        }
    })

    var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
    var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
      return new bootstrap.Tooltip(tooltipTriggerEl,{
          boundary: document.body
      })
    })

})
