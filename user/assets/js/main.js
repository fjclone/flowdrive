
(function() {
  "use strict";

  /**
   * Easy selector helper function
   */
  const select = (el, all = false) => {
    el = el.trim()
    if (all) {
      return [...document.querySelectorAll(el)]
    } else {
      return document.querySelector(el)
    }
  }

  /**
   * Easy event listener function
   */
  const on = (type, el, listener, all = false) => {
    if (all) {
      select(el, all).forEach(e => e.addEventListener(type, listener))
    } else {
      select(el, all).addEventListener(type, listener)
    }
  }

  /**
   * Easy on scroll event listener 
   */
  const onscroll = (el, listener) => {
    el.addEventListener('scroll', listener)
  }

  /**
   * Sidebar toggle
   */
  if (select('.toggle-sidebar-btn')) {
    on('click', '.toggle-sidebar-btn', function(e) {
      select('body').classList.toggle('toggle-sidebar')
    })
  }

  /**
   * Search bar toggle
   */
  if (select('.search-bar-toggle')) {
    on('click', '.search-bar-toggle', function(e) {
      select('.search-bar').classList.toggle('search-bar-show')
    })
  }

  /**
   * Navbar links active state on scroll
   */
  let navbarlinks = select('#navbar .scrollto', true)
  const navbarlinksActive = () => {
    let position = window.scrollY + 200
    navbarlinks.forEach(navbarlink => {
      if (!navbarlink.hash) return
      let section = select(navbarlink.hash)
      if (!section) return
      if (position >= section.offsetTop && position <= (section.offsetTop + section.offsetHeight)) {
        navbarlink.classList.add('active')
      } else {
        navbarlink.classList.remove('active')
      }
    })
  }
  window.addEventListener('load', navbarlinksActive)
  onscroll(document, navbarlinksActive)

  /**
   * Toggle .header-scrolled class to #header when page is scrolled
   */
  let selectHeader = select('#header')
  if (selectHeader) {
    const headerScrolled = () => {
      if (window.scrollY > 100) {
        selectHeader.classList.add('header-scrolled')
      } else {
        selectHeader.classList.remove('header-scrolled')
      }
    }
    window.addEventListener('load', headerScrolled)
    onscroll(document, headerScrolled)
  }

  /**
   * Back to top button
   */
  let backtotop = select('.back-to-top')
  if (backtotop) {
    const toggleBacktotop = () => {
      if (window.scrollY > 100) {
        backtotop.classList.add('active')
      } else {
        backtotop.classList.remove('active')
      }
    }
    window.addEventListener('load', toggleBacktotop)
    onscroll(document, toggleBacktotop)
  }

  /**
   * Initiate tooltips
   */
  var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
  var tooltipList = tooltipTriggerList.map(function(tooltipTriggerEl) {
    return new bootstrap.Tooltip(tooltipTriggerEl)
  })

  /**
   * Initiate quill editors
   */
  if (select('.quill-editor-default')) {
    new Quill('.quill-editor-default', {
      theme: 'snow'
    });
  }

  if (select('.quill-editor-bubble')) {
    new Quill('.quill-editor-bubble', {
      theme: 'bubble'
    });
  }

  if (select('.quill-editor-full')) {
    new Quill(".quill-editor-full", {
      modules: {
        toolbar: [
          [{
            font: []
          }, {
            size: []
          }],
          ["bold", "italic", "underline", "strike"],
          [{
              color: []
            },
            {
              background: []
            }
          ],
          [{
              script: "super"
            },
            {
              script: "sub"
            }
          ],
          [{
              list: "ordered"
            },
            {
              list: "bullet"
            },
            {
              indent: "-1"
            },
            {
              indent: "+1"
            }
          ],
          ["direction", {
            align: []
          }],
          ["link", "image", "video"],
          ["clean"]
        ]
      },
      theme: "snow"
    });
  }

  /**
   * Initiate TinyMCE Editor
   */

  const useDarkMode = window.matchMedia('(prefers-color-scheme: dark)').matches;
  const isSmallScreen = window.matchMedia('(max-width: 1023.5px)').matches;

  tinymce.init({
    selector: 'textarea.tinymce-editor',
    plugins: 'preview importcss searchreplace autolink autosave save directionality code visualblocks visualchars fullscreen image link media codesample table charmap pagebreak nonbreaking anchor insertdatetime advlist lists wordcount help charmap quickbars emoticons accordion',
    editimage_cors_hosts: ['picsum.photos'],
    menubar: 'file edit view insert format tools table help',
    toolbar: "undo redo | accordion accordionremove | blocks fontfamily fontsize | bold italic underline strikethrough | align numlist bullist | link image | table media | lineheight outdent indent| forecolor backcolor removeformat | charmap emoticons | code fullscreen preview | save print | pagebreak anchor codesample | ltr rtl",
    autosave_ask_before_unload: true,
    autosave_interval: '30s',
    autosave_prefix: '{path}{query}-{id}-',
    autosave_restore_when_empty: false,
    autosave_retention: '2m',
    image_advtab: true,
    link_list: [{
        title: 'My page 1',
        value: 'https://www.tiny.cloud'
      },
      {
        title: 'My page 2',
        value: 'http://www.moxiecode.com'
      }
    ],
    image_list: [{
        title: 'My page 1',
        value: 'https://www.tiny.cloud'
      },
      {
        title: 'My page 2',
        value: 'http://www.moxiecode.com'
      }
    ],
    image_class_list: [{
        title: 'None',
        value: ''
      },
      {
        title: 'Some class',
        value: 'class-name'
      }
    ],
    importcss_append: true,
    file_picker_callback: (callback, value, meta) => {
      /* Provide file and text for the link dialog */
      if (meta.filetype === 'file') {
        callback('https://www.google.com/logos/google.jpg', {
          text: 'My text'
        });
      }

      /* Provide image and alt text for the image dialog */
      if (meta.filetype === 'image') {
        callback('https://www.google.com/logos/google.jpg', {
          alt: 'My alt text'
        });
      }

      /* Provide alternative source and posted for the media dialog */
      if (meta.filetype === 'media') {
        callback('movie.mp4', {
          source2: 'alt.ogg',
          poster: 'https://www.google.com/logos/google.jpg'
        });
      }
    },
    height: 600,
    image_caption: true,
    quickbars_selection_toolbar: 'bold italic | quicklink h2 h3 blockquote quickimage quicktable',
    noneditable_class: 'mceNonEditable',
    toolbar_mode: 'sliding',
    contextmenu: 'link image table',
    skin: useDarkMode ? 'oxide-dark' : 'oxide',
    content_css: useDarkMode ? 'dark' : 'default',
    content_style: 'body { font-family:Helvetica,Arial,sans-serif; font-size:16px }'
  });

  /**
   * Initiate Bootstrap validation check
   */
  var needsValidation = document.querySelectorAll('.needs-validation')

  Array.prototype.slice.call(needsValidation)
    .forEach(function(form) {
      form.addEventListener('submit', function(event) {
        if (!form.checkValidity()) {
          event.preventDefault()
          event.stopPropagation()
        }

        form.classList.add('was-validated')
      }, false)
    })

  /**
   * Initiate Datatables
   */
  const datatables = select('.datatable', true)
  datatables.forEach(datatable => {
    new simpleDatatables.DataTable(datatable, {
      perPageSelect: [5, 10, 15, ["All", -1]],
      columns: [{
          select: 2,
          sortSequence: ["desc", "asc"]
        },
        {
          select: 3,
          sortSequence: ["desc"]
        },
        {
          select: 4,
          cellClass: "green",
          headerClass: "red"
        }
      ]
    });
  })

  /**
   * Autoresize echart charts
   */
  const mainContainer = select('#main');
  if (mainContainer) {
    setTimeout(() => {
      new ResizeObserver(function() {
        select('.echart', true).forEach(getEchart => {
          echarts.getInstanceByDom(getEchart).resize();
        })
      }).observe(mainContainer);
    }, 200);
  }

})();

  // Function to get and display the current date, day, and time
  function updateDateTime() {
    const currentDate = new Date();
    const dateOptions = { year: 'numeric', month: 'long', day: 'numeric' };
    const currentDateFormatted = currentDate.toLocaleDateString('en-US', dateOptions);
  
    const currentTimeFormatted = currentDate.toLocaleTimeString('en-US', { hour: '2-digit', minute: '2-digit'});
  
    // Update the HTML content
    document.getElementById("current-date").textContent = currentDateFormatted;
    document.getElementById("current-time").textContent = currentTimeFormatted;
  }
  
  // Initial call to update the time immediately
  updateDateTime();
  // Update the time every second
  setInterval(updateDateTime, 1000);
  
  // TinyMCE Rich Text Editor

 tinymce.int ({
  selector: 'textarea#doc',
  width: 1000,
  height: 300,
  plugins: [
    'advlist', 'autolink', 'link', 'image','lists', 'charmap', 'preview', 'anchor', 'pagebreak',
    'searchreplace','wordcount', 'visualblocks', 'code','fullscreen', 'insertdatetime', 'media',
    'table', 'emoticons', 'template', 'codesample'
  ],
  toolbar: 'undo redo | styles | bold italic underline | alignleft aligncenter alignright alignjustify |' +
  'bullist numlist outdent indent |link image | prive preview media full screen|' +
  'forecolor backcolor emoticons',
  menu: {
    favs: {title: 'menu', items: 'code visualaid | searchreplace | emoticons'}
  },
  menubar: 'favs file edit view insert formal tools table',
  content_style: 'body{font-family:Helvetica,Arial,sans-serif; font-size:16px'
 });


