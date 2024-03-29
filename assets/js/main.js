const loginform = document.getElementById("loginForm");
// console.log(loginform);
if (loginform) {
  loginform.addEventListener("submit", function (event) {
    event.preventDefault();
    const formData = new FormData(this);

    fetch("index.php?page=log", {
      method: "POST",
      body: formData
    })
      .then(response => response.text())
      .then(data => {
        console.log(data);

        if (data.trim() === 'valide') {
          console.log('Login successful');
          // Redirect to the home page or perform other actions
          window.location.href = "index.php?page=users";
        } else {
          console.log('Login failed');
          // Handle failed login (e.g., display an error message)
        }
      })
      .catch(error => {
        console.error('Error:', error);
        // Handle errors here
      });
  });
}

/* functions */ 
function deletePost(id){
  fetch('https://jsonplaceholder.typicode.com/posts/' + id, {
      method: 'DELETE', 
      headers: {
          'Content-Type': 'application/json',
      }
  })
  .then(res => {
      if(res.status == 200) {
          console.log(res.status);
          Swal.fire({
              position: "center",
              icon: "success",
              title: "Post deleted successfully",
              showConfirmButton: false,
              timer: 1500
            });
      }
  })
}

function deleteUser(id){
  fetch('https://jsonplaceholder.typicode.com/users/' + id, {
      method: 'DELETE', 
      headers: {
          'Content-Type': 'application/json',
      }
  })
  .then(res => {
      if(res.status == 200) {
          console.log(res.status);
          Swal.fire({
              position: "center",
              icon: "success",
              title: "User deleted successfully",
              showConfirmButton: false,
              timer: 1500
      });
      }
  })
}