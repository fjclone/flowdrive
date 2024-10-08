<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Project</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/PPTS.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="dashboard.php" class="logo d-flex align-items-center">
        <img src="assets/img/PPTS.png" alt="">
        <span class="d-none d-lg-block">Flow Drive</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    <div class="search-bar">
      <form class="search-form d-flex align-items-center" method="POST" action="#">
        <input type="text" name="query" placeholder="Search" title="Enter search keyword">
        <button type="submit" title="Search"><i class="bi bi-search"></i></button>
      </form>
    </div><!-- End Search Bar -->

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        <li class="nav-item d-block d-lg-none">
          <a class="nav-link nav-icon search-bar-toggle " href="#">
            <i class="bi bi-search"></i>
          </a>
        </li><!-- End Search Icon-->

        <li class="nav-item dropdown">

          <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
            <i class="bi bi-bell"></i>
            <span class="badge bg-primary badge-number">4</span>
          </a><!-- End Notification Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications">
            <li class="dropdown-header">
              Project Notifications
              <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-exclamation-circle text-warning"></i>
              <div>
                <h4>User Name</h4>
                <p>Project | Task | Avtivity | Sttus</p>
                <p>Date Stamp | Time Stamp</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-x-circle text-danger"></i>
              <div>
                <h4>User Name</h4>
                <p>Project | Task | Avtivity | Sttus</p>
                <p>Date Stamp | Time Stamp</p>
              </div>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-check-circle text-success"></i>
              <div>
                <h4>User Name</h4>
                <p>Project | Task | Avtivity | Sttus</p>
                <p>Date Stamp | Time Stamp</p>
              </div>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-info-circle text-primary"></i>
              <div>
                <h4>User Name</h4>
                <p>Project | Task | Avtivity | Sttus</p>
                <p>Date Stamp | Time Stamp</p>
              </div>
              </div>
            </li>

          </ul><!-- End Notification Dropdown Items -->

        </li><!-- End Notification Nav -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow messages">
            </li>

          </ul><!-- End Messages Dropdown Items -->

        </li><!-- End Messages Nav -->

        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <img src="assets/img/profile-img.jpg" alt="Profile" class="rounded-circle">
            <span class="d-none d-md-block dropdown-toggle ps-2">User Name</span>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6>User Name</h6>
              <span>Course | Year & Blk. </span>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="account.php">
                <i class="bi bi-person"></i>
                <span>My Profile</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="faqs.php">
                <i class="bi bi-question-circle"></i>
                <span>Need Help?</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="#">
                <i class="bi bi-box-arrow-right"></i>
                <span>Sign Out</span>
              </a>
            </li>

          </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->

      </ul>
    </nav><!-- End Icons Navigation -->
  </header><!-- End Header -->

    <!-- ======= Sidebar ======= -->
    <aside id="sidebar" class="sidebar">

      <ul class="sidebar-nav" id="sidebar-nav">
  
        <li class="nav-item">
          <a class="nav-link " href="dashboard.php">
            <i class="bi bi-grid"></i>
            <span>Dashboard</span>
          </a>
        </li><!-- End Dashboard Nav -->
  
        <li class="nav-item">
          <a class="nav-link collapsed" href="project-spaces.php">
            <i class="bi bi-menu-button-wide"></i><span>Project</span>
          </a>
        </li><!-- End Components Nav -->

        
  
        <li class="nav-item">
          <a class="nav-link collapsed" href="archives.php">
            <i class="bi bi-journal-text"></i><span>Archives</span>
          </a>
        </li><!-- End Archives Nav -->
  
        <li class="nav-heading">Settings</li>
  
        <li class="nav-item">
          <a class="nav-link collapsed" href="account.php">
            <i class="bi bi-person"></i>
            <span>Account</span>
          </a>
        </li><!-- End Profile Page Nav -->

        <li class="nav-item">
          <a class="nav-link collapsed" href="contact.php">
            <i class="bi bi-envelope"></i>
            <span>Contact</span>
          </a>
        </li><!-- End Contact Page Nav -->
  
        <li class="nav-item">
          <a class="nav-link collapsed" href="pages-login.php">
            <i class="bi bi-box-arrow-in-right"></i>
            <span>Sign Out</span>
          </a>
        </li><!-- End Sign Out Page Nav -->
  
      </ul>
  
    </aside><!-- End Sidebar-->

  <main id="main" class="main">

    <div class="pagetitle">
      <a href="project-spaces.php">
        <h1>Project</h1>
      </a>
      
    </div><!-- End Page Title -->

    <section>
      <div class="docu-container" id="docu-container">
        <div class="docu-input" id="docu-input">
      <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
      
    
      <script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>
      
      <div id="editor"></div>
    
      <script>
        var quill = new Quill('#editor', {
          theme: 'snow',
          modules: {
            toolbar: [
              [{ 'header': [1, 2, 3, false] }],
              ['bold', 'italic', 'underline'],
              ['image', 'link'],
              [{ 'list': 'ordered' }, { 'list': 'bullet' }]
            ]
          }
        });
      </script>
      </div>

      <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comment Section</title>
    <link rel="stylesheet" href="styles.css"> <!-- Link to external CSS file -->