// UPLOAD FILE

function handleFileUpload(event) {
  const file = event.target.files[0];
  if (file) {
      const fileType = file.type;
      if (fileType === 'application/pdf' || fileType === 'application/vnd.openxmlformats-officedocument.wordprocessingml.document') {
          alert(`Successfully uploaded: ${file.name}`);
          // Here, you can handle the file as needed (e.g., upload it to a server)
      } else {
          alert('Please upload a valid PDF or DOCX file.');
      }
  }
}

function handleDrop(event) {
  event.preventDefault(); // Prevent default behavior (Prevent file from being opened)
  const files = event.dataTransfer.files;
  if (files.length) {
      const file = files[0];
      const fileType = file.type;
      if (fileType === 'application/pdf' || fileType === 'application/vnd.openxmlformats-officedocument.wordprocessingml.document') {
          alert(`Successfully uploaded: ${file.name}`);
          // Handle the file as needed (e.g., upload it to a server)
      } else {
          alert('Please upload a valid PDF or DOCX file.');
      }
  }
}

// Progress variables
let circularProgress = document.querySelector(".circular-progress"),
    progressValue = document.querySelector(".progress-value");

let progressStartValue = 0;    
let progressEndValue = 0;    
let progress; // Declare the progress variable
const speed = 100;

