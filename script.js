//Tabs
const tabs = document.querySelectorAll('[data-tab-target]')
const tabContents = document.querySelectorAll('[data-tab-content]')

tabs.forEach(tab => {
  tab.addEventListener('click', () => {
    const target = document.querySelector(tab.dataset.tabTarget)
    tabContents.forEach(tabContent => {
      tabContent.classList.remove('active')
    })
    tabs.forEach(tab => {
      tab.classList.remove('active')
    })
    tab.classList.add('active')
    target.classList.add('active')
  })
})


//Links
const links = document.querySelectorAll('[data-link-target]')
const linkContents = document.querySelectorAll('[data-link-content]')

links.forEach(link => {
  link.addEventListener('click', () => {
    const target = document.querySelector(link.dataset.linkTarget)
    linkContents.forEach(linkContent => {
      linkContent.classList.remove('active')
    })
    links.forEach(link => {
      link.classList.remove('active')
    })
    link.classList.add('active')
    target.classList.add('active')
  })
})


// // Modal

// const modals = document.querySelectorAll('[data-modal]')
// const btns = document.querySelectorAll('[data-modal-btns]')

// btns.forEach(btn => {
//   btn.addEventListener('click', () => {
//     const target = document.querySelector(btn.dataset.)
//   }
// })

// Deluxe
var modals = document.getElementsByClassName("modal");

var deluxeModal = document.getElementById("deluxeFormModal");
var deluxeBtn = document.getElementById("deluxeFormBtn");

// Platinum
var platinumModal = document.getElementById("platinumFormModal");
var platinumBtn = document.getElementById("platinumFormBtn");

// Express
var expressModal = document.getElementById("expressFormModal");
var expressBtn = document.getElementById("expressFormBtn");

// Close Spans
var spans = document.getElementsByClassName("close");

// When the user clicks on the button, open the modal
deluxeBtn.onclick = function() {
  deluxeModal.style.display = "block";
}

platinumBtn.onclick = function() {
  platinumModal.style.display = "block";
}

expressBtn.onclick = function() {
  expressModal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
spans[0].onclick = function() {
  deluxeModal.style.display = "none";
}

spans[1].onclick = function() {
  platinumModal.style.display = "none";
}

spans[2].onclick = function() {
  expressModal.style.display = "none";
}


// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == deluxeModal || event.target == platinumModal || event.target == expressModal) {
    deluxeModal.style.display = "none";
    expressModal.style.display = "none";
    platinumModal.style.display = "none";
  }
}


// Modal refactor