</head>
<body>
    <div class="docu-comment-con" id="docu-comment-con">
        <div class="comment-head" id="comment-head">
            Comments <hr>
        </div>

        <div class="user-comm" id="user-comm">
            <!-- Comments will be appended here -->
        </div>

        <div class="your-comment" id="your-comment">
            <div class="input-container">
                <input type="text" id="comment-input" placeholder="Type your comment here...">
                <button id="send-button" class="send-button">
                    <img src="assets/img/send-comm.png" alt="Send" class="send-icon">
                </button>
            </div>
        </div>

        <!-- Modal for delete confirmation -->
        <div id="deleteModal" class="modal">
            <div class="modal-content">
                <span class="close">&times;</span>
                <h3>Delete Comment</h3>
                <p>Are you sure? This comment will disappear for good.</p>
                <div>
                    <button id="confirmDelete">Delete</button>
                    
                </div>
            </div>
        </div>

        <script>
            const sendButton = document.getElementById("send-button");
            const commentInput = document.getElementById("comment-input");
            const userComm = document.getElementById("user-comm");
            const deleteModal = document.getElementById("deleteModal");
            let commentToDelete; // Variable to hold the comment element to delete

            // Replace this with actual user info
            const currentUser = {
                username: "CurrentUser",
                img: "assets/img/no-pfp.png",
            };

            // Event listener for the send button
            sendButton.addEventListener("click", () => {
                const commentText = commentInput.value.trim();
                if (commentText) {
                    const commentElement = createCommentElement(commentText, currentUser.username, currentUser.img);
                    userComm.appendChild(commentElement);
                    commentInput.value = ""; // Clear input after sending
                }
            });

            // Function to create a comment element
            function createCommentElement(text, username, userImg) {
                const commentDiv = document.createElement("div");
                commentDiv.className = "user-comm-item";

                const userInfo = document.createElement("div");
                userInfo.className = "user-info";
                const userImage = document.createElement("img");
                userImage.src = userImg;
                userImage.className = "user-img";

                const userDetails = document.createElement("div");
                userDetails.className = "user-details";

                const userName = document.createElement("span");
                userName.className = "username";
                userName.textContent = username;

                const timestamp = document.createElement("span");
                timestamp.className = "timestamp";
                timestamp.textContent = new Date().toLocaleString(); // Current date and time

                const commentText = document.createElement("div");
                commentText.className = "comment-text";
                commentText.textContent = text;

                // Create a container for action links
                const actionLinksContainer = document.createElement("div");
                actionLinksContainer.className = "action-links";

                const replyLink = document.createElement("span");
                replyLink.className = "reply-link";
                replyLink.textContent = "Reply";

                replyLink.addEventListener("click", () => {
                    // Create the container for the reply input and send button
                    const replyInputContainer = document.createElement("div");
                    replyInputContainer.className = "reply-input-container"; // Apply the same style as the comment input

                    const replyInput = document.createElement("input");
                    replyInput.type = "text";
                    replyInput.placeholder = "Type your reply...";

                    const replyButton = document.createElement("button");
                    replyButton.className = "send-button"; // Add the send-button class for styling
                    replyButton.innerHTML = `<img src="assets/img/send-comm.png" alt="Send" class="send-icon">`; // Use the same send icon

                    replyButton.addEventListener("click", () => {
                        if (replyInput.value.trim()) {
                            const replyElement = createCommentElement(replyInput.value, currentUser.username, currentUser.img);
                            commentDiv.appendChild(replyElement);
                            replyInput.remove(); // Remove reply input after sending
                            replyButton.remove(); // Remove reply button after sending
                        }
                    });

                    replyInputContainer.appendChild(replyInput);
                    replyInputContainer.appendChild(replyButton);

                    commentDiv.appendChild(replyInputContainer);
                });

                const editLink = document.createElement("span");
                editLink.textContent = "Edit";
                editLink.className = "edit-link";
                editLink.style.cursor = "pointer";

                editLink.addEventListener("click", () => {
                    const editInput = document.createElement("input");
                    editInput.type = "text";
                    editInput.value = commentText.textContent; // Set the current comment text
                    editInput.className = "your-comment"; // Add a class for styling

                    const saveButton = document.createElement("button");
                    saveButton.className = "send-button"; // Add the send-button class for styling
                    saveButton.innerHTML = `<img src="assets/img/send-comm.png" alt="Save" class="send-icon">`; // Use the same send icon for save

                    saveButton.addEventListener("click", () => {
                        if (editInput.value.trim()) {
                            commentText.textContent = editInput.value; // Update the comment text
                            editInput.remove(); // Remove the input field after saving
                            saveButton.remove(); // Remove the save button after saving
                        }
                    });

                    commentDiv.appendChild(editInput); // Append the edit input field
                    commentDiv.appendChild(saveButton); // Append the save button
                });

                const deleteLink = document.createElement("span");
                deleteLink.textContent = "Delete";
                deleteLink.className = "delete-link";
                deleteLink.style.cursor = "pointer";

                deleteLink.addEventListener("click", () => {
                    commentToDelete = commentDiv; // Store the comment to delete
                    deleteModal.style.display = "block"; // Show the modal
                });

                // Append links to the action links container
                actionLinksContainer.appendChild(replyLink);
                actionLinksContainer.appendChild(editLink);
                actionLinksContainer.appendChild(deleteLink);

                userDetails.appendChild(userName);
                userDetails.appendChild(timestamp);

                userInfo.appendChild(userImage);
                userInfo.appendChild(userDetails);

                commentDiv.appendChild(userInfo);
                commentDiv.appendChild(commentText);
                commentDiv.appendChild(actionLinksContainer); // Append action links container

                return commentDiv; // Return the constructed comment element
            }

            // Close the modal when the user clicks on <span> (x)
            document.querySelector(".close").addEventListener("click", () => {
                deleteModal.style.display = "none"; // Hide the modal
            });

            // Confirm delete action
            document.getElementById("confirmDelete").addEventListener("click", () => {
                if (commentToDelete) {
                    commentToDelete.remove(); // Remove the comment if confirmed
                    deleteModal.style.display = "none"; // Hide the modal
                }
            });

            // Cancel delete action
            document.getElementById("cancelDelete").addEventListener("click", () => {
                deleteModal.style.display = "none"; // Hide the modal
            });

            // Close modal if user clicks outside of the modal content
            window.addEventListener("click", (event) => {
                if (event.target == deleteModal) {
                    deleteModal.style.display = "none"; // Hide the modal
                }
            });
        </script>
    </div>
</body>
</html>

    
    
      </div>
      
    </section>
    
  

  </main><!-- End #main -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.umd.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>