// Update progress based on selected project
function updateProgress(value) {
    progressEndValue = value; // Set the end value based on project selection
    progressStartValue = 0; // Reset start value
    clearInterval(progress); // Clear any existing progress interval

    // Animate progress
    progress = setInterval(() => {
        if (progressStartValue < progressEndValue) {
            progressStartValue++;
            progressValue.textContent = `${progressStartValue}%`;
            circularProgress.style.background = `conic-gradient(#7d2ae8 ${progressStartValue * 3.6}deg, #ededed 0deg)`;
        } else {
            clearInterval(progress); // Stop when we reach the end value
        }
    }, speed);
}

// Project selection logic
document.addEventListener('DOMContentLoaded', function() {
    const projListsName = document.getElementById('proj-lists-name');
    const projOptions = projListsName.querySelector('.proj-options');

    // Show options on hover
    projListsName.addEventListener('mouseenter', function() {
        projOptions.style.display = 'block';
    });

    // Hide options when not hovering
    projListsName.addEventListener('mouseleave', function() {
        projOptions.style.display = 'none';
    });

    // Handle option selection
    const options = projOptions.querySelectorAll('li');
    options.forEach(option => {
        option.addEventListener('click', function() {
            projListsName.querySelector('span').textContent = this.textContent; // Set selected text
            projOptions.style.display = 'none'; // Hide options
            
            // Set progress values based on selection
            const progressValue = this.dataset.value === "proj-lists-opt-1" ? 50 : 25; // 50% for Project 1, 25% for Project 2
            updateProgress(progressValue); // Update progress
        });
    });
});


// TASK LISTS

document.querySelectorAll('.option').forEach(option => {
  option.addEventListener('click', function() {
      const selectedOption = document.querySelector('.selected-option');
      selectedOption.textContent = this.textContent; // Update selected option text
      document.querySelector('.options').style.display = 'none'; // Hide options after selection
  });
});

// Optional: Hide options when clicking outside
document.addEventListener('click', function(event) {
  const isClickInside = document.querySelector('.custom-select').contains(event.target);
  if (!isClickInside) {
      document.querySelector('.options').style.display = 'none'; // Hide options
  }
});


// UPLOAD PICTURE



// DOCUMENT COMMENT

document.getElementById('send-button').addEventListener('click', function () {
  const commentInput = document.getElementById('comment-input');
  const userCommContainer = document.getElementById('user-comm');

  // Get the comment text
  const commentText = commentInput.value.trim();

  // Check if the input is not empty
  if (commentText) {
      // Create a new comment div
      const commentDiv = document.createElement('div');
      commentDiv.classList.add('comment');
      commentDiv.textContent = commentText;

      // Append the new comment to the user comments section
      userCommContainer.appendChild(commentDiv);

      // Clear the input field
      commentInput.value = '';
  } else {
      alert('Please enter a comment before sending.');
  }
});


// SIGN UP

// Function to check and replace class names
function replaceClassIfSame(element, oldClass, newClass) {
  if (element.classList.contains(oldClass)) {
      element.classList.replace(oldClass, newClass);
  }
}

// Get elements with the class you want to check
const formContainer = document.querySelector('.form-container');
const formInput = document.querySelectorAll('.form-input');
const inputWithIcon = document.querySelectorAll('.input-with-icon');

// Check and replace for specific elements
replaceClassIfSame(formContainer, 'form-container', 'new-form-container');

formInput.forEach(element => {
  replaceClassIfSame(element, 'form-input', 'new-form-input');
});

inputWithIcon.forEach(element => {
  replaceClassIfSame(element, 'input-with-icon', 'new-input-with-icon');
});
